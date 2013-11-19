<h2>Agregar Usuario</h2>

<div style='width:30%;margin-left: auto;margin-right: auto'>
<?php

echo $this->Form->create('User', array(
    'inputDefaults' => array(
    
    )
));




echo $this->Form->input('nombre',array('label' => 'Nombre','type' => 'textbox'));
echo $this->Form->input('apellidos',array('label' => 'Apellidos','type' => 'textbox'));
echo $this->Form->input('direccion',array('label' => 'Direccion','type' => 'textbox'));
echo $this->Form->input('telefono',array('label' => 'Telefono','type' => 'textbox'));
echo $this->Form->input('username',array('label' => 'Nombre del Usuario','type' => 'textbox'));


echo $this->Form->input('password',array('label' => 'Contraseña'));


echo $this->Form->end(__('Guardar')); 

?>

<?php
echo $this->Html->link('Regresar',array('controller' => 'Users', 'action' => 'index'));
?>

<div>