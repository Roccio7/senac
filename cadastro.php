<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="cadastro1.css" />
  </head>
  <body background="imagens/fundo.png">
    <p>
      <span> Ainda não é nosso cliente? <br /> </span>
      &mdash; CADASTRE-SE AQUI!! &mdash;
    </p>



    <form method = "post" action = "configcadastro.php" class="input">
      <input type="email" placeholder=" E-mail" name="email" required/>
      <input type="number" placeholder="CPF" name="cpf" required/>
      <input type="password" placeholder="Crie sua Senha" name="senha" required/>
      <input type="password" placeholder="Confirme sua Senha" required/>
      <input type="checkbox" id="L"  required/> <h1>Li e aceito todos os termos de condições.</h1>
      <input type="submit">
      
      </form>
    <hr />


   
   
  </body>
</html>
