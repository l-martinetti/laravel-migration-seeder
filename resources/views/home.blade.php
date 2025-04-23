<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trains</title>

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css'
        integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=='
        crossorigin='anonymous' />

    <style>
        html {
            overscroll-behavior: none;
        }

        body {
            overflow-y: auto;
        }
    </style>
</head>

<body>
    <header class="bg-primary text-white text-center py-3" style="height: 90px;">
        <h1>I nostri treni</h1>
    </header>

    <main>
        <div class="container my-5">
            <table class="table table-striped border">
                <thead>
                    <tr>
                        <th scope="col">Azienda</th>
                        <th scope="col">Stazione di Partenza</th>
                        <th scope="col">Stazione di Arrivo</th>
                        <th scope="col">Orario Partenza</th>
                        <th scope="col">Orario Arrivo</th>
                        <th scope="col">Codice Treno</th>
                        <th scope="col">In Orario</th>
                        <th scope="col">Cancellato</th>
                        <th scope="col">Numero Carrozze</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trains as $train)
                        <tr>
                            <td>{{ $train->azienda }}</td>
                            <td>{{ $train->stazione_partenza }}</td>
                            <td>{{ $train->stazione_destinazione }}</td>
                            <td>{{ $train->orario_partenza }}</td>
                            <td>{{ $train->orario_arrivo }}</td>
                            <td>{{ $train->codice_treno }}</td>
                            <td>{{ $train->in_orario ? 'Sì' : 'No' }}</td>
                            <td>{{ $train->cancellato ? 'Sì' : 'No' }}</td>
                            <td>{{ $train->carrozze }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>

</body>

</html>
