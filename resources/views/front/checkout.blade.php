@extends('front.layouts.app')


@section('content')

   <!-- breadcrumb start -->
    <section class="breadcrumb-section small-sec flight-sec pt-0">
        <img src="{{ asset('end-user/assets/images/flights/service-breadcrumb2.jpg') }}" class="bg-img img-fluid blur-up lazyload" alt="">
        <div class="content-bottom">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <nav aria-label="breadcrumb" class="theme-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="flight-booking.html">review</a></li>
                                <li class="breadcrumb-item"><a href="flight-booking-addons.html">addons</a></li>
                                <li class="breadcrumb-item active">payment</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->


    <!-- booking section start -->
    <section class="small-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="review-section">
                        <div class="review_box">
                            <div class="title-top">
                                <h5>payment option</h5>
                            </div>
                            <div class="flight_detail payment-gateway">
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-header" id="h_one">
                                            <div class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#one"
                                                aria-expanded="true" aria-controls="one">
                                                <label for='r_one'>
                                                    <input type='radio' class="radio_animated ms-0" checked id='r_one'
                                                        name='occupation' value='Working' required />
                                                    debit card
                                                </label>
                                            </div>
                                        </div>
                                        <div id="one" class="collapse show" aria-labelledby="h_one"
                                            data-bs-parent="#accordionExample">
                                            <div class="card-body">
                                                <form>
                                                    <div class="form-group">
                                                        <label for="name">name on card</label>
                                                        <input type="text" class="form-control" id="name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="number">card number</label>
                                                        <input type="text" class="form-control" id="number">
                                                        <img src="../assets/images/creditcards.png" alt=""
                                                            class="img-fluid blur-up lazyload">
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-4">
                                                            <label for="month">month</label>
                                                            <select id="month" class="form-control">
                                                                <option selected>Month...</option>
                                                                <option>January</option>
                                                                <option>February</option>
                                                                <option>March</option>
                                                                <option>April</option>
                                                                <option>May</option>
                                                                <option>June</option>
                                                                <option>July</option>
                                                                <option>August</option>
                                                                <option>September</option>
                                                                <option>October</option>
                                                                <option>November</option>
                                                                <option>December</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="year">year</label>
                                                            <select id="year" class="form-control">
                                                                <option selected>Year...</option>
                                                                <option>...</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="cvv">cvv</label>
                                                            <input type="password" maxlength="4" class="form-control"
                                                                id="cvv">
                                                            <img src="../assets/images/cvv.png"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="payment-btn">
                                                        <button type="submit" class="btn btn-solid color1">make
                                                            payment</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="h_two">
                                            <div class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#two"
                                                aria-expanded="true" aria-controls="two">
                                                <label for='r_two'>
                                                    <input type='radio' class="radio_animated ms-0" id='r_two'
                                                        name='occupation' value='Working' required /> credit card
                                                </label>
                                            </div>
                                        </div>
                                        <div id="two" class="collapse" aria-labelledby="h_two"
                                            data-bs-parent="#accordionExample">
                                            <div class="card-body">
                                                <form>
                                                    <div class="form-group">
                                                        <label for="c-name">name on card</label>
                                                        <input type="text" class="form-control" id="c-name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="c-number">card number</label>
                                                        <input type="text" class="form-control" id="c-number">
                                                        <img src="../assets/images/creditcards.png" alt=""
                                                            class="img-fluid blur-up lazyload">
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-4">
                                                            <label for="c-month">month</label>
                                                            <select id="c-month" class="form-control">
                                                                <option selected>Month...</option>
                                                                <option>January</option>
                                                                <option>February</option>
                                                                <option>March</option>
                                                                <option>April</option>
                                                                <option>May</option>
                                                                <option>June</option>
                                                                <option>July</option>
                                                                <option>August</option>
                                                                <option>September</option>
                                                                <option>October</option>
                                                                <option>November</option>
                                                                <option>December</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="c-year">year</label>
                                                            <select id="c-year" class="form-control">
                                                                <option selected>Year...</option>
                                                                <option>...</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="c-cvv">cvv</label>
                                                            <input type="password" class="form-control" maxlength="4"
                                                                id="c-cvv">
                                                            <img src="../assets/images/cvv.png"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="payment-btn">
                                                        <button type="submit" class="btn btn-solid color1">make
                                                            payment</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="h_three">
                                            <div class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#three"
                                                aria-expanded="true" aria-controls="three">
                                                <label for='r_three'>
                                                    <input type='radio' class="radio_animated ms-0" id='r_three'
                                                        name='occupation' value='Working' required /> net banking
                                                </label>
                                            </div>
                                        </div>
                                        <div id="three" class="collapse" aria-labelledby="h_three"
                                            data-bs-parent="#accordionExample">
                                            <div class="card-body">
                                                <form class="wallet-section">
                                                    <h6>select popular banks</h6>
                                                    <div class="row">
                                                        <div class="form-check col-md-6">
                                                            <input class="form-check-input radio_animated" type="radio"
                                                                name="exampleRadios1" id="Radios1" value="option1"
                                                                checked>
                                                            <label class="form-check-label" for="Radios1">
                                                                Industrial & Commercial Bank
                                                            </label>
                                                        </div>
                                                        <div class="form-check col-md-6">
                                                            <input class="form-check-input radio_animated" type="radio"
                                                                name="exampleRadios1" id="Radios2" value="option2">
                                                            <label class="form-check-label" for="Radios2">
                                                                Construction Bank Corp.
                                                            </label>
                                                        </div>
                                                        <div class="form-check col-md-6">
                                                            <input class="form-check-input radio_animated" type="radio"
                                                                name="exampleRadios1" id="Radios3" value="option2">
                                                            <label class="form-check-label" for="Radios3">
                                                                Agricultural Bank
                                                            </label>
                                                        </div>
                                                        <div class="form-check col-md-6">
                                                            <input class="form-check-input radio_animated" type="radio"
                                                                name="exampleRadios1" id="Radios4" value="option2">
                                                            <label class="form-check-label" for="Radios4">
                                                                HSBC Holdings
                                                            </label>
                                                        </div>
                                                        <div class="form-check col-md-6">
                                                            <input class="form-check-input radio_animated" type="radio"
                                                                name="exampleRadios1" id="Radios5" value="option2">
                                                            <label class="form-check-label" for="Radios5">
                                                                Bank of America
                                                            </label>
                                                        </div>
                                                        <div class="form-check col-md-6">
                                                            <input class="form-check-input radio_animated" type="radio"
                                                                name="exampleRadios1" id="Radios6" value="option2">
                                                            <label class="form-check-label" for="Radios6">
                                                                JPMorgan Chase & Co.
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mt-3">
                                                        <label for="net-b">select bank</label>
                                                        <select id="net-b" class="form-control">
                                                            <option selected>Choose Bank...</option>
                                                            <option>...</option>
                                                        </select>
                                                    </div>
                                                    <div class="payment-btn">
                                                        <button type="submit" class="btn btn-solid color1">make
                                                            payment</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="h_four">
                                            <div class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#four"
                                                aria-expanded="true" aria-controls="four">
                                                <label for='r_four'>
                                                    <input type='radio' class="radio_animated ms-0" id='r_four'
                                                        name='occupation' value='Working' required /> my wallet
                                                </label>
                                            </div>
                                        </div>
                                        <div id="four" class="collapse" aria-labelledby="h_four"
                                            data-bs-parent="#accordionExample">
                                            <div class="card-body">
                                                <form class="wallet-section">
                                                    <h6>select your wallet</h6>
                                                    <div class="row">
                                                        <div class="form-check col-md-6">
                                                            <input class="form-check-input radio_animated" type="radio"
                                                                name="exampleRadios2" id="exampleRadios1" value="option1"
                                                                checked>
                                                            <label class="form-check-label" for="exampleRadios1">
                                                                Adyen
                                                            </label>
                                                        </div>
                                                        <div class="form-check col-md-6">
                                                            <input class="form-check-input radio_animated" type="radio"
                                                                name="exampleRadios2" id="exampleRadios2"
                                                                value="option2">
                                                            <label class="form-check-label" for="exampleRadios2">
                                                                Airtel Money
                                                            </label>
                                                        </div>
                                                        <div class="form-check col-md-6">
                                                            <input class="form-check-input radio_animated" type="radio"
                                                                name="exampleRadios2" id="exampleRadios3"
                                                                value="option2">
                                                            <label class="form-check-label" for="exampleRadios3">
                                                                AlliedWallet
                                                            </label>
                                                        </div>
                                                        <div class="form-check col-md-6">
                                                            <input class="form-check-input radio_animated" type="radio"
                                                                name="exampleRadios2" id="exampleRadios4"
                                                                value="option2">
                                                            <label class="form-check-label" for="exampleRadios4">
                                                                Apple Pay
                                                            </label>
                                                        </div>
                                                        <div class="form-check col-md-6">
                                                            <input class="form-check-input radio_animated" type="radio"
                                                                name="exampleRadios2" id="exampleRadios5"
                                                                value="option2">
                                                            <label class="form-check-label" for="exampleRadios5">
                                                                Brinks
                                                            </label>
                                                        </div>
                                                        <div class="form-check col-md-6">
                                                            <input class="form-check-input radio_animated" type="radio"
                                                                name="exampleRadios2" id="exampleRadios6"
                                                                value="option2">
                                                            <label class="form-check-label" for="exampleRadios6">
                                                                CardFree
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="payment-btn">
                                                        <button type="submit" class="btn btn-solid color1">make
                                                            payment</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 res-margin">
                    <div class="sticky-cls-top">
                        <div class="review-section">
                            <div class="review_box">
                                <div class="title-top">
                                    <h5>booking summery</h5>
                                </div>
                                <div class="flight_detail">
                                    <div class="summery_box">
                                        <div class="top-detail">

                                        </div>
                                        <table class="table table-borderless">
                                            <tbody>
                                                <tr>
                                                    <td>flight fare</td>
                                                    <td>$2500</td>
                                                </tr>
                                                <tr class="title">
                                                    <td>additional baggage</td>
                                                </tr>
                                                <tr>
                                                    <td>additional 15kg</td>
                                                    <td>+ $25</td>
                                                </tr>
                                                <tr class="title">
                                                    <td>inflight meals</td>
                                                </tr>
                                                <tr>
                                                    <td>veg meal X (1)</td>
                                                    <td>+ $18</td>
                                                </tr>
                                                <tr>
                                                    <td>non-veg meal X (1)</td>
                                                    <td>+ $18</td>
                                                </tr>
                                                <tr class="title">
                                                    <td>seats</td>
                                                </tr>
                                                <tr>
                                                    <td>seat(10D)</td>
                                                    <td>+ $5</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="grand_total">
                                            <h5>grand total: <span>$2750</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- booking section end -->


    <!-- book now section start -->
    <div class="book-panel">
        <h6 class="mb-0 text">grand total : <span>$2750</span></h6>
        <button type="button" class="btn bottom-btn theme-color">make payment</button>
    </div>
    <!-- book now section end -->


@endsection
