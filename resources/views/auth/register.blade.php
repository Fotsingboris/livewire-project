@extends('layouts.app')

@section('content')
<div class="my-10 flex justify-center w-full">
    <section class="border rounded shadow-lg p-4 w-6/12 bg-gray-200">
        <h1 class="text-center text-3xl my-5">SignUp to Get Started</h1>
        <hr>
        <form method="POST" class="my-4" action="{{ route('register') }}">
            @csrf
    
            <div class="flex justify-around my-8">
              
                <div class="flex flex-wrap w-10/12">
                    <input id="name" type="text" class="p-2 rounded border shadow-sm w-full @error('name') is-invalid @enderror" name="name"
                       placeholder="Name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
    
            <div class="flex justify-around my-8">
              
                <div class="flex flex-wrap w-10/12">
                    <input id="email" type="email" class="p-2 rounded border shadow-sm w-full @error('email') is-invalid @enderror" name="email"
                       placeholder="Email" value="{{ old('email') }}" required autocomplete="email">
    
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
    
            <div class="flex justify-around my-8">
              
                <div class="flex flex-wrap w-10/12">
                    <input id="password" type="password" class="p-2 rounded border shadow-sm w-full @error('password') is-invalid @enderror"
                       placeholder="Password" name="password" required autocomplete="new-password">
    
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
    
            <div class="flex justify-around my-8">
               
                <div class="flex flex-wrap w-10/12">
                    <input id="password-confirm" type="password" class="p-2 rounded border shadow-sm w-full" name="password_confirmation" required
                       placeholder="Confirm password" autocomplete="new-password">
                </div>
            </div>
    
            <div class="flex justify-around my-8">
                <div class="flex flex-wrap w-10/12">
                    <button type="submit" class="btn p-2 bg-gray-800 text-white w-full rounded tracking-wider cursor-pointer">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
        </form>
    </section>

 

</div>
@endsection