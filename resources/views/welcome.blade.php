<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

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
        </style>
    </head>
    <body>
        

        <select class="form-control" name="all_data">

            <option>Country Name</option>

            @foreach ($all_data['country_codes'] as $countries_code)
            <option value="{{ $countries_code->country_name }}"> {{ $countries_code->country_name }} </option>
            @endforeach    
            </select>
        @if(!empty($all_data))
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Country Name</th>
                    <th>State</th>
                    <th>Country Code</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                @foreach($all_data['users'] as $country)
                <tr>
                    <td> {{$country->country_name}} </td>
                    <td> {{$country->state}} </td>
                    <td> {{$country->country_code}} </td>
                    <td> {{$country->phone}} </td>
                </tr>
                @endforeach
                </tbody>
        </table>
        @endif
    </body>
</html>
