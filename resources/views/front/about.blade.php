@extends('layouts.site')
@section('content')

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
        }

        html {
            box-sizing: border-box;
        }

        *, *:before, *:after {
            box-sizing: inherit;
        }

        .column {
            float: left;
            width: 25%;
            margin-bottom: 16px;
            padding: 0 8px;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            margin: 8px;
        }

        .about-section {
            padding: 50px;
            text-align: center;
            background-color: #50a0ed;
            color: white;
        }

        .container {
            padding: 0 16px;
        }

        .container::after, .row::after {
            content: "";
            clear: both;
            display: table;
        }

        .title {
            color: grey;
        }

        .button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
        }

        .button:hover {
            background-color: #555;
        }

        @media screen and (max-width: 650px) {
            .column {
                width: 100%;
                display: block;
            }
        }
    </style>
<br><br>

<div class="about-section">
    <h1>About Us</h1>
    <p>The acceleration of independent sellers in our store is a fascinating story. Much of the growth of sellers in the Amazon Store is due to the success of small and medium businesses.</p>
    <p>Teams around the world invent on behalf of our customers every day to meet their desire for lower prices, better selection, and convenient services. One way we guarantee a wide selection of products is through the 1.7 million small and medium businesses around the world selling on Amazon.com and offering more options for customers.</p>
</div>
    <br><br>
<h2 style="text-align:center">Our Team</h2><br>
<div class="row">
    <div class="column">
        <div class="card">
            <img src="{{asset('assets/images/fake_image.jpg')}}" alt="Jane" style="width:100%">
            <div class="container">
                <h2>Mahmoud Hassouna</h2>
                <p class="title">Full Stack Web Developer</p>
                <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                <p>mahmoud@example.com</p>

            </div>
        </div>
    </div>

    <div class="column">
        <div class="card">
            <img src="{{asset('assets/images/fake_image.jpg')}}" alt="Mike" style="width:100%">
            <div class="container">
                <h2>Yousef zaninn</h2>
                <p class="title">Web Designer</p>
                <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                <p>yousef@example.com</p>

            </div>
        </div>
    </div>

    <div class="column">
        <div class="card">
            <img src="{{asset('assets/images/fake_image.jpg')}}" alt="John" style="width:100%">
            <div class="container">
                <h2>Mohammed Qiraman</h2>
                <p class="title">Ux Ui Designer</p>
                <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                <p>mohammed12@example.com</p>

            </div>
        </div>
    </div>
    <div class="column">
        <div class="card">
            <img src="{{asset('assets/images/fake_image.jpg')}}" alt="John" style="width:100%">
            <div class="container">
                <h2>Mohammed Faraa</h2>
                <p class="title">Data Analyzer</p>
                <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                <p>mohammed3@example.com</p>

            </div>
        </div>
    </div>
</div>

@stop
