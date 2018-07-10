
<?php require_once '../includes/header.php';?>
<div class="nav navbar navbar-inverse">
<marquee><strong><h3>Employee Management System</h3></strong></marquee>
</div>

<br><br><br><br><br><br>
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<div class="jumbotron">
<h4>Provide Admin Credentials To Login</h4>
<form action="login_action.php" method="post">
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input id="email" type="email" class="form-control" name="email" placeholder="Email" required/>
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
<hr/>

<!--div class="footer">
<div class="container">
<p class="text-center">
   Employee Management System | Powered By Bootstrap<br/>
   &copy;Biswajeet Kalita | 2018-19<br/>
   Version 1.0.0
</p>
</div>
</div>
</div>
</body>
</html--->
<?php require_once '../includes/footer.php';?>