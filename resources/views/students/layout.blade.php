
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Management - Laravel</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 900px;
               margin: 40px auto; padding: 0 20px; }
        input { display: block; width: 100%; box-sizing: border-box;
                padding: 10px; margin: 8px 0 16px; }
        button, .btn { padding: 8px 12px; cursor: pointer; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        .success { color: green; }
        .error { color: darkred; }
    </style>
</head>
<body>
    <h1>Student Management System</h1>

    @if (session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif

    @if ($errors->any())
        <div class="error">
            <p>Please correct the following errors:</p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @yield('content')
</body>
</html>
