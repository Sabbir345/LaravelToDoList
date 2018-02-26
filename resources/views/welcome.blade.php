@extends('layouts.app')

@section('content')

    <div class="container">

        @if(session('message'))

            <div class="alert alert-dismissable alert-success">
                <button type="button" class="close" data-dismiss="alert">*</button>
                <strong>Well Done</strong>{{session('message')}}
            </div>


        @endif

        <table class="table table-striped table-hover ">
          <thead>
          <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
          </tr>
          </thead>
       
          @foreach($students as $student)
              <tbody>
              <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->first_name }}</td>
                <td>{{ $student->last_name}}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->phone }}</td>
                <td>
                    <a href="{{route('edit',$student->id)}}"  class="btn btn-primary">Edit</a>

                    <form action="{{route('delete', $student->id)}}" method="POST" class="inline-it">
                        {{ csrf_field() }}

                        {{ method_field('delete') }}

                        <input class="btn btn-danger" type="submit" value="Delete">
                        
                      </form>
                </td>
              </tr> 
             
              </tbody>
            @endforeach
        </table>
        
    </div>

@endsection