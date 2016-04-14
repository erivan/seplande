Utilização API Seplande
=======



Essa aplicação possui exemplo de como consumir dados da API do  Catálogo de Dados da Seplande/AL, e como adicionar um dataset ao catálogo.
A aplicação foi construida em cakephp, mais informações em [CakePHP](http://www.cakephp.org) - The rapid development PHP framework




OBS foi utilizado o [Chartjs](http://www.chartjs.org/docs/) para criar o gráfico

Inserindo DataSet CKAN
---------------------

Foi iniciado o método para adicionar Dataset, porém o mesmo não pode ser concluído/testado 
devido a questões técnicas de segurança. O método constitui em receber um formulário e criar o objeto 
JSON que é passado para a classe Ckan_client.php. Isso pode ser visto dentro do arquivo 
Controller/DatasetController.php. 
	A documentação do Ckan_client.php está dispónivel em 
[Ckan_client](https://github.com/jeffreybarke/Ckan_client-PHP)

OBS: php5-curl é necessário

