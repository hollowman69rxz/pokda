<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P.U.S : <?= isset($title) ? $title : 'Beranda'; ?></title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
</head>
<body>
<!-- Navbar -->
<nav class="navbar">
    <div class="nav-wrapper">
        <a href="<?= base_url('home'); ?>" class="brand-logo">POKDAKAN</a>
        <!-- Toggle Button for Mobile -->
        <a href="#" data-target="mobile-demo" class="sidenav-trigger">
            <i class="material-icons">menu</i>
        </a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="<?= base_url('home'); ?>">Beranda</a></li>
            <li><a href="<?= base_url('about'); ?>">Tentang</a></li>
            <li><a href="<?= base_url('gallery'); ?>">Galeri</a></li>
            <li><a href="<?= base_url('contact'); ?>">Kontak</a></li>
            <li>
                <!-- Trigger Dropdown -->
                <a class="dropdown-trigger" href="#" data-target="dropdown-auth">Akun<i class="material-icons right">arrow_drop_down</i></a>
            </li>
        </ul>

        <!-- Dropdown Structure -->
        <ul id="dropdown-auth" class="dropdown-content">
            <li><a href="<?= base_url('auth/signin'); ?>">Sign in</a></li>
            <li><a href="<?= base_url('auth/signup'); ?>">Sign up</a></li>
        </ul>
                
    </div>

    <div class="nav-wrapper">
        
    </div>
</nav>

<!-- Sidenav for Mobile -->
<ul class="sidenav" id="mobile-demo">
    <li><a href="<?= base_url('home'); ?>">Beranda</a></li>
    <li><a href="<?= base_url('about'); ?>">Tentang</a></li>
    <li><a href="<?= base_url('gallery'); ?>">Galeri</a></li>
    <li><a href="<?= base_url('contact'); ?>">Kontak</a></li>
</ul>