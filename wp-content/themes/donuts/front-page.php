<?php
/**
 * Template Name: Front Page Template
 */

 get_header();
 ?>
<main>
    <div class="main-screen">
    <?php if( get_field('title') ): ?>
    <h1><?php the_field('title'); ?></h1>
    <?php endif; ?>
        <img class="main-screen_donut" src="<?php echo get_template_directory_uri(); ?>/assets/images/donut.png" alt="donut" />
        <div class="video-container">
            <img class="frame" src="<?php echo get_template_directory_uri(); ?>/assets/images/subtract.png" alt="subtract" />
            <img class="farme-part" src="<?php echo get_template_directory_uri(); ?>/assets/images/subtract-part.png" alt="subtract" />
            <div class="video" id="video">
                <video>
                    <source src="<?php echo get_template_directory_uri(); ?>/assets/video/sample-5s.mp4" type="video/mp4">
                </video>
            </div>
        </div>
        <?php if( get_field('subtitle') ): ?>
        <div class="video-bottom"><?php the_field('subtitle'); ?></div>
        <?php endif; ?>
    </div>
    <div class="about">
        <?php if( get_field('title_about') ): ?>
        <h2><?php the_field('title_about'); ?></h2>
        <?php endif; ?>
        <?php if( get_field('content') ): ?>
            <?php the_field('content'); ?>
        <?php endif; ?>
    </div>
    <div class="main-donuts">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/main-donuts.png" alt="donuts">
    </div>
    <?php if( get_field('text') ): ?>
    <div class="begushchaya-stroka">
        <div id="marquee"><?php the_field('text'); ?></div>
    </div>
    <?php endif; ?>
</main>
<?php
 get_footer();