$(document).ready(function(){
    //DROP DE TALAS LATERAIS
    abaNome = $('input[name="aba-nome"]').val();
    empresa = $('input[name="idEmpresa"]').val();
    cont = $('input[name="cont"]').val();

    //selecionas as abas
    let drop1 = document.querySelector('.menu-1');
    let drop2 = document.querySelector('.menu-2');
    let drop3 = document.querySelector('.menu-3');
    let drop4 = document.querySelector('.menu-4');
    let drop5 = document.querySelector('.menu-5');
    let drop6 = document.querySelector('.menu-6');
    let drop7 = document.querySelector('.menu-7');

    //esconde as abas
    if(abaNome == 'tributacao'){
        $(drop2).css('display', 'block');

        $(drop1).css('display', 'none');
        $(drop3).css('display', 'none');
        $(drop4).css('display', 'none');
        $(drop5).css('display', 'none');
        $(drop6).css('display', 'none');
        $(drop7).css('display', 'none');
    }




        //RAMO DE ATUAÇÃO
    let ramo1 = document.querySelector('#tributacao-tela-1');
    let ramo2 = document.querySelector('#tributacao-tela-2');
    let ramoFinal = document.querySelector('#tributacao-tela-final');

    if(abaNome == 'tributacao'){
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
               $div.css('background-color', '#F9F9F9');
               $div.css('color', '#89879E');
           }
       });

    selected1Tela1 ='';
    selected2Tela1 ='';
    selected1Tela2 ='';
    selected2Tela2 ='';
    selected3Tela2 ='';
    //INPUT RADIO DA TELA 1
    $('#radio1-tela1 input:radio').change(function() {
        $('#radio1-tela1 input:radio:checked').not(this).prop('checked', false);
        selected1Tela1 = $("#radio1-tela1 input:radio:checked").val();
      });
    $('#radio2-tela1 input:radio').change(function() {
        $('#radio2-tela1 input:radio:checked').not(this).prop('checked', false);
        selected2Tela1 = $("#radio2-tela1 input:radio:checked").val();
    });
    
    //INPUT RADIO DA TELA 2
    $('#radio1-tela2 input:radio').change(function() {
        $('#radio1-tela2 input:radio:checked').not(this).prop('checked', false);
        selected1Tela2 = $("#radio1-tela2 input:radio:checked").val();
      });
    $('#radio2-tela2 input:radio').change(function() {
        $('#radio2-tela2 input:radio').not(this).prop('checked', false);
        selected2Tela2 = $("#radio2-tela2 input:radio:checked").val();
    });
    $('#radio3-tela2 input:radio').change(function() {
        $('#radio3-tela2 input:radio').not(this).prop('checked', false);
        selected3Tela2 = $("#radio3-tela2 input:radio:checked").val();
    });


    $('.next-tributacao-1').click(function (){
        salvaInfo(ramo1);
        nextRamo(ramo2);
        
    });

    $('.next-tributacao-2').click(function (){
        salvaInfo(ramo2);
        nextRamo(ramoFinal);
        
    });
    $('.previous-tributacao-2').click(function (){
        previousRamo(ramo1);
        
    });  

    $('.next-tributacao-final').click(function (){
        window.location.href= '/Augustus/public/forneca-informacoes/numero-de-funcionarios?id='+empresa+'&cont='+cont;
    });
    $('.previous-tributacao-final').click(function (){
        previousRamo(ramo2);
        
    });  



    function nextRamo(ramo){
        if(ramo == ramo2){
            $(ramo1).css('display', 'none');
            $(ramo2).css('display', 'block');
        } else{
            $(ramo2).css('display', 'none');
            $('.menu-2').css('min-height', '741');
            $('.fundo').css('min-height', '760');
            $('.next-tributacao-final').css('top', '685');
            $(ramoFinal).css('display', 'block');
        }
    }  

    function previousRamo(ramo){
        if(ramo == ramo1){
            $(ramo2).css('display', 'none');
            $(ramoFinal).css('display', 'none');
            $(ramo1).css('display', 'block');
        } else if(ramo == ramo2) {
            $(ramoFinal).css('display', 'none');
            $('.menu-2').css('min-height', '611');
            $('.fundo').css('min-height', '650');
            $('.next-tributacao-final').css('top', '529');
            $(ramo2).css('display', 'block');
        }
    }  


     //Salva as informações entre as telas
     respostas1Page1 = '';
     respostas2Page1 = '';
     respostas3Page1 = '';
     respostas4Page1 = '';
     respostas1Page2 = '';
     respostas2Page2 = '';
     respostas3Page2 = '';
     function salvaInfo(ramo){
        if(ramo == ramo1){
            respostas1Page1 = $("#regime option:selected").val();

            respostas2Page1 = $("#5anos option:selected").val();

            if(selected1Tela1 !=''){
                respostas3Page1 = selected1Tela1;
            }else {
                respostas3Page1 ='';
            }

            if(selected2Tela1 != ''){
                respostas4Page1= selected2Tela1;
            }else{
                respostas4Page1 ='';
            }
            
        } else if(ramo == ramo2){
            if(selected1Tela2 != ''){
                respostas1Page2= selected1Tela2;
            }else{
                respostas1Page2 ='';
            }

            if(selected2Tela2 != ''){
                respostas2Page2= selected2Tela2;
            }else{
                respostas2Page2 ='';
            }

            if(selected3Tela2 != ''){
                respostas3Page2= selected3Tela2;
            }else{
                respostas3Page2 ='';
            }


            $.ajax({
            type:'POST',
            url:'/Augustus/public/forneca-informacoes/tributacao',
            data: {"_token": $('meta[name="csrf-token"]').attr('content'),respostas1Page1,respostas2Page1,
                respostas3Page1,respostas4Page1,respostas1Page2,respostas2Page2,respostas3Page2},
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