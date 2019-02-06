@extends('layouts.app')
@section('content')
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Server reate</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>Criar Conexão</h2>

                    <form action="{{route('dracula.server.postcreate')}}" method="post">
                   
                        <div class="form-group row">
                            <label class="col-2 col-form-label">Status</label>
                            <div class="col-10">
                                <select class="form-control" name="status">
                                    <option value="1">Ativo</option>
                                    <option value="0" selected>Inativo</option>                                   
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-2 col-form-label">IP</label>
                            <div class="col-10">
                                <input class="form-control" type="text" value="{{old('IP')}}" name="IP">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-2 col-form-label">PORT</label>
                            <div class="col-10">
                                <input class="form-control" type="text" value="{{old('PORT')}}" name="PORT">
                            </div>
                        </div>

                        <div class="form-group row"><div class="col-10">
                            <input type="submit" value="Salvar" class="btn btn-success">
                            <a href="{{route('home')}}" class="btn btn-primary">Voltar</a>
                        </div></div>

                    @csrf
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
