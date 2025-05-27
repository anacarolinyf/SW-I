<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina inicial</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js
    ">
</head>
<body>
    <div class="containers">
        <form action="processa.php" method="POST">
              <!-- Email input -->
              <div data-mdb-input-init class="form-outline mb-4">
                   <input type="email" id="form1Example1" class="form-control" name="email" />
                   <label class="form-label" for="form1Example1">Endereço de Email</label>
              </div>

              <!-- Password input -->
              <div data-mdb-input-init class="form-outline mb-4">
                   <input type="password" id="form1Example2" class="form-control" name="senha" />
                   <label class="form-label" for="form1Example2">Senha</label>
              </div>

              <!-- 2 column grid layout for inline styling -->
              <div class="row mb-4">
              <div class="col d-flex justify-content-center">
                   <!-- Checkbox -->
                   <div class="form-check">
                   <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                   <label class="form-check-label" for="form1Example3"> Me lembrar </label>
              </div>
     </div>

                <div class="col">
                <!-- Simple link -->
                <a href="#!">Esqueceu a senha?</a>
                </div>
        </div>

                <!-- Submit button -->
                <input type="submit" class="btn btn-primary btn-block mb-4" value="Logar">
                </form>
                
                
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></scrpit>


</body>
</html>