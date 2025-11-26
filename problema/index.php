
<?php include 'header.php';?>
<?php include 'footer.php';?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card mt-5 mx-auto">
                <form method="POST" action="logica.php">
                    <h2 class="fw-light text-center">Pago por multas</h2>
                    <label for="libro" class="fw-light text-center">¿Cuantós libros atrasados tienes?</label>
                    <input type="number" name="libro" id="libro"class="form-control" required >
                    <label for="dia" class="fw-light text-center">¿Cuantós dias de atraso llevas?</label>
                    <input type="number" name="dia" id="dia" class="form-control" required>
                    <label for="entrega" class="fw-light text-center">¿Vas a entregar todos los libros?</label>
                    <select name="entrega" id="entrega"class="form-select"required>
                        <option value=1>Sí</option>
                        <option value=0>No</option>
                    </select>
                    <button type="submit" class="btn btn-outline-warning mt-4 ">Calcular Multas</button>
                    <button type="reset" class="btn btn-outline-danger mt-4 ">Limpiar datos</button>
                <form>
            </div>
        </div>    
    </div>
</div>
