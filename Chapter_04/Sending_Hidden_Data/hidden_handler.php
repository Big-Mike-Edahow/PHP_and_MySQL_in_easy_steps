<!-- hidden_handler.php -->
<!-- Handle Form Submission -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" type="text/css" rel="stylesheet">
    <title>PHP Hidden Data Handler</title>
</head>

<body>
    <main>
        <section class="container">
            <article>
                <?php
                    # Empty check.
                    if (!empty ($_POST['comment']))
                    {
                    $comment = $_POST['comment']; 
                    }
                    else
                    { 
                    $comment = NULL;
                    echo 'You must enter a comment';
                    }

                    # Set checks.
                    $time = (!isset ($_POST['time'])) ? NULL : $_POST['time'];
                    $user = (!isset ($_POST['user'])) ? NULL : $_POST['user'];
                    
                    # Success response.
                    if (($comment != NULL)  && ($time != NULL) && ($user != NULL )) 
                    { 
                    echo "<p>Comment received : \" $comment \"<br>From $user at $time </p>"; 
                    }
                ?>
            </article>
        </section>
    </main>
</body>

</html>

