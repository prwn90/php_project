<!DOCTYPE html>
<html lang="pl-PL">
<head>
   <meta charset="UTF-8">

	<title>Forum Tweet!</title>
	<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/style.css">
</head>
<body>
	<nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Nawigacja</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">FORUM TWEET</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo ROOT_URL; ?>">Główna</a></li>
            <li><a href="<?php echo ROOT_URL; ?>shares">Udostępnij!</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <?php if(isset($_SESSION['is_logged_in'])) : ?>
            <li><a href="<?php echo ROOT_URL; ?>">Witamy! <?php echo $_SESSION['user_data']['name']; ?></a></li>
            <li><a href="<?php echo ROOT_URL; ?>users/logout">Wyloguj się</a></li>
          <?php else : ?>
            <li><a href="<?php echo ROOT_URL; ?>users/login">Logowanie</a></li>
            <li><a href="<?php echo ROOT_URL; ?>users/register">Rejestracja</a></li>
          <?php endif; ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

     <div class="row">
      <?php Messages::display(); ?>
     	<?php require($view); ?>
     </div>

    </div><!-- /.container -->
</body>
</html>