<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tournoi</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #000000;
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    #reset-title {
        color: #fff;
        padding: 20px;
        border-radius: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        font-size: xx-large;
    }

    .container {
      background-color: #fff;
      border-radius: 15px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      width: 400px; 
    }

    .form-group {
      margin-bottom: 20px; 
    }

    label {
      display: block;
      margin-bottom: 10px; 
    }

    input {
      width: 100%;
      padding: 10px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 8px; 
      margin-bottom: 15px; 
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
      padding: 10px; 
      border: 1px solid #ccc;
      border-radius: 8px; 
      margin-bottom: 15px; 
    }

    h1 {
      font-size: 24px; 
    }

    button {
      background-color: #4caf50;
      color: #fff;
      border: none;
      padding: 16px;
      border-radius: 8px; 
      cursor: pointer;
    }

    button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
    <div id="reset-title">Rejoindre un tournoi</div>
  <div class="container">
    <div class="form-group">
      <label for="classe">Classe:</label>
      <select id="classe" name="classe">
        <option value="classe1">Classe 1</option>
        <option value="classe2">Classe 2</option>
        <option value="classe3">Classe 3</option>
      </select>
    </div>

    <button type="submit">Rejoindre le Tournoi</button>
  </div>
</body>
</html>
