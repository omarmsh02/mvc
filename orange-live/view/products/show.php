<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net" rel="preconnect" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/boosted@5.3.3/dist/css/boosted.min.css" rel="stylesheet" integrity="sha384-laZ3JUZ5Ln2YqhfBvadDpNyBo7w5qmWaRnnXuRwNhJeTEFuSdGbzl4ZGHAEnTozR" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/boosted@5.3.3/dist/js/boosted.bundle.min.js" integrity="sha384-3RoJImQ+Yz4jAyP6xW29kJhqJOE3rdjuu9wkNycjCuDnGAtC/crm79mLcwj1w2o/" crossorigin="anonymous"></script>        <title>Document</title>
    </head>
    <body>
        <section>
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <div class="navbar-brand">
                    <a class="stretched-link" href="#">
                        <img src="/docs/5.3/assets/brand/orange-logo.svg" width="50" height="50" alt="Boosted - Back to Home" loading="lazy">
                    </a>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse align-items-end" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                    <form class="d-flex navbar-item ms-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-primary" type="submit">Search</button>
                    </form>
                    </div>
                </div>
            </nav>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <?php foreach($products as $product):  ?>
                    <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="<?=$product['img_url']?>" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><?=$product['name']?></h5>
                            <p class="card-text fw-bold mb-4"><?=$product['description']?></p>
                            <p class="card-text fw-bold mb-4"><?=$product['price']?>JD</p>
                            <a href="#" class="btn btn-primary">Buy</a>
                        </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div> 
        </section>
        

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/boosted@5.3.3/dist/js/boosted.min.js" integrity="sha384-TfjOlWccrKKSEc/hJqxs6Tofoh4+tlm//VJYb92Ow7aPNtgfaKuuLsnFqObi3xmp" crossorigin="anonymous"></script>    </body>
</html>