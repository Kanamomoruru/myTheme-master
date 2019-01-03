<?php
/*
Template Name: aboutUs
*/
get_header();
 ?>

<?php get_template_part('navbar'); ?>
<div class="toppage">
    <!-- <div class="topLink"> -->
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="topLink">TOP</a>
	<!-- </div> -->
    <div class="pic_nav"> 
    <img class="imgOfAboutUs" src="<?php echo get_template_directory_uri(); ?>/images/Rectangle.png">
    <!-- <div class="whiteBlockOnTheImg"></div> -->
    <h3 class="ourMissionSentence">Our mission is to exploit the potential of young talents.</h3>
    <div class="redBlockOfMission"></div>
    <div class="navInAbout">
        <li style="background-color: #ff0000;" class="navOfAboutUs"><a href="#">Mission</a></li>
        <li style="background-color: #ec1817;" class="navOfAboutUs"><a href="#">Team</a></li>
        <li style="background-color: #d82626;" class="navOfAboutUs"><a href="#">Story</a></li>
        <li style="background-color: #c52626;" class="navOfAboutUs"><a href="#">Press</a></li>
        <li style="background-color: #b22424; padding-right: 33vw;" class="navOfAboutUs"><a href="#">Stats</a></li>
    </div>
    <!-- <div class="redBlockOfStats"></div> -->
</div>


<div class="ourMission">
    <div class="mb-h1">
        <div class="h1_ourMission">Our mission.</div>
        <div class="background_m">M</div> 
    </div>
    <div class="missionImg_div">
        <img class="missionImg" src="<?php echo get_template_directory_uri(); ?>/images/mission.png">  
        T.ASABA
        <br>
        FOUNDER
    </div>
    <div class="ourMission-p">
        <p>
            SPIN is a crowdfunding service devoted to support NGO/NPO activities. 
            Our main goal is to connect NGO activists and users from all around the world and create
            success stories which will inspire all humanity to take action in order to offer some solutions to certain social issues.
       </p>
    </div>  
</div>

</div>

<div class="theTeam">
    <div class="tb-h1"> 
        <div class="h1_theTeam">The team</div>
        <div class="background_2">02</div> 
    </div>
    <img class="theTeamImg" src="<?php echo get_template_directory_uri(); ?>/images/elephant.png"> 
    <div class="meetTheTeam"> 
    <a href="#" class="meetTheTeamBtn">Meet the team</a>
    <a href="#" class="joinUs">Join us</a>
    </div>  
    <div class="theTeam-p">
        <p>
            SPIN is a crowdfunding service devoted to support NGO/NPO activities. Our main goal is to connect NGO activists and users from all around the world and create success stories which will inspire all humanity to take action in order to offer some solutions to certain social issues.
            However, in SPIN, what we're aiming to do is a little bit different from so-called donation-based crowd funding services in terms of our concept of supporting the world. We're not aiming to raise funds for a single project, but we want to create a cycle that spins for making our world a better place.
            In order to achieve this goal, we are focusing on talents, for example, a child with a great potential in sports, science or any other field, and support his/her education by raising funds and awareness in order to create a local Hero, who will eventually turn back to his/her roots and create new stories. 
            We believe that social change is the key to the solution and sports is a very effective instrument for that.
        </p>
      <div class="team_members">
        <div class="team_members1div">
            <img class="member1" src="<?php echo get_template_directory_uri(); ?>/images/mission.png">
            <span class="name">TOSHI A.</span>
            <span class="occupation">FOUNDER</span>
        </div>
        <div class="team_members2div">
            <img class="member2" src="<?php echo get_template_directory_uri(); ?>/images/engineer.png">
            <span class="name">MET CF</span>
            <span class="occupation">DESIGNER</span>
        </div>
        <div class="team_members3div">
            <img class="member3" src="<?php echo get_template_directory_uri(); ?>/images/engineer.png">
            <span class="name">AARON M.</span>
            <span class="occupation">ENGINEER</span>
        </div>
    </div>
    
</div>     
    
</div>
<div class="ourHistory">
    <div class="ourHistory-p">
        <p>in SPIN, what we're aiming to do is a little bit different from so-called donation-based crowd funding services in terms of our concept of supporting the world. 
            We're not aiming to raise funds for a single project, but we want to create a cycle that spins for making our world a better place. In order to achieve this goal,
            we are focusing on talents, for example, a child with a great potential in sports, science or any other field, 
            and support his/her education by raising funds and awareness in order to create a local Hero, who will eventually turn back to his/her roots and create new stories. 
            We believe that social change is the key to the solution and sports is a very effective instrument for that.
        </p>
    </div> 
    <div class="ourHistory_rightside">
        <div class="hb-h1">
            <div class="h1_ourHistory">Our history.</div>
            <div class="background_h">H</div> 
        </div>
        <img class="ourHistoryImg" src="<?php echo get_template_directory_uri(); ?>/images/ourHistory.png">
    </div>

</div>

<div class="press">
    <div class="press_middle">
        <div class="pb-h1">
            <div class="h1_press">Press</div>
            <div class="background_4">04</div>  
        </div>
        <img class="pressImg" src="<?php echo get_template_directory_uri(); ?>/images/press.png">  
   
        <div class="press-p">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting,
                remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC,
                making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words,
                consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.
                Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC.
                This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..",
                comes from a line in section 1.10.32.
            </p>
        </div>
    </div>
</div>
<?php 
get_footer();