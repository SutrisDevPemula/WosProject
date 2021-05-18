<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <img src="<?= base_url('assets/img/honda.jpg'); ?>" alt="" style="width: 5rem;" class="mt-2 mb-5">
        </div>
        <ul class="sidebar-menu mt-5">
            <li class="menu-header">Dashboard</li>
            <li>
                <a href="<?= base_url('/admin'); ?>"><i class="ion ion-speedometer"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Menu</li>
            <li>
                <a href="#" class="has-dropdown"><i class="ion fas fa-database"></i><span>Data Master</span></a>
                <ul class="menu-dropdown">
                    <li>
                        <a href="<?= base_url('admin/user'); ?>"><i class="ion fas fa-user"></i><span>User</span></a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/ekspedisi'); ?>"><i class="ion fas fa-truck"></i><span>Ekspedisi</span></a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/motor'); ?>"><i class="ion fas fa-motorcycle"></i><span>Motor</span></a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/kerusakan'); ?>"><i class="ion fas fa-cookie-bite"></i><span>Kerusakan</span></a>
                    </li>
                    <!-- <i class="fas fa-heart-broken"></i> -->
                </ul>
            </li>
        </ul>
        <div class="p-3 mt-4 mb-4 position-fixed-bottom">
            <a href="http://stisla.multinity.com/" class="btn btn-danger btn-shadow btn-round has-icon has-icon-nofloat btn-block">
                <i class="ion ion-help-buoy"></i>
                <div>Go PRO!</div>
            </a>
        </div>
    </aside>
</div>