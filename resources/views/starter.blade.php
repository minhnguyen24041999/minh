@extends('layouts')

@section('title', 'Minh')

@section('contents')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Page Header
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>
    @include('sidebar')
    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->

    </section>
    <!-- /.content -->
    <a href="{{ route('users.create')}}" class="btn btn-success">Create</a>
    @if(empty($users))
     <p>No Data</p>
    @else
     <table class="table">
      <thead>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Birthday</th>
        <th>Posts</th>
      </thead>

      <tbody>
        @foreach($users as $user)
          <tr>
            <td>{{$user['name']}}</td>
            <td>{{$user['email']}}</td>
            <td>{{$user['address']}}</td>
            <td>{{$user['birthday']}}</td>
            <td>{{ count($user['posts']) }}</td>
            <td><a href="{{ url('users/' . $user->id . '/edit') }}" class="btn btn-primary">Update</a>
            <td><a href="{{ route('users.delete', ['id' => $user->id])}}" class="btn btn-danger" title="">Remove</a>
          </tr>
        @endforeach
        @endif
      </tbody>
    </table>
  </div>
@endsection