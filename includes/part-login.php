<?php

global $user_ID;
global $wpdb;

    if (isset($_POST['user_login']) && isset($_POST['user_password'])) {
        $user_login = $wpdb->escape($_POST['user_login']);
        $user_password = $wpdb->escape($_POST['user_password']);

        $credentials = array();
        $credentials['user_login'] = $user_login;
        $credentials['user_password'] = $user_password;
        $credentials['remember'] = true;
    
        if (empty($user_login)) {
            $logUsernameError = 'Please enter your Username';
            $logError[] = $logUsernameError;
        } elseif (strpos($user_login, ' ') !== FALSE) {
            $logUsernameError = "There is a space in the Username entered";
            $logError[] = $logUsernameError;
        } elseif (!username_exists($user_login)) {
            $logUsernameError = "Username does not exist";
            $logError[] = $logUsernameError;
        } elseif (username_exists($user_login)) {
            $logUsernameSuccess = "That's it";
        }

        if (empty($user_password)) {
            $logPasswordError = 'Please enter your Password';
            $logError[] = $logPasswordError;
        } 

        if (count($logError) == 0) {           
        }    
    }

?>

<div class="signInOptions">

    <a href="/signup">
        <button class="registerBtn" id="signupBtnSwitch">
            <h3>SIGNUP</h3>
        </button>
    </a>

    <a href="/reset-password">
        <button class="resetBtn" id="resetBtnSwitch">
            <h3>RESET</h3>
        </button>
    </a>
</div>
    
<form method="post" class='login-card card' id='loginForm' action="">

    <input type="hidden" name="action" value="thfw_custom_login">

    <?php
        if (empty($_POST)) {
            echo "<div class='username' id='loginUsername'>";
        } elseif (empty($user_login) || strpos($user_login, ' ') !== FALSE || !username_exists($user_login)) {
            echo "<p class='error'> $logUsernameError </p>
            <div class='username error' id='loginUsername'>";
        } elseif (username_exists($user_login)) {
            echo "<p class='success'> $logUsernameSuccess </p>
            <div class='username success' id='loginUsername'>";
        }
    ?>
        <label for="user_login">Username</label>
        <input type="text" name='user_login' id='user_login' placeholder='' value='<?php echo $user_login ?>'>
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
    </div>

    <?php
        if (empty($_POST) || !empty($user_password)) {
            echo "<div class='password' id='password'>";    
        } elseif (empty($user_password)) {
            echo "<p class='error'> $logPasswordError </p>
            <div class='password error' id='password'>";
        }
    ?>  
        <label for="password">Password</label>
        <input type="password" name='user_password' id='user_password' placeholder='' value='<?php echo $logPassword ?>'>
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
    </div>

    <div class="remember">
        <label for="remember">Remember</label>
        <input type="checkbox" name='remember' id="remember" value='false'>
    </div>

    <input type="hidden" name="nonce" value="<?php echo wp_create_nonce("ajax-login-nonce") ?>">

    <button id='loginBtn' type='submit' name='submit'>
        <h3>LOGIN</h3>
    </button>

</form>