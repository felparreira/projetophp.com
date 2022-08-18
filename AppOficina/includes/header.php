<html>
    <head>
        <meta charset="utf-8">

            <!--Import Google Icon Font-->
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

            <!--Import materialize.css-->
            <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

            <!--Let browser know website is optimized for mobile-->
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

            <link rel="shortcut icon" href="img/favicon.png"/>
            <link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>            
            <link href="fontawesome/css/all.min.css" rel="stylesheet">
            <link rel="stylesheet" href="style.css" type="text/css"/>
            <script src="js/tinymce/tinymce.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <title>App Oficina</title>
    </head>

    <body>
        
        <header class="main_header" style="background-image:url(img/header.png);  position:relative; width:100%; height:180px;  background-repeat: no-repeat; ">
            <div>
                <div class="mobile_action">
                <input type="checkbox" id="check">
                <label id="icone" for="check">
                    <i class="fas fa-bars fa-2x"></i>
                </label>
                <div class="side-menu">
                    <nav>
                        <ul>
                            <li><a href="clientes.php">Clientes</a></li>
                            <li><a href="veiculos.php">Veículos</a></li>
                            <li><a href="servicos.php">Serviços</a></li>
                            <li><a href="orcamentos.php">Orçamentos</a></li>                                
                        </ul>
                    </nav>
                </div><!--side-menu-->
            </div><!--mobile_action-->
            <div class="nav-menu">
                <div class="nav-menu-content">
                    <ul>
                        <li><a href="clientes.php">Clientes</a></li>
                        <li><a href="veiculos.php">Veículos</a></li>
                        <li><a href="servicos.php">Serviços</a></li>
                        <li><a href="orcamentos.php">Orçamentos</a></li>                                
                        </ul>
                </div><!--nav-menu-content-->
            </div><!--nav-menu-->

            <div class="main_header_logo">
                <!--<h1 class="fontzero">Oriontec Automação Comercial</h1><-->
                <a href="index.php" title="App Oficina">
                    <img src="img/logo.png " alt="App Oficina" title="App Oficina"/>
                </a>
            </div><!--main_header_logo-->
            </div>
        </header><!--main_header container-->
    </body>
</html>