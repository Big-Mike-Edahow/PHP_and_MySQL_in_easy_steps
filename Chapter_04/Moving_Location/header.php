<!-- header.php -->
<!-- Moving Location -->

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
            <h1 class="headline-h1">PHP and MySQL Moving Location ➡️</h1>
            <br><br>
            <?php
                if (isset( $_POST['id']))
                    {
                        $id = $_POST['id'];
                        if( $id== 123 ) 
                            { 
                                session_start();
                                $_SESSION['id'] = $id;
                                header('Location: location.php'); 
                                exit() ;
                            }
                        else
                            {
                            echo "<p>$id is an incorrect ID!</p>";
                            }
                    }

                echo '
                <form action="header.php" method="POST">
                <fieldset>
                <legend>Enter Your User ID</legend>
                <label>ID: <input type="text" name="id"></label>
                </fieldset>
                <br><br>
                <input type="submit" value="Submit">
                </form> ';
            ?>
        </section>
    </main>
</body>

</html>

