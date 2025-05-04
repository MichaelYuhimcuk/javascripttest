<?php
header('Content-Type: application/json');
require 'config.php';

$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];
$id = null;

if (preg_match('/\/api\.php\/(\d+)/', $uri, $matches)) {
    $id = (int)$matches[1];
}

switch ($method) {
    case 'GET':
        $stmt = $pdo->query("SELECT * FROM products");
        echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
        break;

    case 'POST':
        $input = json_decode(file_get_contents('php://input'), true);
        if (!isset($input['name'], $input['price'], $input['quantity'])) {
            http_response_code(400);
            echo json_encode(['error' => 'Missing fields']);
            break;
        }

        $stmt = $pdo->prepare("INSERT INTO products (name, price, quantity) VALUES (?, ?, ?)");
        $stmt->execute([$input['name'], $input['price'], $input['quantity']]);
        echo json_encode(['message' => 'Product created', 'id' => $pdo->lastInsertId()]);
        break;

    case 'PUT':
        if (!$id) {
            http_response_code(400);
            echo json_encode(['error' => 'Product ID missing']);
            break;
        }

        $input = json_decode(file_get_contents('php://input'), true);
        $fields = [];
        $params = [];

        if (isset($input['name'])) {
            $fields[] = "name = ?";
            $params[] = $input['name'];
        }
        if (isset($input['price'])) {
            $fields[] = "price = ?";
            $params[] = $input['price'];
        }
        if (isset($input['quantity'])) {
            $fields[] = "quantity = ?";
            $params[] = $input['quantity'];
        }

        if (!$fields) {
            http_response_code(400);
            echo json_encode(['error' => 'No fields to update']);
            break;
        }

        $params[] = $id;
        $stmt = $pdo->prepare("UPDATE products SET " . implode(', ', $fields) . " WHERE id = ?");
        $stmt->execute($params);
        echo json_encode(['message' => 'Product updated']);
        break;

    case 'DELETE':
        if (!$id) {
            http_response_code(400);
            echo json_encode(['error' => 'Product ID missing']);
            break;
        }

        $stmt = $pdo->prepare("DELETE FROM products WHERE id = ?");
        $stmt->execute([$id]);
        echo json_encode(['message' => 'Product deleted']);
        break;

    default:
        http_response_code(405);
        echo json_encode(['error' => 'Method not allowed']);
}
