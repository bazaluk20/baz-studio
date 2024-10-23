<?php
    include "config.php";
    include "contacts-data.php";
?>
<!doctype html>
<html lang="<?php echo $langarr['codelang'] ?>">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, user-scalable=no">

    <link rel="stylesheet" href="style.css" >
    <link rel="stylesheet" href="css/it-slider.css" >

    <title><?php echo $langarr['seotitle'] ?></title>
	  
	      <link rel="icon" type="image/png" href="../img/favicon.png" />
	  
	 <meta property="og:title" content="<?php echo $langarr['seotitle'] ?>">
		<meta property="og:site_name" content="<?php echo $langarr['seotitle'] ?>">
		<meta property="og:url" content="https://baz-studio.pro/">
		<meta property="og:description" content="<?php echo $langarr['seodesc'] ?>">
		<meta property="og:image" content="https://baz-studio.pro/img/logo.png">
	  
  </head>
  <body>
   
   
    <?php // HEADER
    require_once('modules/header.php'); ?>
   
    <?php //ABOUT
    require_once('modules/about.php');?>
    
    <?php // ADVENTAGES
    require_once('modules/adventages.php');?>
    
    <?php // PORTFOLIO
    require_once('modules/portfolio.php');?>
    
    <?php //FAST ORDER
    require_once('modules/fast-order.php');?>
    
    <?php // PRICE 
    require_once('modules/price.php');?>
    
    <?php // SUPPORT
//    require_once('modules/support.php');?>
    
    <?php // WORK STEPS 
    require_once('modules/steps.php');?>
    
    <?php //BONUS
    require_once('modules/bonus.php');?>
    
    <?php //FAST ORDER BONUS
    require_once('modules/fast-order-bonus.php');?>
    
    <?php // REVIEWS 
    require_once('modules/reviews.php');?>
    
    <?php // FOOTER 
    require_once('modules/footer.php');?>


<?php // top menu elements ?>
<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="#about"><?php echo $langarr['menuabout'] ?></a>
    <a href="#projects"><?php echo $langarr['menuprojects'] ?></a>
    <a href="#services"><?php echo $langarr['menuservices'] ?></a>
    <a href="#bonus"><?php echo $langarr['menubonus'] ?></a>
    <a href="#reviews"><?php echo $langarr['menureviews'] ?></a>
     <div class="social">
          <a href='mailto:<?php echo $contacts['email'] ?>' rel="nofollow" target="_blank">
              <svg class="social_icons" width="24px" height="24px">
                <use href="img/sprite.svg#icon-email"></use>
              </svg>
          </a>
          <a href='<?php echo $contacts['tg'] ?>' rel="nofollow" target="_blank">
              <svg class="social_icons" width="24px" height="24px">
                <use href="img/sprite.svg#icon-telegram"></use>
              </svg>
          </a>
          <a href='<?php echo $contacts['whatsapp'] ?>' rel="nofollow" target="_blank">
              <svg class="social_icons" width="24px" height="24px">
                <use href="img/sprite.svg#icon-whatsapp"></use>
              </svg>
          </a>
          <a href='<?php echo $contacts['linkedin'] ?>' rel="nofollow" target="_blank">
              <svg class="social_icons" width="24px" height="24px">
                <use href="img/sprite.svg#icon-linkedin"></use>
              </svg>
          </a>
          <a href='<?php echo $contacts['github'] ?>' rel="nofollow" target="_blank">
              <svg class="social_icons" width="24px" height="24px">
                <use href="img/sprite.svg#icon-github"></use>
              </svg>
          </a>
      </div>
  </div>
</div>
<?php // end top menu elements ?>


    <?php // MODALS
    require_once('modules/modals.php');?>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/it-slider.js"></script>
    <script src="js/main.js"></script>
    
  </body>
</html>