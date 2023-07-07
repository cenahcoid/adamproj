<nav class="sb-topnav navbar navbar-expand navbar-primary bg-primary">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="<?php base_url() ?>"><h1 class="h2 text-white">Elysia Book</h1></a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="bi bi-arrow-bar-left"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="input-group">
            <input hidden class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
            <button hidden class="btn btn-dark" id="btnNavbarSearch" type="button"><i class="bi bi-search"></i></button>
        </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person-circle text-white"></i>
                <span class="d-none d-sm-inline mx-1 text-white"><?= $sess->user->nama ?></span></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="<?php if (isset($sess->user->id)) { ?><?= base_url('logout');
                                                                                        } ?>">Logout</a></li>
            </ul>
        </li>
    </ul>
</nav>