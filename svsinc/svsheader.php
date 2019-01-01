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
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-110060704-1');
</script>

</head>

<body>

<!-- Navigation for desktop and tablets -->

<nav class="headermenu iconmenu">
<ul class="flex">
  <li class="menuitem">
    <a class="pagehighlight toplevel mitem" href="/">
      <div class="menuicon">
        <?php echo file_get_contents("assets/images/svslogo-notext.svg"); ?>
      </div>
      <div class="icontext">
        <p>Home</p>
      </div>
    </a>
  </li>

  <li class="menuitem">
    <a class="toplevel pagehighlight mitem" href="the-salt.php">
    <div class="menuicon">
      <?php echo file_get_contents("assets/images/salt-crystals-icon-small.svg"); ?>
    </div>
    <div class="icontext">
      <p>Salt</p>
    </div>
    </a>
  </li>
  
  <li class="menuitem">
    <a class="toplevel pagehighlight mitem" href="the-journey.php">
    <div class="menuicon">
      <?php echo file_get_contents("assets/images/andes-icon.svg"); ?>
    </div>
    <div class="icontext">
      <p>Origin</p>
    </div>
    </a>
  </li>
  
  <li class="menuitem">
    <a class="toplevel pagehighlight mitem" href="our-principles.php">
    <div class="menuicon">
      <?php echo file_get_contents("assets/images/compass-icon.svg"); ?>
    </div>
    <div class="icontext">
      <p>Ethics</p>
    </div>
    </a>
  </li>
  
  <li class="menuitem">
    <a class="toplevel pagehighlight mitem" href="the-people.php">
    <div class="menuicon">
      <?php echo file_get_contents("assets/images/peru-girl-icon.svg"); ?>
    </div>
    <div class="icontext">
      <p>People</p>
    </div>
    </a>
  </li>
  
  <li class="menuitem">
    <a class="toplevel pagehighlight mitem" href="no-hype-zone.php">
    <div class="menuicon">
      <?php echo file_get_contents("assets/images/no-hype-icon.svg"); ?>
    </div>
    <div class="icontext">
      <p>No Hype</p>
    </div>
    </a>
  </li>
  
  <li class="menuitem dropdown">
    <a href="javascript:void(0)" class="dropbtn">
      <div class="menuicon">
        <?php echo file_get_contents("assets/images/llama-icon.svg"); ?>
      </div>
      <div class="icontext">
        <p><span>Learn &#8681;</span></p>
      </div>
    </a>
    <div class="dropdown-content">
      <a class="pagehighlight1 mitem" href="blog.php">Blog</a>
      <a class="pagehighlight2 mitem" href="photo-blog.php">Photo Blog</a>
      <a class="pagehighlight3 mitem" href="andean-condor.php">Andean Condor</a>
    </div>
  </li>
  
  <li id="menu-salt" class="menuitem">
    <a class="toplevel pagehighlight mitem" href="get-salt.php">
    <div class="menuicon">
      <img src="/assets/images/salt-pouch-120sq.png">
    </div>
    <div class="icontext">
      <p>Get Salt</p>
    </div>
    </a>
  </li> 
</ul>
</nav>

<nav class="headermenu fullmenu flex">
  <div class="menuitem menulogo">
    <a href="/" class="toplevel mitem">
      <?php echo file_get_contents("assets/images/svslogo-notext.svg"); ?>
    </a>
  </div>
  <div class="menu-expand">
    <span onclick="openNav()">&#9776; MENU</span>
  </div>
</nav>


<!--Navigation for smaller sreens -->
<div id="myNav" class="overlay flex">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <ul class="overlay-content">
    <li class="menuitem mobile">     
      <a href="/" class="pagehighlight mitem">
        <div class="fullimg">
          <?php echo file_get_contents("assets/images/svslogo-notext.svg"); ?>
        </div>
        <span>Home</span>
      </a>
    </li>
    <li class="menuitem mobile">
      <a href="the-salt.php" class="pagehighlight mitem">
        <div class="fullimg">
          <?php echo file_get_contents("assets/images/salt-crystals-icon-small.svg"); ?>          
        </div>
        <span>The Salt</span>
      </a>
    </li>
    <li class="menuitem mobile"> 
      <a href="the-journey.php" class="pagehighligh mitem">
        <div class="fullimg">
          <?php echo file_get_contents("assets/images/andes-icon.svg"); ?>
        </div>
        <span>Origin</span>
      </a>
    </li>
    <li class="menuitem mobile">
      <a href="our-principles.php" class="pagehighlight mitem">
        <div class="fullimg">
          <?php echo file_get_contents("assets/images/compass-icon.svg"); ?>
        </div>
        <span>Ethics</span>
      </a>
    </li>
    <li class="menuitem mobile">
      <a href="the-people.php" class="pagehighlight mitem">
        <div class="fullimg">
          <?php echo file_get_contents("assets/images/peru-girl-icon.svg"); ?>
        </div>
        <span>People</span>
      </a>
    </li>
    <li class="menuitem mobile">
      <a href="no-hype-zone.php" class="pagehighlight mitem">
      <div class="fullimg">
        <?php echo file_get_contents("assets/images/no-hype-icon.svg"); ?>        
      </div>
      <span>No Hype</span>
      </a>
    </li>
    <div class="sv mobile">
      <div class="list">
        <li><a href="blog.php" class="pagehighlight mitem">Blog</a></li>
        <li><a href="photo-blog.php" class="pagehighlight mitem">Photo Blog</a></li>
        <li><a href="andean-condor.php" class="pagehighlight mitem">Andean Condor</a></li>
      </div>
      <div class="learn">
        <p>LEARN</p>
      </div>
    </div>
    <li class="menuitem mobile">
      <a href="get-salt.php" class="pagehighlight mitem">
        <div class="fullimg"><img src="/assets/images/salt-pouch-120sq.png"></div>
        <span>Get Salt</span>
      </a>
    </li>
  </ul>
</div>