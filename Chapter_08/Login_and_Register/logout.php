<!-- logout.php -->

<?php

# Access the session data.
session_start();

# Redirect if not logged in.
if (!isset($_SESSION['id'])) { require ('login_tools.php'); load(); }

# Set page title and display header section.
$page_title = 'Logged Out';
include ('header.html');

# Clear existing variables.
$_SESSION = array();
  
# Clear the session data.
session_destroy();

# Display main section.
echo '<main>';
echo '<section class="container">';
echo '<h1 class="headline-h1">Goodbye! 👋</h1><br>';
echo '<p>You are now logged out.</p><br>';
echo '<p><a href="login.php">Login</a></p>';
echo '</section>';
echo '</main>';

# Display footer section.
include ('footer.html') ;

?>

