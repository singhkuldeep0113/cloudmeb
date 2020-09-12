<?php
/**
 * Header
 */
  $image_path = get_template_directory_uri() . "/dist/images";

  global $post;
  $page_slug = $post->post_name;
  $is_blue = $page_slug === 'home' || $page_slug === 'partners';
?>
<nav class="navbar navbar-expand-lg navbar-light <?= $is_blue ? 'navbar-blue' : '' ?>" id="header">
  <div class="container">
    <a class="navbar-brand" href="<?php echo home_url();?>">
      <img src="<?=$image_path?>/logo.svg" alt="" class="logo"/>
      <img src="<?=$image_path?>/logo_sm.svg" alt="" class="logo-sm"/>
    </a>
    <a class="navbar-btn-sm" href="https://account.cloudmeb.com/login">
      Login
    </a>
    <a class="navbar-btn-sm sign_up" href="https://account.cloudmeb.com/register">
      Sign Up
    </a>
    <button class="navbar-toggler navbar-open" type="button">
      <img src="<?=$image_path?>/header/nav_icon.png" alt="">
    </button>

    <div class="collapse navbar-collapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">How it Works <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo home_url();?>/educations">Education</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo home_url();?>/resources">Resources</a>
        </li>
      </ul>
      <div class="navbar-phone">
       +1 800 355 4936
      </div>
      <a class="navbar-btn extra_classlogin" href="https://account.cloudmeb.com/login">
        Login
      </a>
      <a class="navbar-btn free_trial" href="https://account.cloudmeb.com/register">
        Start a Free Trial
      </a>
      <div class="dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="<?=$image_path?>/header/flag_french.png" alt="" />
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">
                <img src="<?=$image_path?>/header/flag_french.png" alt="" />  <label>English</label>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">
            <img src="<?=$image_path?>/header/flag_french.png" alt="" /> <label>French</label>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="menu-sm">
    <div class="top">
      <a class="navbar-brand" href="/">
        <img src="<?=$image_path?>/logo_white.svg" alt="" class="logo-sm"/>
      </a>
      <a class="navbar-btn-sm" href="https://account.cloudmeb.com/login">
        Login
      </a>
      <a class="navbar-btn-sm sign_up" href="https://account.cloudmeb.com/register">
        Sign Up
      </a>
      <button class="navbar-toggler navbar-close" type="button">
        <img src="<?=$image_path?>/header/times_icon.png" alt="">
      </button>
    </div>
    <ul class="content">
      <li><a href="#">How it Works</a></li>
      <li><a href="/educations">Education</a></li>
      <li><a href="/resources">Resources</a></li>
      <li><a href="#">Become a Partner</a></li>
    </ul>
    <div class="bottom">
      <div class="left">
        <p>marc@cloudmeb.com</p>
        <p>+1800 355 4936</p>
      </div>
      <div class="right">
        <a href="#">
          <img src="<?=$image_path?>/header/icon_in.svg" alt=""/>
        </a>
        <a href="#">
          <img src="<?=$image_path?>/header/icon_fb.svg" alt=""/>
        </a>
        <a href="#">
          <img src="<?=$image_path?>/header/icon_tw.svg" alt=""/>
        </a>
        <a href="#">
          <img src="<?=$image_path?>/header/icon_te.svg" alt=""/>
        </a>
      </div>
    </div>
  </div>
</nav>
