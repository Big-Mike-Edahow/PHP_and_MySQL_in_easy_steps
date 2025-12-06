<!-- single.php -->
<!-- Handling Submissions -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" type="text/css" rel="stylesheet">
    <title>PHP Single Form & Response</title>
</head>

<body>
    <main>
        <section class="container">
            <h1 class="headline-h1">PHP and MySQL Handling Submissions 📋</h1>
            <br><br>
            <?php
                if ($_SERVER[ 'REQUEST_METHOD' ] != 'POST') 
                    {
                        # Display the form.
                        echo '
                        <form action="single.php" method="POST">
                        <fieldset>
                        <legend>Send us your comments</legend>
                        <textarea rows="5" cols="40" name="comment"></textarea>
                        </fieldset>
                        <input type="submit" value="Submit">
                        </form> ';
                    }
                else
                    {
                        # Handle the form submission.
                        # Empty check.
                        if ( !empty ( $_POST['comment']))
                            {
                                $comment = $_POST['comment'];   
                                echo "<p>Comment: $comment </p>";
                            }
                        else
                            { 
                                $comment = NULL ;
                                echo '<p>You must enter a comment</p>';
                            }
                    }
            ?>
        </section>
    </main>
</body>

</html>

