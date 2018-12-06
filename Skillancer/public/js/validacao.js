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

