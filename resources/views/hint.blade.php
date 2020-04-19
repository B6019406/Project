@extends('layouts.app')

<style scoped>
    #display {}
</style>

@section('content')
<title>Login</title>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Password Hint') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" autocomplete="off">
                        @csrf

                        {{-- Email Address --}}
                        <div class="form-group row">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <br>
                                <input type="text" id="display" placeholder="Hint will show here...">
                            </div>
                        </div>

                        {{-- Login Button --}}
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-outline-dark">
                                    {{ __('Get Hint') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function showHint() {
        if(document.getElementById(display))
    }
</script>

@endsection