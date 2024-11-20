<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <!-- Materialize CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="blue lighten-5">

<div class="container">
    <br><br><br><br>
    <div class="row">
        <div class="col s12 m6 offset-m3">
            <div class="card z-depth-3">
                <div class="card-content">
                    <h4 class="center-align blue-text">Sign In</h4>
                    <?php if (!empty($error)): ?>
                        <div class="card-panel red lighten-4 red-text text-darken-4">
                            <?= $error; ?>
                        </div>
                    <?php endif; ?>
                    <form action="<?= base_url('dashboard'); ?>" method="POST">
                        <div class="input-field">
                            <i class="material-icons prefix">email</i>
                            <input type="email" id="email" name="email" required>
                            <label for="email">Email</label>
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix">lock</i>
                            <input type="password" id="password" name="password" required>
                            <label for="password">Password</label>
                        </div>
                        <button type="submit" class="btn waves-effect waves-light blue w-100">Sign In</button>
                    </form>
                </div>
                <div class="card-action center-align">
                    <p>Belum punya akun? <a href="<?= base_url('signup'); ?>">Sign Up</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Materialize JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
