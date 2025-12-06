<!-- action_handler.php -->
<!-- Process Form Data -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" type="text/css" rel="stylesheet">
    <title>PHP Form Action Handler</title>
</head>

<body>
    <main>
        <section class="container">
            <article>
                <?php
                    # Replicate the HTML name attributes.
                    $name = $_POST['name'];
                    $mail = $_POST['mail'];
                    $comment = $_POST['comment'];

                    # Display the submitted data.
                    echo "<p><b>Thanks for this comment $name ...</b></p><br>";
                    echo "<p><i>$comment</i></p><br>";
                    echo "<p>We will reply to $mail</p>"; 
                ?>
            </article>
        </section>
    </main>
</body>

</html>

