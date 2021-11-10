<?php

class config
{
    private static $pdo=NULL;
    public static function getConn()
    {
        if (!isset(self::$pdo))
        {
            try
            {
                self::$pdo=new pdo('mysql:host=localhost;dbname=PetPaw','root','',
                [
                    pdo:: ATTR_ERRMODE => pdo::ERRMODE_EXCEPTION,
                    pdo:: ATTR_DEFAULT_FETCH_MODE => pdo::FETCH_ASSOC
                ]);
                echo "successful connection<br>";
            }
            catch(PDOException $e)
            {
                die ('connection failed: '.$e->getMessage());
            }
        }
        return self::$pdo;
    }
}
?>