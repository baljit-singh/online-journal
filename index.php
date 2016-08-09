<?php
  include("login.php");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Online Journal</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
<body data-spy="scroll" data-target=".navbar-collapse">
  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <div class="navbar-brand">Online Journal</div>
        <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <form method="POST" class="navbar-form navbar-right">
          <div class="form-group">
            <input type="email" name="loginemail" id="loginemail" value="<?php echo addslashes($_POST['email']); ?>" placeholder="email" class="form-control" />
            <input type="password" name="loginpassword" value="<?php echo addslashes($_POST['password']); ?>" placeholder="password" class="form-control" />
            <input class="btn btn-primary" type="submit" name="submit" value="Log In"/>
            <!-- <button class="btn btn-primary">Log In</button> -->
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="container-fluid contentContainer" id="bgImg">
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <p class="firstQuote fontStyle">“Get a notebook…a journal that will last through all time, and maybe the angels may quote from it for eternity. Begin today and write in it your goings and comings, your deepest thoughts, your achievements and your failures, your associations and your triumphs, your impressions and your testimonies” ― Spencer W.Kimball</p>
          <p class="quotes fontStyle">“A personal journal is an ideal environment in which to “become”. It is a perfect place for you to think, feel, discover, expand, remember, and dream.” ― Brad Wilcox</p>
          <p class="quotes fontStyle">“Journaling has become one of the most gratifying and fulfilling practices of my life. Not only do I derive the daily benefits of consciously directing my thoughts and putting them in writing, but even more powerful are those I have gained from reviewing my journals.” ― Hal Elrod</p>
        </div>
        <div class="col-sm-6">
          <h1 class="headingStyle center">ONLINE JOURNAL</h1>
          <p class="center">Your own personal journal, with you wherever you go.</p>
          <?php

          	if($error){
          		echo '<div class="alert alert-danger center">'.addslashes($error).'</div>';
          	}

          	if($message){
          		echo '<div class="alert alert-success center">'.addslashes($message).'</div>';
          	}

          ?>
          <p class="center message"><strong>Interested? Sign Up Below!</strong></p>
          <form method="POST" class="center">
            <div class="form-group">
              <label for="email"></label>
              <input type="email" name="email" id="email" value="<?php echo addslashes($_POST['email']); ?>" class="form-control" placeholder="Email..." />
            </div>
            <div class="form-group">
              <label for="password"></label>
              <input type="password" name="password" value="<?php echo addslashes($_POST['password']); ?>" class="form-control" placeholder="Password..." />
            </div>
            <input class="btn btn-success" type="submit" name="submit" value="Sign Up" />
          </form>
        </div>
        <div class="col-sm-3">
          <p class="firstQuote fontStyle">“Journal writing … [provides] a place for self-expression where one can afford to take a risk, experiment with ideas and materials, and even make a mistake” ― M.Joan Lickteig</p>
          <p class="quotes fontStyle">“Sacred experiences gain validity by being recorded…and seen over a period of years, a life recorded day by day and page by page assumes pattern and purpose. A journal thus becomes a vehicle for seeing God’s interaction with us.” ― Janet Brigham</p>
          <p class="quotes fontStyle">“The act of writing is the act of discovering what you believe.” ― David Hare</p>
          <p class="quotes fontStyle">“Write what disturbs you, what you fear, what you have not been willing to speak about. Be willing to be split open.” ―Natalie Goldberg</p>
        </div>
      </div>
    </div>  
  </div>
  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  <script>
      $("#bgImg").css("min-height",$(window).height());
  </script>
</body>
</html>

