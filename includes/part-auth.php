<?php if (is_user_logged_in()) : ?>
    <button class="sign exit-sign" onclick="window.location.href='/logout';">
        <h3>EXIT</h3>
    </button>
<?php else : ?>
    <button class="sign enter-sign" onclick="window.location.href='/login';">
        <h3>START</h3>
    </button>
<?php endif; ?>