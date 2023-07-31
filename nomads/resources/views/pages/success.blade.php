@extends('layouts.success')

@section('content')
    <!-- Main Content Details -->
    <main>
        <div class="section-success d-flex justify-content-center">
            <div class="col text-center">
                <img src="{{ url('frontend/images/ic_mail.png') }}" alt="#" />
                <h1>Yay! Succes</h1>
                <p>
                    We’ve sent you email for trip instruction please read it as well
                </p>
                <a href="index.html" class="btn btn-home-page mt-3 px-5">
                    Home Page
                </a>
            </div>
        </div>
    </main>
@endsection
