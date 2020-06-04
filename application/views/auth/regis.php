<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title><?= $title; ?> </title>
</head>

<body class="bg-info">
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






















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>