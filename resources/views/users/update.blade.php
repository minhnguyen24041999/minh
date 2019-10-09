@extends('layouts')

@section('title', 'Update')

@section('contents')
<div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content container-fluid">
          @include('sidebar')
            <form action="{{ url('users/' . $user->id . '/update') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{ $user->name }}">
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" value="{{ $user->email }}">
                </div>
                <div class="form-group">
                    <label for="name" class="form-label">Address</label>
                    <input type="text" name="address" class="form-control" id="addres" value="{{ $user->address }}">
                </div>
                <div class="form-group">
                    <label for="brithday" class="form-label">Birthday</label>
                    <input type="date" name="brithday" class="form-control" id="brithday" value="{{ $user->brithday }}">
                </div>
                <button class="btn btn-primary">Submit</button>
            </form>

        </section>
        <!-- /.content -->
    </div>
@endsection