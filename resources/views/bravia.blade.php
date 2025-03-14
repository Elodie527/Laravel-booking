<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

        @csrf
    <div class="container1">
        <div class="bou1">
        <a href="{{ url('/clients') }}">Home</a>
        <a href="{{ url('/categories') }}">categories</a>
        </div>
        <div class="containerhaut">
            <div class="containerhautgauche">
                    <section>
                        <div class="container">
                            <div class="carousel">
                                <input type="radio" name="slides" checked="checked" id="slide-1">
                                <input type="radio" name="slides" id="slide-2">
                                <input type="radio" name="slides" id="slide-3">
                                <input type="radio" name="slides" id="slide-4">
                                <input type="radio" name="slides" id="slide-5">
                                <input type="radio" name="slides" id="slide-6">
                                <ul class="carousel__slides">
                                    <li class="carousel__slide">
                                        <figure>
                                            <div>
                                                <img src="images/bravia.webp" alt="" style="height: 60vh;">
                                            </div>
                                            <figcaption>
                                                <span class="credit"></span>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li class="carousel__slide">
                                        <figure>
                                            <div>
                                                <img src="images/bravia1.jpg" style="height: 60vh;" alt="">
                                            </div>
                                                                       
                                        </figure>
                                    </li>
                                    <li class="carousel__slide">
                                        <figure>
                                            <div>
                                                <img src="images/bravia2.jpg" alt="" style="height: 60vh;">
                                            </div>
                                        </figure>
                                    </li>
                                    <li class="carousel__slide">
                                        <figure>
                                            <div>
                                                <img src="images/bravia3.jpg" alt="" style="height: 60vh;">
                                            </div>
                                        </figure>
                                    </li>
                                    <li class="carousel__slide">
                                        <figure>
                                            <div>
                                                <img src="images/bravia5.jpg" alt="" style="height: 60vh;">
                                            </div>
                                        </figure>
                                    </li>
                                    <li class="carousel__slide">
                                        <figure>
                                            <div>
                                                <img src="images/bravia1.jpg" alt="" style="height: 60vh;">
                                            </div>
                                        </figure>
                                    </li>
                                </ul>    
                                <ul class="carousel__thumbnails">
                                    <li>
                                        <label for="slide-1"><img src="images/bravia.webp" alt=""></label>
                                    </li>
                                    <li>
                                        <label for="slide-2"><img src="images/bravia1.jpg" alt=""></label>
                                    </li>
                                    <li>
                                        <label for="slide-3"><img src="images/bravia2.jpg" alt=""></label>
                                    </li>
                                    <li>
                                        <label for="slide-4"><img src="images/bravia3.jpg" alt=""></label>
                                    </li>
                                    <li>
                                        <label for="slide-5"><img src="images/bravia5.jpg" alt=""></label>
                                    </li>
                                    <li>
                                        <label for="slide-6"><img src="images/bravia1.jpg" alt=""></label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </section>
            </div>
            <div class="containerhautdroite">
                <div class="ecriture">
                    <span>Nom</span>: Salle Kadiogo<br>
                    <span>Capacité</span>: Environ 200 personnes<br>
                    <span>Equipement</span> : Vidéoprojecteur, sonorisation, microphones, climatisation, connexion Wi-Fi<br>
                    <span>Disposition</span> : Modulable (théâtre, U, classe, banquet)<br>
                    <span>localisation</span> : Hôtel Bravia, Ouagadougou, Burkina Faso<br>
                </div>
                <form class="form">
                <form action="{{ route('reservations.store') }}" method="POST">
                @csrf
                <p class="title">Reservation </p>
                <p class="message">Effectuer votre reservation </p>
                <div class="flex">
                <label>
            <h6>Nom_salle</h6>
                <input required="" placeholder="" type="text" class="input" name="nom_salle">
                <span></span>
            </label>
            <label>
            <h6>Date_reservation</h6>
                <input required="" placeholder="" type="date" class="input" name="reserved_date">
                <span></span>
            </label>

            
        </div>  
            
        <label>
        <input required="" type="time" class="input long-input"  placeholder="Heure_debut"name="start_time" >
            <span>heure_debut</span>
        </label> 
        <label>
        <input required="" type="time" class="input long-input"  placeholder="Heure_fin" name="end_time">
            <span>heure_fin</span>
        </label> 
        
        <button type="submit" class="submit">Réserver</button>
        <p class="signin">Already have an acount ? <a href="#">Signin</a> </p>
        </form>
                </form>
    
                
            </div>
        </div>
        <div class="containerbas">
            <div class="containerbasgauche">
            📍 Adresse :Secteur 4, Avenue Pascal Zagre, Ouagadougou, Burkina Faso <br>
                <br>
            📞 Téléphone :+226 25 49 49 49 <br>
                <br>
            📧 Email :info@braviahotels.com <br>
                <br>
            🌍 Site web :https://www.braviahotels.com <br>
            <br>
            </div>
            <div class="containerbasdroite">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3745.10893528509!2d-1.5192518251177363!3d12.359529787902389!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xe2ebe1ea88d05dd%3A0x992523e21d178d92!2sBravia%20Hotel%20Ouagadougou!5e1!3m2!1sen!2sbf!4v1740684467417!5m2!1sen!2sbf" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
            
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


</body>

<style>
    .container1{
        width: 100%;
        height: 150vh;
    }
    .containerhaut{
        width: 100%;
        height: 65vh;
        display: flex;

    }
    .containerbas{
        width: 100%;
        height: 65vh;
        display: flex;
        
    }
    .containerbasgauche{
        position: relative;
        top: 300px;
        left: 50px;
        font-weight: bold;
    }
    .containerbasdroite{
        position: relative;
        top: 280px;
        right: -250px;
    }
    .containerhautgauche{
        width: 50%;
        height: 60vh;
    }
    .containerhautdroite{
        width: 50%;
        height: 60vh;
    }

    @mixin aspect-ratio($width, $height) {
  position: relative;
    
  &:before {
    display: block;
    content: "";
    width: 100%;
    padding-top: ($height / $width) * 100%;
  }
    
  > img {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
  }
}


section {
    background: #F4F4F4;
    padding: 50px 0;
}

.container {
    max-width: 1044px;
    margin: 0 auto;
    padding: 0 20px;
}

.carousel {
    display: block;
    text-align: left;
    position: relative;
    margin-bottom: 22px;
    
    > input {
        clip: rect(1px, 1px, 1px, 1px);
        clip-path: inset(50%);
        height: 1px;
        width: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        
        &:nth-of-type(6):checked ~ .carousel__slides .carousel__slide:first-of-type { margin-left: -500%; }
        &:nth-of-type(5):checked ~ .carousel__slides .carousel__slide:first-of-type { margin-left: -400%; }
        &:nth-of-type(4):checked ~ .carousel__slides .carousel__slide:first-of-type { margin-left: -300%; }
        &:nth-of-type(3):checked ~ .carousel__slides .carousel__slide:first-of-type { margin-left: -200%; }
        &:nth-of-type(2):checked ~ .carousel__slides .carousel__slide:first-of-type { margin-left: -100%; }
        &:nth-of-type(1):checked ~ .carousel__slides .carousel__slide:first-of-type { margin-left: 0%; }
        
        &:nth-of-type(1):checked ~ .carousel__thumbnails li:nth-of-type(1) { box-shadow: 0px 0px 0px 5px rgba(0,0,255,0.5); }
        &:nth-of-type(2):checked ~ .carousel__thumbnails li:nth-of-type(2) { box-shadow: 0px 0px 0px 5px rgba(0,0,255,0.5); }
        &:nth-of-type(3):checked ~ .carousel__thumbnails li:nth-of-type(3) { box-shadow: 0px 0px 0px 5px rgba(0,0,255,0.5); }
        &:nth-of-type(4):checked ~ .carousel__thumbnails li:nth-of-type(4) { box-shadow: 0px 0px 0px 5px rgba(0,0,255,0.5); }
        &:nth-of-type(5):checked ~ .carousel__thumbnails li:nth-of-type(5) { box-shadow: 0px 0px 0px 5px rgba(0,0,255,0.5); }
        &:nth-of-type(6):checked ~ .carousel__thumbnails li:nth-of-type(6) { box-shadow: 0px 0px 0px 5px rgba(0,0,255,0.5); }
    }
}

.carousel__slides {
    position: relative;
    z-index: 1;
    padding: 0;
    margin: 0;
    overflow: hidden;
    white-space: nowrap;
    box-sizing: border-box;
    display: flex;
    width: 100%;
    height: 70%;
    position: relative;
    bottom: 20px;
}

.carousel__slide {
    position: relative;
    display: block;
    flex: 1 0 100%;
    width: 100%;
    height: 100%;
    overflow: hidden;
    transition: all 300ms ease-out;
    box-sizing: border-box;
    white-space: normal;
    
    figure {
        display: flex;
        margin: 0;
    }
    
    div {

        width: 100%;
    }
    
    img {
        display: block;
        flex: 1 1 auto;
        object-fit: cover;
    }
    
    figcaption {
        align-self: flex-end;
        padding: 20px 20px 0 20px;
        flex: 0 0 auto;
        width: 25%;
        min-width: 150px;
    }
    
    .credit {
        margin-top: 1rem;
        color: rgba(0, 0, 0, 0.5);
        display: block;        
    }
    
    &.scrollable {
        overflow-y: scroll;
    }
}

.carousel__thumbnails {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    
    margin: 0 -10px;
    
    .carousel__slides + & {
        margin-top: 20px;
    }
    
    li {        
        flex: 1 1 auto;
        max-width: calc((100% / 6) - 20px);  
        margin: 0 10px;
        transition: all 300ms ease-in-out;
    }
    
    label {
        display: block;
        
                  
        &:hover,
        &:focus {
            cursor: pointer;
            
            img {
                box-shadow: 0px 0px 0px 1px rgba(0,0,0,0.25);
                transition: all 300ms ease-in-out;
            }
        }
    }
    
    img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
}

/* From Uiverse.io by Yaya12085 */ 
.form {
  display: flex;
  flex-direction: column;
  gap: 10px;
  max-width: 350px;
  background-color: #fff;
  padding: 20px;
  border-radius: 20px;
  position: relative;
  left: 150px;
  top: 50px;
  border: 2px solid rgb(48, 48, 176);
}

.title {
  font-size: 28px;
  color: royalblue;
  font-weight: 600;
  letter-spacing: -1px;
  position: relative;
  display: flex;
  align-items: center;
  padding-left: 30px;
}

.title::before,.title::after {
  position: absolute;
  content: "";
  height: 16px;
  width: 16px;
  border-radius: 50%;
  left: 0px;
  background-color: royalblue;
}

.title::before {
  width: 18px;
  height: 18px;
  background-color: royalblue;
}

.title::after {
  width: 18px;
  height: 18px;
  animation: pulse 1s linear infinite;
}

.message, .signin {
  color: rgba(88, 87, 87, 0.822);
  font-size: 14px;
}

.signin {
  text-align: center;
}

.signin a {
  color: royalblue;
}

.signin a:hover {
  text-decoration: underline royalblue;
}

.flex {
  display: flex;
  width: 100%;
  gap: 6px;
}

.form label {
  position: relative;
}

.form label .input {
  width: 100%;
  padding: 10px 10px 20px 10px;
  outline: 0;
  border: 1px solid rgba(105, 105, 105, 0.397);
  border-radius: 10px;
}

.form label .input + span {
  position: absolute;
  left: 10px;
  top: 15px;
  color: grey;
  font-size: 0.9em;
  cursor: text;
  transition: 0.3s ease;
}

.form label .input:placeholder-shown + span {
  top: 15px;
  font-size: 0.9em;
}

.form label .input:focus + span,.form label .input:valid + span {
  top: 30px;
  font-size: 0.7em;
  font-weight: 600;
}

.form label .input:valid + span {
  color: green;
}

.submit {
  border: none;
  outline: none;
  background-color: royalblue;
  padding: 10px;
  border-radius: 10px;
  color: #fff;
  font-size: 16px;
  transform: .3s ease;
}

.submit:hover {
  background-color: rgb(56, 90, 194);
}

@keyframes pulse {
  from {
    transform: scale(0.9);
    opacity: 1;
  }

  to {
    transform: scale(1.8);
    opacity: 0;
  }
}
.ecriture{
    position: relative;
    top: 40px;
}
.ecriture span{
    font-weight: bold;
    color: cornflowerblue;
}
.bou1 a{
    font-weight:bold;
    color: black;
    font-size:20px;
    text-decoration:none;
    margin:10px
}

</style>
</html>