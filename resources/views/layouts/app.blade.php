<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Laravel Dropdown Routes</title>
    <!-- Add your CSS and JS files here -->
</head>
<body>
    <div>
        @php
            $routes = [
                'pdf name' => route('pdf_form2'),
                'dfa 2' => route('pdf_form3'),
                'fdafd 3' => route('pdf_form4'),
                'af 4' => route('pdf_form5'),
            ];
        @endphp

        <select id="routeDropdown" onchange="location = this.value;">
            <option value="" disabled selected>Select a route</option>
            @foreach($routes as $name => $url)
                <option value="{{ $url }}">{{ $name }}</option>
            @endforeach
        </select>
    </div>

    <div>
        @yield('content')
    </div>
</body>
</html>
