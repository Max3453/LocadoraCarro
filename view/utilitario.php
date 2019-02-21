<?php include ('menu.php');?>
<title>Formulário de Carro</title>

<section>
<div class="container">
    <div class="form-top">
        <form action="../Controller/InsertVeiculosU.php" method="post">
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

            </div>
            <div class="form-group">
                <label for="tipo">Tipo</label>
                    <select class="form-control" name="tipo" id="tipo">
                        <option value="Urbano">Urbano</option>
                        <option value="Off-Road">Off-Road</option>
                    </select>
            </div>
            <div class="form-group">
                <label for="tracao">Tipo de tração</label>
                    <select class="form-control" name="tr" id="tracao">
                        <option value="Dianteira">Dianteira</option>
                        <option value="Traseira">Traseira</option>
                        <option value="4x4">4x4</option>
                    </select>
            </div>
            <div class="form-group">
                <label for="daro">Diâmetro do aro</label>
                <input type="number" class="form-control daro" id="daro" name="daro">
            </div>   
            <div class="form-group mb-4 form-check">
                    <input type="checkbox" name="ts" class="form-check-input" id="ts">
                    <label class="form-check-label" for="ts">Possui teto solar?</label>&nbsp&nbsp
                </div>   
            </div>
    <center><button type="submit" class="btn btn-outline-primary">Submit</button>
        </form>
    </div>
</div>

</section>
<script src="js/jquery.my.js"></script>