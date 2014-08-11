<div class='row'>
  <div class = 'col-md-12'> 
    <!--left-->
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Utilizando API SEPLANDE</h3>
          </div>
          <div class="panel-body">
            <div class="col-sm-3">

              <div class="panel panel-primary">
              <div class="panel-heading" id ='btn1'>
                <h3 class="panel-title"><a href="#">Recuperando um JSON da api</a></h3>
              </div>
              </div>
              <div class="panel panel-primary">
              <div class="panel-heading" id ='btn2'>
                <h3 class="panel-title"><a href="#">Utilizando o JSON com Jquery</a></h3>
              </div>
              </div>
              <div class="panel panel-primary">
              <div class="panel-heading" id ='btn3'>
                <h3 class="panel-title"><a href="#">Converter XML para JSON</a></h3>
              </div>                            
              </div>                            
              
              
            </div><!--/left-->
            <!--center-->
            <div class="col-sm-9">
              <div class="row">
                <div class="col-xs-12">
                  <div class='body-wiki'> 
                    <button id = 'close' class = "btn btn-primary pull-right">x</button>
                <div id ="inicio">                  
                   <pre><p>Essa página foi criada com o intuito de ajudar ao desenvolvedores com a API da SEPLANDE .</p></pre>                 
          
              </div>                    
                  <div id ='recuperando1'>
                    <p>Para recuperar um JSON da API basta passar a URL ao método PHP <a style ="color:blue;" target= "_blank"href="http://php.net/manual/pt_BR/function.file-get-contents.php">file_get_contents()</a> que carrega um arquivo em uma string e em seguida basta retorna-ló em uma function EX: <br>
                    <code><pre>
                        public function getJsonMan() {
                          $json = file_get_contents('http://geo.seplande.al.gov.br/geoweb/wizard/php/file/alagoas_TaxadeincidnciadeAIDScasospor100000habitantesHomens_20140810_1918.json');  
                          print_r($json);die();
                        } 
                      </pre>
                    </code>
                    <p>Agora o JSON está acessível localmente. </p>
                    </p>
                    </div>  
                    <div id ='recuperando2'>           
                    <p>Com a biblioteca Jquery inserida no sistema. Basta chamar o método getJSon passando a URL com o JSON EX:<code><pre>
                      $.getJSON( "function-criada", function( data ) {

                      });
                    </pre></code><p>Com isso você já está pronto para utilizar o JSON como queira. </p>
                    </p>
                    </div>
                    <div id ='recuperando3'>     
                    <p>Devido a alguns problemas técnicos, foi necessário criar um método para converter XML para JSON. O método consiste em carregar o JSON em uma variável, remover: espaçamentos; quebras de linhas e etc..., criar um objeto apartir da strig XML (<a style ="color:blue;"href="http://php.net/manual/pt_BR/function.simplexml-load-string.php" target= "_blank">simplexml_load_string()</a>)e finalmente disponibilizar o objeto JSON (<a style ="color:blue;" href="http://php.net/manual/pt_BR/function.json-encode.php"target= "_blank">json_encode()</a>) EX:
                      <code><pre>
                          public function convertXmlToJson ($url) {
                            $fileJson= file_get_contents($url);
                            $fileJson = str_replace(array("\n", "\r", "\t"), '', $fileJson);
                            $fileJson = trim(str_replace('"', "'", $fileJson));
                            $xml = simplexml_load_string($fileJson);
                            $json = json_encode($xml);
                              return $json;
                        } 
                      </pre></code>

                    </p>
                  </div>                                                                                           
                  </div>
                </div>
              </div>
            </div><!--/center-->
        </div><!--/panel body-->
    </div><!--/panel-->
  </div><!--/container-->
</div><!--/row-->
<script type="text/javascript">
$( "#recuperando1" ).hide();
$( "#recuperando2" ).hide();
$( "#recuperando3" ).hide();


$( "#btn1" ).click(function() {
  $( "#recuperando1" ).show();
  $( "#recuperando2" ).hide();  
  $( "#recuperando3" ).hide();
  $( "#inicio" ).hide();
  
});
$( "#btn2" ).click(function() {
  $( "#recuperando1" ).hide();
  $( "#recuperando2" ).show();  
  $( "#recuperando3" ).hide();
  $( "#inicio" ).hide();

});
$( "#btn3" ).click(function() {
  $( "#recuperando1" ).hide();
  $( "#recuperando2" ).hide();  
  $( "#recuperando3" ).show();
  $( "#inicio" ).hide();
});

$( "#close" ).click(function() {
  $( "#recuperando1" ).hide();
  $( "#recuperando2" ).hide();  
  $( "#recuperando3" ).hide();
  $( "#inicio" ).show();
  
});

</script>