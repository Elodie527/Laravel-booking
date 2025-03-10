<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Vidéo Cours</title>
</head>
<body>
    <div class="container">
    <a href="{{ url('/clients') }}" class="btn btn-danger btn-sm">Home</a>
        <hr>
    <h1>Salles Des Conferences</h1>
    <hr>
    <h3>Recherche par date</h3>
    <div class="filtrage">
    <nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="date" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
    </div>
        <section class="videos">
            <div class="video-card">
                <img src="{{ asset('images/bravia.webp') }}" alt="" srcset="" style="width: 100%; height: 210px;">
                <h3>Salle 1 : Salle de Conference <br> hotel Bravia</h3>
                <div class="boutonbas">
                    <div class="boutonbas1">
                    </div>
                    <div class="boutonbas2">
                    <button>
                <svg
                height="24"
                width="24"
                viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
  >
            <path d="M0 0h24v24H0z" fill="none"></path>
            <path
            d="M5 13c0-5.088 2.903-9.436 7-11.182C16.097 3.564 19 7.912 19 13c0 .823-.076 1.626-.22 2.403l1.94 1.832a.5.5 0 0 1 .095.603l-2.495 4.575a.5.5 0 0 1-.793.114l-2.234-2.234a1 1 0 0 0-.707-.293H9.414a1 1 0 0 0-.707.293l-2.234 2.234a.5.5 0 0 1-.793-.114l-2.495-4.575a.5.5 0 0 1 .095-.603l1.94-1.832C5.077 14.626 5 13.823 5 13zm1.476 6.696l.817-.817A3 3 0 0 1 9.414 18h5.172a3 3 0 0 1 2.121.879l.817.817.982-1.8-1.1-1.04a2 2 0 0 1-.593-1.82c.124-.664.187-1.345.187-2.036 0-3.87-1.995-7.3-5-8.96C8.995 5.7 7 9.13 7 13c0 .691.063 1.372.187 2.037a2 2 0 0 1-.593 1.82l-1.1 1.039.982 1.8zM12 13a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"
            fill="currentColor"
            ></path>
            </svg>
            <a href="{{ url('/bravia') }}">Reserver</a>
            </button>

                    </div>
                </div>  
            
            </div>

            <div class="video-card">
            <img src="{{ asset('images/enaref.jpg') }}" alt="" srcset="" style="width: 100%; height: 210px;">
                <h3>Salle 2 : Salle de Conference Enaref</h3>
                <div class="boutonbas">
                    <div class="boutonbas1">
                    </div>
                    <div class="boutonbas2">
                    <button>
                <svg
                height="24"
                width="24"
                viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
  >
            <path d="M0 0h24v24H0z" fill="none"></path>
            <path
            d="M5 13c0-5.088 2.903-9.436 7-11.182C16.097 3.564 19 7.912 19 13c0 .823-.076 1.626-.22 2.403l1.94 1.832a.5.5 0 0 1 .095.603l-2.495 4.575a.5.5 0 0 1-.793.114l-2.234-2.234a1 1 0 0 0-.707-.293H9.414a1 1 0 0 0-.707.293l-2.234 2.234a.5.5 0 0 1-.793-.114l-2.495-4.575a.5.5 0 0 1 .095-.603l1.94-1.832C5.077 14.626 5 13.823 5 13zm1.476 6.696l.817-.817A3 3 0 0 1 9.414 18h5.172a3 3 0 0 1 2.121.879l.817.817.982-1.8-1.1-1.04a2 2 0 0 1-.593-1.82c.124-.664.187-1.345.187-2.036 0-3.87-1.995-7.3-5-8.96C8.995 5.7 7 9.13 7 13c0 .691.063 1.372.187 2.037a2 2 0 0 1-.593 1.82l-1.1 1.039.982 1.8zM12 13a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"
            fill="currentColor"
            ></path>
            </svg>
            <a href="{{ url('/enaref') }}">Reserver</a>
            </button>

                    </div>
                </div>  
            </div>

            <div class="video-card">
            <img src="{{ asset('images/laico.jpg') }}" alt="" srcset="" style="width: 100%; height: 210px;">
                <h3>Salle 3 : Salle de Conference : Hotel Laico</h3>
                <div class="boutonbas">
                    <div class="boutonbas1">
                    </div>
                    <div class="boutonbas2">
                    <button>
                <svg
                height="24"
                width="24"
                viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M0 0h24v24H0z" fill="none"></path>
            <path
            d="M5 13c0-5.088 2.903-9.436 7-11.182C16.097 3.564 19 7.912 19 13c0 .823-.076 1.626-.22 2.403l1.94 1.832a.5.5 0 0 1 .095.603l-2.495 4.575a.5.5 0 0 1-.793.114l-2.234-2.234a1 1 0 0 0-.707-.293H9.414a1 1 0 0 0-.707.293l-2.234 2.234a.5.5 0 0 1-.793-.114l-2.495-4.575a.5.5 0 0 1 .095-.603l1.94-1.832C5.077 14.626 5 13.823 5 13zm1.476 6.696l.817-.817A3 3 0 0 1 9.414 18h5.172a3 3 0 0 1 2.121.879l.817.817.982-1.8-1.1-1.04a2 2 0 0 1-.593-1.82c.124-.664.187-1.345.187-2.036 0-3.87-1.995-7.3-5-8.96C8.995 5.7 7 9.13 7 13c0 .691.063 1.372.187 2.037a2 2 0 0 1-.593 1.82l-1.1 1.039.982 1.8zM12 13a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"
            fill="currentColor"
            ></path>
            </svg>
            <a href="{{ url('/laico') }}">Reserver</a>
            </button>

                    </div>
                </div>  
            </div>

            <div class="video-card">
            <img src="{{ asset('images/sport.jpg') }}" alt="" srcset="" style="width: 100%; height: 210px;">
                <h3>salle 4 : Palais Des Sports de Ouaga2000</h3>
                <div class="boutonbas">
                    <div class="boutonbas1">
                    </div>
                    <div class="boutonbas2">
                    <button>
                <svg
                height="24"
                width="24"
                viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
  >
            <path d="M0 0h24v24H0z" fill="none"></path>
            <path
            d="M5 13c0-5.088 2.903-9.436 7-11.182C16.097 3.564 19 7.912 19 13c0 .823-.076 1.626-.22 2.403l1.94 1.832a.5.5 0 0 1 .095.603l-2.495 4.575a.5.5 0 0 1-.793.114l-2.234-2.234a1 1 0 0 0-.707-.293H9.414a1 1 0 0 0-.707.293l-2.234 2.234a.5.5 0 0 1-.793-.114l-2.495-4.575a.5.5 0 0 1 .095-.603l1.94-1.832C5.077 14.626 5 13.823 5 13zm1.476 6.696l.817-.817A3 3 0 0 1 9.414 18h5.172a3 3 0 0 1 2.121.879l.817.817.982-1.8-1.1-1.04a2 2 0 0 1-.593-1.82c.124-.664.187-1.345.187-2.036 0-3.87-1.995-7.3-5-8.96C8.995 5.7 7 9.13 7 13c0 .691.063 1.372.187 2.037a2 2 0 0 1-.593 1.82l-1.1 1.039.982 1.8zM12 13a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"
            fill="currentColor"
            ></path>
            </svg>
            <a href="{{ url('/palaisdessports') }}">Reserver</a>
            </button>

                    </div>
                </div>  
            </div>

            <div class="video-card">
            <img src="{{ asset('images/rb.jpeg') }}" alt="" srcset="" style="width: 100%; height: 210px;">
                <h3>Salle5 5 : Salle de Conference Royal Beach</h3>
                <div class="boutonbas">
                    <div class="boutonbas1">
                    </div>
                    <div class="boutonbas2">
                    <button>
                <svg
                height="24"
                width="24"
                viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
  >
            <path d="M0 0h24v24H0z" fill="none"></path>
            <path
            d="M5 13c0-5.088 2.903-9.436 7-11.182C16.097 3.564 19 7.912 19 13c0 .823-.076 1.626-.22 2.403l1.94 1.832a.5.5 0 0 1 .095.603l-2.495 4.575a.5.5 0 0 1-.793.114l-2.234-2.234a1 1 0 0 0-.707-.293H9.414a1 1 0 0 0-.707.293l-2.234 2.234a.5.5 0 0 1-.793-.114l-2.495-4.575a.5.5 0 0 1 .095-.603l1.94-1.832C5.077 14.626 5 13.823 5 13zm1.476 6.696l.817-.817A3 3 0 0 1 9.414 18h5.172a3 3 0 0 1 2.121.879l.817.817.982-1.8-1.1-1.04a2 2 0 0 1-.593-1.82c.124-.664.187-1.345.187-2.036 0-3.87-1.995-7.3-5-8.96C8.995 5.7 7 9.13 7 13c0 .691.063 1.372.187 2.037a2 2 0 0 1-.593 1.82l-1.1 1.039.982 1.8zM12 13a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"
            fill="currentColor"
            ></path>
            </svg>
            <a href="{{ url('/rb') }}">Reserver</a>
            </button>

                    </div>
                </div> 
                
            </div>

            <div class="video-card">
            <img src="{{ asset('images/silmande.jpg') }}" alt="" srcset="" style="width: 100%; height: 210px;">
                <h3>Salle 6 : Salle De Conference Hotel Silmande</h3>
                <div class="boutonbas">
                    <div class="boutonbas1">
                    </div>
                    <div class="boutonbas2">
                    <button>
                <svg
                height="24"
                width="24"
                viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
  >
            <path d="M0 0h24v24H0z" fill="none"></path>
            <path
            d="M5 13c0-5.088 2.903-9.436 7-11.182C16.097 3.564 19 7.912 19 13c0 .823-.076 1.626-.22 2.403l1.94 1.832a.5.5 0 0 1 .095.603l-2.495 4.575a.5.5 0 0 1-.793.114l-2.234-2.234a1 1 0 0 0-.707-.293H9.414a1 1 0 0 0-.707.293l-2.234 2.234a.5.5 0 0 1-.793-.114l-2.495-4.575a.5.5 0 0 1 .095-.603l1.94-1.832C5.077 14.626 5 13.823 5 13zm1.476 6.696l.817-.817A3 3 0 0 1 9.414 18h5.172a3 3 0 0 1 2.121.879l.817.817.982-1.8-1.1-1.04a2 2 0 0 1-.593-1.82c.124-.664.187-1.345.187-2.036 0-3.87-1.995-7.3-5-8.96C8.995 5.7 7 9.13 7 13c0 .691.063 1.372.187 2.037a2 2 0 0 1-.593 1.82l-1.1 1.039.982 1.8zM12 13a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"
            fill="currentColor"
            ></path>
            </svg>
            <a href="{{ url('/silmande') }}">Reserver</a>
            </button>

                    </div>
                </div> 
            </div>

            <div class="video-card">
            <img src="{{ asset('images/banquet.jpg') }}" alt="" srcset="" style="width: 100%; height: 210px;">
                <h3>Salle 7 : Salle de Conference Des banquets de Ouaga 2000</h3>
                <div class="boutonbas">
                    <div class="boutonbas1">
                    </div>
                    <div class="boutonbas2">
                    <button>
                <svg
                height="24"
                width="24"
                viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
  >
            <path d="M0 0h24v24H0z" fill="none"></path>
            <path
            d="M5 13c0-5.088 2.903-9.436 7-11.182C16.097 3.564 19 7.912 19 13c0 .823-.076 1.626-.22 2.403l1.94 1.832a.5.5 0 0 1 .095.603l-2.495 4.575a.5.5 0 0 1-.793.114l-2.234-2.234a1 1 0 0 0-.707-.293H9.414a1 1 0 0 0-.707.293l-2.234 2.234a.5.5 0 0 1-.793-.114l-2.495-4.575a.5.5 0 0 1 .095-.603l1.94-1.832C5.077 14.626 5 13.823 5 13zm1.476 6.696l.817-.817A3 3 0 0 1 9.414 18h5.172a3 3 0 0 1 2.121.879l.817.817.982-1.8-1.1-1.04a2 2 0 0 1-.593-1.82c.124-.664.187-1.345.187-2.036 0-3.87-1.995-7.3-5-8.96C8.995 5.7 7 9.13 7 13c0 .691.063 1.372.187 2.037a2 2 0 0 1-.593 1.82l-1.1 1.039.982 1.8zM12 13a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"
            fill="currentColor"
            ></path>
            </svg>
            <a href="{{ url('/banquet') }}">Reserver</a>
            </button>

                    </div>
                </div> 
                
            </div>
            <div class="video-card">
            <img src="{{ asset('images/conference.jpg') }}" alt="" srcset="" style="width: 100%; height: 210px;">
                <h3>Salle 8 : Salles des Conferences De Ouagadougou</h3>
                <div class="boutonbas">
                    <div class="boutonbas1">
                    </div>
                    <div class="boutonbas2">
                    <button>
                <svg
                height="24"
                width="24"
                viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
  >
            <path d="M0 0h24v24H0z" fill="none"></path>
            <path
            d="M5 13c0-5.088 2.903-9.436 7-11.182C16.097 3.564 19 7.912 19 13c0 .823-.076 1.626-.22 2.403l1.94 1.832a.5.5 0 0 1 .095.603l-2.495 4.575a.5.5 0 0 1-.793.114l-2.234-2.234a1 1 0 0 0-.707-.293H9.414a1 1 0 0 0-.707.293l-2.234 2.234a.5.5 0 0 1-.793-.114l-2.495-4.575a.5.5 0 0 1 .095-.603l1.94-1.832C5.077 14.626 5 13.823 5 13zm1.476 6.696l.817-.817A3 3 0 0 1 9.414 18h5.172a3 3 0 0 1 2.121.879l.817.817.982-1.8-1.1-1.04a2 2 0 0 1-.593-1.82c.124-.664.187-1.345.187-2.036 0-3.87-1.995-7.3-5-8.96C8.995 5.7 7 9.13 7 13c0 .691.063 1.372.187 2.037a2 2 0 0 1-.593 1.82l-1.1 1.039.982 1.8zM12 13a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"
            fill="currentColor"
            ></path>
            </svg>
            <a href="{{ url('/conference') }}">Reserver</a>
            </button>

                    </div>
                </div> 
                
            </div>
            <div class="video-card">
            <img src="{{ asset('images/palace.jpg') }}" alt="" srcset="" style="width: 100%; height: 210px;">
                <h3>Salle 9 : Salle de conference de Palace Hotel</h3>
                <div class="boutonbas">
                    <div class="boutonbas1">
                    </div>
                    <div class="boutonbas2">
                    <button>
                <svg
                height="24"
                width="24"
                viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
  >
            <path d="M0 0h24v24H0z" fill="none"></path>
            <path
            d="M5 13c0-5.088 2.903-9.436 7-11.182C16.097 3.564 19 7.912 19 13c0 .823-.076 1.626-.22 2.403l1.94 1.832a.5.5 0 0 1 .095.603l-2.495 4.575a.5.5 0 0 1-.793.114l-2.234-2.234a1 1 0 0 0-.707-.293H9.414a1 1 0 0 0-.707.293l-2.234 2.234a.5.5 0 0 1-.793-.114l-2.495-4.575a.5.5 0 0 1 .095-.603l1.94-1.832C5.077 14.626 5 13.823 5 13zm1.476 6.696l.817-.817A3 3 0 0 1 9.414 18h5.172a3 3 0 0 1 2.121.879l.817.817.982-1.8-1.1-1.04a2 2 0 0 1-.593-1.82c.124-.664.187-1.345.187-2.036 0-3.87-1.995-7.3-5-8.96C8.995 5.7 7 9.13 7 13c0 .691.063 1.372.187 2.037a2 2 0 0 1-.593 1.82l-1.1 1.039.982 1.8zM12 13a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"
            fill="currentColor"
            ></path>
            </svg>
            <a href="{{ url('/palace') }}">Reserver</a>
            </button>

                    </div>
                </div> 

            </div>
            <div class="video-card">
            <img src="{{ asset('images/unz.jpg') }}" alt="" srcset="" style="width: 100%; height: 210px;">
                <h3>Salle 10 : Salle de Conference d'UNZ de Koudougou</h3>
                <div class="boutonbas">
                    <div class="boutonbas1">
                    </div>
                    <div class="boutonbas2">
                    <button>
                <svg
                height="24"
                width="24"
                viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
  >
            <path d="M0 0h24v24H0z" fill="none"></path>
            <path
            d="M5 13c0-5.088 2.903-9.436 7-11.182C16.097 3.564 19 7.912 19 13c0 .823-.076 1.626-.22 2.403l1.94 1.832a.5.5 0 0 1 .095.603l-2.495 4.575a.5.5 0 0 1-.793.114l-2.234-2.234a1 1 0 0 0-.707-.293H9.414a1 1 0 0 0-.707.293l-2.234 2.234a.5.5 0 0 1-.793-.114l-2.495-4.575a.5.5 0 0 1 .095-.603l1.94-1.832C5.077 14.626 5 13.823 5 13zm1.476 6.696l.817-.817A3 3 0 0 1 9.414 18h5.172a3 3 0 0 1 2.121.879l.817.817.982-1.8-1.1-1.04a2 2 0 0 1-.593-1.82c.124-.664.187-1.345.187-2.036 0-3.87-1.995-7.3-5-8.96C8.995 5.7 7 9.13 7 13c0 .691.063 1.372.187 2.037a2 2 0 0 1-.593 1.82l-1.1 1.039.982 1.8zM12 13a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"
            fill="currentColor"
            ></path>
            </svg>
            <a href="{{ url('/unz') }}">Reserver</a>
            </button>

                    </div>
                </div> 
            </div>
            <div class="video-card">
            <img src="{{ asset('images/polyvalente.jpg') }}" alt="" srcset="" style="width: 100%; height: 210px;">
                <h3>Salle  11 : Salle Polyvalente de Tenkodogo</h3>
                <div class="boutonbas">
                    <div class="boutonbas1">
                    </div>
                    <div class="boutonbas2">
                    <button>
                <svg
                height="24"
                width="24"
                viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
  >
            <path d="M0 0h24v24H0z" fill="none"></path>
            <path
            d="M5 13c0-5.088 2.903-9.436 7-11.182C16.097 3.564 19 7.912 19 13c0 .823-.076 1.626-.22 2.403l1.94 1.832a.5.5 0 0 1 .095.603l-2.495 4.575a.5.5 0 0 1-.793.114l-2.234-2.234a1 1 0 0 0-.707-.293H9.414a1 1 0 0 0-.707.293l-2.234 2.234a.5.5 0 0 1-.793-.114l-2.495-4.575a.5.5 0 0 1 .095-.603l1.94-1.832C5.077 14.626 5 13.823 5 13zm1.476 6.696l.817-.817A3 3 0 0 1 9.414 18h5.172a3 3 0 0 1 2.121.879l.817.817.982-1.8-1.1-1.04a2 2 0 0 1-.593-1.82c.124-.664.187-1.345.187-2.036 0-3.87-1.995-7.3-5-8.96C8.995 5.7 7 9.13 7 13c0 .691.063 1.372.187 2.037a2 2 0 0 1-.593 1.82l-1.1 1.039.982 1.8zM12 13a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"
            fill="currentColor"
            ></path>
            </svg>
            <a href="{{ url('/polyvalente') }}">Reserver</a>
            </button>

                    </div>
                </div> 
            </div>
            <div class="video-card">
            <img src="{{ asset('images/yelba.jpg') }}" alt="" srcset="" style="width: 100%; height: 210px;">
                <h3>Cours 12 : salle de conference Yelba de Ziniare</h3>
                <div class="boutonbas">
                    <div class="boutonbas1">
                    </div>
                    <div class="boutonbas2">
                    <button>
                <svg
                height="24"
                width="24"
                viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
  >
            <path d="M0 0h24v24H0z" fill="none"></path>
            <path
            d="M5 13c0-5.088 2.903-9.436 7-11.182C16.097 3.564 19 7.912 19 13c0 .823-.076 1.626-.22 2.403l1.94 1.832a.5.5 0 0 1 .095.603l-2.495 4.575a.5.5 0 0 1-.793.114l-2.234-2.234a1 1 0 0 0-.707-.293H9.414a1 1 0 0 0-.707.293l-2.234 2.234a.5.5 0 0 1-.793-.114l-2.495-4.575a.5.5 0 0 1 .095-.603l1.94-1.832C5.077 14.626 5 13.823 5 13zm1.476 6.696l.817-.817A3 3 0 0 1 9.414 18h5.172a3 3 0 0 1 2.121.879l.817.817.982-1.8-1.1-1.04a2 2 0 0 1-.593-1.82c.124-.664.187-1.345.187-2.036 0-3.87-1.995-7.3-5-8.96C8.995 5.7 7 9.13 7 13c0 .691.063 1.372.187 2.037a2 2 0 0 1-.593 1.82l-1.1 1.039.982 1.8zM12 13a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"
            fill="currentColor"
            ></path>
            </svg>
            <a href="{{ url('/yelba') }}">Reserver</a>
            </button>

                    </div>
                </div> 
                
            </div>
            <div class="video-card">
            <img src="{{ asset('images/grandhotel.jpg') }}" alt="" srcset="" style="width: 100%; height: 210px;">
                <h3>Salle 13 : Salle de Conférence du Grand Hôtel</h3>
                <div class="boutonbas">
                    <div class="boutonbas1">
                    </div>
                    <div class="boutonbas2">
                    <button>
                <svg
                height="24"
                width="24"
                viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
  >
            <path d="M0 0h24v24H0z" fill="none"></path>
            <path
            d="M5 13c0-5.088 2.903-9.436 7-11.182C16.097 3.564 19 7.912 19 13c0 .823-.076 1.626-.22 2.403l1.94 1.832a.5.5 0 0 1 .095.603l-2.495 4.575a.5.5 0 0 1-.793.114l-2.234-2.234a1 1 0 0 0-.707-.293H9.414a1 1 0 0 0-.707.293l-2.234 2.234a.5.5 0 0 1-.793-.114l-2.495-4.575a.5.5 0 0 1 .095-.603l1.94-1.832C5.077 14.626 5 13.823 5 13zm1.476 6.696l.817-.817A3 3 0 0 1 9.414 18h5.172a3 3 0 0 1 2.121.879l.817.817.982-1.8-1.1-1.04a2 2 0 0 1-.593-1.82c.124-.664.187-1.345.187-2.036 0-3.87-1.995-7.3-5-8.96C8.995 5.7 7 9.13 7 13c0 .691.063 1.372.187 2.037a2 2 0 0 1-.593 1.82l-1.1 1.039.982 1.8zM12 13a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"
            fill="currentColor"
            ></path>
            </svg>
            <a href="{{ url('/grandhotel') }}">Reserver</a>
            </button>

                    </div>
                </div> 
            </div>
            <div class="video-card">
            <img src="{{ asset('images/business.jpg') }}" alt="" srcset="" style="width: 100%; height: 210px;">
                <h3>Salle 14 : Salle de Conférence du Burkina Business Center</h3>
                <div class="boutonbas">
                    <div class="boutonbas1">
                    </div>
                    <div class="boutonbas2">
                    <button>
                <svg
                height="24"
                width="24"
                viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
  >
            <path d="M0 0h24v24H0z" fill="none"></path>
            <path
            d="M5 13c0-5.088 2.903-9.436 7-11.182C16.097 3.564 19 7.912 19 13c0 .823-.076 1.626-.22 2.403l1.94 1.832a.5.5 0 0 1 .095.603l-2.495 4.575a.5.5 0 0 1-.793.114l-2.234-2.234a1 1 0 0 0-.707-.293H9.414a1 1 0 0 0-.707.293l-2.234 2.234a.5.5 0 0 1-.793-.114l-2.495-4.575a.5.5 0 0 1 .095-.603l1.94-1.832C5.077 14.626 5 13.823 5 13zm1.476 6.696l.817-.817A3 3 0 0 1 9.414 18h5.172a3 3 0 0 1 2.121.879l.817.817.982-1.8-1.1-1.04a2 2 0 0 1-.593-1.82c.124-.664.187-1.345.187-2.036 0-3.87-1.995-7.3-5-8.96C8.995 5.7 7 9.13 7 13c0 .691.063 1.372.187 2.037a2 2 0 0 1-.593 1.82l-1.1 1.039.982 1.8zM12 13a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"
            fill="currentColor"
            ></path>
            </svg>
            <a href="{{ url('/business') }}">Reserver</a>
            </button>

                    </div>
                </div> 
            </div>
            <div class="video-card">
            <img src="{{ asset('images/olympia.jpg') }}" alt="" srcset="" style="width: 100%; height: 210px;">
                <h3>Salle 15 : Salle de Canal Olympia YENNEGA</h3>
                <div class="boutonbas">
                    <div class="boutonbas1">
                    </div>
                    <div class="boutonbas2">
                    <button>
                <svg
                height="24"
                width="24"
                viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
  >
            <path d="M0 0h24v24H0z" fill="none"></path>
            <path
            d="M5 13c0-5.088 2.903-9.436 7-11.182C16.097 3.564 19 7.912 19 13c0 .823-.076 1.626-.22 2.403l1.94 1.832a.5.5 0 0 1 .095.603l-2.495 4.575a.5.5 0 0 1-.793.114l-2.234-2.234a1 1 0 0 0-.707-.293H9.414a1 1 0 0 0-.707.293l-2.234 2.234a.5.5 0 0 1-.793-.114l-2.495-4.575a.5.5 0 0 1 .095-.603l1.94-1.832C5.077 14.626 5 13.823 5 13zm1.476 6.696l.817-.817A3 3 0 0 1 9.414 18h5.172a3 3 0 0 1 2.121.879l.817.817.982-1.8-1.1-1.04a2 2 0 0 1-.593-1.82c.124-.664.187-1.345.187-2.036 0-3.87-1.995-7.3-5-8.96C8.995 5.7 7 9.13 7 13c0 .691.063 1.372.187 2.037a2 2 0 0 1-.593 1.82l-1.1 1.039.982 1.8zM12 13a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"
            fill="currentColor"
            ></path>
            </svg>
            <a href="{{ url('/olympia') }}">Reserver</a>
            </button>

                    </div>
                </div> 
            </div>
        </section>
            <p>&copy; 2024 Videos Courses Plateforme
            </p>
        </footer>
    </div>
    <style>

        
    .contenair{
    height: 100%;
    width: 100%;

.lien a{
    font-weight: bold;
    font-size: 25px;
    position: relative;
    left: 20px;
    top: 20px;
}
}
.cards{
    display: flex;
}
.services>hr{
    transform: translateY(90px);
    width: 100%;
    margin: 30px;
    border: 1.5px solid #782DAF;
}
.services>h1{
    
    text-transform: uppercase;
    color: rgb(117, 6, 117);
    text-align: center;
    margin: 30px;
    bottom: 50px;
}
.card{
    text-align: center;
    transform: translateY(90px);
    height: 350px;
    width: 280px;
    /* border: 2px solid red; */
    background-color: #782DAF;
    border-radius: 25px;
    margin: auto;
}
.top-image{
    text-align: center;
    height: 175px;
    width: 280px;
    border: 2px solid rgb(117, 6, 117);
    border-radius: 25px;
    background-color: white;
    transition: ease-in-out 0.5s;

}
.top-image>h3{
    color: rgb(117, 6, 117);
    font-size: 30px;
    position: relative;
    top: 30px;
}
.card>p{
    color: white;
    font-size: 17px;
    position: relative;
    top: 40px;
}
.top-image:hover{
    height: 100px;
    transition: ease-in-out 0.5s;
}
.head{
    width:100%;
    height: 60px;
    border-top: 4px solid rgb(117, 6, 117);
    border-bottom: 4px solid rgb(117, 6, 117);
    display: flex;
    justify-content: center;
    align-items: center;
    
}

.head h1{
    color: black;
    text-align: center;
    font-size: 3em;
}

.cards {
    display: flex;
    flex-wrap: wrap;
    gap: 20px; 
    justify-content: space-around;
    margin-bottom: 40px; 
}


.card {
    border: 1px solid #ddd;  
    padding: 10px;
    width: 22%; 
    text-align: center;
    margin-bottom: 10px; 
}

section.services {
    margin-top: 20px; 
}

.card .download-btn {
    position: absolute;
    bottom: 10px;
    right: 10px;
    padding: 8px 20px;
    background-color: #fff; 
    backdrop-filter: blur(5px);
    color: black;
    border: none;
    cursor: pointer;
    font-size: 14px;
    border-radius: 5px;
}



.content{
    height: 60px;
    width: 100%;
    right: 100px;
    margin-top:  100px ;
    color:black;
    font-size: 20px;
    border-top: 4px solid rgb(117, 6, 117);
    border-bottom: 4px solid rgb(117, 6, 117);
    display: flex;
    justify-content: center;
    align-items: center;
}

.content p{

    font-size: 2em;
    text-align: center;
    color: black;
    
}


/* down1.html*/
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
    .lien1 a{
    font-size: 20px;
    position: relative;
    right: 150px;
    top: 10px;
}
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    color: #333;
}

.container {
    width: 80%;
    margin: 0 auto;
    max-width: 1200px;
}

header {
    text-align: center;
    padding: 10px;
    height: 70px;
    background-color: rgb(117, 6, 117);
    color: white;
    border-radius: 8px;
    margin-bottom: 20px;
}

header h1 {
    font-size: 36px;
}

header p {
    font-size: 18px;
    margin-top: 10px;
    position: relative;
    bottom: 15px;
}

.videos {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: space-between;
}

.video-card {
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 30%;
    text-align: center;
    padding: 10px;
    position: relative; 
    margin-bottom: 20px;
}

.video-card video {
    width: 100%;
    border-radius: 8px;
    margin-bottom: 10px;
}

.video-card h3 {
    font-size: 20px;
    margin-bottom: 10px;
}

.video-card p {
    font-size: 14px;
    color: #666;
    margin-bottom: 10px;
}
hr{
    color:red;
}

.download-btn:hover {
    background-color: rgb(132, 125, 138);
}

footer {
    text-align: center;
    margin-top: 40px;
    padding: 20px;
    height: 70px;
    background-color: #009688;
    color: white;
    border-radius: 8px;
}

@media screen and (max-width: 768px) {
    .videos {
        flex-direction: column;
        align-items: center;
    }

    .video-card {
        width: 80%;

    }
}
.video-card, .pdf-card {
    margin-bottom: 20px;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 8px;
}



nav ul {
    list-style-type: none;
    margin: 20px 0;
}

nav ul li {
    display: inline;
    margin: 0 15px;
}

nav ul li a {
    color: white;
    text-decoration: none;
    font-weight: bold;
}

nav ul li a:hover {
    text-decoration: underline;
}

main {
    padding: 20px;
}

section {
    background-color: white;
    margin: 20px 0;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

h2 {
    color: #720b6d;
}

p {
    margin: 15px 0;
    line-height: 1.6;
}

.btn {
    display: inline-block;
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border-radius: 70px;
    text-decoration: none;
    font-weight: bold;
}

.btn:hover {
    background-color: #730489;
}
.boutonbas{
    display:flex;
}
.boutonbas2 a{
    color:white;
    font-weight:bold;
}

/* From Uiverse.io by adamgiebl */ 
button {
  display: flex;
  align-items: center;
  font-family: inherit;
  cursor: pointer;
  font-weight: 500;
  font-size: 17px;
  padding: 0.8em 1.3em 0.8em 0.9em;
  color: white;
  background: #ad5389;
  background: linear-gradient(to right, #0f0c29, #302b63, #24243e);
  border: none;
  letter-spacing: 0.05em;
  border-radius: 16px;
}

button svg {
  margin-right: 3px;
  transform: rotate(30deg);
  transition: transform 0.5s cubic-bezier(0.76, 0, 0.24, 1);
}

button span {
  transition: transform 0.5s cubic-bezier(0.76, 0, 0.24, 1);
}

button:hover svg {
  transform: translateX(5px) rotate(90deg);
}

button:hover span {
  transform: translateX(7px);
}


    </style>
</body>
</html>
