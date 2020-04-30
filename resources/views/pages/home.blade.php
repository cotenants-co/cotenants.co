@extends('layouts.landing')

@section('content')
<div class="category-listing py-5 bg-light">
    <div class="container">
        <h5 class="category-heading">Find a place that suit your style</h5>

        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="card mb-3">
                    {{ HTML::image('images/Card1.jpg', 'CoTenants') }}
                    <div class="card-body">
                        <h6 class="card-text">Apartment</h6>
                        <small class="card-subtext"><a href="/">View 786 appartments</a></small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="card mb-3">
                    {{ HTML::image('images/Card2.jpg', 'CoTenants') }}
                    <div class="card-body">
                        <h6 class="card-text">Single room</h6>
                        <small class="card-subtext"><a href="/">View 2162 single rooms</a></small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="card mb-3">
                    {{ HTML::image('images/Card3.jpg', 'CoTenants') }}
                    <div class="card-body">
                        <h6 class="card-text">Condo</h6>
                        <small class="card-subtext"><a href="/">View 305 condos</a></small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="card mb-3">
                    {{ HTML::image('images/Card6.jpg', 'CoTenants') }}
                    <div class="card-body">
                        <h6 class="card-text">Spacious condo</h6>
                        <small class="card-subtext"><a href="/">View 510 Spacious condos</a></small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="card mb-3">
                    {{ HTML::image('images/Card7.jpg', 'CoTenants') }}
                    <div class="card-body">
                        <h6 class="card-text">Full house</h6>
                        <small class="card-subtext"><a href="/">View 499 full house</a></small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="card mb-3">
                    {{ HTML::image('images/Card8.jpg', 'CoTenants') }}
                    <div class="card-body">
                        <h6 class="card-text">Flat</h6>
                        <small class="card-subtext"><a href="/">View 129 flats</a></small>
                    </div>
                </div>
            </div>

         
        </div>

    </div>
</div>

<div id="assurance">
    <div class="assurance-message">
        {{ HTML::image('images/assurance.jpg', 'CoTenants') }}
        <h2> Your accomodation is safe with us </h2>
        <p> Secure payment, 24/7 support and a </p>
        <p> Book with Confidence Guarantee </p>
    </div>
</div>
@endsection