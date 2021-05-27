$(document).ready(function(){

    //DROP DE TALAS LATERAIS
    let drop1 = document.querySelector('.menu-1');
    let drop2 = document.querySelector('.menu-2');
    let drop3 = document.querySelector('.menu-3');
    let drop4 = document.querySelector('.menu-4');
    let drop5 = document.querySelector('.menu-5');
    let drop6 = document.querySelector('.menu-6');
    let drop7 = document.querySelector('.menu-7');




    //RAMO DE ATUAÇÃO
    let ramo1 = document.querySelector('#ramo-tela-1');
    let ramo2 = document.querySelector('#ramo-tela-2');
    let ramo3 = document.querySelector('#ramo-tela-3');
    let ramo4 = document.querySelector('#ramo-tela-4');
    let ramoFinal = document.querySelector('#ramo-tela-final');
    if(ramo1){
        $(ramo1).css('display', 'block');
    }
    if(ramo2){
        $(ramo2).css('display', 'none');
    }
    if(ramo3){
        $(ramo3).css('display', 'none');
    }
    if(ramo4){
        $(ramo4).css('display', 'none');
    }
    if(ramoFinal){
        $(ramoFinal).css('display', 'none');
    }



    $('.next-1').click(function (){
        nextRamo(ramo2);
        
    });


    $('.next-2').click(function (){
        nextRamo(ramo3);
        
    });
    $('.previous-2').click(function (){
        previousRamo(ramo1);
        
    });  


    $('.next-3').click(function (){
        nextRamo(ramo4);
        
    });
    $('.previous-3').click(function (){
        previousRamo(ramo2);
        
    });


    $('.next-4').click(function (){
        nextRamo(ramoFinal);

    });
    $('.previous-4').click(function (){
        previousRamo(ramo3);
        
    });


    $('.next-final').click(function (){
        alert('oi');
    });
    $('.previous-final').click(function (){
        previousRamo(ramo4);
        
    });  



   function nextRamo(ramo){
        if(ramo == ramo2){
            $(ramo1).css('display', 'none');
            $(ramo2).css('display', 'block');
        } else if(ramo == ramo3){
            $(ramo2).css('display', 'none');
            $(ramo3).css('display', 'block');
        } else if(ramo == ramo4) {
            $(ramo3).css('display', 'none');
            $(ramo4).css('display', 'block');
        } else{
            $(ramo4).css('display', 'none');
            $(ramoFinal).css('display', 'block');
        }
    }  

    function previousRamo(ramo){
        if(ramo == ramo1){
            $(ramo2).css('display', 'none');
            $(ramo1).css('display', 'block');
        } else if(ramo == ramo2){
            $(ramo3).css('display', 'none');
            $(ramo2).css('display', 'block');
        } else if(ramo == ramo3) {
            $(ramo4).css('display', 'none');
            $(ramo3).css('display', 'block');
        } else {
            $(ramoFinal).css('display', 'none');
            $(ramo4).css('display', 'block');
        }
    }  
    
    
    



});