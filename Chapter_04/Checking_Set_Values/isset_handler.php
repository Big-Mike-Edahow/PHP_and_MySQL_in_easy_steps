<!-- isset_handler.php -->
<!-- Handle Form Submission -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" type="text/css" rel="stylesheet">
    <title>PHP Form Isset Handler</title>
</head>

<body>
    <main>
        <section class="container">
            <article>
                <?php
                    if ( isset( $_POST['definition'] ) ) 
                    { $definition = $_POST['definition']; }
                    else
                    { $definition = NULL; }

                    if ( $definition != NULL )
                    {
                    if ( $definition != 'Scripting' ) { echo "$definition is Incorrect"; }
                    else { echo "$definition is Correct"; }
                    }
                    else { echo 'You must select one answer'; }
                ?>
            </article>
        </section>
    </main>
</body>

</html>

