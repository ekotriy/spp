<div class="container">
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <div class="card shadow-lg mb-5">
                <h5 class="card-header">Buat Akun Baru</h5>
                <div class="card-body">
                    <form method="POST" action="" autocomplete="off">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Masukan Username" value="<?= set_value('username'); ?>">
                            <small class="form-text text-danger"><?= form_error('username'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="password1">Password</label>
                            <input type="password" class="form-control" id="password1" name="password" placeholder="Masukan Password">
                            <small class="form-text text-danger"><?= form_error('password'); ?></small>
                        </div>
                        <div class="input-group">
                            <select class="custom-select" name="role_id">
                                <option selected disabled>Choose...</option>
                                <option value="1">Admin</option>
                                <option value="2">Operator</option>
                            </select>
                        </div>
                        <small class="form-text text-danger"><?= form_error('role_id'); ?></small>
                        <button type="submit" name="submit" class="btn btn-info">Buat</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>