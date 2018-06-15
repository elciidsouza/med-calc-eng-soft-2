<?php

$age = $_POST["age"];
$dm = $_POST["dm"];
$fumante = $_POST["fumante"];
$hp = $_POST["hp"];
$dislipidemia = $_POST["dislipidemia"];
$obesidade = $_POST["obesidade"];
$cm = $_POST["cm"];
$abc = $_POST["abc"];



$result = 0;

if($age >= 65){
    $result = $result+2;
} elseif($age < 45){
    //NAO FAZER NADA
} else{
    $result = $result+1;
}

if($dm == 1){
    $result = $result+1;
}

if($fumante == 1){
    $result = $result+1;
}

if($hp == 1){
    $result = $result+1;
}

if($dislipidemia == 1){
    $result = $result+1;
}

if($obesidade == 1){
    $result = $result+1;
}

if($abc == 1){
    $result = $result+2;
}

if($cm == 0) {
    $result = $result+2;
} elseif($cm == 1){
    $result = $result+1;
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

    <title>Pontuação do coração para grandes eventos cardíacos</title>

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
                <h5>PONTUAÇÃO DO CORAÇÃO PARA GRANDE EVENTOS CARDÍACOS</h5>
                <li class="list-group-item list-group-item-secondary text-center text-secondary">INFORMAÇÕES DO PACIENTE</li>

                <li class="list-group-item">
                    <div>Idade</div>
                    <div><?php echo $age; ?></div>
                </li>

                <li class="list-group-item">
                    <div>Diabetes Mellitus</div>
                    <div><?php returntype($dm); ?></div>
                </li>

                <li class="list-group-item">
                    <div>Fumante</div>
                    <div><?php returntype($fumante); ?></div>
                </li>

                <li class="list-group-item">
                    <div>Hipertensão</div>
                    <div><?php returntype($hp); ?></div>
                </li>

                <li class="list-group-item">
                    <div>Dislipidemia</div>
                    <div><?php returntype($dislipidemia); ?></div>
                </li>

                <li class="list-group-item">
                    <div>Obesidade</div>
                    <div><?php returntype($obesidade); ?></div>
                </li>

                <?php
                function returncm($valorcm) {
                    if($valorcm == 0) {
                        echo "Raramente";
                    } elseif($valorcm == 1){
                        echo "Moderadamente";
                    } else{
                        echo "Constante";
                    }

                }

                ?>

                <li class="list-group-item">
                    <div>Consultas médicas</div>
                    <div><?php returncm($cm); ?></div>
                </li>

                <?php
                function returnabc($valorabc) {
                    if($valorabc == 0) {
                        echo "Raramente";
                    } else{
                        echo "Constante";
                    }

                }

                ?>

                <li class="list-group-item">
                    <div>Alterações nos batimentos cardíacos</div>
                    <div><?php returnabc($abc); ?></div>
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
                        <th scope="row">Idade do paciênte >= 65 anos</th>
                        <td>2</td>
                    </tr>
                    <tr>
                        <th scope="row">Idade do paciênte 45 - 75 anos</th>
                        <td>1</td>
                    </tr>
                    <tr>
                        <th scope="row">Idade do paciênte < 45</th>
                        <td>0</td>
                    </tr>
                    <tr>
                        <th scope="row">Diabetes Mellitus</th>
                        <td>1</td>
                    </tr>
                    <tr>
                        <th scope="row">Fumante</th>
                        <td>1</td>
                    </tr>
                    <tr>
                        <th scope="row">Hipertensão</th>
                        <td>1</td>
                    </tr>
                    <tr>
                        <th scope="row">Dislipidemia</th>
                        <td>1</td>
                    </tr>
                    <tr>
                        <th scope="row">Obesidade</th>
                        <td>1</td>
                    </tr>
                    <tr>
                        <th scope="row">Consultas médicas raramente</th>
                        <td>2</td>
                    </tr>
                    <tr>
                        <th scope="row">Consultas médicas moderadamente</th>
                        <td>1</td>
                    </tr>
                    <tr>
                        <th scope="row">Consultas médicas constantes</th>
                        <td>0</td>
                    </tr>
                    <tr>
                        <th scope="row">Alterações nos batimentos cardíacos raramente</th>
                        <td>0</td>
                    </tr>
                    <tr>
                        <th scope="row">Alterações nos batimentos cardíacos constantes</th>
                        <td>2</td>
                    </tr>

                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Pontuação</th>
                        <th scope="col">Risco de ocorrência</th>
                    </tr>
                    </thead>

                    <tr>
                        <th scope="row">0 a 3 pontos</th>
                        <td class="text-success">Baixo risco</td>
                    </tr>

                    <tr>
                        <th scope="row">4 a 6 pontos</th>
                        <td class="text-warning">Risco moderado</td>
                    </tr>

                    <tr>
                        <th scope="row">> 7 pontos</th>
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





























