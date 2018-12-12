if($('#form').length > 0){ 
    
    let email = document.getElementById('email');
    let nome = document.getElementById('name');
    let form = document.getElementById('form');
    let exibeErros = document.querySelector('.exibeErros');
    let btnSubmit = document.querySelector('.btn-submit');
    let sobrenome = document.getElementById('sobrenome');
    let user = document.getElementById('user');
    let senha = document.getElementById('password');
    let confirmaSenha = document.getElementById('password-confirm');
    
    btnSubmit.onclick = function(){
    let erros = [];
    if(nome.value ==""){
            erros.push('Preencha o campo Nome.');
    }
    if(sobrenome.value ==""){
        erros.push('Preencha o campo Sobrenome.');
    }
    if(user.value ==""){
        erros.push('Preencha o campo Nome de usuário.');
    }
    if (erros.length>0){
        exibeErros.classList.add('alert');
        exibeErros.classList.add('alert-danger');
    } else {
        document.getElementById('form').submit();
    }
    
    if(senha.value!=confirmaSenha.value){
        erros.push('Senhas diferentes');
    }
    
    
        erros.forEach(erro =>{
            exibeErros.innerHTML +=erro + "<br>";
    });

    }
}

// idade.oninput = function (){
//     this.value = this.value.replace(\/D/g,"");
// };


// cpf.oninput = function(){
//     this.value = this.value.replace(\/D/g,"");
// }

// telefone.oninput = function () = {
//     this.value = this.value.replace(\/D/g,"")
// }




window.onload = function (){

var fazul = document.getElementById('fundoazul');
fazul.addEventListener('click', runFunction );

var padrao = document.getElementById('padrao');
padrao.addEventListener('click', runFunction3 );

var fred = document.getElementById('fundored');
fred.addEventListener('click', runFunction1 );

var fgreen = document.getElementById('fundogreen');
fgreen.addEventListener('click', runFunction2 );



function runFunction(e){

    console.log( 'event type:' +e.type);
    document.body.style.backgroundColor = "lightblue";
    document.getElementById('mainNav1').style.backgroundColor = "lightblue";
    document.getElementById('cores').style.backgroundColor = "lightblue";
    document.getElementById('portfolio').style.backgroundColor = "lightblue";
    document.getElementById('team').style.backgroundColor = "lightblue";
}



function runFunction1(e){

    console.log( 'event type:' +e.type);
    document.body.style.backgroundColor = "#fe3636a6";
    document.getElementById('mainNav1').style.backgroundColor = "#fe3636a6";
    document.getElementById('cores').style.backgroundColor = "#fe3636a6";
    document.getElementById('portfolio').style.backgroundColor = "#fe3636a6";
    document.getElementById('team').style.backgroundColor = "#fe3636a6";
}




function runFunction2(e){

    console.log( 'event type:' +e.type);
    document.body.style.backgroundColor = "lightgreen";
    document.getElementById('mainNav1').style.backgroundColor = "lightgreen";
    document.getElementById('cores').style.backgroundColor = "lightgreen";
    document.getElementById('portfolio').style.backgroundColor = "lightgreen";
    document.getElementById('team').style.backgroundColor = "lightgreen";
}




function runFunction3(e){

    console.log( 'event type:' +e.type);
    document.body.style.backgroundColor = "white";
    document.getElementById('mainNav1').style.backgroundColor = "#435058";
    document.getElementById('cores').style.backgroundColor = "lightgray";
    document.getElementById('portfolio').style.backgroundColor = "lightgray";
    document.getElementById('team').style.backgroundColor = "lightgray";
}


// var inputBusca = document.getElementById('busca');
// // var output = document.getElementById('output');

// inputBusca.addEventListener('keydown', runEvent);

// function runEvent(e){
//     document.getElementById('output').innerHTML = '<h3>' +e.target.value+ '</h3>';
// }

}




