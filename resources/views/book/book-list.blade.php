@extends('layouts.main');

@section('content')
<table>
    @foreach($books as $book)
        <tr>
            <td colspan="3" style="font-size: 26px; font-weight: bold;">{{ $book->title }}</td>
        </tr>
        <tr>
            <td>ISBN:{{ $book->isbn }}</td>
            <td>Published: {{ $book->published_at }}</td>
            <td>Author: {{ $book->author->first_name }} {{ $book->author->last_name }}</td>
        </tr>
        <tr>
            <td colspan="3" style="height: 15px;">
                <hr>
            </td>
        </tr>
    @endforeach
</table>
@endsection
