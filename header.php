<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.paddle.com/paddle/assets/css/animate.css" media="all">
    <link rel="stylesheet" type="text/css" href="https://cdn.paddle.com/paddle/assets/css/paddle.css" media="all">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/font-hack/2.020/css/hack.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
    
</head>

<body <?php body_class(); ?>>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary ht-tm-element">
<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<a class="navbar-brand" href="<?php echo get_home_url(); ?>"><?php echo get_bloginfo('title'); ?></a>

<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
  <?php /* Primary navigation */
wp_nav_menu( array(
  'menu' => 'top_menu',
  'depth' => 2,
  'container' => false,
  'menu_class' => 'navbar-nav mr-auto mt-2 mt-md-0',
  //Process nav menu using our custom nav walker
  'walker' => new wp_bootstrap_navwalker())
);
?>
</div>
</nav>
<div class="blog-header">
<div id="ht-tm-jumbotron">
  <div class="jumbotron bg-transparent mb-0 ht-tm-notrounded">
  <div class="container">
    <div class="ht-tm-header">
      <div class="row">
        <div class="col-xl-6">
          <h1 class="display-2"><?php echo get_tuned_title(); ?></span></h1>
          <div class="lead mb-3 text-mono text-success"><?php echo get_bloginfo('description'); ?></div>
          <div class="text-darkgrey text-mono my-2">A Blog written by Zanidd         
        </div> 
      </div>
    </div>
  </div>
</div>
</div>
</div>
<div class="container">
    <div class="row">