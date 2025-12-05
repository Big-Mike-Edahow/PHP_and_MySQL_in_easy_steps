<!-- whileloop.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" type="text/css" rel="stylesheet">
    <title>PHP While Loops</title>
</head>

<body>
    <main>
        <section class="container">
            <h1 class="headline-h1">PHP and MySQL Looping While True ⤴️</h1>
            <br><br>
            <article>
                <dl>
                    <?php
                        # Create an array.
                        $numbers = array(10, 20, 30);

                        # Output each element value.
                        echo '<dt>While Loop :';
                        echo '<hr>';
                        $i = 0;
                        while ($i < 3)
                            {
                                echo "<dd>Element $i = $numbers[$i]";
                                $i++;
                            }
                        echo '<dt>Do While Loop :';
                        echo '<hr>';
                        $i = 0;
                        do
                            {
                                echo "<dd>Element $i = $numbers[$i]";
                                $i++;
                            }
                        while ($i < 3);
                    ?>
                </dl>
            </article>
        </section>
    </main>
</body>

</html>

