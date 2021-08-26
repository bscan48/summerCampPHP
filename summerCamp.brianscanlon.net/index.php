<?php require_once('../summerCampPrivate/initialize.php'); ?>

<?php require_login(); ?>

<?php $page_title = 'Summer Camp'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="content" class="container mt-3">
  <div id="main-menu">
    <h2>Main Menu</h2>
    <ul>
      <li><a href="<?php echo url_for('/classes/index.php'); ?>" class="btn btn-primary">Classes</a></li>
      <li><a href="<?php echo url_for('/admins/index.php'); ?>" class="btn btn-primary">Admins</a></li>
    </ul>
  </div>

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
