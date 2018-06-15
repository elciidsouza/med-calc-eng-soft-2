<?php

$chf = $_POST["chf"];
$hipertensao = $_POST["hipertensao"];
$age = $_POST["age"];
$diabates = $_POST["diabates"];
$ave = $_POST["ave"];

$result = 0;

if($age >= 75){
    $result = $result+1;
}

if($chf == 1){
    $result = $result+1;
}

if($hipertensao == 1){
    $result = $result+1;
}

if($diabates == 1){
    $result = $result+1;
}

if($ave == 1){
    $result = $result+2;
}



function returntype($valor) {
    if($valor == 0) {
        echo "Não";
    } else{
        echo "Sim";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Resultado de risco de AVC de Fibrilação Atrial</title>

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
                <h5>INFORMAÇÕES DE RISCO DE AVC</h5>
                <li class="list-group-item list-group-item-secondary text-center text-secondary">INFORMAÇÕES DO PACIENTE</li>

                <li class="list-group-item">
                    <div>Insuficiência cardíaca</div>
                    <div><?php returntype($chf); ?></div>
                </li>

                <li class="list-group-item">
                    <div>Hipertensão</div>
                    <div><?php returntype($hipertensao); ?></div>
                </li>

                <li class="list-group-item">
                    <div>Idade do paciênte</div>
                    <div><?php echo $age; ?></div>
                </li>

                <li class="list-group-item">
                    <div>Diabetes Mellitus</div>
                    <div><?php returntype($diabates); ?></div>
                </li>

                <li class="list-group-item">
                    <div>Acidente vascular encefálico</div>
                    <div><?php returntype($ave); ?></div>
                </li>

                <?php

                if($result == 0){
                    $classresult = 'text-success font-weight-bold';
                } elseif($result > 0 && $result <= 2){
                    $classresult = 'text-warning font-weight-bold';
                } else {
                    $classresult = 'text-danger font-weight-bold';
                }

                if($result == 0){
                    $resulttext = 'Baixo risco';
                } elseif($result > 0 && $result <= 2){
                    $resulttext = 'Risco moderado';
                } else {
                    $resulttext = 'Alto risco';
                }

                ?>

                <li class="list-group-item <?php echo $classresult; ?>">
                    <div>RESULTADO FINAL</div>
                    <div><?php echo $result; ?></div>
                </li>

                <li class="list-group-item <?php echo $classresult; ?>">
                    <div>RESULTADO FINAL</div>
                    <div><?php echo $resulttext; ?></div>
                </li>


                <br><br>
                <h5>TABELA PARA COMPARAÇÃO</h5>
                <table class="table table-hover">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Parâmetro</th>
                        <th scope="col">Pontos</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">Insuficiência cardíaca</th>
                        <td>1</td>
                    </tr>
                    <tr>
                        <th scope="row">Hipertensão</th>
                        <td>1</td>
                    </tr>
                    <tr>
                        <th scope="row">Idade do paciênte >= 75</th>
                        <td>1</td>
                    </tr>
                    <tr>
                        <th scope="row">Diabetes Mellitus</th>
                        <td>1</td>
                    </tr>
                    <tr>
                        <th scope="row">Acidente vascular encefálico</th>
                        <td>2</td>
                    </tr>

                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Pontuação</th>
                        <th scope="col">Risco de ocorrência</th>
                    </tr>
                    </thead>

                    <tr>
                        <th scope="row">0 pontos</th>
                        <td class="text-success">Baixo risco</td>
                    </tr>

                    <tr>
                        <th scope="row">1 ou 2 pontos</th>
                        <td class="text-warning">Risco moderado</td>
                    </tr>

                    <tr>
                        <th scope="row">>= 3 pontos/th>
                        <td class="text-danger">Alto risco</td>
                    </tr>
                    </tbody>
                </table>

                <a href="index.html" class="btn btn-success">VOLTAR PARA PÁGINA INICIAL</a>

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





























