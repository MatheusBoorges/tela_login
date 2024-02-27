let form_cad_anima = document.querySelector("#form-login");
let form_cad_nov_anima = document.querySelector(".novo-usuario");

let voltar_logar = document.querySelector('.logar');
let formulario_cad = document.querySelector('#form-cadastro');

let cadastro_anima = document.querySelector(".cadastro");
let login_anima = document.querySelector(".login");

function mudar_formulario(){
    form_cad_anima.classList.add('form-cad_anima-iden');
    form_cad_nov_anima.classList.add('form-cad-nov-iden');
    
    setTimeout(function(){
        cadastro_anima.classList.remove('transisao-cad');
        cadastro_anima.classList.add('cadastro-animation');
        login_anima.classList.remove('transisao-cad');
        login_anima.classList.add('login-animation');

        setTimeout(function(){
        voltar_logar.classList.remove('visualizar-login');
        voltar_logar.classList.add('animation_login');
        formulario_cad.classList.remove('visualizar-formu');
        formulario_cad.classList.add('animation_cadastro');

        }, 300)
    }, 490)
}

function voltar_login(){
login_anima.classList.add('login-animation');
cadastro_anima.classList.add('cadastro-animation');
    setTimeout(function(){
        voltar_logar.classList.add('form-cad_anima-iden');
        voltar_logar.classList.remove('animation_login');
        formulario_cad.classList.add('form-cad-nov-iden');
        formulario_cad.classList.remove('animation_cadastro');

        setTimeout(function(){
            login_anima.classList.remove('login-animation');
            login_anima.classList.add('transisao-cad');
            cadastro_anima.classList.remove('cadastro-animation');
            cadastro_anima.classList.add('transisao-cad');
        }, 300)
            setTimeout(function(){
                form_cad_anima.classList.remove('form-cad_anima-iden');
                form_cad_nov_anima.classList.remove('form-cad-nov-iden');
            }, 800)
    }, 500)
}