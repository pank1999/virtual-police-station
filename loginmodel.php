<!-- Modal -->
<div class="modal fade" id="loginmodel" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header " style="background-color: rgb(221, 107, 13);">
         <!-- <button type="button" class="close" data-dismiss="modal">&times;</button>-->
           <h4 style="text-color:red;background-color: rgb(221, 107, 13); float:left;"> <i class="bi bi-lock-fill"></i> Login</h4> <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            
            <form action="loginscript.php" method="POST">
            <div class="form-group">
              <label for="email"><span class="glyphicon glyphicon-user"></span>Aadhar Id</label>
              <input type="text" class="form-control" name="Aadhar" placeholder="Aadhar Id" pattern=".{12}"  required >
            </div>
            <div class="form-group">
              <label for="password"><span></span>Password</label>
              <input type="password" class="form-control" name="password" placeholder="Password"   required >
            </div>
           
           <button type="submit" class="btn  btn-success"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
          <p>Don't have an account? <a href="#" data-toggle="modal" data-target="#signupmodel" style="color:blue;">sign up</a></p>
        </div>
        <div class="modal-footer"style="background-color: rgb(221, 107, 13);" >
          <p><a href="forgot_pwd.php" style="color:black" > Forgot Password?</a></p>
        </div>
      </div>
    </div>
  </div> 