<?php

namespace App\Models;

use Core\Database;
use Validator\Validator;

class SupportFormEntries extends Database
{
    protected Database $db;
    protected string $table = 'wp_support_form_entries';
    protected array $errors = [];
    protected array $requiredFields = ['firstname', 'lastname', 'email', 'object'];

    public function __construct(Database $db)
    {
        parent::__construct(BASE_PATH . '.env.local.ini');
        $this->db = $db;
    }

    public function validate(): bool
    {
        if (!Validator::validateEmail($_POST['email'])) {
            $this->errors['email'] = 'L\'adresse email n\'est pas valide';
        }

        if (!Validator::emailContainsAtSymbol($_POST['email'])) {
            $this->errors['email'] = 'Le caractère @ est requis';
        }

        if (!Validator::min('firstname', 3)) {
            $this->errors['firstname'] = 'Le prénom doit contenir au minimum 3 caractères.';
        }

        if (!Validator::max('firstname', 255)) {
            $this->errors['firstname'] = 'Le prénom ne doit pas dépasser les 255 caractères.';
        }

        if (!Validator::min('lastname', 3)) {
            $this->errors['lastname'] = 'Le nom doit contenir au minimum 3 caractères.';
        }

        if (!Validator::max('lastname', 255)) {
            $this->errors['lastname'] = 'Le nom ne doit pas dépasser les 255 caractères.';
        }

        if (!Validator::no_numbers('firstname')) {
            $this->errors['firstname'] = 'Le prénom ne doit pas contenir de chiffre.';
        }

        if (!Validator::no_numbers('lastname')) {
            $this->errors['lastname'] = 'Le nom ne doit pas contenir de chiffre.';
        }

        if (!empty($_POST['message'])) {
            if (!Validator::min('message', 3)) {
                $this->errors['message'] = 'Le message doit contenir au minimum 3 caractères';
            }

            if (!Validator::max('message', 500)) {
                $this->errors['message'] = 'Le message ne doit pas dépasser les 500 caractères';
            }
        }


        if (!Validator::min('object', 3)) {
            $this->errors['object'] = 'Le champ des objects doit contenir au minimum 3 caractères';
        }

        if (!Validator::max('message', 500)) {
            $this->errors['object'] = 'Le champ des objets ne doit pas dépasser les 500 caractères';
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
                $sql = "INSERT INTO `{$this->table}` (`firstname`, `lastname`, `email`, `object`, `message`) VALUES (:firstname, :lastname, :email, :object, :message)";
                $stmt = $this->db->getConnection()->prepare($sql);

                $stmt->bindParam(':firstname', $_POST['firstname']);
                $stmt->bindParam(':lastname', $_POST['lastname']);
                $stmt->bindParam(':email', $_POST['email']);
                $stmt->bindParam(':object', $_POST['object']);
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