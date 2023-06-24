<div class="modal" id="sign_up">
    <div class="modal-content">
        <?php if (is_user_logged_in()) : ?>
            <?php include WP_PLUGIN_DIR . '/thfw/includes/part-dashboard.php';?>
        <?php else : ?>
            <div class="signInOptions">

                <button class="signup-Btn" id="signup_Btn">
                    <h3>SIGNUP</h3>
                </button>

                <button class="login-Btn" id="login_Btn">
                    <h3>LOGIN</h3>
                </button>
            </div>

            <?php include WP_PLUGIN_DIR . '/thfw/includes/part-signup.php'; ?>
            <?php include WP_PLUGIN_DIR . '/thfw/includes/part-login.php'; ?>
        <?php endif; ?>
        <span class="modal-close" id="modal_close">
            <h2>X</h2>
		</span>
    </div>
</div>