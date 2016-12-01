@extends('layout.master')
@section('content')
<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM -->
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							 Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<div class="col-md-12">
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index.html">Home</a>
						<i class="fa fa-angle-right"></i>
						<li>Customer Registration</li>
					</li>
				</ul>
			</div>
			</div>


<!-- This form is fixed -->
<div class="col-md-12">
<div class="portlet light bordered">
	<div class="portlet-body form">
		<!-- BEGIN FORM-->
		<form action="#" class="form-horizontal">
          <div class="row">
			<div class="form-body">
			    <div class="form-group">
					<div class="radio-list">
						<label class="radio-inline">
						<input type="radio" name="optionsRadios" id="optionsRadios4" value="option1" checked> Corporate </label>
						<label class="radio-inline">
						<input type="radio" name="optionsRadios" id="optionsRadios5" value="option2"> Individul </label>
					</div>
				</div>
				<div class="col-md-6"><strong>Party Code:</strong></div>
				<div class="col-md-6">Party Status:</div>
				</div>
            <div class="form-group">
				<div class="col-md-3">
				<label class="control-label">Salutation<span>*</span></label>
					<select class="form-control">
						<option value="">Mr.</option>
						<option value="">Mrs.</option>
						<option value="">Dasho</option>
						<option value="">Lynpo</option>
						<option value="">Dr.</option>
						<option value="">Other</option>
					</select>
				</div>
				<div class="col-md-3">
				<label class="control-label">First Name<span>*</span></label>
					<input type="text" class="form-control" placeholder="first name">
				</div>
				<div class="col-md-3">
				<label class="control-label">Middle Name</label>
					<input type="text" class="form-control" placeholder="middle name">
				</div>
				<div class="col-md-3">
				<label class="control-label">Last Name</label>
					<input type="text" class="form-control" placeholder="last name">
				</div>
				<div class="col-md-3">
				<label class="control-label">Email<span>*</span></label>
					<input type="text" class="form-control" placeholder="last name">
				</div>
				<div class="col-md-3">
				<label class="control-label">Date of Birth</label>
					<input type="text" class="form-control" placeholder="last name">
				</div>
				<div class="col-md-3">
				<label class="control-label">Mobile Number<span>*</span></label>
					<input type="text" class="form-control" placeholder="last name">
				</div>
				<div class="col-md-3">
				<label class="control-label">Work Phone</label>
					<input type="text" class="form-control" placeholder="last name">
				</div>
				<div class="col-md-3">
					<label class="control-label">Country<span>*</span></label>
					<select name="country" id="country_list" class="form-control">
					    <option value="AF">[select one country]</option>
						<option value="AF">Afghanistan</option>
						<option value="AL">Albania</option>
						<option value="DZ">Algeria</option>
						<option value="AS">American Samoa</option>
						<option value="AD">Andorra</option>
						<option value="AO">Angola</option>
						<option value="AI">Anguilla</option>
						<option value="AR">Argentina</option>
						<option value="AM">Armenia</option>
						<option value="AW">Aruba</option>
						<option value="AU">Australia</option>
					</select>
				</div>
				<div class="col-md-3">
				<label class="control-label">Address<span>*</span></label>
					<input type="text" class="form-control" placeholder="address line">
				</div>
				<div class="col-md-3">
				<label class="control-label">Contact Preference</label>
					<select class="form-control">
						<option value="">Email</option>
						<option value="">Physical</option>
						<option value="">Phone</option>
					</select>
				</div>
				<div class="col-md-3"><br/>
				   <button type="submit" class="btn btn-xs green pull-right">Save</button>
				</div>
			</div>	
         </div>
		</form>
		<!-- END FORM-->																
	</div>
	</div>
</div>

<!-- ##################Leads######################## -->
@include ('Insurance.Leads.leads')
<!-- #########################End of Lead ###########################-->

<!-- #########################quotation ###########################-->
@include ('Insurance.BussinessDevelopment.Motors.Private.quotation')

</div>
</div>

			<!-- END PAGE CONTENT-->
		</div>
	</div>
	@include('common.quick')
	<!-- END QUICK SIDEBAR -->
</div>
@stop()