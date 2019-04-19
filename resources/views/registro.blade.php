<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title></title>
  </head>
  <body>
    <div>
  <form class="needs-validation" novalidate method="get" action="http://localhost/juggernaut/public/createuser">
    <div class="form-group">
      <div class="col-sm-5">
        <label for="name">Nombre</label>
        <input class="form-control" type="text" name="nombre" required/><br/>
        <small class="text-muted">
          Nombre único identificativo.
        </small>
        <div class="invalid-feedback">
            Lo sentimos, este usuario no está disponible.
        </div>
        <div class="valid-feedback">
            ¡Usuario disponible!
        </div>
      </div>

      <div class="col-sm-5 mt-3">
        <label for="name">Contraseña</label>
        <input class="form-control" type="password" name="pass" required/><br/>
        <small class="text-muted">
          Mínimo 6 caracteres.
        </small>
        <div class="invalid-feedback">
            Error, contraseña incorrecta.
        </div>
        <div class="valid-feedback">
            ¡Contraseña correcta!
        </div>
      </div>
      <div class="col-sm-5 mt-3">
        <label for="name">Confirma contraseña</label>
        <input class="form-control" type="password" name="repass" required/><br/>
        <small class="text-muted">
          Repite la contraseña.
        </small>
        <div class="invalid-feedback">
            Error, las contraseñas no coinciden.
        </div>
        <div class="valid-feedback">
            1Las contraseñas coinciden!
        </div>
      </div>
      <div class="col-sm-5 mt-3">
        <label for="name">Email</label>
        <input class="form-control" type="email" name="mail" required/><br/>
        <small class="text-muted">
          Formato email, por ejemplo ejemplo@ejemplo.com
        </small>
        <div class="invalid-feedback">
            Error,email incorrecto.
        </div>
        <div class="valid-feedback">
            ¡Email correcto!
        </div>
      </div>
    <button class="ml-3 mt-3 btn btn-outline-primary" type="submit">Registro</button>
    </div>
  </form>
</div>

  <script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (function() {
    'use strict';
    window.addEventListener('load', function() {

      var forms = document.getElementsByClassName('needs-validation');

      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
  </script>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
