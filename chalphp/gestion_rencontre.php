<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liste des Rencontres</title>
  <style>
    body {
      background-color: #000;
      color: #fff;
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
      margin-bottom: 10px;
    }

    #container {
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
      width: 300px;
      text-align: center;
    }

    select {
      width: 100%;
      padding: 8px;
      margin-top: 10px;
      margin-bottom: 20px;
    }

    h2 {
      margin-bottom: 10px;
      color: black;
    }

    .button-container {
      display: flex;
      justify-content: space-between;
    }

    button {
      width: 48%;
      padding: 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    #joinButton {
      background-color: #008000; /* Vert */
      color: #fff;
    }

    #leaveButton {
      background-color: #f00; /* Rouge */
      color: #fff;
    }
  </style>
</head>
<body>
  <h1>Liste des Rencontres</h1>
  <div id="container">
    <h2>Rejoindre le terrain</h2>
    <select id="terrainList">
      <option value="terrain1">Terrain 1</option>
      <option value="terrain2">Terrain 2</option>
      <option value="terrain3">Terrain 3</option>
    </select>

    <h2>Sélectionner le match</h2>
    <select id="matchList">
      <option value="match1">Match 1</option>
      <option value="match2">Match 2</option>
      <option value="match3">Match 3</option>
    </select>

    <div class="button-container">
      <button id="joinButton">Rejoindre</button>
      <button id="leaveButton">Abandonner</button>
    </div>
  </div>
</body>
</html>

