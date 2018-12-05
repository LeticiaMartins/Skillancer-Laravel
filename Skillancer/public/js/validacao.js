// seleciona os campos
let form = document.getElementById('cadastro');
let nome = document.getElementById('nome');
let email = document.getElementById('email');
let idade = document.getElementById('idade');
let cpf = document.getElementById('cpf');
let exibeErros = document.querySelector('.exibeErros');

// criar div para mostrar os erros

form.onsubmit = function(){
// campos obrigatorios
let erros = [];

if(nome.value == ""){
    erros.push('Preencha o campo Nome');
 }
erros.forEach(erro => {
    exibeErros.innerHTML(erros);

   });    
}

// validacao de campo numerico//nao esquece de comentar pq pro projeto nao serve
idade.oninput = function () {
    this.value = this.value.replace(/\D/g,"");
};


cpf.oninput = function () {
    this.value = this.value.replace(/\D/g,"");
};

telefone.oninput = function () {
    this.value = this.value.replace(/\D/g,"");
};

// OU
function soNumeros(){
    this.value = this.value.replace(/\D/g,"");
}

// valida campos selecionados
idade.oninput = soNumeros;
cpf.oninput = soNumeros;
telefono.oninput = soNumeros;
