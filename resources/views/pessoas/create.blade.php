@extends('template.app')

@section('content')
    <div class="col x12 m12 xl12">
        <h5 class="subheader">Novo</h5>
    </div>

    <div class="col m6 xl12 x12">
        <form method="post" action="{{url('/pessoas/store')}}">
            {{csrf_field()}}
            <div class="form-group col m12">
                <label class="label">
                    Nome:
                    <input type="text" name="nome" placeholder="Nome" class="form-control">
                </label>
            </div>
            <div class="form-group col m12">
                <label class="label">
                    DDD:
                    <input type="text" name="ddd" placeholder="ddd" class="form-control">
                </label>
            </div>
            <div class="form-group col m12">
                <label class="label">
                    Telefone:
                    <input type="text" name="telefone" placeholder="Telefone" class="form-control">
                </label>
            </div>
            <button type="submit" class="btn">Salvar</button>
        </form>
    </div>
@endsection