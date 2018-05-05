<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $brand->id !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $brand->name !!}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{!! $brand->description !!}</p>
</div>

<!-- Logo Field -->
<div class="form-group">
    {!! Form::label('logo', 'Logo:') !!}
    <p>{!! $brand->logo !!}</p>
</div>

<!-- Count Field -->
<div class="form-group">
    {!! Form::label('count', 'Count:') !!}
    <p>{!! $brand->count !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $brand->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $brand->updated_at !!}</p>
</div>

