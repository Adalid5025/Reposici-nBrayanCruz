<?php
require '../config/db.php';
require '../dao/MentorDAO.php';

$dao = new MentorDAO($pdo);
$mentor = $dao->obtenerPorId($_GET['id']);
?>

<form action="../controllers/MentorController.php?action=update" method="POST">
  <input type="hidden" name="id" value="<?= $mentor['id'] ?>">
  <input type="text" name="nombre_persona" value="<?= $mentor['nombre_persona'] ?>" required>
  <input type="text" name="rol" value="<?= $mentor['rol'] ?>" required>
  <input type="text" name="industria" value="<?= $mentor['industria'] ?>" required>
  <input type="text" name="experiencia" value="<?= $mentor['experiencia'] ?>">
  <input type="email" name="email" value="<?= $mentor['email'] ?>">
  <input type="text" name="pais" value="<?= $mentor['pais'] ?>">
  <textarea name="mensaje"><?= $mentor['mensaje'] ?></textarea>
  <button type="submit">Actualizar</button>
</form>