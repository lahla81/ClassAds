@foreach($categories as $category)
    <li class="nav-item">
        <a class="nav-link active" href="">{{$category->category_name}}</a>
    </li>
@endforeach