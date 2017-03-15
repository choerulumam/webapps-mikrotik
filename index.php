<?php
include('login.php');
if(isset($_SESSION['login_user']))
{
  header("location: /ui.php");
}
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login form</title>
  <link href="/css/login/font_awesome.css" rel="stylesheet">
  <link rel="stylesheet" href="/css/login/reset.min.css">
  <link rel="stylesheet" href="/css/login/style_form.css">
  <script src="/js/prefixfree.min.js"></script>
</head>
<body>
  <div class="login">
    <h1>Login</h1>
    <form class="form" method="post" action="">
      <p class="field">
        <input type="text" name="hostname" placeholder="Hostname" required/>
        <i class="fa fa-user"></i>
      </p>
      <p class="field">
        <input type="text" name="username" placeholder="Username" required/>
        <i class="fa fa-user"></i>
      </p>
      <p class="field">
        <input type="password" name="password" placeholder="Password" required/>
        <i class="fa fa-lock"></i>
      </p>
      <p class="submit"><input type="submit" name="submit" value="Login"></p>
      <span><?php echo $error; ?></span><br>
      <span><?php echo $error_mrtk; ?></span>
    </form>
  </div> <!--/ Login-->
<div class="copyright">
    <p>Copyright &copy; 2017. Created by <a href="" target="_blank">PDI 2017</a></p>
</body>
</html>
