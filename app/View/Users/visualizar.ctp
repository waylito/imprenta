<h2>Lista de Usuarios</h2>
<div style='width:70%;margin-left: auto;margin-right: auto'>
<?php

echo '<table>';
echo '<th>Nombre</th>';
echo '<th>Apellido</th>';
echo '<th>Direccion</th>';
echo '<th>Telefono</th>';
echo '<th>Nombre del Usuario</th>';
echo '<th>Contraseña</th>';

foreach($usuarios as $usuario){
echo '<tr>';
echo '<td>'.$usuario['User']['nombre'].'</td>';
echo '<td>'.$usuario['User']['apellidos'].'</td>';
echo '<td>'.$usuario['User']['direccion'].'</td>';
echo '<td>'.$usuario['User']['telefono'].'</td>';
echo '<td>'.$usuario['User']['username'].'</td>';
echo '<td>'.$usuario['User']['password'].'</td>';

}

echo '</table>';
?>
<div>
<div>
<?php
echo $this->Html->link('Regresar',array('controller' => 'Users', 'action' => 'index'));
?>
</div>