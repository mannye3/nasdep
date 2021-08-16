@extends('layouts.master')

@section('content')





<section class="shop-checkouts shop-order">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="order_complete_message text-center">
                    <div class="icon "><span class="fa fa-envelope" style="font-size: 100px"></span></div>
                    <h2>Please check your email for a verification link.</h2>
                    @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                @endif
                    <p>If you did not receive the email, </p>


                        <a href="{{ route('sendbasicemail') }}" >
                        <button type="button"  class=" btn-thm">{{ __('click here to request another') }}</button>.
                        </a>

                        <a href="{{ url()->previous() }}" >
                            <button type="button"  class=" btn-thm">{{ __('Go Back') }}</button>.
                            </a>
                </div>
            </div>
        </div>

    </div>
</section>






















@endsection
