<?php include ('menu.php');?>
<title>Ônibus</title>

<section>
<div class="container">
    <div class="form-top">
        <form action="../Controller/InsertOnibus.php" method="post">
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
            <div class="form-inline">
                <div class="form-group mb-4">
                    <label for="pot">Passageiros</label>&nbsp&nbsp
                        <input type="number" class="form-control input1" id="pot" name="numpass" >
                </div>
                <div class="form-group mb-4">
                    <label for="numei" class="group-left" id="numEixo">Número de eixos</label>&nbsp&nbsp
                    <input type="number" class="form-control daro" id="numei" name="numei" min=0>
                </div>
            </div>
            <button type="submit" class="btn btn-outline-primary">ENVIAR</button>
        </form>
    </div>
</div>

</section>
<script src="js/jquery.my.js"></script>