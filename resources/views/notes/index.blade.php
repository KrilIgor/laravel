@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Notes</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('notes.create') }}"> Create New Notes</a>
                </div>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Description</th>
                <th>Tags</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach ($notes as $key => $note)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $note->title }}</td>
                    <td>{{ $note->description }}</td>
                    <td>{{ $note->tags }}</td>
                    <td><a class="btn btn-primary" href="{{ route('notes.edit',$note->id) }}">Edit</a></td>
                    <td>{!! Form::open(['method' => 'DELETE','route' => ['notes.destroy', $note->id]]) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-primary']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </table>

        {!! $notes->render() !!}

    </div>

@endsection