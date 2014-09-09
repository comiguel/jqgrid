<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<title></title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="{{asset('assets/css/tastronic/jquery-ui.theme.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/ui.jqgrid.css')}}">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.1/css/bootstrapValidator.min.css"/>

	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="{{asset('assets/js/i18n/grid.locale-es.js')}}"></script>
	<script src="{{asset('assets/js/jquery.jqGrid.min.js')}}"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.1/js/bootstrapValidator.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-6 center">
				{{ 
				    GridRender::setGridId("myFirstGrid")
				            ->enablefilterToolbar()
				            ->setGridOption('url',url('example/grid-data'))
				            ->setGridOption('rowNum',5)
				            ->setGridOption('shrinkToFit',false)
				            ->setGridOption('sortname','id')
				            ->setGridOption('caption','LaravelJqGrid example')
				            ->setNavigatorOptions('navigator', array('viewtext'=>'view'))
				            ->setNavigatorOptions('view',array('closeOnEscape'=>false))
				            ->setFilterToolbarOptions(array('autosearch'=>true))
				            ->setGridEvent('gridComplete', 'function(){alert("Grid complete event");}') 
				            ->setNavigatorEvent('view', 'beforeShowForm', 'function(){alert("Before show form");}')
				            ->setFilterToolbarEvent('beforeSearch', 'function(){alert("Before search event");}') 
				            ->addColumn(array('index'=>'id', 'width'=>55))
				            ->addColumn(array('name'=>'name','width'=>100))
				            ->addColumn(array('name'=>'lastname','index'=>'lastname', 'width'=>80, 'align'=>'right'))
				            ->addColumn(array('name'=>'username','index'=>'username', 'width'=>80))
				            ->addColumn(array('name'=>'email','index'=>'email', 'width'=>55,'searchoptions'=>array('attr'=>array('title'=>'Note title'))))
				            ->renderGrid(); 
				}}
			</div>
		</div>
	</div>
</body>
</html>