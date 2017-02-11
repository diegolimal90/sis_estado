@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Cadastrar Estado
                        <a class="pull-right" href="{{url ('/estado/listar')}}" > Listagem de Estados</a>
                    </div>

                    <div class="panel-body">
                        @if(Session::has('msg_sucesso'))
                            <div class="alert alert-success">{{ Session::get('msg_sucesso') }}</div>
                        @endif
                        @if(Request::is('*/editar'))
                            {{ Form::model($estado, ['method' => 'PATCH','url' => 'estado/'.$estado->id]) }}
                        @else
                            {{Form::open(['url' => 'estado/salvar'])}}
                        @endif
                        <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12" style="margin-bottom: 15px">
                                    {{Form::label('nm_estado','Nome do Estado')}}
                                    {{Form::input('text', 'nm_estado',null,['class' => 'form-control col-md-7 col-xs-12', 'auto-focus', 'placeholder' => 'Nome'])}}
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12" style="margin-bottom: 15px">
                                    {{Form::label('sigla','Sigla do Estado')}}
                                    {{Form::input('text','sigla',null,['class' => 'form-control col-md-7 col-xs-12', 'placeholder' => 'sigla'])}}
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 15px">
                                    {{Form::label('historico','historico do Estado')}}
                                    {{Form::input('text','historico',null,['class' => 'form-control col-md-7 col-xs-12', 'placeholder' => 'Historico'])}}
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12" style="margin-bottom: 15px">
                                    {{Form::submit('Salvar',['class' => 'btn btn-primary'])}}
                                    {{Form::reset('Limpar',['class' => 'btn btn-danger'])}}
                                </div>
                            {{Form::close()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection