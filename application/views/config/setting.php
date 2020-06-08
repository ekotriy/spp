<div class="container">
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <div class="card shadow-lg mb-5">
                <h5 class="card-header">Setting</h5>
                <div class="card-body">
                    <form method="POST" action="">
                        <div class="form-group">
                            <label for="nmsekolah">Nama Sekolah</label>
                            <input type="text" class="form-control" id="nmsekolah" name="sekolah" value="<?= $setting['nm_sekolah']; ?>">
                            <small class="form-text text-danger"><?= form_error('sekolah'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nss">NSS</label>
                            <input type="text" class="form-control" id="nss" name="nss" value="<?= $setting['nss']; ?>">
                            <small class="form-text text-danger"><?= form_error('nss'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat Sekolah</label>
                            <textarea class="form-control" id="alamat" name="alamat" rows="3"><?= $setting['alamat']; ?> </textarea>
                            <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="desa">Desa/Kelurahan</label>
                            <input type="text" class="form-control" id="desa" name="kelurahan" value="<?= $setting['kelurahan']; ?>">
                            <small class="form-text text-danger"><?= form_error('kelurahan'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="kecamatan">Kecamatan</label>
                            <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="<?= $setting['kecamatan']; ?>">
                            <small class="form-text text-danger"><?= form_error('kecamatan'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="kota">Kabupaten/Kota</label>
                            <input type="text" class="form-control" id="kota" name="kabupaten" value="<?= $setting['kabupaten']; ?>">
                            <small class="form-text text-danger"><?= form_error('kabupaten'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="provinsi">Provinsi</label>
                            <input type="text" class="form-control" id="provinsi" name="provinsi" value="<?= $setting['provinsi']; ?>">
                            <small class="form-text text-danger"><?= form_error('provinsi'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="kepsek">Kepala Sekolah</label>
                            <input type="text" class="form-control" id="kepsek" name="kepsek" value="<?= $setting['kpl_sekolah']; ?>">
                            <small class="form-text text-danger"><?= form_error('kepsek'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="web">Website</label>
                            <input type="text" class="form-control" id="web" name="website" value="<?= $setting['website']; ?>">
                            <small class="form-text text-danger"><?= form_error('website'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?= $setting['email']; ?>">
                            <small class="form-text text-danger"><?= form_error('email'); ?></small>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>