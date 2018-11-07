<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Shavindi Pathirana</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php echo base_url(); ?>public/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo base_url(); ?>public/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url(); ?>public/img/background1.jpg">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>public/img/background2.jpg">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>public/img/background3.jpg">
  
</head>

<style>
.parallax-container {
  height: 950px;
}</style>

<body>

<!-- navbar -->
  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Shavindi Pathirana</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#introduction">About</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div>
  </nav>

<!-- first image -->


<div id="index-banner" class="esponsive-img parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center white-text text-lighten-2">Parallax Templates</h1>
        <div class="row center">
          <h5 class="header col s12 light">Because programming is not just coding.</h5>
        </div>
        <!-- <div class="row center">
          <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Get Started</a>
        </div> -->
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="<?php echo base_url(); ?>public/img/qw.jpg" alt="Unsplashed background img 1"></div>
  </div>


<!-- about -->

<div id="introduction" class="container section scrollspy">
  <div class="section" style="text-align: center;">
    <h5 style="text-align: center; font-size: 46px; margin-top: 25px;">About</h5>
    <div class="col s2">
      <img src="<?php echo base_url(); ?>public/img/Shavindi.jpg" style="margin-top: 32px; margin-bottom: 32px; width:10em; height:10em;" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
    </div>
      <p class="">I am Shavindi Pathirana a 22 year old girl from Gampaha, Sri Lanka currently working as a Software Engineering intern in a reputed company in Sri Lanka. My love for software engineering grew in since the days I played computer games when I was a little kid. Going back to my school life, I got 9A s in my G.C.E. Ordinary level Examination and my life changed in many ways after I got through my G.C.E. Advanced Level Examination. I did my A/L exam in 2014 followed by Geography, statistics and mthematics where I was categorized into the Arts Stream. I was abled to get 3 A s being the first in the island in Arts. After that I was selected to the University of Moratuwa to follow the course BSc.IT & Management.</p>
      <p class="">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
  </div>
</div>

<!-- image 2 -->

<div id="index-banner" class="esponsive-img parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">Parallax Template</h1>
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
        <div class="row center">
          <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Get Started</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="<?php echo base_url(); ?>public/img/background2.jpg" alt="Unsplashed background img 1"></div>
  </div>


<!-- contact us -->

<div id="contact" class="container section scrollspy">
  <div class="section" style="text-align: center;">
    <h5 style="text-align: center; font-size: 46px; margin-top: 25px;">Contact Us</h5>
    
    <form class="col s12" method="post" action="<?php echo site_url('Welcome/sendMail'); ?>">
    <div class="row">
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="Placeholder" id="first_name" name="first_name" type="text" class="validate">
          <label for="first_name">Name</label>
        </div>
      </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" name="email" class="validate">
          <label for="email">Email</label>
        </div>        
      </div>
      <button class="btn waves-effect waves-light" type="submit" name="submit">Submit
    <i class="material-icons right">send</i>
  </button>

    </form>
  </div>
  </div>
</div>



  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="<?php echo base_url(); ?>public/js/materialize.js"></script>
  <script src="<?php echo base_url(); ?>public/js/init.js"></script>


  </body>
</html>
