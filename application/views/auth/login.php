<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-xl-4 col-lg-6 col-md-8">
            <div class="card shadow-lg mb-5 ">
                <h5 class="card-header text-center">Login</h5>
                <div class=" card-body">
                    <?= $this->session->flashdata('massage'); ?>
                    <form method="POST" action="" autocomplete="off">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Masukan Username" value="<?= set_value('username'); ?>">
                            <small class="form-text text-danger"><?= form_error('username'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password">
                            <small class="form-text text-danger"><?= form_error('password'); ?></small>
                        </div>
                        <button type="submit" class="btn btn-info">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>