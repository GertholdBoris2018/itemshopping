<div id="app">
<?php 
$data['sidebar'] = array('main'=>ADMIN_SIDEBAR_MANAGEMENT,'sub' => ADMIN_SIDEBAR_MANAGEMENT_CATEGORY_LIST) ;
$this->load->view('admin/leftside',$data);
?>
<div class="app-content">
<?php 
    $this->load->view('admin/topnav',$data);
?>
    <div class="main-content" >
        <div class="wrap-content container" id="container">
            <section id="page-title">
                <div class="row">
                    <div class="col-sm-8">
                        <h1 class="mainTitle">Manage Categories</h1>
                    </div>
                    <ol class="breadcrumb">
                        <li>
                            <span>Management</span>
                        </li>
                        <li class="active">
                            <span>Categories</span>
                        </li>
                    </ol>
                </div>
            </section>
            <div class="container-fluid container-fullw">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12 space20">
                                <button class="btn btn-green add-row">
                                    Add New <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="category_table">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach($categories as $category){
                                    ?>
                                    <tr id = "<?php echo $category->cate_id;?>">
                                        <td><?php echo $category->title;?></td>
                                        <td>
                                        <a href="#" class="edit-row">
                                            Edit
                                        </a></td>
                                        <td>
                                        <a href="#" class="delete-row">
                                            Delete
                                        </a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var newRow = false;
		var actualEditingRow = null;

		function restoreRow(oTable, nRow) {
			var aData = oTable.fnGetData(nRow);
			var jqTds = $('>td', nRow);

			for (var i = 0, iLen = jqTds.length; i < iLen; i++) {
				oTable.fnUpdate(aData[i], nRow, i, false);
			}

			oTable.fnDraw();
		}

		function editRow(oTable, nRow) {
			var aData = oTable.fnGetData(nRow);
			var jqTds = $('>td', nRow);
			jqTds[0].innerHTML = '<input type="text" class="form-control" value="' + aData[0] + '">';

			jqTds[1].innerHTML = '<a class="save-row" href="">Save</a>';
			jqTds[2].innerHTML = '<a class="cancel-row" href="">Cancel</a>';

		}

		function saveRow(oTable, nRow) {
			var jqInputs = $('input', nRow);
			oTable.fnUpdate(jqInputs[0].value, nRow, 0, false);
			oTable.fnUpdate('<a class="edit-row" href="">Edit</a>', nRow, 1, false);
			oTable.fnUpdate('<a class="delete-row" href="">Delete</a>', nRow, 2, false);
			oTable.fnDraw();
			newRow = false;
			actualEditingRow = null;
		}

		$('body').on('click', '.add-row', function(e) {
			e.preventDefault();
			if (newRow == false) {
				if (actualEditingRow) {
					restoreRow(oTable, actualEditingRow);
				}
				newRow = true;
				var aiNew = oTable.fnAddData(['', '', '']);
				var nRow = oTable.fnGetNodes(aiNew[0]);
				editRow(oTable, nRow);
				actualEditingRow = nRow;
			}
		});
		$('#category_table').on('click', '.cancel-row', function(e) {

			e.preventDefault();
			if (newRow) {
				newRow = false;
				actualEditingRow = null;
				var nRow = $(this).parents('tr')[0];
				oTable.fnDeleteRow(nRow);

			} else {
				restoreRow(oTable, actualEditingRow);
				actualEditingRow = null;
			}
		});
		$('#category_table').on('click', '.delete-row', function(e) {
			e.preventDefault();
			if (newRow && actualEditingRow) {
				oTable.fnDeleteRow(actualEditingRow);
				newRow = false;

			}
			var nRow = $(this).parents('tr')[0];
            var id = nRow.id;
			bootbox.confirm("Are you sure to delete this row?", function(result) {
				if (result) {
					$.blockUI({
					message : '<i class="fa fa-spinner fa-spin"></i> Do some ajax to sync with backend...'
					});
					// $.mockjax({
					// 	url : '/tabledata/delete/webservice',
					// 	dataType : 'json',
					// 	responseTime : 1000,
					// 	responseText : {
					// 		say : 'ok'
					// 	}
					// });

					$.ajax({
						type: "POST",
						data: {'id' : id},
						url : '<?php echo base_url();?>admin/management/categorydelete',
						dataType : 'json',
						success : function(json) {
							$.unblockUI();
							var result = json.result;
							if (result == "1") {
							oTable.fnDeleteRow(nRow);
							}
						}
					});				
					
				}
			});
			

			
		});
		$('#category_table').on('click', '.save-row', function(e) {
			e.preventDefault();

			var nRow = $(this).parents('tr')[0];
			$.blockUI({
                message : '<i class="fa fa-spinner fa-spin"></i> Do some ajax to sync with backend...'
                });
                // $.mockjax({
                // 	url : '/tabledata/add/webservice',
                // 	dataType : 'json',
                // 	responseTime : 1000,
                // 	responseText : {
                // 		say : 'ok'
                // 	}
                // });
                var jqInputs = $('input', nRow);
                //oTable.fnUpdate(jqInputs[0].value, nRow, 0, false);

				if(actualEditingRow && !newRow){
					var id = nRow.id;
					$.ajax({
						type: "POST",
						url : '<?php echo base_url();?>admin/management/categoryedit',
						data: {'id' : id, 'title':jqInputs[0].value},
						dataType : 'json',
						success : function(json) {
							$.unblockUI();
							var result = json.result;
							if (result == "1") {
								saveRow(oTable, nRow);
							}
							else{
								bootbox.alert("<?php echo lang('category_already_exist');?>");
							}
						}
					});	
				}
				else{
					$.ajax({
						type: "POST",
						url : '<?php echo base_url();?>admin/management/categoryadd',
						data: {'title' : jqInputs[0].value},
						dataType : 'json',
						success : function(json) {
							$.unblockUI();
							var result = json.result;
							if (result == "1") {
								saveRow(oTable, nRow);
							}
							else{
								bootbox.alert("<?php echo lang('category_already_exist');?>");
							}
						}
					});	
				}
                
		    });
		$('#category_table').on('click', '.edit-row', function(e) {
			e.preventDefault();
			if (actualEditingRow) {
				if (newRow) {
					oTable.fnDeleteRow(actualEditingRow);
					newRow = false;
				} else {
					restoreRow(oTable, actualEditingRow);

				}
			}
			var nRow = $(this).parents('tr')[0];
			editRow(oTable, nRow);
			actualEditingRow = nRow;

		});
		var oTable = $('#category_table').dataTable({
			"aoColumnDefs" : [{
				"aTargets" : [0]
			}],
			"oLanguage" : {
				"sLengthMenu" : "Show _MENU_ Rows",
				"sSearch" : "",
				"oPaginate" : {
					"sPrevious" : "",
					"sNext" : ""
				}
			},
			"aaSorting" : [[1, 'asc']],
			"aLengthMenu" : [[5, 10, 15, 20, -1], [5, 10, 15, 20, "All"] // change per page values here
			],
			// set the initial value
			"iDisplayLength" : 10,
		});
		$('#category_table_wrapper .dataTables_filter input').addClass("form-control input-sm").attr("placeholder", "Search");
		// modify table search input
		$('#category_table_wrapper .dataTables_length select').addClass("m-wrap small");
		// modify table per page dropdown
		$('#category_table_wrapper .dataTables_length select').select2();
		// initialzie select2 dropdown
		$('#category_table_column_toggler input[type="checkbox"]').change(function() {
			/* Get the DataTables object again - this is not a recreation, just a get of the object */
			var iCol = parseInt($(this).attr("data-column"));
			var bVis = oTable.fnSettings().aoColumns[iCol].bVisible;
			oTable.fnSetColumnVis(iCol, ( bVis ? false : true));
		});
</script>