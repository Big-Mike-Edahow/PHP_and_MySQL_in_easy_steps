<?php
    # register.php

    # Start the session.
    session_start();

    # Set the page title.
    $page_title = "Registration Page";

    # Check form submitted.
    if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
        {
            # Connect to the database.
            require ('connect_db.php'); 
            
            # Initialize an error array.
            $errors = array();

            # Check for a first name.
            if ( empty( $_POST[ 'firstname' ] ) )
            { $errors[] = 'Enter your first name.' ; }
            else
            { $fn = mysqli_real_escape_string( $dbc, trim( $_POST[ 'firstname' ] ) ) ; }

            # Check for a last name.
            if (empty( $_POST[ 'lastname' ] ) )
            { $errors[] = 'Enter your last name.' ; }
            else
            { $ln = mysqli_real_escape_string( $dbc, trim( $_POST[ 'lastname' ] ) ) ; }

            # Check for an email address:
            if ( empty( $_POST[ 'email' ] ) )
            { $errors[] = 'Enter your email address.'; }
            else
            { $e = mysqli_real_escape_string( $dbc, trim( $_POST[ 'email' ] ) ) ; }

            # Check for a password and matching input passwords.
            if ( !empty($_POST[ 'pass1' ] ) )
                {
                    if ( $_POST[ 'pass1' ] != $_POST[ 'pass2' ] )
                    { $errors[] = 'Passwords do not match.' ; }
                    else
                    { $p = mysqli_real_escape_string( $dbc, trim( $_POST[ 'pass1' ] ) ) ; }
                }
            else { $errors[] = 'Enter your password.' ; }
    
            # Check if email address already registered.
            if ( empty( $errors ) )
            {
                $q = "SELECT id FROM users WHERE email='$e'" ;
                $r = @mysqli_query ( $dbc, $q ) ;
                if ( mysqli_num_rows( $r ) != 0 ) $errors[] = 'Email address already registered.' ;
            }
            
            # On success register user inserting into 'users' database table.
            if ( empty( $errors ) ) 
                {
                    $q = "INSERT INTO users (firstname, lastname, email, passwd, created) VALUES ('$fn', '$ln', '$e', SHA2('$p',256), NOW() )";
                    $r = @mysqli_query ( $dbc, $q ) ;
                    if ($r)
                        { 
                            include ("header.html");

                            echo '<main>';
                            echo '<section class="container">';
                            echo '<h1>Registered!</h1><br>';
                            echo '<p>You are now registered.</p><br>';
                            echo '<p><a href="login.php">Login</a></p>';
                            echo '</section>';
                            echo '</main>';
                            
                            include ("footer.html");
                        }
            
                    # Close database connection.
                    mysqli_close($dbc); 

                    # Quit script:
                    exit();
                }
                # Or report errors.
                else 
                    {
                        $_SESSION['form_errors'] = $errors;
                        header("Location: errors.php");
                        exit;
                    }  
        }
?>

<?php include ("header.html"); ?>

<main>
    <section class="container">
        <h1>Please Register. ✍️</h1><br><br>
        <form action="register.php" method="post">
            <fieldset>
                <legend>Register</legend>
                <label>First Name:
                    <input type="text" name="firstname" size="20"
                        value="<?php if (isset($_POST['first_name'])) echo $_POST['first_name']; ?>">
                </label><br>
                <label>Last Name:
                    <input type="text" name="lastname" size="20"
                        value="<?php if (isset($_POST['last_name'])) echo $_POST['last_name']; ?>">
                </label><br>
                <label>Email Address:
                    <input type="text" name="email" size="20"
                        value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>">
                </label><br>
                <label>Choose Password:
                    <input type="password" name="pass1" size="20"
                        value="<?php if (isset($_POST['pass1'])) echo $_POST['pass1']; ?>">
                </label><br>
                <label>Confirm Password:
                    <input type="password" name="pass2" size="20"
                        value="<?php if (isset($_POST['pass2'])) echo $_POST['pass2']; ?>">
                </label>
                <br><br>
                <input type="submit" value="Register">
                <span style="margin-left: 20px;">Already registered?</span><a id="login-link" href="login.php">Login</a>
            </fieldset>
        </form>
    </section>
</main>

<?php include ("footer.html"); ?>
