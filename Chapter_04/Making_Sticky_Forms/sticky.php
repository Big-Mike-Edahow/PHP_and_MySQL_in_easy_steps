<!-- sticky.php -->
<!-- Making Sticky Forms -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" type="text/css" rel="stylesheet">
    <title>PHP Sticky Form</title>
</head>

<body>
    <main>
        <section class="container">
            <h1 class="headline-h1">PHP and MySQL Making Sticky Forms 🍬</h1>
            <br><br>
            <?php 
                # Check form submitted.
                if ($_SERVER['REQUEST_METHOD'] == 'POST')
                {
                # Initialize an error array.
                $errors = array();

                # Check for a name & email address.
                if (empty($_POST['name']))  {$errors[] = 'name';}
                else {$name = trim($_POST['name']);}

                if (empty($_POST['email'])) {$errors[] = 'email';}
                else {$email = trim($_POST['email']);}

                # Report result.
                if(!empty($errors))
                {
                    echo '<div class="error">Error! Please enter your ';
                    foreach ($errors as $msg) {echo " - $msg ";}
                    echo '</div';
                }  
                else 
                    {
                        echo '<div class="success">Success! Thanks ';
                        echo $name;
                        echo '!</div>';
                    }
                }
            ?>
            <!-- Display body section with sticky form. -->
            <form action="sticky.php" method="POST">
                <label>Name:
                    <input type="text" name="name" value="<?php if (isset($_POST['name'])) echo $_POST['name']; ?>">
                </label><br>
                <label>Email:
                    <input type="text" name="email" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>">
                </label><br><br>
                <input type="submit" value="Submit">
            </form>
        </section>
    </main>
</body>

</html>