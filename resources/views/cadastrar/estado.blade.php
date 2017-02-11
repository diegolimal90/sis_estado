@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Lista de Estado
                        <a class="pull-right" href="{{url ('/estado/novo')}}" > Novo</a>
                    </div>

                    <div class="panel-body">
                        <table class="table">
                            <th>#</th>
                            <th>Estado</th>
                            <th>Sigla</th>
                            <th>Historico</th>
                            <th>Ações</th>
                            <tbody>
                            @foreach( $estado as $estados )
                                <tr>
                                    <td>{{ $estados->id }}</td>
                                    <td>{{ $estados->nm_estado }}</td>
                                    <td>{{ $estados->sigla }}</td>
                                    <td>{{ $estados->historico }}</td>
                                    <td>
                                        <a href="{{ $estados->id }}/editar" class="btn btn-default btn-sm">Editar</a>
                                        <button class="btn btn-default btn-sm">Excluir</button>
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
@endsection