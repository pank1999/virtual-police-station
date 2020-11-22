


<!-- Modal -->
<div class="modal fade" id="signupmodel" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header " style="background-color:#ed563b;">
         <!-- <button type="button" class="close" data-dismiss="modal">&times;</button>-->
          <h4 style="text-color:red;background-color:#ed563b;"><span class="glyphicon glyphicon-lock"></span>Sign up</h4>
        </div>
        <div class="modal-body">
            <p>Already have an account? <a href="#" data-toggle="modal" data-target="#loginmodel" style="color:#ed563b;">Login</a></p>
            <form action="signupscript.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label ><span class="glyphicon glyphicon-user"></span> First Name</label>
              <input type="text" class="form-control" name="first_name" placeholder="First Name"   required >
            </div>
            <div class="form-group">
              <label ><span class="glyphicon glyphicon-user"></span>Last Name</label>
              <input type="text" class="form-control" name="last_name" placeholder="Last Name"   required >
            </div>
            <div class="form-group">
              <label ><span class="glyphicon glyphicon-user"></span>Phone Number</label>
              <input type="number" class="form-control" name="phone_number" placeholder="+91"   required >
            </div>
            
            <div class="form-group">
              <label><span class="glyphicon glyphicon-user"></span> Upload ID Proof</label>
              <input type="file" class="form-control" name="Id_proof" placeholder="XXXX XXXX XXXX "   required >
            </div>
            
            <div class="form-group">
              <label for="email"><span class="glyphicon glyphicon-user"></span> Email</label>
              <input type="email" class="form-control" name="email" placeholder="Email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,3}$"  required >
            </div>
            <div class="form-group">
              <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" name="password" placeholder="Password "   required >
            </div>
            <div class="form-group">
              <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Confirom Password</label>
              <input type="password" class="form-control" name="confirom_password" placeholder="Password "   required >
            </div>
           <!-- <div class="checkbox">
              <label><input type="checkbox" value="" background-color="#ed563b" checked>Remember me</label>
            </div> -->

           
           <button type="submit" class="btn  btn-danger"><span class="glyphicon glyphicon-off"></span>Submit</button>
           
          
          </form>
        </div>
        <div class="modal-footer"style="background-color:#ed563b;" >
          <p><a href="forgot_pwd.php" style="color:black;"> Forgot Password?</a></p>
        </div>
      </div>
    </div>
  </div> 