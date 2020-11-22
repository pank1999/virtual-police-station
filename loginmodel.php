<!-- Modal -->
<div class="modal fade" id="loginmodel" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header " style="background-color: rgb(221, 107, 13);">
         <!-- <button type="button" class="close" data-dismiss="modal">&times;</button>-->
          <h4 style="text-color:red;background-color: rgb(221, 107, 13); float:left;"><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body">
            <p>Don't have an account? <a href="index.php" style="color:black;">sign up</a></p>
            <form action="loginscript.php" method="POST">
            <div class="form-group">
              <label for="email"><span class="glyphicon glyphicon-user"></span> Email</label>
              <input type="email" class="form-control" name="email" placeholder="Email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,3}$"  required >
            </div>
            <div class="form-group">
              <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" name="password" placeholder="Password "   required >
            </div>
           
           <button type="submit" class="btn  btn-success"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer"style="background-color: rgb(221, 107, 13);" >
          <p><a href="forgot_pwd.php" style="color:black" > Forgot Password?</a></p>
        </div>
      </div>
    </div>
  </div> 