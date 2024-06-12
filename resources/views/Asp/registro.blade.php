<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../../assets/css/nucleo-icons.css" rel="stylesheet">
    <link href="../../assets/css/nucleo-svg.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/soft-ui-dashboard.min.css">
    <title>Test Vocacional</title>
</head>
<body>
    <div class="container">
        <div class="col-xl-5 col-lg-12 col-ms-4 d-flex flex-column mx-auto">
            <div class="card card-plain mt-4">
                @if(session('mensaje'))
                    {{-- El contenido que se mostrará si la sesión $mensaje existe --}}
                    <div class="alert alert-warning alert-dismissible text-white" role="alert"><span>{{session('mensaje')}}</span></div>
                @endif
                <div class="card-header pb-0 text-left bg-transparent">
                    <img class="logo-image " srcset="https://www.fesc.edu.co/portal/images/logo.png 1x" src="https://www.fesc.edu.co/portal/images/logo.png" height="100%" alt="Fundación de Estudios Superiores Comfanorte - FESC">
                    
                    <h3 class="mb-0">Bienvenido</h3>
                </div>
                <div class="card-body">
                    <form role="form" method="POST" action="#" id="formulario">
                        @csrf
                        <!-- ... Tu formulario actual ... -->
                        <div class="row">
                            <div class="col-6">
                                <label>Nombre</label>
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Nombre" name="nombre">
                                </div>
                            </div>
                            <div class="col-6">
                                <label>Apellido</label>
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Apellido" name="apellido">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label>Numero de documento</label>
                                <div class="mb-3">
                                    <input type="number" class="form-control" placeholder="Numero de documento" name="numero_documento">
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="tipo_documento">Tipo de documento:</label>
                                <div class="mb-3">
                                    <select id="typeDocumentSelect" class="form-control" ng-model="survey.typeDocument" name="tipo_documento" required="">
                                        <option value="" disabled="" selected="" class="">Selecciona un tipo de documento</option>
                                        <option value="0" label="Cédula de Ciudadanía">Cédula de ciudadanía</option>
                                        <option value="1" label="Tarjeta de Identidad">Tarjeta de identidad</option>
                                        <option value="2" label="Cédula Extranjería">Cédula extranjería</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label>Teléfono</label>
                                <div class="mb-3">
                                    <input type="number" class="form-control" placeholder="Teléfono" name="telefono">
                                </div>
                            </div>
                            <div class="col-6">
                                <label>Correo</label>
                                    <div class="mb-3">
                                        <input type="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon" name="correo">
                                    </div>
                            </div>
                        </div>
                        
                        <label>Institución</label>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="colegio" name="nombre">
                        </div>
                        
                        <label>Dirección</label>
                        <div class="mb-3">
                            <textarea name="direccion" class="form-control" id="descripcion" cols="30" rows="5" placeholder="Dirección"></textarea>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>    
        </div>
    </div>
    </div>
    <footer class="footer py-0">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-facebook" aria-hidden="true"></span>
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-instagram" aria-hidden="true"></span>
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-linkedin-in" aria-hidden="true"></span>
                    </a>
                </div>
            </div>
            <div class="col-8 mx-auto text-center mt-1">
                <p class="mb-0 text-secondary">
                    Copyright © 2024 Hecho en Cúcuta 💻 | Realizado por estudiantes de la Fesc
                </p>
            </div>
        </div>
    </footer>   
    <!-- Agregar scripts necesarios de Bootstrap al final del body -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    
</body>
</html>



