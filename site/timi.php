<?php

$age = $_POST["age"];
$hr = $_POST["hr"];
$sbp = $_POST["sbp"];

$result = $hr * ($age/10)*($age/10) / $sbp;

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Calculadora Médica</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-item.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.html">MED CALC</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
</nav>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <div class="col-lg-12">

            <ul class="list-group list-group-flush">
                <br><br>
                <h5>INFORMAÇÕES DE RISCO DE TIMI</h5>
                <li class="list-group-item list-group-item-secondary text-center text-secondary">INFORMAÇÕES DO PACIENTE</li>
                <li class="list-group-item">
                    <div>Idade do paciênte</div>
                    <div><?php echo $age; ?></div>
                </li>

                <li class="list-group-item list-group-item-secondary text-center text-secondary">INFORMAÇÕES MÉDICAS DO PACIENTE</li>

                <li class="list-group-item">
                    <div>Frequência Cardíaca</div>
                    <div><?php echo $hr; ?></div>
                </li>

                <li class="list-group-item">
                    <div>Pressão Arterial Sistólica</div>
                    <div><?php echo $sbp; ?></div>
                </li>

                <?php

                if($result < 4){
                    $classresult = 'text-danger font-weight-bold';
                } elseif($result > 5 && $result <= 28){
                    $classresult = 'text-success font-weight-bold';
                }
                elseif($result > 28){
                    $classresult = 'text-warning font-weight-bold';
                }

                ?>

                <li class="list-group-item <?php echo $classresult; ?>">
                    <div>RESULTADO FINAL</div>
                    <div><?php echo $result; ?></div>
                </li>


                <br><br>
                <h5>TABELA PARA COMPARAÇÃO</h5>
                <table class="table table-hover">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Parâmetro</th>
                        <th scope="col">Normal baixo</th>
                        <th scope="col">Normal alto</th>
                        <th scope="col">Limite inferior</th>
                        <th scope="col">Limite superior</th>
                        <th scope="col">Unidades C</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">IDADE</th>
                        <td>0</td>
                        <td>90</td>
                        <td>0</td>
                        <td>110</td>
                        <td>anos</td>
                    </tr>
                    <tr>
                        <th scope="row">FREQUÊNCIA CARDÍACA</th>
                        <td>60</td>
                        <td>90</td>
                        <td>0</td>
                        <td>500</td>
                        <td>bpm</td>
                    </tr>
                    <tr>
                        <th scope="row">Pressão arterial sistólica</th>
                        <td>100</td>
                        <td>140</td>
                        <td>0</td>
                        <td>300</td>
                        <td>mmHg</td>
                    </tr>
                    </tbody>
                </table>

                <a href="timi.html" class="btn btn-success">VOLTAR PARA PÁGINA INICIAL</a>

            </ul>
        <br><br><br>
        </div>

        </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; ENGENHARIA DE SOFTWARE 2</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

