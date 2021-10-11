@extends('layout.app')

@section('content')
    
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>BLOG - CRIAR POST</h2>
                <p>Criação de post para o Blog.</p>
            </div>

            <div class="row">
                
                {!! Form::open(['method'=>'POST', 'action'=>'PostController@store', 'enctype'=>'multipart/form-data', 'class'=>'form-horizontal']) !!}

                    <div class="form-group row">
                        {!! Form::label('data_solicitada', 'Data do ocorrido *', ['class'=>'col-sm-4 col-form-label text-md-right']) !!}
                        <div class="col-md-3">
                            {!! Form::date('data', null, ['class'=>'form-control', 'required']) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        {!! Form::label('descricao', 'Descrição *', ['class'=>'col-sm-4 col-form-label text-md-right']) !!}
                        <div class="col-md-6">
                            <textarea rows="6" class="form-control" name="descricao"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        {!! Form::label('anonimo', 'Assinar *', ['class'=>'col-sm-4 col-form-label text-md-right']) !!}
                        <div class="col-md-4">
                            <input type="radio" name="anonimo" value="1" required> SIM
                            <br>
                            <input type="radio" name="anonimo" value="0" required> NÃO
                        </div>
                    </div>

                    <div class="form-group row">
                        {!! Form::label('', 'Fotos', ['class'=>'col-sm-4 col-form-label text-md-right']) !!}
                        <b>&nbsp</b>
                        <div class="col-md-6">
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">1</span>
                                </div>
                                <input type="file" name="foto1" class="form-control">
                            </div>
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">2</span>
                                </div>
                                <input type="file" name="foto2" class="form-control">
                            </div>
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">3</span>
                                </div>
                                <input type="file" name="foto3" class="form-control">
                            </div>
                        </div>
                    </div>

                    <p style="text-align:center">(*) Campos obrigatórios</p>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            {!! Form::submit('Registrar', ['class'=>'btn btn-dark btn-sm']) !!}
                        </div>
                    </div>
                {!! Form::close() !!}


            </div>

        </div>
    </section>

@endsection