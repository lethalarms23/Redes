<?php include "css.php"; ?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1 style="color: white; text-align: center">Login</h1>
<table class="table table-dark table-striped">
<tbody>
<tr>
<form method="post" action="processa_login.php">
<td>
<label>Nome de utilizador</label><input type="text" name="user_name" required><br>
</td>
<td>
<label>Palavra-passe</label><input type="text" name="password" required><br>
</td>
<td>
<input type="submit" name="enviar"><br>
</form>
</td>
</tr>
</tbody>
</table>
</body>
</html>