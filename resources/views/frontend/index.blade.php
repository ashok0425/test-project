@extends('frontend.layout.master')

@section('content')
    {{-- banner text  --}}
    @include('frontend.includes.hero_text')

    {{-- .card-section  --}}
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                {{-- banner text  --}}
    @include('frontend.includes.card1')
            </div>
        </div>
    </div>
@endsection