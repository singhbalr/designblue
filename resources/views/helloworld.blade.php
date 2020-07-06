<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.js"></script>
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .flex-body{
                display:flex;
                
            }
            .cardx{
                padding: 51px;
            }
            .wrap{
                flex-wrap: wrap;
            }
            .flex{
                display: flex;
    justify-content: center;
            }
            .center{

            }
        </style>
    </head>
    <body>

            @php
            $index = 22;

            @endphp
            <div class ="flex">
                <div class ="center">
                INSTRUCTORS
                </div>
                <div class = "center">
                Show intructor by <span class ="select">
                <select>
                    <option>A-Z</option>
                    <option>Z-A</option>
                    <option>Ride Rev Recommendation</option>
                    <option>New Instructors</option>

                </select>
                </span>
                </div>
            </div>
            <div class = "flex-body wrap">

            @for($start = 0; $start < $index; $start++)
            <div class = "cardx">
                <img src = "https://media.gettyimages.com/photos/cute-girl-wearing-sweater-picture-id1035964728?s=612x612"></img>
                <div class ="div-button-hide-pure-css">
                
                </div>
            </div>
            @endfor
            <div>
    </body>
</html>
