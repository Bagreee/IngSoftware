<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="../gesta-login.jpg" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form method="POST" action="">

      @csrf
      <input type="text" id="name" class="fadeIn second" name="name" placeholder="Nombre">   
      <select name="role" class="fadeIn second" id="role">
        <option value="">Selecione un rol</option>
        <option value="conserje">Conserje</option>
        <option value="mayordomo">Mayordomo</option>
        <option value="juntaDeVecinos">Junta de vecinos</option>
        <option value="admin">Administrador</option>
      </select>
      <input type="email" id="email" class="fadeIn second" name="email" placeholder="Email">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="Contraseña">
      <input type="password" id="password_confirmation" class="fadeIn third" name="password_confirmation" placeholder="Confirme contraseña">

      <input type="submit" class="fadeIn fourth" value="Registrar">

    </form> 

  </div>
</div>