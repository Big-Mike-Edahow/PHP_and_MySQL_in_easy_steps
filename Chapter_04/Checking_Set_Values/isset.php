<!-- isset.php -->
<!-- Checking Set Values -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" type="text/css" rel="stylesheet">
    <title>PHP Form Is Set</title>
</head>

<body>
    <main>
        <section class="container">
            <h1 class="headline-h1">PHP and MySQL Checking Set Values 🔎</h1>
            <br><br>
            <form action="isset_handler.php" method="POST">
                <fieldset>
                    <legend>What kind of language is PHP?</legend>
                    <input type="radio" name="definition" value="Scripting"><label>Scripting</label><br>
                    <input type="radio" name="definition" value="Markup"><label>Markup</label><br>
                    <input type="radio" name="definition" value="Programming"><label>Programming</label>
                </fieldset>
                <input type="submit" value="Submit">
            </form>
        </section>
    </main>
</body>

</html>