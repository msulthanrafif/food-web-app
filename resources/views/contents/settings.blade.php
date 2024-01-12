@extends('layouts.main')

@section('header')
    <header class="p-3 ms-5">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <ul class="nav col-12 col-lg-auto me-lg-auto justify-content-center">
                <h2>Settings</h2>
            </ul>
        </div>
    </header>
@endsection

@section('content')
<div class="container-xl rounded-3" style="background-color: #1F1D2B;">
    <header class="p-3 mb-2">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <ul class="nav col-3 col-lg-auto me-lg-auto justify-content-center">
                <h4>Products Management</h4>
            </ul>
            <div class="dropdown">
                <button class="btn btn-dark btn-outline-light" type="button">
                    <i class="bi bi-sliders me-2"></i>Manage Categories
                </button>
            </div>
        </div>
    </header>
    <div class="container">
        <ul class="nav nav-underline border-bottom mb-3">
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

    {{-- card list --}}
    <div class="row row-cols-1 row-cols-md-4 g-5 ms-0 text-center">
        <div class="col">
            <div class="d-flex align-items-center justify-content-center rounded-3" style="height: 300px; border-style: dashed; border-color: #FFCA40; border-width: 1px;">
                <button type="button" class="btn text-warning">
                    <i class="bi bi-plus"></i>
                    <p>Add new dish</p>
                </button>
            </div>
        </div>
        <div class="col">
            <div class="card" style="height: 300px;">
                <img src="img/content/food.png" class="card-img-top" style="margin-top: 14px;" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Spicy seasoned seafood noodles</h5>
                    <p class="card-text">
                        Rp. 43.000
                        <i class="bi bi-dot"></i>
                        20 Bowls
                    </p>
                </div>
                <div class="card-footer text-warning text-bg-warning bg-opacity-25">
                    <img src="img/icon/line.svg" alt="" class="me-2">
                    Edit dish
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="height: 300px;">
                <img src="img/content/food-2.png" class="card-img-top" style="margin-top: 14px;" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Salted Pasta with mushroom sauce</h5>
                    <p class="card-text">Rp. 35.000
                        <i class="bi bi-dot"></i>
                        30 Bowls</p>
                </div>
                <div class="card-footer text-warning text-bg-warning bg-opacity-25">
                    <img src="img/icon/line.svg" alt="" class="me-2">
                    Edit dish
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="height: 300px;">
                <img src="img/content/food-2.png" class="card-img-top" style="margin-top: 14px;" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Salted Pasta with mushroom sauce</h5>
                    <p class="card-text">Rp. 35.000
                        <i class="bi bi-dot"></i>
                        30 Bowls</p>
                </div>
                <div class="card-footer text-warning text-bg-warning bg-opacity-25">
                    <img src="img/icon/line.svg" alt="" class="me-2">
                    Edit dish
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="height: 300px;">
                <img src="img/content/food-3.png" class="card-img-top" style="margin-top: 14px;" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Spicy seasoned seafood noodles</h5>
                    <p class="card-text">Rp. 43.000</p>
                </div>
                <div class="card-footer text-warning text-bg-warning bg-opacity-25">
                    <img src="img/icon/line.svg" alt="" class="me-2">
                    Edit dish
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="height: 300px;">
                <img src="img/content/food-4.png" class="card-img-top" style="margin-top: 14px;" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Spicy seasoned seafood noodles</h5>
                    <p class="card-text">Rp. 43.000</p>
                </div>
                <div class="card-footer text-warning text-bg-warning bg-opacity-25">
                    <img src="img/icon/line.svg" alt="" class="me-2">
                    Edit dish
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="height: 300px;">
                <img src="img/content/food-5.png" class="card-img-top" style="margin-top: 14px;" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Spicy seasoned seafood noodles</h5>
                    <p class="card-text">Rp. 43.000</p>
                </div>
                <div class="card-footer text-warning text-bg-warning bg-opacity-25">
                    <img src="img/icon/line.svg" alt="" class="me-2">
                    Edit dish
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="height: 300px;">
                <img src="img/content/food.png" class="card-img-top" style="margin-top: 14px;" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Spicy seasoned seafood noodles</h5>
                    <p class="card-text">Rp. 43.000</p>
                </div>
                <div class="card-footer text-warning text-bg-warning bg-opacity-25">
                    <img src="img/icon/line.svg" alt="" class="me-2">
                    Edit dish
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
