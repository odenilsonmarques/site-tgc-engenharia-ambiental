<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Inicio</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark" style="background-color:#54B435">
            <div class="container">
                <a class="navbar-brand" href="index.html">Tgc</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <nav class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#myModal">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="listaLivros.html">Contatos</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </header>
    <section class="hero">
        <div class="container slide">
            <div class="row">
                <div class="col-12 text-hero">
                    <h1 class="mt-5">TGC - Controle Ambiental</h1>
                    <h2 class="mt-2">Engenharia e Consultoria</h2>
                </div>
            </div>
            <div class="row services">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="assets/img/documento.png" alt="alvará de funcionamento">
                            <h5 class="card-title mt-3">Alvará de funcionamento</h5>
                            <p class="card-text">
                                O Alvará de funcionamento é um documento fundamental para garantir a regularidade de uma empresa
                                e seu funcionamento adequado.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="assets/img/termo.png" alt="licenciamento ambiental">
                            <h5 class="card-title mt-3">Licenciamento ambiental</h5>
                            <p class="card-text">
                                O processo de Licenciamento Ambiental envolve a apresentação de estudos e avaliações ambientais que 
                                demonstrem como a atividade econômica será realizada.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="assets/img/geolocalizacao.png" alt="georreferenciamento">
                            <h5 class="card-title mt-3">Georrefereciamento</h5>
                            <p class="card-text">
                                Georreferenciamento é o processo de vinculação de informações geográficas a dados cadastrais, como endereços,
                                propriedades rurais e urbanas, entre outros.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <a href="services" class="nav-link float-end mt-3">Ver todos</a>
        </div>

    </section>
    
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mt-5">
                    <p class="mt-5">&copy 2023 tgc-controle ambiental</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>