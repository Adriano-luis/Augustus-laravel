$(document).ready(function(){
    $('#radio1-forma input:radio').change(function() {
        $('input[type=radio]:checked').not(this).prop('checked', false);
        selected1 = $("#radio1-forma input:radio:checked").val();
    });

    $('#radio2-probabilidade input:radio').change(function() {
        $('input[type=radio]:checked').not(this).prop('checked', false);
        selected2 = $("#radio2-probabilidade input:radio:checked").val();
    });

    $('#radio3-tributacao input:radio').change(function() {
        $('input[type=radio]:checked').not(this).prop('checked', false);
        selected3 = $("#radio3-tributacao input:radio:checked").val();
    });



    $('#enviarRelatorio').click(function (){
        id =            $("[name=id]").val();
        titulo =        $("[name=titulo]").val();
        subtitulo =     $("[name=subtitulo]").val();
        forma =         $("#radio1-forma input:radio:checked").val();
        probabilidade = $("#radio2-probabilidade input:radio:checked").val();
        tributacao =    $("#radio3-tributacao input:radio:checked").val();
        resumo =        $("[name=resumo]").val();
        entendendo =    $("[name=entendendo]").val();
        posicao =       $("[name=posicao]").val();
        ganho =         $("[name=ganho]").val();


        $.ajax({
            type:'POST',
            url:'/Augustus/public/painel/incluir-relatorio',
            data: {"_token": $('meta[name="csrf-token"]').attr('content'),id,titulo,subtitulo,forma,probabilidade,
                  tributacao,resumo,entendendo,posicao,ganho},
            success:function(data){
                window.location.url('/Augustus/public/painel/ver-relatorio');
                
            }
        });
    });
});