<?php

namespace Core;

use Core\Exceptions\FileNotFoundException;
use PDO;
use PDOException;
use Validator\Validator;

class Database extends PDO
{
    private PDO $conn;
    private string $database_name;
    private array $errors = [];
    private array $requiredFields;

    public function __construct($ini_path)
    {
        if (!file_exists($ini_path)) {
            throw new FileNotFoundException('Fichier non trouvé');
        }

        $config = parse_ini_file($ini_path);
        $this->database_name = $config['DB_NAME'];
        $db_user = $config['DB_USER'];
        $db_password = $config['DB_PASSWORD'];
        $db_charset = $config['DB_CHARSET'];
        $db_driver = $config['DB_DRIVER'];
        $db_port = $config['DB_PORT'];
        $db_host = $config['DB_HOST'];

        $dsn = sprintf('%s:host=%s;port=%s;dbname=%s;charset=%s', $db_driver, $db_host, $db_port, $this->database_name, $db_charset);

        $this->errors = [];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if (!Validator::validateEmail('email')) {
                $this->errors['email'] = 'L\'adresse email n\'est pas valide';
            }

            if (!Validator::emailContainsAtSymbol('email')) {
                $this->errors['email'] = 'Le caractère @ est requis';
            }

            if (!Validator::min('firstname', 3)) {
                $this->errors['firstname'] = 'Le prénom doit contenir au minimum 3 caractères.';
            }

            if (!Validator::min('lastname', 3)) {
                $this->errors['lastname'] = 'Le nom doit contenir au minimum 3 caractères.';
            }

            if (!Validator::no_numbers('firstname')) {
                $this->errors['firstname'] = 'Le prénom ne doit pas contenir de chiffre.';
            }

            if (!Validator::no_numbers('lastname')) {
                $this->errors['lastname'] = 'Le nom ne doit pas contenir de chiffre.';
            }

            $this->requiredFields = ['firstname', 'lastname', 'mail', 'message'];
            foreach ($this->requiredFields as $field) {
                if (!Validator::required($field)) {
                    $this->errors[$field] = ucfirst($field) . ' est requis.';
                }
            }

            if (empty($this->errors)) {

                try {
                    parent::__construct($dsn, $db_user, $db_password);
                    $this->conn = $this;
                    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    $firstname = htmlspecialchars($_POST['firstname']);
                    $lastname = htmlspecialchars($_POST['lastname']);
                    $email = htmlspecialchars($_POST['email']);
                    $message = htmlspecialchars($_POST['message']);

                    $sql = "INSERT INTO `wp_contact_form_entries` (`firstname`, `lastname`, `email`, `message`) VALUES (:firstname, :lastname, :email, :message)";
                    $stmt = $this->conn->prepare($sql);

                    $stmt->bindParam(':firstname', $firstname);
                    $stmt->bindParam(':lastname', $lastname);
                    $stmt->bindParam(':email', $email);
                    $stmt->bindParam(':message', $message);
                    $stmt->execute();

                } catch (PDOException $e) {
                    exit('Une erreur est survenue');
                }
            }
        }
    }

    public function getErrors(): array
    {
        return $this->errors;
    }
}
