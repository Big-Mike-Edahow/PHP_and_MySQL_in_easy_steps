<!-- errors.php -->

<?php
    # Set the page title.
    $page_title = "Errors Page";

    # Include the header.
    include ("header.html");
?>

<main>
    <section class="container">
        <?php
            # Start the session.
            session_start();

            # Get the errors from the session.
            $errors = $_SESSION['form_errors'];

            echo '<h1>Error!</h1><br><h2 id="err_msg">The following error(s) occurred:</h2><br><br>' ;
            foreach ( $errors as $msg )
                { echo "<p> - $msg</p>" ; }
        ?>
        <br>
        <button id="back-button">Go Back 🔙</button>
    </section>
</main>

<?php include ("footer.html"); ?>

