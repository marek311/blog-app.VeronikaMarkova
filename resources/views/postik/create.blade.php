<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="utf-8">
    <title>g </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>
<div>
    <form
        action="/postik"
        method="GET"
        enctype="multipart/form-data">
        @csrf

        <input type="text"
        name="title"
        placeholder="Title...">

    </form>
</div>

</body>

</html>
