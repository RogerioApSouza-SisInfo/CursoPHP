<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = $datanascErr = "";
$name = $email = $gender = $comment = $website =$datanasc = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "o nome é necessário.";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Preencha apenas com letras e espaços.";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "O e-mail é necessário.";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Formato de e-mail inválido!";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "URL inválida!";
    }    
  }
  if (empty($_POST["datanasc"])) {
    $datanascErr = "Informe a data de nascimento";
  } else {
    $datanasc = test_input($_POST["datanasc"]);
  }
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Informe o gênero";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP - Exemplo de validação de formulário</h2>
<p><span class="error">* Preencha o campo.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Nome: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Data de nascimento: <input type="date" name="datanasc">
  <span class="error"><?php echo $datanascErr;?></span>
  <br><br>
  Comentários: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gênero:
  <input type="radio" name="gender" value="Feminino">Feminino
  <input type="radio" name="gender" value="Masculino">Masculino
  <input type="radio" name="gender" value="Não definido">Outro
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Enviar">  
</form>

<?php
echo "<h2>Definições:</h2>";
echo "Nome: " .$name;
echo "<br>";
echo "E-mail: ".$email;
echo "<br>";
echo "Website: " .$website;
echo "<br>";
echo "Comentários: ". $comment;
echo "<br>";
echo "Gênero: " .$gender;
echo "<br>";
echo "Hoje é: " . date("d/m/Y")." - " . date("l")."<br>";
?>

