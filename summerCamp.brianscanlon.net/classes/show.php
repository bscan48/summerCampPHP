<?php //require_once('../../private/initialize.php'); ?>
<?php require_once('../../summerCampPrivate/initialize.php'); ?>
<?php require_login(); ?>

<?php

$id = $_GET['id'] ?? '1'; // PHP > 7.0

$class = CampClass::find_by_id($id);

?>
<?php $page_title = 'Show Class: ' . h($class->ClassName); ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="content" class="container mt-3">

  <a class="back-link" href="<?php echo url_for('/classes/index.php'); ?>">&laquo; Back to List</a>

  <div class="class show">

    <h1>Class: <?php echo h($class->ClassName); ?></h1>

    <div class="attributes">
      <dl>
        <dt>id</dt>
        <dd><?php echo h($class->id); ?></dd>
      </dl>
      <dl>
        <dt>ClassId</dt>
        <dd><?php echo h($class->ClassId); ?></dd>
      </dl>
      <dl>
        <dt>Description</dt>
        <dd><?php echo h($class->ClassDescription); ?></dd>
      </dl>
      <dl>
        <dt>Begins</dt>
        <dd><?php echo h(FormatDtMMDD($class->Begins)); ?></dd>
      </dl>
      <dl>
        <dt>Ends</dt>
        <dd><?php echo h(FormatDtMMDD($class->Ends)); ?></dd>
      </dl>
    </div>

  </div>

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
