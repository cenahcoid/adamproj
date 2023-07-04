<div class="container d-flex justify-content-center py-5">
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h1 class="h3" style="text-align: center;">Login</h1>
            </div>
            <div class="card-body">
                <form id="flogin" action="<?= base_url() ?>login/proses" method="post">
                    <?php if (isset($sess->flash) && strlen($sess->flash) > 0) { ?>
                        <!-- Message Notification -->
                        <p class="white-text"><b>Alert:</b> <?= $sess->flash ?></p>
                    <?php } ?>

                    <div class="form-group py-2">
                        <label for="iemail">Email *</label>
                        <input class="form-control" id="iemail" type="email" name="email" placeholder="Email" autocomplete="" required />
                    </div>
                    <div class="form-group py-2">
                        <label for="ipassword">Password *</label>
                        <input class="form-control" id="ipassword" type="password" name="password" placeholder="Password" autocomplete="" required />
                    </div>
                    <div class="form-group py-4">
                        <button style="float: right; width:100%;" class="btn btn-primary" type="submit" name="action">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>