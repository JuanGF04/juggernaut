<div id="formReg">
<form class="needs-validation" novalidate method="get" action="http://localhost/juggernaut/public/createuser">
  <div class="form-group">
    <div class="col-sm-12">
      <label for="name" id="labelForm">Nombre</label>
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

    <div class="col-sm-12 mt-3">
      <label for="name" id="labelForm">Contraseña</label>
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
    <div class="col-sm-12 mt-3">
      <label for="name" id="labelForm">Confirma contraseña</label>
      <input class="form-control" type="password" name="repass" required/><br/>
      <small class="text-muted">
        Repite la contraseña.
      </small>
      <div class="invalid-feedback">
          Error, las contraseñas no coinciden.
      </div>
      <div class="valid-feedback">
          ¡Las contraseñas coinciden!
      </div>
    </div>
    <div class="col-sm-12 mt-3">
      <label for="name" id="labelForm">Email</label>
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
  <button class="ml-3 mt-3 btn btn-outline-light" type="submit">Registro</button>
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
</form>
</div>
