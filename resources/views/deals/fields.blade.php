<!-- Title Field -->
<div class="form-group">
    {{ Form::label('title', 'Title:') }}
    {{ Form::text('title', null, ['class' => 'form-control']) }}
</div>

<!-- Description Field -->
<div class="form-group">
    {{ Form::label('description', 'Description:') }}
    {{ Form::textarea('description', null, ['class' => 'form-control']) }}
</div>

<!-- Price Old Field -->
<div class="form-group">
    {{ Form::label('price_old', 'Price Old:') }}
    {{ Form::number('price_old', null, ['class' => 'form-control']) }}
</div>

<!-- Price Field -->
<div class="form-group">
    {{ Form::label('price', 'Price:') }}
    {{ Form::number('price', null, ['class' => 'form-control']) }}
</div>

<!-- Url Field -->
<div class="form-group">
    {{ Form::label('url', 'Url:') }}
    {{ Form::text('url', null, ['class' => 'form-control']) }}
</div>

<!-- Store Id Field -->
<div class="form-group">
    {{ Form::label('store_id', 'Store Id:') }}
    {{ Form::select('store_id', $stores, null, ['class' => 'form-control']) }}
</div>

<!-- Submit Field -->
<div class="form-group">
    {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
    <a href="{{ route('deals.index') }}" class="btn btn-default">Cancel</a>
</div>
