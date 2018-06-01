

<div id="app">
    <?php 
    $data['sidebar'] = array('main'=>ADMIN_SIDEBAR_MANAGEMENT,'sub' => !isset($customer)? ADMIN_SIDEBAR_MANAGEMENT_USER_ADD:ADMIN_SIDEBAR_MANAGEMENT_USER_EDIT) ;
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
                        <h1 class="mainTitle"><?php echo !isset($customer)? lang('add_requirement'):lang('edit_requirement')?></h1>
                    </div>
                    <ol class="breadcrumb">
                        <li>
                            <span>Management</span>
                        </li>
                        <li class="active">
                            <span>Requirement</span>
                        </li>
                    </ol>
                </div>
            </section>
                <div class="container-fluid container-fullw">
                <form role="form" id="form"  method="post" action="<?php echo base_url();?>admin/management/<?php echo !isset($requirement)?'add_requirement':'edit_requirement/'.$requirement[0]->id;?>">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="errorHandler alert alert-danger" style='display:none;'>
                                <i class="fa fa-times-sign"></i> <?php echo lang('validation_err');?>
                            </div>
                            <div class="successHandler alert alert-success" style='display:none;'>
                                <i class="fa fa-ok"></i>  <?php echo lang('validation_success');?>
                            </div>
                        </div>
                        <div class="col-md-6">
                        <?php 
                        $price = $requirement[0]->price;
                        $prices = explode('_',$price);
                        ?>
                            <div class="form-group">
                                <label class="control-label">
                                <?php echo lang('requirement_title');?> <span class="symbol required"></span>
                                </label>
                                <input type="text" placeholder="<?php echo lang('requirement_title');?>" name="title" class="form-control" id="inputDefault" value="<?php echo !isset($requirement)?'':$requirement[0]->title;?>">
                            </div>
                            <div class="form-group connected-group">
                                <label class="control-label">
                                    <?php echo lang('budget_requirement');?> <span class="symbol required" aria-required="true"></span>
                                </label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="text" placeholder="<?php echo lang('budget_min');?>" name="budget_min" class="form-control" id="inputDefault" value="<?php echo !isset($requirement)?'':$prices[0];?>">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="<?php echo lang('budget_max');?>" name="budget_max" class="form-control" id="inputDefault" value="<?php echo !isset($requirement)?'':$prices[1];?>">
                                    </div>
                                    <div class="col-md-4">
                                        <select name="currency" id="currency" class="form-control" >
                                            <option value="¥" <?php echo $requirement[0]->currency == '¥'?"selected":"";?>>¥</option>
                                            <option value="$" <?php echo $requirement[0]->currency == '$'?"selected":"";?>>$</option>
                                            <option value="€" <?php echo $requirement[0]->currency == '€'?"selected":"";?>>€</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">
                                <?php echo lang('requirement_owner');?> <span class="symbol required"></span>
                                </label>
                                <select name="owner" id="owner" class="form-control" >
                                    <?php
                                    foreach($customers as $customer){
                                    ?>
                                    <option value="<?php echo $customer->UID;?>"><?php echo $customer->name;?></option>

                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">
                                <?php echo lang('requirement_desc');?> <span class="symbol required"></span>
                                </label>
                                <textarea maxlength="2000" style='resize:none;' id="description"  rows="10" name = "description" class="form-control limited"><?php echo !isset($requirement)?'':$requirement[0]->description; ?></textarea>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div>
                                <span class="symbol required"></span>Required Fields
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <p>
                                By clicking REGISTER, you are agreeing to the Policy and Terms &amp; Conditions.
                            </p>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-primary btn-wide pull-right" type="submit">
                                Submit <i class="fa fa-arrow-circle-right"></i>
                            </button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>

<script>
    var form1 = $('#form');
    var errorHandler1 = $('.errorHandler', form1);
    var successHandler1 = $('.successHandler', form1);
    $.validator.addMethod("FullDate", function () {
        //if all values are selected
        if ($("#dd").val() != "" && $("#mm").val() != "" && $("#yyyy").val() != "") {
            return true;
        } else {
            return false;
        }
    }, 'Please select a day, month, and year');
    $('#form').validate({
        errorElement: "span", // contain the error msg in a span tag
        errorClass: 'help-block',
        errorPlacement: function (error, element) { // render error placement for each input type
            if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
                error.insertAfter($(element).closest('.form-group').children('div').children().last());
            } else if (element.attr("name") == "dd" || element.attr("name") == "mm" || element.attr("name") == "yyyy") {
                error.insertAfter($(element).closest('.form-group').children('div'));
            } else {
                error.insertAfter(element);
                // for other inputs, just perform default behavior
            }
        },
        ignore: "",
        rules: {
            title: {
                minlength: 2,
                required: true
            },
            description:{
                minlength: 20,
                required: true
            },
            budget_min: {
                required: true
            },
            budget_max: {
                required: true
            }
        },
        messages: {
            firstname: "Please specify your first name",
            lastname: "Please specify your last name",
            email: {
                required: "We need your email address to contact you",
                email: "Your email address must be in the format of name@domain.com"
            },
            gender: "Please check a gender!"
        },
        groups: {
            DateofBirth: "dd mm yyyy",
        },
        invalidHandler: function (event, validator) { //display error alert on form submit
            successHandler1.hide();
            errorHandler1.show();
        },
        highlight: function (element) {
            $(element).closest('.help-block').removeClass('valid');
            // display OK icon
            $(element).closest('.form-group').removeClass('has-success').addClass('has-error').find('.symbol').removeClass('ok').addClass('required');
            // add the Bootstrap error class to the control group
        },
        unhighlight: function (element) { // revert the change done by hightlight
            $(element).closest('.form-group').removeClass('has-error');
            // set error class to the control group
        },
        success: function (label, element) {
            label.addClass('help-block valid');
            // mark the current input as valid and display OK icon
            $(element).closest('.form-group').removeClass('has-error').addClass('has-success').find('.symbol').removeClass('required').addClass('ok');
        },
        submitHandler: function (form) {
            successHandler1.show();
            errorHandler1.hide();
            // submit form
            form.submit();
        }
    });
</script>