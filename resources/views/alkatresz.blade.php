    <!DOCTYPE html>
    <html lang="en">
    <head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <meta name="csrf-token" content=<?php $token = csrf_token();
                                    echo $token; ?>>
     <script src="js/alkatreszAjax.js"> </script>   
     <link rel="stylesheet" type="text/css" media="screen" href="css/alkatreszStilus.css" />
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <table class="table table-dark table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Cikkszám</th>
                                <th>Alkatrész neve</th>
                                <th>Ár</th>
                                <th>Raktáron</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody id="alkatresz-table-body">
                        @foreach($alkatreszs as $alkatresz)
                            <tr>
                                <td>{{ $alkatresz->id }}</td>
                                <td>{{ $alkatresz->cikkszam }}</td>
                                <td>{{ $alkatresz-> alkatreszNev}}</td>
                                <td>{{ $alkatresz->ar }}</td>
                                <td>{{ $alkatresz->raktaron }}</td>
                                <td>
                                <button class="delete-button" data-id="{{ $alkatresz->id }}">Törlés</button>
                            </td>
                            </tr>
                            @endforeach

                    
                        </tbody>
                    </table>
    </body>
    </html>