@extends('template-contact')

@section('content')
    <br>
    <div class="col-sm-offset-3 col-sm-6">
        <div class="panel panel-info">
            <div class="panel-heading">Contactez-nous</div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="panel-body">
                {!! Form::open(['url' => 'contact']) !!}
                <div class="form-group @error('name') has-error @enderror">
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Your name']) !!}
                    {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
                </div>
                <div class="form-group {!! $errors->has('mail') ? 'has-error' : '' !!}">
                    {!! Form::email('mail', null, ['class' => 'form-control', 'placeholder' => 'Your mail']) !!}
                    {!! $errors->first('mail', '<small class="help-block">:message</small>') !!}
                </div>
                <div class="form-group {!! $errors->has('text') ? 'has-error' : '' !!}">
                    {!! Form::textarea ('text', null, ['class' => 'form-control', 'placeholder' => 'Your message']) !!}
                    {!! $errors->first('text', '<small class="help-block">:message</small>') !!}
                </div>
                <div class="form-group {!! $errors->has('tos') ? 'has-error' : '' !!}">
                    Accept Terms of Service
                    {!! Form::checkbox ('tos', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('tos', '<small class="help-block">:message</small>') !!}
                </div>
                {!! Form::submit('Send !', ['class' => 'btn btn-info pull-right']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
