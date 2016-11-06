<ul class="list-group">
    <li class="list-group-item" style="background-color: #222222;color: white;">{!! $title !!}</li>
    @foreach($featured as $item)
        <li class="list-group-item grid">
            <div class="row text-center">
                <div class="col-md-4 text-center">
                    <img width="75" height="75"
                         src="{!! $item['image'] !!}">

                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-12" style="font-size: 12px;">
                   {!! substr($item['title'],0,15) !!}
                </div>
            </div>
        </li>
    @endforeach
</ul>