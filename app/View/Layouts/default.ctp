<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="shortcut icon" href="/img/../favicon.png">
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->    
  <?php 
    echo $this->Html->css(array(
            'bootstrap.min.css',
            'bootstrap-theme.min.css',
            'font-awesome-4.0.3/css/font-awesome.min.css',
            'http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic','style.css'));  
    echo $this->Html->script(array(
      'jquery-1.11.1.min.js',
      'bootstrap.min.js',
      'Chart.min.js'
    ));?>

  <title>
    SEPLANDE
  </title>

</head>
<body>
<!-- navbar-inverse -->

  
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="navbar-header">
    <?php echo $this->Html->link('Início', 
          array('controller' => 'pages', 'action' => 'home'),
          array('class'=>'navbar-brand','rel'=>'home'));
    ?>
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </button>
  </div>
  <div class="collapse navbar-collapse">
    <ul class="nav navbar-nav ">            
      <li><?php echo $this->Html->link('Data Set', array('controller' => 'dataset', 'action' => 'newDataset'));?></li>
      <li><?php echo $this->Html->link('Wiki do Desenvolvedor', array('controller' => 'pages', 'action' => 'wiki'));?></li>
<!--       <li class="dropdown ">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li> -->
    </ul>
<!--     <div class="col-sm-3 col-md-3 pull-right">
          <form class="navbar-form" role="search">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                </div>
            </div>
          </form>
    </div> -->
<?php echo $this->Html->div('pull-right image-ban','<div class = "nome-in"> SEPLANDE    &nbsp; &nbsp; &nbsp;'.$this->Html->image('bandeira_barra.jpg').'</div></div>' );   ?>
  </div>
</nav>
<div class="container-fluid">

       <?php 
        echo $this->Session->flash(); 
        echo $this->Session->flash('auth');        
        echo $this->fetch('content'); ?>   

</div><!--/container-fluid-->

</body>
</html>
