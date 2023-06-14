<?php
  include('./mainInclude/header.php');

  ?>
  <div class="container-fluid">
    <img src ="./images/1.jpg" alt="" style="height:500px; width:100%; object-fit:cover; box-shadow:10px">
  </div>
  <div class="container">
     <h1 class = "text-center my-4">Payment Status</h1>
     <form method="post" action="">
        <div class="row form-group">
            <label class="offset-sm-3 col-form-label">Order ID:</label>
            <div>
                <input type="text" class="form-control mx-3">
            </div>
            <div>
                <button type="text" class="btn btn-primary mx-6" value="View">View </button>
            </div>
        </div>
     </form>
  </div>
  <?php
  include('./contact.php');
  ?>

