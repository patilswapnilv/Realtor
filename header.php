<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Realtor: Blog</title>
<meta name="keywords" content="lead, conversion , sales, dig data, marketing">
<meta name="description" content="offer the right product to the right client, Crating value via predictive analytics for top B2B brands. A smarte link between marketing and sales.">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<?php wp_head(); ?>
</head>
<?php echo '<body class="'.join(' ', get_body_class()).'" data-spy="scroll" data-target=".navbar-fixed-top">'.PHP_EOL; ?>
<div class="top-header">
  <div class="head-one">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 one-link"> <div class="btn-group"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">English <i class="fa fa-angle-down" aria-hidden="true"></i></a>
        <ul class="dropdown-menu top-menu">
          <li><a href="javascript:;">English <img src="images/eng.png" width="16" height="16" alt="Eng" /></a></li>
          <li><a href="javascript:;">Spanish <img src="images/spain.png" width="16" height="12" alt="Spanis" /></a></li>
        </ul></div>
        <a href="javascript:;"><i class="fa fa-comments-o" aria-hidden="true"></i> Live Chat</a> <a href="javascript:;"><i class="fa fa-user" aria-hidden="true"></i> Sign In / Register</a> </div>
        <div class="col-sm-6">
          <ul class="social-media">
            <li><a href="javascript:;" class="fb"><i class="fa fa-facebook"></i></a></li>
            <li><a href="javascript:;" class="tt"><i class="fa fa-twitter"></i></a></li>
             <li><a href="javascript:;" class="pin"><i class="fa fa-pinterest-p"></i></a></li>
            <li><a href="javascript:;" class="gp"><i class="ei ei-social_googleplus"></i></a></li>
            <li><a href="javascript:;" class="tm"><i class="fa fa-tumblr"></i></a></li>
            <li><a href="javascript:;" class="stm"><i class="fa fa-stumbleupon"></i></a></li>
            <li><a href="javascript:;" class="wp"><i class="fa fa-wordpress"></i></a></li>
            <li><a href="javascript:;" class="ins"><i class="ei ei-social_instagram"></i></a></li>
            <li><a href="javascript:;" class="dbl"><i class="fa fa-dribbble"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="logo-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 logo"><a href="index.html" class="logo-a"><img src="images/logo.png" width="163" height="70"  class="img-responsive" alt="Realtor" /></a> </div>
        <div class="col-sm-9 text-right"> <span class="address-button"><i class="fa fa-map-marker" aria-hidden="true"></i>New York, NYC, 9012<br />
          Your Address Line</span> <span class="call-button"><i class="fa fa-phone" aria-hidden="true"></i>Questions? Call Us!<br />
          (808) 888 80 80</span> </div>
      </div>
    </div>
  </div>
  <div class="nav-outer">
    <div class="navbar_menu navbar-fixed-top">
      <div class="container">
        <div class="navbar-default">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle nav-right-button" data-toggle="collapse" data-target=".my_nav"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          </div>

           <?php
       
              $menu_args =array(

                'menu'  => 'main-menu',
                'menu_class'      => 'nav navbar-nav',
                'menu_id'      => 'popo-menu',
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'container' => 'nav',
                'container_class'  =>  'navbar-collapse collapse my_nav navbar-ex1-collapse navbar-left',
                'container_id'  =>  'my_nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker()

                );

               wp_nav_menu($menu_args); 
             ?>
          <div class="search-sec navbar-right">
            <input type="text" class="form-control" placeholder="Type" />
            <button type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>
</div>