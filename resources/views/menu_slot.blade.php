<div class="section menu-section" id="{{$key}}">

        <h4 class="header">{{$title}}</h4>
<div class="row">
    @foreach(array_wrap($from) as $i)


    <div class="col s12 l4">
        <div class="card">
            <div class="card-image">
                <img class="responsive-img materialboxed" src="{{asset($path.$i.'.jpg')}}"
                     data-src="{{asset($path.$i.'.jpg')}}"/>

            </div>
        </div>
    </div>
        @if ($loop->iteration % 3 ==0)
            <div class="clearfix"></div>
        @endif
    @endforeach
</div>
</div>