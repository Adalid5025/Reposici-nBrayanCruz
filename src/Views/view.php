<?php
require '../config/db.php';
require '../dao/Mentor.php';

$dao = new Mentor($pdo);
$mentor = $dao->obtenerPorId($_GET['id']);
?>

<h2>Detalles del Mentor</h2>
<p><strong>Nombre:</strong> <?= $mentor['nombre_persona'] ?></p>
<p><strong>Rol:</strong> <?= $mentor['rol'] ?></p>
<p><strong>Industria:</strong> <?= $mentor['industria'] ?></p>
<p><strong>Experiencia:</strong> <?= $mentor['experiencia'] ?></p>
<p><strong>Email:</strong> <?= $mentor['email'] ?></p>
<p><strong>País:</strong> <?= $mentor['pais'] ?></p>
<p><strong>Mensaje:</strong> <?= $mentor['mensaje'] ?></p>
<a href="list.php">Volver</a>