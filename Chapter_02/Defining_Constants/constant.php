<!-- constant.php -->
<!-- Defining Constants -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" type="text/css" rel="stylesheet">
    <title>PHP Constant</title>
</head>

<body>
    <main>
        <section class="container">
            <h1 class="headline-h1">PHP and MySQL Defining Constants 🗿</h1>
            <br><br>
            <article>
                <?php
                    # Create and initialize an array variable.
                    define( 'USER' , 'Mike' ) ;

                    # Display the constant value.
                    echo '<p>Hello ' . USER . '</p>' ;

                    # Display the PHP version.
                    echo '<p>You are using PHP version ' . PHP_VERSION ;

                    # Display the host operating system.
                    echo ' running on ' . PHP_OS . '</p>' ;
                ?>
            </article>
        </section>
    </main>
</body>

</html>

