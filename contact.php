<?php
  include('./mainInclude/header.php');
  ?>

<div class="container mt-4">
    <h2 class="text-center mb-4">Contact Us</h2>
    <div class="row">
      <!-- 1st col -->
      <div class="col-md-8">
        <form action="" method="post">
          <input type="text" class="form-control" name="name" placeholder="Name"><br>
          <input type="text" class="form-control" name="subject" placeholder="Subject"><br>
          <input type="email" class="form-control" name="email" placeholder="Email"><br>
          <textarea name="message" placeholder="How can we help you?" cols="30" rows="10" class="form-control"></textarea><br>
          <input class="btn btn-primary" type="submit" value="Send" name="submit"><br>
        </form>
      </div>
      
    </div>
  </div>
  