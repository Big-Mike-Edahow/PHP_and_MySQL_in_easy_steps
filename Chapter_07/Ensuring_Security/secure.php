<!-- secure.php -->
<!-- Ensuring Security -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" type="text/css" rel="stylesheet">
    <title>PHP Security</title>
</head>

<body>
    <main>
        <section class="container">
            <h1 class="headline-h1">PHP and MySQL Ensuring Security 🔒</h1>
            <br><br>
            <form action="secure.php" method="POST">
                <Label>New Name:
                    <input type="text" name="name">
                </label><br><br>
                <input type="submit" value="Submit">
            </form>
            <?php
                # Connect to MySQL.
                require ('connect_db.php');

                # Validate field is not empty and not numeric.
                if (!empty($_POST['name'])  && !is_numeric($_POST['name']))
                {
                $name = $_POST['name'];
                
                # Make string safe for queries by allowing quotes.
                $name = mysqli_real_escape_string($dbc, $name);
                
                # Disallow HTML tags.
                $name = strip_tags($name);
                
                # Execute update.
                $q = 'UPDATE towels SET name = "' . $name . '" WHERE id = 1';
                mysqli_query($dbc, $q);
                }
                else { echo '<br><p>No valid new name submitted</p>'; }

                $q = 'SELECT * FROM towels WHERE id = 1';
                $r =  mysqli_query($dbc, $q);
                while ($row = mysqli_fetch_array($r, MYSQLI_NUM)) 
                { echo  "<p>Name : $row[1] </p>"; }
                mysqli_close($dbc);
            ?>
        </section>
    </main>
</body>

</html>