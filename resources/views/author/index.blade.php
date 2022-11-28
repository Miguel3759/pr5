@extends('layouts.app')

@section('template_title')
    Author
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Author') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('authors.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Name</th>
										<th>Description</th>
										<th>State</th>
										<th>Register Date</th>
										<th>Finished Date</th>
										<th>Change Date</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($authors as $author)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $author->name }}</td>
											<td>{{ $author->description }}</td>
											<td>{{ $author->state }}</td>
											<td>{{ $author->register_date }}</td>
											<td>{{ $author->finished_date }}</td>
											<td>{{ $author->change_date }}</td>

                                            <td>
                                                <form action="{{ route('authors.destroy',$author->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('authors.show',$author->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('authors.edit',$author->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $authors->links() !!}
            </div>
        </div>
    </div>
@endsection
