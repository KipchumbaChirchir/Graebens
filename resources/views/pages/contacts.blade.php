@extends('layouts.graebens')
@section('title')
    Contacts
@endsection
@section('content')
    <nav aria-label="Branches" class="bg-light">
        <ol class="breadcrumb p-4">
            <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('Default') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('Contact') }}">Our Contacts</a></li>
        </ol>
    </nav>
    <div class="container">
        <div class="row d-flex">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
                <form method="post" action="">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <input type="text" name="first_name" value="" class="form-control form-control-md" placeholder="First Name">
                        </div>
                        <div class="col-md-4 mb-3">
                            <input type="text" name="second_name" value="" class="form-control form-control-md" placeholder="Second Name">
                        </div>
                        <div class="col-md-4 mb-3">
                            <input type="email" name="email" value="" class="form-control form-control-md" placeholder="E-mail">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message">What is  your thought?</label>
                        <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                </form>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3">
                <div id="campus-1">
                    <div class="h6 font-weight-bold">
                        Jamii Villas, Ayany Kibera Drive (H/Office)
                    </div>
                    <div id="opening-hours">
                        <h6>Monday - Friday: <br> 07:00am - 18:00pm</h6>
                        <h6>Saturday: <br> 08:00am - 16:00pm</h6>
                        <h6>Sunday: Closed </h6>
                    </div>
                    <div id="contacts">
                        <div class="h6 font-weight-bold">
                            For inquiries
                        </div>
                        <h6>0715738974</h6>
                    </div>
                    <hr>
                </div>
                <div id="campus-2">
                    <div class="h6 font-weight-bold">
                        Arcade Discounts Ngong Road (Adams Arcade)
                    </div>
                    <div id="opening-hours">
                        <h6>Monday - Friday: <br> 07:00am - 18:00pm</h6>
                        <h6>Saturday: <br> 08:00am - 16:00pm</h6>
                        <h6>Sunday: Closed </h6>
                    </div>
                    <div id="contacts">
                        <div class="h6 font-weight-bold">
                            For inquiries
                        </div>
                        <h6>0715738974</h6>
                    </div>
                    <hr>
                </div>
                <div id="campus-2">
                    <div class="h6 font-weight-bold">
                        Kawangware 56
                    </div>
                    <div id="opening-hours">
                        <h6>Monday - Friday: <br> 07:00am - 18:00pm</h6>
                        <h6>Saturday: <br> 08:00am - 16:00pm</h6>
                        <h6>Sunday: Closed </h6>
                    </div>
                    <div id="contacts">
                        <div class="h6 font-weight-bold">
                            For inquiries
                        </div>
                        <h6>0715738974</h6>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>

@endsection
