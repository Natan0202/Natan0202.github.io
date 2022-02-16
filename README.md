
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
        <li class="animals">Cat</li>
        <li class="animals">Dog</li>
        <li class="animals">Elephant</li>
        <li class="animals">Fish</li>
        <li class="animals">Gorilla</li>
        <li class="animals">Monkey</li>
        <li class="animals">Turtle</li>
        <li class="animals">Whale</li>
        <li class="animals">Aligator</li>
        <li class="animals">Donkey</li>
        <li class="animals">Horse</li>
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
