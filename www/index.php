<html>
 <html>
   <head> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"></head>
 <body>

  <form class="row g-3" action="numerotlfn.php" method="get">
    <div class="col-auto">
      <input type="text" readonly class="form-control-plaintext" id="staticEmail2" 
        value="¿Nombre?">
    <div>
      <input type="text" class="form-control" name = "Nombre" placeholder="Introduce el nombre">
    </div>
    <div class="col-auto">
      <input type="text" readonly class="form-control-plaintext" id="staticEmail2" 
        value="¿Número  de teléfono?">
      <input type="text" class="form-control" name = "Num" placeholder="Introduce el Número">
    </div>
    <div class="col-auto"> <br>
      <button type="submit" class="btn btn-primary mb-3">Pulsa para registrarse</button>
    </div>
  </form>
</html>