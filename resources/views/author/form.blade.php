<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $author->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('description') }}
            {{ Form::text('description', $author->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('state') }}
            {{ Form::text('state', $author->state, ['class' => 'form-control' . ($errors->has('state') ? ' is-invalid' : ''), 'placeholder' => 'State']) }}
            {!! $errors->first('state', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('register_date') }}
            {{ Form::text('register_date', $author->register_date, ['class' => 'form-control' . ($errors->has('register_date') ? ' is-invalid' : ''), 'placeholder' => 'Register Date']) }}
            {!! $errors->first('register_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('finished_date') }}
            {{ Form::text('finished_date', $author->finished_date, ['class' => 'form-control' . ($errors->has('finished_date') ? ' is-invalid' : ''), 'placeholder' => 'Finished Date']) }}
            {!! $errors->first('finished_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('change_date') }}
            {{ Form::text('change_date', $author->change_date, ['class' => 'form-control' . ($errors->has('change_date') ? ' is-invalid' : ''), 'placeholder' => 'Change Date']) }}
            {!! $errors->first('change_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>