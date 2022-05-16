<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../css/styles.css">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-black">
        <div class="container-fluid">
            <a class="navbar-brand" style="color: #f0f0f0" href="<?=Route::url('AdminController', 'index')?>">CryptoStore</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" style="color: #f0f0f0" aria-current="page" href="<?=Route::url('AdminCategoryController','index')?>">Categories</a>
                    <a class="nav-link" style="color: #f0f0f0" href="<?=Route::url('IndexController','deliveryPay')?>">Delivery Pay</a>
                    <a class="nav-link" style="color: #f0f0f0" href="<?=Route::url('IndexController','contacts')?>">Contacts</a>
                </div>
            </div>

            <a class="nav-link" style="color: #f0f0f0" href="<?=Route::url('CategoryController','index')?>"><i class="fa fa-bell" aria-hidden="true"></i></a>

            <span class="navbar-text">
                <a class="nav-link active" style="color: #f0f0f0"  aria-current="page" href="<?=Route::url()?>">Sing out</a>
            </span>

        </div>
    </nav>
</header>

<div>
    <?php include_once 'vendor' . DIRECTORY_SEPARATOR . self::VIEW_DIR . DIRECTORY_SEPARATOR .$this->view_template_dir. DIRECTORY_SEPARATOR .$pageTemplate.'.php';?>
</div>


</body>
</html>