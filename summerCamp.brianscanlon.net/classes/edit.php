<?php

//require_once('../../private/initialize.php');
require_once('../../summerCampPrivate/initialize.php'); 


require_login();


if(!isset($_GET['id'])) {
  redirect_to(url_for('/classess/index.php'));
}


$id = $_GET['id'];

$classes = CampClass::find_by_id($id);
if($classes == false) {
  redirect_to(url_for('/classes/index.php'));
}


if(is_post_request()) {

  // Save record using post parameters
  $args = $_POST['classes'];
  $classes->merge_attributes($args);
  $result = $classes->save();

  if($result === true) {
    $session->message('The class was updated successfully.');
    redirect_to(url_for('/classes/show.php?id=' . $id));
  } else {
    // show errors
  }

} else {

  // display the form

}


?>

<?php $page_title = 'Edit Class'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>



<div id="content" class="container mt-3 mb-3">

  <a class="back-link" href="<?php echo url_for('/classes/index.php'); ?>">&laquo; Back to List</a>

  <div class="class edit">
    <h1>Edit Class</h1>

    <?php echo display_errors($classes->errors); ?>

<?php echo 'edit 8<br>'; ?>

    <form action="<?php echo url_for('/classes/edit.php?id=' . h(u($id))); ?>" method="post">

      <?php include('form_fields.php'); ?>


      <div id="operations">
        <input type="submit" value="Edit Class" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
