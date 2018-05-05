<table class="table table-responsive" id="comments-table">
    <thead>
        <tr>
            <th>When Bought</th>
        <th>Resistant Scratchs And Falling</th>
        <th>Is Beautiful</th>
        <th>Comfortable</th>
        <th>Good Vision In The Sun</th>
        <th>Works Well In Daily Use</th>
        <th>Demanding Games</th>
        <th>Good Sound</th>
        <th>Daytime Photos</th>
        <th>Night Photos</th>
        <th>Quality Selfies</th>
        <th>Powerful Flash</th>
        <th>Good Calls</th>
        <th>Quality Gps</th>
        <th>Quality Wifi</th>
        <th>Battery Life</th>
        <th>Preinstalled Apps</th>
        <th>Receive Updates</th>
        <th>Opinion In A Sentence</th>
        <th>Extended Opinion</th>
        <th>Pros</th>
        <th>Cons</th>
        <th>General Opinion</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($comments as $comment)
        <tr>
            <td>{!! $comment->when_bought !!}</td>
            <td>{!! $comment->resistant_scratchs_and_falling !!}</td>
            <td>{!! $comment->is_beautiful !!}</td>
            <td>{!! $comment->comfortable !!}</td>
            <td>{!! $comment->good_vision_in_the_sun !!}</td>
            <td>{!! $comment->works_well_in_daily_use !!}</td>
            <td>{!! $comment->demanding_games !!}</td>
            <td>{!! $comment->good_sound !!}</td>
            <td>{!! $comment->daytime_photos !!}</td>
            <td>{!! $comment->night_photos !!}</td>
            <td>{!! $comment->quality_selfies !!}</td>
            <td>{!! $comment->powerful_flash !!}</td>
            <td>{!! $comment->good_calls !!}</td>
            <td>{!! $comment->quality_GPS !!}</td>
            <td>{!! $comment->quality_WIFI !!}</td>
            <td>{!! $comment->battery_life !!}</td>
            <td>{!! $comment->preinstalled_apps !!}</td>
            <td>{!! $comment->receive_updates !!}</td>
            <td>{!! $comment->opinion_in_a_sentence !!}</td>
            <td>{!! $comment->extended_opinion !!}</td>
            <td>{!! $comment->pros !!}</td>
            <td>{!! $comment->cons !!}</td>
            <td>{!! $comment->general_opinion !!}</td>
            <td>
                {!! Form::open(['route' => ['comments.destroy', $comment->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('comments.show', [$comment->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('comments.edit', [$comment->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>