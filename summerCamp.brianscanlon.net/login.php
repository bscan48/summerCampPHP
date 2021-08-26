<?php
//require_once('../private/initialize.php');
require_once('../summerCampPrivate/initialize.php'); 

$errors = [];
$username = '';
$password = '';

if(is_post_request()) {

  $username = $_POST['username'] ?? '';
  $password = $_POST['password'] ?? '';

  // Validations
  if(is_blank($username)) {
    $errors[] = "Username cannot be blank.";
  }
  if(is_blank($password)) {
    $errors[] = "Password cannot be blank.";
  }

  // if there were no errors, try to login
  if(empty($errors)) {
    $admin = Admin::find_by_username($username);
    // test if admin found and password is correct
    if($admin != false && $admin->verify_password($password)) {
      // Mark admin as logged in
      $session->login($admin);
      redirect_to(url_for('/index.php'));
    } else {
      // username not found or password does not match
      $errors[] = "Log in was unsuccessful.";
    }

  }

}

?>

<?php $page_title = 'Log in'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="content" class="container">
  <h1>Log in</h1>

  <?php echo display_errors($errors); ?>

  <form action="login.php" method="post">
    <div class="form-group">
        Username:<br />
        <input type="text" name="username" value="<?php echo h($username); ?>" /><br />
    </div>
    <div class="form-group">
    Password:<br />
    <input type="password" name="password" value="" /><br />
    </div>
    <input type="submit" name="submit" value="Submit"  />
  </form>
  <div class="card mt-3 mb-3">
      <div class="card-body"><p>Use the following as an example login</p>
      <p>login:example</p>
      <p>password:Password1234</p></div>
  </div>
</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
