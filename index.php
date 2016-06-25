<?php
  include("diaryloginscript.php");

?>


<!doctype html>
<html>
<head>

  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Journal</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="contentContainer bgPic">
<div class="layer">
  <div class="container">
    <div class="row">
      <div class="col-sm-7 alignLeftdiv">
        <h1 class="hStyle">Online Journal</h1>
        <p class="pStyle">"A good journal entry- like a good song, or sketch, or photograph- ought to break up the habitual and life away the film that forms over the eye, the finger, the tongue, the heart. A good journal entry ought to be a love letter to the world."</p>
        <p class="uLogin">Already a member?</p>
        <button type="submit" class="btn">Log In!</button>
      </div>
      <div class="col-sm-5 alignRightdiv">
        <div class="formWrapper">
          <div class="formTop">
            <div class="formTopleft">
              <h3 class="style1">Sign up now</h3>
              <p class="style2">Fill in the form below to get instant access:</p>
            </div>
            <div class="formTopright">
              <span class="glyphicon glyphicon-pencil logo"></span>
            </div>
          </div>
          <div class="formBottom">
            <form>
              <div class="form-group">
                <label for="name"></label>
                <input type="text" name="name" class="form-control formStyle" placeholder="Name..." />
              </div>
              <div class="form-group">
                <label for="email"></label>
                <input type="email" name="email" class="form-control formStyle"
                placeholder="Email..." value = "<?php echo addslashes($_POST['email']);?>" />
              </div>
              <div class="form-group">
                <label for="password"></label>
                <input type="password" name="password" class="form-control formStyle"
                placeholder="Password..." value= "<?php echo addslashes($_POST['password']);?>" />
              </div>
              <!-- <button type="submit" class="btn">Sign me up!</button> -->
              <input type="submit" name="submit" value="sign up" />
            </form>
          </div>
          
          <!-- <div class="wHeader"></div> -->
        </div>
      </div>
    </div>
  </div>
</div></div> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/functions.js"></script>
</body>
</html>  
