@extends('layouts.app')

@section('content')

<br>

@auth
<div class="card">
    <h5 class="card-header">Settings</h5>
    <div class="card-body">
      <h5 class="card-title">Preferensi</h5>
@livewire('darkmode')
    </div>
  </div>
@endauth

<div class="card">
    <h5 class="card-header">Akun</h5>
    <div class="card-body">

        <button class="btn btn-warning" onclick="window.location.href='{{ url('account') }}'">Edit Profile</button> <br>

        @guest
        @if (Route::has('login'))
        <div class="container-right" style="padding: 10px;border-radius: 5px;background-color: white;">
            <a class="btn btn-dark" href="{{ route('login') }}">{{ __('Login') }}</a>
        @endif

        @if (Route::has('register'))
            <a class="btn btn-outline-dark" href="{{ route('register') }}">{{ __('Register') }}</a>
        </div>
        @endif
    @else
        @auth

        <a class="" style="color: red;" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>


            @endauth
        @endguest


    </div>
  </div>

@endsection
