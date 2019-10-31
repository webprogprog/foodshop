@extends('layouts.app')

@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/view_users.css') }}">
@endsection

@section('content')
    <div class="users-table-div">
        <h1>USERS</h1>
        <form action="/view-users/search" method="GET" class="search-user">
            <input class="input text" type="text" name="search" value="{{ old('search') }}" placeholder="Search by Username...">
            <input class="input button" type="submit" value="Search">
        </form>
        <div class="users-table">
            <div class="user-heading-parent">
                <span class="user-heading id">Id</span>
                <span class="user-heading username">Username</span>
                <span class="user-heading">Password</span>
                <span class="user-heading">Registration Date</span>
            </div>
            <div class="users-list-parent">
                @foreach($user_dbs as $user)
                <div class="users-list">
                    <span class="users-list-child id">{{$user->id}}</span>
                    <span class="users-list-child username">{{$user->username}}</span>
                    <span class="users-list-child">{{$user->password}}</span>
                    <span class="users-list-child">{{$user->date_of_registration}}</span>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    {{ $user_dbs->links() }}
@endsection