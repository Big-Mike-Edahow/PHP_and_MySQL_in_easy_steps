<!-- switch.php -->
<!-- Switching Branches -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" type="text/css" rel="stylesheet">
    <title>PHP Switch Branching</title>
</head>

<body>
    <main>
        <section class="container">
            <h1 class="headline-h1">PHP and MySQL Switching Branches 🔄</h1>
            <br><br>
            <article>
                <?php
                    # Create two variables.
                    $number = 2;
                    $letter = 'B';

                    # Match integer value.
                    switch ($number)
                    {
                    case 1: echo 'Number is One<br>'; break;
                    case 2: echo 'Number is Two<br>'; break;
                    case 3: echo 'Number is Three<br>'; break;
                    default: echo 'Number is Unrecognized<br>';
                    }

                    # Match character value.
                    switch ($letter )
                    {
                    case 'A': echo 'Letter is A<br>'; break;
                    case 'B': echo 'Letter is B<br>'; break;
                    case 'C': echo 'Letter is C<br>'; break;
                    default: echo 'Letter is Unrecognized<br>';
                    }

                    switch ($number)
                    {
                    case 0:
                    case 1:
                    case 2: echo 'Less than 3<br>'; break;
                    default: echo '3 or more, or less than zero';
                    }
                ?>
            </article>
        </section>
    </main>
</body>

</html>

