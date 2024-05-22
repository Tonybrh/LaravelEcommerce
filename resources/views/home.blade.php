<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <title>Ecommerce</title>
</head>
<body>
    <nav class="navbar navbar-light navbar-expand-md bg-light pl-5 pr-5 mb-5" >
        <a href="#" class="navbar-brand">Ecommerce</a>
        <div class="collapse navbar-collapse">
            <div class="navbar-nav">
                <a href="#" class="nav-link">Home</a>
                <a href="#" class="nav-link">Categorias</a>
                <a href="#" class="nav-link">Cadastrar</a>
            </div>
        </div>
            <a href="#" class="btn btn-sm"><i class="fa fa-shopping-cart"></i></a>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-3 mb-3">
                <div class="card">
                    <img src="{{asset('images/produto1.png')}}" class="card-img-top">
                    <div class="card-body">
                        <h6 class="card-title">Produto 1</h6>
                        <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
                    </div>
                </div>
            </div>
                <div class="col-3 mb-3">
                    <div class="card">
                        <img src="{{asset('images/produto2.png')}}" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title">Produto 2</h6>
                            <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <img src="{{asset('images/produto3.jpeg')}}" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title">Produto 3</h6>
                            <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <img src="{{asset('images/produto4.jpeg')}}" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title">Produto 4</h6>
                            <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <img src="{{asset('images/produto5.jpeg')}}" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title">Produto 5</h6>
                            <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</body>
</html>
