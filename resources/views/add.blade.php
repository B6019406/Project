@extends('layouts.app')

<style scoped>
    .button-generator {}

    .bi-arrow-left {
        cursor: pointer;
    }
</style>

@section('content')
<title>Add to Vault</title>

<div class="container">

    <div class="row justify-content-flex-start">
        <div class="row justify-content-flex-start">
            <svg class="bi bi-arrow-left" width="3em" height="3em" viewBox="0 0 16 16" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg" onclick="window.history.go(-1); return false;">
                <path fill-rule="evenodd"
                    d="M5.854 4.646a.5.5 0 010 .708L3.207 8l2.647 2.646a.5.5 0 01-.708.708l-3-3a.5.5 0 010-.708l3-3a.5.5 0 01.708 0z"
                    clip-rule="evenodd" />
                <path fill-rule="evenodd" d="M2.5 8a.5.5 0 01.5-.5h10.5a.5.5 0 010 1H3a.5.5 0 01-.5-.5z"
                    clip-rule="evenodd" />
            </svg>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add to Collection') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('add') }}" autocomplete="off">
                        @csrf

                        {{-- Website Name --}}
                        <div class="form-group row">
                            <label for="website"
                                class="col-md-4 col-form-label text-md-right">{{ __('Website Name') }}</label>

                            <div class="col-md-6">
                                <input id="website" type="text" class="form-control" name="website" autofocus>
                            </div>
                        </div>

                        {{-- Website URL --}}
                        <div class="form-group row">
                            <label for="url"
                                class="col-md-4 col-form-label text-md-right">{{ __('Website URL') }}</label>

                            <div class="col-md-6">
                                <input id="url" type="text" class="form-control" name="url" autofocus>
                            </div>
                        </div>

                        {{-- Username --}}
                        <div class="form-group row">
                            <label for="username"
                                class="col-md-4 col-form-label text-md-right">{{ __('Email/Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text"
                                    class="form-control @error('username') is-invalid @enderror" name="username"
                                    autofocus>
                            </div>
                        </div>

                        {{-- Password --}}
                        <div class="form-group row">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    autofocus>
                            </div>
                        </div>

                        {{-- Send Button --}}
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-outline-dark">
                                    {{ __('Add to Vault') }}
                                </button>

                                <a class="btn btn-outline-dark" href="/generator" target="_blank">Use Password
                                    Generator</a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection