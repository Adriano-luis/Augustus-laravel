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
    if(abaNome == 'outros'){
        $(drop7).css('display', 'block');

        $(drop1).css('display', 'none');
        $(drop2).css('display', 'none');
        $(drop3).css('display', 'none');
        $(drop4).css('display', 'none');
        $(drop5).css('display', 'none');
        $(drop6).css('display', 'none');
    }


    //outros 
    let ramo1 = document.querySelector('#outros-tela-1');
    let ramo2 = document.querySelector('#outros-tela-2');
    let ramo3 = document.querySelector('#outros-tela-3');
    let ramoFinal = document.querySelector('#outros-tela-final');

    if(abaNome == 'outros'){
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


    selected1Tela1 ='';
    selected2Tela1 = '';

    selected1Tela2 = '';
    selected2Tela2 = '';
    selected3Tela2 ='';

    selected1Tela3 = '';
    selected2Tela3 = '';
    selected3Tela3 = '';
    //INPUT RADIO DA TELA 1
    $('#radio1-tela1 input:radio').change(function() {
        $('input[type=radio]:checked').not(this).prop('checked', false);
        selected1Tela1 = $("#radio1-tela1 input:radio:checked").val();
    });
    $('#radio2-tela1 input:radio').change(function() {
        $('input[type=radio]:checked').not(this).prop('checked', false);
        selected2Tela1 = $("#radio2-tela1 input:radio:checked").val();
    });

    //INPUT RADIO DA TELA 2
    $('#radio1-tela2 input:radio').change(function() {
        $('input[type=radio]:checked').not(this).prop('checked', false);
        selected1Tela2 = $("#radio1-tela2 input:radio:checked").val();
    });
    $('#radio2-tela2 input:radio').change(function() {
        $('input[type=radio]:checked').not(this).prop('checked', false);
        selected2Tela2 = $("#radio2-tela2 input:radio:checked").val();
    });
    $('#radio3-tela2 input:radio').change(function() {
        $('input[type=radio]:checked').not(this).prop('checked', false);
        selected3Tela2 = $("#radio3-tela2 input:radio:checked").val();
    });

     //INPUT RADIO DA TELA 3
     $('#radio1-tela3 input:radio').change(function() {
        $('input[type=radio]:checked').not(this).prop('checked', false);
        selected1Tela3 = $("#radio1-tela3 input:radio:checked").val();
    });
    $('#radio2-tela3 input:radio').change(function() {
        $('input[type=radio]:checked').not(this).prop('checked', false);
        selected2Tela3 = $("#radio2-tela3 input:radio:checked").val();
    });
    $('#radio3-tela3 input:radio').change(function() {
        $('input[type=radio]:checked').not(this).prop('checked', false);
        selected3Tela3 = $("#radio3-tela3 input:radio:checked").val();
    });



    $('.next-outros-1').click(function (){
        salvaInfo(ramo1);
        nextRamo(ramo2);
        
    });


    $('.next-outros-2').click(function (){
        salvaInfo(ramo2);
        nextRamo(ramo3);
        
    });
    $('.previous-outros-2').click(function (){
        previousRamo(ramo1);
        
    });  


    $('.next-outros-3').click(function (){
        salvaInfo(ramo3);
        nextRamo(ramoFinal);
        
    });
    $('.previous-outros-3').click(function (){
        previousRamo(ramo2);
        
    });


    $('.next-outros-final').click(function (){
        empresa = $('input[name="idEmpresa"]').val();
        cont = $('input[name="cont"]').val();
        window.location.href= '/Augustus/public/';
    });
    $('.previous-outros-final').click(function (){
        previousRamo(ramo3);
        
    });  



   function nextRamo(ramo){
        if(ramo == ramo2){
            $(ramo1).css('display', 'none');
            $(ramo2).css('display', 'block');
        } else if(ramo == ramo3){
            $(ramo2).css('display', 'none');
            $(ramo3).css('display', 'block');
        } else{
            $(ramo3).css('display', 'none');
            $('.menu-7').css('min-height', '1025');
            $('.fundo').css('min-height', '1070');
            $('.next-outros-final').css('top', '962');
            $(ramoFinal).css('display', 'block');
        }
    }  

    function previousRamo(ramo){
        if(ramo == ramo1){
            $(ramo2).css('display', 'none');
            $(ramoFinal).css('display', 'none');
            $(ramo1).css('display', 'block');
        } else if(ramo == ramo2){
            $(ramo3).css('display', 'none');
            $(ramoFinal).css('display', 'none');
            $(ramo2).css('display', 'block');
        } else {
            $(ramoFinal).css('display', 'none');
            $('.menu-7').css('min-height', '611');
            $('.fundo').css('min-height', '650');
            $('.next-outros-final').css('top', '529');
            $(ramo3).css('display', 'block');
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
    respostas4Page2 = '';
    respostas1Page3 = '';
    respostas2Page3 = '';
    respostas3Page3 = '';
    function salvaInfo(ramo){
        if(ramo == ramo1){
            if(selected1Tela1 !=''){
                respostas1Page1 = selected1Tela1;
            }else {
                respostas1Page1 ='';
            }
            if(selected2Tela1 !=''){
                respostas2Page1 = selected2Tela1;
            }else {
                respostas2Page1 ='';
            }

            respostas3Page1 = $("#descontos option:selected").val();
            respostas4Page1 = $("#bonificacoes option:selected").val();

        } else if(ramo == ramo2){
            if(selected1Tela2 !=''){
                respostas1Page2 = selected1Tela2;
            }else {
                respostas1Page2 ='';
            }
            if(selected2Tela2 !=''){
                respostas2Page2 = selected2Tela2;
            }else {
                respostas2Page2 ='';
            }
            if(selected3Tela2 !=''){
                respostas3Page2 = selected3Tela2;
            }else {
                respostas3Page2 ='';
            }

            respostas4Page2 = $("#filiais option:selected").val();

        } else if(ramo == ramo3) {
            if(selected1Tela3 !=''){
                respostas1Page3 = selected1Tela3;
            }else {
                respostas1Page3 ='';
            }
            if(selected2Tela3 !=''){
                respostas2Page3 = selected2Tela3;
            }else {
                respostas2Page3 ='';
            }
            if(selected3Tela3 !=''){
                respostas3Page3 = selected3Tela3;
            }else {
                respostas3Page3 ='';
            }
            
             $.ajax({
                type:'POST',
                url:'/Augustus/public/forneca-informacoes/outros',
                data: {"_token": $('meta[name="csrf-token"]').attr('content'),respostas1Page1,respostas2Page1,
                        respostas3Page1,respostas4Page1,respostas1Page2,respostas2Page2,respostas3Page2,
                        respostas4Page2,respostas1Page3,respostas2Page3,respostas3Page3},
                success:function(data){
                    window.sessionStorage.setItem("reloading", "true");
                    window.location.reload(true);
                    
                }
            });
            
        }
    }
    
});