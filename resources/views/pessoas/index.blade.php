@extends('template.app')

@section('content')
    <div class="all row m12 x12 xl12">
        @foreach($pessoas as $pessoa)
            <div class="row m3 x3 xl3">
                <div class="card col m3 x12 xl3">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator img-responsive" src="imagens/office.jpg">
                    </div>
                    <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">{{$pessoa->nome}}<i class="material-icons
                    right">more_vert</i></span>
                        <p><a href="#">Mais Detalhes</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">{{$pessoa->nome}}<i
                                    class="material-icons right">close</i></span>
{{--                        @foreach($pessoas->telefones as $telefone)--}}
                            <p><strong>Contacto :</strong> {{$pessoa}}</p>
                        {{--@endforeach--}}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

<style>
    .all {

    }
</style>