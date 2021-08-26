<?php

//require_once('../../private/initialize.php');
require_once('../../summerCampPrivate/initialize.php');

require_login();

if(!isset($_GET['id'])) {
  redirect_to(url_for('/classes/index.php'));
}
$id = $_GET['id'];
$class = CampClass::find_by_id($id);
if($class == false) {
  redirect_to(url_for('/classes/index.php'));
}

if(is_post_request()) {

  // Delete class
  $result = $class->delete();
  $session->message('The class was deleted successfully.');
  redirect_to(url_for('/classes/index.php'));

} else {
  // Display form
}

?>

<?php $page_title = 'Delete Class'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="content" class="container mb-3 mt-3">

  <a class="back-link" href="<?php echo url_for('/classes/index.php'); ?>">&laquo; Back to List</a>

  <div class="class delete">
    <h1>Delete Class</h1>
    <p>Are you sure you want to delete this class?</p>
    <p class="item"><?php echo h($class->ClassName()); ?></p>

    <form action="<?php echo url_for('/classes/delete.php?id=' . h(u($id))); ?>" method="post">
      <div id="operations">
        <input type="submit" name="commit" value="Delete Class" />
      </div>
    </form>
  </div>

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
