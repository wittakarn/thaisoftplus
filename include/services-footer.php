<?php
ini_set('display_errors', 1); 
error_reporting(E_ALL);
require_once("../config.php");
?>
<!-- Call to Action -->
<aside class="call-to-action bg-primary">
<div class="container">
  <div class="row">
    <div class="col-lg-12 text-center">
      <!--
    <h3>The buttons below are impossible to resist.</h3>
    <a href="#" class="btn btn-lg btn-light">Click Me!</a>
    <a href="#" class="btn btn-lg btn-dark">Look at Me!</a>
  -->
    </div>
  </div>
</div>
</aside>

<!-- Footer -->
<footer>
<section id="contact" class="contact">
  <?php
    include DOCUMENT_ROOT.'include/index-contact.php';
  ?>
</footer>