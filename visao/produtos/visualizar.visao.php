  <link rel="stylesheet" type="text/css" href="./publico/css/detalhes.css">
 
<div class="cima">
      <div class="imagens">
      <img src=" " alt="nature" style="width:277.563px;height: 264.200px; border-style: double;color: orange" 
        onMouseOver="this.src=' '" style="width:277.563px;height: 264.200px"
        onMouseOut="this.src=''"  style="width:277.563px;height: 264.200px"
        onClick="location='http://www.google.com.br'">
      </div>
      <div class="preed">
        <h2 style="color: orange"><?= $produto["nome"]?></h2>
        <h3>(Cod.)</h3>
        <h2 class="pre"><?= $produto["preco"]?></h2>
        <h3>ou 3x de R$16,64 sem juros</h3>
        <div class="columns medium-5">
        
        <select name="select">
          <option value="valor1" selected>Opções de cores</option> 
          <option value="valor2" >Marrom</option>
        <option value="valor3">Preto</option>
          <option value="valor3">Bege</option>
        <option value="valor3">Azul</option>
        </select>
        <div <hr align="center" width="100%" size="1" color=orange></div>
      </div>
    </div>
  
      <hr style="float: left; margin-top: 2%; margin-bottom: 2%;" align="center" width="100%" size="1" color=orange >
  </div>
<div style="float: left; padding-left: 2%; font-size:18; font-style: all; ">
  <h2 style="color: orange; font-size: 25;">Detalhes do produto</h2>
  <div style="font-style:unset;color: #585858;font-size: 20;">
<p> <?= $produto["descr"]?></p>
</div>
</div>