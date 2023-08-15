//CADASTRO190
//input solicitante anonimo
function toggleAnonimo() {
    var checkboxAnonimo = document.getElementById("checkboxAnonimo");
    var inputSolicitante = document.getElementById("inputSolicitante");

    if (checkboxAnonimo.checked) {
        inputSolicitante.value = "Anônimo";
    } else {
        inputSolicitante.value = "";
    }
}

// Obtém o elemento de entrada que dispara a ação desejada
var inputCidade = document.getElementById("inputNumero");

// Adiciona o evento keydown ao campo de entrada
inputCidade.addEventListener("keydown", function(event) {
    // Verifica se a tecla pressionada é Enter (código 13)
    if (event.keyCode === 13) {
        // Impede o envio do formulário padrão
        event.preventDefault();

        // Executa a ação desejada, como chamar a função para buscar na API
        fetchCEP();
    }
});
//COMPLETAR OS CAMPOS inputHidden
// Pessoa
$('#saveButtonPessoa').click(function() {
    var nome = $('#nomePessoa').val();
    var rg = $('#rgPessoa').val();
    var situacao = $('#situacaoPessoa').val();

    $('.hidden').empty(); // Limpa os elementos existentes na div com a classe "hidden"

    $('.hidden').append('<input type="hidden" name="inputHidden_pessoas_nome" value="' + nome + '">');
    $('.hidden').append('<input type="hidden" name="inputHidden_pessoas_rg" value="' + rg + '">');
    $('.hidden').append('<input type="hidden" name="inputHidden_pessoas_situacao" value="' + situacao +
        '">');

    var valorInputHiddennome = $('[name="inputHidden_pessoas_nome"]').val();
    var valorInputHiddenrg = $('[name="inputHidden_pessoas_rg"]').val();
    var valorInputHiddensituacao = $('[name="inputHidden_pessoas_situacao"]').val();

    console.log(valorInputHiddennome, valorInputHiddenrg, valorInputHiddensituacao);

    $('#modal-pessoa').hide();
});

// Smartphone
$('#saveButtonSmartphone').click(function() {
    var marca = $('#marcaSmartphone').val();
    var modelo = $('#modeloSmartphone').val();
    var numeroimei = $('#numeroimeiSmartphone').val();
    var situacaoSmartphone = $('#situacaoSmartphone').val();

    $('.hidden').empty(); // Limpa os elementos existentes na div com a classe "hidden"

    $('.hidden').append('<input type="hidden" name="inputHidden_celular_marca" value="' + marca + '">');
    $('.hidden').append('<input type="hidden" name="inputHidden_celular_modelo" value="' + modelo + '">');
    $('.hidden').append('<input type="hidden" name="inputHidden_celular_numeroimei" value="' + numeroimei +
        '">');
    $('.hidden').append('<input type="hidden" name="inputHidden_celular_situacao" value="' +
        situacaoSmartphone + '">');

    var valorInputHiddenmarcac = $('[name="inputHidden_celular_marca"]').val();
    var valorInputHiddenmodeloc = $('[name="inputHidden_celular_modelo"]').val();
    var valorInputHiddennumeroimei = $('[name="inputHidden_celular_numeroimei"]').val();
    var valorInputHiddensituacaoc = $('[name="inputHidden_celular_situacao"]').val();

    console.log(valorInputHiddenmarcac, valorInputHiddenmodeloc, valorInputHiddennumeroimei,
        valorInputHiddensituacaoc);

    $('#modal-smartphone').hide();
});

// Veiculo
$('#saveButtonVeiculo').click(function() {
    var placa = $('#placaVeiculo').val();
    var chassis = $('#chassisVeiculo').val();
    var cor = $('#corVeiculo').val();
    var marcaVeiculo = $('#marcaVeiculo').val();
    var modeloVeiculo = $('#modeloVeiculo').val();
    var situacaoVeiculo = $('#situacaoVeiculo').val();

    $('.hidden').empty(); // Limpa os elementos existentes na div com a classe "hidden"

    $('.hidden').append('<input type="hidden" name="inputHidden_veiculo_placa" value="' + placa + '">');
    $('.hidden').append('<input type="hidden" name="inputHidden_veiculo_chassi" value="' + chassis + '">');
    $('.hidden').append('<input type="hidden" name="inputHidden_veiculo_marca" value="' + marcaVeiculo +
        '">');
    $('.hidden').append('<input type="hidden" name="inputHidden_veiculo_modelo" value="' + modeloVeiculo +
        '">');
    $('.hidden').append('<input type="hidden" name="inputHidden_veiculo_cor" value="' + cor + '">');
    $('.hidden').append('<input type="hidden" name="inputHidden_veiculo_situacao" value="' +
        situacaoVeiculo + '">');

    var valorInputHiddenplaca = $('[name="inputHidden_veiculo_placa"]').val();
    var valorInputHiddenchassis = $('[name="inputHidden_veiculo_chassi"]').val();
    var valorInputHiddenmarcav = $('[name="inputHidden_veiculo_marca"]').val();
    var valorInputHiddenmodelov = $('[name="inputHidden_veiculo_modelo"]').val();
    var valorInputHiddencor = $('[name="inputHidden_veiculo_cor"]').val();
    var valorInputHiddensituacaov = $('[name="inputHidden_veiculo_situacao"]').val();

    console.log(valorInputHiddenplaca, valorInputHiddenchassis, valorInputHiddenmarcav,
        valorInputHiddenmodelov, valorInputHiddencor, valorInputHiddensituacaov);

    $('#modal-veiculo').hide();
});

//BUSCAR ENDEREÇO NO ARQUIVO KML E NA API NOMINATIM
var inputNumero = document.getElementById("inputNumero");
var inputEndereco = document.getElementById("inputEndereco");
var inputCidade = document.getElementById("inputCidade");
var inputBatalhao = document.getElementById("inputBatalhao");
var inputCompanhia = document.getElementById("inputCompanhia");
var inputSelectAdress = document.getElementById("inputSelectAdress");

inputCidade.addEventListener("keyup", function(event) {
    if (event.keyCode === 13 || event.keyCode === 9) {
        fetchCEP();
    }
});

inputNumero.addEventListener("keyup", function(event) {
    if (event.keyCode === 13 || event.keyCode === 9) {
        fetchAddress()
    }
});



function clearResult() {
    document.getElementById("resultAddress").innerText = "";
    document.getElementById("resultCEP").innerText = "";
    document.getElementById("inputBatalhao").innerText = "";
    document.getElementById("inputCompanhia").innerText = "";
}

var dateAdress = [];

function fetchAddress() {
    var city = inputCidade.value.replace(/-/g, ',');
    var url = "https://nominatim.openstreetmap.org/search?q=" + encodeURIComponent(inputEndereco.value + " " +
        city + " " + inputNumero.value) + "&format=json&addressdetails=2";
    clearResult();

    fetch(url)
        .then(response => response.json())
        .then(data => {
            selectAdress(data);
            dateAdress = data;

            if (data.length > 0) {
                var latitude = data[0].lat;
                var longitude = data[0].lon;
                // fetchBPMM(latitude, longitude);
            } else {
                document.getElementById("resultAddress").innerText = "Endereço não encontrado";
            }
        })

}

function adressSelect() {
    var data = document.getElementById("inputSelectAdress");
    for (let index = 0; index < dateAdress.length; index++) {



        if (dateAdress[index].place_id == data.value) {

            var latitude = dateAdress[index].lat;
            var longitude = dateAdress[index].lon;

            fetchBPMM(latitude, longitude);
        }
    }
}

function selectAdress(paraments) {
    var datalist = document.getElementById("inputSelectAdress");
    datalist.innerHTML = "";

    for (let index = 0; index < paraments.length; index++) {
        var option = document.createElement("option");
        option.value = paraments[index].place_id;
        option.text = paraments[index].address['suburb'];
        datalist.appendChild(option);
    }
}


function fetchBPMM(lat, lon) {
    var hostname = window.location.hostname;
    var url = "public/BattalionMap.kml";

    /* if (hostname === "localhost") {
                url = "http://localhost:81/siopm-off2/public/api/battalion-map";
            } else if (hostname === "127.0.0.1") {
                // url = "http://127.0.0.1:8000/api/battalion-map";
                url = "http://127.0.0.1:8000/public/api/battalion-map";
            } else if (hostname === "siopm-off.limiarnews.online") {
                url = "https://siopm-off.limiarnews.online/public/api/battalion-map";
            } else {
                // Defina uma URL padrão para outros servidores
                url = "http://outro-servidor.com/api/battalion-map";
            }
    */
    clearResult();

    var data = {
        latitude: lat,
        longitude: lon
    };

    fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        })
        .then(response => response.json())
        .then(responseData => {
            console.log(responseData)
            var values = responseData.split(' ');
            inputBatalhao.value = values[0].trim();
            inputCompanhia.value = values[1].trim();
        })
        .catch(error => {
            console.log(error);
        });
}

function fetchCEP() {
    var cepNumeros = inputCidade.value.replace(/\D/g, "");
    clearResult();

    if (isNaN(cepNumeros)) {
        return;
    }

    var url = "https://viacep.com.br/ws/" + encodeURIComponent(cepNumeros) + "/json/";

    fetch(url)
        .then(response => response.json())
        .then(data => {
            if (!data.erro) {
                inputCidade.value = data.localidade;
            } else {
                document.getElementById("resultCEP").innerText = "Endereço não encontrado";
            }
        })
        .catch(error => {
            console.log(error);
            document.getElementById("resultCEP").innerText = "Ocorreu um erro ao buscar o endereço";
        });
}

//ALERTA POLICIAL EM PERIGO FOI SELECIONADO
$(document).ready(function() {
    $("#checkPolicial").change(function() {
        if (this.checked) {
            $("#mensagem").css({
                "display": "block",
                "background-color": "red",
                "color": "white"
            });
        } else {
            $("#mensagem").hide();
        }
    });
});

//STEP-BY-STEP
$(document).ready(function(){

var current_fs, next_fs, previous_fs; //fieldsets
var opacity;



$(".next").click(function(){

current_fs = $(this).parent();
next_fs = $(this).parent().next();

//Add Class Active
$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//show the next fieldset
next_fs.show();
//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
    step: function(now) {
        // for making fielset appear animation
        opacity = 1 - now;

        current_fs.css({
            'display': 'none',
            'position': 'relative'
        });
        next_fs.css({'opacity': opacity});
    },
    duration: 600
});
});

$(".previous").click(function(){

current_fs = $(this).parent();
previous_fs = $(this).parent().prev();

//Remove class active
$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//show the previous fieldset
previous_fs.show();

//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
    step: function(now) {
        // for making fielset appear animation
        opacity = 1 - now;

        current_fs.css({
            'display': 'none',
            'position': 'relative'
        });
        previous_fs.css({'opacity': opacity});
    },
    duration: 600
});
});

$('.radio-group .radio').click(function(){
$(this).parent().find('.radio').removeClass('selected');
$(this).addClass('selected');
});

$(".submit").click(function(){
return false;
})

});
