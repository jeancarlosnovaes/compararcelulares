<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $advertisement->id !!}</p>
</div>

<!-- Platform Field -->
<div class="form-group">
    {!! Form::label('platform', 'Platform:') !!}
    <p>{!! $advertisement->platform !!}</p>
</div>

<!-- Code Field -->
<div class="form-group">
    {!! Form::label('code', 'Code:') !!}
    <p>{!! $advertisement->code !!}</p>
</div>

<!-- Type Field -->
<div class="form-group">
    {!! Form::label('type', 'Type:') !!}
    <p>{!! $advertisement->type !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $advertisement->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $advertisement->updated_at !!}</p>
</div>

