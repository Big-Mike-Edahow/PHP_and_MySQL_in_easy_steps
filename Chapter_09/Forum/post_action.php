<!-- post_action.php -->

<?php
# Access session.
session_start();

# Make load function available.
require ("login_tools.php");

# Redirect if not logged in.
if (!isset($_SESSION['id'])) { load(); }

# Set page title and display header section.
$page_title = "Post Error";
include ("header.html");

# Check form submitted.
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  # Check Subject and Message Input.
  if (empty($_POST['subject'])) { echo '<p>Please enter a subject for this post.</p>'; }
  if (empty($_POST['message'])) { echo '<p>Please enter a message for this post.</p>'; }

  # On success add post to forum database.
  if(!empty($_POST['subject']) &&  !empty($_POST['message']))
  {
    # Open database connection.
    require ("connect_db.php");
  
    # Execute inserting into 'forum' database table.
    $q = "INSERT INTO forum(firstname,lastname,subject,message,created) 
          VALUES ('{$_SESSION['firstname']}','{$_SESSION['lastname']}','{$_POST['subject']}','{$_POST['message']}',NOW() )";
    $r = mysqli_query ( $dbc, $q ) ;

    # Report error on failure.
    if (mysqli_affected_rows($dbc) != 1) { echo '<p>Error</p>'.mysqli_error($dbc); } else { load('forum.php'); }
    
    # Close database connection.
    mysqli_close( $dbc ) ; 
    }
 } 
 
# Create a hyperlink back to the post page.
echo '<p><a href="post.php">Back 🔙</a>' ;
 
# Display footer section.
include ("footer.html") ;

?>
