<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Consultation du tournoi</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #000;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      flex-direction: column;
    }

    .container {
      background-color: #fff;
      border-radius: 15px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      width: 400px; /* Augmentation de la largeur à 400 pixels */
      text-align: center;
    }

    h2 {
      color: #fff;
      margin-bottom: 20px;
    }

    .button-container {
        display: flex;
        flex-direction: row;
        gap: 15px;
        margin-bottom: 50px;
    }

    button {
        background-color: #f00;
        color: #fff;
        border: none;
        padding: 8px;
        border-radius: 8px;
        cursor: pointer;
        width: 100px;
    }

    button:hover {
      background-color: #d00;
    }

    .return-button {
        background-color: #f00;
        color: #fff;
        border: none;
        padding: 10px;
        border-radius: 8px;
        width: 100px;
        cursor: pointer;
    }

    .return-button:hover {
      background-color: #d00;
    }
  </style>
</head>
<body>
    <h2>Consultation du Tournoi</h2>
  <div class="container">
    
    <div class="button-container">
      <button>Équipes</button>
      <button>Classement</button>
      <button>Matchs</button>
      <button>Rencontre</button>
    </div>

    <div class="return-button">
      Retour
    </div>
  </div>
</body>
</html>
