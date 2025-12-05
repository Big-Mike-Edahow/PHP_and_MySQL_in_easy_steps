<!-- argument.php -->
<!-- Passing Arguments -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" type="text/css" rel="stylesheet">
    <title>PHP Arguments</title>
</head>

<body>
    <main>
        <section class="container">
            <h1 class="headline-h1">PHP and MySQL Passing Arguments ✉️</h1>
            <br><br>
            <article>
                <?php
                    # Create a global variable.
                    $number = 5;

                    function square($number)
                        {
                            $result = $number * $number;
                            echo "$number Squared = $result<br>";
                        }

                    function cube($number)
                        {
                            $result = $number * $number * $number;
                            echo "$number Cubed = $result<br>";
                        }

                    square(3);
                    cube(4);
                    square($number);
                    cube($number);
                ?>
            </article>
        </section>
    </main>
</body>

</html>

