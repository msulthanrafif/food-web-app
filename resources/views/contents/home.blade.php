@extends('layouts.main')

@section('header')
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="pb-0" style="font-size: 28px;">
                        Made Resto
                    </div>
                    <div class="row">
                        <div class="col">Tuesday, 2 Feb 2021</div>
                    </div>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarsExample07">
                <div class="container"></div>
                <div class="container col-6">
                    <form role="search">
                        <input class="form-control" type="search" placeholder="Search for food, coffe, etc..">
                    </form>
                </div>
            </div>
        </div>
    </nav>
@endsection

@section('content')
    <div class="container">
        <ul class="nav nav-underline border-bottom">
            <li class="nav-item">
                <a class="nav-link" href="#">Hot Dishes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Cold Dishes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Soup</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Grill</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Appetizer</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Dessert</a>
            </li>
        </ul>
    </div>

    <div class="container">
        <header class="p-3 mb-5">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <ul class="nav col-12 col-lg-auto me-lg-auto justify-content-center">
                    <h4>Choose Dishes</h4>
                </ul>
                <div class="dropdown">
                    <button class="btn btn-dark btn-outline-light dropdown-toggle" type="button" data-bs-toggle="dropdown">
                        Dine In
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Take It</a></li>
                        <li><a class="dropdown-item" href="#">Delivery</a></li>
                    </ul>
                </div>
            </div>
        </header>
    </div>

    {{-- card --}}
    <div class="row row-cols-1 row-cols-md-3 g-5 ms-0 text-center">
        <div class="col">
            <div class="card">
                <img src="img/content/food.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Spicy seasoned seafood noodles</h5>
                    <p class="card-text">Rp. 43.000</p>
                </div>
                <div class="card-footer text-body-secondary">
                    20 Bowls available
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="img/content/food-2.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">
                        Salted Pasta with mushroom sauce
                    </h5>
                    <p class="card-text">
                        Rp. 35.000
                    </p>
                </div>
                <div class="card-footer text-body-secondary">
                    11 Bowls available
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="img/content/food-3.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Beef dumpling in hot and sour soup</h5>
                    <p class="card-text">Rp. 65.000</p>
                </div>
                <div class="card-footer text-body-secondary">
                    16 Bowls available
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="img/content/food-4.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Healthy noodle with spinach leaf</h5>
                    <p class="card-text">Rp. 65.000</p>
                </div>
                <div class="card-footer text-body-secondary">
                    22 Bowls available
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="img/content/food-5.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Hot spicy fried rice with omelet</h5>
                    <p class="card-text">Rp. 57.000</p>
                </div>
                <div class="card-footer text-body-secondary">
                    13 Bowls available
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="img/content/food-6.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Spicy instant noodle with special omelette</h5>
                    <p class="card-text">Rp. 45.000</p>
                </div>
                <div class="card-footer text-body-secondary">
                    17 Bowls available
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content-2')
    @include('partials.orders')
@endsection
