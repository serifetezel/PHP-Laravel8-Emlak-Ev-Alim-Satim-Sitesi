@foreach($children as $subcategory)
    <ul class="fh5co-sub-menu">
        @if(count($subcategory->children))
            <li style="color: #1D00AF; font-family:'Arial Black'">{{$subcategory->title}}</li>
            <ul class="fh5co-sub-menu">
                @include('home.categorytree',['children' => $subcategory->children])
            </ul>
            <hr>
        @else
        <li><a href="#">{{$subcategory->title}}</a> </li>
        @endif
    </ul>
@endforeach
