<li class="<?= ($sub_categories) ? 'dropdown' : '' ?>">
    <a class="dropdown-toggle" href="{{$category_arr['url']}}" title="{{$category_arr['name']}}">
        {{$category_arr['name']}}
        @if(!$sub_categories)
            </a>
        @else
        <i class="icon icon-angle-down"></i>
    </a>
    <ul class="dropdown-menu">
        @foreach($sub_categories as $sub_category)
        <li class=""><a href="{{$sub_category['url']}}" title="{{$sub_category['name']}}">{{$sub_category['name']}}</a></li>
        @endforeach
    </ul>

        @endif

</li>