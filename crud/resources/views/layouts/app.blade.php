<html>
<head>
    <title>Tugas CRUD</title>
</head>
<body>
    <h1>Aplikasi Data Gebetan</h1>
    <hr>
    @if(session('success'))
        <p style="color: blue;"><i>Pesan: {{ session('success') }}</i></p>
    @endif
    @yield('content')
</body>
</html>
