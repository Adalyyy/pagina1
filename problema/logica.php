<?php include 'header.php';?>
<?php
    $libro=(int)$_POST['libro'];
    $dia=(int)$_POST['dia'];
    $entrega=(int)$_POST['entrega'];

    $multa=$libro*5;
    $recargo=($dia*$libro)*2;
    $pago=$multa+$recargo;

    $descuento=$pago*0.20;
    
   
    if($libro>=0){
        if($entrega==1){  
            $pago=($pago-$descuento);    
        }else{
            $pago;
        }
    }else{
        $pago="Es Invalido 0";
    }

?>

<div class="container d-flex justify-content-center fw-light">
    <div class="card shadow-lg mt-5 p-4" style="max-width: 600px;">
        <h3 class="text-center text-danger">Pago de Multa</h3>
            <p>Días de atraso: <strong><?php echo $dia; ?></strong></p>
            <p>Libros atrasados: <strong><?php echo $libro; ?></strong></p>
            <hr>
            <p>Recargo:<strong><?php echo $recargo; ?> MXN</strong></p>
            <p>Multa:<strong><?php echo $multa; ?> MXN</strong></p>
            <?php if($entrega == 1): ?>
                <p class="text-danger">
                    <strong>Descuento aplicado:</strong> 20%
                </p>
            <?php endif; ?>
            <hr>
            <h5 class="text-center mt-3">Total a pagar</h5>
            <strong class="text-danger text-center">$<?php echo $pago; ?> MXN</strong>
        <a href="./index.php" class="btn btn-outline-danger mt-4 w-100 "> Volver</a>
    </div>
</div>
