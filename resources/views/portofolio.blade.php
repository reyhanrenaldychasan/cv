@extends('welcome')

@push('css-scripts')
<style>

    .portofolio {
        border-bottom: 2px solid hsl(206, 21%, 33%);
    }

    .portofolio:last-child{
        border-bottom: none;
    }

    .portofolio-img {
        padding-bottom: 20px;
    }

    .portofolio-img .bg-img {
        /* background-image: radial-gradient(#eee, hsl(206, 21%, 23%)); */
    }

    .portofolio-img img{
        /* max-width: 800px; */
        width: 100%;
    }

    .portofolio-desc {
        text-align: justify;
    }

    .portofolio-link {
        text-decoration: none;
        color: hsl(0, 0%, 83%);
    }

    .portofolio-link:hover {
        color: hsl(0, 0%, 73%);
    }

    .portofolio-sub-title {
        display: inline-block;
        font-size: 15px;
        padding: 5px 15px;
        background-color: hsl(206, 21%, 33%)
    }

    /* .portofolio-body {
        display: flex;
        width: 100%;
        flex-wrap: wrap;
    } */

    @media (min-width: 576px) {
        
    }
</style>
@endpush

@section('content')
<div class="container">
    <h1 class="mb-4">Portofolio</h1>

    <div class="portofolio py-4">
        <div class="portofolio-title d-flex flex-wrap">
                <div class="mr-auto">
                    <h2>KicauKu</h2>
                </div>
                <div class="d-flex flex-column justify-content-center">
                    <div class="portofolio-sub-title">Laravel Web | Laravel API</div>
                </div>
        </div>
        <div class="portofolio-body row py-2">
            <div class="portofolio-img col-lg">
                <div class="bg-img">
                    <img src="{{ asset('img/kicauku display.png') }}" alt="" srcset="">
                </div>
            </div>
            <div class="portofolio-desc col-lg">
                <p>In Indonesia, there is a unique competition called "Birdsong
                    Competition" where the participants compete their bird pet in
                    singing, the competition usually requires some kind of ticket to
                    participate. It's quite popular back in 2018.
                </p>
                <p>Kicauku is a mobile application about Birdsong Competition.
                    The app features event listing, create events, ticket booking
                    and much more. This app is divided into two, one for the user
                    that want to participate the events, Kicauku, and one for the
                    user that want to create the events that we acknowledge as
                    "partner", Kicauku Partner. The app for the partner also has a
                    web version.
                </p>
                <p>
                    I wrote all the API that required by the mobile application
                    using laravel. Begin from the authentication, the event listing,
                    CRUD operation for the event, book the ticket, to the transactions
                    of the ticket. I also built the web version of Kicauku Partner
                    with laravel.
                </p>
                <a href="#" class="portofolio-link">https://kicauku-reyhan-rc.herokuapp.com</a>
            </div>
        </div>
    </div>

    <div class="portofolio py-4">
        <div class="portofolio-title">
            <div class="d-flex">
                <div class="mr-auto">
                    <h2>E-slaws</h2>
                </div>
                <div class="d-flex flex-column justify-content-center">
                    <span class="portofolio-sub-title">Laravel Web</span>
                </div>
            </div>
        </div>
        <div class="portofolio-body row py-2">
            <div class="portofolio-img col-lg">
                <div class="bg-img">
                    <img src="{{ asset('img/e-slaws display.png') }}" alt="" srcset="">
                </div>
            </div>
            <div class="portofolio-desc col-lg">
                <p>E-slaws is a web based E-Commerce application trading
                    about fabrics. It was made for a company SlawsText
                    that require an app for trading their fabrics.
                </p>
                <p>E-slaws features product listing, CRUD product, product
                    transaction and much more. Users can buy the
                    fabrics with many available methods. The product unit
                    in E-slaws is in kilograms. Users can choose what fabric color
                    they want to buy.
                </p>
                <p>
                    I built the app with codeigniter to make the front-end
                    and back-end and using midtrans plugin to handle the
                    transaction.
                </p>
                <a href="#" class="portofolio-link">https://e-slaws-reyhan-rc.herokuapp.com</a>
            </div>
        </div>
    </div>
</div>
@endsection