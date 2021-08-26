<!--index.php-->
<?php require_once('../../summerCampPrivate/initialize.php'); ?> 
<?php //require_once('../../private/initialize.php'); ?>
<?php require_login(); ?>

<?php

$current_page = $_GET['page'] ?? 1;
$per_page = 5;
$total_count = CampClass::count_all();

$pagination = new Pagination($current_page, $per_page, $total_count);

// Find all classes;
// use pagination instead
// $classes = Class::find_all();

$sql = "SELECT * FROM camp_classes ";
$sql .= "LIMIT {$per_page} ";
$sql .= "OFFSET {$pagination->offset()}";
$classes = CampClass::find_by_sql($sql);

?>
<?php $page_title = 'Classes'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="content" class="container">
  <div class="mt-3">
    <h1>Classes</h1>

    <div class="actions">
      <a class="action btn btn-primary" href="<?php echo url_for('/classes/new.php'); ?>">Add Class</a>
    </div>

  	<table class="table table-striped">
      <tr>
        <th>ID</th>
        <th>ClassId</th>
        <th>ClassName</th>
        <th>Begins</th>
        <th>Ends</th>
        <th>&nbsp;</th>
        <th>Action</th>
        <th>&nbsp;</th>
      </tr>

      <?php foreach($classes as $class) { ?>
        <tr>
          <td><?php echo h($class->id); ?></td>
          <td><?php echo h($class->ClassId); ?></td>
          <td><?php echo h($class->ClassName); ?></td>
          <td><?php echo h(FormatDtMMDD($class->Begins)); ?></td>
          <td><?php echo h(FormatDtMMDD($class->Ends)); ?></td>
          <td><a class="btn btn-raised btn-primary btn-sm" href="<?php echo url_for('/classes/show.php?id=' . h(u($class->id))); ?>"><i class="fa fa-microscope"></a></td>
          <td><a class="btn btn-raised btn-secondary btn-sm" href="<?php echo url_for('/classes/edit.php?id=' . h(u($class->id))); ?>"><i class="fa fa-pencil-alt"></a></td>
          <td><a class="btn btn-raised btn-danger btn-sm" href="<?php echo url_for('/classes/delete.php?id=' . h(u($class->id))); ?>"><i class="fa fa-trash"></a></td>
    	  </tr>
      <?php } ?>
  	</table>

<?php
$url = url_for('/classes/index.php');
echo $pagination->page_links($url);
?>


  </div>

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
