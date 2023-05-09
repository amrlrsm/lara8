@extends('layouts.main')

@section('content')

<h1>{{$title}}</h1>

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Price</th>
            <th>ISBN</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($books as $row)
            <tr>
                <td>{{$row->id}}</td>
                <td>{{$row->title}}</td>
                <td>{{$row->author}}</td>
                <td>{{$row->price}}</td>
                <td>{{$row->isbn}}</td>
            </tr>
        @endforeach
    </tbody>
</table>


@endsection
