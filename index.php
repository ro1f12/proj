<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <!--link rel="stylesheet" href="https://bootswatch.com/3/flatly/bootstrap.min.css"-->
    <title>EMS | user login</title>
</head>
<body>
<div class="container">
<marquee><strong><h3>Employee Management System</h3></strong></marquee>
<hr/>
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<div class="jumbotron">
<h4>Provide your Credentials To Login</h4>
<form action="user_login_action.php" method="post">
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input id="user_id" type="text" class="form-control" name="user_id" placeholder="user_id" required/>
  </div>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    <input id="password" type="password" class="form-control" name="password" placeholder="Password" required/>
  </div>
  <br/>
  <div class="input-group">
    <input type="submit" value="Login" class="btn btn-sm btn-primary">&nbsp;
    <a href="#" class="btn btn-sm btn-default">Forgot password?</a>
  </div>
</form>
</div>
</div>
<div class="col-md-3"></div>
</div>
<div>
<p class="text-right">
<a href="admin/" class="btn btn-link">Admin Login</a>
</p>
</div>
<hr/>
<div class="footer">
<div class="container">
<p class="text-center navbar nav navbar-fixed-bottom">
   Employee Management System | Powered By Bootstrap<br/>
   &copy; | 2018-19<br/>
   Version 1.0.1
</p>
</div>
</div>
</div>
</body>
</html>