<?php

session_start();

class UserController {
    
    private $db;
    
    public function __construct() {
        $db_dir = __DIR__ . '/../../database';
        $db_file = $db_dir . '/database.sqlite';
        
        // Garante que o diretório existe
        if (!is_dir($db_dir)) {
            mkdir($db_dir, 0755, true);
        }
        
        // Cria o arquivo de banco de dados se não existir
        if (!file_exists($db_file)) {
            touch($db_file);
            chmod($db_file, 0666);
        }
        
        try {
            $this->db = new PDO('sqlite:' . $db_file);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            // Se falhar, tenta remover e recriar
            if (file_exists($db_file)) {
                unlink($db_file);
            }
            touch($db_file);
            $this->db = new PDO('sqlite:' . $db_file);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        
        $this->createTable();
    }
    
    private function createTable() {
        $this->db->exec("
            CREATE TABLE IF NOT EXISTS users (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                name TEXT NOT NULL,
                phone TEXT NOT NULL,
                created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
                updated_at DATETIME DEFAULT CURRENT_TIMESTAMP
            )
        ");
    }
    
    public function index() {
        $users = $this->db->query("SELECT * FROM users ORDER BY created_at DESC")->fetchAll(PDO::FETCH_ASSOC);
        $success = isset($_GET['success']);
        $errors = $_SESSION['errors'] ?? [];
        $old = $_SESSION['old'] ?? [];
        
        unset($_SESSION['errors']);
        unset($_SESSION['old']);
        
        require __DIR__ . '/../../../resources/views/users/index.php';
    }
    
    public function store($data) {
        $errors = [];
        
        if (empty(trim($data['name'] ?? ''))) {
            $errors[] = 'Nome é obrigatório';
        }
        if (empty(trim($data['phone'] ?? ''))) {
            $errors[] = 'Telefone é obrigatório';
        }
        
        if (!empty($errors)) {
            $_SESSION['errors'] = $errors;
            $_SESSION['old'] = $data;
            header("Location: /");
            exit;
        }
        
        try {
            $stmt = $this->db->prepare("INSERT INTO users (name, phone) VALUES (?, ?)");
            $stmt->execute([trim($data['name']), trim($data['phone'])]);
            
            header("Location: /?success=1");
            exit;
        } catch (Exception $e) {
            $_SESSION['errors'] = ['Erro ao registrar membro'];
            header("Location: /");
            exit;
        }
    }
    
    public function destroy($id) {
        try {
            $stmt = $this->db->prepare("DELETE FROM users WHERE id = ?");
            $stmt->execute([$id]);
            
            header("Location: /?success=1");
            exit;
        } catch (Exception $e) {
            header("Location: /");
            exit;
        }
    }
}
