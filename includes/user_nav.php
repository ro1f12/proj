<nav class="navbar navbar-static-top navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://localhost/proj/admin/user_dash.php">Employee Management System</a>
        </div>


        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="http://localhost/proj/user_dash.php">Dashboard</a></li>
                <li><a href="http://localhost/proj/admin/view_profile.php">Departments</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Settings <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        
                        <li class="divider"></li>
                        <!--li><a href="#">Change Password</a></li-->
                        <li><a href="../admin/changePassword.php">Cahnge Password</button></li>
                        <li class="divider"></li>
                        <li><a href="../logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>

            
        </div>
    </div>
</nav>
<marquee direction="" width="100%" scrolldelay="300" behavior="sliding" class="text-center"><strong>User Dashboard</strong></marquee>