<!DOCTYPE html>
<html>
<head>
  <title>Blogs List</title>
  <!--<link rel="stylesheet" type="text/css" href="a/css/bootstrap.min.css">-->
  <?= link_tag('a/css/bootstrap.min.css')?>

</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">BLOGS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
         <?= anchor('/', 'Home') ?>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Sign up</a>
      </li>
      <li class="nav-item">
        <?= anchor('login', 'Login') ?>
      </li>
    </ul>
    <?= form_open('user/search', ['class'=>'form-inline my-2 my-lg-0','role'=>'serach']); ?>
    <!--<form class="form-inline my-2 my-lg-0"> -->
      <input class="form-control mr-sm-2" name="query" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
   <?= form_close(); ?>
   <?= form_error('query',"<p class='navbar-text text-danger'>",'</p>'); ?>
  </div>
</nav>