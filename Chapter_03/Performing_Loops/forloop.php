<!-- forloop.php -->
<!-- Performing Loops -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" type="text/css" rel="stylesheet">
    <title>PHP For Loops</title>
</head>

<body>
    <main>
        <section class="container">
            <h1 class="headline-h1">PHP and MySQL Performing Loops 🔄</h1>
            <br><br>
            <article>
                <dl>
                    <?php
                        # Output loop counter values.
                        for ($i = 1; $i < 4; $i++)
                            {
                                echo "<dt>Outer loop iteration $i</dt>";
                                echo "<hr>";
                                for ($j = 1; $j < 4; $j++)
                                    {
                                        echo "<dd>Inner loop iteration $j</dd>";
                                    } 
                            }
                    ?>
                </dl>
            </article>
        </section>
    </main>
</body>

</html>

