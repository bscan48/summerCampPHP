<?php //require_once('../../private/initialize.php'); ?>
<?php require_once('../../summerCampPrivate/initialize.php'); ?> 
<?php require_login(); ?>

<?php

// Find all admins
$admins = Admin::find_all();

?>
<?php $page_title = 'Admins'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="content">
  <div class="container mt-3">
    <h1>Admins</h1>

    <div class="actions">
      <a class="action btn btn-primary" href="<?php echo url_for('/admins/new.php'); ?>">Add Admin</a>
    </div>

  	<table class="table table-striped">
      <tr>
        <th>ID</th>
        <th>First name</th>
        <th>Last name</th>
        <th>Email</th>
        <th>Username</th>
        <th>&nbsp;</th>
        <th>Action</th>
        <th>&nbsp;</th>
      </tr>

      <?php foreach($admins as $admin) { ?>
        <tr>
          <td><?php echo h($admin->id); ?></td>
          <td><?php echo h($admin->first_name); ?></td>
          <td><?php echo h($admin->last_name); ?></td>
          <td><?php echo h($admin->email); ?></td>
          <td><?php echo h($admin->username); ?></td>
          <td><a class="btn btn btn-raised btn-primary btn-sm" data-toggle="tooltip" title="View Record" href="<?php echo url_for('/admins/show.php?id=' . h(u($admin->id))); ?>"><i class="fa fa-microscope"></a></td>
          <td><a class="btn btn btn-raised btn-secondary btn-sm" data-toggle="tooltip" title="Update Record" href="<?php echo url_for('/admins/edit.php?id=' . h(u($admin->id))); ?>"><i class="fa fa-pencil-alt"></a></td>
          <td><a class="btn btn btn-raised btn-danger btn-sm" data-toggle="tooltip" title="Delete Record" href="<?php echo url_for('/admins/delete.php?id=' . h(u($admin->id))); ?>"><i class="fa fa-trash"></a></td>
    	  </tr>
      <?php } ?>
  	</table>

  </div>

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
