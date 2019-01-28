<!-- <body <?php body_class(); ?>> -->

    <a class="menu" style="position: fixed;">
        <span class="menu__line menu__line--top"></span>
        <span class="menu__line menu__line--center"></span>
        <span class="menu__line menu__line--bottom"></span>
    </a>
    <nav class="gnav">
        <div class="gnav__wrap">
            <ul class="gnav__menu" style="list-style:none;">
                <li class="gnav__menu__item"><a href="<?php echo get_permalink(107); ?>">CHAPTERS</a><span class="gnav__menu__item__detail">test</span></li>
                <li class="gnav__menu__item"><a href="<?php echo get_permalink(89); ?>">STORIES</a></li>
                <li class="gnav__menu__item"><a href="">STORE</a></li>
                <li class="gnav__menu__item"><a href="<?php echo home_url('/about')?>">ABOUT US</a></li>
            </ul>
        </div><!--gnav-wrap-->
    </nav>
    <div class="hero"></div> <!--Main visual -->

    <div class="sns-side">
        <div class="followUs">Follow Us</div>
        <!-- <hr class="border" style="color:red"/> -->
        <ul class="sns" style="list-style:none">
            <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube-square"></i></a></li>
        </ul>
    </div>

    <div class="menu-side">
        <ul class="menu-ul">
            <li class="about"><a href="<?php echo home_url('/about')?>">About us</a></li>
            <li class="contact"><a href="#">Contact</a></li>
        </ul>
    </div>


	