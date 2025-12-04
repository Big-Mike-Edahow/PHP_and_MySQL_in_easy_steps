<!-- comparison.php -->
<!-- Comparing Values -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" type="text/css" rel="stylesheet">
    <title>PHP Comparison</title>
</head>

<body>
    <main>
        <section class="container">
            <h1 class="headline-h1">PHP and MySQL Comparing Values ⚖️</h1>
            <br><br>
            <article>
                <?php
                    # Create and initialize variables.
                    $zero = 0;
                    $nil = 0;
                    $one = 1;
                    $upr = 'A';
                    $lwr = 'a';

                    # Display the result of equality operations.
                    $result = ($zero == $nil) ? 'TRUE' : 'FALSE'; echo "0 == 0 is $result <br>";
                    $result = ($zero == $one) ? 'TRUE' : 'FALSE'; echo "0 == 1 is $result <br>";
                    $result = ($upr == $lwr) ? 'TRUE' : 'FALSE'; echo "A == a is $result <br>";
                    $result = ($upr != $lwr) ? 'TRUE' : 'FALSE'; echo "A != a is $result <hr>";

                    # Display the result of greater/lesser operations.
                    $result = ($one > $nil) ? 'TRUE' : 'FALSE'; echo "1 > 0 is $result <br>";
                    $result = ($zero >= $nil) ? 'TRUE' : 'FALSE'; echo "0 >= 0 is $result <br>";
                    $result = ($one <= $nil) ? 'TRUE' : 'FALSE'; echo "1 <= 0 is $result <br>";
                ?>
            </article>
        </section>
        <main>
</body>

</html>

