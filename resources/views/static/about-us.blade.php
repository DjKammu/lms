@extends('layouts.app')

@section('content')

<div class="about-main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-white"><b>About Us</b></h2>
                <p class="text-white"><b>This sense of identification also means we value and promote seamless interaction with members <br>
                own teams, and ensure the best value is obtained from their event budget.</b></p>
                <a href="{{ route('page','contact-us') }}" class="btn btn-danger">
                Contact us</a>
            </div>
        </div>
    </div>
</div>

<div class="about-1">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3><b>WHO WE ARE</b></h3>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>Our NGO is committed to helping its members reach their goals, to personalizing their event experiences, to providing an innovative environment, and to making a difference.</p>
                <p>This sense of identification also means we value and promote seamless interaction with members’ own teams, and ensure the best value is obtained from their event budget.</p>
                <p>Our  experience at the top of the events business means we have expertise which reaches across a number of sectors, as well as knowledge of specific protocol and local regulations. But we know that things change, and we are constantly striving to adapt and improve.</p>
                <a href="{{ route('page','products') }}" class="btn btn-primary">Our Products</a>
            </div>
            <div class="col-md-6">
                <img src="http://secureservercdn.net/184.168.47.225/3ea.e17.myftpupload.com/wp-content/uploads/2018/01/who-we-are.png?time=1568610328" class="img-fluid">
            </div>
        </div>
    </div>
</div>


<div class="about-2">
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10 text-white text-center">
                <h2><b>WHY CHOOSE US</b></h2>
                <p>The main motto of the Our Organization is to boost up network help system and to provide the financial freedom as well as the time freedom.We believe in the power of the individual, and encourage talents to flourish. As a highly motivated Multinational Enterprise, We have been developing progressive strategies, which unrelentingly create a synergy for the whole Organization.</p>
                <a href="{{ route('page','rewards') }}" class="btn btn-primary">Rewards</a>
            </div>
        </div>
    </div>
</div>

@endsection
