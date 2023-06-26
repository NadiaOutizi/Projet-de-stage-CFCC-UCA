<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        html, body {
            height: 100%;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
           
        }

        .square {
            width: 300px;
            height: 300px;
            background-color: #f4f4f4;
          text-align: center
           
        }
    </style>
</head>
<body>
   

    <div class="square">
        <!-- Content inside the square -->
        @if (session('success'))
        <div class="alert alert-success" role="alert" style='width:500px;height:200px;'>
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    @endif
    </div>
</body>
</html>
