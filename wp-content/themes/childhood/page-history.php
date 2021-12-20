<?php
/*
Template Name: Наша история
*/
?>

<?php
    get_header();
?>


<div class="aboutus" id="aboutus">
            <div class="container">
                <h1 class="title"><?php the_field('history_title');?></h1>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="subtitle">
                        <?php the_field('subtitle1');?>
                           
                        </div>
                        <div class="aboutus__text">
                        <?php the_field('subtext1');?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="aboutus__img" src="<?php the_field('subimg1');?>" alt="мир детства">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <img class="aboutus__img" src="<?php the_field('subimg2');?>" alt="мир детства">
                    </div>
                    <div class="col-lg-6">
                        <div class="subtitle">
                        <?php the_field('subtitle2');?>
                            
                        </div>
                        <div class="aboutus__text">
                        <?php the_field('subtext2');?>
                            
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="subtitle">
                        <?php the_field('subtitle3');?>
                            
                        </div>
                        <div class="aboutus__text">
                        <?php the_field('subtext3');?>
                            
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="aboutus__img" src="<?php the_field('subimg3');?>" alt="мир детства">
                    </div>
                </div>
            </div>
        </div>
        <?php
    get_footer();
?>