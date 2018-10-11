<div class="col-xs-12">
    <h1>Productos</h1>
    <?php if(!empty($this->session->flashdata())): ?>
		<div class="alert alert-<?php echo $this->session->flashdata('clase')?>">
			<?php echo $this->session->flashdata('mensaje') ?>
		</div>
	<?php endif; ?>
    <div>
        <a class="btn btn-success" href="<?php echo base_url() ?>index.php/productos/agregar">Nuevo <i class="fa fa-plus"></i></a>
    </div>
    <br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Código</th>
                <th>Descripción</th>
                <th>Precio de compra</th>
                <th>Precio de venta</th>
                <th>Ganancia</th>
                <th>Existencia</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($productos as $producto){ ?>
            <tr>
                <td><?php echo $producto->id ?></td>
                <td><?php echo $producto->codigo ?></td>
                <td><?php echo $producto->descripcion ?></td>
                <td><?php echo $producto->precioCompra ?></td>
                <td><?php echo $producto->precioVenta ?></td>
                <td><?php echo $producto->precioVenta - $producto->precioCompra ?></td>
                <td><?php echo $producto->existencia ?></td>
                <td><a class="btn btn-warning" href="<?php echo base_url() ."index.php/productos/editar/" . $producto->id ?>"><i class="fa fa-edit"></i></a></td>
                <td><a class="btn btn-danger" href="<?php echo base_url() ."index.php/productos/eliminar/" . $producto->id ?>"><i class="fa fa-trash"></i></a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>