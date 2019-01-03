<footer class="page-footer">
		<div class="wrap">
   			<div class="search">
      			<input type="text" class="searchTerm" placeholder="What are you looking for?">
      			<button type="submit" class="searchButton">
        			<i class="fa fa-search"></i>
     			</button>
   			</div>
		</div>

		<div class="translate">
			<a class="en" href="#">EN</a>
		    <a class="jp" href="#">JP</a>
		</div>

		<div class="socialMedia">
			<p>social media</p>
			<div class="socialMedia_border"></div>
			<ul class="sns" style="list-style:none">
            <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
			<li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
			<li><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube-square"></i></a></li>
		</ul>
		
		<div class="topLink">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">< TOP</a>
		</div>
	

		</div>
</footer>
<?php wp_footer(); ?>
</body>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/main.js"></script>
</html>