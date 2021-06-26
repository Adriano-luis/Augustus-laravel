$(document).ready(function(){

    var qt = $('#quantidade').val();
    Num = parseInt(qt,10);
    relatorio= new Array();
    for(i=0;i<Num;i++){
        relatorio[i] = document.querySelector('.indice-'+i);
        if(relatorio[i] == relatorio[0]){
            $('.indice-'+i).css('display', 'block');
        }else{
            $('.indice-'+i).css('display', 'none');
        }

    }

    titulo = document.querySelectorAll('.titulo-ralatorio');
        
    titulo.forEach(teste);

    function teste(titulo,i){
        titulo.addEventListener('click',function(e){
            for(k=0;k<Num;k++){
                $('.indice-'+k).css('display', 'none');
            }
            $(relatorio[i]).css('display', 'block');
            
        });
    }
           


    $('#resumo-tab').on('click',function(){
        setInterval(function(){
            var altura = $('.relatorio').height();
            var alturaTot = $('.lista-oportunidades').height();
            altura = altura + 150;
            console.log(altura);
            if(altura < alturaTot){
                $('.lista-oportunidades').css('height', alturaTot+'px');
            }else{
                $('.lista-oportunidades').css('height', altura+'px');
            }
            
        }, 500);
    });
    $('#entendendo-tab').on('click',function(){
          setInterval(function(){
                var altura = $('.relatorio').height();
                var alturaTot = $('.lista-oportunidades').height();
                altura = altura + 150;
                console.log(altura);
                if(altura < alturaTot){
                    $('.lista-oportunidades').css('height', alturaTot+'px');
                }else{
                    $('.lista-oportunidades').css('height', altura+'px');
                }
            }, 500);
       
    });
    $('#posicao-tab').on('click',function(){
        setInterval(function(){
                var altura = $('.relatorio').height();
                var alturaTot = $('.lista-oportunidades').height();
                altura = altura + 150;
                console.log(altura);
                if(altura < alturaTot){
                    $('.lista-oportunidades').css('height', alturaTot+'px');
                }else{
                    $('.lista-oportunidades').css('height', altura+'px');
                }
        }, 500);
    });
    $('#estimativas-tab').on('click',function(){
        setInterval(function(){
            var altura = $('.relatorio').height();
            var alturaTot = $('.lista-oportunidades').height();
            altura = altura + 150;
            console.log(altura);
            if(altura < alturaTot){
                $('.lista-oportunidades').css('height', alturaTot+'px');
            }else{
                $('.lista-oportunidades').css('height', altura+'px');
            }
        }, 500);
    });
    $('#aproveitamento-tab').on('click',function(){
        setInterval(function(){
            var altura = $('.relatorio').height();
            var alturaTot = $('.lista-oportunidades').height();
            altura = altura + 150;
            console.log(altura);
            if(altura < alturaTot){
                $('.lista-oportunidades').css('height', alturaTot+'px');
            }else{
                $('.lista-oportunidades').css('height', altura+'px');
            }
        }, 500);
    });
    

    $('.titulo-ralatorio').click(function () {
        $('.lista-oportunidades').find('div').removeClass('active');
        $(this).addClass('active');
    });




    //Salva status
    $('#status-oportunidade input:radio').change(function() {
        status = $("#status-oportunidade input:radio:checked").val();
        relatorio_id = $('#relatorio-id').val();
        empresa_id = $('#empresa-id').val();

        $.ajax({
            type:'POST',
            url:'/Augustus/public/oportunidades',
            data: {"_token": $('meta[name="csrf-token"]').attr('content'),status,relatorio_id,empresa_id},
            success:function(data){   
                $(".radio-classi"+status).checked = true;
            }
        });
    });

});