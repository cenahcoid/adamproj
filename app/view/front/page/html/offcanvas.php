<div class="offcanvas offcanvas-top bg-dark text-white" style="width: auto;" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header d-flex justify-content-center">
        <h4 class="offcanvas-title" id="offcanvasExampleLabel">Menu</h4>
    </div>
    <div class="offcanvas-body d-flex justify-content-center">
        <div class="d-flex justify-content-start">
            <div class="d-flex flex-column bd-highlight px-5">
                <a class="link" href="<?= base_url() ?>">
                    Dashboard
                </a>
                <a class="link" href="<?= base_url('member') ?>">
                    Member
                </a>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="d-flex flex-column bd-highlight px-5">
                <a class="link" href="<?= base_url('buku')?>">
                    Buku
                </a>
                <a class="link" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                    Alat
                </a>
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <div class="d-flex flex-column bd-highlight px-5">
                <a class="link" href="#">
                    History Log
                </a>
                </a>
                <a class="link" href="#">
                    Data Penjualan
                </a>
            </div>
        </div>
    </div>
</div>