<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestion des Tournois</title>
  <style>
    body {
      background-color: #000;
      
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    h1 {
      color: #fff;
      margin-bottom: 20px;
    }

    #container {
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 300px;
      text-align: center;
    }

    form {
      display: flex;
      flex-direction: column;
      margin-bottom: 20px;
    }

    input {
      padding: 8px;
      margin-bottom: 10px;
    }

    button {
      padding: 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin-right: 10px;
    }

    #createButton {
      background-color: #0f0; /* Vert */
      color: #fff;
    }

    #editButton {
      background-color: #ff8c00; /* Orange */
      color: #fff;
    }

    #deleteButton {
      background-color: #f00; /* Rouge */
      color: #fff;
    }
    .rower{
        display: flex;
        flex-direction: row;
    }
  </style>
</head>
<body>
  <h1>Gestion des Tournois</h1>
  <div id="container">
    <form>
      <label for="tournamentName">Nom du Tournoi:</label>
      <input type="text" id="tournamentName" name="tournamentName" required>

    <div class="rower">
        <button id="createButton">Créer</button>
        <button id="editButton">Modifier</button>
        <button id="deleteButton">Supprimer</button>
     </div> 
    </form>
  </div>
</body>
</html>
