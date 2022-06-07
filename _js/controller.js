function verificar(){ 

    var cep = document.getElementById('cep').value;
    var ctg = document.getElementById('ctg').value;
    var file = document.getElementById('file').value;

    if(!cep || !ctg || !file){
        alert("Preencher todos os campos, por favor!")
    } else{
        alert("Campos preenchidos com sucesso, Obrigado pela colaboração!");
    }
}

// MÁSCARA CEP - DENÚNCIA

    function mascara_cep() {

    if(cep.value.length == 5) {
        cep.value += "-"
    }
}