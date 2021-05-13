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
const fale = document.querySelector('#menu-item-1434');
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