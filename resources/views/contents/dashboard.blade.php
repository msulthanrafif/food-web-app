@extends('layouts.main')

@section('header')
    <nav class="navbar navbar-expand-lg navbar-dark border-bottom ms-3">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="pb-0" style="font-size: 28px;">
                        Dashboard
                    </div>
                    <div class="row">
                        <div class="col">Tuesday, 2 Feb 2021</div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
@endsection

@section('content')
    <div class="d-flex flex-row my-3 ms-3">
        <div class="card p-2 me-4" style="width: 250px; height: 200px;">
            <p class="card-text">
            <div class="d-flex flex-column">
                <div class="p-2">
                    <div class="d-flex flex-row">
                        <div class="p-2">
                            <img src="img/icon/coin.svg" alt="">
                        </div>
                        <div class="p-2 text-success-emphasis">+32.40%</div>
                        <div class="p-2 text-success-emphasis"><i class="bi bi-arrow-up-circle-fill"></i></div>
                    </div>
                </div>
                <div class="p-2 fs-2">Rp.151.248.138</div>
                <div class="p-2 text-secondary">Total Revenue</div>
            </div>
            </p>
        </div>
        <div class="card p-2 me-4" style="width: 250px; height: 200px;">
            <p class="card-text">
            <div class="d-flex flex-column">
                <div class="p-2">
                    <div class="d-flex flex-row">
                        <div class="p-2">
                            <img src="img/icon/bookmark.svg" alt="">
                        </div>
                        <div class="p-2
                            text-danger-emphasis">-12.40%</div>
                        <div class="p-2
                            text-danger-emphasis">
                            <i class="bi bi-arrow-down-circle-fill"></i>
                        </div>
                    </div>
                </div>
                <div class="p-2 fs-2">23,456</div>
                <div class="p-2 text-secondary">Total Dish Ordered</div>
            </div>
            </p>
        </div>
        <div class="card p-2 me-4" style="width: 250px; height: 200px;">
            <p class="card-text">
            <div class="d-flex flex-column">
                <div class="p-2">
                    <div class="d-flex flex-row">
                        <div class="p-2">
                            <img src="img/icon/users.svg" alt="">
                        </div>
                        <div class="p-2
                            text-success-emphasis">+2.40%</div>
                        <div class="p-2
                            text-success-emphasis"><i
                                class="bi bi-arrow-up-circle-fill"></i></div>
                    </div>
                </div>
                <div class="p-2 fs-2">1,234</div>
                <div class="p-2 text-secondary">Total Customer</div>
            </div>
            </p>
        </div>
    </div>
    <div class="d-flex flex-row mb-3 ms-3">
        <div class="container-xl rounded-3" style="background-color: #1F1D2B;">
            <header class="p-3 mb-2">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <ul class="nav col-3 col-lg-auto me-lg-auto justify-content-center">
                        <h4>Order Report</h4>
                    </ul>
                    <div class="dropdown">
                        <button class="btn btn-dark btn-outline-light" type="button">
                            <i class="bi bi-sliders me-2"></i>Filter Order
                        </button>
                    </div>
                </div>
            </header>
            <table class="table-dark my-3 mx-3" style="width: 760px;">
                <thead>
                    <tr class="border-bottom">
                        <th class="col">Customer</th>
                        <th class="col-5">Menu</th>
                        <th class="col">Total Payment</th>
                        <th class="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            <img src="img/avatar/avatar.png" alt="">
                            Sofian Hadi
                        </td>
                        <td>Spicy seasoned seafood noodles </td>
                        <td>Rp. 43.000</td>
                        <td><button type="button" class="btn btn-success btn-sm rounded-5" disabled>Completed</button></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            <img src="img/avatar/avatar-2.png" alt="">
                            Kadek
                        </td>
                        <td>Salted Pasta with mushroom sauce </td>
                        <td>Rp. 35.000</td>
                        <td><button type="button" class="btn btn-info btn-sm rounded-5" disabled>Preparing</button></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            <img src="img/avatar/avatar-3.png" alt="">
                            Habil
                        </td>
                        <td>Beef dumpling in hot and sour soup </td>
                        <td>Rp. 65.000</td>
                        <td><button type="button" class="btn btn-warning btn-sm rounded-5" disabled>Pending</button></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            <img src="img/avatar/avatar.png" alt="">
                            Made
                        </td>
                        <td>Hot spicy fried rice with omelet </td>
                        <td>Rp. 43.000</td>
                        <td><button type="button" class="btn btn-success btn-sm rounded-5" disabled>Completed</button></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            <img src="img/avatar/avatar-2.png" alt="">
                            Diah
                        </td>
                        <td>Hot spicy fried rice with omelet </td>
                        <td>Rp. 35.000</td>
                        <td><button type="button" class="btn btn-success btn-sm rounded-5" disabled>Completed</button></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            <img src="img/avatar/avatar-3.png" alt="">
                            Bram
                        </td>
                        <td>Hot spicy fried rice with omelet </td>
                        <td>Rp. 65.000</td>
                        <td><button type="button" class="btn btn-success btn-sm rounded-5" disabled>Completed</button></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('content-2')
    <div class="d-flex flex-column rounded-3 p-3 my-3 mx-3" style="background-color: #1F1D2B; width:372px;">
        <header class="p-3 mb-2 border-bottom">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <ul class="nav col-3 col-lg-auto me-lg-auto justify-content-center">
                    <h4>Most Ordered</h4>
                </ul>
                <div class="dropdown">
                    <button class="btn btn-dark btn-outline-light dropdown-toggle" type="button" data-bs-toggle="dropdown">
                        Today
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">opsi 1</a></li>
                        <li><a class="dropdown-item" href="#">opsi 2</a></li>
                    </ul>
                </div>
            </div>
        </header>

        <table class="table-dark table-sm mb-2">
            <tbody>
                <tr>
                    <td scope="col" rowspan="2" class="align-middle">
                        <img src="img/content/food.png" class="order-img" alt="">
                    </td>
                    <td scope="col">
                        Spicy seasoned seafood noodles
                    </td>
                </tr>
                <tr>
                    <td scope="col" class="text-body-tertiary">
                        200 dishes ordered
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table-dark table-sm mb-2">
            <tbody>
                <tr>
                    <td scope="col" rowspan="2" class="align-middle">
                        <img src="img/content/food-2.png" class="order-img" alt="">
                    </td>
                    <td scope="col">
                        Salted pasta with mushroom sauce
                    </td>
                </tr>
                <tr>
                    <td scope="col" class="text-body-tertiary">
                        120 dishes ordered
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table-dark table-sm mb-2">
            <tbody>
                <tr>
                    <td scope="col" rowspan="2" class="align-middle">
                        <img src="img/content/food-3.png" class="order-img" alt="">
                    </td>
                    <td scope="col">
                        Beef dumpling in hot and sour soup
                    </td>
                </tr>
                <tr>
                    <td scope="col" class="text-body-tertiary">
                        80 dishes ordered
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="d-flex p-2 justify-content-center">
            <button type="button" class="btn btn-outline-warning btn-sm" style="width: 330px;">
                View All
            </button>
        </div>
    </div>

    <div class="d-flex flex-column rounded-3 p-3 my-3 mx-3" style="background-color: #1F1D2B;">
        <header class="p-3 mb-2 border-bottom">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <ul class="nav col-3 col-lg-auto me-lg-auto justify-content-center">
                    <h4>Most Type of Order</h4>
                </ul>
                <div class="dropdown">
                    <button class="btn btn-dark btn-outline-light dropdown-toggle" type="button"
                        data-bs-toggle="dropdown">
                        Today
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">opsi 1</a></li>
                        <li><a class="dropdown-item" href="#">opsi 2</a></li>
                    </ul>
                </div>
            </div>
        </header>
        <div class="p-3 card border-dark" style="width: 330px;">
            <div class="row g-0">
                <div class="col-md-6">
                    <img src="img/icon/circle.svg" class="img-fluid rounded-centre">
                </div>
                <div class="col-md-5">
                    <div class="card-body">
                        <table class="table-dark table-sm mb-2">
                            <tbody>
                                <tr>
                                    <td scope="col" rowspan="2" class="align-middle">
                                        <i class="bi bi-circle-fill text-warning"></i>
                                    </td>
                                    <td scope="col">
                                        Dine In
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="col" class="text-body-tertiary">
                                        200 customers
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="col" rowspan="2" class="align-middle">
                                        <i class="bi bi-circle-fill text-warning"></i>
                                    </td>
                                    <td scope="col">
                                        To go
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="col" class="text-body-tertiary">
                                        122 customers
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="col" rowspan="2" class="align-middle">
                                        <i class="bi bi-circle-fill text-warning"></i>
                                    </td>
                                    <td scope="col">
                                        Delivery
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="col" class="text-body-tertiary">
                                        264 customers
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
