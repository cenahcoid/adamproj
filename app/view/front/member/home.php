<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav bg-primary " id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading text-white">Header</div>
                    <a class="nav-link " href="<?= base_url() ?>">
                        <div class="sb-nav-link-icon"><i class="bi bi-speedometer"></i></div>
                        Dashboard
                    </a>
                    <a class="nav-link " href="<?= base_url('member') ?>">
                        <div class="sb-nav-link-icon"><i class="bi bi-person-badge"></i></div>
                        Karyawan
                    </a>
                    <div class="sb-sidenav-menu-heading text-white">Body</div>
                    <a class="nav-link collapsed " href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="bi bi-book"></i></div>
                        Buku
                        <div class="sb-sidenav-collapse-arrow"><i class="bi bi-caret-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="#">Ensiklopedia</a>
                            <a class="nav-link" href="#">Majalah</a>
                            <a class="nav-link" href="#">Kamus</a>
                            <a class="nav-link" href="#">Komik/Manga</a>
                            <a class="nav-link" href="#">Novel</a>
                            <a class="nav-link" href="#">Biografi</a>
                            <a class="nav-link" href="#">Naskah</a>
                            <a class="nav-link" href="#">Light Novel</a>
                        </nav>
                    </div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                        <div class="sb-nav-link-icon"><i class="bi bi-pencil"></i></div>
                        Alat
                        <div class="sb-sidenav-collapse-arrow"><i class="bi bi-caret-down"></i></div>
                    </a>
                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                <a class="nav-link" href="#">Adhensive & Tape</a>
                                <a class="nav-link" href="#">Alat Tulis</a>
                                <a class="nav-link" href="#">Pemotong Kertas</a>
                                <a class="nav-link" href="#">Penjilidan & Penyimpanan</a>
                                <a class="nav-link" href="#">Produk Kertas</a>
                            </a>
                        </nav>
                    </div>
                    <div class="sb-sidenav-menu-heading text-white">Footer</div>
                    <a class="nav-link" href="#">
                        <div class="sb-nav-link-icon"><i class="bi bi-clock-history"></i></div>
                        History Log
                    </a>
                    </a>
                    <a class="nav-link" href="#">
                        <div class="sb-nav-link-icon"><i class="bi bi-cash-coin"></i></div>
                        Data Penjualan
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer text-white">
                <div class="small">Logged in as:</div>
                <?= $sess->user->nama ?>
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-2 py-2">
                <h1 class="py-1">Data Karyawan</h1>
                <div class="card mb-4">
                    <div class="card-body">
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore temporibus dolorem illum soluta porro iure facilis nihil magnam officia accusamus veniam aspernatur culpa, voluptatibus exercitationem velit inventore aliquam assumenda magni?
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Data Karyawan
                    </div>
                    <div class="card-body">
                        <table border="1" style="width: 100%;" id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Alamat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($mem as $mber) { ?>
                                    <tr>
                                        <th><?= $mber->id ?></th>
                                        <th><?= $mber->nama ?></th>
                                        <th><?= $mber->email ?></th>
                                        <th><?= $mber->alamat ?></th>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
        <footer class="py-4 bg-dark mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Elysia Book <script>
                            document.write(new Date().getFullYear());
                        </script>
                    </div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>