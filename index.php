<?php get_header(); ?>
<div class="col-sm-8 blog-main">
    
    <?php 
    if ( have_posts() ) { 
        while ( have_posts() ) : the_post();
    ?>

    <h2><a class="text-success" href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
    
    <footer class="blockquote-footer"><?php the_date(); ?> <cite title="Source Title">by <?php the_author(); ?></cite></footer>
    <div class="blog-post ht-tm-element card mb-3 text-left bg-success text-white">
        <div class="card-body">
            <?php the_excerpt(); ?>
        </div>
    </div>
    <a href="<?php the_permalink();?>" class="ht-tm-element btn btn-primary"><span class="fa fa-plus mr-2"></span>Read More</a>
    <!-- /.blog-post -->
    <?php
        endwhile;
    } 
    ?>

    <nav>
        <ul class="pager">
            <li><?php next_posts_link('Previous'); ?></li>
            <li><?php previous_posts_link('Next'); ?></li>
        </ul>
    </nav>

</div><!-- /.blog-main -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>