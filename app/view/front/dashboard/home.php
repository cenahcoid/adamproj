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
                        History Log</a>
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
                <div class="card set-bg">
                    <div class="card-body d-flex justify-content-end">
                        <table class="clock">
                            <tr class="text-dark">
                                <th>
                                    <div id="jam"></div>
                                </th>
                                <th>:</th>
                                <th>
                                    <div id="menit"></div>
                                </th>
                                <th>:</th>
                                <th>
                                    <div id="detik"></div>
                                </th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </main>
        <footer class="py-4 bg-dark mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Elysia Book <script>document.write(new Date().getFullYear());</script></div>
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