<div class="modal" id="modal_login" style="z-index: 1001">
    <div id="back" class="modal-background uk-card uk-card-default uk-card-body uk-animation-fade" onclick="toggleModal('#modal_login')"></div>
    <div class="modal-content">

        <article class="message is-primary uk-card uk-card-default uk-card-body uk-animation-slide-top" style="border-radius: 10px;">
            <div class="message-header" >
                <p>Bienvenido</p>
                <button class="delete" aria-label="delete" onclick="toggleModal('#modal_login')"></button>
            </div>

            <div class="message-body">
                <form method="POST" action="{{ url('/login') }}">
                    @csrf

                    <div class="columns is-centered is-mobile">
                        <div class="column is-4-desktop is-4-mobile is-3-tablet">
                            <img src="{{ asset('img/logo/logo.png') }}" alt="">
                        </div>
                    </div>
                    <div class="columns">
                        <div class="column">

                            <label for="email" class="label">{{ __('Usuario') }}</label>
                            <p class="control has-icons-left">
                                <input id="email" type="email" class="input is-black {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autocomplete="off" autofocus>
                                <span class="icon is-medium is-left">
                                    <i class="fas fa-address-card"></i>
                                </span>
                    
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </p>

                        </div>
                    </div>

                    <div class="columns">
                        <div class="column">

                            <label for="password" class="label">{{ __('Contraseña') }}</label>
                            <p class="control has-icons-left">
                                <input id="password" type="password" class="input is-black {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                <span class="icon is-medium is-left">
                                    <i class="fas fa-lock"></i>
                                </span>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </p>

                        </div>
                    </div>

                    <div class="columns">
                        <div class="column has-text-right">
                            <button type="submit" class="button is-black is-outlined is-fullwidth">
                                {{ __('Iniciar sesión') }}
                            </button>
                        </div>
                    </div>

                    <hr>

                    <div class="columns">
                        <div class="column">
                            <label class="checkbox" for="remember">
                                <input class="checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                {{ __('Recordarme') }}
                            </label>
                        </div>
                        <div class="column is-7 has-text-centered">
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}" style="font-size: 0.9rem;">
                                    {{ __('Olvidaste tu contraseña?') }}
                                </a>
                            @endif
                        </div>
                    </div>

                </form>
            </div>
        </article>

    </div>
</div>