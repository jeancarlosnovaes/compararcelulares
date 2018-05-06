<!-- Name Field -->
<div class="form-group">
    {{ Form::label('name', 'Name:') }}
    {{ Form::text('name', null, ['class' => 'form-control']) }}
</div>

<!-- Description Field -->
<div class="form-group">
    {{ Form::label('description', 'Description:') }}
    {{ Form::textarea('description', null, ['class' => 'form-control']) }}
</div>

<!-- Logo Field -->
<div class="form-group">
    {{ Form::label('logo', 'Logo:') }}
    {{ Form::file('logo') }}
</div>
<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group">
    {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
    <a href="{{ route('brands.index') }}" class="btn btn-default">Cancel</a>
</div>
