@extends('layouts.themes.NiceAdmin.app')

@section('breadcrumb')
    @php
    $links = ["DAshboard","Profile","user"];
    @endphp
    <x-niceadmin.breadcrumb :links="$links" title="User" />    
@endsection

@section('page-title','Home')

@section('content')
<h1>Some content</h1>
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <script>
                        window.addEventListener('load', (event) => {
                            Swal.fire(
                                'Good job!',
                                'You clicked the button!',
                                'success'
                            )
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
