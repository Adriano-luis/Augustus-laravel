$(document).ready(function(){
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
    if(fale){
        fale.addEventListener('click',function(e){
            iniciamodal('modal-contato');
            e.preventDefault();
        });
    }
    

const editar = document.querySelector('#link-editar');
    if(editar){
        editar.addEventListener('click',function(e){
            iniciamodal('modal-editar');
            e.preventDefault();
        });
    }
    

const excluir = document.querySelector('#link-excluir');
    if(excluir){
        excluir.addEventListener('click',function(e){
            iniciamodal('modal-excluir');
            e.preventDefault();
        });
    }
    






//PROGRESSO BARRA HOME
function corProgressoHome(empresas,i){
    let barra = document.querySelector('#barra-'+[i]);
    empresa = parseInt(empresas.innerHTML,10);
    if(empresa<32){
        barra.classList.add('color');
        $(barra).attr('aria-valuenow', empresa).css('width', empresa+'%');
       
    }else if(empresa > 32 && empresa<99){
        barra.classList.add('color-2');
        $(barra).attr('aria-valuenow', empresa).css('width', empresa+'%');
        
    }else if(empresa>99){
        barra.classList.add('color-3');
        $(barra).attr('aria-valuenow', empresa).css('width', empresa+'%');
        
    }
}

let progresso = document.querySelectorAll('#porcentagem');
progresso.forEach(corProgressoHome);




//PROGRESSO BARRA FORNCEÇER INFORMAÇÕES
function corProgressoForneca(empresa){
    let barra = document.querySelector('#barra-0');
    
    if(empresa<32){
        barra.classList.add('color');
        $(barra).attr('aria-valuenow', empresa).css('width', empresa+'%');
       
    }else if(empresa > 32 && empresa<99){
        barra.classList.add('color-2');
        $(barra).attr('aria-valuenow', empresa).css('width', empresa+'%');
        
    }else if(empresa>99){
        barra.classList.add('color-3');
        $(barra).attr('aria-valuenow', empresa).css('width', empresa+'%');
        
    }
}

let progressoForneca = document.querySelector('#porcentagem');
Num = parseInt(progressoForneca.innerHTML,10);
corProgressoForneca(Num);

});