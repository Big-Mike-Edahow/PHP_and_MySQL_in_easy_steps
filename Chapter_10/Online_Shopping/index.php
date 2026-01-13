<?php
    # index.php

    # Access the session data.
    session_start(); 

    # Redirect if not logged in.
    if (!isset($_SESSION['user_id'])) { require ('login_tools.php'); load(); }

    # Set the page title and display header section.
    $page_title = 'Home';
    include ('header.html');

    # Display main page section and navigation links.
    echo '<main>';
    echo '<section class="container">';
    echo "<h2>You are now logged in, {$_SESSION['firstname']} {$_SESSION['lastname']}.</h2><br>";
    echo '<img src="computer_desk.jpg" width="320px"><br><br>';
    echo '<p><a href="forum.php">Forum</a> | <a href="shop.php">Shop</a> | <a href="logout.php">Logout</a></p>';
    echo '</section>';
    echo '</main>';

    # Display footer section.
    include ('footer.html') ;
?>