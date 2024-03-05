<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web application</title>
</head>
<body>
    <div class="container">
        <h1>Edit Contact</h1>
        <br>
        <form action="{{route('update', $contact->id) }}" method="POST">
            @method('PUT')
            @include('contact.partials.form', ['contact' => $contact])
      </form>
      <x-Alert>
        <!-- Pode enviar valor para o component criado (Alert) -->
      </x-Alert>
      
    </div>
</body>
</html>
