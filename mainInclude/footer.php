<footer class="container-fluid bg-dark text-center p-2">
    <small class="text-white"> Copyright &copy; 2019 || Designed by E-Learning ||<a href="#" data-toggle="modal" data-target="#adminform" >Admin Login</a></small>
  </footer>
 <!-- registeration form -->
  <!-- Modal -->
  <?php
include('studentregisteration.php');
?>
  <!-- student login form -->
  <div class="modal fade" id="loginform" tabindex="-1" role="dialog" aria-labelledby="loginform" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="loginform">Student Login
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="exampleInputEmail2">Email address</label>
              <input type="email" class="form-control" name="exampleInputEmail2" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="Enter email" required>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword2">Password</label>
              <input type="password" class="form-control" name="exampleInputPassword2" id="exampleInputPassword2" placeholder="Password" required>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <small id="statuslogmsg"> </small>
          <button type="button" class="btn btn-primary " id="signin">Sign in</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
<!-- admin login form -->
  <div class="modal fade" id="adminform" tabindex="-1" role="dialog" aria-labelledby="adminform" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="adminform">Admin Login
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="exampleInputEmail3">Email address</label>
              <input type="email" class="form-control" name="exampleInputEmail3" id="exampleInputEmail3" aria-describedby="emailHelp" placeholder="Enter email" required>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword3">Password</label>
              <input type="password" class="form-control" name="exampleInputPassword3" id="exampleInputPassword3" placeholder="Password" required>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" id="adminbtn">Sign in</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/all.min.js"></script>
  <script src="js/ajaxrequest.js"></script>
</body>
</html>