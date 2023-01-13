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

            <div class="col-md-6">
                {{-- card 2   --}}
    @include('frontend.includes.card2')
            </div>


            <div class="col-md-6 mt-3">
                {{-- card 3  --}}
    @include('frontend.includes.card3')
            </div>
        </div>
    </div>
@endsection