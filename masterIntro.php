<section class="display-scroll">
    <div class="masterIntro section-content">
       <!-- <div class="mentor_list  active">   -->
        <?php
            $args = array (
                'post_type' => 'mentor',
                'post_per_page' => '3',
            );
            $mentors = get_posts($args);  //defined chapters
            foreach($mentors as $mentor): //Loop
            //To get data from chapter
            $mentor_pic = get_field('mentor_pic', $mentor);
            $mentor_name = get_field('mentor_name', $mentor); 
            $mentor_purpose = get_field('mentor_purpose', $mentor);
        ?>
  <?php endforeach?> 
        <!-- test -->
        
        <!-- <div class="slide active">
            <div class="card">
                <div class="card__img">
                    <img src="<?php //echo $mentor_pic['url']; ?>" alt="<?php //echo $mentor_pic['alt']; ?>" class="mentor_img" />
                </div>
                <div class="card__content">
                    <p class="card__content-theme"><?php //echo $mentor_name; ?></p>
                    <h2 class="card__content-header"><?php //echo $mentor_purpose; ?></h2>
                </div>
            </div>
        </div> -->
      
        
<div class="slide active">
    <div class="card">
        
        <div class="card__content">
            <p class="card__content-theme"></p>
            <div class="card__content-header">SHISONS</div>
            <div class="card__content-paragraph">
                <img class="shisonImg" src="">
                <div class="shison_name_location">
                    <p class="shisonName"></p> 
                    <p class="shisonLocation"></p> 
                </div>
            </div>
        </div>
        <div class="card__img" id="img01"> 
            <img class="mentorImg" src="">
        </div>
    </div>
</div>
<div class="slide">
    <div class="card">
       
        <div class="card__content">
            <p class="card__content-theme"></p>
            <div class="card__content-header">SHISONS</div>
            <div class="card__content-paragraph">
            <img class="shisonImg" src="">
                <div class="shison_name_location">
                    <p class="shisonName"></p> 
                    <p class="shisonLocation"></p> 
                </div>
            </div>
        </div>
        <div class="card__img" id="img02">
            <img class="mentorImg" src="">
        </div>
    </div>
</div>
<div class="slide">
    <div class="card">
        
        <div class="card__content">
            <p class="card__content-theme"></p>
            <div class="card__content-header">SHISONS</div>
            <div class="card__content-paragraph">
            <img class="shisonImg" src="">
                <div class="shison_name_location">
                    <p class="shisonName"></p> 
                    <p class="shisonLocation"></p> 
                </div>
            </div>
        </div>
        <div class="card__img" id="img03">
            <img class="mentorImg" src="">
        </div>
    </div>
</div>

<div class="prevnext">
    <button class="prevnext-button" id="prev"></button>
    <button class="prevnext-button" id="next"> </button>
</div>

        <div class="mentor_right">
            <div class="background_number6">06</div>
            <div class="mentor_title">
                <p class="mentorM">M</p>
                <p class="mentor">ENTORS</p>
                <p class="mentor_small">Connecting the dots, writing success stories.</p>
                <div class="mentor_sentence">
                            An author is the creator or originator of any written work such as a book or play, and is thus also a writer.
                            More broadly defined, an author is "the person who originated or gave existence to anything" and whose authorship determines responsibility for what was created Typically, 
                            the first owner of a copyright is the person who created the work i.e. the author. If more than one person created the work, 
                            then a case of joint authorship can be made provided some criteria are met. In the copyright laws of various jurisdictions, 
                            there is a necessity for little flexibility regarding what constitutes authorship. The United States Copyright Office, for example, 
                            defines copyright as "a form of protection provided by the laws of the United States (title 17, U.S. Code) to authors of "original works of authorship".
                            [2] Holding the title of "author" over any "literary, dramatic, musical, artistic, [or] certain other intellectual works" gives rights to this person, the owner of the copyright, 
                            especially the exclusive right to engage in or authorize any production or distribution of their work. Any person or entity wishing to use intellectual property held under copyright must receive permission from the copyright holder to use this work,
                            and often will be asked to pay for the use of copyrighted material. After a fixed amount of time, the copyright expires on intellectual work and it enters the public domain, where it can be used without limit. 
                </div>
            </div>
        </div>
        


    </div>

</section>