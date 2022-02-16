
<html>
      <style>
           
 
         input[type=text] {
            width: 30%;
            -webkit-transition: width 0.15s ease-in-out;
            transition: width 0.15s ease-in-out;
         }
 
   
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
    <title>
        Creating Search Bar using HTML
        CSS and Javascript
    </title>
      
  
    <link rel="stylesheet" type="text/css" href="./style.css">
</head>
  
<body>
      
    
    <input id="searchbar" onkeyup="search_animal()" type="text" name="search" placeholder="Search animals..">
      
    
    <a href="teste2.html">Recarregar</a>
      
    <!-- ordered list -->
    <ol  id='list'>
        <li style="display: none;" class="animals">Cat : Age - 5 : Name: Steve</li>
        <li style="display: none;" class="animals">Dog</li>
        <li style="display: none;" class="animals">Elephant</li>
        <li style="display: none;" class="animals">Fish</li>
        <li style="display: none;" class="animals">Gorilla</li>
        <li style="display: none;" class="animals">Monkey</li>
        <li style="display: none;" class="animals">Turtle</li>
        <li style="display: none;" class="animals">Whale</li>
        <li style="display: none;" class="animals">Aligator</li>
        <li style="display: none;" class="animals">Donkey</li>
        <li style="display: none;" class="animals">Horse</li>
    </ol>
      
    <script src="./animals.js"></script>
</body>
  
</html>
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
