<?php
    # post.php

    # Access session.
    session_start();

    # Redirect if not logged in.
    if (!isset($_SESSION['id'])) { require('login_tools.php'); load(); }

    # Set page title and display header section.
    $page_title = "Post Message";
    include ("header.html");

    echo '<main><section class="container">';
    echo '<h1>New Forum Post. 📮</h1><br><br>';
    echo '<form action="post_action.php" method="post" accept-charset="utf-8">';
    echo '<fieldset>';
    echo '<legend>Post Message</legend>';
    echo '<label>Subject:<input name="subject" type="text" size="64" maxlength="100"></label><br><br>';
    echo '<label>Message: <textarea name="message" rows="5" cols="50"></textarea></label><br><br>';
    echo '<input name="submit" type="submit" value="Submit">';
    echo '</fieldset>';
    echo '</form><br>';
    echo '<p><a href="forum.php">Forum</a> | <a href="shop.php">Shop</a> | <a href="index.php">Home</a> | <a href="logout.php">Logout</a></p>' ;
    echo '</section></main>';

    # Display footer section.
    include ("footer.html");
?>
