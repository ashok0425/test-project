@extends('frontend.layout.master')

@section('content')
    {{-- banner text  --}}
    @include('frontend.includes.hero_text')

    {{-- .card-section  --}}
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                {{-- card 1   --}}
    @include('frontend.includes.card1')
            </div>

            <div class="col-md-6 mt-3 mt-md-0">
                {{-- card 2   --}}
    @include('frontend.includes.card2')
            </div>


            <div class="col-md-6 mt-3">
                {{-- card 3  --}}
    @include('frontend.includes.card3')
            </div>

            <div class="col-md-6  pt-0 mt-3 mt-md-0">
                {{-- card 3  --}}
    @include('frontend.includes.card4')
            </div>
        </div>
    </div>
    <div class="mb-5"></div>
@endsection