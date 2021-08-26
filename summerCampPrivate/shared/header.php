<!-- Header.php-->
<?php
  if(!isset($page_title)) { $page_title = 'Summer Camp'; }
?>

<!doctype html>

<html lang="en">
  <head>
    <title>Summer Camp - <?php echo h($page_title); ?></title>
    <meta charset="utf-8">
  
  <link rel="stylesheet" href="/stylesheets/bootstrap.min.css">
 
    <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

  <!-- Material Design Bootstrap -->
  <link href="/stylesheets/mdb.min.css" rel="stylesheet">
  
  <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/style.css'); ?>" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
  </head>

  <body>
    <header class="page-header blue pt-4 pb-4">
      <h1 class="text-white text-center">Summer Camp</h1>
    </header>

    <!--<navigation>-->
    <nav class="navbar navbar-expand-sm bg-light>
      <ul class="navbar-nav" style="list-style-type: none"
        <?php if($session->is_logged_in()) { ?>
        <li class="nav-item ml-3">User: <?php echo $session->username; ?></li>
        <li class="nav-item ml-3"><a href="<?php echo url_for('/index.php'); ?>">Menu</a></li>
        <li class="nav-item ml-3"><a href="<?php echo url_for('/logout.php'); ?>">Logout</a></li>
        <?php } ?>
      </ul>
    <!--</navigation>-->
    </nav>
    
    <?php echo display_session_message(); ?>
