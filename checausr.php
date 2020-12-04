<?php 
$act=0;
if($_POST['nombre']==""||$_POST['email']=="")
{
$act=1;
}
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Envio de informaci&oacute;n</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.css">
</head>
<body>
	<section class="hero is-primary">
	    <div class="hero-body">
	        <div class="container">
	          <h1 class="title">Universidad de Colima</h1>
	          <h2 class="subtitle">Facultad de Telemática</h2>
        	</div>
      	</div>
    </section>

    <!-- Cuerpo del documento -->
    <div class="container">
        <div class="columns is-centered">
            <div class="column is-three-fifths is-offset-one-fifth">       
                <h1 class="title is-2">Bienvenido al sistema</h1>
                <?php if($act==1)
                {
                    print <<<HERE
                    <center>
                    <div  class="notification is-danger">
                          <button class="delete"></button>
                          Error en el envio de la información
                    </div>
                    </center>
HERE;
                }
                else
                {
                print <<<HERE
                    <div class="field">
                      <label class="label">Nombre:</label>
                       
                      </div>
HERE;
                echo $_POST['nombre'];
                
                print <<<HERE
                    <div class="field">
                      <label class="label">Correo:</label>
                       
                      </div>
HERE;
                echo $_POST['email'];
				}
                ?>
			

    		</div>
        </div>
    </div>

    <!-- pié de página -->
    <footer class="footer">
      <div class="content has-text-centered">
        <p>
          <strong>&copy;Desarrollado</strong> por <a href="#">Marcelo Ramirez Morfin</a>.
       </p>
      </div>
    </footer>
</body>
</html>



