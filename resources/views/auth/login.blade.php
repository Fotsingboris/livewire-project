@extends('layouts.app')

@section('content')
<div class="my-10 flex justify-center w-full">
    <section class="border rounded shadow-lg p-4 w-6/12 bg-gray-200">
        <h1 class="text-center text-3xl my-5">Login Time</h1>
        <hr>

        <form method="POST" class="my-4" action="{{ route('login') }}">
            @csrf

            <div class="flex justify-around my-8">

                <div class="flex flex-wrap w-10/12">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                      placeholder="Email"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="flex justify-around my-8">

                <div class="flex flex-wrap w-10/12">
                    <input class="p-2 rounded border shadow-sm w-full" id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                      placeholder="password"  name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="flex justify-around my-8">
                <div class="flex flex-wrap w-10/12 offset-md-4">
                    <div class="form-check">
                        <input class="p-2 rounded border shadow-sm w-half" class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember')
                            ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>

            <div class="flex justify-around my-8">
                <div class="flex flex-wrap w-10/12">
                    <button type="submit" class="btn p-2 bg-gray-800 text-white w-full rounded tracking-wider cursor-pointer">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif
                </div>
            </div>
        </form>
</div>>
</section>

</div>
@endsection