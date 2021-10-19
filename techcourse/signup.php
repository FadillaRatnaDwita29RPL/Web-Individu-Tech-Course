<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Course Sign Up</title>
    <link rel="stylesheet" type="text/css" href="signup.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <div class="cont">
        <div class="form sign-up" method="post">
            <!-- <a href="index.html"><i class="fas fa-arrow-left" onclick="return confirm('Are you sure to exit the sign up page?')"></i></a> -->
            <h2>Sign Up</h2>
            <form action="proses-signup.php" method="post">
            <label>
              <span>Name</span>
              <input type="text" name="name">
            </label>
            <label>
              <span>Email</span>
              <input type="email" name="email">
            </label>
            <label>
              <span>Password</span>
              <input type="password" name="password">
            </label>
            <button type="submit" class="submit" onclick="return confirm('Are you sure to sign up? Set your profile!')">Sign Up Now</button>
            </form>
          </div>
    
        <div class="sub-cont">
          <div class="img">
            <div class="img-text m-up">
              <h2>New here?</h2>
              <p>Sign up and discover great amount of new opportunities!</p>
            </div>
            <div class="img-text m-in">
              <h2>One of us?</h2>
              <p>If you already has an account, just sign in. We've missed you!</p>
            </div>
            <div class="img-btn">
              <span class="m-up">Sign Up</span>
              <span class="m-in">Sign In</span>
            </div>
          </div>
          <div class="form sign-in">
            <h2>Sign In</h2>
            <form action="proses-signin.php" method="post">
            <label>
              <span>Email Address</span>
              <input type="email" name="email">
            </label>
            <label>
              <span>Password</span>
              <input type="password" name="password">
            </label>
            <button type="submit" class="submit" onclick="return confirm('Are you sure to sign in?')"> Sign In</button>
            </form>
            <p class="forgot-pass">Forgot Password ?</p>
      
            <div class="socmed">
              <ul>
                <i class="fab fa-facebook-square"></i>
                <i class="fab fa-instagram-square"></i>
                <i class="fab fa-linkedin"></i>
                <i class="fab fa-facebook-square"></i>
              </ul>
            </div>
          </div>
          
        </div>
      </div>
    <script type="text/javascript" src="signup.js"></script>


    
</body>
</html>