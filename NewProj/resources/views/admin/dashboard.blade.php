@extends('layouts.master')

@section('title')
			Welcome to Digital CRM!
@endsection()

@section('content')

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Users Data</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>Name</th>
                      <th>Country</th>
                      <th>City</th>
                      <th>Salary</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Neeraj</td>
                        <td>India</td>
                        <td>Uttarakhand</td>
                        <td>None</td>
                       </tr>
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