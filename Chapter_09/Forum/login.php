<!-- login.php -->

<?php
# Start the session.
session_start();
# Set page title and display header section.
$page_title = "Login" ;
include ("header.html") ;

# Display any error messages if present.
if ( isset( $errors ) && !empty( $errors ) )
{
    $_SESSION['form_errors'] = $errors;
    header("Location: errors.php");
    exit;
}
?>

<main>
    <section class="container">
        <h1>Please Login. 🖥️</h1><br><br>
        <form action="login_action.php" method="post">
            <fieldset>
                <legend>Login</legend>
                <Label>Email Address:
                    <input type="text" name="email">
                </label><br>
                <label>Password:
                    <input type="password" name="pass">
                </label><br><br>
                <input type="submit" value="Login">
                <span style="margin-left: 20px;">Need to register first?</span><a id="login-link" href="index.php">Register</a>
            </fieldset>
        </form>
    </section>
</main>

<?php include ("footer.html"); ?>
