<header id="header" id="home">
    <div class="container">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
            <a href="index.php"><img src="img/web-logo-4.png" alt="" title="" /></a>
            </div>
            <nav id="nav-menu-container justify-content-between">
            <ul class="nav-menu">
                <li class="menu-active"><a href="home.php?page=1?page=1?page=1">Home</a></li>
                <li><a href="about-us.html">Find A Student</a></li>
                <li><a href="category.html">Find A Tutor</a></li>
                <!-- <li><a href="price.html">Price</a></li>
                <li><a href="blog-home.php?page=1?page=1">Blog</a></li> -->
                <li><a href="new-post.php">Post</a></li>
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
                        <img src="img/man.png" class="rounded-circle">
                    <!-- </a> -->
                    <ul>
                        <li><a href="elements.html"><?php echo $_SESSION["username"]; ?></a></li>
                        <li><a href="search.html"><?php echo $_SESSION["useremail"]; ?></a></li>
                        <li><a href="single.html">View Profile  </a></li>
                        <li><a href="index.php">Logout</a></li>
                    </ul>
                </li>				          				          
            </ul>
            </nav><!-- #nav-menu-container -->		    		
        </div>
    </div>
    </header><!-- #header -->