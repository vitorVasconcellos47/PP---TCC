
function feedback(){ 

var feeduser = document.getElementById('feeduser').value;
var feedemail = document.getElementById('feedemail').value;
var feedcomment = document.getElementById('feedcomment').value;
    
if ( !feeduser || !feedemail || !feedcomment ){
    alert("Preencha todos os campos do feedback, por favor!")
} 

else {
    alert("Campos preenchidos com sucesso, responderemos assim que possível!");
}

}

// Formulário de denúncia

function denunciar(){ 

var denuser = document.getElementById('denuser').value;
var denend = document.getElementById('denend').value;
var dennum = document.getElementById('dennum').value;
var dencause = document.getElementById('dencause').value;
var denpoint = document.getElementById('denpoint').value;
var denarchive = document.getElementById('denarchive').value;
    

if ( !denuser || !denend || !dennum || !dencause || !denpoint || !denarchive ){
    alert("Preencha todos os campos da denúncia, por favor!")
}

else {
    alert("Campos preenchidos com sucesso, obrigado pela colaboração!");
}

}

// Denúncia - CEP

// function maskcep() {

// if(dencep.value.length == 5) {
//         dencep.value += "-"
//     }

// }

// Carregador de arquivos

const   form = document.querySelector("form"),
        fileInput = form.querySelector(".file-input"),
        progressArea = document.querySelector(".progress-area"),
        uploadedArea = document.querySelector(".uploaded-area");
        form.addEventListener("click", ()=>{
        fileInput.click();
});

fileInput.onchange = ({target}) =>{

let file = target.files[0];

if(file){

let fileName = file.name;

if(fileName.length >= 12){

let splitName = fileName.split('.');

fileName = splitName[0].substring(0, 12) + "... ." + splitName[1];

}

uploadFile(fileName);

}

}

function uploadFile(name){

let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/upload.php");
    xhr.upload.addEventListener("progress", ({loaded, total}) =>{

let fileLoaded = Math.floor((loaded / total) * 100);
let fileTotal = Math.floor(total / 1000);
let fileSize;

    (fileTotal < 1024) ? fileSize = fileTotal + " KB " : fileSize = (loaded / (1024 * 1024)).toFixed(2) + " MB ";

let progressHTML = `<li class="row">
        
                        <i class="fas fa-file-alt"></i>
                        <div class="content">
                        <div class="details">
                        <span class="name">${name} • Uploading</span> 
                        <span class="percent">${fileLoaded}%</span>
                        </div>
                        <div class="progress-bar">
                        <div class="progress" style="width: ${fileLoaded}%"></div>
                        </div>
                        </div>     
                    </li>`;

    uploadedArea.classList.add("onprogress");
    progressArea.innerHTML = progressHTML;

if(loaded == total){

    progressArea.innerHTML = "";

let uploadedHTML = `<li class="row">
                        <div class="content">
                        <i class="fas fa-file-alt"></i>
                        <div class="details">
                        <span class="name">${name} • Uploaded</span> 
                        <span class="size">${fileSize}</span>
                        </div>
                        </div>
                        <i class="fas fa-check"></i>
                    </li>`;

    uploadedArea.classList.remove("onprogress");
    uploadedArea.insertAdjacentHTML("afterbegin", uploadedHTML);

}

});

let formData = new FormData(form);
    xhr.send(formData);
    
}