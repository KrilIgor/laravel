@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Profile</div>
                    <div class="panel-body">
                        {!! Form::model($note, ['method' => 'PATCH','route' => ['notes.update', $note->id]]) !!}
                        <div class="form-group">
                            <label for="title" class="col-md-4 control-label">Title</label>
                            <div>
                                {!! Form::text('title', (isset($note->title) ? $note->title : null), array('placeholder' => 'Title','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-md-4 control-label">Description</label>
                            {!! Form::text('description', (isset($note->description) ? $note->description : null), array('placeholder' => 'Description','class' => 'form-control')) !!}
                        </div>
                        <div class="form-group">
                            <label for="tags" class="col-md-4 control-label">Tag</label>
                            {!! Form::text('tags', (isset($note->tags) ? $note->tags : null), array('placeholder' => 'Tag','class' => 'form-control')) !!}
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Edit
                                </button>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

