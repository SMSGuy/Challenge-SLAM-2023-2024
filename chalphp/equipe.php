<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Scoreboard</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      height: 100vh;
    }

    .left-section, .right-section {
      flex: 1;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .center-line {
      width: 20px;
      background-color: #000;
      height: 100%;
      position: relative;
    }

    .circle {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      background-color: #000;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    .red-section {
      background-color: #ff0000;
      color: #fff;
      padding: 20px;
      text-align: center;
      flex: 1;
      width: 100%;
      align-items: center; 
    }

    .green-section {
      background-color: #008000;
      color: #fff;
      padding: 20px;
      text-align: center;
      flex: 1;
      width: 100%;
      align-items: center;
    }

    .score {
      font-size: 24px;
      margin-top: 10px;
    }

    .team-name {
      font-size: 18px;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <div class="left-section">
    <div class="red-section">
      <div class="score">3</div>
      <div class="team-name">Équipe 1</div>
    </div>
  </div>

  <div class="center-line">
    <div class="circle"></div>
  </div>

  <div class="right-section">
    <div class="green-section">
      <div class="score">2</div>
      <div class="team-name">Équipe 2</div>
    </div>
  </div>
</body>
</html>

