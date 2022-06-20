
// Troca de Slides

function toggleForm(){
    section = document.querySelector('section');
    container = document.querySelector('.container');
    container.classList.toggle('active');
    section.classList.toggle('active');
}

// Registrar

function registrar(){ 

    var reguser = document.getElementById('reguser').value;
    var regpass = document.getElementById('regpass').value;    

    if ( !reguser || !regpass ){
        alert("Preencha todos os campos de registro, por favor!")
    } else{
        window.location.href="index.php";    
    }
}

// Cadastrar

function cadastrar(){ 

    var caduser = document.getElementById('caduser').value;
    var cademail = document.getElementById('cademail').value;
    var cadpass = document.getElementById('cadpass').value;
    var cadfirm = document.getElementById('cadfirm').value;

    if ( !caduser || !cademail || !cadpass || !cadfirm){
        alert("Preencha todos os campos do cadastro, por favor!")
    } else{
        window.location.href="index.php";    
    }
}