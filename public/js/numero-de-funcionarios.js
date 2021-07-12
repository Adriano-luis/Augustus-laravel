$(document).ready(function(){
    //DROP DE TALAS LATERAIS
    abaNome = $('input[name="aba-nome"]').val();
    //selecionas as abas
    let drop1 = document.querySelector('.menu-1');
    let drop2 = document.querySelector('.menu-2');
    let drop3 = document.querySelector('.menu-3');
    let drop4 = document.querySelector('.menu-4');
    let drop5 = document.querySelector('.menu-5');
    let drop6 = document.querySelector('.menu-6');
    let drop7 = document.querySelector('.menu-7');

    //esconde as abas
    if(abaNome == 'funcionarios'){
        $(drop3).css('display', 'block');

        $(drop1).css('display', 'none');
        $(drop2).css('display', 'none');
        $(drop4).css('display', 'none');
        $(drop5).css('display', 'none');
        $(drop6).css('display', 'none');
        $(drop7).css('display', 'none');
    }



        //RAMO DE ATUAÇÃO
    let ramo1 = document.querySelector('#funcionarios-tela-1');
    let ramoFinal = document.querySelector('#funcionarios-tela-final');

    if(abaNome == 'funcionarios'){
        window.onload = function() {
            var reloading = sessionStorage.getItem("reloading");
            if (reloading) {
                sessionStorage.removeItem("reloading");
                $(ramo1).css('display', 'none');
                nextRamo(ramoFinal);
            }
        }
    }

    $('input[type="radio"]').change(function() {
        var $that = $(this),
            $div = $that.closest('.radio');
       
           if ($that.is(':checked')) {
                $div.css('background-color', '#00B976'); 
                $div.css('color', '#2C2858');   
           } else {
               $div.css('background-color', '');
               $div.css('color', '#89879E');
           }
       });

    selected1Tela1='';

    $('.radio-tela input:radio').change(function() {
        $('.radio-tela input:radio:checked').not(this).prop('checked', false);
        selected1Tela1 = $(".radio-tela input:radio:checked").val();
      });

    $('.next-funcionarios-1').click(function (){
        salvaInfo(ramo1);
        nextRamo(ramoFinal);
        
    });

    $('.next-funcionarios-final').click(function (){
        empresa = $('input[name="idEmpresa"]').val();
        cont = $('input[name="cont"]').val();
        window.location.href= '/Augustus/public/forneca-informacoes/previdencia?id='+empresa+'&cont='+cont;
    });
    $('.previous-funcionarios-final').click(function (){
        previousRamo(ramo1);
        
    });  



    function nextRamo(ramo){
        if(ramo == ramoFinal){
            $(ramo1).css('display', 'none');
            $(ramoFinal).css('display', 'block');
        }
    }  

    function previousRamo(ramo){
        if(ramo == ramo1){
            $(ramoFinal).css('display', 'none');
            $(ramo1).css('display', 'block');
        }
    }  


     //Salva as informações entre as telas
    function salvaInfo(ramo){

        if(ramo == ramo1){
            

            if(selected1Tela1 !=''){
                respostasPage = selected1Tela1;
            }else {
                respostasPage ='';
            }
            
             $.ajax({
                type:'POST',
                url:'/Augustus/public/forneca-informacoes/numero-de-funcionarios',
                data: {"_token": $('meta[name="csrf-token"]').attr('content'),respostasPage},
                success:function(data){
                    window.sessionStorage.setItem("reloading", "true");    
                    setInterval(function(){
                        window.location.reload(true);
                    }, 3000); 
                    
                }
            });
            
        }
    }


});