@extends('layouts.auth')
@section('title', __('Verify Your Email Address'))

@section('content')
<style>
    body {
        background-color: #222;
        color: white;
    }
    .verify-container {
        max-width: 480px;
        margin: 0 auto;
        padding: 2rem;
        text-align: center;
        color: white;
    }
    .verify-title {
        font-size: 1.5rem;
        margin-bottom: 1.5rem;
        font-weight: bold;
    }
    .verify-alert {
        background-color: #1a722d;
        padding: 0.75rem 1rem;
        margin-bottom: 1rem;
        border-radius: 4px;
        display: inline-block;
    }
    .logout-button {
        display: inline-block;
        background-color: #c0392b;
        color: #fff;
        text-decoration: none;
        padding: 0.5rem 1rem;
        border-radius: 4px;
        margin-top: 1rem;
    }
</style>

<!-- Include Font Awesome for the icon -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<div class="verify-container">
    <div class="verify-title">
        {{ __('Verify Your Email Address') }}
    </div>

    @if (session('resent'))
        <div class="verify-alert">
            {{ __('A fresh verification link has been sent to your email address.') }}
        </div>
    @endif

    <form action="{{ route('user.updateEmail') }}" method="POST">
        @csrf
        <div class="col-md-12">
            <div class="form-group  @error('email') has-error @enderror">
                <div class="input-group">
                    <input id="email_address" type="email" name="email" class="form-control  @error('email') has-error @enderror" value="{{ auth()->user()->email }}" placeholder="Enter new email address">
                    <span class="input-group-btn">
                        <button class="btn btn-default bg-white btn-flat new_email_verification" type="submit" title="Change Email" >
                            <i class="fa fa-refresh"></i>
                        </button>
                    </span>
                </div>
                @error('email')
                          <span class="help-block text-danger">{{ $message }}</span>
                        @enderror
            </div>
        </div>
        
    </form>

    <div class="clearfix"></div>

    <p>{{ __('Before proceeding, please check your email for a verification link.') }}</p>

    <p>
        {{ __('If you did not receive the email') }},
        <form action="{{ route('verification.resend') }}" method="POST" style="display: inline;">
            @csrf
            <button type="submit" class="btn btn-primary"> {{ __('click here to request another') }}</button>
        </form>
    </p>

    <a href="{{ route('logout') }}" class="logout-button"
       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</div>
@if(isset($lockout) && $lockout > 0)
<script>
    document.addEventListener('DOMContentLoaded', function(){
        var lockoutTime = {{ $lockout }};
        var changeEmailBtn = document.querySelector('.new_email_verification');
        var resendBtn = document.querySelector('form[action="{{ route('verification.resend') }}"] button');

        if (changeEmailBtn) changeEmailBtn.disabled = true;
        if (resendBtn) resendBtn.disabled = true;

        var interval = setInterval(function(){
            lockoutTime--;
            if (changeEmailBtn) {
                changeEmailBtn.innerHTML = '<i class="fa fa-refresh"></i> ' + lockoutTime;
            }
            if(lockoutTime <= 0) {
                if (changeEmailBtn) {
                    changeEmailBtn.disabled = false;
                    changeEmailBtn.innerHTML = '<i class="fa fa-refresh"></i>';
                }
                if (resendBtn) {
                    resendBtn.disabled = false;
                    resendBtn.innerHTML = '{{ __("click here to request another") }}';
                }
                clearInterval(interval);
            }
        }, 1000);
    });
</script>
@endif

@endsection
