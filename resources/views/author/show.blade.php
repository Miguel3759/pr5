@extends('layouts.app')

@section('template_title')
    {{ $author->name ?? 'Show Author' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Author</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('authors.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $author->name }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $author->description }}
                        </div>
                        <div class="form-group">
                            <strong>State:</strong>
                            {{ $author->state }}
                        </div>
                        <div class="form-group">
                            <strong>Register Date:</strong>
                            {{ $author->register_date }}
                        </div>
                        <div class="form-group">
                            <strong>Finished Date:</strong>
                            {{ $author->finished_date }}
                        </div>
                        <div class="form-group">
                            <strong>Change Date:</strong>
                            {{ $author->change_date }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
