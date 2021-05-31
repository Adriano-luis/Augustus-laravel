$(document).ready(function(){

    //DROP DE TALAS LATERAIS

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
    if(drop4){
        $(drop4).css('display', 'none');
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
            $(drop1).css('display', 'block');

        }else if(drop == drop2){
            $(drop2).css('display', 'block');

        }else if(drop == drop3){
            $(drop3).css('display', 'block');

        }else if(drop == drop4){
            $(drop4).css('display', 'block');

        }else if(drop == drop5){
            $(drop5).css('display', 'block');

        }else if(drop == drop6){
            $(drop6).css('display', 'block');

        }else if(drop == drop7){
            $(drop7).css('display', 'block');

        }
        
    }




    //RAMO DE ATUAÇÃO
    let ramo1 = document.querySelector('#ramo-tela-1');
    let ramo2 = document.querySelector('#ramo-tela-2');
    let ramo3 = document.querySelector('#ramo-tela-3');
    let ramo4 = document.querySelector('#ramo-tela-4');
    let ramoFinal = document.querySelector('#ramo-tela-final');

    window.onload = function() {
        var reloading = sessionStorage.getItem("reloading");
        if (reloading) {
            sessionStorage.removeItem("reloading");
            $(ramo1).css('display', 'none');
            nextRamo(ramoFinal);
        }
    }

    $('.next-1').click(function (){
        salvaInfo(ramo1);
        nextRamo(ramo2);
        
    });


    $('.next-2').click(function (){
        salvaInfo(ramo2);
        nextRamo(ramo3);
        
    });
    $('.previous-2').click(function (){
        previousRamo(ramo1);
        
    });  


    $('.next-3').click(function (){
        salvaInfo(ramo3);
        nextRamo(ramo4);
        
    });
    $('.previous-3').click(function (){
        previousRamo(ramo2);
        
    });


    $('.next-4').click(function (){
        salvaInfo(ramo4);
        

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
        } else if(ramo == ramo3) {
            respostasPage3 = $('input[name="check-3"]:checked').toArray().map(function(check) { 
                return $(check).val(); 
            });  
            console.log(respostasPage3);
        } else {
             respostasPage4 = $('input[name="check-4"]:checked').toArray().map(function(check) { 
                return $(check).val(); 
            });

            empresa = $('input[name="idEmpresa"]').val();

             $.ajax({
                type:'POST',
                url:'/Augustus/public/forneca-informacoes',
                data: {"_token": $('meta[name="csrf-token"]').attr('content'),respostasPage1,respostasPage2,respostasPage3,respostasPage4,
                        empresa},
                success:function(data){
                    sessionStorage.setItem("reloading", "true");    
                    window.location.reload(true);
                    
                }
            });
            
        }
    }
    
    
    



});