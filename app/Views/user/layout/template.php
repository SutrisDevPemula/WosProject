<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" name="viewport">
    <title>Dashboard &mdash; Stisla</title>

    <link rel="stylesheet" href="<?= base_url('assets/dist/modules/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/dist/modules/ionicons/css/ionicons.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/dist/modules/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css'); ?>">

    <link rel="stylesheet" href="<?= base_url('assets/dist/modules/summernote/summernote-lite.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/dist/modules/flag-icon-css/css/flag-icon.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/dist/css/style.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/select2/select2.min.css'); ?>">
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <ul class="navbar-nav mr-3">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="ion ion-navicon-round"></i></a></li>
                    <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="ion ion-search"></i></a></li>
                </ul>
            </nav>

            <?= $this->include('user/layout/sidebar'); ?>
            <div class="main-content">
                <?= $this->renderSection('content'); ?>
            </div>
        </div>
    </div>
    <script src="<?= base_url('assets/dist/modules/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('assets/dist/modules/popper.js'); ?>"></script>
    <script src="<?= base_url('assets/dist/modules/tooltip.js'); ?>"></script>
    <script src="<?= base_url('assets/dist/modules/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script src="<?= base_url('assets/dist/modules/nicescroll/jquery.nicescroll.min.js'); ?>"></script>
    <script src="<?= base_url('assets/dist/modules/scroll-up-bar/dist/scroll-up-bar.min.js'); ?>"></script>
    <script src="<?= base_url('assets/dist/js/sa-functions.js'); ?>"></script>

    <script src="<?= base_url('assets/dist/modules/summernote/summernote-lite.js'); ?>"></script>
    <script src="<?= base_url('assets/dist/js/scripts.js'); ?>"></script>
    <script src="<?= base_url('assets/dist/js/custom.js'); ?>"></script>
    <script src="<?= base_url('assets/select2/select2.min.js'); ?>"></script>

</body>

</html>