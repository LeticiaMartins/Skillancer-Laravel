<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
    <!-- titulo da pagina-->
    <title>Projetos Skillancer</title>

    <!-- icones fontes e CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <!-- vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    <style>

		/* .logo{

			margin-bottom:550px;
			margin-left: 140px;
		} */

		</style>
</head>

<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
    <a href="index.php"><h1>Skillancers</h1></a>
        <div class="wrapper wrapper--w680">
        <div class= "logo">
            <a class= "fontelogo" href="index.php"><img src="images/logo.png" alt="" width= "50" height= "50"></a>
          </div>


            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">

                    <h2 class="title">conte mais sobre seu projeto</h2>

                    <form method="POST">

                        <div class="input-group">
                        <h4>nome do projeto</h4>
                        <br>
                            <input class="input--style-1" type="text" placeholder="nome do projeto se houver" name="titulo">
                        </div>
                        <br>

                        <div class="form-group">
                                <h4 for="exampleSelect2">tipo se site se houver</h4>
                                <br>

                                <select multiple class="form-control" id="exampleSelect2" name= "tipo_servico">
                                  <option>e-commerce</option>
                                  <option>marketplace</option>
                                  <option>social/ONGs</option>
                                  <option>marketing</option>
                                  <option>rede social</option>
                                </select>
                        </div>
                        <br><br>

                            <div class="form-group">
                                    <h4 for="comment">fale mais sobre seu projeto</h4>
                                    <br>
                                    <div class="form-group">

                                    <textarea class="form-control" rows="5" id="comment" name= "descricao"></textarea>
                                  </div>
                        <br><br><br>

                            <div class="form-group">
                              <h4 for="exampleFormControlFile1">faça o upload das fotos do seu projeto</h4>
                              <br>
                              <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                            <br><br>
                         </div>

                            <button class="btn btn--radius btn--green" type="submit">Enviar</button>
                        </form>
        </div>
    </div>

    <!-- jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- main JS -->
    <script src="js/global.js"></script>

</body>

</html>

