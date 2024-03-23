<?php

class MySqlDataProvider extends DataProvider
{
    public function get_terms() {
        $db = $this->connect();

        if ($db == null) {
            return [];
        }

        $query = $db->query("SELECT * FROM terms");

        $data = $query->fetchAll(PDO::FETCH_CLASS, 'GlossaryTerm');

        $query = null;
        $db = null;

        return $data;

    }
    
    public function get_term($term) {
        $db = $this->connect();

        if ($db == null) {
            return;
        }

        $sql = "SELECT * FROM terms WHERE id = :id";
        $stmt = $db->prepare($sql);

        $stmt->execute([
            ":id"=> $term,
        ]);

        $data = $stmt->fetchAll(PDO::FETCH_CLASS, 'GlossaryTerm');

        if (empty($data)) {
            return;
        }

        $stmt = null;
        $db = null;

        return $data[0];
    }
    
    public function search_terms($search) {
        $db = $this->connect();

        if ($db == null) {
            return [];
        }

        $sql = "SELECT * FROM terms WHERE term LIKE :search OR definition LIKE :search";
        $stmt = $db->prepare($sql);

        $stmt->execute([
            ":search" => '%'.$search.'%',
        ]);

        $data = $stmt->fetchAll(PDO::FETCH_CLASS, 'GlossaryTerm');

        $stmt = null;
        $db = null;

        return $data;

    }
    
    public function add_term($term, $definition) {
        $db = $this->connect();

        if ($db == null) {
            return;
        }

        $sql = "INSERT INTO terms (term, definition) VALUES (:term, :definition)";
        $stmt = $db->prepare($sql);

        $stmt->execute([
            ":term"=> $term,
            ":definition"=> $definition
        ]);

        $stmt = null;
        $db = null;
    }
    
    public function update_term($original_term, $new_term, $definition) {
        $db = $this->connect();

        if ($db == null) {
            return;
        }

        $sql = "UPDATE terms SET term = :term, definition = :definition WHERE id = :id";
        $stmt = $db->prepare($sql);

        $stmt->execute([
            ":term"=> $new_term,
            ":definition"=> $definition,
            ":id" => $original_term
        ]);

        $stmt = null;
        $db = null;
    }
    
    public function delete_term($term) {
        $db = $this->connect();

        if ($db == null) {
            return;
        }

        $sql = "DELETE FROM terms WHERE id = :id";
        $stmt = $db->prepare($sql);

        $stmt->execute([
            ":id" => $term
        ]);

        $stmt = null;
        $db = null;
    }

    private function connect() {
        try {
            return new PDO($this->source, CONFIG['db_user'], CONFIG['db_password']);
        } catch (PDOException $e) {
            return null;
        }
    }
}

