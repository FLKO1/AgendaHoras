<!doctype html>
<html lang="en">

<head>
  <title>Registrate</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('assets/estilos.css')}}">


</head>

<body>
    @csrf
    
    <section class="vh-100">

        <!-- Imagen -->

        <div class="container-fluid h-custom">

          <div class="row d-flex justify-content-center align-items-center h-100">

            <div class="col-md-9 col-lg-6 col-xl-5">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                class="img-fluid" alt="Sample image">
            </div>

            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                
                <div class="divider d-flex align-items-center my-4">
                  <p class="text-center fw-bold mx-3 mb-0"></p>
                </div>
    

                <!-- Name input -->
                <div class="form-outline mb-4">
                    <input type="text" name="name" id="form3Example3" class="form-control form-control-lg"
                      placeholder="xxxx" />
                    <label class="form-label" for="form3Example3">Ingrese su nombre</label>
                  </div>                

                  <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="email" name="email" id="form3Example3" class="form-control form-control-lg"
                      placeholder="correo@mail.com" />
                    <label class="form-label" for="form3Example3">Ingrese su correo</label>
                  </div>      

                <!-- Password input -->
                <div class="form-outline mb-3">
                  <input type="password" name="password" id="form3Example4" class="form-control form-control-lg"
                    placeholder="***" />
                  <label class="form-label" for="form3Example4">Clave</label>
                </div>
                    <p class="small fw-bold mt-2 pt-1 mb-0">Ya posee una cuenta? 
                        <a href="{{route('login')}}"class="link-danger">login</a></p>
               
       
      
                <div class="text-center text-lg-start mt-4 pt-2">
                  <button type="submit" class="btn btn-primary btn-lg"
                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Crear cuenta</button>
                </div>
            </div>
          </div>
        </div>
    </section>
              </form>
        <div
          class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
          <!-- Copyright -->
          <div class="text-white mb-3 mb-md-0">
            Copyright © 2023. All rights reserved for FcoLazoK para Dr Genna C.
          </div>
          <!-- Copyright -->
      
          <!-- Right -->

          <!-- Right -->
        </div>
 
      </section>
    </form>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>