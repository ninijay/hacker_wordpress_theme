<?php get_header(); ?>
<div class="col col-md-9 blog-main">
    
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
    <h4 class="card-title text-mono"><a class="text-dark" href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>
    <footer class="blockquote-footer"><?php the_date(); ?> <cite title="Source Title">by <?php the_author(); ?></cite></footer>
    <p class="card-text"><?php the_content(); ?></p>
  </div>
</div>
<br />
<h5 class="text-mono">Categories</h5>
<div class="btn-group">
    <?php 
        $categories = get_the_category();
        $separator = ' ';
        $output = '';
        if ( ! empty( $categories ) ) {
            foreach( $categories as $category ) {
                $output .= '<a class="btn btn-success text-mono" href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
            }
            echo trim( $output, $separator );
        }
    ?>
</div>
<div class="navigation">
<br />
<h5 class="text-mono">More</h5>
<div class="row">   
<?php $prev = get_permalink(get_adjacent_post(false,'',false));
if (!empty($prev)) {
    echo '<div class="col">';
    ?>
    <a href="<?php echo $prev ?>" class="btn btn-success btn-block">Previous Post</a>
    <?php
    echo '</div>';
}
?>
<?php $next = get_permalink(get_adjacent_post(false,'',true));
if (!empty($next)) {
    echo '<div class="col">';
    ?>
    <a href="<?php echo $next ?>" class="btn btn-success btn-block">Next Post</a>
    <?php
    echo '</div>';
}
?>
</div>
</div> <!-- end navigation -->
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