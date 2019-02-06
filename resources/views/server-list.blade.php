@extends('layouts.app')
@section('content')
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Servers</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>Lista de Servidores</h2>
                    <p>Busque por algum campo para filtrar correspondentes. Apenas m server estará ativo.</p>  
                    
                    <a href="{{route('dracula.server.getcreate')}}" class="btn btn-success">Add</a>
                    <a href="{{route('home')}}" class="btn btn-primary">Cancelar</a>
                    
                    <br><br>
                    <input class="form-control" id="myInput" type="text" placeholder="Search..">
                    <br>
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Active</th>
                            <th>IP</th>
                            <th>Port</th>
                            <th>Created_at</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody id="myTable">
                            @foreach($servers as $server)
                            <tr>
                                <td>{{$server->id}}</td>
                                <td>{{$server->active}}</td>
                                <td>{{$server->ip}}</td>
                                <td>{{$server->port}}</td>
                                <td>{{$server->created_at}}</td>
                                <td>                                    
                                    <a href="{{route('dracula.server.get',[$server->id])}}" class="btn btn-primary">Edit</a>                                    
                                    <a href="{{route('home')}}" class="btn btn-primary">Index</a>
                                    <a href="{{route('dracula.server.del',[$server->id])}}" class="btn btn-danger">Excluir</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
@endsection
