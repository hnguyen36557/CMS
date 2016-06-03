<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') &mdash; CMS</title>
    <link rel="stylesheet" href="{{ theme('css/frontend.css')  }}">
</head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <a href="/" class="navbar-brand">
                        <img src="{{ theme('images/logo.png') }}" alt="CMS">
                    </a>
                </div>
                <ul class="nav navbar-nav">
                   @include('partitials.navigation')
                </ul>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-md-12">@yield('content')</div>
            </div>
        </div>

    </body>
</html>