<!DOCTYPE html>
<html>
      <style>
           
 
               input[type=text] {
                  width: 30%;
                  -webkit-transition: width 0.15s ease-in-out;
                  transition: width 0.15s ease-in-out;
               }

               /* When the input field gets focus,
                    change its width to 100% */
               input[type=text]:focus {
                 width: 70%;
               }

              #list{
                font-size:  1.5em;
                margin-left: 90px;
               }

            .animals{
               display: list-item;    
              } 
      </style>
<head>
    
      
    <!-- linking the stylesheet(CSS) -->
    <link rel="stylesheet" type="text/css" href="./style.css">
</head>
  
<body>
      
    <!-- input tag -->
    <input id="searchbar" onkeyup="search_animal()" type="text"
        name="search" placeholder="Search animals..">
    <a href="https://natan0202.github.io/">Recarregar</a>
      
    <!-- ordered list -->
    <ol  id='list'>
        <li style="display: none;" class="animals">E-mail: marketing@construtoramoinho.com.br / Razão Social: RUTE MARIA GOEDERT KROON EIRELI / CNPJ: 15.707.171/0001-22/<li>
        <li style="display: none;" class="animals">E-mail: carlos@novitah.com / Razão Social: NOVITAH COMERCIO DE ACESSORIOS DE MODA EIRELI / CNPJ: 29.971.267/0001-08</li>
        <li style="display: none;" class="animals">E-mail: comercial2@cdmv.com.br / Razão Social: CENTRO DE DESENVOLVIMENTO DA MEDICINA VETERINARIA, CURSOS E / CNPJ: 27.152.618/0001-23</li> 
    </ol>
      
    <!-- linking javascript -->
    <script src="./animals.js"></script>
<script>
      
          function search_animal() {
              let input = document.getElementById('searchbar').value
              input=input.toLowerCase();
              let x = document.getElementsByClassName('animals');

              for (i = 0; i < x.length; i++) { 
                  if (!x[i].innerHTML.toLowerCase().includes(input)) {
                      x[i].style.display="none";
                  }
                  else {
                      x[i].style.display="list-item";                 
                  }
              }
          }

</script>
