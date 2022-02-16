<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Resultado</title>
</head>
<body>
    
</body>
</html>
<?php
    session_start();
    define('HOST', '127.0.0.1');
    define('USER' , 'root');
    define('SENHA', '');
    define('DB', 'c2d');
    $conne = mysqli_connect(HOST, USER, SENHA, DB) or die ("ERRO!");
    $pesquisa = $_POST['nome'];
    $sql = "SELECT * FROM teste WHERE nome LIKE '%$pesquisa%'";
    $resultado = mysqli_query($conne,$sql);
    
    while($rows = mysqli_fetch_array($resultado)){
    ?>

        <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $rows['id']?></td>
                <td><?php echo $rows['nome']?></td>
            </tr>
            
        </tbody>
        </table>
        <button type="button" class="btn btn-dark"><a color="white" href="index.php">Voltar a página Principal</a></button>

        
        
<?php   
    }
?>