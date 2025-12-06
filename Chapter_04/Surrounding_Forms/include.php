<?php
    $page_title = 'PHP Include' ;

    include ('includes/header.html') ;

    echo '<main><section class="container">';
    echo '<h1 class="headline-h1">PHP and MySQL Surrounding Forms 📋</h1><br><br>';
    echo '<form action="include.php" method="POST">
    <label>Name: <input type="text" name="name"> </label><br>
    <label>Email: <input type="text" name="email" ></label><br><br>
    <input type="submit" value="Submit">
    </form>';
    echo '</section></main>';

    include ('includes/footer.html') ; 
?>
