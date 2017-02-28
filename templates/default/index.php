<?php layout('layouts/default'); ?>
<?php section('title') ?>
<?= _('Login') ?>
<?php section('title') ?>
<?php section('styles') ?>

<?php section('styles') ?>


<?php section('content') ?>

    <div class="grid-40">
        <form method="POST" action="/login">
            <div class="grid-100 grid-parent">
                <label class="grid-30 grid-parent" for="username"><?= _('Username') ?></label>
                <input class="grid-70 grid-parent" id="username" type="text" name="username"
                       placeholder="<?= _('Username') ?>"
                       value="<?= $username ?>">
            </div>
            <div class="grid-100 grid-parent">
                <label class="grid-30 grid-parent" for="password"><?= _('Password') ?></label>
                <input class="grid-70 grid-parent" id="password" type="password" name="password"
                       placeholder="<?= _('Password') ?>"
                       value="<?= $password ?>">
            </div>
            <button name="login" class="grid-100 grid-parent"><?= _('Login') ?></button>
        </form>
    </div>
    <div class="grid-60">
        <h2>WebRPG</h2>
        <p><?= _('very long text') ?></p>
    </div>


<?php section('content') ?>

<?php section('scripts') ?>
    <script>


    </script>
<?php section('scripts') ?>

<?php layout('layouts/default'); ?>