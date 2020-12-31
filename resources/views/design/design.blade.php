<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cynthia Caroline</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('app.css') }}">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
        </script>
    </head>

    <body>
        <div class="container">
            <h1>My Design Portfolio</h1>
            <div class="gallery-design">
                @foreach ($path as $photo)
                    <h4>{{$photo->name}}</h4>
                    <div class="box-design"><img src="{{asset('designProject').'/'.$photo->path}}" ></div>
                @endforeach
                
            </div>
        </div>
    </body>
</html>
