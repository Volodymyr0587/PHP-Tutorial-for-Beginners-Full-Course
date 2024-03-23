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
        
    }
    
    public function delete_term($term) {
        
    
    }

    private function connect() {
        try {
            return new PDO($this->source, CONFIG['db_user'], CONFIG['db_password']);
        } catch (PDOException $e) {
            return null;
        }
    }
}

