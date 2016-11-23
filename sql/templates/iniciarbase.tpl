<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instalación de la base de datos</title>
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../../css/estilo.css">
</head>
<body >
<div >
    <section>
        <div class="container-center lg animated slideInDown">
            <div class="view-header">
                <div class="header-title">
                    <h3>Instalación de la base de datos</h3>
                </div>
            </div>

            <div class="row">
              <form class="col-md-6 col-md-offset-3">
                <h2 class="text-center"> Instalación de la base de datos</h2>
                <div class="form-group">
                  <label for="nombreContacto">Host</label>
                <input type="name" value="" class="form-control" name="host" required>
                </div>
                <div class="form-group">
                  <label for="mailContacto">Usuario</label>
                <input type="name" value="" class="form-control" name="user" required>
                </div>
                <div class="form-group">
                  <label for="mensaje">Contraseña</label>
                  <input type="password" value=""class="form-control" name="db-pw">
                </div>
                <div class="form-group">
                  <label for="mensaje">Nombre base de datos</label>
                  <input type="name" value="" class="form-control" name="dbname" required>
                </div>
                <button type="submit" class="btn btn-default">Confirmar</button>
              </form>
            </div>
        </div>
    </section>

</div>

<script src="../../js/jquery.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="js/ajax.js"></script>


</body>
</html>
