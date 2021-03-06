@extends('layouts.site')
@section('content')

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        * {
            box-sizing: border-box;
        }

        /* Style inputs */
        input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=email], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=submit] {
            background-color: #24a0ed;
            color: white;
            padding: 12px 20px;
            border: none;
            cursor: pointer;
        }



        /* Style the container/contact section */
        .container1 {
            border-radius: 5px;

            padding: 10px;
        }

        /* Create two columns that float next to eachother */
        .column {
            float: left;
            width: 50%;
            margin-top: 6px;
            padding: 20px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
            .column, input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }
    </style>


<div class="container1">
    <div style="text-align:center">
        <br>
        <h2>Contact Us</h2>
        @include('dashboard.includes.alerts.success')
        @include('dashboard.includes.alerts.errors')
    </div>
    <div class="row">
        <div class="column">
            <img src="{{asset('assets/admin/images/ico/favicon.jpg')}}" style="width:100%">
        </div>
        <div class="column">
            <form action="{{route('user.store')}}" method="post">
                @csrf
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="f_name" placeholder="Your name..">
                @error("f_name")
                <span class="text-danger">{{$message}}</span>
                @enderror
                <br>
                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="l_name" placeholder="Your last name..">
                @error("l_name")
                <span class="text-danger">{{$message}}</span>
                @enderror
                <br>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Your email..">
                @error("email")
                <span class="text-danger">{{$message}}</span>
                @enderror
                <br>
                <label for="subject">Subject</label>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
                @error("subject")
                <span class="text-danger">{{$message}}</span>
                @enderror
<br>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
</div>

@stop
