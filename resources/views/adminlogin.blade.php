<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <style>
        .container {
            width: 100%;
            height: 100vh;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            position: relative;
        }
        
        .fiche {
            width: 28%;
            height: 68vh;
            border: 2px solid black;
            position: absolute;
            left: 50%;
            top: 100px;
            transform: translateX(-50%);
            border-radius: 10px;
            backdrop-filter: blur(2px);
            padding: 20px;
        }

        h1 {
            color: black;
            text-align: center;
        }

        .groupe2 {
            margin-top: 30px;
            font-size: 15px;
            font-weight: bold;
            color: black;
        }

        .groupe2 label {
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 3px;
            outline: none;
            border: none;
            background-color: transparent;
            border-bottom: 2px solid black;
        }

        input:focus {
            border-bottom-color: white;
        }

        .oublie a, .link a {
            color: white;
            font-size: 17px;
            text-decoration: none;
            transition: text-decoration 0.3s ease;
        }

        .oublie a:hover, .link a:hover {
            text-decoration: underline;
        }

        .buttonco {
            margin-top: 20px;
        }

        button {
            width: 80%;
            height: 40px;
            border-radius: 10px;
            font-weight: bold;
            font-size: 17px;
            border-color: black;
            background: #8e9eab;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #eef2f3, #8e9eab); 
            background: linear-gradient(to right, #eef2f3, #8e9eab); 
            position: relative;
            top:120px;
            color: black;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: white;
            color: #333;
        }


        .link {
            text-align: center;
            margin-top: 20px;
        }

        i {
            position: absolute;
            right: 10px;
            top: 25px;
        }
    </style>
</head>
<body>
    <form action="{{route('adminlogin.post')}}" method="POST">
    @csrf
    <div class="container">
        <img src="{{asset('images/th2.jpg') }}" alt="Mon image" style="width: 100%; height: 100%; object-fit: cover; position: absolute;">
        
        <div class="fiche">
            <div class="entete">
                <h1>Connexion</h1>
            </div>
            
            <div class="groupe2">
                <label for="name">Nom</label>
                <input type="text" name="username"  id="email" required>
                <i class="fa-solid fa-envelope"></i>
            </div>

            <div class="groupe2">
                <label for="password">Mot De Passe</label>
                <input type="password" name="password" id="password" required>
                <i class="fa-solid fa-lock"></i>
            </div>

            <div class="buttonco">
                <button>Connexion</button>
            </div>
        </div>
    </div>
    </form>

</body>
</html>
