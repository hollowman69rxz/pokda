<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - <?= isset($title) ? $title : 'Dashboard'; ?></title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
</head>
<body>
<nav>
    <div class="nav-wrapper blue">
        <a href="<?= base_url('admin/dashboard'); ?>" class="brand-logo">Admin Panel</a>
        <a href="#" data-target="mobile-nav" class="sidenav-trigger">
            <i class="material-icons">menu</i>
        </a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
            <li><a href="<?= base_url('cms'); ?>">CMS</a></li>
            <li><a href="<?= base_url('users'); ?>">Users</a></li>
            <li><a href="<?= base_url('auth/logout'); ?>">Logout</a></li>
        </ul>
    </div>
</nav>

<!-- Mobile Navigation -->
<ul class="sidenav" id="mobile-nav">
    <li><a href="<?= base_url('admin/dashboard'); ?>">Dashboard</a></li>
    <li><a href="<?= base_url('cms'); ?>">CMS</a></li>
    <li><a href="<?= base_url('users'); ?>">Users</a></li>
    <li><a href="<?= base_url('auth/logout'); ?>">Logout</a></li>
</ul>

<div class="container">
