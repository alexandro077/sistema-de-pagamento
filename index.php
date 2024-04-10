<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BancoTech</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Recebimento de Dinheiro</h1>
  <form action="index.php" method="post">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required>
    <br>
    <label for="valor">Valor:</label>
    <input type="number" id="valor" name="valor" required>
    <br>
    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email" required>
    <br>
    <label for="metodoPagamento">Método de Pagamento:</label>
    <select id="metodoPagamento" name="metodoPagamento" required>
      <option value="">Selecione</option>
         <option value="mercadopago">Mercado Pago</option>

    </select>
    <br>
    <button type="submit">Enviar</button>
  </form>
</body>
</html>