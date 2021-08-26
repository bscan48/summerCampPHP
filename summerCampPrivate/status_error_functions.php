<?php

function require_login() {
  global $session;

//    echo ('require_login one<br>');

  if(!$session->is_logged_in()) {
//    echo ('require_login two<br>');
    echo url_for('/login.php') . '<br>';
    redirect_to(url_for('/login.php'));
  } else {
    //die ('require_login three<br>');
    // Do nothing, let the rest of the page proceed
  }
}

function display_errors($errors=array()) {
  $output = '';
  if(!empty($errors)) {
    $output .= "<div class=\"errors\">";
    $output .= "Please fix the following errors:";
    $output .= "<ul>";
    foreach($errors as $error) {
      $output .= "<li>" . h($error) . "</li>";
    }
    $output .= "</ul>";
    $output .= "</div>";
  }
  return $output;
}

function display_session_message() {
  global $session;
  $msg = $session->message();
  if(isset($msg) && $msg != '') {
    $session->clear_message();
    return '<div id="message">' . h($msg) . '</div>';
  }
}

?>
