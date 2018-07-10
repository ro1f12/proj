<nav class="navbar navbar-static-top navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Employee Management System</a>
        </div>


        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="http://localhost/proj/admin/employees.php">Employees</a></li>
                <li><a href="http://localhost/proj/admin/departments.php">Departments</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Settings <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="../admin/backupDB.php">Create Backup</a></li>
                        <i><a href="../admin/download.php?download_file='how_to_install.txt'">Users Manual</a></li>
                        
                        <li class="divider"></li>
                        <!--li><a href="#">Change Password</a></li-->
                        <li><a href="../admin/changePassword.php">Cahnge Password</button></li>
                        <li class="divider"></li>
                        <li><a href="../logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Notices</a><span class="sr-only">(current)</span></li>
            </ul>
        </div>
    </div>
</nav>
<marquee direction="" width="100%" scrolldelay="300" behavior="sliding" class="text-center"><strong>Admin Dashboard</strong></marquee>