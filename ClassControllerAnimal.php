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

    $inputPeso = $_POST['peso'];
    $inputIdade = $_POST['idade'];
    $inputMembros = $_POST['membros'];
    $inputCorPelo = $_POST['corPelo'];
    $inputCorEscama = $_POST['corEscama'];
    $inputCorPena = $_POST['corPena'];
    var_dump($inputPeso);

        //$M[0] = new Mamifero(50.2,2,4,'Branco');
        //$R[0] = new Reptil(20,5,4,'Verde');
        //$P[0] = new Peixe(1,1,0,'Verde azulado');
        //$A[0] = new Ave(2.5,1,2,'Azul');
        //$Can[0] = new Canguru(40,6,4,'Marrom');
        //$Cac[0] = new Cachorro(13,8,4,'Branco');
        //$Co[0] = new Cobra(1.4,1,9,'Verde');
        //$Tart[0] = new Tartaruga(32.5,15,4);
        //$Gold[0] = new Goldfish(0.30,1,0,'Dourado');
        //$Ara[0] = new Arara(0.800,1,2,'Azul');

        //foreach ($M as $mamifero) {
        //    print_r($mamifero);
        //}
        //foreach ($R as $reptil) {
        //    print_r($reptil);
        //}
        //foreach ($P as $peixe) {
        //    print_r($peixe);
        //}
        //foreach ($Can as $canguru) {
        //    print_r($canguru);
        //}
        //foreach ($Cac as $cachorro) {
        //    print_r($cachorro);
        //}
        //foreach ($Co as $cobra) {
        //    print_r($cobra);
        //}
        //foreach ($Tart as $tartaruga) {
        //    print_r($tartaruga);
        //}
        //foreach ($Gold as $goldfish) {
        //    print_r($goldfish);
        //}
        //foreach ($Ara as $arara) {
        //    print_r($arara);
        //}
?>
</body>
</html>