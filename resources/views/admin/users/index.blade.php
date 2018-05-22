@extends('layouts.admin')

@section('content')

    <table class="table">
        <thead>
          <tr>
            <th>Id</th>
            <th>Name</th>
              <th>Photo</th>
            <th>Email</th>
              <th>Role</th>
              <th>Status</th>
              <th>created at</th>
              <th>updated at</th>
          </tr>
        </thead>
        <tbody>

            @if(count($users))

                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td><img height="50" src="{{$user->photo ? $user->photo->file : 'there is no photo'}}"></td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->role->name}}</td>
                        <td>{{$user->is_active == 1 ? 'active' : 'not active'}}</td>
                        <td>{{$user->created_at}}</td>
                        <td>{{$user->updated_at}}</td>
                    </tr>
                @endforeach

            @endif

        </tbody>
      </table>

@endsection