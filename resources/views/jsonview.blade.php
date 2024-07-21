<!DOCTYPE html>
<html>
<head>
    <title>JSON Content</title>
</head>
<body>
    <h1>JSON Content:</h1>
    @if ($data)
        <pre>{{ print_r($data["makananPokok"][0]['id']) }}</pre>
    @else
        <p>{{ $error }}</p>
    @endif
</body>
</html>
