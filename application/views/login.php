<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <form action="<?= site_url('auth/login');?>" method="post">
    <div class="container">
        <div class="container mt-5 mb-5 d-flex justify-content-center align-items-center">

            <div class="card p-3 text-center py-4">

                <div>
                    <h1>Selamat Datang Diwebsite CMS</h1>
                    <h4>Silahkan Login</h4>
                </div>

                <div class="px-sm-4 mt-3 px-3">
                    <!-- <input class="form-control"  placeholder="Nama"> -->
                    <input class="form-control mt-3" id="username" name="username" type="text" placeholder="Username" required>
                    <input class="form-control mt-3" id="password" name="password" type="password" placeholder="Password" required>

                </div>

                <div class="px-5 mt-4">
                    <button class="btn btn-secondary w-100 text-uppercase" type="submit">Login</button>
                </div>
                <div id="ngilang" class="mt-2">
                        <?php echo $this->session->flashdata('alert', true) ?>
                    </div>

                <!-- <div class="px-5">
                    <span class="terms">By creating an account, you agree and accept our <a href="#" class="text-decoration-none">terms</a> and <a href="#" class="text-decoration-none">conditions</a>.</span>
                </div> -->


            </div>

        </div>
    </div>
    </form>

</body>

</html>