<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi CRUD Sederhana</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .btn {
            padding: 5px 10px;
            text-decoration: none;
            color: black;
            border: 1px solid #999;
            background-color: #eee;
            cursor: pointer;
        }
        .alert-success {
            color: green;
            margin-bottom: 15px;
            border: 1px solid green;
            padding: 10px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>

    <h2>Aplikasi Data Gebetan</h2>
    <hr>

    @if(session('success'))
        <div class="alert-success">
            {{ session('success') }}
        </div>
    @endif

    @yield('content')

</body>
</html>
