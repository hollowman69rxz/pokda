<div class="container">
    <h4 class="center-align">Sign Up</h4>
    <form action="<?= base_url('auth/register'); ?>" method="POST">
        <div class="input-field">
            <input type="text" id="name" name="name" required>
            <label for="name">Nama</label>
        </div>
        <div class="input-field">
            <input type="email" id="email" name="email" required>
            <label for="email">Email</label>
        </div>
        <div class="input-field">
            <input type="password" id="password" name="password" required>
            <label for="password">Password</label>
        </div>
        <div class="input-field">
            <input type="password" id="confirm_password" name="confirm_password" required>
            <label for="confirm_password">Konfirmasi Password</label>
        </div>
        <button type="submit" class="btn waves-effect waves-light">Sign Up</button>
    </form>
</div>
