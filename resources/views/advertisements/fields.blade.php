<!-- Platform Field -->
<div class="form-group">
    {{ Form::label('platform', 'Platform:') }}
    {{ Form::select('platform', ['AdSense' => 'AdSense', 'Criteo' => 'Criteo', 'Taboola' => 'Taboola', 'Outbrain' => 'Outbrain', 'Custom' => 'Custom'], null, ['class' => 'form-control']) }}
</div>

<!-- Code Field -->
<div class="form-group">
    {{ Form::label('code', 'Code:') }}
    {{ Form::textarea('code', null, ['class' => 'form-control']) }}
</div>

<!-- Type Field -->
<div class="form-group">
    {{ Form::label('type', 'Type:') }}
    {{ Form::select('type', ['300x250' => '300x250', '336x280' => '336x280', '728x90' => '728x90', '300x600' => '300x600', '970x90' => '970x90', '468x60' => '468x60', '120x600' => '120x600', '160x600' => '160x600', '250x250' => '250x250', '200x200' => '200x200'], null, ['class' => 'form-control']) }}
</div>

<!-- Submit Field -->
<div class="form-group">
    {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
    <a href="{{ route('advertisements.index') }}" class="btn btn-default">Cancel</a>
</div>
