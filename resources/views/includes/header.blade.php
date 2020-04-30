<header class="navigation animated">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-10">
                <div class="menu">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="/">{{ HTML::image('images/cotenants-nav-logo.png', 'CoTenants') }}</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ca-navbar" aria-controls="ca-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="ca-navbar">
                            <ul class="navbar-nav ml-auto" id="nav">
                                <li class="nav-item">{{ link_to_route('pages.index', 'Take a Tour', []) }}</li>
                                <li class="nav-item">{{ link_to_route('pages.index', 'Browse Region', []) }}</li>
                                <li class="nav-item">{{ link_to_route('pages.index', 'Discover', []) }}</li>
                                <li class="nav-item">{{ link_to_route('pages.index', 'How it works', []) }}</li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="col-12 col-lg-2">
                <div class="sign-up-button d-none d-lg-block">
                    <a href="/">Register</a>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="header clearfix">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 col-md">
                <div class="header-heading">
                    <h1>Rent a Room with a CoTenant</h1>
                </div>
                <div class="row">
                    <div class="search_form">
                        {{ Form::open(['' => '']) }}
                            <div class="form-row">
                                <div class="form-group col">
                                    {{ Form::text('location', null, ['class' => 'form-control', 'placeholder' => 'Location']) }}
                                </div>

                                <div class="form-group col">
                                    {{ Form::select('region', [
                                    'Ahafo Region' => 'Ahafo Region', 
                                    'Ashanti Region' => 'Ashanti Region', 
                                    'Bono Region' => 'Bono Region', 
                                    'Bono East Region' => 'Bono East Region', 
                                    'Central Region' => 'Central Region', 
                                    'Eastern Region' => 'Eastern Region', 
                                    'Greater Accra' => 'Greater Accra', 
                                    'Northern Region' => 'Northern Region', 
                                    'North East Region' => 'North East Region', 
                                    'Oti Region' => 'Oti Region', 
                                    'Savannah Region' => 'Savannah Region', 
                                    'Upper East Region' => 'Upper East Region', 
                                    'Upper West Region' => 'Upper West Region', 
                                    'Volta Region' => 'Volta Region', 
                                    'Western North Region' => 'Western North Region', 
                                    'Western Region' => 'Western Region'
                                    ], null, ['class' => 'form-control', 'placeholder' => 'Region']) }}
                                </div>

                                <div class="form-group col-3">
                                    {{ Form::submit('Send Now', ['class' => 'button submit-button']) }}
                                </div>
                            </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>