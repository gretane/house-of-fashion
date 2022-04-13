<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$outfit->type}}-{{$outfit->outfitDesigner->surname}}</title>
</head>
<body>
    <section>
    <h2>House Of Fashion</h2>
    </section>
    <hr>
    <section>
        <article>
            <h3> {{$outfit->type}} by {{$outfit->outfitDesigner->name}} {{$outfit->outfitDesigner->surname}}</h3>
            <p><b>Color: </b>{{$outfit->color}}</p>
            <p><b>Size: </b>{{$outfit->size}}</p>
            <p><b>About: </b>{{$outfit->about}}</p>
        </article>
    </section>
</body>
</html>