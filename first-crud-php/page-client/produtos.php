
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Página inicial</title>
    <link href="../css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light ">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><i class="fa-solid fa-fire"></i> FireHouse</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mr-auto" style="margin-left: auto;">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../index.php">Menu</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="produtos.php">Jogos</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="../index.php#sobre">Sobre</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="../index.php#contato">Contato</a>
                    </li>
                    <?php
                        require_once 'verifica-logado-cliente.php';

                        if(verificarLogado()==true){
                            include '../components/logout-button.php';
                        }else{
                            include '../components/login-button.php';
                        }
                    ?>
                </ul>
                </div>
            </div>
        </nav>    
    </header>
    <main>

        <br>
        <h3 class="text-center"> Jogos </h3><br>
        <p class="text-center w-responsive mx-auto mb-5">Aqui você poderá comprar os melhores jogos da nossa loja, confira os melhores descontos e aproveite!<br>
        Confira seu carrinho de compras aqui: <a href="carrinho.php">Visualizar Carrinho<i class="fa-solid fa-cart-shopping"></i></a></p>
        
        <br>
        <?php   
                                require_once '../global.php';
                                try {
                                    $listaproduto = ProdutoDao::listar();
                                } catch(Exception $e) {
                                    echo '<pre>';
                                        print_r($e);
                                    echo '</pre>';
                                    echo $e->getMessage();
                                }
        ?>

        <div class="container text-center d-flex justify-content-center">
        <div class="row d-flex justify-content-center " style="display: justify-contents;">
        <?php foreach($listaproduto as $produto){ $control = 0;?>
            <?php
                if($control == 5){
                    echo '<div class="row d-flex justify-content-center ">';
                    $control = 0;
                }
                echo'
                <div class="col">
                <div class="card" style="width: 18rem; margin-bottom:20px;margin-left:40px;">
                    <img src="../'.$produto['fotoproduto'].'" class="card-img-top" style="height:170px;"alt="...">
                    <div class="card-body">
                        <h5 class="card-title">'.$produto['nomeproduto'].'</h5>
                        <p class="card-text">'.$produto['descproduto'].'</p>
                        <h2>R$'.$produto['precoproduto'].'</h2>
                        <div class="row">
                            <div class="col">
                                <a href="carrinho.php?acao=add&id='.$produto['idproduto'].'" class="btn btn-outline-danger"><i class="fa-solid fa-cart-shopping"></i></i></a>
                                <a href="finalizar-comprar.php" class="btn btn-outline-success" style="width:50%;"><i class="fa-sharp fa-solid fa-coins"></i></i> Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
            $control++;
            ?>
            
                
        <?php }?>
        <br>
        </div>
        </div>

    </main>
    <footer class="text-center text-lg-start bg-white text-muted">
    <section class="d-flex justify-content-center" style="left:50%;">
        <br>
        <br>
        <div>
        <a href="" class="me-4 link-secondary">
            <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 link-secondary">
            <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 link-secondary">
            <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 link-secondary">
            <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 link-secondary">
            <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 link-secondary">
            <i class="fab fa-github"></i>
        </a>
        </div>
    </section>
    <hr>
    <section class="">
        <div class="container text-center text-md-start mt-5">
        <div class="row mt-3">
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4">
                <i class="fas fa-gem me-3 text-secondary"></i>FireHouse
            </h6>
            <p>
                FireHouse é uma empresa fictícia com finalidade didática <br>
                CRUD | PHP - JS - HTML - CSS  
            </p>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4">
                Categoria
            </h6>
            <p>
                <a href="#!" class="text-reset">RPG - Ação</a>
            </p>
            <p>
                <a href="#!" class="text-reset">Hack and Slash</a>
            </p>
            <p>
                <a href="#!" class="text-reset">Corrida</a>
            </p>
            </div>
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4">
                Utilidades
            </h6>
            <p>
                <a href="#!" class="text-reset">Termos de privacidade</a>
            </p>
            <p>
                <a href="#!" class="text-reset">Equipe FireHouse</a>
            </p>
            </div>
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <h6 class="text-uppercase fw-bold mb-4">Contato</h6>
            <p><i class="fas fa-home me-3 text-secondary"></i> São Paulo SP 0800-00, BR</p>
            <p>
                <i class="fas fa-envelope me-3 text-secondary"></i>
                firehouse@fire.com
            </p>
            <p><i class="fas fa-phone me-3 text-secondary"></i> + 01 4002-8922</p>
            <p><i class="fas fa-print me-3 text-secondary"></i> + 01 4002-8922</p>
            </div>
        </div>
        </div>
    </section>
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
        © 2022 Copyright:
        <a class="text-reset fw-bold" href="https://mdbootstrap.com/">FireHouse.com</a>
    </div>

    </footer>
    <script src="https://kit.fontawesome.com/41960ad43e.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script>
       $('ul.nav li.dropdown').hover(function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
            }, function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
            });
    </script>
  </body>
</html>