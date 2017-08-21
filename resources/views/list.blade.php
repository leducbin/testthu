<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>AJAX TO DO list PROJECT</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
<br/>
	<div class="container">
		<div class="row">
			<div class="col-lf-offset-3 col-lg-6">
				<div class="panel panel-default">
				  <div class="panel-heading">
				    <h3 class="panel-title">AJAX TO DO LIST PROJECT<a href="#" id="addNew" class="pull-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus" aria-hidden="true"></i></a></h3>
				  </div>
				  <div class="panel-body" id="items">
				    <ul class="list-group">
				      <li class="list-group-item ourItem" data-toggle="modal" data-target="#myModal">Cras justo odio</li>
				      <li class="list-group-item ourItem" data-toggle="modal" data-target="#myModal">Dapibus ac facilisis in</li>
				      <li class="list-group-item ourItem" data-toggle="modal" data-target="#myModal">Morbi leo risus</li>
				      <li class="list-group-item ourItem" data-toggle="modal" data-target="#myModal">Porta ac consectetur ac</li>
				      <li class="list-group-item ourItem" data-toggle="modal" data-target="#myModal">Vestibulum at eros</li>
				    </ul>
				  </div>
				</div>
			</div>
			<!-- Button trigger modal -->

			<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title">Add New ITem</h4>
			      </div>
			      <div class="modal-body">
			        <p><input type="text" name="" placeholder="Write Item Here" id="addItem" class="form-control"></p>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-warning" id="delete" data-dismiss="modal" style="display: none;">Delete</button>
			        <button type="button" class="btn btn-primary" id="saveChanges" style="display: none;" data-dismiss="modal">Save changes</button>
			        <button type="button" class="btn btn-primary" id="AddButton" data-dismiss="modal">Add Item</button>
			      </div>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
		</div>
	</div>

	{{csrf_field()}}
	<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
  	$(document).ready(function() {
  		$(document).on('click', '.ourItem', function(event) {
  				var text = $(this).text();
  				$('#addItem').val(text);
  				$('#title').text('Edit Item');
  				$('#delete').show('400');
  				$('#saveChanges').show('400');
  				$('#AddButton').hide('400');
  			});
  		});
  		$('#addNew').click(function(event) {
			$('#addItem').val("");
			$('#title').text('Add New Item');
			$('#delete').hide('400');
			$('#saveChanges').hide('400');
			$('#AddButton').show('400');
			// alert('aaa');
		});
		$('#AddButton').click(function(event) {
			var text = $('#addItem').val();
			$.post('list', {'text': text,'_token':$('input[name=_token]').val()}, function(data) {
				console.log(data);
				$('#items').load(location.href + ' #items')
			});
		});
  	});
  </script>
</body>
</html>