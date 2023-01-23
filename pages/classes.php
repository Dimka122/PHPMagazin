<?php
class Tools
{
    static function connect(
        $host = "localhost",
        $user = "root",
        $pass = "",
        $dbname = "shop")
    {
        $cs = 'mysql:host=' . $host . ';dbname=' . $dbname . ';charset=utf8;';
        $options = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES UTF8'
        );
        try {
            $pdo = new
            PDO($cs, $user, $pass, $options);
            return $pdo;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
}
class Customer
{
    protected $id; //user id
    protected $login;
    protected $pass;
    protected $roleid;
protected$discount; //customer's personal discount
protected$total; //total ammount of purchases
protected$imagepath; //path to the image
    function __construct($login,$pass,$imagepath,$id=0)
    {
        $this->login=$login;
        $this->pass =$pass;
        $this->imagepath =$imagepath;
        $this->id =$id;
        $this->total =0;
        $this->discount =0;
        $this->roleid =2;
    }
}

