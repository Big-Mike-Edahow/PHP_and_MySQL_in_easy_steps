<!-- action.php -->
<!-- Performing Actions -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" type="text/css" rel="stylesheet">
    <title>PHP Form Action</title>
</head>

<body>
    <main>
        <section class="container">
            <h1 class="headline-h1">PHP and MySQL Performing Actions ➡️</h1>
            <br><br>
            <form action="action_handler.php" method="POST">
                <fieldset>
                    <legend>Contact Information</legend>
                    <label>Name:
                        <input type="text" name="name"></label><br>
                    <label>Email Address:
                        <input type="text" name="mail"></label><br>
                    <label>Comments:
                        <textarea name="comment" rows="5" cols="20"></textarea></label>
                    <br><br>
                    <input type="submit" value="Submit">
                </fieldset>
            </form>
        </section>
    </main>
</body>

</html>

