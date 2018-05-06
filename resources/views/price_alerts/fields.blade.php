<!-- Product Name Field -->
<div class="form-group">
    {{ Form::label('product_name', 'Product Name:') }}
    {{ Form::text('product_name', null, ['class' => 'form-control']) }}
</div>

<!-- Email Field -->
<div class="form-group">
    {{ Form::label('email', 'Email:') }}
    {{ Form::email('email', null, ['class' => 'form-control']) }}
</div>

<!-- Activated At Field -->
<div class="form-group">
    {{ Form::label('activated_at', 'Activated At:') }}
    {{ Form::date('activated_at', null, ['class' => 'form-control']) }}
</div>

<!-- Submit Field -->
<div class="form-group">
    {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
    <a href="{{ route('priceAlerts.index') }}" class="btn btn-default">Cancel</a>
</div>
