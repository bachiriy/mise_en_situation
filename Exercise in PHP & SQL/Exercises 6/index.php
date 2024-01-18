<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication Form</title>
</head>
<body>
    <form id="authForm">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="button" onclick="submitForm()">Submit</button>
    </form>

    <script>
        function submitForm() {
            const username = document.getElementById('username').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            if (username.length < 3) {
                alert('Username must be at least 3 characters long.');
                return;
            }

            if (!email.endsWith('@gmail.com')) {
                alert('Email must end with "@gmail.com".');
                return;
            }

            const data = {
                username: username,
                email: email,
                password: password
            };

            fetch('endpoint', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                console.log('Data sent successfully:', data);
            })
            .catch(error => {
                console.error('Error sending data:', error);
            });
        }
    </script>
</body>
</html>
