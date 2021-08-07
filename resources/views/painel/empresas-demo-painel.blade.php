@extends('adminlte::page')
@section('content')
    <section>
            Abaixo temos todas as oportunidades geradas para esta empresa.<br>
            Marque quais oportunidades aparecerão para essa empresa no modo demo:<br><br><br>
            Oportunidades:<br><br>
        <form action="{{route('demo-empresas-painel')}}" method="POST">
            @csrf
            <?php $aux = 0;?>
            @foreach ($relatorios as $relatorio)
                @foreach ($relatorio as $item)
                    <input type="checkbox" name="demo-{{$aux}}" value="{{key($relatorios)}},{{$item->id}}"> {{$item->post_title}} - {{$item->post_excerpt}}
                    <hr>
                    <?php $aux++; ?>
                @endforeach
            @endforeach
            <input type="submit" class="proxima" value="Ativar">
        </form>
    </section>
@endsection
@section('css')						
    <link rel="stylesheet" type="text/css" href="{{asset('/css/painel.css')}}"/>
@endsection
