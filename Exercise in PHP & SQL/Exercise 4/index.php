<?php 
require "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ajax</title>
</head>
<body>
  
  
  <form id="userForm" action="formBE.php" method="POST">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      
      <input type="submit" value="Submit">
  </form>

  <script>
    const userForm = document.getElementById('userForm');
    userForm.addEventListener('submit', function(event){
    event.preventDefault();

    const formData = new FormData(userForm);
    fetch('formBE.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        console.log(data);
    });
    });
 </script>
</body>
</html>
