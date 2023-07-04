<div class="navbar bg-primary text-white">
    <div class="container-fluid">
        <a href="<?= base_url() ?>" class="mx-3 text-white text-decoration-none">
            <h1 class="h2">Elysia Book</h1>
        </a>
        <div class="dropdown">
            <a href="#" class="mx-5 text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="assets/img/icon.gif" alt="hugenerd" width="30" height="30" class="rounded-circle">
                <span class="d-none d-sm-inline mx-1"><?= $sess->user->nama ?></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-light text-small shadow">
                <li><a class="dropdown-item" href="<?php if (isset($sess->user->id)) { ?>
                        <?= base_url('logout');
                                                    } ?>">Sign out</a></li>
            </ul>
        </div>
    </div>
</div>