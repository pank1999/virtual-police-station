<header class="header-area header-sticky"  style="background-color:#313c4b; position:fixed; ">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!- ***** Logo Start ***** ->
                        <a href="index.html" class="logo"><img src="./assets/images/mp-police-logo.jpg" height="70px" width="100px" alt=""><em></em></a>
                        <!- ***** Logo End ***** -->
                        
                        <!-- ***** Menu Start ***** -->
                        
                        <ul class="nav">
                            <h3 style="float:left;margin-right:200px; color:white;"><?php  echo "".$ps; ?></h3>
                            <?php if(!isset($_SESSION['user_name'])){?>

                            <li class="scroll-to-section"><a href="index.php" class="" style="color:white; background-color:#2f3b4b;">Home</a></li>
                            <?php }
                            
                            else{ ?>
                                <li class="scroll-to-section"><a href="index.php" class="" style="color:white; background-color:#2f3b4b;"></a></li>
                            <?php }?>

                            <li class="scroll-to-section"><a href="#" data-toggle="modal" data-target="#profilemodel" style="color:white; background-color:#2f3b4b;"></a></li>
                          <!--  <li class="scroll-to-section"><a href="#our-classes" style="color:white;">Classes</a></li>
                            <li class="scroll-to-section"><a href="#schedule" style="color:white;">Schedules</a></li>
                            <li class="scroll-to-section"><a href="#contact-us" style="color:white;">Contact</a></li> 
                         -->
                            <li class="main-button"><a href="logout.php" data-toggle="modal" data-target="">logout</a></li>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header> 