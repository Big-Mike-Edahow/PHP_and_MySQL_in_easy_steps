<!-- ifelse.php -->
<!-- Branching Alternatives -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" type="text/css" rel="stylesheet">
    <title>PHP Conditional Branching</title>
</head>

<body>
    <main>
        <section class="container">
            <h1 class="headline-h1">PHP and MySQL Branching Alternatives ❓</h1>
            <br><br>
            <article>
                <?php
                    # Test one expression.
                    if ( 4 > 2 ) { echo '<p>Yes, 4 is greater than 2 <br>' ; } 

                    # Test two expressions.
                    if ( ( 4 > 2 ) && ( 8 > 4 ) ) { echo '4 is greater than 2 AND 8 is greater than 4<br>' ; }

                    # Test with a default output.
                    if ( 4 > 8 ) { echo '4 is greater than 8 <br>' ; } 
                    else { echo '4 is less than 8 <br>' ; } 

                    # Test with alternative.
                    if ( 4 > 8 ) { echo 'This test is True </p>' ; }
                    else if ( 8 > 4 ) { echo 'Alternative test is True </p>' ; }
                    else { echo 'Both tests are False </p>' ; } 
                ?>
            </article>
        </section>
    </main>
</body>

</html>

