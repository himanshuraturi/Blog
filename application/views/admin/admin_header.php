<!DOCTYPE html>
<html>
<head>
  <title>Admin Panel</title>
  <!--<link rel="stylesheet" type="text/css" href="a/css/bootstrap.min.css">-->
  <?= link_tag('a/css/bootstrap.min.css')?>

</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">PANEL</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('login/logout') ?>">Logout</a>
      </li>
    </ul>
  </div>
</nav>