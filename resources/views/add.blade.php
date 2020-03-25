@extends('layouts.app')

<style scoped>
    .button-generator {}
</style>

@section('content')
<div class="container">
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
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection