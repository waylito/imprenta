<h2>Agregar Comentario</h2>

<div style='width:30%;margin-left: auto;margin-right: auto'>
<?php

echo $this->Form->create('Comentario', array(
    'inputDefaults' => array(
    
    )
));
echo $this->Form->input('id',array('label' => 'Id','type' => 'textbox'));
echo $this->Form->input('autor',array('label' => 'Autor','type' => 'textbox'));
echo $this->Form->input('titulo',array('label' => 'Titulo','type' => 'textbox'));
echo $this->Form->input('fecha',array('label' => 'Fecha','type' => 'textbox'));


echo $this->Form->input('descripcion',array('label' => 'Descripcion'));


echo $this->Form->end(__('Guardar')); 

?>

<?php
echo $this->Html->link('Regresar',array('controller' => 'Comentarios', 'action' => 'index'));
?>

<?php

echo '<table>';

foreach($coment as $comenta){
echo '<tr>';
echo '<td>'.$comenta['Comentario']['id'].'</td>';
echo '<td>'.$comenta['Comentario']['ator'].'</td>';
echo '<td>'.$comenta['Comentario']['titulo'].'</td>';
echo '<td>'.$comenta['Comentario']['fecha'].'</td>';
echo '<td>'.$comenta['Comentario']['descripcion'].'</td>';


}

echo '</table>';
?>

<div>