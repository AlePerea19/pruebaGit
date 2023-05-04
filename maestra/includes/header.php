<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web con PHP</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../resources/css/estilos.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#e3f2fd;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
        <img src="../resources/img/login.jpeg" 
          alt="imagen de login" 
          width="50px" 
          height="50px"
          style="border-radius: 50%;">
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item item-nav">
              <a class="nav-link" aria-current="page" href="#Home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active item-nav" href="#Nosotros">Nosotros</a>
            </li>
          </ul>
          <form class="d-flex">
            <button
              class="btn btn-outline-primary"
              data-bs-toggle="modal"
              data-bs-target="#staticBackdrop"
              type="button"
            >
              Iniciar sesion
            </button>
          </form>
        </div>
      </div>
    </nav>

    <!-- Ventana del formulario -->
    <div
      class="modal fade"
      id="staticBackdrop"
      data-bs-backdrop="static"
      data-bs-keyboard="false"
      tabindex="-1"
      aria-labelledby="staticBackdropLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-login">
        <div class="modal-content modal-login">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Iniciar sesión</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>

          <div class="modal-body">
            <div class="d-flex justify-content-center">
                <img src="../resources/img/rayoo.jpg" alt="imagen usuario">
            </div>

            <!--Formulario-->
            <form action="/confirmaUsuario.php" method="POST" class="d-flex flex-column col-lg-8 col-sm-8" id="val-login">
              <div class="mb-4">
                <label for="email" class="form-label">Correo:</label>
                
                <div >
                  <input
                  type="email"
                  class="form-control"
                  name="email"
                  id="email"
                  value=""
                  placeholder="Ingresa tu correo"                  
                  />
                  
                </div>                

              </div>

              <div class="mb-4">
                <label for="" class="form-label">Contraseña</label>
                <div id="val-pass" class="border">
                  <input
                  id = "password"
                  type="password"
                  class="form-control"
                  name="password"
                  placeholder="Ingresa tu contraseña"
                  />

                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Ingresar</button><!--Se cambia a submit para recargar la pagina y no quede solo en el modal-->
              </div>
            </form>
          </div>        
        </div>
      </div>
    </div>


