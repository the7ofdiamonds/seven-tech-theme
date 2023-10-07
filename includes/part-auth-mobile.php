<?php if (is_user_logged_in()) : ?>
    <button class="sign exit-sign" onclick="window.location.href='/logout';">
        <h2>EXIT</h2>
    </button>
<?php else : ?>
    <button class="sign enter-sign" onclick="window.location.href='/login';">
        <h2>ENTER</h2>
    </button>
<?php endif; ?>