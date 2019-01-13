<?php
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'id' => 'sidebar-1',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h2 class="widget_title">',
		'after_title' => '</h2>',
	));
}

// move jquery to the bottom of the page
if (!function_exists('pt_jquery_bottom')):
    function pt_jquery_bottom() {
        wp_dequeue_script('jquery');
        wp_dequeue_script('jquery-core');
        wp_dequeue_script('jquery-migrate');
        wp_enqueue_script('jquery', false, array(), false, true);
        wp_enqueue_script('jquery-core', false, array(), false, true);
wp_enqueue_script('jquery-migrate', false, array(), false, true);
wp_enqueue_script('scrollify', 'https://cdn.jsdelivr.net/npm/jquery-scrollify@1.0.17/jquery.scrollify.min.js', array(), false, true);
wp_enqueue_script('tweenmax', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js', array(), false, true);
wp_enqueue_script('flickity', 'https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js');


}
endif;
add_action('wp_enqueue_scripts', 'pt_jquery_bottom');

//メインクエリーをカスタマイズ
add_action( 'pre_get_posts', 'foo_modify_main_queries' );
function foo_modify_main_queries ( $query ) {
  if ( ! is_admin() && $query->is_main_query() ) { // 管理画面以外かつメインクエリーを対象とする
    if ( $query->is_home() ) {
      $query->set( 'post_type', array('post','chaptersmain')); // 投稿とカスタム投稿（blog）を含める
    }
  }
}


//Twitter, Facebook項目の追加
function update_profile_fields( $contactmethods ) {
    //項目の削除
    unset($contactmethods['aim']);
    unset($contactmethods['jabber']);
    unset($contactmethods['yim']);
    //項目の追加
    $contactmethods['twitter'] = 'Twitter';
    $contactmethods['facebook'] = 'Facebook';
     
    return $contactmethods;
}
add_filter('user_contactmethods','update_profile_fields',10,1);
//自己紹介欄追加
add_action( 'edit_user_profile', 'add_profile_fields' );
function add_profile_fields( $user ) {
?>
    <h3>追加した項目</h3>
    <table class="form-table">
        <tr>
            <th>自己紹介</th>
            <td>
                <textarea name="ex_profile" rows="10"><?php echo esc_attr( get_the_author_meta( 'ex_profile', $user->ID ) ); ?></textarea><br />
                <span class="description">ここに自己紹介文を入力してください。</span>
            </td>
        </tr>
    </table>
<?php
}
//更新ボタンの追加
add_action( 'edit_user_profile_update', 'save_profile_fields' );
function save_profile_fields( $user_id ) {
    if ( !current_user_can( 'edit_user', $user_id ) ) return false;
    update_usermeta( $user_id, 'ex_profile', $_POST['ex_profile'] );
}
//ログインした後ダッシュボードに行かない設定
function mts_check_login() {
	global $current_user;
	get_currentuserinfo();
	extract($current_user->wp_capabilities);
	if ($subscriber) {
		wp_redirect(get_bloginfo('url'));
	}
}
add_action('admin_init', 'mts_check_login');
//ログインチェック
add_action( 'template_redirect', 'login_init' );
 
function login_init() {
    if ( ! is_page( 'login' ) ) {
        return;
    }
 
    global $email, $error;
    $email = "";
    $error = "";
 
    if ( isset( $_POST['login_nonce'] ) ) {
        //nonceチェック
        if ( ! wp_verify_nonce( $_POST['login_nonce'], 'login') ) {
            $error .= '不正な遷移です';
        } else {
            //入力チェック
            if ( ! empty( $_POST['user_email'] ) ) {
                $email = $_POST['user_email'];
            } else {
                $error .= "メールアドレスを入力してください";
            }
            if ( ! empty( $_POST['user_pass'] ) ) {
                $password = $_POST['user_pass'];
            } else {
                $error .= "パスワードを入力してください";
            }
        }
 
        if ( ! $error ) {
            //ユーザー取得
            $user = get_user_by( 'email', $email );
            if ( false === $user ) {
                $error .= "メールアドレスが間違っています。";
            } else {
                //ログイン実行
                $creds = array();
                $creds['user_login'] = $user->data->user_login;
                $creds['user_password'] = $password;
                $creds['remember'] = true;
                $user = wp_signon( $creds, false );
                if ( is_wp_error( $user ) ) {
                    if ( array_key_exists( 'incorrect_password', $user->errors ) ) {
                        $error .= "パスワードが間違っています。";
                    } else {
                        $error .= "ログインに失敗しました。";
                    }
                } else {
                    //リダイレクト
                    wp_safe_redirect( home_url() );
                }
            }
        }
    }
}
//ツールバー表示、非表示
add_filter('show_admin_bar', '__return_false');

//リンク追加
function my_excerpt_more($post) {
    return '<a href="'. get_permalink($post->ID) . '">' . '…続きを読む' . '</a>';
}
add_filter('excerpt_more', 'my_excerpt_more');
    