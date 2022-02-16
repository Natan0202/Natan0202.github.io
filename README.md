
<html>
      <style>
           #searchbar{
                 margin-left: 15%;
                 padding:15px;
                 border-radius: 10px;
            }
 
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
      
    
    <ol id='list'>
        <li class="animals">Cat : Age - 5 : Name: Steve</li>
        <li class="animals">Dog : Age - 6 : Name: Scooby</li>
        <li class="animals">Elephant : Age - 7 : Name: Dumbo</li>
        <li class="animals">Fish : Age - 1 : Name: Nemo</li>
        <li class="animals">Gorilla : Age - 2 : Name: Cesar</li>
        <li class="animals">Monkey : Age - 9 : Name: Mac/li>
        <li class="animals">Turtle : Age - 2 : Name: Ninja</li>
        <li class="animals">Whale : Age - 3 : Name: Mike</li>
        <li class="animals">Aligator : Age - 5 : Name: Largato/li>
        <li class="animals">Donkey : Age - 4 : Name: Scri</li>
        <li class="animals">Horse : Age - 12 : Name: Cavalo</li>
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
