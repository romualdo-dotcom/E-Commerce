<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/cadastrar.css">
</head>
<body>
    <main class="container">
        <h2>Cadastrar</h2>
        <form action="">
            <div class="input-field">
                <input type="text" name="name" id="name"
                placeholder="Nome" required>
                <div class="underline"></div> 
            </div>
            <div class="input-field">
                <input type="password" name="password" id="password"
                placeholder="Senha" required>
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <input type="email" name="email" id="email"
                placeholder="Email" required>
                <div class="underline"></div>
            </div>
            
            <div class="input-field">
                <input type="date" name="date" id="date" required>
                <div class="underline"></div>
            </div>
            <input type="submit" value="Enviar">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Default checkbox
                </label>
                </div>
        </form>
               <div class="cad">
                <a  href="login.php">Logar</a>
            </div>
        </div>

    </main>
</body>
</html>