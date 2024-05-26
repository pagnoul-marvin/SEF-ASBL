<?php

namespace Core;

use Core\Exceptions\CantReadFileException;
use Core\Exceptions\FileNotFoundException;
use PDO;
use PDOException;

class Database
{
    protected PDO $conn;

    public function __construct(string $ini_path)
    {
        if (!file_exists($ini_path)) {
            FileNotFoundException::redirect();
        }

        $config = parse_ini_file($ini_path);
        if ($config === false) {
            CantReadFileException::redirect();
        }

        $database_name = $config['DB_NAME'];
        $db_user = $config['DB_USER'];
        $db_password = $config['DB_PASSWORD'];
        $db_charset = $config['DB_CHARSET'];
        $db_driver = $config['DB_DRIVER'];
        $db_port = $config['DB_PORT'];
        $db_host = $config['DB_HOST'];

        $dsn = sprintf('%s:host=%s;port=%s;dbname=%s;charset=%s', $db_driver, $db_host, $db_port, $database_name, $db_charset);

        try {
            $this->conn = new PDO($dsn, $db_user, $db_password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException) {
            Response::redirect();
        }
    }

    public function getConnection(): PDO
    {
        return $this->conn;
    }
}
