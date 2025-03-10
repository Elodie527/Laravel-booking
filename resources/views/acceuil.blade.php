<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            width: 40%;
            height: 300px;
            background-color: white;
            position: relative;
            left:   30%;
            top: 150px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background: #dbdfed;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #E2E2E2, #C9D6FF);  
        }
        .navbar{
            width: 70%;
            height: 100px;
            position: relative;
            left:  15%;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background: #C9D6FF;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #E2E2E2, #C9D6FF);  
            background: linear-gradient(to right, #E2E2E2, #C9D6FF);


        }
        .navbar h1{
            position: relative;
            left: 8%;

        }
        .navbar h3{
            position: relative;
            left: 30%;

        }
        .container1{
            width: 50%;
            height: 100%;
        }
        .container1 img{
            width: 55%;
            height: 50%;
            position: relative;
            left: 30px;
        }
        .container2 img{
            width: 30%;
            height: 140px;
            position: relative;
            left: 400px;
            bottom: 370px;
        }
        /* From Uiverse.io by mrhyddenn */ 
            /* From Uiverse.io by mrhyddenn */ 
.button {
  -moz-appearance: none;
  -webkit-appearance: none;
  appearance: none;
  border: none;
  background: none;
  color: #0f1923;
  cursor: pointer;
  position: relative;
  left: 60px;
  bottom: 90px;
  padding: 8px;
  margin-bottom: 20px;
  text-transform: uppercase;
  font-weight: bold;
  font-size: 14px;
  transition: all .15s ease;
}

.button::before,
.button::after {
  content: '';
  display: block;
  position: absolute;
  right: 0;
  left: 0;
  height: calc(50% - 5px);
  border: 1px solid #7D8082;
  transition: all .15s ease;
}

.button::before {
  top: 0;
  border-bottom-width: 0;
}

.button::after {
  bottom: 0;
  border-top-width: 0;
}

.button:active,
.button:focus {
  outline: none;
}

.button:active::before,
.button:active::after {
  right: 3px;
  left: 3px;
}

.button:active::before {
  top: 3px;
}

.button:active::after {
  bottom: 3px;
}

.button_lg {
  position: relative;
  display: block;
  padding: 10px 20px;
  color: #fff;
  background-color: #0f1923;
  overflow: hidden;
  box-shadow: inset 0px 0px 0px 1px transparent;
}

.button_lg::before {
  content: '';
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 2px;
  height: 2px;
  background-color: #0f1923;
}

.button_lg::after {
  content: '';
  display: block;
  position: absolute;
  right: 0;
  bottom: 0;
  width: 4px;
  height: 4px;
  background-color: #0f1923;
  transition: all .2s ease;
}

.button_sl {
  display: block;
  position: absolute;
  top: 0;
  bottom: -1px;
  left: -8px;
  width: 0;
  background: #11998e;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #38ef7d, #11998e);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #38ef7d, #11998e); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

  transform: skew(-15deg);
  transition: all .2s ease;
}

.button_text {
  position: relative;
}

.button:hover {
  color: #0f1923;
}

.button:hover .button_sl {
  width: calc(100% + 15px);
}

.button:hover .button_lg::after {
  background-color: #fff;
}
.container2 button{
    position: relative;
    left: 250px;
    bottom: 260px;
}

    </style>
</head>
<body>
    <div class="navbar">
        <H1>Bienvenu sur votre Site de reservations de salles de Conference</H1>
        <h3>Gerer la reservation de vos salles a distance</h3>
        
    </div>
    <div class="container">
        <div class="container1">
        <img src="{{ asset('images/admin.jpg') }}" alt="Admin Image">
        </div>
        <div class="button1">
        <a href="{{url('/adminlogin')}}">
            <button class="button">
                <span class="button_lg">
                    <span class="button_sl"></span>
                    <span class="button_text">Admin</span>
                </span>
                </button>
            </a>
        </div>
        <div class="container2">
        <img src="{{ asset('images/clients.jpg') }}" alt="Mon image">
        <a href="{{url('/clients')}}">
            <button class="button">
                <span class="button_lg">
                    <span class="button_sl"></span>
                    <span class="button_text"> Clients </span>
                </span>
                </button>
            </a>
        </div>
        
    </div>
</body>
</html>