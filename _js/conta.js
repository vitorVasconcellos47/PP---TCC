function toggleForm(){
    section = document.querySelector('section');
    container = document.querySelector('.container');
    container.classList.toggle('active');
    section.classList.toggle('active');
}

//Funcões de verificações

function verificar(){ 

    var name = document.getElementById('name').value;
    var password = document.getElementById('password').value;    

    if ( !name || !password ){
        alert("Preencha todos os campos de Login, por favor!")
    } else{
        window.location.href="index.php";    
    }
}

function verificar1(){ 

    var name1 = document.getElementById('name1').value;
    var email1 = document.getElementById('email1').value;
    var password1 = document.getElementById('password1').value;
    var confirm1 = document.getElementById('confirm1').value;

    if ( !name1 || !email1 || !password1 || !confirm1){
        alert("Preencha todos os campos do cadastro, por favor!")
    } else{
        window.location.href="index.php";    
    }
}

