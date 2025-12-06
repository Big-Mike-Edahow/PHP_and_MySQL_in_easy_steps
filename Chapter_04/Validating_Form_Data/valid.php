<!-- valid.php -->
<!-- Validating Form Data -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" type="text/css" rel="stylesheet">
    <title>PHP Form Validation</title>
</head>

<body>
    <main>
        <section class="container">
            <h1 class="headline-h1">PHP and MySQL Validating Form Data ✔️</h1>
            <br><br>
            <form action="valid_handler.php" method="POST">
                <fieldset>
                    <legend>Enter a quantity and email address</legend>
                    <label>Quantity:
                        <input type="text" name="quantity"></label><br>
                    <label>Email Address:
                        <input type="text" name="email"></label>
                </fieldset>
                <input type="submit" value="Submit">
            </form>
        </section>
    </main>
</body>

</html>

