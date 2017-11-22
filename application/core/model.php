<?php
class Model extends DB
{
    protected static $connect;     //  protected!

    public function __construct()
    {
        if (!isset(self::$connect)) {
            $dsn = "mysql: host=$this->host; dbname=$this->db; charset=$this->charset";
            $opt = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            self::$connect = new PDO($dsn, $this->user, $this->pass, $opt);
        }
        return self::$connect;

        //объект бд коннекта ??
        //имя таблицы
    }

    public function get_data()
    {
    }

    // получить запись по id (и имя таблицы?)
    /* function getRowById($id){
        try{
            $db = $this->db;
            $stmt = $db->query("SELECT * from $this->table WHERE id = $id");
            $row = $stmt->fetch();
        }catch(PDOException $e) {
            echo $e->getMessage();
            exit;
        }
        return $row; */

    // получить имя таблицы
    // получить все записи
    // получить одну запись
    // извлечь из базы данных одну запись
    // получить запись по id
    // запись в базу данных
    // составление запроса к базе данных
    // выполнение запроса к базе данных
    // удаление записей из базы данных по условию
    // удаление строки из базы данных
    // обновление записи. Происходит по ID


}