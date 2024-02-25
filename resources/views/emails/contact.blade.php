<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Quelqu'un vous a contacté.</h1>
    <p>Nom: {{ $formData['name'] }}</p>
    <p>Email: {{ $formData['email'] }}</p>
    <p>Objet: {{ $formData['object'] }}</p>
    <p>Message: {{ $formData['message'] }}</p>
</body>
</html>