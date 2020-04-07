@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card" >
                <div class="text-center mt-3 mb-3"><h2>{{ __('Iniciar Sesión') }}</h2></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                            <div class="md-form mb-3 mt-5">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <label for="email" class=" col-form-label text-md-right"><h3> {{ __('Correo Electrónico') }} </h3></label>
                            </div>
                        
                            <div class="md-form mb-3">
                            
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autocomplete="current-password">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                <label for="password" class=" col-form-label text-md-right"><h3>{{ __('Contraseña') }}</h3></label>
                            </div>
                        

                        <div class="form-group">    
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                       <h4> {{ __('Recordar') }} </h4>
                                </label>
                            </div>
                        </div>

                        <div class="text-center mt-2">
                            
                                <button type="submit" class="btn btn-sm btn-primary btn-block">
                                    <h3>{{ __('Entrar') }}</h3>
                                </button>
                        </div>
                        <div class="text-center mb-3">
                            @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        <h4>{{ __('¿Olvidaste tu contraseña?') }} </h4>
                                    </a>
                                @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
