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









//PROGRESSO BARRA EMPRESA - VISUALIZAR
function corProgressoVisualizar(empresa){
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

let progressoVisualizar = document.querySelector('#porcentagem');
Num = parseInt(progressoVisualizar.innerHTML,10);
corProgressoVisualizar(Num);


//Excluir empresas
$('#modal-btn-excluir').click(function() {
    empresa_nome = $('#dadoTitulo').val();

    $.ajax({
        type:'POST',
        url:'/Augustus/public/excluir',
        data: {"_token": $('meta[name="csrf-token"]').attr('content'),empresa_nome},
        success:function(data){   
            window.location.reload(true);
        }
    });
});

});