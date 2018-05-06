<div class="table-responsive">
    <table class="table table-bordered table-hover" id="comment-table">
        <thead>
            <tr>
                <th>When Bought?</th>
                <th>Resistant scratchs and falling?</th>
                <th>Is Beautiful?</th>
                <th>Good vision in the sun?</th>
                <th>Works well in daily use?</th>
                <th>Demanding games?</th>
                <th>Good sound?</th>
                <th>Daytime photos?</th>
                <th>Night photos?</th>
                <th>Quality selfies?</th>
                <th>Powerful flash?</th>
                <th>Good calls?</th>
                <th>Quality GPS?</th>
                <th>Quality WIFI?</th>
                <th>Battery life?</th>
                <th>Preinstalled apps?</th>
                <th>Receive updates?</th>
                <th>Opinion in a sentence</th>
                <th>Extended opinion</th>
                <th>Pros</th>
                <th>Cons</th>
                <th>General opinion</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $comment->when_bought }}</td>
                <td>{{ $comment->resistant_scratchs_and_falling }}</td>
                <td>{{ $comment->is_beautiful }}</td>
                <td>{{ $comment->comfortable }}</td>
                <td>{{ $comment->good_vision_in_the_sun }}</td>
                <td>{{ $comment->works_well_in_daily_use }}</td>
                <td>{{ $comment->demanding_games }}</td>
                <td>{{ $comment->good_sound }}</td>
                <td>{{ $comment->daytime_photos }}</td>
                <td>{{ $comment->night_photos }}</td>
                <td>{{ $comment->quality_selfies }}</td>
                <td>{{ $comment->powerful_flash }}</td>
                <td>{{ $comment->good_calls }}</td>
                <td>{{ $comment->quality_GPS }}</td>
                <td>{{ $comment->quality_WIFI }}</td>
                <td>{{ $comment->battery_life }}</td>
                <td>{{ $comment->preinstalled_apps }}</td>
                <td>{{ $comment->receive_updates }}</td>
                <td>{{ $comment->opinion_in_a_sentence }}</td>
                <td>{{ $comment->extended_opinion }}</td>
                <td>{{ $comment->pros }}</td>
                <td>{{ $comment->cons }}</td>
                <td>{{ $comment->general_opinion }}</td>
            </tr>
        </tbody>
    </table>
</div>