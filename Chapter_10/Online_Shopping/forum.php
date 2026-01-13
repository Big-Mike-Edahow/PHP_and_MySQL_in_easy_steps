<?php
    # forum.php

    # Access session.
    session_start();

    # Redirect if not logged in.
    if (!isset($_SESSION['user_id'])) { require ('login_tools.php'); load(); }

    # Open database connection.
    require ("connect_db.php");

    # Set page title and display header section.
    $page_title = "Forum";
    include ("header.html") ;

    echo '<main><section class="container">';
    echo '<h1>User Forum. 🗣️</h1><br>';

    $q = "SELECT * FROM forum";
    $r = mysqli_query($dbc, $q);
    if (mysqli_num_rows($r) > 0)
    {
        while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
        {
            echo '<article>';
            echo '<p><b>From: </b>' . $row['firstname'] . ' ' . $row['lastname'] . '</p>';
            echo '<p><b><i>Date: </i></b>' . $row['created'] . '</p>';
            echo '<p><b>Subject: </b>' . $row['subject'] . '</p><br>';
            echo '<p><b>Message: </b>' . $row['message'] . '</p>';
            echo '</article>';
        }
    }
    else { echo '<p>There are currently no messages.</p>'; }

    # Create navigation links.
    echo '<p><a href="post.php">Post Message</a> | <a href="shop.php">Shop</a> | <a href="index.php">Home</a> | <a href="logout.php">Logout</a></p>' ;
    echo '</section></main>';

    # Display footer section.
    include ("footer.html");

    # Close database connection.
    mysqli_close($dbc);
?>
