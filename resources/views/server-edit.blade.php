@extends('layouts.app')
@section('content')
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Server Edit</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>Edição</h2>

                    <form action="{{route('dracula.server.put',$server->id)}}" method="post">
                    @method('PUT')

                        <div class="form-group row">
                            <label class="col-2 col-form-label">Status</label>
                            <div class="col-10">
                                <select class="form-control" name="status">
                                    @if($server->active==1)
                                        <option value="1" selected>Ativo</option>
                                        <option value="0">Inativo</option>
                                    @else
                                        <option value="1">Ativo</option>
                                        <option value="0" selected>Inativo</option>
                                    @endif
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-2 col-form-label">IP</label>
                            <div class="col-10">
                                <input class="form-control" type="text" value="{{$server->ip}}" name="IP">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-2 col-form-label">PORT</label>
                            <div class="col-10">
                                <input class="form-control" type="text" value="{{$server->port}}" name="PORT">
                            </div>
                        </div>

                        <div class="form-group row"><div class="col-10">
                            <input type="submit" value="Salvar" class="btn btn-success">
                            <a href="{{route('dracula.server.list')}}" class="btn btn-primary">Voltar</a>
                        </div></div>

                    @csrf
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
