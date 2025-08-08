<?php
class Mentor {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function listarTodos() {
        $stmt = $this->pdo->query("SELECT * FROM mentores_emprendedores");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerPorId($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM mentores_emprendedores WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function crear($datos) {
        $sql = "INSERT INTO mentores_emprendedores (nombre_persona, rol, industria, experiencia, email, pais, mensaje)
                VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            $datos['nombre_persona'],
            $datos['rol'],
            $datos['industria'],
            $datos['experiencia'],
            $datos['email'],
            $datos['pais'],
            $datos['mensaje']
        ]);
    }

    public function actualizar($id, $datos) {
        $sql = "UPDATE mentores_emprendedores SET nombre_persona=?, rol=?, industria=?, experiencia=?, email=?, pais=?, mensaje=? WHERE id=?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            $datos['nombre_persona'],
            $datos['rol'],
            $datos['industria'],
            $datos['experiencia'],
            $datos['email'],
            $datos['pais'],
            $datos['mensaje'],
            $id
        ]);
    }

    public function eliminar($id) {
        $stmt = $this->pdo->prepare("DELETE FROM mentores_emprendedores WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>
