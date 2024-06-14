<?php

namespace App\Models;

use Core\Database;

class BlogEntries extends Database
{
    protected Database $db;
    protected string $table = 'wp_blog_entries';

    public function __construct(Database $db)
    {
        parent::__construct(BASE_PATH . '.env.local.ini');
        $this->db = $db;
    }

    public function getBlogMessage() :array|false
    {
        $sql = <<<SQL
            SELECT * from $this->table
            ORDER BY created_at DESC;
        SQL;

        $statement = $this->db->getConnection()->prepare($sql);
        $statement->execute();
        return $statement->fetchAll();
    }
}