<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    require_once 'ClassMamifero.php';
    require_once 'ClassReptil.php';
    require_once 'ClassPeixe.php';
    require_once 'ClassAve.php';
    require_once 'ClassCanguru.php';
    require_once 'ClassCachorro.php';
    require_once 'ClassCobra.php';
    require_once 'ClassTartaruga.php';
    require_once 'ClassGoldfish.php';
    require_once 'ClassArara.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputEspecie   = isset($_POST['especie'])   ? $_POST['especie']   : 'Não definido';
        $inputAnimal    = isset($_POST['animal'])    ? $_POST['animal']    : 'Não definido';
        $inputPeso      = isset($_POST['peso'])      ? $_POST['peso']      : 'Não definido';
        $inputIdade     = isset($_POST['idade'])     ? $_POST['idade']     : 'Não definido';
        $inputMembros   = isset($_POST['membros'])   ? $_POST['membros']   : 'Não definido';
        $inputCorPelo   = isset($_POST['corPelo'])   ? $_POST['corPelo']   : 'Não definido';
        $inputCorEscama = isset($_POST['corEscama']) ? $_POST['corEscama'] : 'Não definido';
        $inputCorPena   = isset($_POST['corPena'])   ? $_POST['corPena']   : 'Não definido';
    } else {
        echo "Ocorreu um erro inesperado no formulário, favor verificar.";
    }

    if ($inputEspecie = 'Mamífero') {
        $M[0] = new Mamifero($inputPeso,$inputIdade,$inputMembros,$inputCorPelo);
        if ($inputAnimal = "Cachorro") {
                $Cac[0] = new Cachorro($inputPeso,$inputIdade,$inputMembros,$inputCorPelo);
        } else if ($inputAnimal = "Canguru") {
                $Can[0] = new Canguru($inputPeso,$inputIdade,$inputMembros,$inputCorPelo);
        }
    }

    if ($inputEspecie = "Réptil") {
        $R[0] = new Reptil($inputPeso,$inputIdade,$inputMembros,$inputCorEscama);
        if ($inputAnimal = "Tartaruga") {
            $Tart[0] = new Tartaruga($inputPeso,$inputIdade,$inputMembros,);
        } else if ($inputAnimal = "Cobra") {
            $Co[0] = new Cobra($inputPeso,$inputIdade,$inputMembros,$inputCorEscama);
        }
    }

    if ($inputEspecie = "Peixe") {
        $P[0] = new Peixe($inputPeso,$inputIdade,$inputMembros,$inputCorEscama);
        $Gold[0] = new Goldfish($inputPeso,$inputIdade,$inputMembros,$inputCorEscama);
    }

    if ($inputEspecie = "Ave") {
        $A[0] = new Ave($inputPeso,$inputIdade,$inputMembros,$inputCorPena);
        $Ara[0] = new Arara(0.800,1,2,'Azul');
    }

    foreach ($M as $mamifero) {
        print_r($mamifero);
    }
    
    foreach ($R as $reptil) {
        print_r($reptil);
    }

    foreach ($P as $peixe) {
        print_r($peixe);
    }

    foreach ($A as $ave) {
        print_r($ave);
    }

    foreach ($Cac as $cachorro) {
        print_r($cachorro);
    }

    foreach ($Can as $canguru) {
        print_r($canguru);
    }

    foreach ($Tart as $tartaruga) {
        print_r($tartaruga);
     }

    foreach ($Co as $cobra) {
        print_r($cobra);
    }

    foreach ($Gold as $goldfish) {
        print_r($goldfish);
    }
        
    foreach ($Ara as $arara) {
        print_r($arara);
    }
?>
</body>
</html>