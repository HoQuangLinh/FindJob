@extends('layouts.app')
@section('users')
    <div class="users">
        <h3>List Users</h3>

    </div>

    <table id="users">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($users as $key => $user)
            <tr>

                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->password }}</td>

                <td style="cursor: pointer">
                    <a href="/editUser/{{ $user->id }}"><i style="color:#007bff" class=' bx bx-edit-alt  '>Edit</i>
                </td>

                <td class="btn-delete" style="cursor: pointer">


                    <a href="/deleteUser/{{ $user->id }}"><i style="color:#ff0055" class=' bx bx-edit-alt  '>Delete</i>

                </td>

            </tr>
        @endforeach


    </table>
@endsection
