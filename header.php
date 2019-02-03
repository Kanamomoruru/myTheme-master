<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
        <title><?php wp_title( ' | ', true, 'right' ); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <?php wp_head(); ?>
        <!-- <script src='//code.jquery.com/jquery-1.12.4.min.js'>  -->
	</head>
    <body>
    <div id="loadingAnim" class="loadingAnim">
        <i class="loadingAnim_line"></i>
    </div>
        
    </body>
</html>