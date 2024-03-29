<!doctype html>
<html lang="en">
<!--This loads the static files-->
{% load static %} 
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
    <link rel="stylesheet" href="{% static 'css/style.css' %}">

    <title> {% block title %} {% endblock title %} </title>
  </head>
  <body>
    <!-- Navbar start-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/"> Developer Rooney </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {% block homeactive %} {% endblock homeactive %}" aria-current="page" href="/">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link {% block aboutactive %} {% endblock aboutactive %}" href="/about">About</a>
        </li>

        <li class="nav-item">
          <a class="nav-link {% block projectsactive %} {% endblock projectsactive %}" href="/projects">Projects</a>
        </li>

        <li class="nav-item">
          <a class="nav-link {% block contactactive %} {% endblock contactactive %}" href="/contact">Contact Me</a>
        </li>

      </ul>
      <!---Social Media Icons--->
      <div class="links mx-5">  
        <a href="https://www.linkedin.com/in/rooney-mwathani-848ab3208/"><i class="fa fa-linkedin"></i></a>
        <a href="https://github.com/Mwathani"><i class="fa fa-github"></i></a>
        <a href="https://twitter.com/home"><i class="fa fa-twitter"></i></a>
        <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
      </div>
    </div>
  </div>
  
</nav>

  <!--End of navbar -->

<!--Main body-->

{% block body %}

{% endblock body %}

<!--Main body End-->
</div>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<!--https://source.unsplash.com/random/1900*900/?django,django,web_developer-->