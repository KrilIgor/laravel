@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create Note</div>
                    <div class="panel-body">
                        {!! Form::open(array('route' => 'notes.store','method'=>'POST')) !!}
                            <div class="form-group">
                                <label for="title" class="col-md-4 control-label">Title</label>
                                <div>
                                    {!! Form::text('title', null, array('placeholder' => 'Title','class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description" class="col-md-4 control-label">Description</label>
                                <div>
                                    {!! Form::textarea('description', null, array('placeholder' => 'Description','class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tags" class="col-md-4 control-label">Tag</label>
                                <div>
                                    {!! Form::text('tags', null, array('placeholder' => 'Tags','class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Save
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