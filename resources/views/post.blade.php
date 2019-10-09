@extends('layouts')

@section('title', 'Post')

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
    @if(empty($posts))
     <p>No Data</p>
    @else
     <table class="table">
      <thead>
        <th>User_ID</th>
        <th>Content</th>
        <th>Name</th>
      </thead>

      <tbody>
        @foreach($posts as $post)
          <tr>
            <td>{{$post['user_id']}}</td>
            <td>{{$post['content']}}</td>
            <td>{{$post['user']['name']}}</td>
          </tr>
        @endforeach
        @endif
      </tbody>
    </table>
  </div>
@endsection