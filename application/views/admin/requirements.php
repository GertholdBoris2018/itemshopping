<div id="app">
<?php 
$data['sidebar'] = array('main'=>ADMIN_SIDEBAR_MANAGEMENT,'sub' => ADMIN_SIDEBAR_MANAGEMENT_REQUIREMENTS_LIST) ;
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
                        <h1 class="mainTitle"><?php echo lang('admin_management_requirements');?></h1>
                    </div>
                    <ol class="breadcrumb">
                        <li>
                            <span><?php echo lang('admin_left_management');?></span>
                        </li>
                        <li class="active">
                            <span><?php echo lang('admin_left_requirements');?></span>
                        </li>
                    </ol>
                </div>
            </section>
            <div class="container-fluid container-fullw">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12 space20">
                                <a href="<?php echo base_url();?>admin/Management/requirementadd" class="mb-xs mt-xs mr-xs btn btn-primary"><?php echo lang('add_requirement');?></a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="requirements_table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>Owner</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach($requirements as $requirement){
                                    $price_range = $requirement->price;
                                    $currency = $requirement->currency;
                                    $prices = explode("_",$price_range);
                                    $price = '';
                                    $len = count($prices);
                                    switch ($len) {
                                        case 1:
                                            $price = $currency.$prices[0];
                                            break;
                                        case 2:
                                            if($prices[0] == '') $price = 'Under '.$currency.$prices[1];
                                            elseif($prices[1] == '') $price = 'Over '.$currency.$prices[0];
                                            else $price = $currency.$prices[0].' ~ '.$currency.$prices[1];
                                            break;
                                        default:
                                            $price = '';
                                            break;
                                            
                                    }
                                    if(count($prices) == 1) $price_range = $currency.$prices[0];
                                    ?>
                                    <tr>
                                        <td><?php echo $requirement->id;?></td>
                                        <td><?php echo $requirement->title;?></td>
                                        <td><?php echo $requirement->description;?></td>
                                        <td><?php echo $price;?></td>
                                        <td><?php echo $requirement->name;?></td>
                                        <td>
                                        <a href="<?php echo base_url();?>admin/Management/requirementedit/<?php echo $requirement->id?>" class="edit-row">
                                            Edit
                                        </a></td>
                                        <td>
                                        <a href="javascript:;" class="delete-row" onclick="deleteRequirement('<?php echo $requirement->id;?>')">
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
    var oTable = $('#requirements_table').dataTable({
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
		$('#requirements_table_wrapper .dataTables_filter input').addClass("form-control input-sm").attr("placeholder", "Search");
		// modify table search input
		$('#requirements_table_wrapper .dataTables_length select').addClass("m-wrap small");
		// modify table per page dropdown
		$('#requirements_table_wrapper .dataTables_length select').select2();
		// initialzie select2 dropdown
		$('#requirements_table_column_toggler input[type="checkbox"]').change(function() {
			/* Get the DataTables object again - this is not a recreation, just a get of the object */
			var iCol = parseInt($(this).attr("data-column"));
			var bVis = oTable.fnSettings().aoColumns[iCol].bVisible;
			oTable.fnSetColumnVis(iCol, ( bVis ? false : true));
		});
    function deleteRequirement(id){
        // 
        bootbox.confirm("Are you sure to delete this row?", function(result) {
				if (result) {
                    window.location.href = '<?php echo base_url();?>admin/Management/requirementdelete/' + id;
                }
        });
        return false;
    }
</script>