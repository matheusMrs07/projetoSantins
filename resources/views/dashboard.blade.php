@extends('layouts.app')

@section('content')
    
    <div class="header bg-gradient-primary py-7 mb-lg-8 pt-5">
        <div class="container">
            <div class="header-body text-center mt-7 mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">
                        <h1 class="text-white">{{ __('Welcome!') }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="conteiner-fluid pt-8">
        @include('layouts.footers.auth')

    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush