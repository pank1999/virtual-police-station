<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin login</title>
    <?php  include('include/common_css.php');?>
</head>
<body>


<?php include('include/header_1.php'); ?>
<div class="container "  style="margin-left:28%; margin-top: 15%;">
        <div class="row row-style">
            <div class="col-xs-6">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                    
                        <center> <h1>Login</h1>   </center>

                    </div>

                    <div class="panel-body">

                       <p class="text-warning">Loging As Police Admin </p>
                       <form action="admin_login_submit.php"  method="POST">
                            <div class="form-group">
                                <input type="text" name="user" class="form-control" placeholder="user name" required="true">
                                 
                           </div>
                           <div class="form-group" >
                               <input type="password" name="password" class="form-control" placeholder="Password" required="true" pattern="{6,}">
                               
                           </div>
                           <button class="btn" style="background-color:#ed563b; color:white;" type="submit">Login</button>
                           
                       </form>

                    </div>
                    <div class="panel-footer">
                   

                    </div>


                </div>


            </div>

        </div>

    </div>

 


</body>
</html>