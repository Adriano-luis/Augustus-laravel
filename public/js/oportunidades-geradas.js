$(document).ready(function(){

    var qt = $('#quantidade').val();
    Num = parseInt(qt,10);


    $('#resumo-tab').on('click',function(){
        setInterval(function(){
            var altura = $('.relatorio').height();
            altura = altura + 150;
            console.log(altura);
    
            $('.lista-oportunidades').css('height', altura+'px');
        }, 500);
    });
    $('#entendendo-tab').on('click',function(){
          setInterval(function(){
                var altura = $('.relatorio').height();
                altura = altura + 150;
                console.log(altura);
        
                $('.lista-oportunidades').css('height', altura+'px');
            }, 500);
       
    });
    $('#posicao-tab').on('click',function(){
        setInterval(function(){
            var altura = $('.relatorio').height();
            altura = altura + 150;
            console.log(altura);
    
            $('.lista-oportunidades').css('height', altura+'px');
        }, 500);
    });
    $('#estimativas-tab').on('click',function(){
        setInterval(function(){
            var altura = $('.relatorio').height();
            altura = altura + 150;
            console.log(altura);
    
            $('.lista-oportunidades').css('height', altura+'px');
        }, 500);
    });
    $('#aproveitamento-tab').on('click',function(){
        setInterval(function(){
            var altura = $('.relatorio').height();
            altura = altura + 150;
            console.log(altura);
    
            $('.lista-oportunidades').css('height', altura+'px');
        }, 500);
    });

});