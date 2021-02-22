<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div class="container" style="margin-left: 400px; margin-top: 100px;">
        <div class="row row-style">
            <div class="col-xs-6">
                <div class="panel panel-success">
                    <div class="panel-heading">
                    
                         <h1>Login</h1>   

                    </div>

                    <div class="panel-body">

                       <p class="text-warning">Loging As Police Admin </p>
                       <form action="admin_login_submit.php"  method="POST">
                            <div class="form-group">
                                <input type="text" name="user" class="form-control" placeholder="user name" required="true">
                                 
                           </div>
                           <div class="form-group" >
                               <input type="text" name="password" class="form-control" placeholder="Password" required="true" pattern="{6,}">
                               
                           </div>
                           <button class="btn btn-success" type="submit">Login</button>
                           
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