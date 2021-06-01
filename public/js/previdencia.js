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
    if(drop2){
        $(drop2).css('display', 'none');
    }
    if(drop3){
        $(drop3).css('display', 'none');
    }
    if(abaNome == 'previdencia'){
        $(drop1).css('display', 'none');
        $(drop4).css('display', 'block');
    }
    if(drop5){
        $(drop5).css('display', 'none');
    }
    if(drop6){
        $(drop6).css('display', 'none');
    }
    if(drop7){
        $(drop7).css('display', 'none');
    }


        //mostra as abas
    $('.topico-1').click(function (){
        mostrarAba(drop1);
        
    });
    $('.topico-2').click(function (){
        mostrarAba(drop2);
        
    });
    $('.topico-3').click(function (){
        mostrarAba(drop3);
        
    });
    $('.topico-4').click(function (){
        mostrarAba(drop4);
        
    });
    $('.topico-5').click(function (){
        mostrarAba(drop5);
        
    });
    $('.topico-6').click(function (){
        mostrarAba(drop6);
        
    });
    $('.topico-7').click(function (){
        mostrarAba(drop7);
        
    });

        //funçao de mostrar aba
    function mostrarAba(drop){
        if(drop == drop1){
            $(drop2).css('display', 'none');
            $(drop3).css('display', 'none');
            $(drop4).css('display', 'none');
            $(drop5).css('display', 'none');
            $(drop6).css('display', 'none');
            $(drop7).css('display', 'none');

            $(drop1).css('display', 'block');

        }else if(drop == drop2){
            $(drop1).css('display', 'none');
            $(drop3).css('display', 'none');
            $(drop4).css('display', 'none');
            $(drop5).css('display', 'none');
            $(drop6).css('display', 'none');
            $(drop7).css('display', 'none');

            $(drop2).css('display', 'block');

        }else if(drop == drop3){
            $(drop1).css('display', 'none');
            $(drop2).css('display', 'none');
            $(drop4).css('display', 'none');
            $(drop5).css('display', 'none');
            $(drop6).css('display', 'none');
            $(drop7).css('display', 'none');

            $(drop3).css('display', 'block');

        }else if(drop == drop4){
            $(drop1).css('display', 'none');
            $(drop2).css('display', 'none');
            $(drop3).css('display', 'none');
            $(drop5).css('display', 'none');
            $(drop6).css('display', 'none');
            $(drop7).css('display', 'none');

            $(drop4).css('display', 'block');

        }else if(drop == drop5){
            $(drop1).css('display', 'none');
            $(drop2).css('display', 'none');
            $(drop3).css('display', 'none');
            $(drop4).css('display', 'none');
            $(drop6).css('display', 'none');
            $(drop7).css('display', 'none');

            $(drop5).css('display', 'block');

        }else if(drop == drop6){
            $(drop1).css('display', 'none');
            $(drop2).css('display', 'none');
            $(drop3).css('display', 'none');
            $(drop4).css('display', 'none');
            $(drop5).css('display', 'none');
            $(drop7).css('display', 'none');

            $(drop6).css('display', 'block');

        }else if(drop == drop7){
            $(drop1).css('display', 'none');
            $(drop2).css('display', 'none');
            $(drop3).css('display', 'none');
            $(drop4).css('display', 'none');
            $(drop5).css('display', 'none');
            $(drop6).css('display', 'none');

            $(drop7).css('display', 'block');

        }
        
    }

        //RAMO DE ATUAÇÃO
    let ramo1 = document.querySelector('#previdencia-tela-1');
    let ramo2 = document.querySelector('#previdencia-tela-2');
    let ramoFinal = document.querySelector('#previdencia-tela-final');

    if(abaNome == 'previdencia'){
        window.onload = function() {
            var reloading = sessionStorage.getItem("reloading");
            if (reloading) {
                sessionStorage.removeItem("reloading");
                $(ramo1).css('display', 'none');
                nextRamo(ramoFinal);
            }
        }
    }

    $('.next-previdencia-1').click(function (){
        salvaInfo(ramo1);
        nextRamo(ramo2);
        
    });


    $('.next-previdencia-2').click(function (){
        salvaInfo(ramo2);
        nextRamo(ramoFinal);
        
    });
    $('.previous-previdencia-2').click(function (){
        previousRamo(ramo1);
        
    });  

    $('.next-previdencia-final').click(function (){
        empresa = $('input[name="idEmpresa"]').val();
        cont = $('input[name="cont"]').val();
        window.location.href= '/Augustus/public/forneca-informacoes/comercio-exterior?id='+empresa+'&cont='+cont;
    });
    $('.previous-previdencia-final').click(function (){
        previousRamo(ramo2);
        
    });  



    function nextRamo(ramo){
        if(ramo == ramo2){
            $(ramo1).css('display', 'none');
            $(ramo2).css('display', 'block');
        } else{
            $(ramo2).css('display', 'none');
            $(ramoFinal).css('display', 'block');
        }
    }  

    function previousRamo(ramo){
        if(ramo == ramo1){
            $(ramo2).css('display', 'none');
            $(ramo1).css('display', 'block');
        } else {
            $(ramoFinal).css('display', 'none');
            $(ramo2).css('display', 'block');
        }
    }  


     //Salva as informações entre as telas
     function salvaInfo(ramo){
        if(ramo == ramo1){
            respostasPage1 = $('input[name="check-1"]:checked').toArray().map(function(check) { 
                return $(check).val(); 
            }); 
            console.log(respostasPage1);
        } else if(ramo == ramo2){
            respostasPage2 = $('input[name="check-2"]:checked').toArray().map(function(check) { 
                return $(check).val(); 
            });  
            console.log(respostasPage2);
            
             $.ajax({
                type:'POST',
                url:'/Augustus/public/forneca-informacoes',
                data: {"_token": $('meta[name="csrf-token"]').attr('content'),respostasPage1,respostasPage2},
                success:function(data){
                    sessionStorage.setItem("reloading", "true");    
                    window.location.reload(true);
                    
                }
            });
            
        }
    }


});