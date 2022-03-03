<!DOCTYPE html>
<html lang="en">

@extends('layouts.app')


@section('edit-user')
    <div class="form-edit-container">

        <form class="form-edit" action="/deleteUser/{{ $user->id }}" method="POST">
            @csrf
            <h3>Delete info for {{ $user->name }}</h3>

            <div class="form-group">
                <label>Fullname</label>
                <input readonly name='name' type="text" class="form-control" value="{{ $user->name }}" />
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input readonly name='email' type="email" class="form-control" value="{{ $user->email }}" />
            </div>
            {{-- <div class="form-group">
                <label>Phone</label>
                <input name='phone' type="text" class="form-control" value="{{ $user->phone }}" />
            </div> --}}



            <button type="submit" class="btn btn-primary">Delete</button>
        </form>

    </div>
@endsection()
