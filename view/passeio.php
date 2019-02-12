<?php include ('menu.php');?>
<title>Veiculo de Passeio</title>

<section>
<div class="container">
    <div class="form-top">
        <form action="../index.php" method="get">
            <div class="form-inline">
                <div class="form-group mb-4">
                    <label for="placa">Placa</label>
                    <input type="text" class="form-control input-space placa" name="placa" id="placa" placeholder="xxx-xxxx">&nbsp&nbsp
                </div>
                <div class="form-group mb-4">
                    <label for="cor" class="label-space">Cor</label>
                    <input type="text" class="form-control" id="cor" name="cor">
                </div>
                <div class="form-group mb-4">
                    <label for="modelo" class="group-left label-space">Modelo</label>&nbsp&nbsp
                    <input type="text" class="form-control input-space" id="modelo" name="modelo" >
                </div>
            </div>
            <div class="form-inline">
                <div class="form-group mb-4">
                    <label for="fabricante">Fabricante</label>&nbsp&nbsp
                    <input type="text" class="form-control input-space1" id="fabricante" name="fabricante">
                </div>&nbsp&nbsp
                <div class="form-group mb-4">
                    <label for="anofabri" class="label-space">Ano de fabricação</label>&nbsp&nbsp
                    <input type="text" class="form-control frab" id="anofabri" name="anofabri" placeholder="XX/XX/XXXX">
                </div>
            </div>
            <div class="form-inline">
                <div class="form-group mb-4">
                    <label for="valordia">Valor da diária</label>
                    <input type="text" class="form-control dinheiro" id="valordia" name="valordia" placeholder="">
                </div>
                <div class="form-group mb-4">
                    <label for="status" id="status">Situação do veiculo</label>
                        <select class="form-control" name="status" id="select1">
                            <option value="a">Alugado</option>
                            <option value="m">Manutenção</option>
                            <option value="d">Disponível</option>
                        </select>
                </div>
            </div>
            <div class="form-group">
                <label for="numporta">Número de portas</label>
                    <select class="form-control" name="numporta" >
                        <option value="0">Nenhum</option>
                        <option value="1">Um</option>
                        <option value="2">Dois</option>
                        <option value="3">Três</option>
                        <option value="4">Quatro</option>
                    </select>
            </div>
            <div class="form-group">
                <label for="tipo">Tipo</label>
                    <select class="form-control" name="tipo" id="tipo">
                        <option value="u">Urbano</option>
                        <option value="off">Off-Road</option>
                    </select>
            </div>
            <div class="form-inline">
                <div class="form-group mb-4 form-check">
                    <input type="checkbox" name="ar" class="form-check-input" id="ar">
                    <label class="form-check-label" for="ar">Possui ar-condicionado?</label>&nbsp&nbsp
                </div>
                <div class="form-group mb-4 form-check">
                    <input type="checkbox" name="dr" class="form-check-input" id="dh">
                    <label class="form-check-label" for="dh">Possui direção hidráulica?</label>&nbsp&nbsp
                </div>
            </div>
            <button type="submit" class="btn btn-outline-primary">Submit</button>
        </form>
    </div>
</div>

</section>
<script src="js/jquery.my.js"></script>