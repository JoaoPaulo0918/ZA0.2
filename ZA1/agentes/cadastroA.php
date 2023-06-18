
  <!DOCTYPE html>
  <html lang="pt-br">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Cadastro | ZA </title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Lobster&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
      <link rel="stylesheet" href="../assets/cadastroU.css">
      
  </head>
  <body >
  
  <div class="box">
  <form action="cadastro.php"  method="post"> 
  
      <h1>CADASTRO AGENTE</h1>
  
      
      <div class="inputBox">
      <input  type="text" name="nome_agente" id="nome_agente" class="inputUser" required>
      <label for="nome_agente" class="labelInput">Nome Completo</label>
      </div>

      <div class="inputBox">
      <input type="text" name="cpf_agente" id="cpf_agente" class="inputUser" required>
      <label for="cpf_agente" class="labelInput">CPF</label>
      </div>

      <div class="inputBox">
      <input type="text" name="n_agente" id="n_agente" class="inputUser" required>
      <label for="n_agente" class="labelInput">N° Agente</label>
      </div>

      <div class="inputBox">
      <input type="text" name="email_agente" id="email_agente" class="inputUser" required>
      <label for="email_agente" class="labelInput">E-mail</label>
      </div>
      
      <div class="inputBox">
      <input type="tel" name="fone_agente" id="fone_agente" class="inputUser" required>
      <label for="fone_agente" class="labelInput">Telefone</label>
      </div>
  
      <h5 style="margin-left: 2.5%;" ><b>GÊNERO:</b></h5>
    
      <div style="margin-left: 2.5%;" class="inputBox">
      <input type="radio" id="feminino" name="sexo_agente" value="feminino" required>
      <label for="feminino"><b>Feminino</b></label>
      <br>
      <input type="radio" id="masculino" name="sexo_agente" value="masculino" required>
      <label for="masculino"><b>Masculino</b></label>
      <br>
      <input type="radio" id="outro" name="sexo_agente" value="outro" required>
      <label for="outro"><b>Outro</b></label>
      <br><br>
      </div>
      <div class="inputBox">
      <label style="margin-left: 2.5%;" for="data_nasc_agente"><b>DATA DE NASCIMENTO:</b></label>
      <input style="margin-left: 1.2%;" class="data_nascimento" type="date" name="data_nasc_agente" id="data_nasc_agente"  required> 
      </div>
      
      
     
      
      <div class="inputBox">
      <input style="margin-top: 5%;" type="password" name="senha_agente" id="senha_agente" class="inputUser" required>
      <label for="senha_agente" class="labelInput"> Senha</label> 
      <img src="https://cdn0.iconfinder.com/data/icons/ui-icons-pack/100/ui-icon-pack-14-512.png" id="olho" class="olho">
      </div>
  
      <div id="voltar">
        <button class="voltar"><a href="../agentes/loginA.php">VOLTAR</a></button>
    
    </div>
    
    <div id="voltar">
        <button id="submit" class="submit" type="submit" name="submit" value="Entrar"> CADASTRAR </button>
    </div>
    
      
  </div> 
  
  </form>
  </div>
  <script>
      let btn = document.querySelector('#olho');
  
      btn.addEventListener('click', function () {
  
      let input = document.querySelector('#senha');
  
      if (input.getAttribute('type') == 'password') {
          input.setAttribute('type', 'text');
      } else {
          input.setAttribute('type', 'password');
      }
      });
  </script>
  </body>
  </html>