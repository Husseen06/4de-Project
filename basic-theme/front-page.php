<?php 
get_header();?>
<section class="page">

    <div class="container">



        <h1><?php the_title();?></h1>
        <?php the_field('page_title');?>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php the_content(); ?>

        <?php endwhile; else: endif; ?>




    </div>
    <section class="footer">
    <footer>
    <p><?php the_field('straat_naam', 'option'); ?></p>
    <p><?php the_field('telefoon_nummer', 'option'); ?></p>
    <p><?php the_field('email', 'option'); ?></p>
</footer>


</section>
