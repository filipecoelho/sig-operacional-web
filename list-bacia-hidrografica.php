<div class="panel" ng-controller="ListBaciaHidrograficaCtrl">
	<div class="panel-body">
		<div id="toolbar">
			<a href="form-new-bacia-hidrografica" class="btn btn-success btn-labeled fa fa-plus-square">
				Cadastrar Novo
			</a>
		</div>
		<table class="bootstrap-table" 
			data-toggle="table"
			data-url="http://<?php echo $_SERVER['HTTP_HOST']; ?>/sig-operacional-api/bacias-hidrograficas.json"
			data-search="true"
			data-toolbar="#toolbar"
			data-show-refresh="true"
			data-show-toggle="true"
			data-show-columns="true"
			data-page-list="[5, 10, 20]"
			data-page-size="5"
			data-pagination="true"
			data-side-pagination="server"
			data-show-pagination-switch="true">
			<thead>
				<tr>
					<th data-visible="true" data-align="center" data-formatter="editFormater" data-width="20">Ações</th>
					<th data-visible="true" data-sortable="true" data-field="nme_bacia_hidrografica">Descrição</th>
				</tr>
			</thead>
		</table>
	</div>
</div>