<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <title>Animal Care</title>
</head>


<body>
<header class="navbar">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">


  <a class="navbar-brand" href="/home">
    
      <img src="{{'/img/logo.png'}}" alt="" width="180" height="180" class="d-inline-block align-text-top">
    
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

  <div class="menu1">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
     













<!-------------------------------- O P C O E S ------------------------->
 

<!----------------------------------------------------------------------->
        


        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Adote
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="listaAnimal">Lista de animais</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Doe
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="cadastrarAnimais">Doar Animal</a></li>
          </ul>
        </li>



        

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Admin
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/cadastrarAnimais">Cadastrar Animais</a></li>
            <li><a class="dropdown-item" href="/editarAnimal">Gerenciamento Animais</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/cadastrarCandidatos">Cadastrar Candidados</a></li>
            <li><a class="dropdown-item" href="/editarCandidato">Gerenciamento Candidatos</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Login/Cadastro
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/Login">Login</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/cadastrarUsuario">Cadastro</a></li>
          </ul>
        </li>



<!----------------------------------------------------------------------->

        
        



      </ul>

    </div>
  </div>
  </div>
</nav>
</header>



<!-------------------------------- C A R O U S E L ------------------->



<div id="carouselExampleDark" class="carousel carousel-light slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>



  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="3000">
      <img src="{{'/img/familia.png'}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        
        

      
      </div>
    </div>


    <div class="carousel-item" data-bs-interval="3000">
      <img src="{{'/img/familia1.png'}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">

        
        
        
      </div>
    </div>


    <div class="carousel-item" data-bs-interval="3000">
      <img src="{{'/img/familia2.png'}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">

        

      </div>
    </div>



  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Voltar</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Próxima</span>
  </button>
</div>


<!---------------------------------------------------------------------------------------------------------------->



<!------------------------------------------------------------ W A L P A P P E R--------------------------------->
<body class="body1">



<!------------------------------------------------- C A I X A  B R A N C A ------------------------------------->

<div class="caixabranca">





@yield('content')











<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>


</body>
<div class="footer1">

<section class="hero text-white py-5 flex-grow-1">
        <div class="container py-4">
            <div class="row">

              <div class="footertexto">
                <div class="col-lg-6">
                    <h1 class="display-4">Animal Care</h1>
                    <p class="fst-italic text-muted">Nossa equipe agradece pela visita!</p>
                </div>
              </div>


            </div>
        </div>
    </section>


<section>
    <footer > 
        <div class="text-center">
            <nav> 
                <h2>Fique conectado !</h2>
                <ul> 
                <a href="">
                <img src="/img/insta.png" alt="">
                </a>
                 <a href="">
                  <img src="/img/youtube.png" alt="">
                 </a>
                <a href="">
                <img src="/img/facebook.png" alt="">
                </a>
                </ul> 
            </nav>
            <small>Copyright © 2010 </small>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</div>

</div>
</section>

</html>