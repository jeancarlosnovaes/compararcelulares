<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $store->id !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $store->name !!}</p>
</div>

<!-- Logo Field -->
<div class="form-group">
    {!! Form::label('logo', 'Logo:') !!}
    <p>{!! $store->logo !!}</p>
</div>

<!-- Url Field -->
<div class="form-group">
    {!! Form::label('url', 'Url:') !!}
    <p>{!! $store->url !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $store->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $store->updated_at !!}</p>
</div>

