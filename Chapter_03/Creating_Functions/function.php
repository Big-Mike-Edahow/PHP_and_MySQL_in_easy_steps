<!-- function.php -->
<!-- Creating Functions -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" type="text/css" rel="stylesheet">
    <title>PHP Functions</title>
</head>

<body>
    <main>
        <section class="container">
            <h1 class="headline-h1">PHP and MySQL Creating Functions 🧩</h1>
            <br><br>
            <article>
                <?php
                    # Create a global variable.
                    $result = 5 + 5;

                    function square()
                        {
                            $result = 5 * 5;
                            echo "Local Square Result = $result<br>";
                        }

                    function cube()
                        {
                            $result = 5 * 5 * 5;
                            echo "Local Cube Result = $result<br>";
                        }

                    echo "Global Sum Result = $result<br>";
                    square();
                    cube();
                ?>
            </article>
        </section>
    </main>
</body>

</html>

