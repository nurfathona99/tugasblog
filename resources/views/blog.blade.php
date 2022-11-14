@extends('layout.app')
@section('content')
<table>
    <thead>
        <th>No</th>
        <th>Author</th>
        <th>Tilte</th>
        <th>Body</th>
        <th>Keyword</th>
    </thead>
    <tbody>
        @foreach ($data as $d)
        <tr>
        <td>{{ $loop->iteration}}</td>
        <td>{{ $d->author}}</td>
        <td>{{ $d->title}}</td>
        <td>{{ $d->body}}</td>
        <td>{{ $d->keyword}}</td>
        <td><a href="{{ route('blog.edit', $d->id) }}" class = "btn btn-warning"> Edit </a>
        </td>
        <td>
            <form action = "{{route('blog.delete', ['id' => 1]) }}">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button class = "btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
        @endforeach
    </tbody>
</table>
@endsection
