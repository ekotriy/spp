<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-xl-4 col-lg-6 col-md-8">
            <div class="card shadow-lg mb-5 ">
                <h5 class="card-header text-center">Buat Akun</h5>
                <div class=" card-body">
                    <form method="POST" action="">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Masukan Username" value="<?= set_value('username'); ?>">
                            <small class="form-text text-danger"><?= form_error('username'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="password1">Password</label>
                            <input type="password" class="form-control" id="password1" name="password1" placeholder="Masukan Password">
                            <small class="form-text text-danger"><?= form_error('password1'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="password2">Ulangi Password</label>
                            <input type="password" class="form-control" id="password2" name="password2" placeholder="Masukan Password">
                        </div>
                        <button type="submit" class="btn btn-info">Buat</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>