<div class="row">
	<div class="col-md-12">
	   	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p-b-15">
            <a type="button" class="btn btn-primary waves-effect pull-right" data-toggle="modal" data-target="#addSecurity">
                <i class="material-icons">add</i>
                <span>ADD STATION</span>
            </a>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                LIST OF STATION
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Location</th>
                                            <th>Admin Assign</th>
                                            <th>Options</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Location</th>
                                            <th>Admin Assign</th>
                                            <th>Options</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>POR 7</td>
                                            <td>South Pob., City of Naga, Cebu 6037</td>
                                            <td>
                                                <button type="button" class="btn btn-default waves-effect w-100" disabled="disabled">
                                                    <i class="material-icons">person</i> 
                                                    <span>Jersa Cute</span>
                                                </button>                                                
                                            </td>
                                            <td>
                                                <button class="btn btn-danger waves-effect">Delete</button>
                                                <button class="btn btn-warning waves-effect">Edit</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>

<div class="modal fade" id="addSecurity" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content modal-col-cyan">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                <div  class="form-label-group">
                    <input  type="text" 
                            id="station_name" 
                            name="station_name"
                            class="form-control" 
                            placeholder="station_name" 
                            required autofocus>
                    <label for="station_name">Station Name</label>
                </div>
                <div class="form-label-group">
                    <input  type="text" 
                            id="street" 
                            name="street"
                            class="form-control" 
                            placeholder="street" 
                            required autofocus>
                    <label for="street">Street</label>
                </div>
                <div class="form-label-group">
                    <input  type="text" 
                            id="barangay" 
                            name="barangay"
                            class="form-control" 
                            placeholder="barangay" 
                            required autofocus>
                    <label for="barangay">Barangay</label>
                </div>
                <div class="form-label-group">
                    <input  type="text" 
                            id="city" 
                            name="city"
                            class="form-control" 
                            placeholder="city" 
                            required autofocus>
                    <label for="city">City</label>
                </div>
                <div class="form-label-group">
                    <input  type="text" 
                            id="postal_code" 
                            name="postal_code"
                            class="form-control" 
                            placeholder="postal_code" 
                            required autofocus>
                    <label for="postal_code">Postal Code</label>
                </div>
                <div class="form-label-group">
                    <input  type="text" 
                            id="region" 
                            name="region"
                            class="form-control" 
                            placeholder="region" 
                            required autofocus>
                    <label for="region">Region Number</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link waves-effect">SUBMIT</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CANCEL</button>
            </div>
        </div>
    </div>
</div>
{{-- <script type="text/javascript">
    $(document).on('click','#submit-skills-btn',function(e){
        var data = {
        }
        $.ajax({
            url: "{{route('')}}",
            headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
            type: "POST",
            data: data,
            success:function(data){
                swal('Success!', data.message, 'success');
            },
        });
    });
</script> --}}