@extends('layouts.main')
        
@section('container')
<h1 class="mb-5">Our Team</h1>

    <ul>
        <li><a href="/about" class="text-decoration-none"><h2>Umam Asfiyaul</h2></a></li>
    </ul>
    @foreach ($authors as $author)
        <ul>
            <li>
                <h2><a href="#" class="text-decoration-none">{{ $author->name }}</a></h2>
            </li>
        </ul>
    @endforeach
@endsection




{{-- @extends('layouts.main')

@section('container')
    <article>
        <h1 class='mb-4'>our team</h1>
        <ul>
            <li><h5>umam asfiyaul</h5></li>
            <li><h5>sylia khana</h5></li>
            <li><h5>fitri yani</h5></li>
        </ul>
    </article>
@endsection --}}