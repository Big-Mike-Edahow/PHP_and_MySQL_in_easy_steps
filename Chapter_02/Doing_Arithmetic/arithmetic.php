<!-- arithmetic.php -->
<!-- Doing Arithmetic -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" type="text/css" rel="stylesheet">
    <title>PHP Arithmetic</title>
</head>

<body>
    <main>
        <section class="container">
            <h1 class="headline-h1">PHP and MySQL Doing Arithmetic ➕</h1>
            <br><br>
            <article>
                <?php
                    # Create and initialize variables.
                    $a = 4; 
                    $b = 8;

                    # Display the result of arithmetical operations.
                    $result = $a + $b; echo "Addition : $result <br>";
                    $result = $b - $a; echo "Subtraction : $result <br>";
                    $result = $a * $b; echo "Multiplication : $result <br>";
                    $result = $b / $a; echo "Division : $result <br>";
                    $result = $a % $b; echo "Modulo : $result <br>";

                    # Display the result of increment/decrement operations.
                    $a++; echo "Increment : $a <br>";
                    $b--; echo "Decrement : $b <br>";
                ?>
            </article>
        </section>
    </main>
</body>

</html>

