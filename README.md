<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <input type="pesquisa" name="" id="pesquisa">
    <ul id = "lista"></ul>

   
</body>


</html>
<script>
    pessoas = ["Nome: Natan | Idade: 19 | Local: Rio de Janeiro", "Nome: Gabriel | Idade: 20 | Local: Rio de Janeiro", "Nome: João | Idade: 30 | Local: Rio de Janeiro"]
    t = ""
    for(i in pessoas){
        t += "<li>"+pessoas[i]+"</li>"
        pessoas[i] = pessoas[i].toLowerCase()
    }
    lista.innerHTML = t
    pesquisa.onkeyup=function(e){
        t = this.value
        r = new RegExp(t,"g")
        for(i in pessoas){
            if(pessoas[i].match(r)){
                lista.children[i].removeAttribute("style")
            }
            else{
                lista.children[i].style.display="none"
            }
        }
    }
</script>
