@extends('layouts.master')

@section('content')





<section class="shop-checkouts shop-order">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="order_complete_message text-center">
                    <div class="icon "><span class="fa fa-envelope" style="font-size: 100px"></span></div>
                    <h2>Verify Your Email Address</h2>
                    @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                @endif
                    <p>Before proceeding, please check your email for a verification link. If you did not receive the email, </p>
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit"  class=" btn-thm">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>






















@endsection
