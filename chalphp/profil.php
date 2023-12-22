<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #000000;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      background-color: #fff;
      border-radius: 15px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      width: 300px;
    }

    .form-group {
      margin-bottom: 15px;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    input {
      width: 100%;
      padding: 8px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 5px;
      margin-bottom: 10px;
    }

    .password-container {
      position: relative;
    }

    .password-toggle {
      position: absolute;
      right: 10px;
      top: 50%;
      transform: translateY(-50%);
      cursor: pointer;
    }

    select {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 5px;
      margin-bottom: 10px;
    }

    button {
      background-color: #4caf50;
      color: #fff;
      border: none;
      padding: 10px;
      border-radius: 5px;
      cursor: pointer;
    }

    button:hover {
      background-color: #45a049;
    }
  </style>
  <script>
    function togglePassword() {
      var passwordInput = document.getElementById('password');
      var passwordToggle = document.getElementById('password-toggle');

      if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        passwordToggle.innerText = 'Cacher';
      } else {
        passwordInput.type = 'password';
        passwordToggle.innerText = 'Afficher';
      }
    }
  </script>
</head>
<body>
  <div class="container">
    <div class="form-group">
      <label for="nom">Nom:</label>
      <input type="text" id="nom" name="nom">
    </div>

    <div class="form-group">
      <label for="prenom">Prénom:</label>
      <input type="text" id="prenom" name="prenom">
    </div>

    <div class="form-group">
      <label for="email">Adresse mail:</label>
      <input type="email" id="email" name="email">
    </div>

    <div class="form-group password-container">
      <label for="password">Mot de passe:</label>
      <input type="password" id="password" name="password">
      <span id="password-toggle" class="password-toggle" onclick="togglePassword()">Afficher</span>
    </div>
    <div class="form-group">
      <a href="lien_vers_changement_mot_de_passe">Changer le mot de passe</a>
    </div>

    <div class="form-group">
      <label for="classe">Classe:</label>
      <select id="classe" name="classe">
        <option value="classe1">Classe 1</option>
        <option value="classe2">Classe 2</option>
        <option value="classe3">Classe 3</option>
      </select>
    </div>

    <div class="form-group">
      <label for="role">Rôle de l'utilisateur:</label>
      <select id="role" name="role">
        <option value="etudiant">Étudiant</option>
        <option value="professeur">Professeur</option>
        <option value="administrateur">Administrateur</option>
      </select>
    </div>

    <button type="submit">Enregistrer</button>
  </div>
</body>
</html>
