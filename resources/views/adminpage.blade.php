<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        body{
            width: 100%;
            height: 100vh;
        }
        .container{
            width: 600px;
            height: 420px;
            box-shadow: 0 12px 16px rgba(0, 0, 0, 0.1);
            border-color: 2px solid burlywood;
            position: relative;
            left: 50px;
            top: 80px;
        }
        .mb-3{
            width: 500px;
            height: 80px;
            position: relative;
            top: 50px;
        }
        h1,label{
            font-weight: bold;
            color: cornflowerblue;
        }
        input{
            font-weight: bold;
            padding:5px 10px 5px 5px ;
            border-radius:5px
        }
button {
  padding: 1.3em 3em;
  font-size: 12px;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  font-weight: 500;
  color: #000;
  background-color: #fff;
  border: none;
  border-radius: 45px;
  box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease 0s;
  cursor: pointer;
  outline: none;
  position: relative;
  top: 70px;
  left:70px;
}

button:hover {
  background-color: #23c483;
  box-shadow: 0px 15px 20px rgba(46, 229, 157, 0.4);
  color: #fff;
  transform: translateY(-7px);
}

button:active {
  transform: translateY(-1px);
}
.container1{
    display: flex;
}
.container2{
    position: relative;
    left: 150px;
    top: 80px;
    width: 40%;
    box-shadow: 0 12px 16px rgba(0, 0, 0, 0.1);
    border-color: 2px solid burlywood;
    height: 580px;
   
    color: cornflowerblue;
}
th scope{
    color: cornflowerblue;
}

    </style>
</head>
<body>
    <form action="{{route('salle.store')}}" method="POST">
        @csrf
    <div class="container1">
        <div class="container">
            <H1>Gestion des salles</H1>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Nom_Salle</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="name">
              </div>
              <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Capacite</label>
                <input type="number" class="form-control" id="formGroupExampleInput2" name="capacity">
              </div>
              <!-- From Uiverse.io by cssbuttons-io --> 
    <button> Add
    </button>
        </div>
        <div class="container2">
            <h1>Liste des Salles</h1>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Capacite</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach($salles as $salle)
                  <tr>
                    <td>{{$salle->name}}</td>
                    <td>{{$salle->capacity}}</td>
                    
                    
                  <td>
                  <a href="{{ route('salle.delete', $salle->id) }}" class="btn btn-danger btn-sm">Supprimer</a>
                    

                  </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
    </form>
    
</body>
</html>