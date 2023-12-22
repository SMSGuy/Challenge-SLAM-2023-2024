<?php 
    try 
    {
      $bdd = new PDO("mysql:host=localhost;dbname=zrgztvrv_challenge_2023-2024;charset=utf8", "zrgztvrv_challenge2", "Touslesprivilèges1234");
    }
    catch(PDOException $e)
    {
      die('Erreur : '.$e->getMessage());
    }
