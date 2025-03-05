<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Control de Gestión</title>
  <!-- ITSA icon -->
  <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
  <link rel="manifest" href="img/site.webmanifest">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.min.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="css/mdb.min.css" />
  <!-- CSS personalizado -->
  <link rel="stylesheet" href="css/estilos.css">
  <style>
    .span_or {
      color: #bfbfbf;
      font-size: 12px;
    }

    .gsi-material-button {
      -moz-user-select: none;
      -webkit-user-select: none;
      -ms-user-select: none;
      -webkit-appearance: none;
      background-color: WHITE;
      background-image: none;
      border: 1px solid #747775;
      -webkit-border-radius: 20px;
      border-radius: 20px;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      color: #1f1f1f;
      cursor: pointer;
      font-family: 'Roboto', arial, sans-serif;
      font-size: 14px;
      height: 40px;
      letter-spacing: 0.25px;
      outline: none;
      overflow: hidden;
      padding: 0 12px;
      position: relative;
      text-align: center;
      -webkit-transition: background-color .218s, border-color .218s, box-shadow .218s;
      transition: background-color .218s, border-color .218s, box-shadow .218s;
      vertical-align: middle;
      white-space: nowrap;
      width: 100%;
      max-width: 400px;
      min-width: min-content;
    }

    .gsi-material-button .gsi-material-button-icon {
      height: 20px;
      margin-right: 12px;
      min-width: 20px;
      width: 20px;
    }

    .gsi-material-button .gsi-material-button-content-wrapper {
      -webkit-align-items: center;
      align-items: center;
      display: flex;
      -webkit-flex-direction: row;
      flex-direction: row;
      -webkit-flex-wrap: nowrap;
      flex-wrap: nowrap;
      height: 100%;
      justify-content: space-between;
      position: relative;
      width: 100%;
    }

    .gsi-material-button .gsi-material-button-contents {
      -webkit-flex-grow: 1;
      flex-grow: 1;
      font-family: 'Roboto', arial, sans-serif;
      font-weight: 500;
      overflow: hidden;
      text-overflow: ellipsis;
      vertical-align: top;
    }

    .gsi-material-button .gsi-material-button-state {
      -webkit-transition: opacity .218s;
      transition: opacity .218s;
      bottom: 0;
      left: 0;
      opacity: 0;
      position: absolute;
      right: 0;
      top: 0;
    }

    .gsi-material-button:disabled {
      cursor: default;
      background-color: #ffffff61;
      border-color: #1f1f1f1f;
    }

    .gsi-material-button:disabled .gsi-material-button-contents {
      opacity: 38%;
    }

    .gsi-material-button:disabled .gsi-material-button-icon {
      opacity: 38%;
    }

    .gsi-material-button:not(:disabled):active .gsi-material-button-state,
    .gsi-material-button:not(:disabled):focus .gsi-material-button-state {
      background-color: #303030;
      opacity: 12%;
    }

    .gsi-material-button:not(:disabled):hover {
      -webkit-box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .30), 0 1px 3px 1px rgba(60, 64, 67, .15);
      box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .30), 0 1px 3px 1px rgba(60, 64, 67, .15);
    }

    .gsi-material-button:not(:disabled):hover .gsi-material-button-state {
      background-color: #303030;
      opacity: 8%;
    }
  </style>
</head>

<body>
  <!-- Start your project here-->
  <header class="mb-0">
    <nav id="main-navbar" class="navbar navbar-expand-md fixed-top navbar-before-scroll shadow-0">
      <div class="container-fluid">
        <button data-mdb-collapse-init class="navbar-toggler" type="button" data-mdb-toggle="collapse"
          data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation">
          <i class="bi bi-list"></i>
        </button>
        <!-- Navbar brand -->
        <a class="navbar-brand mt-2 mt-lg-0" href="#inicio">
          <img
            src="img/logo_itsa.webp"
            height="50"
            alt="ITSA Logo"
            loading="lazy" />
        </a>
        <div class="collapse navbar-collapse navbar-page" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#inicio">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#departamentos">Departamentos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#labores">Labores</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#opiniones">Opiniones</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contacto">Contacto</a>
            </li>
          </ul>

          <div class="d-flex align-items-center ms-auto">
            <button data-mdb-ripple-init type="button" id="inicio_sesion_principal" class="btn btn-link px-3 me-2" style="background-color:transparent; color:#FFF;" data-mdb-modal-init data-mdb-target="#iniciar_sesion">
              iniciar sesión
            </button>
            <button data-mdb-ripple-init type="button" class="btn btn-primary btn-rounded" style="background-color:#8c142a" data-mdb-modal-init data-mdb-target="#crear_cuenta">
              crear cuenta
            </button>
          </div>

        </div>
      </div>
    </nav>
  </header>
  <div data-mdb-scrollspy-init data-mdb-target="#navbarSupportedContent" data-mdb-offset="0" class="scrollspy-navbar">


    <!-- Section: Split screen -->
    <section class="p-0 m-0" id="inicio">
      <div class="container-fluid px-0">
        <div class="row g-0">
          <!-- First column -->
          <div class="col-lg-6 vh-100 d-flex flex-column justify-content-center align-items-center">

            <!-- Headings -->
            <div class="h-100 d-flex justify-content-center align-items-center px-5">

              <div class="">
                <p class="h2">Subdirección de Servicios Administrativos</p>
                <h1 class="h2 fw-bold text-uppercase">itsatlixco</h1>
              </div>

            </div>
            <!-- CTA elements -->
            <div class="d-flex align-items-center  w-100 justify-content-between px-5 mb-5">
              <a href="https://github.com/valcor27" target="_blank" class="text-dark"><i
                  class="bi bi-github fa-xl"></i></a>
              <hr class="hr d-none d-xl-flex" style="height: 2px; width: 200px;">
              <a class="btn btn-primary btn-lg btn-rounded" style="background-color: #8c142a;" href="#departamentos" role="button" data-mdb-ripple-init>Explorar<i
                  class="bi bi-chevron-down ms-2"></i></a>
            </div>
          </div>
          <!-- First column -->
          <!-- Second column -->
          <div class="col-lg-6 d-none d-lg-inline-block vh-100">
            <!-- Carousel wrapper -->
            <div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel"
              data-mdb-carousel-init>
              <!-- Indicators -->
              <div class="carousel-indicators">
                <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="0"
                  class="rounded-circle active" style="width: 7px; height: 7px" aria-current="true"
                  aria-label="Slide 1"></button>
                <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="1" aria-label="Slide 2"
                  class="rounded-circle" style="width: 7px; height: 7px"></button>
                <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="2" aria-label="Slide 3"
                  class="rounded-circle" style="width: 7px; height: 7px"></button>
              </div>
              <!-- Inner -->
              <div class="carousel-inner shadow-5-strong" style="border-bottom-left-radius: 4rem">
                <!-- Single item -->
                <div class="carousel-item active">
                  <div class="bg-image bg-image-slider" style="background-image: url('img/itsa1.webp');">
                    <div class="overlay"></div>
                  </div>
                  <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                  </div>
                </div>
                <!-- Single item -->
                <div class="carousel-item">
                  <div class="bg-image bg-image-slider" style="background-image: url('img/itsa2.webp');">
                    <div class="overlay"></div>
                  </div>
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </div>
                <!-- Single item -->
                <div class="carousel-item">
                  <div class="bg-image bg-image-slider" style="background-image: url('img/itsa3.webp');">
                    <div class="overlay"></div>
                  </div>
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                  </div>
                </div>
              </div>
              <!-- Inner -->
              <!-- Controls -->
              <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample"
                data-mdb-slide="prev">
                <span class="bi bi-chevron-left" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample"
                data-mdb-slide="next">
                <span class="bi bi-chevron-right" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <!-- Carousel wrapper -->
          </div>
          <!-- Second column -->
        </div>
      </div>
    </section>
    <!-- Section: Split screen -->

    <!-- Main layout-->
    <main>
      <div class="container">
        <!-- Section: Departamentos -->
        <section class="mb-10 text-center mt-5" id="departamentos">
          <h2 class="fw-bold mb-7 text-center">Departamentos</h2>

          <div class="row gx-lg-5">

            <!-- First column -->
            <div class="col-lg-3 col-md-12 mb-6 mb-lg-0">

              <div class="card rounded-6 h-100">
                <div class="mt-n3 bg-image hover-overlay mx-3 shadow-4-strong rounded-6 bg_img_departamentos" data-mdb-ripple-init data-mdb-ripple-color="light" style="background-image: url('img/itsa3.webp');">
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">AI engine</h5>
                  <p class="text-muted">
                    <small>Finished <u>13.09.2021</u> for
                      <a href="" class="text-dark">Techify</a></small>
                  </p>
                  <p class="card-text">
                    Ut pretium ultricies dignissim. Sed sit amet mi eget urna
                    placerat vulputate. Ut vulputate est non quam dignissim
                    elementum. Donec a ullamcorper diam.
                  </p>
                  <a href="#!" class="btn btn-secondary btn-rounded" style="background-color:#E6C9CF; color:#8c142a;" data-mdb-ripple-init>Leer más</a>
                </div>
              </div>

            </div>
            <!-- First column -->

            <!-- Second column -->
            <div class="col-lg-3 mb-6 mb-lg-0">

              <div class="card rounded-6 h-100">
                <div class="mt-n3 bg-image hover-overlay mx-3 shadow-4-strong rounded-6 bg_img_departamentos" data-mdb-ripple-init data-mdb-ripple-color="light" style="background-image: url('img/itsa1.webp');">
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Balanced design</h5>
                  <p class="text-muted">
                    <small>Finished <u>12.01.2022</u> for
                      <a href="" class="text-dark">Rubicon</a></small>
                  </p>
                  <p class="card-text">
                    Suspendisse in volutpat massa. Nulla facilisi. Sed aliquet
                    diam orci, nec ornare metus semper sed. Integer volutpat
                    ornare erat sit amet rutrum. Ut vulputate est non quam.
                  </p>
                  <a href="#!" class="btn btn-secondary btn-rounded" style="background-color:#E6C9CF; color:#8c142a;" data-mdb-ripple-init>Leer más</a>
                </div>
              </div>

            </div>
            <!-- Second column -->

            <!-- Third column -->
            <div class="col-lg-3 mb-6 mb-lg-0">

              <div class="card rounded-6 h-100">
                <div class="mt-n3 bg-image hover-overlay mx-3 shadow-4-strong rounded-6 bg_img_departamentos" data-mdb-ripple-init data-mdb-ripple-color="light" style="background-image: url('img/itsa2.webp');">
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Metaverse 2.0</h5>
                  <p class="text-muted">
                    <small>Finished <u>10.11.2022</u> for
                      <a href="" class="text-dark">Venom Tech</a></small>
                  </p>
                  <p class="card-text">
                    Curabitur tristique, mi a mollis sagittis, metus felis mattis
                    arcu, non vehicula nisl dui quis diam. Mauris ut risus eget
                    massa volutpat feugiat. Donec.
                  </p>
                  <a href="#!" class="btn btn-secondary btn-rounded" style="background-color:#E6C9CF; color:#8c142a;" data-mdb-ripple-init>Leer más</a>
                </div>
              </div>

            </div>
            <!-- Third column -->
            <!-- Four column -->
            <div class="col-lg-3 col-md-12 mb-6 mb-lg-0">

              <div class="card rounded-6 h-100">
                <div class="mt-n3 bg-image hover-overlay mx-3 shadow-4-strong rounded-6 bg_img_departamentos" data-mdb-ripple-init data-mdb-ripple-color="light" style="background-image: url('img/itsa3.webp');">
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">AI engine</h5>
                  <p class="text-muted">
                    <small>Finished <u>13.09.2021</u> for
                      <a href="" class="text-dark">Techify</a></small>
                  </p>
                  <p class="card-text">
                    Ut pretium ultricies dignissim. Sed sit amet mi eget urna
                    placerat vulputate. Ut vulputate est non quam dignissim
                    elementum. Donec a ullamcorper diam.
                  </p>
                  <a href="#!" class="btn btn-secondary btn-rounded" style="background-color:#E6C9CF; color:#8c142a;" data-mdb-ripple-init>Leer más</a>
                </div>
              </div>

            </div>
            <!--Four column -->
          </div>

        </section>
        <!-- Section: Departamentos -->
        <!-- Section: Modals -->
        <section class="modales">
          <!-- Modal Inicio Sesion -->
          <div class="modal fade" id="iniciar_sesion" tabindex="-1" aria-labelledby="project-1Label" aria-hidden="true">
            <div class="modal-dialog modal-sm">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" style="color: #7f7f7f;" id="project-1Label">Iniciar Sesión</h5>
                  <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                  <!-- Section: Design Block -->
                  <section>

                    <div class="row gx-lg-5 align-items-center">
                      <div class="col-md-12">
                        <form action="">
                          <!-- Name input -->
                          <div class="form-outline mb-4" data-mdb-input-init>
                            <input type="text" id="form4Example1" class="form-control" />
                            <label class="form-label" for="form4Example1">Expediente</label>
                          </div>
                          <div class="form-outline mb-3" data-mdb-input-init>
                            <i class="far bi bi-eye trailing fa-fw pe-auto" id="show-password-toggle-icon"></i>
                            <input type="password" id="show-password-input-1" class="form-control form-icon-trailing" />
                            <label class="form-label" for="show-password-input-1">Contraseña</label>
                          </div>
                          <!-- Default switch -->
                          <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
                            <label class="form-check-label" for="flexSwitchCheckDefault">Recordarme</label>
                          </div>
                          <div class="row justify-content-center mt-3 mb-3">
                            <button type="button" class="btn btn-primary btn-rounded" style="background-color: #8c142a;" data-mdb-ripple-init data-mdb-ripple-init>Iniciar Sesión</button>
                          </div>
                        </form>
                        <div class="row align-items-center">
                          <div class="col">
                            <hr class="hr" />
                          </div>
                          <div class="col-auto">
                            <span class="span_or">OR</span>
                          </div>
                          <div class="col">
                            <hr class="hr" />
                          </div>
                        </div>
                        <!-- Botón de Iniciar sesión con Google -->
                        <div class="row justify-content-center">
                          <div class="col-md-12">
                            <button class="gsi-material-button">
                              <div class="gsi-material-button-state"></div>
                              <div class="gsi-material-button-content-wrapper">
                                <div class="gsi-material-button-icon">
                                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" xmlns:xlink="http://www.w3.org/1999/xlink" style="display: block;">
                                    <path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"></path>
                                    <path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"></path>
                                    <path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"></path>
                                    <path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"></path>
                                    <path fill="none" d="M0 0h48v48H0z"></path>
                                  </svg>
                                </div>
                                <span class="gsi-material-button-contents">Iniciar Sesión con Google</span>
                                <span style="display: none;">Iniciar Sesión con Google</span>
                              </div>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                  <!-- Section: Design Block -->

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" style="background-color: transparent; color: #8c142a;" data-mdb-ripple-init data-mdb-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
          <!-- Modal Inicio Sesion -->
          <!-- Modal Crear Cuenta -->
          <div class="modal fade" id="crear_cuenta" tabindex="-1" aria-labelledby="project-1Label" aria-hidden="true">
            <div class="modal-dialog modal-sm">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" style="color: #7f7f7f;" id="project-1Label">Crear Cuenta</h5>
                  <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                  <!-- Section: Design Block -->
                  <section>

                    <div class="row gx-lg-5 align-items-center">
                      <div class="col-md-12">
                        <div class="alert alert-info" role="alert">
                          La cuenta solicitada, sera validada por el <strong>Departamento de Personal</strong>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <form action="">
                          <!-- Name input -->
                          <div class="form-outline mb-4" data-mdb-input-init>
                            <input type="text" id="form4Example1" class="form-control" />
                            <label class="form-label" for="form4Example1">Expediente</label>
                          </div>
                          <div class="form-outline mb-4" data-mdb-input-init>
                            <input type="text" id="form4Example1" class="form-control" />
                            <label class="form-label" for="form4Example1">Nombre(s)</label>
                          </div>
                          <div class="form-outline mb-4" data-mdb-input-init>
                            <input type="text" id="form4Example1" class="form-control" />
                            <label class="form-label" for="form4Example1">Apellido P.</label>
                          </div>
                          <div class="form-outline mb-4" data-mdb-input-init>
                            <input type="text" id="form4Example1" class="form-control" />
                            <label class="form-label" for="form4Example1">Apellido M.</label>
                          </div>
                          <div class="form-outline mb-3" data-mdb-input-init>
                            <i class="far bi bi-eye trailing fa-fw pe-auto" id="show-password-toggle-icon"></i>
                            <input type="password" id="show-password-input-1" class="form-control form-icon-trailing" />
                            <label class="form-label" for="show-password-input-1">Contraseña</label>
                          </div>
                          <div class="row justify-content-center mt-3 mb-3">
                            <button type="button" class="btn btn-primary btn-rounded" style="background-color: #8c142a;" data-mdb-ripple-init data-mdb-ripple-init>Crear Cuenta</button>
                          </div>
                        </form>
                        <div class="row align-items-center">
                          <div class="col">
                            <hr class="hr" />
                          </div>
                          <div class="col-auto">
                            <span class="span_or">OR</span>
                          </div>
                          <div class="col">
                            <hr class="hr" />
                          </div>
                        </div>
                        <!-- Botón de Iniciar sesión con Google -->
                        <div class="row justify-content-center">
                          <div class="col-md-12">
                            <button class="gsi-material-button">
                              <div class="gsi-material-button-state"></div>
                              <div class="gsi-material-button-content-wrapper">
                                <div class="gsi-material-button-icon">
                                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" xmlns:xlink="http://www.w3.org/1999/xlink" style="display: block;">
                                    <path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"></path>
                                    <path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"></path>
                                    <path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"></path>
                                    <path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"></path>
                                    <path fill="none" d="M0 0h48v48H0z"></path>
                                  </svg>
                                </div>
                                <span class="gsi-material-button-contents">Crear Cuenta con Google</span>
                                <span style="display: none;">Crear Cuenta con Google</span>
                              </div>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                  <!-- Section: Design Block -->

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" style="background-color: transparent; color: #8c142a;" data-mdb-ripple-init data-mdb-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
          <!-- Modal Crear Cuenta -->
        </section>
        <!-- Section: Modals -->
        <!-- Section: Labores -->
        <section class="mb-10" id="labores">

          <div class="container">

            <div class="row gx-0 align-items-center">

              <!-- First column -->
              <div class="col-lg-6 mb-5 mb-lg-0">

                <div style="background: hsla(0, 0%, 100%, 0.55); backdrop-filter: blur(30px); z-index: 1;" class="card rounded-7 me-lg-n5">
                  <div class="card-body p-lg-5 shadow-5">
                    <h2 class="fw-bold">
                      <span class="" style="color: #8c142a;">John Doe</span>
                    </h2>
                    <p class="fw-bold"><em>“Design is intelligence made visible.”</em></p>

                    <p class="text-muted mb-4">
                      Nunc tincidunt vulputate elit. Mauris varius purus malesuada
                      neque iaculis malesuada. Aenean gravida magna orci, non
                      efficitur est porta id. Donec magna diam.
                    </p>
                    <p class="text-muted">
                      Ad, at blanditiis quaerat laborum officia incidunt
                      cupiditate dignissimos voluptates eius aliquid minus
                      praesentium! Perferendis et totam ipsum ex aut earum libero
                      accusamus voluptas quod numquam saepe, consequuntur nihil
                      quia tenetur consequatur. Quis, explicabo deserunt quasi
                      assumenda ea maiores nulla, et dolor saepe praesentium natus
                      error reiciendis voluptas iste. Esse, laudantium ipsum
                      animi, quos voluptatibus atque vero repellat sit eligendi
                      autem maiores quasi cum aperiam. Aperiam rerum culpa
                      accusantium, ducimus deserunt aliquid alias vitae quasi
                      corporis placeat vel maiores explicabo commodi!
                    </p>
                  </div>
                </div>

              </div>
              <!-- First column -->

              <!-- Second column -->
              <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="bg-image hover-overlay rounded-7 shadow-4 rotate-lg">
                  <img src="https://mdbootstrap.com/img/new/standard/people/272.jpg" class="w-100" alt="" />
                  <div class="mask" style="background: linear-gradient( 45deg,hsla(169, 84.5%, 52%, 0.3),hsla(263, 87.7%, 44.7%, 0.3) 100%)"></div>
                </div>
              </div>
              <!-- Second column -->

            </div>

          </div>

        </section>
        <!-- Section: Labores -->
        <!-- Section: Opiniones -->
        <section class="mb-10 text-center" id="opiniones">

          <h2 class="fw-bold mb-7 text-center">Opiniones</h2>

          <div class="row gx-lg-5">

            <!-- First column -->
            <div class="col-lg-4 mb-5 mb-lg-0">

              <div>
                <div class="rounded-7 p-4 shadow-3" style="background-color: rgba(180, 95, 111, 0.18);">
                  <!-- Divider here -->
                  <hr class="hr hr-blurry">
                  <p class="text-muted mt-4 mb-2">Project Manager at Spotify</p>
                  <p class="h5 mb-4" style="color: #8c142a;">Garry Lindman</p>
                  <p class="pb-4 mb-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis molestias quidem
                    itaque earum tempora distinctio soluta ut, eius, impedit porro iure praesentium
                    ratione possimus quos suscipit, ratione nostrum cum odit.
                  </p>
                </div>
                <img src="https://mdbootstrap.com/img/new/avatars/22.jpg" class="w-100 rounded-7 mt-n5 shadow-5-strong"
                  style="max-width: 100px" alt="Avatar" />
              </div>

            </div>
            <!-- First column -->

            <!-- Second column -->
            <div class="col-lg-4 mb-5 mb-lg-0">

              <div>
                <div class="rounded-7 p-4 shadow-3" style="background-color: rgba(180, 95, 111, 0.18);">
                  <!-- Divider here -->
                  <hr class="hr hr-blurry">
                  <p class="text-muted mt-4 mb-2">CEO at Reddit</p>
                  <p class="h5 mb-4" style="color: #8c142a;">Lisa Montessori</p>
                  <p class="pb-4 mb-4">
                    Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum
                    soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
                    placeat facere possimus, omnis voluptas assumenda est omnis.
                  </p>
                </div>
                <img src="https://mdbootstrap.com/img/new/avatars/11.jpg" class="w-100 rounded-7 mt-n5 shadow-5-strong"
                  style="max-width: 100px" alt="Avatar" />
              </div>

            </div>
            <!-- Second column -->

            <!-- Third column -->
            <div class="col-lg-4">

              <div>
                <div class="rounded-7 p-4 shadow-3" style="background-color: rgba(180, 95, 111, 0.18);">
                  <!-- Divider here -->
                  <hr class="hr hr-blurry">
                  <p class="text-muted mt-4 mb-2">Senior Product Designer at Twitter</p>
                  <p class="h5 mb-4" style="color: #8c142a;">Ozzy McRyan</p>
                  <p class="pb-4 mb-4">
                    Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe
                    eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque
                    earum rerum hic tenetur a sapiente delectus ut aut reiciendis.
                  </p>
                </div>
                <img src="https://mdbootstrap.com/img/new/avatars/25.jpg" class="w-100 rounded-7 mt-n5 shadow-5-strong"
                  style="max-width: 100px" alt="Avatar" />
              </div>

            </div>
            <!-- Third column -->

          </div>
        </section>
        <!-- Section: Opiniones -->
        <!-- Section: Contacto -->
        <section class="mb-10 text-center" id="contacto">
          <div class="container">
            <div class="row gx-0 align-items-center">
              <!-- First column -->
              <div class="col-lg-6 mb-5 mb-lg-0">

                <div style="background: hsla(0, 0%, 100%, 0.55); backdrop-filter: blur(30px); z-index: 1;" class="card rounded-7 me-lg-n5">
                  <div class="card-body p-lg-5 shadow-5">
                    <form>
                      <!-- Name input -->
                      <div class="form-outline mb-4" data-mdb-input-init>
                        <input type="text" id="form4Example1" class="form-control" />
                        <label class="form-label" for="form4Example1">Nombre</label>
                      </div>

                      <!-- Email input -->
                      <div class="form-outline mb-4" data-mdb-input-init>
                        <input type="email" id="form4Example2" class="form-control" />
                        <label class="form-label" for="form4Example2">Correo Electronico</label>
                      </div>

                      <!-- Message input -->
                      <div class="form-outline mb-4" data-mdb-input-init>
                        <textarea class="form-control" id="form4Example3" rows="4"></textarea>
                        <label class="form-label" for="form4Example3">Mensaje</label>
                      </div>

                      <!-- Checkbox -->
                      <div class="form-check d-flex justify-content-center mb-4">
                        <input class="form-check-input me-2" type="checkbox" value="" id="form4Example4" checked />
                        <label class="form-check-label" for="form4Example4">
                          Enviar una copia a mi correo electronico
                        </label>
                      </div>

                      <!-- Submit button -->
                      <button type="submit" class="btn btn-primary btn-block mb-4" style="background-color: #8c142a;" data-mdb-ripple-init>Enviar</button>
                    </form>
                  </div>
                </div>

              </div>
              <!-- First column -->
              <!-- Second column -->
              <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="ratio ratio-1x1">
                  <iframe class="shadow-3-strong rounded-7" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96813.17497894862!2d-73.97484803586903!3d40.68692922859912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2588f046ee661%3A0xa0b3281fcecc08c!2sManhattan%2C%20New%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2spl!4v1671718528728!5m2!1sen!2spl" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
              <!-- Second column -->
            </div>
          </div>
        </section>
        <!-- Section: Contacto -->
      </div>
    </main>
    <!-- Main layout-->
  </div>
  <!-- Footer -->
  <div class="custom-shape-divider-bottom-1732555480">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
      <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
      <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
      <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
    </svg>
  </div>
  <footer class="text-center" style="background-color: #8c142a;">
    <div class="position-relative">
      <div class="bg-image rounded-7 shadow-5">
        <div class="container py-4">

          <!-- Facebook -->
          <a class="m-2" href="#!" role="button">
            <i class="bi bi-facebook text-white"></i>
          </a>

          <!-- Twitter -->
          <a class="m-2" href="#!" role="button">
            <i class="bi bi-twitter-x text-white"></i>
          </a>

          <!-- Google -->
          <a class="m-2" href="#!" role="button">
            <i class="bi bi-google text-white"></i>
          </a>

          <!-- Instagram -->
          <a class="m-2" href="#!" role="button">
            <i class="bi bi-instagram text-white"></i>
          </a>

          <!-- Linkedin -->
          <a class="m-2" href="#!" role="button">
            <i class="bi bi-linkedin text-white"></i>
          </a>
          <!-- Github -->
          <a class="m-2" href="#!" role="button">
            <i class="bi bi-github text-white"></i>
          </a>

        </div>
        <!-- Copyright -->
        <div class="text-center text-white p-5">
          © 2025 Copyright:
          <a class="text-white" href="https://familysystems.com.mx/">FamilySystems.com.mx</a>
        </div>
        <!-- Copyright -->
      </div>
    </div>
  </footer>
  <!-- Footer -->
  <!-- End your project here-->

  <!-- MDB -->
  <script type="text/javascript" src="js/mdb.umd.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript">
    const navbar = document.getElementById("main-navbar")
    window.addEventListener('scroll', function() {
      if (window.pageYOffset > 0) {
        navbar.classList.add("navbar-after-scroll")
      } else {
        navbar.classList.remove("navbar-after-scroll")
      }
    })
  </script>
  <script type="text/javascript">
    // Initialization for ES Users
    import {
      Input,
      initMDB
    } from "mdb-ui-kit";

    initMDB({
      Input
    });

    // Icon Example
    const passwordInput1 = document.getElementById('show-password-input-1');
    const toggleIcon = document.getElementById('show-password-toggle-icon');

    toggleIcon.addEventListener('pointerdown', (e) => {
      e.preventDefault();

      // Toggle input type between password and text
      if (passwordInput1.type === 'password') {
        passwordInput1.type = 'text';
        toggleIcon.classList.remove('bi bi-eye');
        toggleIcon.classList.add('bi bi-eye-slash');
      } else {
        passwordInput1.type = 'password';
        toggleIcon.classList.remove('bi bi-eye-slash');
        toggleIcon.classList.add('bi bi-eye');
      }
    });
  </script>
</body>

</html>