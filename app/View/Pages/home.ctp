<div class='row'>
  <div class='col-sm-12'>

    
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Dados sobre a AIDS em Alagoas </h3>
        </div>
        <div class="panel-body">
          <div class='col-md-12'>
            <div class='col-md-4'>
          <div class="panel panel-primary">
              <div class="panel-heading" id ='btnHomem'>
                <h3 class="panel-title"><a href="#">Incidência de AIDS por 100 mil habitantes em homens</a></h3>
              </div>
              <div class="panel-body">
                  <?php echo $this->Html->image('man.png');?>  &nbsp;&nbsp;Dados que mostram a quantidade de homens infectados com AIDS
              </div>
          </div>  
          <div class="panel panel-primary">
              <div class="panel-heading" id ='btnMulher'>
                <h3 class="panel-title"><a href="#">Incidência de AIDS por 100 mil habitantes em mulheres</a></h3>
              </div>
              <div class="panel-body">
                  <?php echo $this->Html->image('fem.png');?>  &nbsp;&nbsp;Dados que mostram a quantidade de mulheres infectados com AIDS
              </div>
          </div>  
          <div class="panel panel-primary">
              <div class="panel-heading" id = "btnTotal">
                <h3 class="panel-title"><a href="#">Total por 100 mill habitantes</a></h3>
              </div>
              <div class="panel-body">
                  <?php echo $this->Html->image('man_fem.png');?>  &nbsp;&nbsp;Dados que mostram a quantidade infectados com AIDS da população em geral
              </div>
          </div>                      
          </div>  
          
<div class='col-md-8'>
          <div class="panel panel-primary">
              <div class="panel-body">
            <button id = 'close' class = "btn btn-primary pull-right">x</button>
                <div id ="inicio">
                  <div class='col-md-9'>
                   <pre> <p> &nbsp; &nbsp;Observando-se o sério impacto que o número de pessoas infectadas com o vírus HIV/aids causam na sociedade e nas economias; no mundo do trabalho,tanto em setores formais como informais; nos trabalhadores, suas famílias e dependentes; nas organizações de empregadores e de trabalhadores e nas empresas públicas e privadas, chama-se a atenção para o desenvolvimento desta doença em nossa sociedade.</p><p>&nbsp; &nbsp;O presente sistema possui como princial função servir de alerta para implementação de políticas públicas no âmbito da sáude pública para que haja o efetivo controle e consequentemente a diminuiçao do número de pessoas infectadas.</p><p>&nbsp; &nbsp;Esses dados foram retirados da API da SEPLANDE</p>
                  </pre>        
                  </div>
                  <div class='col-md-2' >
                    <?php echo $this->Html->image('aids.jpg', $options = array('style'=>"max-width:100%;height:auto;"));?>
                  </div>
              </div>
              <div id ="homem">                
                  <h3>Incidência no período de 2005 até 2010</h3>
                  <canvas id="homemCanvas" height="400" width="600" class = 'maxCanvas'></canvas>
              </div>
              <div id ="mulher">                
                  <h3>Incidência no período de 2005 até 2010</h3>
                  <canvas id="mulherCanvas" height="400" width="600" class = 'maxCanvas'></canvas>
              </div>
              <div id ="total">

                  <h3>Incidência no período de 2005 até 2010</h3>
                  <canvas id="totalCanvas" height="400" width="600" class = 'maxCanvas'></canvas>
              </div>                            
              </div>
          </div>             
          </div>             
        </div>  
        </div>

      </div>      
  
  </div>
</div><!--/center-->
<?php echo $this->Html->script('graficos.js');?>
<script type="text/javascript">

$( "#homem" ).toggle();
$( "#mulher" ).toggle();
$( "#total" ).toggle();



</script>