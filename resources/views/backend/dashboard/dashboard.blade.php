@extends('backend.layout.master')

@section('content')
    <section class="section dashboard">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6">
                    <div class="card info-card animal-records">
                        <div class="card-body">
                            <div class="icon">
                                <i class="fas fa-paw"></i>
                            </div>
                            <h5 class="card-title">Data</h5>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card info-card milk-records">
                        <div class="card-body">
                            <div class="icon">
                                <i class="fas fa-glass-whiskey"></i>
                            </div>
                            <h5 class="card-title">Data</h5>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card info-card total-orders">
                        <div class="card-body">
                            <div class="icon">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                            <h5 class="card-title">Data</h5>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card info-card total-revenue">
                        <div class="card-body">
                            <div class="icon">
                                <i class="fas fa-dollar-sign"></i>
                            </div>
                            <h5 class="card-title">Data</h5>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
