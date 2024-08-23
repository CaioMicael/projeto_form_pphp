<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polimorfismo</title>
    <link rel="stylesheet" href="layoutPadrao.css">
    <script src="View.js"></script>
</head>
<body>
    <section class="form-container">
        <div class="container">
            <form method="post" action="ClassControllerAnimal.php">
                <fieldset>
                    <legend>Cadastre um animal</legend>
                <h1>Crie um animal!</h1>
                <div class="input-single">
                    <label for="Animal">Selecione uma espécie</label>
                    <select name="especie" id="iespecie" required autocomplete="off" onchange="mudouValorSelect()">
                        <option value="null" selected></option>
                        <option value="Mamifero" id="Mamifero">Mamífero</option>
                        <option value="Reptil" id="Reptil">Réptil</option>
                        <option value="Ave" id="Ave">Ave</option>
                        <option value="Peixe" id="Peixe">Peixe</option>
                    </select>
                </div>

                <div class="input-single">
                    <label for="Animal">Selecione um animal</label>
                    <select name="animal" id="ianimal" required autocomplete="off">
                        <option value="null" id="null" selected></option>
                        <option value="Cachorro" id="Cachorro">Cachorro</option>
                        <option value="Canguru" id="Canguru">Canguru</option>
                        <option value="Tartaruga" id="Tartaruga">Tartaruga</option>
                        <option value="Cobra" id="Cobra">Cobra</option>
                        <option value="Arara" id="Arara">Arara</option>
                        <option value="Goldfish" id="Goldfish">Goldfish</option>
                    </select>
                </div>

                <div class="input-single">
                    <label for="peso">Peso:</label>
                    <input class="input" type="text" name="peso" autocomplete="off">
                </div>

                <div class="input-single">
                    <label for="idade">Idade:</label>
                    <input class="input" type="text" name="idade" autocomplete="off">
                </div>

                <div class="input-single">
                    <label for="Membros">Membros:</label>
                    <input class="input" type="text" name="membros" autocomplete="off">
                </div>

                <div class="input-single">
                    <label for="CorPelo" id="icorpelo" hidden>Cor Pelo:</label>
                    <input class="input" hidden id="acorpelo" type="text" name="corPelo" autocomplete="off">
                </div>

                <div class="input-single">
                    <label for="CorEscama" id="icorescama" hidden>Cor Escama:</label>
                    <input class="input" hidden id="acorescama" type="text" name="corEscama" autocomplete="off">
                </div>

                <div class="input-single">
                    <label for="CorPena" id="icorpena" hidden>Cor Pena:</label>
                    <input class="input" id="acorpena" hidden type="text" name="corPena" autocomplete="off" >
                </div>

                <div class="button"> 
                    <button type="submit">Enviar</button>
                </div>
                <input type="hidden" name="especie" id="hiddenEspecie"/>
                <input type="hidden" name="animal" id="hiddenAnimal">
            </form>
        <a href="ClassControllerAnimal.php">
            <button>Ver animais</button></a> 
        </fieldset>
        </div>
    </section>


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
    ?>
</body>
</html>