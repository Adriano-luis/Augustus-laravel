//MODAL
function iniciamodal(modalID){
    const modal = document.getElementById(modalID);
    if(modal){
        modal.classList.add('mostrar');
        modal.addEventListener('click', function(e) {
            if(e.target.id == modalID || e.target.className == 'fechar'){
                modal.classList.remove('mostrar');
            }
        });
    }


}
const fale = document.querySelector('#menu-item');
    fale.addEventListener('click',function(e){
        iniciamodal('modal-contato');
        e.preventDefault();
    });

const editar = document.querySelector('#link-editar');
    editar.addEventListener('click',function(e){
    iniciamodal('modal-editar');
    e.preventDefault();
});

const excluir = document.querySelector('#link-excluir');
    excluir.addEventListener('click',function(e){
    iniciamodal('modal-excluir');
    e.preventDefault();
});






//PROGRESSO BARRA
function corProgresso(empresas,i){
    let barra = document.querySelector('.progress-bar');
    empresa = parseInt(empresas.innerHTML,10);
    if(empresa<32){
        barra.classList.add('color');
        alert(empresa+'color');
    }else if(empresa > 32 && empresa<66){
        barra.classList.add('color-2');
        alert(empresa+'color-2');
    }else if(empresa>66){
        barra.classList.add('color-3');
        alert(empresa+'color-3');
    }
}

let progresso = document.querySelectorAll('#porcentagem');
progresso.forEach(corProgresso);