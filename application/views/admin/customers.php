<div id="app">
<?php 
$data['sidebar'] = array('main'=>ADMIN_SIDEBAR_MANAGEMENT,'sub' => ADMIN_SIDEBAR_MANAGEMENT_CUSTOMER_LIST) ;
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
                        <h1 class="mainTitle">Manage Customers</h1>
                    </div>
                    <ol class="breadcrumb">
                        <li>
                            <span>Management</span>
                        </li>
                        <li class="active">
                            <span>Customers</span>
                        </li>
                    </ol>
                </div>
            </section>
            <div class="container-fluid container-fullw">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12 space20">
                            <a href="<?php echo base_url();?>admin/Management/customeradd" class="mb-xs mt-xs mr-xs btn btn-primary"><?php echo lang('add_customer');?></a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="sample_2">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Avatar</th>
                                        <th>FullName</th>
                                        <th>Phone</th>
                                        <th>Role</th>
                                        <th>Email</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach($customers as $customer){
                                    ?>
                                    <tr>
                                        <td><?php echo $customer->UID;?></td>
                                        <td><img width="50" src="<?php echo $customer->avatar_url == '' ?base_url().'assets/upload/noimg.jpg' :base_url().$customer->avatar_url;?>" class="img-rounded" alt="image"></td>
                                        <td><?php echo $customer->name;?></td>
                                        <td><?php echo $customer->phone;?></td>
                                        <td><?php echo $customer->role == '1'?'Buyer':'Seller';?></td>
                                        <td><?php echo $customer->email;?></td>
                                        <td>
                                        <a href="<?php echo base_url();?>admin/Management/customeredit/<?php echo $customer->UID?>" class="edit-row">
                                            Edit
                                        </a></td>
                                        <td>
                                        <a href="javascript:;" class="delete-row" onclick="deleteCustomer('<?php echo $customer->UID;?>')">
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
    var oTable = $('#sample_2').dataTable({
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
		$('#sample_1_wrapper .dataTables_filter input').addClass("form-control input-sm").attr("placeholder", "Search");
		// modify table search input
		$('#sample_1_wrapper .dataTables_length select').addClass("m-wrap small");
		// modify table per page dropdown
		$('#sample_1_wrapper .dataTables_length select').select2();
		// initialzie select2 dropdown
		$('#sample_1_column_toggler input[type="checkbox"]').change(function() {
			/* Get the DataTables object again - this is not a recreation, just a get of the object */
			var iCol = parseInt($(this).attr("data-column"));
			var bVis = oTable.fnSettings().aoColumns[iCol].bVisible;
			oTable.fnSetColumnVis(iCol, ( bVis ? false : true));
		});
    function deleteCustomer(id){
        // 
        bootbox.confirm("Are you sure to delete this row?", function(result) {
				if (result) {
                    window.location.href = '<?php echo base_url();?>admin/Management/userdelete/' + id;
                }
        });
        return false;
    }
</script>