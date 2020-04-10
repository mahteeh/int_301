<html>
<head>
  <?php include('form.php');?>
<title>Sign Up</title>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>

<style>
              .form{width:400px;
                           padding: 40px 20px;
                           box-sizing:border-box;
                           position:absolute;
                           left:30%;
                           top:15%;}

              fieldset{padding: 50px 40px 30px 40px;
                           width: 400px;
                           background-color: #eef}

              h1{font-family: Arial;
                           font-size: 40px;
                           margin-bottom: 20px;
                           color: #fcf }

              p{margin-bottom:40px;
                           font-size: 14px;
                           font-weight: serif;}

              #error{color: red;}

              input[type=text]{width: 85%; border: 2px solid #fcf; border-radius: 10px; padding: 17px 30px; box-sizing: border-box; margin-bottom: 20px; font-size 18px;}
              input[type=email]{width: 85%; border: 2px solid #fcf; border-radius: 10px; padding: 17px 30px; box-sizing: border-box; margin-bottom: 20px; font-size 18px;}
              input[type=password]{width: 85%; border: 2px solid #fcf; border-radius: 10px; padding: 17px 30px; box-sizing: border-box; margin-bottom: 20px; font-size 18px;}
              input[type=submit]{border: 2px solid #fcf; border-radius: 10px; padding: 17px 30px; box-sizing: border-box; margin-bottom: 20px; margin-top: 20px;}
</style>

<body>

<div class="form">
<fieldset>
 <form action="signup.php" method="post" taget="">
<h1>Sign Up</h1>
<p>Please fill in this form to create an account</p>

              <i class='fas fa-user-edit' style='font-size:24px'></i> <input type="text" name="name" placeholder="Username"  value="<?= $name ?>"></br>
              <span id="error">* <?=$nameError ?></span></br>

              <i class='fas fa-envelope' style='font-size:24px'></i> <input type="email" name="email" placeholder="Email Address"  value="<?= $email?>"></br>
              <span id="error">* <?=$emailError ?></span></br>

              <i class='fas fa-lock' style='font-size:24px'></i> <input type="password" name="password" placeholder="Password"  value="<?= $password ?>"></br>
              <span id="error">* <?=$passwordError ?></span></br>

              <i class='fas fa-lock' style='font-size:24px'></i> <input type="password" name="cpassword" placeholder="Confirm Password"  value="<?= $cpassword ?>"></br>
              <span id="error">* <?=$cpasswordError ?></span></br>

              <input type="checkbox">I accept the Terms of Use & Privacy Policy</br>
              <input type="submit" value="Sign Up">


</form>
</fieldset>
</div>
</body>
</html>
