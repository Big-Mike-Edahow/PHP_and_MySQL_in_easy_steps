<?php
    # errors.php

    # Start the session.
    session_start();

    # Set the page title and include the header.
    $page_title = "Errors Page";
    include ("header.html");

    # Get the errors from the session.
    $errors = $_SESSION['form_errors'];

    echo '<main>';
    echo '<section class="container">';
    echo '<h1>Error!</h1><br><h2 id="err_msg">The following error(s) occurred:</h2><br><br>' ;
    foreach ($errors as $msg)
        { echo "<p> - $msg</p>"; }
    echo '<br>';
    echo '<button id="back-button">Go Back 🔙</button>';
    echo '</section>';
    echo '</main>';

    # Include the footer.
    include ("footer.html");
?>
