<!-- breakcontinue.php -->
<!-- Breaking From Loops -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" type="text/css" rel="stylesheet">
    <title>PHP Breaking Loops</title>
</head>

<body>
    <main>
        <section class="container">
            <h1 class="headline-h1">PHP and MySQL Breaking From Loops ↩️</h1>
            <br><br>
            <article>
                <dl>
                    <?php
                        # Output each counter value.
                        for ($i = 1; $i < 4; $i++)
                            {
                                for ($j = 1; $j < 4; $j++)
                                    {
                                        if ($i == 1 && $j == 1)
                                            {
                                                echo "<b>Continues inner loop when i = $i and j = $j</b><br>";
                                                continue;
                                            }
                                        if($i == 2 && $j == 1)
                                            {
                                                echo "<b>Breaks inner loop when i = $i and j = $j</b><br>";
                                                break;
                                            }
                                        echo "<i>Running i = $i and j = $j</i><br>";
                                    }
                            }
                    ?>
                </dl>
            </article>
        </section>
    </main>
</body>

</html>

