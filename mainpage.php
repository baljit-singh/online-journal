<?php
  
  session_start();

  include("connection.php");

  $query = "SELECT diary FROM users where id ='".$_SESSION['id']."'LIMIT 1";

  $result = mysqli_query($link, $query);
  $row = mysqli_fetch_array($result);
  $dairy = $row['diary'];

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
      <div class="navbar-header pull-left">
        <div class="navbar-brand">Online Journal</div>
        
      </div>
      <div class="pull-right">
        <ul class="navbar-nav nav pull-right">
          <li><a href="index.php?logout=1">Log Out</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="container-fluid contentContainer" id="bgImg">
    <div class="container">
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          <textarea class="form-control textStyle"><?php echo $dairy; ?></textarea>>
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
      $("textarea").css("min-height",$(window).height()-100);
      $("textarea").keyup(function(){
        $.post("updatediary.php", {diary:$("textarea").val()});
      });
  </script>
</body>
</html>

