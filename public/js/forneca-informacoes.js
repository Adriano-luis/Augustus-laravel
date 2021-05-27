$(document).ready(function(){

    let ramo1 = document.querySelector('#ramo-tela-1');
    let ramo2 = document.querySelector('#ramo-tela-2');
    let ramo3 = document.querySelector('#ramo-tela-3');
    let ramo4 = document.querySelector('#ramo-tela-4');
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
        //nextRamo(ramo2);
        alert('foi');
    });
    $('.previous-4').click(function (){
        previousRamo(ramo3);
        
    });  



   function nextRamo(ramo){
        if(ramo == ramo2){
            $(ramo1).css('display', 'none');
            $(ramo2).css('display', 'block');
        } else if(ramo == ramo3){
            $(ramo2).css('display', 'none');
            $(ramo3).css('display', 'block');
        } else {
            $(ramo3).css('display', 'none');
            $(ramo4).css('display', 'block');
        }
    }  

    function previousRamo(ramo){
        if(ramo == ramo2){
            $(ramo2).css('display', 'none');
            $(ramo1).css('display', 'block');
        } else if(ramo == ramo3){
            $(ramo3).css('display', 'none');
            $(ramo2).css('display', 'block');
        } else {
            $(ramo4).css('display', 'none');
            $(ramo3).css('display', 'block');
        }
    }  
    
    
    



});