<?php

class config
{
    private static $pdo=NULL;
    public static function getConnexion()
    {
        if (!isset(self::$pdo))
        {
            try
            {
                self::$pdo=new pdo('mysql:host=localhost;dbname=petpaw','root','',
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                ]);
            }
            catch(Exception $e)
            {
                die ('connection failed: '.$e->getMessage());
            }
        }
        return self::$pdo;
    }
}    
?>