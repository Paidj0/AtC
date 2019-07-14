<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!doctype html>
<html lang="en">
<head>
  <title>Anti Copas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  .adsense {
  	width: 160px;
    height: 600px;
    background: #aaa;
  }
  </style>
</head>

<!-- Warna Background Body -->
<body style="background: #454d54;">

<!-- bg-dark navbar-dark -->
<!-- Warna Header -->
<nav class="navbar navbar-expand-lg" style="background: green;">

  <!-- Brand -->
  <div class="container">
  <a class="navbar-brand" href="#">Anti Copas</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
  	<!-- Links -->
  	<ul class="navbar-nav">
    <!-- <li class="nav-item">
      <a class="nav-link" href="#">Tutorial</a>
    </li> -->

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Tutorial
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Pascal</a>
      </div>
    </li>
  </ul>
  </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row">

    <!-- Warna Menu Disamping Kiri -->
    <div class="col-sm-2" style="background: #22262a;">
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link" href="#" style="color: white; font-size: 18px; text-align: center;">Pascal</a>
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8" align="center" style="color: white; margin-top:30px;">
      <h2>TITLE HEADING</h2>
      <div class="fakeimg">Fake Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      <br>
      <div class="fakeimg">Fake Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>

    <!-- Adsense -->
    <div class="col-sm-2" align="center" style="border: 1px solid; color: white; ">
      <h2 align="center">Adsense</h2>
      <div class="adsense">Fake Image</div>
      <br>
      <h2 align="center">Adsense</h2>
      <div class="adsense">Fake Image</div>
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Footer</p>
</div>

</body>
</html>