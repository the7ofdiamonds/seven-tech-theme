<?php include '../js/main.js'; ?>  

<div class="signInOptions">
    <a href="/login">
        <button class="loginBtn" id="loginBtnSwitch">
            <h3>LOGIN</h3>
        </button>
    </a> 

    <a href="/reset-password">
        <button class="resetBtn" id="resetBtnSwitch">
            <h3>RESET</h3>
        </button>
    </a>
</div>

<?php
    //Registration
    global $wpdb;

    if ($_POST) {
        $regEmail = $wpdb->escape($_POST['regEmail']);
        $regUsername = $wpdb->escape($_POST['regUsername']);
        $regPassword = $wpdb->escape($_POST['regPassword']);
        $confPassword = $wpdb->escape($_POST['confPassword']);

        $regError = array();

        if (empty($regEmail)) {
            $regEmailError = 'Please enter your Email Address';
            $regError[] = $regEmailError;
        } elseif (!is_email($regEmail)) {
            $regEmailError = "Email Address not valid";
            $regError[] = $regEmailError;
        } elseif (email_exists($regEmail)) {
            $regEmailError = "Email already exists";
            $regError[] = $regEmailError;
        } elseif (!email_exists($regEmail)) {
            $regEmailSuccess = "Great choice!!";
        }

        if (empty($regUsername)) {
            $regUsernameError = 'Please enter your Username';
            $regError[] = $regUsernameError;
        } elseif (strpos($regUsername, ' ') !== FALSE) {
            $message = "There is a space in the Username entered";
            $regError[] = $regUsernameError;
        } elseif (username_exists($regUsername)) {
            $regUsernameError = "Username already exists";
            $regError[] = $regUsernameError;
        } elseif (!username_exists($regUsername)) {
            $regUsernameSuccess = "Cool Username";
            $regError[] = $regUsernameError;
        }

        if (empty($regPassword)) {
            $regPasswordError = 'Please choose a secure Password';
            $regError[] = $regPasswordError;
        } 
        
        if (empty($confPassword)) {
            $regConfPasswordError = 'Please confirm your Password';
            $regError[] = $regConfPasswordError;
        } 
        
        if (strcmp($regPassword, $confPassword) !== 0) {
            $regPasswordError = "Passwords don't match";
            $regConfPasswordError = "Passwords don't match";
            $regError[] = "Passwords don't match";
        }

        if (strcmp($regPassword, $confPassword) == 0) {
            $regPasswordSuccess = "Ready";
            $regConfPasswordSuccess = "Ready";
        }

        if (count($regError) == 0) {

            wp_create_user($regUsername, $regPassword, $regEmail);
            $_SESSION['username'] = $regUsername;
            echo "User Created Successfully";
            exit();
        }
    }
?>

<form method="POST" class='registration-card card' id='registration'>

    <?php
        if (empty($_POST)) {
            echo "<div class='email' id='registrationEmail'>";
        } elseif (empty($regEmail) || !is_email($regEmail) || email_exists($regEmail)) {
            echo "<p class='error'> $regEmailError </p>
            <div class='email error' id='registrationEmail'>";
        } elseif (!email_exists($regEmail)) {
            echo "<p class='success'> $regEmailSuccess </p>
            <div class='email success' id='registrationEmail'>";
        }
    ?>  <label for="email">Email</label>
        <input type='email' name='regEmail' id='regEmail' placeholder='Email Address' value='<?php echo $regEmail ?>'>
        <i class='fas fa-check-circle'></i>
        <i class='fas fa-exclamation-circle'></i>
    </div>

    <?php
        if (empty($_POST)) {
            echo "<div class='username' id='registrationUsername'>";
        } elseif (empty($regUsername) || strpos($regUsername, ' ') !== FALSE || username_exists($regUsername)) {
            echo "<p class='error'> $regUsernameError </p>
            <div class='username error' id='registrationUsername'>";
        } elseif (!username_exists($regUsername)) {
            echo "<p class='success'> $regUsernameSuccess </p>
            <div class='username success' id='registrationUsername'>";
        }
    ?>  
        <label for="username">Username</label>
        <input type="text" name='regUsername' id='regUsername' placeholder='Username' value='<?php echo $regUsername ?>'>
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
    </div>

    <?php
        if (empty($_POST)) {
            echo "<div class='password' id='password'>";    
        } elseif (empty($regPassword)) {
            echo "<p class='error'> $regPasswordError </p>
            <div class='password error' id='password'>";
        } elseif (strcmp($regPassword, $confPassword) !== 0) {
            echo "<p class='error'> $regPasswordError </p>
            <div class='password error' id='password'>";
        } elseif (strcmp($regPassword, $confPassword) == 0) {
            echo "<p class='success'> $regPasswordSuccess </p>
            <div class='password success' id='password'>";
        }    
    ?>
        <label for="password">Password</label>
        <input type="password" name='regPassword' id='regPassword' placeholder='Password' value='<?php echo $regPassword ?>'>
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
    </div>
    
    <?php
        if (empty($_POST)) {
            echo "<div class='confirm-password' id='confirmPassword'>";    
        } elseif (empty($confPassword)) {
            echo "<p class='error'> $regConfPasswordError </p>
            <div class='confirm-password error' id='confirmPassword'>";
        } elseif (strcmp($regPassword, $confPassword) !== 0) {
            echo "<p class='error'> $regConfPasswordSuccess </p>
            <div class='confirm-password error' id='confirmPassword'>";
        } elseif (strcmp($regPassword, $confPassword) == 0) {
            echo "<p class='success'> $regConfPasswordSuccess </p>
            <div class='confirm-password success' id='confirmPassword'>";
        }    
    ?>
        <label for="confirm-password">Confirm Password</label>
        <input type="password" name='confPassword' id='confPassword' placeholder='Confirm Password' value='<?php echo $confPassword ?>'>
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
    </div>

    <button type="submit">
        <h3>REGISTER</h3>
    </button>
</form>