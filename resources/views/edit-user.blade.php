<!DOCTYPE html>
<html lang="en">

@extends('layouts.app')


@section('edit-user')
    <div class="form-edit-container">

        <form class="form-edit" action="/editUser/{{ $user->id }}" method="POST">
            @csrf
            <h3>Edit info for {{ $user->name }}</h3>

            <div class="form-group">
                <label>Fullname</label>
                <input name='name' type="text" class="form-control" value="{{ $user->name }}" />
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input name='email' type="email" class="form-control" value="{{ $user->email }}" />
            </div>
            {{-- <div class="form-group">
                <label>Phone</label>
                <input name='phone' type="text" class="form-control" value="{{ $user->phone }}" />
            </div> --}}



            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
@endsection()
