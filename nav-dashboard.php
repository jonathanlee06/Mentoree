<header id="header" id="home" style="background-color: white; color: #333">
    <div class="container">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
            <a href="home.php"><img src="img/web-logo-4.png" alt="" title="" /></a>
            </div>
            <nav id="nav-menu-container justify-content-between">
            <ul class="nav-menu">
                <li class="menu-active"><a href="home.php?page=1">Home</a></li>
                <!-- <li><a href="about-us.html" id="nav-home">Find A Tutor</a></li>
                <li><a href="category.html" id="nav-home">Find A Student</a></li> -->
                <!-- <li><a href="price.html">Price</a></li>
                <li><a href="blog-home.php?page=1">Blog</a></li> -->
                <?php

                    if(isset($_SESSION['usertype'])){
                        $userType = $_SESSION['usertype'];
                        if($userType == "Student"){
                            echo '<li><a href="new-post-student.php">Post Listing</a></li>';
                        }
                        else{
                            echo '<li><a href="new-post-tutor.php">Post Listing</a></li>';
                        }
                    }
                    else {
                        echo "You Noob";
                    }
                ?>
                
                <li><a>|</a></li>
                <!-- <li class="menu-has-children"><a href="">Pages</a>
                <ul>
                    <li><a href="elements.html">elements</a></li>
                    <li><a href="search.html">search</a></li>
                    <li><a href="single.html">single</a></li>
                </ul>
                </li> -->
                <li class="menu-has-children">
                    <!-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> -->
                        <img src="img/profile/user.png" class="rounded-circle" style="width:32px;height:32px">
                    <!-- </a> -->
                    <ul id="drop-bar">
                        <li><a href=""><?php echo $_SESSION["username"]; ?></a></li>
                        <li><a href="search.html"><?php echo $_SESSION["useremail"]; ?></a></li>
                        <li><a href="dashboard.php">View Profile  </a></li>
                        <li><a href="index.php">Logout</a></li>
                    </ul>
                </li>
                <!-- <li><img src="img/man.png" alt=""></li>	 -->
                
                                                                
            </ul>
            </nav><!-- #nav-menu-container -->		    		
        </div>
    </div>
    </header><!-- #header -->