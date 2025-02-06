<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('notes.store')}}" method="post">
        @csrf 
        <br>
        <label for="calification">Ingrese la nota:</label> <br> 
        <input type="number" name="calification" id="calification" > <br>

        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>calification</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($notes as $note)
                <tr>
                    <td>{{ $note->id }}</td>
                    <td>{{ $note->calification }}</td>
                </tr> 
                @endforeach
            </tbody>
        </table>
</body>
</html>