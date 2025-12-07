<!-- error.php -->
<!-- Handling Errors -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" type="text/css" rel="stylesheet">
    <title>PHP Error Handling</title>
</head>

<body>
    <main>
        <section class="container">
            <h1 class="headline-h1">PHP and MySQL Handling Errors ⚠️</h1>
            <br><br>
            <article>
                <?php
                    set_error_handler('error_handler');

                    function error_handler ($level, $message, $file, $line)
                    {
                    echo "Error [$level] : $message <br>(Check line $line in $file)";
                    }

                    $num = 500 ;
                    if ($num > 100) { trigger_error('Number must be less than 100' , E_USER_ERROR); }
                ?>
            </article>
        </section>
    </main>
</body>

</html>