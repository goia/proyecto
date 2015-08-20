<h1>Alta de nuevo contacto</h1>
<br>
<h4>Datos personales</h4>
<?php
	echo $this->Form->create('Contact', array('type'=>'file'));
?>
<table class="table table-hover table-condensed">
    <tr>
	<td>Nombre:<td>
	<td>
		<?php echo $this->Form->input('nombre', array( 'style' => 'width:250px', 'label'=>'','value' =>'')); ?>   
	</td>
	<td>Apellidos: </td>
	<td>
		<?php echo $this->Form->input('apellidos', array( 'style' => 'width:250px', 'label'=>'','value' =>'')); ?>   
	</td>
    </tr>
    <tr>
	<td>Dni: </td>
	<td>
		<?php echo $this->Form->input('nif', array( 'style' => 'width:250px', 'label'=>'','value' =>'')); ?>   
	</td>
    </tr>
</table>
<h4>Contacto</h4>
<table class="table table-hover table-condensed">
    <tr>
	<td>Teléfono Fijo: </td>
	<td>
		<?php echo $this->Form->input('tfijo', array( 'style' => 'width:250px', 'label'=>'','value' =>'')); ?>   
	</td>
	<td>Teléfono móvil: </td>
	<td>
		<?php echo $this->Form->input('tmovil', array( 'style' => 'width:250px', 'label'=>'','value' =>'')); ?>   
	</td>
    </tr>
    <tr>
	<td>Fax: </td>
	<td>
		<?php echo $this->Form->input('fax', array( 'style' => 'width:250px', 'label'=>'','value' =>'')); ?>   
	</td>
	<td>Email: </td>
	<td>
		<?php echo $this->Form->input('email', array( 'style' => 'width:250px', 'label'=>'','value' =>'')); ?>   
	</td>
    </tr>
    <tr>
	<td>Web: </td>
	<td>
		<?php echo $this->Form->input('web', array( 'style' => 'width:250px', 'label'=>'','value' =>'')); ?>   
	</td>
    </tr>
</table>
<h4>Dirección</h4>
<table class="table table-hover table-condensed">
    <tr>
	<td>Calle, número y piso: </td>
	<td>
		<?php echo $this->Form->input('direccion', array( 'style' => 'width:250px', 'label'=>'','value' =>'')); ?>    
	</td>
	<td>Código Posta: </td>
	<td>
		<?php echo $this->Form->input('cp', array( 'style' => 'width:250px', 'label'=>'','value' =>'')); ?>   
	</td>
    </tr>
    <tr>
	<td>Localidad: </td>
	<td>
		<?php echo $this->Form->input('localidad', array( 'style' => 'width:250px', 'label'=>'','value' =>'')); ?>    
	</td>
	<td>Municipio: </td>
	<td>
		<?php echo $this->Form->input('municipio', array( 'style' => 'width:250px', 'label'=>'','value' =>'')); ?>   
	</td>
    </tr>
    <tr>
	<td>Provincia: </td>
	<td>
		<?php echo $this->Form->select('id_provincia',$provincias); ?>   
	</td>
	<td>País: </td>
	<td>
		<?php echo $this->Form->select('id_pais',$paises); ?>    
	</td>
    </tr>
</table>
<h4>Categorizaciones</h4>
<table class="table table-hover table-condensed">
    <tr>
	<td>Empresa: </td>
	<td>
		<?php echo $this->Form->select('idempresa',$empresas); ?>   
	</td>
	<td>Categoría: </td>
	<td>
		<?php echo $this->Form->select('idcategoria', $categorias); ?>   
	</td>
    </tr>
</table>
<?php
echo $this->Form->hidden('creacion', array('hiddenField' => true ,'value' => date("Y-m-d H:i:s")));
echo $this->Form->hidden('id_user', array('hiddenField' => true ,'value' => $this->Session->read('UserAuth.User.id')));
echo $this->Form->end('Alta Contacto');
//$this->Html->script('ckeditor.add.articulo', array('inline' => false)); 
?> 


<script type="text/javascript">
    // Turn off automatic editor creation first.
    CKEDITOR.disableAutoInline = true;
    CKEDITOR.inline( 'cke_ArticuloResumen' );
</script>


<?php

echo $this->Js->writeBuffer(); // Write cached scripts

?> 

