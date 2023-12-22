<?php 
    try 
    {
      $bdd = new PDO("mysql:host=localhost;dbname=ygrdqgks_challenge2023-2;charset=utf8", "ygrdqgks_challenge2", "Touslesprivileges2003.");
    }
    catch(PDOException $e)
    {
      die('Erreur : '.$e->getMessage());
    }
