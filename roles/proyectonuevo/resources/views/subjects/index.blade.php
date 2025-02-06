<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-9">
  
  
  <title>MATERIAS</title>
  

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="assets/fonts/icomoon/style.css">
  <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
  <link rel="stylesheet" href="assets/css/jquery-ui.css">
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="assets/fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="assets/css/aos.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>


<body>
    
<div class="container mt-5">
        <div class="text-center">
            <form action="{{ route('subjects.store') }}" method="post">
                @csrf
                <br>
                <br>

                <label for="name"> 
                    Nombre de la materia
                </label>
                <br>
                <input type="text" name="name" id="name" required>
                <br>
                <br>

                <label for="notesid"> 
                    IDNOTA
                </label>
                <br>
                <input type="text" name="notesid" id="notesid" required>
                <br>
              

                
                <button type="submit" class="btn btn-success"> INSCRIBIR MATERIA</button>
            </form>
        </div>
        <div class="mt-5">
            <h2>LISTA DE MATERIAS</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($subjects as $subject)
                        <tr>
                            <td>{{ $subject->name}}</td>
                            <td>{{ $subject->notesid}}</td>
                           
                            
                            <td>
                                <a href="{{ route('subjects.edit', $subject->id) }}" class="btn btn-warning">Editar</a>
                                <form action="{{ route('subjects.destroy', $subject->id) }}" method="post"
                                    style="display: inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    

    

      
                   

       
</body>

</html>