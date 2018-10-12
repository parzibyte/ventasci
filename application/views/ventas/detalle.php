<div class="col-xs-12">
    <a class="btn btn-info" href="<?php echo base_url() ?>index.php/ventas">Ver todas las ventas</a>
    <h1>Detalles de la venta #<?php echo $venta->detalles->id; ?></h1>
    <h4>Total: <span class="label label-success"><?php echo $venta->detalles->total ?></span></h4>
    <h4>Fecha: <span class="label label-primary"><?php echo $venta->detalles->fecha ?></span></h4>
    <h2>Productos vendidos</h2>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Descripción</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($venta->productos as $producto){ ?>
                <tr>
                    <td><?php echo $producto->codigo ?></td>
                    <td><?php echo $producto->descripcion ?></td>
                    <td><?php echo $producto->cantidad ?></td>
                    <td><?php echo $producto->precio ?></td>
                    <td><?php echo $producto->cantidad * $producto->precio ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>