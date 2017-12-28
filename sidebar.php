<div class="col col-md-3 col-offset-1 blog-sidebar" style="height:100%">

    <?php if ( is_active_sidebar( 'home_right_1' ) ) { ?>
        <div class="card mb-3 text-left bg-dark text-light">
        <div class="card-body">
            <div class="row align-items-center justify-content-center">
                <?php echo get_avatar(get_the_author_meta( 'ID' ), 126); ?>
            </div>
            <br />
            <div class="row align-items-center justify-content-center">
                <?php if ( function_exists( 'jetpack_social_menu' ) ) jetpack_social_menu(); ?>
            </div>
          <?php dynamic_sidebar( 'home_right_1' ); ?>
        </div>
      </div>
      <?php
         
        } ?>
</div><!-- /.blog-sidebar -->