<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
           <div class="container-fluid">
               <a class="navbar-brand" style="color: #f0f0f0" href="/main">NameStore</a>
                   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                       <span class="navbar-toggler-icon"></span>
                   </button>

                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link active" style="color: #f0f0f0" aria-current="page" href="#">Categories</a>
                            <a class="nav-link" style="color: #f0f0f0" href="#">Delivery Pay</a>
                            <a class="nav-link" style="color: #f0f0f0" href="#">About us</a>
                        </div>
                    </div>

               <span class="navbar-text">
                    <a class="nav-link active" style="color: #f0f0f0"  aria-current="page" href="#">Sing In</a>
               </span>

           </div>
        </nav>
    </header>

<main>
    <?php include_once 'vendor' . DIRECTORY_SEPARATOR . self::VIEW_DIR . DIRECTORY_SEPARATOR .$this->view_template_dir. DIRECTORY_SEPARATOR .$pageTemplate.'.php';?>
</main>

</body>
</html>