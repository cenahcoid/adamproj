<div class="bg-primary text-white">
    <div class="py-1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2">
                    <a href="<?= base_url() ?>" class="text-white text-decoration-none d-flex justify-content-center">
                        <h1 class="h2">Elysia Book</h1>
                    </a>
                </div>
                <div class="col-lg-10">
                    <div class="dropdown d-flex justify-content-end mt-2">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
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
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-auto bg-primary">
            <div class="d-flex flex-column px-4 pt-2 text-white min-vh-100">
                <ul style="list-style-type: none; margin-left: -25%;" class="mb-sm-auto py-2" id="menu">
                    <li class="mb-1" style="font-size: 18px; font-weight:300;"><a href="<?= base_url() ?>" style="text-decoration:none; color:white;"><i class="bi bi-speedometer"></i> Dashboard</a></li>
                    <li class="mb-1" style="font-size: 18px; font-weight:300;"><a href="<?= base_url() ?>" style="text-decoration:none; color:white;"><i class="bi bi-people"></i> Member</a></li>
                    <hr>
                    <li class="mb-2" style="font-size: 18px; font-weight:300;">
                        <a style="text-decoration: none; color:white;" href="#nav1" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="bi bi-book"></i> Buku</a>
                        <div class="collapse" id="nav1">
                            <div class="card-body d-flex justify-content-center" style="width: 6rem;">
                                <ul style="text-decoration: none; list-style-type: none;">
                                    <li>Ensiklopedia</li>
                                    <li>Majalah</li>
                                    <li>Kamus</li>
                                    <li>Komik/Manga</li>
                                    <li>Novel</li>
                                    <li>Biografi</li>
                                    <li>Naskah</li>
                                    <li>Light Novel</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="mb-2" style="font-size: 18px; font-weight:300;">
                        <a style="text-decoration: none; color:white;" href="#nav2" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="bi bi-pencil"></i> Alat</a>
                        <div class="collapse" id="nav2">
                            <div class="card-body d-flex justify-content-center" style="width: 6rem;">
                                <ul style="text-decoration: none; list-style-type: none;">
                                    <li>Adhensive & Tape</li>
                                    <li>Alat Tulis</li>
                                    <li>Pemotong Kertas</li>
                                    <li>Penjilidan & Penyimpanan</li>
                                    <li>Produk Kertas</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="mb-2" style="font-size: 18px; font-weight:300;">
                        <a style="text-decoration: none; color:white;" href="#nav3" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="bi bi-display"></i> Teknologi</a>
                        <div class="collapse" id="nav3">
                            <div class="card-body d-flex justify-content-center" style="width: 5rem;">
                                <ul style="text-decoration: none; list-style-type: none;">
                                    <li>Kabel Dan Konektor</li>
                                    <li>Accessories</li>
                                    <li>Monitor</li>
                                    <li>Mouse</li>
                                    <li>Keyboard</li>
                                    <li>Headset</li>
                                    <li>Speaker</li>
                                    <li>Webcam & Modem</li>
                                    <li>Drawing Device</li>
                                    <li>Mousepad</li>
                                    <li>Printer</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <hr>
                    <li class="mb-1" style="font-size: 18px; font-weight:300;"><a href="#" style="text-decoration: none; color: white;"><i class="bi bi-box"></i> Barang Keluar</a></li>
                    <li class="mb-1" style="font-size: 18px; font-weight:300;"><a href="#" style="text-decoration: none; color: white;"><i class="bi bi-cash-coin"></i> Omset</a></li>
                </ul>
            </div>
        </div>
        <div class="col py-2">
            <div class="row">
                <div class="col-lg-12">
                    
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-dark text-white">
    <div class="d-flex justify-content-center py-4">&copy; Copyright 2023-<script>
            document.write(new Date().getFullYear());
        </script>
    </div>
</div>