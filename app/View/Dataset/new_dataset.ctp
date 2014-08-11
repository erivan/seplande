<div class='row'>
	<div class = 'col-sm-12'>				
			<div class="panel panel-primary">
				<div class="panel-heading">
    				<h3 class="panel-title">Novo Dataset</h3>
  				</div>
				<div class="panel-body ">
					<div class='col-md-12'>
					<div class='col-md-2' >						
						Formulário para adicionar Dataset no CKAN mais informações no link
						<a style ="color:blue;" target= "_blank" href="https://github.com/erivan/seplande">CKAN</a>
						
					</div>
					<div class='col-md-10'>
				<?php
	                echo $this->Form->create('Dataset', $options = array('role'=>"form",'class'=>'form-horizontal'));
	                	$this->Form->inputDefaults(array(
	                    	'class' => 'form-control',
	                    	'label'=>false,
	                    	'div'=>false
	                	)); 

	                	$labelOptions = array('class'=>'col-sm-2 control-label');
	 
	                		echo $this->Html->div('form-group', 
	                				$this->Form->label('name','Nome',$labelOptions).
	                				$this->Html->div('col-sm-6', $this->Form->input('name'))
	                		);

	                		echo $this->Html->div('form-group', 
	                				$this->Form->label('title','Título',$labelOptions).
	                				$this->Html->div('col-sm-6', $this->Form->input('title'))
	                		);

	                		echo $this->Html->div('form-group', 
	                				$this->Form->label('url','Url',$labelOptions).
	                				$this->Html->div('col-sm-6', $this->Form->input('url'))
	                		);					

	                		echo $this->Html->div('form-group', 
	                				$this->Form->label('notes','Notas',$labelOptions).
	                				$this->Html->div('col-sm-6', $this->Form->input('notes'))
	                		);	

							echo $this->Html->div('form-group', 
	                				$this->Form->label('tags','Tags',$labelOptions).
	                				$this->Html->div('col-sm-6', $this->Form->input('tags'))
	                		);	
			
			         		echo $this->Html->div('form-group', 
	                				$this->Form->label('maintainer','Criador (Maintainer)',$labelOptions).
	                				$this->Html->div('col-sm-6', $this->Form->input('maintainer'))
	                		);	 

						    echo $this->Html->div('form-group', 
	                				$this->Form->label('maintainer_email','Email do criador',$labelOptions).
	                				$this->Html->div('col-sm-6', $this->Form->input('maintainer_email'))
	                		);	

						    echo $this->Html->div('form-group', 
	                				$this->Form->label('license_id','Id da licença',$labelOptions).
	                				$this->Html->div('col-sm-6', $this->Form->input('license_id',array('type'=>'text')))
	                		);
						?>
					</div>
					</div>
				</div>
				<div class="panel-footer">
					<?php
							echo $this->Form->button('Criar', array('class'=>'btn btn-primary pull-right'));
							echo $this->Form->end();
					?>
				<br><br>
				</div>
			</div>
	</div>
</div>
