
<form id="userForm" action="formBE.php" method="POST">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <button type="submit" >Submit</button>
  </form>


  <script>
    const userForm = document.getElementById('userForm');
    userForm.addEventListener('submit',function(event){
        event.preventDefault(event); 
        
        const formData = new FormData(userForm);
        fetch('formBE.php', {
            method: 'POST',
            body: formData
          })
          .then(response => response.text())
          .then(data => {
            console.log(data);
            // Handle success (you can update the UI or redirect the user)
          })
    })

  </script>