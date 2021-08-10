<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <link rel="stylesheet" href="css_login/style.css">
        
        <title>Controle de Acesso Coinfo-IF</title>
       
        

    </head>
    
    <body>
        <form class="form" action="logar.php" method="POST">
            <div class="card">
                <div class="card-top">
                    <img class="imglogin" src="img_login/user.jpg" alt="">
                    <h2 class="title">COINFO-IF</h2>
                    <p>Bem Vindo!</p>
                </div>

            <div class="card-group">
            <label>Email</label>
                <input type="email" name="email" placeholder="Digite seu email" required>             
                 </div>

                 <div class="card-group">
            <label>Senha</label>
                <input type="password" name="senha" placeholder="Digite sua senha" required>             
            </div>

            <div class="card-group">
                <label><input type="checkbox"> Lembre-me</label> 
                 </div>

            <div class="card-group btn">
            <button type="submit"> Acessar</button> 
            </div>
            </div>
        </form>
</body>
</html>