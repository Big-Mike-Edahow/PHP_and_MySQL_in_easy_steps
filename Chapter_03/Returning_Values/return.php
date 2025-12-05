<!-- return.php -->
<!-- Returning Values -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" type="text/css" rel="stylesheet">
    <title>PHP Returns</title>
</head>

<body>
    <main>
        <section class="container">
            <h1 class="headline-h1">PHP and MySQL Returning Values 🔙</h1>
            <br><br>
            <article>
                <?php
                    date_default_timezone_set('UTC');
                    $user = ' Mike';

                    function display_date()
                        {
                            return date('l, jS F');
                        }

                    function welcome($user)
                        {
                            $hour = date('H');
                            $greeting = ($hour < 12) ? '<br>Good Morning,' : '<br>Good Day,';
                            $greeting .= $user;
                            $greeting .= ".";
                            return $greeting;
                        }

                    echo display_date();
                    echo welcome($user);
                ?>
            </article>
        </section>
    </main>
</body>

</html>

