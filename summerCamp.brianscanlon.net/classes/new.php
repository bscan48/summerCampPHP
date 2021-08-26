<?php
echo 'new.php 1<br>';
//require_once('../../private/initialize.php');
require_once('../../summerCampPrivate/initialize.php'); 
echo 'new.php 2<br>';
//die;

require_login();

if(is_post_request()) {

  // Create record using post parameters
  $args = $_POST['classes'];
  $classes = new CampClass($args);
  $result = $classes->save();

  if($result === true) {
    $new_id = $class->id;
    $session->message('The class was created successfully.');
    redirect_to(url_for('/classes/show.php?id=' . $new_id));
  } else {
    // show errors
  }

} else {
  // display the form
  $classes = new CampClass;

    
}


?>

<?php $page_title = 'Create Class'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/classes/index.php'); ?>">&laquo; Back to List</a>

  <div class="class new">
    <h1>Create Class</h1>

    <?php echo display_errors($classes->errors); ?>

    <form action="<?php echo url_for('/classes/new.php'); ?>" method="post">

      <?php include('form_fields.php'); ?>

      <div id="operations">
        <input type="submit" value="Create Class" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
