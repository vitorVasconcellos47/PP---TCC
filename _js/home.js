function verificar(){ 

    var name = document.getElementById('name').value;
    var cep = document.getElementById('cep').value;
    var msg = document.getElementById('msg').value;
    

    if ( !name || !cep || !msg ){
        alert("Preencha todos os campos da denúncia, por favor!")
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