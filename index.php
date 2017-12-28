<?php get_header(); ?>
<div class="col col-md-8 blog-main">
    
    <?php 
    if ( have_posts() ) { 
        while ( have_posts() ) : the_post();
    ?>

<div class="card bg-light text-dark blog-post">
<?php if ( has_post_thumbnail() ) {
    echo '<a href="'.get_the_permalink().'">';
    echo '<img class="card-img-top" src="'.get_the_post_thumbnail_url().'" alt="Card image cap" /></a>';
}
else
{

}
?>
 
  <div class="card-body">
    <h4 class="card-title"><a class="text-dark" href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>
    <footer class="blockquote-footer"><?php the_date(); ?> <cite title="Source Title">by <?php the_author(); ?></cite></footer>
    <p class="card-text"><?php the_content(); ?></p>
  </div>
</div>
<br />
    <!-- /.blog-post -->
    <?php
        endwhile;
    } 
    ?>

    <nav>
        <ul class="pager">
            <li><?php next_posts_link('<i class="fa fa-arrow-left" aria-hidden="true"></i> Previous'); ?></li>
            <li><?php previous_posts_link('Next <i class="fa fa-arrow-right" aria-hidden="true"></i>'); ?></li>
        </ul>
    </nav>

</div><!-- /.blog-main -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>