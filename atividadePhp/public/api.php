<?php

header('Content-Type: application/json');

try {
    $pdo = require __DIR__ . '/../database/connection.php';
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $data = json_decode(file_get_contents('php://input'), true);
        
        if (empty($data['name']) || empty($data['phone'])) {
            http_response_code(400);
            echo json_encode(['error' => 'Nome e telefone são obrigatórios']);
            exit;
        }
        
        $stmt = $pdo->prepare("INSERT INTO users (name, phone) VALUES (?, ?)");
        $stmt->execute([$data['name'], $data['phone']]);
        
        echo json_encode([
            'success' => true,
            'id' => $pdo->lastInsertId()
        ]);
        
    } elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $stmt = $pdo->query("SELECT * FROM users ORDER BY created_at DESC");
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($users);
        
    } elseif ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
        $id = $_GET['id'] ?? null;
        if (!$id) {
            http_response_code(400);
            echo json_encode(['error' => 'ID é obrigatório']);
            exit;
        }
        
        $stmt = $pdo->prepare("DELETE FROM users WHERE id = ?");
        $stmt->execute([$id]);
        
        echo json_encode(['success' => true]);
    } else {
        http_response_code(405);
        echo json_encode(['error' => 'Método não permitido']);
    }
    
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
}
