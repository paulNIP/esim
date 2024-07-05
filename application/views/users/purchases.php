<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.js"></script>
<div id="container">
<style type="text/css">

::selection { background-color: #E13300; color: white; }
::-moz-selection { background-color: #E13300; color: white; }

body {
	background-color: #fff;
	margin: 40px;
	font: 13px/20px normal Helvetica, Arial, sans-serif;
	color: #4F5155;
}

a {
	color: #003399;
	background-color: transparent;
	font-weight: normal;
}

h1 {
	color: #444;
	background-color: transparent;
	border-bottom: 1px solid #D0D0D0;
	font-size: 19px;
	font-weight: normal;
	margin: 0 0 14px 0;
	padding: 14px 15px 10px 15px;
}

code {
	font-family: Consolas, Monaco, Courier New, Courier, monospace;
	font-size: 12px;
	background-color: #f9f9f9;
	border: 1px solid #D0D0D0;
	color: #002166;
	display: block;
	margin: 14px 0 14px 0;
	padding: 12px 10px 12px 10px;
}

#body {
	margin: 0 15px 0 15px;
}

p.footer {
	text-align: right;
	font-size: 11px;
	border-top: 1px solid #D0D0D0;
	line-height: 32px;
	padding: 0 10px 0 10px;
	margin: 20px 0 0 0;
}

#containerTable {
	margin: 10px;
	border: 1px solid #D0D0D0;
	box-shadow: 0 0 8px #D0D0D0;
}
</style>
	<!-- Page Header -->
	<div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
		<div>
			<h3 class="mb-1">Welcome Paul </h3>
			<h6 class="fs-14 mb-1 text-muted">Country Profile: UGANDA</h6>
		</div>
	</div>
                <!-- End Page Header -->
	<div class="containerTable">
			<table id="example" class="display" style="width:100%">
				<thead>
				<tr>
					<th>Id</th>
					<th>User Name</th>
					<th>Name</th>
					<th>Gender</th>
					<th>Status</th>
				</tr>
				</thead>
			</table>

	</div>
                <!-- End::row-5 -->
	
</div>



<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>
	$(document).ready(function() {
		tableLoad();
		function tableLoad() {
			var table = $('#example').DataTable(
					{
						"processing": true,
						"serverSide": true,
						"ajax": "<?=base_url('index.php/purchases/getData')?>",
						"order": [[1, 'desc']],
						"columnDefs": [
							{"targets": 0, "name": "id", 'searchable': true, 'orderable': true},
							{"targets": 1, "name": "username", 'searchable': true, 'orderable': true},
							{"targets": 2, "name": "first_name", 'searchable': true, 'orderable': true},
							{"targets": 3, "name": "gender", 'searchable': true, 'orderable': true},
							{"targets": 4, "name": "status", 'searchable': true, 'orderable': true},

						]
					});
		}
	} );
</script>
