<?php 
    try 
    {
      $bdd = new PDO("mysql:host=localhost;dbname=apwncucd_challenge_v2;charset=utf8", "apwncucd_admin_v2", "xjMQyrZWJc6Sz4");
    }
    catch(PDOException $e)
    {
      die('Erreur : '.$e->getMessage());
    }
