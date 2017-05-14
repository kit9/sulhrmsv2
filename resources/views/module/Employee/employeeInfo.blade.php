<?php
if (isset($data)) {
    $pageinfo = array("Edit Add Employee Settings", "Edit Employee Record", "", "SUL");
} else {
    $pageinfo = array("Employee Settings", "Add Employee Record", "", "SUL");
}
?>

@extends('layout.master') @section('content') @include('include.coreBarcum')

<div class="row">
    <div class="col-lg-12">
        <div class="cat__core__sortable" id="left-col">
            <section class="card" order-id="card-1">
                <div class="card-header">
                    <h5 class="mb-0 text-black">
                        <strong>{{$pageinfo[0]}}</strong>
                        <!--<small class="text-muted">All cards are draggable and sortable!</small>-->
                    </h5>
                </div>
                <div class="card-block">

                    <div class="row">
                        <div class="col-xl-12">
                            <!--Vertical Form Starts Here-->
                            @if(isset($data))
                            <form name="StaffGrade" action="{{url('Settings/StaffGrade/Update/'.$data['id'])}}" method="post">
                                {{csrf_field()}}
                                <div class="row">


                                </div>


                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <button type="reset" class="btn btn-default">Cancel</button>
                                </div>
                            </form>
                            @else
                            <form name="Employee" action="{{url('Employee/Employeeinfo/Add')}}" method="post">
                                {{csrf_field()}}
                                <div class="row">
                                    <!--                                    <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label for="l30">First Name</label>
                                                                                <input type="text" name="fname" class="form-control" placeholder="Type First Name" id="l30">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label for="l30">Last Name</label>
                                                                                <input type="text" name="lname" class="form-control" placeholder="Type Last Name" id="l30">
                                                                            </div>
                                                                        </div>
                                    
                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label for="l30">Marital Status</label>
                                                                                <select class="form-control" name="marital_id">
                                                                                    <option value="">Select Marital Status</option>
                                    
                                                                                    @foreach($marital_status as $row)
                                                                                    <option value="{{$row->id}}">{{$row->name}}</option>
                                                                                    @endforeach
                                    
                                    
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label for="l30">Gender</label>
                                                                                <select class="form-control" name="gender_id">
                                                                                    <option value="">Select Gender</option>
                                                                                    @foreach($gender as $row)
                                                                                    <option value="{{$row->id}}">{{$row->name}}</option>
                                                                                    @endforeach
                                    
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                    
                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label for="l30">Blood Group</label>
                                                                                <select class="form-control" name="blood_id">
                                                                                    <option value="">Select Blood Group</option>
                                    
                                                                                    @foreach($bloodGroup as $row)
                                                                                    <option value="{{$row->id}}">{{$row->name}}</option>
                                                                                    @endforeach
                                    
                                    
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                    
                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label for="l30" class="col-md-12">Date of Birth</label>
                                                                                <label class="input-group datepicker-only-init">
                                                                                    <input type="text" name="DOB" class="form-control" placeholder="Type Date of Birth" />
                                                                                    <span class="input-group-addon">
                                                                                        <i class="icmn-calendar"></i>
                                                                                    </span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                    
                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label for="l30" class="col-md-12">Country</label>
                                                                                <select class="form-control" name="country_id">
                                                                                    <option value="">Select Country</option>
                                                                                    @foreach($country as $row)
                                                                                    <option value="{{$row->id}}">{{$row->name}}</option>
                                                                                    @endforeach
                                    
                                    
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label for="l30" class="col-md-12">City</label>
                                                                                <select class="form-control" name="city_id">
                                                                                    <option value="">Select City</option>
                                    
                                                                                    @foreach($city as $row)
                                                                                    <option value="{{$row->id}}">{{$row->name}}</option>
                                                                                    @endforeach
                                    
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label for="l30">Address</label>
                                                                                <input type="text" name="address" class="form-control" placeholder="Type Day Title" id="l30">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label for="l30">Phone</label>
                                                                                <input type="text" name="phone" class="form-control" placeholder="Type Day Type Id" id="l30">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label for="l30">Email</label>
                                                                                <input type="text" name="email" class="form-control" placeholder="Type Day Type Id" id="l30">
                                                                            </div>
                                                                        </div>-->
                                    <!--                                    <code class="col-lg-12" style="border: 1px solid #e4e9f0;">Basic Info End</code>
                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label for="l30" class="col-md-12">Company</label>
                                                                                <select class="form-control" name="company_id">
                                                                                    <option value="">Select Company</option>
                                    
                                                                                    @foreach($com as $row)
                                                                                    <option value="{{$row->id}}">{{$row->name}}</option>
                                                                                    @endforeach
                                    
                                    
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label for="l30" class="col-md-12">Department</label>
                                                                                <select class="form-control" name="department_id">
                                                                                    <option value="">Select Department</option>
                                    
                                                                                    @foreach($department as $row)
                                                                                    <option value="{{$row->id}}">{{$row->name}}</option>
                                                                                    @endforeach
                                    
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label for="l30" class="col-md-12">Section</label>
                                                                                <select class="form-control" name="section_id">
                                                                                    <option value="">Select Section</option>
                                    
                                                                                    @foreach($section as $row)
                                                                                    <option value="{{$row->id}}">{{$row->name}}</option>
                                                                                    @endforeach
                                    
                                    
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label for="l30" class="col-md-12">Designation</label>
                                                                                <select class="form-control" name="designation_id">
                                                                                    <option value="">Select Designation</option>
                                    
                                                                                    @foreach($designation as $row)
                                                                                    <option value="{{$row->id}}">{{$row->name}}</option>
                                                                                    @endforeach
                                    
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label for="l30" class="col-md-12">Supervisor</label>
                                                                                <select class="form-control" name="supervisor">
                                                                                    <option value="">Select Supervisor</option>
                                                                                    @foreach($branch as $row)
                                                                                    <option value="{{$row->id}}">{{$row->name}}</option>
                                                                                    @endforeach
                                    
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label for="l30">Employee Code</label>
                                                                                <input type="text" name="emp_code" class="form-control" placeholder="Type Employee Code" id="l30">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label for="l30" class="col-md-12">Job Location</label>
                                                                                <select class="form-control" name="branch_id">
                                                                                    <option value="">Select Job Location</option>
                                    
                                                                                    @foreach($branch as $row)
                                                                                    <option value="{{$row->id}}">{{$row->name}}</option>
                                                                                    @endforeach
                                    
                                    
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label for="l30" class="col-md-12">Effective From</label>
                                                                                <label class="input-group datepicker-only-init">
                                                                                    <input type="text" name="effective_date" class="form-control" placeholder="Select Date" />
                                                                                    <span class="input-group-addon">
                                                                                        <i class="icmn-calendar"></i>
                                                                                    </span>
                                                                                </label>
                                                                            </div>
                                                                        </div>-->
                                    <code class="col-lg-12" style="border: 1px solid #e4e9f0;">Company Info End</code>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="l30" class="col-md-12">Proposed Confirmation Date</label>
                                            <label class="input-group datepicker-only-init">
                                                <input type="text"  class="form-control" placeholder="Select Date" />
                                                <span class="input-group-addon">
                                                    <i class="icmn-calendar"></i>
                                                </span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="l30" class="col-md-12">In Replacement of</label>
                                            <select class="form-control" name="inReplacement">
                                                <option value="">Select Employee</option>
                                                @if(isset($coany))
                                                @foreach($comny as $row)
                                                <option value="{{$row->id}}">{{$row->name}}</option>
                                                @endforeach
                                                @endif

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="l30" class="col-md-12">Assign a Role</label>
                                            <select class="form-control" name="assignRole">
                                                <option value="">Select a Role</option>
                                                @if(isset($compny))
                                                @foreach($compay as $row)
                                                <option value="{{$row->id}}">{{$row->name}}</option>
                                                @endforeach
                                                @endif

                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="l30" class="col-md-12">PF Effective From</label>
                                            <label class="input-group datepicker-only-init">
                                                <input type="text" class="form-control" placeholder="Select Date" />
                                                <span class="input-group-addon">
                                                    <i class="icmn-calendar"></i>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-check col-lg-6">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" checked="" value="">
                                            Provident Found Eligible
                                        </label>
                                    </div>
                                    <div class="form-check col-lg-6">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" checked="" value="">
                                            Transport Allowance Eligible
                                        </label>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="l30">Attache Document</label>
                                            <input type="file" name="emp_code" class="form-control" id="l30">
                                        </div>
                                    </div> 
                                    <code class="col-lg-12" style="border: 1px solid #e4e9f0;">Assign role & Security Info End</code>

                                    <code class="col-lg-12" style="border: 1px solid #e4e9f0;">Job experience Company Info End</code>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="l30" class="col-md-12">Is Active</label>
                                            <select class="form-control" name="is_active">
                                                <option value="">Select Status</option>
                                                <option value="Active">Active</option>
                                                <option value="Inactive">Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <code class="col-lg-12" style="border: 1px solid #e4e9f0;">EDUCATION START</code>
                                    <section class="col-lg-12">

                                        <div class="edu">

                                            <div class="col-lg-3 pull-left">
                                                <div class="form-group">
                                                    <label for="l30">Certification Name</label>
                                                    <input type="text" name="certification[]" class="form-control" placeholder="Type Certification Name" id="l30">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 pull-left">
                                                <div class="form-group">
                                                    <label for="l30">Institute Name</label>
                                                    <input type="text" name="institute[]" class="form-control" placeholder="Type Institute Name" id="l30">
                                                </div>
                                            </div>

                                            <div class="col-lg-3 pull-left">
                                                <div class="form-group">
                                                    <label for="l30">Institute Address</label>
                                                    <input type="text" name="institute_add[]" class="form-control" placeholder="Type Institute Address" id="l30">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 pull-left">
                                                <div class="form-group">
                                                    <label for="l30">Result</label>
                                                    <input type="text" name="result[]" class="form-control" placeholder="Type Result" id="l30">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 pull-left">
                                                <div class="form-group">
                                                    <label for="l30" class="col-xs-12">Start Date</label>
                                                    <label class="input-group datepicker-only-init">
                                                        <input type="text" name="start_date[]" class="form-control" placeholder="Select Start Date" />
                                                        <span class="input-group-addon">
                                                            <i class="icmn-calendar"></i>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 pull-left">
                                                <div class="form-group">
                                                    <label for="l30" class="col-xs-12">End Date</label>
                                                    <label class="input-group datepicker-only-init">
                                                        <input type="text" name="end_date[]" class="form-control" placeholder="Select End Date" />
                                                        <span class="input-group-addon">
                                                            <i class="icmn-calendar"></i>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 pull-left">
                                                <div class="form-group">
                                                    <label for="l30">Attache Certificate</label>
                                                    <input type="file" name="edu_upload[]" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-lg-3 pull-left">
                                                <div class="form-group">
                                                    <label for="l30">&nbsp;</label><br>
                                                    <a href="javascript:void(0)" id="removeEdu" class="btn btn-danger"><i class="fa fa-close"></i></a>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <a  id="add_moreEdu" class="btn btn-success">Add More</a>

                                        </div>
                                    </section>
                                    <table class="table table-bordered table-hover " id="table">
                                        <thead>
                                        <th>produjctName</th>
                                        <th>quentity</th>
                                        <th>price</th>

                                        <th><input type="button" value="Add Row" id="add" class="btn btn-success text-center"/></th>
                                        </thead>
                                        <tbody style="background:#fff" class="detail">
                                        <div>
                                            <tr> 
                                                <td><input type="text" class="form-control productName" name="productName[]" placeholder="productName"/></td>
                                                <td><input type="text" class="form-control quentity" name="quentity[]" placeholder="quentity"/></td>
                                                <td><input type="text" class="form-control price" name="price[]" placeholder="price"/></td>
                                                <td><input type="text" class="form-control price" name="price[]" placeholder="price"/></td>

                                            </tr>  
                                            <tr> 

                                                <td><input type="text" class="form-control price" name="price[]" placeholder="price"/></td>
                                                <td><input type="file" class="form-control discount" name="discount[]"></td>
                                                <td><input type="text" class="form-control amount" name="amount[]" placeholder="Amount"/></td>
                                                <td><a href="#" class="remove btn btn-danger">Delete</a></td>

                                            </tr>  
                                        </div>
                                        </tbody>


                                    </table>
                                    <div class="input_fields_container col-lg-12">
                                        <div class="row">
                                            <div class="col-lg-3 pull-left">
                                                <div class="form-group">
                                                    <label for="l30">Result</label>
                                                    <input type="text" name="result[]" class="form-control" placeholder="Type Result" id="l30">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 pull-Left">
                                                <div class="form-group">
                                                    <label for="l30">Result</label>
                                                    <input type="text" name="result[]" class="form-control" placeholder="Type Result" id="l30">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 pull-Left">
                                                <div class="form-group">
                                                    <label for="l30">Result</label>
                                                    <input type="text" name="result[]" class="form-control" placeholder="Type Result" id="l30">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 pull-Left">
                                                <div class="form-group">
                                                    <label for="l30">Result</label>
                                                    <input type="text" name="result[]" class="form-control" placeholder="Type Result" id="l30">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 pull-Left">
                                                <div class="form-group">
                                                    <label for="l30">Result</label>
                                                    <input type="text" name="result[]" class="form-control" placeholder="Type Result" id="l30">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 pull-Left">
                                                <div class="form-group">
                                                    <label for="l30">Result</label>
                                                    <input type="text" name="result[]" class="form-control" placeholder="Type Result" id="l30">
                                                </div>
                                            </div>

                                        </div> <br>
                                        <button class="btn btn-sm btn-primary add_more_button">Add More Fields</button>
                                    </div>
                                </div>


                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary">Create</button>
                                    <button type="reset" class="btn btn-default">Cancel</button>
                                </div>
                            </form>
                            @endif
                            <!--Vertical Form Ends Here-->
                        </div>
                        <div class="col-xl-12">
                            <!--Vertical Form Starts Here-->
                            <!-- kendo table code start from here-->
                            <div class="row">
                                <div id="grid" class="col-md-12"></div>
                            </div>
                            <script id="action_template" type="text/x-kendo-template">
                                <a class="k-button k-button-icontext k-grid-edit" href="{{url('Settings/StaffGrade/Edit')}}/#=id#"><span class="k-icon k-edit"></span> Edit</a>
                                <a class="k-button k-button-icontext k-grid-delete" onclick="javascript:deleteClick(#=id#);"><span class="k-icon k-delete"></span> Delete</a>
                            </script>

                            <script type="text/javascript">
                                function deleteClick(id) {
                                    var c = confirm("Do you want to delete?");
                                    if (c === true) {
                                        $.ajax({
                                            type: "POST",
                                            dataType: "json",
                                            url: "StaffGrade/Delete",
                                            data: {
                                                id: id,
                                                '_token': '<?= csrf_token() ?>'
                                            },
                                            success: function (result) {
                                                $(".k-i-refresh").click();
                                            }
                                        });
                                    }
                                }
                            </script>
                            <script type="text/javascript">
                                $(document).ready(function () {
                                    var dataSource = new kendo.data.DataSource({
                                        transport: {
                                            read: {
                                                url: "<?= url('Settings/StaffGrade/Json') ?>",
                                                type: "GET",
                                                datatype: "json"

                                            }
                                        },
                                        autoSync: false,
                                        schema: {
                                            data: "data",
                                            total: "total",
                                            model: {
                                                id: "id",
                                                fields: {
                                                    id: {
                                                        type: "number"
                                                    },
                                                    name: {
                                                        type: "string"
                                                    },
                                                    created_at: {
                                                        type: "string"
                                                    }
                                                }
                                            }
                                        },
                                        pageSize: 10,
                                        serverPaging: true,
                                        serverFiltering: true,
                                        serverSorting: true
                                    });
                                    $("#grid").kendoGrid({
                                        dataBound: gridDataBound,
                                        dataSource: dataSource,
                                        filterable: true,
                                        pageable: {
                                            refresh: true,
                                            input: true,
                                            numeric: false,
                                            pageSizes: true,
                                            pageSizes: [10, 20, 50, 100, 200, 400]
                                        },
                                        sortable: true,
                                        groupable: true,
                                        columns: [
                                            {
                                                field: "id",
                                                title: "#",
                                                width: "40px",
                                                filterable: false
                                            },
                                            {
                                                field: "name",
                                                title: "Department Name ",
                                                width: "80px"
                                            },
                                            {
                                                field: "company_id",
                                                title: "Company Name ",
                                                width: "80px"
                                            },
                                            {
                                                field: "is_active",
                                                title: "Is Active",
                                                width: "80px"
                                            },
                                            {
                                                field: "created_at",
                                                title: "Created ",
                                                width: "100px",
                                            },
                                            {
                                                title: "Action",
                                                width: "80px",
                                                template: kendo.template($("#action_template").html())
                                            }
                                        ],
                                    });
                                });
                            </script>
                            <!-- kendo table code end fro here-->
                            <!--Vertical Form Ends Here-->
                        </div>
                    </div>
                </div>
            </section>


        </div>
    </div>

</div>
<script>
    $(function () {

        $('.datepicker-init').datetimepicker({
            widgetPositioning: {
                horizontal: 'left'
            },
            icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down",
                previous: 'fa fa-arrow-left',
                next: 'fa fa-arrow-right'
            }
        });

        $('.datepicker-only-init').datetimepicker({
            widgetPositioning: {
                horizontal: 'left'
            },
            icons: {
                //time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down",
                previous: 'fa fa-arrow-left',
                next: 'fa fa-arrow-right'
            },
            //format: 'LL'
            format: 'YYYY-MM-DD'
        });

        $('.timepicker-init').datetimepicker({
            widgetPositioning: {
                horizontal: 'left'
            },
            icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down",
                previous: 'fa fa-arrow-left',
                next: 'fa fa-arrow-right'
            },
            format: 'LT'
        });

        $('.datepicker-inline-init').datetimepicker({
            icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down",
                previous: 'fa fa-arrow-left',
                next: 'fa fa-arrow-right'
            },
            inline: true,
            sideBySide: false
        });

        $('.timepicker-inline-init').datetimepicker({
            icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down",
                previous: 'fa fa-arrow-left',
                next: 'fa fa-arrow-right'
            },
            format: 'LT',
            inline: true,
            sideBySide: false
        });

    })
</script>



@include('include.coreKendo') 
@endsection 
@section('extraHeader')

<link rel="stylesheet" type="text/css" href="{{url('vendors/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css')}}"> @endsection @section('extraFooter')
<script src="{{url('vendors/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')}}"></script>

<!--Please Add this scripts for custom-form-wizard-->
<!--<link rel="stylesheet" type="text/css" href="{{url('vendors/custom-form-wizard/jquery.steps/demo/css/jquery.steps.css')}}">
<script src="{{url('vendors/custom-form-wizard/form-wizard.js')}}"></script>
<script src="{{url('vendors/custom-form-wizard/jquery.steps/build/jquery.steps.js')}}"></script>
<script src="{{url('vendors/jquery-validation/dist/jquery.validate.js')}}"></script>-->
<!--End Custom Form Wizard-->

<script type="text/javascript">
    $("#removeExp").click(function (e) {
        $(this).closest(".exprience").remove();
        e.preventDefault();
    });

    $("#add_moreExp").click(function () {
        alert('click');
        console.log('click');
        $(".exprience:last").clone(true).insertBefore(this);
    });

    $("#removeEdu").click(function (e) {
        $(this).closest(".edu").remove();
        e.preventDefault();
    });

    $("#add_moreEdu").click(function () {
        $(".edu:last").clone(true).insertBefore(this);
    });
</script>

<script type="text/javascript">


    $(function () {
        $('#add').click(function () {
            addnewrow();
        });

        $('body').delegate('.remove', 'click', function () {
            $(this).parent().parent().remove();
        });


    });




    function addnewrow()
    {

        var tr = '<div>' +
                '<tr>' +
                '<td><input type="text" class="form-control productName" name="productName[]" placeholder="productName"/></td>' +
                '<td><input type="text" class="form-control quentity" name="quentity[]" placeholder="quentity"/></td>' +
                '<td><input type="text" class="form-control price" name="price[]" placeholder="price"/></td>' +
                '<td><input type="text" class="form-control price" name="price[]" placeholder="price"/></td>' +
                '</tr>' +
                '<tr>' +
                '<td><input type="text" class="form-control price" name="price[]" placeholder="price"/></td>' +
                '<td><input type="file" class="form-control discount" name="discount[]" placeholder="discount"/></td>' +
                '<td><input type="text" class="form-control amount" name="amount[]" placeholder="Amaount"/></td>' +
                '<td><a href="#" class="remove btn btn-danger">Delete</a></td>' +
                '</tr>' +
                '<div>';

        $('.detail').append(tr);
    }


</script>


<script>
    $(document).ready(function () {
        var max_fields_limit = 10; //set limit for maximum input fields
        var x = 1; //initialize counter for text box
        $('.add_more_button').click(function (e) { //click event on add more fields button having class add_more_button
            e.preventDefault();
            if (x < max_fields_limit) { //check conditions
                x++; //counter increment
                $('.input_fields_container').append('<div class="row">' +
                        '<div class="col-lg-3 pull-Left">' +
                             ' <div class="form-group">' +
                                '<label for="l30">Result</label>' +
                                '<input type="text" name="result[]" class="form-control" placeholder="Type Result" id="l30">' +
                            '</div>' +
                        '</div>' +
                        '<div class="col-lg-3 pull-Left">' +
                            ' <div class="form-group">' +
                                '<label for="l30">Result</label>' +
                                '<input type="text" name="result[]" class="form-control" placeholder="Type Result" id="l30">' +
                            '</div>' +
                        '</div>' +
                        '<div class="col-lg-3 pull-Left">' +
                            ' <div class="form-group">' +
                                '<label for="l30">Result</label>' +
                                '<input type="text" name="result[]" class="form-control" placeholder="Type Result" id="l30">' +
                            '</div>' +
                        '</div>' +
                        '<div class="col-lg-3 pull-Left">' +
                            ' <div class="form-group">' +
                                '<label for="l30">Result</label>' +
                                '<input type="text" name="result[]" class="form-control" placeholder="Type Result" id="l30">' +
                            '</div>' +
                        '</div>' +
                        '<div class="col-lg-3 pull-Left">' +
                            ' <div class="form-group">' +
                                '<label for="l30">Result</label>' +
                                '<input type="text" name="result[]" class="form-control" placeholder="Type Result" id="l30">' +
                            '</div>' +
                        '</div>' +
                        '<div class="col-lg-3 pull-Left">' +
                            ' <div class="form-group">' +
                                '<label for="l30">Result</label>' +
                                '<input type="text" name="result[]" class="form-control" placeholder="Type Result" id="l30">' +
                            '</div>' +
                        '</div><a href="#" class="remove_field" style="margin-left:10px;">Remove</a>' +
                        '</div>'); //add input field
            }
        });
        $('.input_fields_container').on("click", ".remove_field", function (e) { //user click on remove text links
            e.preventDefault();
            $(this).parent('div').remove();
            x--;
        })
    });
</script>
@endsection