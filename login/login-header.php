<?php
session_start();

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php echo $meta['title']; ?></title>
  <meta name="author" content="<?php echo $meta['author']; ?>">
  <meta name="description" content="<?php echo $meta['description']; ?>">
  <meta name="keywords" content="<?php echo $meta['keywords']; ?>">
  <link rel="shortcut icon" href="/assets/images/svsicon.ico" type="image/x-icon">
  <link rel="icon" href="/assets/images/svsicon.ico" type="image/x-icon">
  <link href='https://fonts.googleapis.com/css?family=Balthazar' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
  <link rel="stylesheet" href="svsinc/svs.css">


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110060704-1"></script>

</head>

<body>

<!-- Navigation for desktop and tablets -->
<header class="">
  <nav class="bg-red loginmenu flex-wrap center-vert between">
    <ul class="center-hor smfull">
      <li class="center-hor menuitem">
        <a class="pagehighlight toplevel mitem" href="/">
          <div class="center-hor menuicon">
            <?php echo file_get_contents("assets/images/svslogo-notext.svg"); ?>
          </div>
        </a>
      </li>
    </ul>

    <div class="flex flex-wrap smfull around">


            <?php
              if(isset($_SESSION['userFirstName'])) {
                echo '<form action="login/includes/logout.inc.php" method="post">
              <button class="loginbutton" type="submit" name="logout-submit">Logout</button>
            </form>';
              }
              else {
                echo '<form class="smfull flex-wrap around grow1" action="login/includes/login.inc.php"  method="post">
          <div class="smfull around flex-wrap">
            <div class="center-hor smfull flex flex-wrap">
              <div class="mdfull flex center-hor flex-wrap">
                <input type="text" name="mailuid" placeholder="Email...">
              </div>
              <div class="mdfull flex center-hor flex-wrap">
                <input type="password" name="pwd" placeholder="Password...">
              </div>
            </div>
          </div>
          <div class="center-vert">
            <button class="loginbutton" type="submit" name="login-submit">Login</button>
          </div>
        </form>';
              }
            ?>

        <a href="signup.php">Signup</a>
    </div> 
  </nav>   

</header>