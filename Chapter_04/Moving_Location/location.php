<!-- location.php -->
<!-- Redirect Location -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" type="text/css" rel="stylesheet">
    <title>PHP Location Header</title>
</head>

<body>
    <main>
        <section class="container">
            <article>
                <?php
                    session_start();

                    if (isset( $_SESSION['id']))
                    {
                    $id = $_SESSION['id'];
                    echo '<h1 class="headline-h1">Use of Deadly Force Authorized—AREA 51 🛸</h1><br><br>';
                    echo '<img src="UFO.png" width="400px"><br><br>';
                    echo "<p>Welcome User ID #$id</p>";
                    }
                ?>
            </article>
        </section>
    </main>
</body>

</html>

