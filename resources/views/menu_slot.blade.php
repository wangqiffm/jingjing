<div class="section menu-section" id="{{str_replace(' ',"_", $title)}}">

        <h4 class="header">{{$title}}</h4>
<div class="row">
    @for($i = $from ; $i<=$to ; $i++)

    <div class="col s12 m4">
        <div class="card">
            <div class="card-image">
                <img class="responsive-img materialboxed" src="{{asset('menu/'.$i.'_compressed.jpg')}}"
                     data-src="{{asset('menu/'.$i.'_compressed.jpg')}}"/>

            </div>
        </div>
    </div>
    @endfor
</div>
</div>