@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @section('content')
                    <table class="table table-bordered" id="myTable">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                 
                                <th>Email</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                            </tr>
                        </thead>
                    </table>
                    @stop


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
