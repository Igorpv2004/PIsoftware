<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">

    <title>Tela de Login</title>
</head>
<body>
    
<section class="vh-100">
  
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 text-black">

     

        
      

        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
       
               
          <form method="post" action="{{ route('login-user') }}" style="width: 23rem;">
            @csrf
                  

      <img src="{{'/img/logo.jpg.png'}}" width="250px" height="250px">
      @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
      @if(session('danger'))
          <div class="alert alert-danger">
            {{ session('danger') }}
          </div>
      @endif      
            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Conecte-se</h3>

            <div class="form-outline mb-4">
              <input type="email" name="email" id="form2Example18" class="form-control form-control-lg" />
              <label class="form-label" for="form2Example18">E-mail</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" name="password" id="form2Example28" class="form-control form-control-lg" />
              <label class="form-label" for="form2Example28">Senha</label>
            </div>

            <div class="pt-1 mb-4">
              <button class="btn btn-info btn-lg btn-block" type="submit">Acessar</button>
            </div>

            <p>Não tem uma conta? <a href="/cadastrarUsuario" class="link-info">Registre-se aqui!</a></p>

          </form>

        </div>

      </div>
      
      <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="https://c.pxhere.com/photos/7f/ab/puppy_dog_domestic_animal_beige_pet-878654.jpg!d"
          alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
      </div>
    </div>
  </div>
</section>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>