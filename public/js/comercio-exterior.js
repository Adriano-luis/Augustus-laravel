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
    
    if(abaNome == 'comercio'){
        $(drop5).css('display', 'block');

        $(drop1).css('display', 'none');
        $(drop2).css('display', 'none');
        $(drop3).css('display', 'none');
        $(drop4).css('display', 'none');
        $(drop6).css('display', 'none');
        $(drop7).css('display', 'none');
    }



        //RAMO DE ATUAÇÃO
    let ramo1 = document.querySelector('#comercio-tela-1');
    let ramoFinal = document.querySelector('#comercio-tela-final');

    if(abaNome == 'comercio'){
        var reloading = sessionStorage.getItem("reloading");
        if (reloading) {
            sessionStorage.removeItem("reloading");
            $(ramo1).css('display', 'none');
            nextRamo(ramoFinal);
        }
    }

    $('.next-comercio-1').click(function (){
        salvaInfo(ramo1);
        nextRamo(ramoFinal);
        
    });

    $('.next-comercio-final').click(function (){
        empresa = $('input[name="idEmpresa"]').val();
        cont = $('input[name="cont"]').val();
        window.location.href= '/Augustus/public/forneca-informacoes/relacionamento?id='+empresa+'&cont='+cont;
    });
    $('.previous-comercio-final').click(function (){
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
            respostas1Page1 = $("#exportacoes option:selected").val();

            respostas2Page1 =$("#inportacoes option:selected").val();
            
             $.ajax({
                type:'POST',
                url:'/Augustus/public/forneca-informacoes/comercio-exterior',
                data: {"_token": $('meta[name="csrf-token"]').attr('content'),respostas1Page1,respostas2Page1},
                success:function(data){
                    window.sessionStorage.setItem("reloading", "true");    
                    window.location.reload(true);
                    
                }
            });
            
        }
    }


});