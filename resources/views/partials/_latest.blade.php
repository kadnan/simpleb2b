{{--Latest Box--}}

<ul class="list-group">
    <li  class="list-group-item" style="background-color: #222222;color: white;">{!! $title !!}</li>
    @foreach ($entries as $entry)
        <li  class="list-group-item" ><a title="{!! $entry['title']  !!}" href="{!! $entry['url'] !!}">{!! $entry['title']  !!}</a></li>
    @endforeach
</ul>
