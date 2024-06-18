<?php

namespace App\Models;

use Core\Database;
use Validator\Validator;

class BlogEntries extends Database
{
    protected Database $db;
    protected string $table = 'wp_blog_entries';

    protected array $errors = [];
    protected array $requiredFields = ['firstname', 'lastname', 'message'];

    public function __construct(Database $db)
    {
        parent::__construct(BASE_PATH . '.env.local.ini');
        $this->db = $db;
    }

    public function getBlogMessage(): array|false
    {
        $sql = <<<SQL
            SELECT * from $this->table
            WHERE deleted_at IS NULL
            ORDER BY created_at DESC;
        SQL;

        $statement = $this->db->getConnection()->prepare($sql);
        $statement->execute();
        return $statement->fetchAll();
    }

    public function validate() :bool
    {

        if (!Validator::min('firstname', 3)) {
            $this->errors['firstname'] = 'Le prénom doit contenir au minimum 3 caractères.';
        }

        if (!Validator::max('firstname', 255)) {
            $this->errors['firstname'] = 'Le prénom ne doit pas dépasser les 255 caractères';
        }

        if (!Validator::min('lastname', 3)) {
            $this->errors['lastname'] = 'Le nom doit contenir au minimum 3 caractères.';
        }

        if (!Validator::max('lastname', 255)) {
            $this->errors['lastname'] = 'Le nom ne doit pas dépasser les 255 caractères';
        }

        if (!Validator::min('message', 3)) {
            $this->errors['message'] = 'Le message doit contenir au minimum 3 caractères';
        }

        if (!Validator::max('message', 500)) {
            $this->errors['message'] = 'Le message ne doit pas dépasser les 500 caractères';
        }

        if (!Validator::no_numbers('firstname')) {
            $this->errors['firstname'] = 'Le prénom ne doit pas contenir de chiffre.';
        }

        if (!Validator::no_numbers('lastname')) {
            $this->errors['lastname'] = 'Le nom ne doit pas contenir de chiffre.';
        }

        foreach ($this->requiredFields as $field) {
            if (!Validator::required($field)) {
                $this->errors[$field] = 'Le champ' . ' ' . ucfirst($field) . ' est requis.';
            }
        }

        return empty($this->errors);
    }

    public function save(): bool
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($this->validate()) {
                $sql = "INSERT INTO `{$this->table}` (`firstname`, `lastname`, `message`) VALUES (:firstname, :lastname, :message)";
                $stmt = $this->db->getConnection()->prepare($sql);

                $stmt->bindParam(':firstname', $_POST['firstname']);
                $stmt->bindParam(':lastname', $_POST['lastname']);
                $stmt->bindParam(':message', $_POST['message']);

                $stmt->execute();
            }
        }
        return false;
    }

    public function getErrors(): array
    {
        return $this->errors;
    }
}