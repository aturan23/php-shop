<!DOCTYPE html>
<html lang="ru">

<head>

  <meta charset="utf-8">

  <title>Shopping anywhere</title>
  <meta name="description" content="">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <meta property="og:image" content="path/to/image.jpg">
  <link rel="shortcut icon" href="/template/img/favicon/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="/template/img/favicon/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/template/img/favicon/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/template/img/favicon/apple-touch-icon-114x114.png">
  <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC" rel="stylesheet">

  <!-- Chrome, Firefox OS and Opera -->
  <meta name="theme-color" content="#000">
  <!-- Windows Phone -->
  <meta name="msapplication-navbutton-color" content="#000">
  <!-- iOS Safari -->
  <meta name="apple-mobile-web-app-status-bar-style" content="#000">

  <style>body { overflow-x: hidden; }

    html { background-color: #fff; }</style>

</head>

<body>

<section class="header">
  <div class="navbar container">
    <a href="/" class="logo">cstore</a>

    <nav class="site-nav">
      <ul>
        <li><a href="/"><i class="fa fa-home site-nav-icon"></i>home</a></li>
        <li><a href="/catalog/"><i class="fa fa-info site-nav-icon"></i>catalog</a></li>
        <li><a class="dropdown cursor-p"><i class="fa fa-pencil site-nav-icon"></i>pages</a>
          <ul class="">
            <li><a href="/about/">about us</a></li>
            <li><a href="/contact/">contact</a></li>
            <li><a href="/error/">404</a></li>
          </ul>
        </li>
        <li><a class="dropdown cursor-p"><i class="fa fa-usd site-nav-icon"></i>categories</a>
          <ul class="">
            <?php foreach($categories as $categoryItem): ?>
              <li><a href="/category/<?php echo $categoryItem['id'] ?>"><?php echo $categoryItem['name']; ?></a></li>
            <?php endforeach; ?>
          </ul>
        </li>
        <li><a href="/contact/"><i class="fa fa-envelope site-nav-icon"></i>contact</a></li>
        <li class="form">
          <form class="form-search search-form" action="">
            <input id="search-input" class="form-search-input" type="text" name="search" placeholder="Search...">
            <span id="search-trigger" class="form-search-submit"><i class="fa fa-search"></i></span>
          </form>
        </li>
      </ul>
    </nav>

    <div class="menu-toggle">
      <div class="hamburger"></div>
    </div>
    <div class="form-user">
      <ul>
        <li><a href="wishlist.html"><i class="fa fa-heart-o" aria-hidden="true"></i><span id="cart-count">0</span></a></li>
        <li><a href="/cart/"><i class="fa fa-shopping-bag" aria-hidden="true"></i><span> <?php echo Cart::countItems(); ?></span></a></li>
        <li>
          <?php if(User::isGuest()): ?>
            <a href="/user/register">sign up</a>/<a href="/user/login">sign in</a>
          <?php else: ?>
            <a href="/cabinet/">My account</a>
            <a href="/user/logout/">Exit</a>
          <?php endif; ?>
        </li>
      </ul>
    </div>
  </div>
</section>