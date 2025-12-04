<!-- matrix.php -->
<!-- Describing Dimensions -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" type="text/css" rel="stylesheet">
    <title>PHP Matrix</title>
</head>

<body>
    <main>
        <section class="container">
            <h1 class="headline-h1">PHP and MySQL Describing Dimensions 🔛</h1>
            <br><br>
            <article>
                <?php
                    # Create and initialize array variables.
                    $letters = array( 'A' , 'B' , 'C' ) ;
                    $numbers = array( 1 , 2 , 3 ) ;
                    $matrix = array( 'Letter' => $letters , 'Number' => $numbers ) ;

                    # Display the value of the first array element.
                    echo "<p>Start : {$matrix['Letter'][0]} </p>" ;

                    # Display the value of every element.
                    foreach( $matrix as $array => $list )
                    { 
                    echo '<ul>' ;
                    foreach( $list as $key => $value ) { echo "<li>$array [ $key ] = $value " ; }
                    echo '</ul>' ;
                    } 
                    ?>
            </article>
        </section>
    </main>
</body>

</html>

