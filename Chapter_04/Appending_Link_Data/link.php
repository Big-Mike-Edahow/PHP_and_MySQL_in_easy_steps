<!-- link.php -->
<!-- Appending Link Data -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" type="text/css" rel="stylesheet">
    <title>PHP Link Data</title>
</head>

<body>
    <main>
        <section class="container">
            <h1 class="headline-h1">PHP and MySQL Appending Link Data ➕</h1>
            <br><br>
            <article>
                <?php
                    # Handle the submitted link data.
                    if (isset($_GET['id'])) 
                    {
                    $id = $_GET['id'];
                    
                    switch($id)
                    {
                        case 1: echo 'Cow selected<hr>'; break;
                        case 2: echo 'Dog selected<hr>'; break;
                        case 3: echo 'Goat selected<hr>'; break;
                    }
                    }

                    # Display hyperlinks with appended id values.
                    echo '<h2>Select a buddy</h2>';
                    echo ' <p><a href="link.php?id=1">Cow</a> |';
                    echo ' <a href="link.php?id=2">Dog</a> | ';
                    echo ' <a href="link.php?id=3">Goat</a></p>';
                ?>
            </article>
        </section>
    </main>
</body>

</html>
