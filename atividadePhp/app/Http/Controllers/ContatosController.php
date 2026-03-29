<?php

class ContatosController {
    
    private $pdo;
    
    public function __construct() {
        $this->pdo = $this->getConnection();
    }
    
    private function getConnection() {
        $db_file = __DIR__ . '/../../../database/database.sqlite';
        $pdo = new \PDO('sqlite:' . $db_file);
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        
        $pdo->exec("
            CREATE TABLE IF NOT EXISTS users (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                name TEXT NOT NULL,
                phone TEXT NOT NULL,
                classification TEXT DEFAULT 'Sem classificação',
                created_at DATETIME DEFAULT CURRENT_TIMESTAMP
            )
        ");

        try {
            $pdo->exec("ALTER TABLE users ADD COLUMN classification TEXT DEFAULT 'Sem classificação'");
        } catch (\Exception $e) {
            // Coluna já existe
        }
        
        return $pdo;
    }
    
    public function index() {
        $users = $this->pdo->query("SELECT * FROM users ORDER BY created_at DESC")->fetchAll(\PDO::FETCH_ASSOC);
        $message = '';
        
        require __DIR__ . '/../../../resources/views/index.php';
    }
    
    public function store() {
        $name = $_POST['name'] ?? '';
        $phone = $_POST['phone'] ?? '';
        $classification = $_POST['classification'] ?? '';
        
        if (!empty($name) && !empty($phone) && !empty($classification)) {
            $stmt = $this->pdo->prepare("INSERT INTO users (name, phone, classification) VALUES (?, ?, ?)");
            $stmt->execute([$name, $phone, $classification]);
            $_GET['msg'] = 'Pessoa registrada com sucesso!';
        }
        
        header("Location: /");
        exit;
    }
    
    public function delete($id) {
        $this->pdo->prepare("DELETE FROM users WHERE id = ?")->execute([$id]);
        header("Location: /");
        exit;
    }
}
