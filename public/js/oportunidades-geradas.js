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
           
        var valor = document.querySelectorAll('.valor');
        valor.forEach(altura);

    function altura(a,valor){
        $('#resumo-'+valor+'-tab').on('click',function(){
            setInterval(function(){
                var altura = $('.indice-'+valor).height();
                var alturaTot = $('.lista-oportunidades').height();
                altura = altura + 150;
                if(altura < alturaTot){
                    $('.lista-oportunidades').css('height', alturaTot+'px');
                }else{
                    $('.lista-oportunidades').css('height', altura+'px');
                }
                
            }, 500);
        });
        $('#entendendo-'+valor+'-tab').on('click',function(){
              setInterval(function(){
                    var altura = $('.indice-'+valor).height();
                    var alturaTot = $('.lista-oportunidades').height();
                    altura = altura + 150;
                    if(altura < alturaTot){
                        $('.lista-oportunidades').css('height', alturaTot+'px');
                    }else{
                        $('.lista-oportunidades').css('height', altura+'px');
                    }
                }, 500);
           
        });
        $('#posicao-'+valor+'-tab').on('click',function(){
            setInterval(function(){
                    var altura = $('.indice-'+valor).height();
                    var alturaTot = $('.lista-oportunidades').height();
                    altura = altura + 150;
                    if(altura < alturaTot){
                        $('.lista-oportunidades').css('height', alturaTot+'px');
                    }else{
                        $('.lista-oportunidades').css('height', altura+'px');
                    }
            }, 500);
        });
        $('#estimativas-'+valor+'-tab').on('click',function(){
            setInterval(function(){
                var altura = $('.indice-'+valor).height();
                var alturaTot = $('.lista-oportunidades').height();
                altura = altura + 150;
                if(altura < alturaTot){
                    $('.lista-oportunidades').css('height', alturaTot+'px');
                }else{
                    $('.lista-oportunidades').css('height', altura+'px');
                }
            }, 500);
        });
        $('#aproveitamento-'+valor+'-tab').on('click',function(){
            setInterval(function(){
                var altura = $('.indice-'+valor).height();
                var alturaTot = $('.lista-oportunidades').height();
                altura = altura + 150;
                if(altura < alturaTot){
                    $('.lista-oportunidades').css('height', alturaTot+'px');
                }else{
                    $('.lista-oportunidades').css('height', altura+'px');
                }
            }, 500);

            $('.ver-formas').on('click',function(){
                $('.indice-'+valor).css('display','none');
                $('.link-ver-page').css('display','block');
            });
            $('.voltar-aproveitamento').on('click',function(){
                $('.indice-'+valor).css('display','block');
                $('.link-ver-page').css('display','none');
            });
        });
    }
    
    

    $('.titulo-ralatorio').click(function () {
        $('.lista-oportunidades').find('div').removeClass('ativo');
        $(this).addClass('ativo');
    });




    //Salva status
    $('#salvaAlteracoes').click(function() {
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