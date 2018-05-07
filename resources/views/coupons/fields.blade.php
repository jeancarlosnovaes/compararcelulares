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

<!-- Image Field -->
<div class="form-group">
    {{ Form::label('image', 'Image:') }}
    {{ Form::file('image') }}
</div>
<div class="clearfix"></div>

<!-- Url Field -->
<div class="form-group">
    {{ Form::label('url', 'Url:') }}
    {{ Form::text('url', null, ['class' => 'form-control']) }}
</div>

<!-- Code Field -->
<div class="form-group">
    {{ Form::label('code', 'Code:') }}
    {{ Form::text('code', null, ['class' => 'form-control']) }}
</div>

<!-- Discount Field -->
<div class="form-group">
    {{ Form::label('discount', 'Discount:') }}
    {{ Form::text('discount', null, ['class' => 'form-control']) }}
</div>

<!-- Start Date Field -->
<div class="form-group">
    {{ Form::label('start_date', 'Start Date:') }}
    {{ Form::date('start_date', null, ['class' => 'form-control']) }}
</div>

<!-- End Date Field -->
<div class="form-group">
    {{ Form::label('end_date', 'End Date:') }}
    {{ Form::date('end_date', null, ['class' => 'form-control']) }}
</div>

<!-- Category Field -->
<div class="form-group">
    {{ Form::label('category', 'Category:') }}
    {{ Form::select('category', [ 'Cupom de Desconto', 'Link de Desconto' ], null, ['class' => 'form-control']) }}
</div>

<!-- Submit Field -->
<div class="form-group">
    {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
    <a href="{{ route('coupons.index') }}" class="btn btn-default">Cancel</a>
</div>
