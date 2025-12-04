<!-- logic.php -->
<!-- Assessing Logic -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" type="text/css" rel="stylesheet">
    <title>PHP Logic</title>
</head>

<body>
    <main>
        <section class="container">
            <h1 class="headline-h1">PHP and MySQL Assessing Logic 🔎</h1>
            <br><br>
            <article>
                <?php
                    # Create and initialize variables.
                    $yes = TRUE ;
                    $no = FALSE ;

                    # Display the result of AND operations.
                    $result = ( $no && $no ) ? 'TRUE' : 'FALSE'; echo "No AND No returns $result <br>";
                    $result = ( $yes && $no ) ? 'TRUE' : 'FALSE'; echo "Yes AND No returns $result <br>";
                    $result = ( $yes && $yes ) ? 'TRUE' : 'FALSE'; echo "Yes AND Yes returns $result <hr>";

                    # Display the result of OR operations
                    $result = ( $no || $no ) ? 'TRUE' : 'FALSE'; echo "No OR No returns $result <br>";
                    $result = ( $yes || $no ) ? 'TRUE' : 'FALSE'; echo "Yes OR No returns $result <br>";
                    $result = ( $yes || $yes ) ? 'TRUE' : 'FALSE'; echo "Yes OR Yes returns $result <hr>";

                    # Display the result of NOT operation.
                    $result = ( ! $yes ) ? 'TRUE' : 'FALSE'; echo "NOT Yes returns $result <br>";
                ?>
            </article>
        </section>
    </main>
</body>

</html>

