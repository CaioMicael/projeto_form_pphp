window.onload = function () {
    comportamento();
}

function comportamento() {
    let especie = document.getElementById('iespecie');
    especie.addEventListener('change',function() {
        if (document.getElementById('iespecie').value == 'Mamifero') {
            mamiferoComportamento();
        }
        if (document.getElementById('iespecie').value == 'Reptil') {
            reptilComportamento();
        }
        if (document.getElementById('iespecie').value == 'Ave') {
            aveComportamento();
        }
        if (document.getElementById('iespecie').value == 'Peixe') {
            peixeComportamento();
        }
    }
)
}

function mamiferoComportamento() {
    if (document.getElementById('Mamifero')) {
        document.getElementById('null').setAttribute('hidden','');
        document.getElementById('Cachorro').hidden = false;
        document.getElementById('Canguru').hidden = false;
        document.getElementById('icorpelo').hidden = false;
        document.getElementById('acorpelo').hidden = false;
        document.getElementById('Tartaruga').setAttribute('hidden','');
        document.getElementById('Cobra').setAttribute('hidden','');
        document.getElementById('Arara').setAttribute('hidden','');
        document.getElementById('Goldfish').setAttribute('hidden','');
    }
}

function reptilComportamento() {
    if (document.getElementById('Reptil')) {
        document.getElementById('Tartaruga').hidden = false;
        document.getElementById('Cobra').hidden = false;
        if (document.getElementById('ianimal').value == 'Cobra') {
            document.getElementById('icorescama').hidden = false;
            document.getElementById('acorescama').hidden = false;
        }
        document.getElementById('null').setAttribute('hidden','');
        document.getElementById('Cachorro').setAttribute('hidden','');
        document.getElementById('Canguru').setAttribute('hidden','');
        document.getElementById('Arara').setAttribute('hidden','');
        document.getElementById('Goldfish').setAttribute('hidden','');
    }
}

function aveComportamento() {
    if (document.getElementById('Ave')) {
        document.getElementById('null').setAttribute('hidden','');
        document.getElementById('Arara').hidden = false;
        document.getElementById('icorpelo').hidden = false;
        document.getElementById('acorpelo').hidden = false;
        document.getElementById('Cachorro').setAttribute('hidden','');
        document.getElementById('Canguru').setAttribute('hidden','');
        document.getElementById('Tartaruga').setAttribute('hidden','');
        document.getElementById('Cobra').setAttribute('hidden','');
        document.getElementById('Goldfish').setAttribute('hidden','');
    }
}

function peixeComportamento() {
    if (document.getElementById('Peixe')) {
        document.getElementById('null').setAttribute('hidden','');
        document.getElementById('Goldfish').hidden = false;
        document.getElementById('icorpelo').hidden = false;
        document.getElementById('acorpelo').hidden = false;
        document.getElementById('Cachorro').setAttribute('hidden','');
        document.getElementById('Canguru').setAttribute('hidden','');
        document.getElementById('Tartaruga').setAttribute('hidden','');
        document.getElementById('Cobra').setAttribute('hidden','');
        document.getElementById('Arara').setAttribute('hidden','');
    }
}

//Funções para resgatar o valor dos select no PHP
function mudouValorSelect() {
    var especie = document.getElementById('iespecie');
    var animal  = document.getElementById('ianimal');
    var textoEspecie = especie.options[especie.selectedIndex].innerHTML;
    var textoAnimal  = animal.options[animal.selectedIndex].innerHTML;

    //altera o valor do input hidden para o select selecionado
    document.getElementById("hiddenEspecie").value = textoEspecie;
    document.getElementById("hiddenAnimal").value = textoAnimal;
}