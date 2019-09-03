@extends('layouts.master')

@section('title')
			Welcome to Digital CRM!
@endsection()



@section('content')

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Registered User's</h4>
                  <!-- for show the message updadated copy from home.blade.phpfile-->
                 @if (session('status'))
                              <div class="alert alert-success" role="alert">
                                  {{ session('status') }}
                              </div>
                  @endif
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <!-- fetch table data -->
                      <th>Id</th>
                      <th>Name</th>
                      <th>Phone</th>
                      <th>Email</th>
                      <th>Usertype</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </thead>
                    <tbody>
                      <!--fetch table data -->
                      @foreach($users as $row)
                      <tr>
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->phone }}</td>
                        <td>{{ $row->email }}</td>
                        <td>{{ $row->usertype }}</td>
                        <td>
                          <a href="/role-edit/{{ $row->id }}" class="btn btn-success">EDIT</a>
                        </td>
                        <td>
                          <!-- we have to add form method because without form method it will show error-->
                          <form action="/role-delete/{{ $row->id }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger">DELETE</button> 
<!-- <a href="/role-delete/" class="btn btn-danger">DELETE</a> it is not working or we are not submitting it-->
                          </form>
                        </td>
                       </tr>
                       @endforeach()
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection()

@section('scripts')


@endsection()