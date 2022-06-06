function verificar(){ 

    var cep = document.getElementById("cep").value;
    var ctg = document.getElementById("ctg").value;
    var file = document.getElementById("file").value;

    if(!cep || !ctg || !file){

        alert("Favor preencher todos os campos")
    } else{
        alert("Campos preenchidos com sucesso");
    }
}

// MÁSCARA CEP - DENÚNCIA

    function mascara_cep() {

    if(cep.value.length == 5) {
        cep.value += "-"
    }
}