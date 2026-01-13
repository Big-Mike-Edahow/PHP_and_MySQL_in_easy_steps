<?php
    # shop.php

    # Access Session.
    session_start();

    # Redirect if not logged in.
    if (!isset( $_SESSION['user_id'])) { require ('login_tools.php') ; load(); }

    $page_title = "Shop";
    include ("header.html");

    # Open database connection.
    require ("connect_db.php");

    $q = "SELECT * FROM shop";
    $r = mysqli_query($dbc, $q);
    if (mysqli_num_rows($r) > 0)
    {
        echo '<main><section class="container">';
        echo '<table><tr>';
        while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
        {
            echo '<td><b>' . $row['item_name'] .'</b><br><span>'. $row['item_desc'] .
            '</span><br><img src='. $row['item_img'].'><br>$' . $row['item_price'] .
            '<br><a href="added.php?id='.$row['item_id'].'">Add To Cart</a></td>';
        }
        echo '</tr></table><br>';
        
        # Close database connection.
        mysqli_close($dbc); 
    }
    else { echo '<p>There are currently no items in this shop.</p>'; }

    echo '<p><a href="cart.php">View Cart</a> | <a href="forum.php">Forum</a> | <a href="index.php">Home</a> | <a href="logout.php">Logout</a></p>' ;
    echo '</section></main>';
    
    include ("footer.html");
    
?>

