<!-- When Bought Field -->
<div class="form-group col-sm-6">
    {!! Form::label('when_bought', 'When Bought:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('when_bought', false) !!}
        {!! Form::checkbox('when_bought', 'true', null) !!}
    </label>
</div>

<!-- Resistant Scratchs And Falling Field -->
<div class="form-group col-sm-6">
    {!! Form::label('resistant_scratchs_and_falling', 'Resistant Scratchs And Falling:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('resistant_scratchs_and_falling', false) !!}
        {!! Form::checkbox('resistant_scratchs_and_falling', 'true', null) !!}
    </label>
</div>

<!-- Is Beautiful Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_beautiful', 'Is Beautiful:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_beautiful', false) !!}
        {!! Form::checkbox('is_beautiful', 'true', null) !!}
    </label>
</div>

<!-- Comfortable Field -->
<div class="form-group col-sm-6">
    {!! Form::label('comfortable', 'Comfortable:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('comfortable', false) !!}
        {!! Form::checkbox('comfortable', 'true', null) !!}
    </label>
</div>

<!-- Good Vision In The Sun Field -->
<div class="form-group col-sm-6">
    {!! Form::label('good_vision_in_the_sun', 'Good Vision In The Sun:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('good_vision_in_the_sun', false) !!}
        {!! Form::checkbox('good_vision_in_the_sun', 'true', null) !!}
    </label>
</div>

<!-- Works Well In Daily Use Field -->
<div class="form-group col-sm-6">
    {!! Form::label('works_well_in_daily_use', 'Works Well In Daily Use:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('works_well_in_daily_use', false) !!}
        {!! Form::checkbox('works_well_in_daily_use', 'true', null) !!}
    </label>
</div>

<!-- Demanding Games Field -->
<div class="form-group col-sm-6">
    {!! Form::label('demanding_games', 'Demanding Games:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('demanding_games', false) !!}
        {!! Form::checkbox('demanding_games', 'true', null) !!}
    </label>
</div>

<!-- Good Sound Field -->
<div class="form-group col-sm-6">
    {!! Form::label('good_sound', 'Good Sound:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('good_sound', false) !!}
        {!! Form::checkbox('good_sound', 'true', null) !!}
    </label>
</div>

<!-- Daytime Photos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('daytime_photos', 'Daytime Photos:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('daytime_photos', false) !!}
        {!! Form::checkbox('daytime_photos', 'true', null) !!}
    </label>
</div>

<!-- Night Photos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('night_photos', 'Night Photos:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('night_photos', false) !!}
        {!! Form::checkbox('night_photos', 'true', null) !!}
    </label>
</div>

<!-- Quality Selfies Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quality_selfies', 'Quality Selfies:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('quality_selfies', false) !!}
        {!! Form::checkbox('quality_selfies', 'true', null) !!}
    </label>
</div>

<!-- Powerful Flash Field -->
<div class="form-group col-sm-6">
    {!! Form::label('powerful_flash', 'Powerful Flash:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('powerful_flash', false) !!}
        {!! Form::checkbox('powerful_flash', 'true', null) !!}
    </label>
</div>

<!-- Good Calls Field -->
<div class="form-group col-sm-6">
    {!! Form::label('good_calls', 'Good Calls:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('good_calls', false) !!}
        {!! Form::checkbox('good_calls', 'true', null) !!}
    </label>
</div>

<!-- Quality Gps Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quality_GPS', 'Quality Gps:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('quality_GPS', false) !!}
        {!! Form::checkbox('quality_GPS', 'true', null) !!}
    </label>
</div>

<!-- Quality Wifi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quality_WIFI', 'Quality Wifi:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('quality_WIFI', false) !!}
        {!! Form::checkbox('quality_WIFI', 'true', null) !!}
    </label>
</div>

<!-- Battery Life Field -->
<div class="form-group col-sm-6">
    {!! Form::label('battery_life', 'Battery Life:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('battery_life', false) !!}
        {!! Form::checkbox('battery_life', 'true', null) !!}
    </label>
</div>

<!-- Preinstalled Apps Field -->
<div class="form-group col-sm-6">
    {!! Form::label('preinstalled_apps', 'Preinstalled Apps:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('preinstalled_apps', false) !!}
        {!! Form::checkbox('preinstalled_apps', 'true', null) !!}
    </label>
</div>

<!-- Receive Updates Field -->
<div class="form-group col-sm-6">
    {!! Form::label('receive_updates', 'Receive Updates:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('receive_updates', false) !!}
        {!! Form::checkbox('receive_updates', 'true', null) !!}
    </label>
</div>

<!-- Opinion In A Sentence Field -->
<div class="form-group col-sm-6">
    {!! Form::label('opinion_in_a_sentence', 'Opinion In A Sentence:') !!}
    {!! Form::text('opinion_in_a_sentence', null, ['class' => 'form-control']) !!}
</div>

<!-- Extended Opinion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('extended_opinion', 'Extended Opinion:') !!}
    {!! Form::textarea('extended_opinion', null, ['class' => 'form-control']) !!}
</div>

<!-- Pros Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pros', 'Pros:') !!}
    {!! Form::text('pros', null, ['class' => 'form-control']) !!}
</div>

<!-- Cons Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cons', 'Cons:') !!}
    {!! Form::text('cons', null, ['class' => 'form-control']) !!}
</div>

<!-- General Opinion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('general_opinion', 'General Opinion:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('general_opinion', false) !!}
        {!! Form::checkbox('general_opinion', 'true', null) !!}
    </label>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('comments.index') !!}" class="btn btn-default">Cancel</a>
</div>
