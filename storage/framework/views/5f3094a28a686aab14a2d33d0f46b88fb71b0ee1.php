<?php $__env->startSection('content'); ?>
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



<!-- ##################Leads######################## -->
<div class="col-md-12">
<div class="row">
 <div class="portlet box yellow">
	 <div class="portlet-title">
			<div class="caption">
			   Leads
			</div>
			<div class="tools">	
				<a href="javascript:;" id="more_fields" onclick="add_fields();" class="collapse"></a>
			</div>
     </div>
  </div>
<div class="leads hidden-sm hidden-xs">
<div class="col-md-2">
   No.
</div>
<div class="col-md-2">
   LOB
</div>
<div class="col-md-2">
   Product
</div>
<div class="col-md-1">
   Status
</div>
<div class="col-md-2">
   Source
</div>
<div class="col-md-1">
   Value
</div>
<div class="col-md-2">
   Closed Date
</div>
</div>
</div>
</div>

<div class="col-md-12">
<div class="row lead-control">
<div class="col-md-2 md-controls">
<div class="form-group">
<label class="hidden-lg hidden-md control-label">No.:</label>
</div>
</div>

<div class="col-md-2 md-controls">
 <div class="form-group">
	<label class="label-control hidden-lg hidden-md">LOB:</label>
	<select class="form-control">
		<option value="">[select]</option>
		<option value="">Motor</option>
		<option value="">Fire</option>
		<option value="">Marine Hull</option>
		<option value="">Marine Cargo</option>
		<option value="">Misc. Liability</option>
		<option value="">Misc non Liability</option>
		<option value="">Engineering</option>
		<option value="">Aviation</option>
	</select>
	</div>
</div>

<div class="col-md-2 md-controls">
<div class="form-group">
<label class="label-control hidden-lg hidden-md">Product:</label>
	<select class="form-control">
	    <option value="">[select]</option>
	</select>
	</div>
</div>
<div class="col-md-1 offset-0 md-controls">
<div class="form-group">
<label class="label-control hidden-lg hidden-md">Status:</label>
	<select class="form-control">
	    <option value="">[select]</option>
		<option value="">To be contracted </option>
		<option value="">Contracted</option>
		<option value="">Could not be contracted</option>
		<option value="">Contact in progress</option>
		<option value="">Qualified</option>
		<option value="">Not Qualified</option>
		<option value="">Pre-Qualified</option>
	</select>
	</div>
</div>

<div class="col-md-2 md-controls">
<div class="form-group">
<label class="label-control hidden-lg hidden-md">Source:</label>
	<select class="form-control">
		<option value="">[select]</option>
		<option value="">Media</option>
		<option value="">Marketing by staff</option>
		<option value="">Customer</option>
		<option value="">Web research</option>
		<option value="">Public event</option>
		<option value="">Recommended by friends</option>
		<option value="">Research</option>
		<option value="">Identified by staff</option>
	</select> 
	</div>
</div>
<div class="col-md-1 offset-0 md-controls">
<div class="form-group">
<label class="label-control hidden-lg hidden-md">Value:</label>
  <input type="text" class="form-control" placeholder="address line">
  </div>
</div>
<div class="col-md-2 md-controls">
<div class="form-group">
<label class="label-control hidden-lg hidden-md">Closed Date:</label>
    <input type="text" class="form-control" placeholder="address line">
    </div>
</div>
<div class="col-md-6 md-controls">
<div class="form-group">
<label class="label-control hidden-lg hidden-md">Description:</label>
	<textarea class="form-control" rows="3" placeholder="description"></textarea>
</div>
</div>
<div class="col-md-3 md-controls">
<div class="form-actions pull-right">
	
</div>
</div>
<div class="col-md-3 md-controls">
<div class="form-actions pull-right">
	<button type="button" class="btn btn-xs green">Save</button>
	<button type="submit" class="btn btn-xs green">Undo</button>
</div>
</div>
</div>
</div>
<!-- #########################End of Lead ###########################-->

<!-- #########################quotation ###########################-->
<div class="col-md-12">
<div class="row" style="margin-bottom: -22px;">
 <div class="portlet box yellow">
	 <div class="portlet-title">
			<div class="caption">
			   Quotation
			</div>
			<div class="tools">	
				<a href="javascript:;" id="more_fields" onclick="add_fields();" class="collapse"></a>
			</div>
     </div>
  </div>
</div>
</div>
<div class="col-md-12 margin-top-10" style="margin-bottom: -15px;">
	<div class="tabbable tabbable-custom boxless tabbable-reversed">
		<!-- ul class="nav nav-tabs">
			<li class="active">
				<a href="#tab_0" data-toggle="tab">
				</a>
			</li>
			<li>
				<a href="#tab_1" data-toggle="tab">
				</a>
			</li>
		</ul-->

	</div>
</div>
<div class="col-md-12">
<div class="row quotation-control">
    <div class="tab-content">
		<div class="tab-pane active" id="tab_0">
				<div class="portlet-body form">
					<!-- BEGIN FORM-->
					<form action="#" class="form-horizontal">
						<div class="form-body">
				        <div class="col-md-2 md-controls">
							<div class="form-group">
							<label class="control-label">Quotation No</label>
							<input type="text" class="form-control" placeholder="quotation no.">
							</div>
						</div>
						<div class="col-md-2 md-controls">
						    <div class="form-group">
							 <label class="control-label">LOB<span>*</span></label>
							  <select class="form-control">
								<option value="">[select]</option>
								<option value="">Motor</option>
								<option value="">Fire</option>
								<option value="">Marine Hull</option>
								<option value="">Marine Cargo</option>
								<option value="">Misc. Liability</option>
								<option value="">Misc non Liability</option>
								<option value="">Engineering</option>
								<option value="">Aviation</option>
							</select>
							</div>
						</div>
						<div class="col-md-2 md-controls">
							<div class="form-group">
							 <label class="control-label">Product<span>*</span></label>
								<select class="form-control">
								    <option value="">[select]</option>
								</select>
							</div>
						</div>
						<div class="col-md-2 md-controls">
						<div class="form-group">
						<label class="control-label">Policy Status</label>
							<select class="form-control">
							    <option value="">[select]</option>
								<option value="">To be contracted </option>
								<option value="">Contracted</option>
								<option value="">Could not be contracted</option>
								<option value="">Contact in progress</option>
								<option value="">Qualified</option>
								<option value="">Not Qualified</option>
								<option value="">Pre-Qualified</option>
							</select>
							</div>
						</div>
						<div class="col-md-2 md-controls">
							<div class="form-group">
							<label class="control-label">Total Premium</label>
								<input type="text" class="form-control" placeholder="0.00">
							</div>
						</div>
						<div class="col-md-2 md-controls">
							<div class="form-group">
							<label class="control-label">Total Sum Insured</label>
							    <input type="text" class="form-control" placeholder="0.00">
							</div>
						</div>
						<div class="col-md-2 md-controls">
							<div class="form-group">
							<label class="control-label">Policy No.</label>
								<input type="text" class="form-control" placeholder="0.00">
							</div>
						</div>
						<div class="col-md-2 md-controls">
							<div class="form-group">
							<label class="control-label">Endorsement Number</label>
								<input type="text" class="form-control" placeholder="0.00">
							</div>
						</div>
						<div class="col-md-2 md-controls">
							<div class="form-group">
							<label class="control-label">Reference Policy Number</label>
								<input type="text" class="form-control" placeholder="0.00">
							</div>
						</div>
						<div class="col-md-2 md-controls">
							<div class="form-group">
							<label class="control-label">Policy Inception Date</label>
								<input type="text" class="form-control" placeholder="0.00">
							</div>
						</div>
						<div class="col-md-4 md-controls">
							<div class="form-group pull-right"><br/>
								<button type="button" class="btn btn-xs green">View</button>
							</div>
						</div>				
						</div>
					</form>
					<!-- END FORM-->
				</div>
		</div>
    </div>
    </div>
</div>
<!-- ################End of Quotation################# -->
<!-- ################ Policy Details and Insurance History################# -->

<div class="col-md-12 margin-top-10" style="margin-bottom: -15px;">
	<div class="tabbable tabbable-custom boxless tabbable-reversed">
		<ul class="nav nav-tabs">
			<li class="active">
				<a href="#tab_2" data-toggle="tab">
				Policy Details</a>
			</li>
			<li>
				<a href="#tab_3" data-toggle="tab">
				Previous Insurance History </a>
			</li>
			<li>
				<a href="#tab_4" data-toggle="tab">
				Renewal Details </a>
			</li>
		</ul>

		</div>
  </div>
   <div class="col-md-12">
<div class="row quotation-control">
    <div class="tab-content">
		<div class="tab-pane active" id="tab_2">
				<div class="portlet-body form">
					<!-- BEGIN FORM-->
					<form action="#" class="form-horizontal">
						<div class="form-body">

							<div class="col-md-2">
							<div class="form-group">
								<label class="control-label">Bussiness Type<span>*</span></label>
									<select class="form-control">
									    <option value="">Direct</option>
									</select>
							</div>
							</div>
							<div class="col-md-2">
							<div class="form-group">
								<label class="control-label">Payment Frequency<span>*</span></label>
									<select class="form-control">
									    <option value="">Yearly</option>
										<option value="">Half yearly</option>
										<option value="">Monthly</option>
										<option value="">Quarterly</option>
										<option value="">Single</option>
										<option value="">Others</option>
									</select>
							</div>
							</div>
						    <div class="col-md-2">
							<div class="form-group">
								<label class="control-label">Policy Start Date<span>*</span></label>
								<input type="text" class="form-control">	
							</div>
							</div>
							<div class="col-md-2">
							<div class="form-group">
								<label class="control-label">Policy Duration</label>
								<input type="text" class="form-control">	
							</div>
							</div>
							<div class="col-md-2">
							<div class="form-group">
								<label class="control-label">Duration Type</label>
								<select class="form-control">
									    <option value="">Day</option>
										<option value="">Month</option>
										<option value="">Year</option>
								</select>	
							</div>
							</div>
							<div class="col-md-2">
							<div class="form-group">
								<label class="control-label">Policy End Date</label>
								<input type="text" class="form-control">
							</div>
							</div>
							<div class="col-md-3">
							<div class="form-group">
								<label class="control-label">Branch Code<span>*</span></label>
								<select class="form-control">
									    <option value="">200001-Phuentsholing Branch</option>
										<option value="">200000-Thimphu Head Office</option>
										<option value="">200004-Gelephu, Branch</option>
								</select>
							</div>
							</div>
							<div class="col-md-2">
							<div class="form-group">
								<label class="control-label">Excess SI Amount</label>
									    <input type="text" class="form-control">
							</div>
							</div>
							<div class="col-md-2">
							<div class="form-group">
								<label class="control-label">Short SI Amount</label>
								 <input type="text" class="form-control">
							</div>
							</div>
							<div class="col-md-12">
							<div class="form-group">
								<label class="control-label">Clauses and Warranty</label>
								<textarea class="form-control" rows="3" placeholder="description"></textarea>
							</div>
							</div>
							<div class="col-md-3">
							<div class="form-group">
								<label class="control-label">PolicyFacFlag</label>
								  <input type="text" class="form-control">
							</div>
							</div>
							<div class="col-md-4">
							<div class="form-group">
								<div class="form-group pull-right"><br/>
									<button type="button" class="btn btn-xs green">Save</button>
								</div>
							</div>
							</div>

						</div>
					</form>
					<!-- END FORM-->
				</div>
		</div>
		<div class="tab-pane" id="tab_3">	
				<div class="portlet-body form">
					<!-- BEGIN FORM-->
					<form action="#" class="horizontal-form">
						<div class="form-body">
				         	<div class="col-md-3">
								<div class="form-group">
									<label class="control-label">Previous Insurer<span>*</span></label>
										<select class="form-control">
										    <option value="">Bhutan Insurance Limited</option>
										    <option value="">Royal Insurance Corporation of Bhutan</option>
										</select>
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label class="control-label">Previous Policy No<span>*</span></label>
										<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label class="control-label">Commencement Date<span>*</span></label>
										<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label class="control-label">Expiry Date<span>*</span></label>
										<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-3 md-controls">
								<div class="form-group pull-right"><br/>
									<button type="button" class="btn btn-xs green">Save</button>
								</div>
							</div>

						</div>
					</form>
					<!-- END FORM-->
				</div>
		</div>
				<div class="tab-pane" id="tab_4">	
				<div class="portlet-body form">
					<!-- BEGIN FORM-->
					<form action="#" class="horizontal-form">
						<div class="form-body">
				         	<div class="col-md-3">
								<div class="form-group">
									<label class="control-label">Previous Insurer<span>*</span></label>
										<select class="form-control">
										    <option value="">Bhutan Insurance Limited</option>
										    <option value="">Royal Insurance Corporation of Bhutan</option>
										</select>
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label class="control-label">Previous Policy No<span>*</span></label>
										<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label class="control-label">Commencement Date<span>*</span></label>
										<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label class="control-label">Expiry Date<span>*</span></label>
										<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-3 md-controls">
								<div class="form-group pull-right"><br/>
									<button type="button" class="btn btn-xs green">Save</button>
								</div>
							</div>

						</div>
					</form>
					<!-- END FORM-->
				</div>
		</div>
    </div>
   </div>
</div>
<!-- ################End of Policy Details and Insurance History ############## -->
   <div class="col-md-12">
	<div class="quotationAddRisk1 margin-top-10">
		<div class="portlet-title">
			<div class="caption">
				Inssured Item
			</div>
			<div class="pull-right" style="margin-top: -10px;">
				<i class="fa fa-angle-double-down" aria-hidden="true" style="font-size:20px; padding-right:10px;"></i>
				<i class="fa fa-plus-circle" aria-hidden="true" style="font-size:20px; color:#fff;"></i>
			</div>
		</div>
     </div>
	</div>
   <div class="col-md-12 margin-top-10" style="margin-bottom: -15px;">
	<div class="tabbable tabbable-custom boxless tabbable-reversed">
		<!-- ul class="nav nav-tabs">
			<li class="active">
				<a href="#tab_4" data-toggle="tab">
				</a>
			</li>
			<li>
				<a href="#tab_5" data-toggle="tab">
				</a>
			</li>
		</ul-->
	</div>
</div>

<div class="col-md-12">
<div class="row quotation-control">
    <div class="tab-content">
		<div class="tab-pane active" id="tab_4">
				<div class="portlet-body form">
					<!-- BEGIN FORM-->
					<form action="#" class="form-horizontal">
						<div class="form-body">
				        <div class="col-md-3 md-controls">
							<div class="form-group">
							<label class="control-label">Sl No</label>
							<input type="text" class="form-control" placeholder="quotation no.">
							</div>
						</div>
						<div class="col-md-3 md-controls">
						    <div class="form-group">
							 <label class="control-label">Insured Item<span>*</span></label>
							  <select class="form-control">
								<option value="">Fidelity Guarantee</option>
								<option value="">All Risk</option>
								<option value="">Electronic Appliances</option>
								<option value="">Building Fire and Allied</option>
								<option value="">Fixed glass fittings</option>
								<option value="">Guest or Occupant</option>
								<option value="">Machinery Breakdown</option>
								<option value="">Money</option>
								<option value="">Content Fire and Allied</option>
								<option value="">Neon/Glow Sign</option>
								<option value="">Liability</option>
								<option value="">Burglary and HouseBreaking</option>
								<option value="">Loss of Profit</option>
								<option value="">Personal Accident</option>
								<option value="">Employee Liability-WC</option>
							</select>
							</div>
						</div>
						<div class="col-md-5 md-controls">
							<div class="form-group pull-right"><br/>
								<button type="button" class="btn btn-xs green">Save</button>
							</div>
						</div>				
						</div>
					</form>
					<!-- END FORM-->
				</div>
		</div>
    </div>
    </div>
</div>

<div class="col-md-12 margin-top-10" style="margin-bottom: -15px;">
	<div class="tabbable tabbable-custom boxless tabbable-reversed">
		<ul class="nav nav-tabs">
			<li class="active">
				<a href="#tab_6" data-toggle="tab">
				Proverty Description</a>
			</li>
			<li>
				<a href="#tab_7" data-toggle="tab">
				Additional Cover</a>
			</li>
			<li>
				<a href="#tab_8" data-toggle="tab">
				General Loading and Discount</a>
			</li>
		</ul>
	</div>
</div>

<div class="col-md-12">
<div class="row quotation-control">
    <div class="tab-content">
		<div class="tab-pane active" id="tab_6">
				<div class="portlet-body form">
					<!-- BEGIN FORM-->
					<form action="#" class="form-horizontal">
						<div class="form-body">
				        <div class="col-md-3 md-controls">
							<div class="form-group">
							<label class="control-label">Risk Name<span>*</span></label>
							<input type="text" class="form-control">
							</div>
						</div>
						  <div class="col-md-3 md-controls">
							<div class="form-group">
							<label class="control-label">Sum Insured<span>*</span></label>
							<input type="text" class="form-control">
							</div>
						</div>
						  <div class="col-md-3 md-controls">
							<div class="form-group">
							<label class="control-label">Premium Rate per mille<span>*</span></label>
							<input type="text" class="form-control">
							</div>
						</div>
						<div class="col-md-11 md-controls">
							<div class="form-group">
							<label class="control-label">Risk Description<span>*</span></label>
							<textarea class="form-control" rows="3" placeholder="description"></textarea>
							</div>
						</div>
						<div class="col-md-1 md-controls">
							<div class="form-group pull-right"><br/><br/><br/>
								<button type="button" class="btn btn-xs green">Save</button>
							</div>
						</div>				
						</div>
					</form>
					<!-- END FORM-->
				</div>
		</div>
		<div class="tab-pane" id="tab_7">
				<div class="portlet-body form">
					<!-- BEGIN FORM-->
					<form action="#" class="form-horizontal">
						<div class="form-body">
				        <div class="col-md-2 md-controls">
							<div class="form-group">
							<label class="control-label">Earthquake</label><br/>
							<input id="alert_close" value="1" checked="" type="checkbox">
							</div>
						</div>
						  <div class="col-md-2 md-controls">
							<div class="form-group">
							<label class="control-label" style="margin-bottom:-10px;">Earthquake Premium Rate</label>
							<input type="text" class="form-control">
							</div>
						</div>
						<div class="col-md-3 md-controls">
							<div class="form-group">
							<label class="control-label">Subsidence, Flood and Inundation</label><br/>
							<input id="alert_close" value="1" checked="" type="checkbox">
							</div>
						</div>
						<div class="col-md-3 md-controls">
							<div class="form-group">
							<label class="control-label" style="margin-bottom:-10px;">Subsidence, Flood and Inundation Premium Rate</label>
							<input type="text" class="form-control">
							</div>
						</div>
						<div class="col-md-2 md-controls">
							<div class="form-group">
							<label class="control-label">Land / Rockslide</label><br/>
							<input id="alert_close" value="1" checked="" type="checkbox">
							</div>
						</div>
						<div class="col-md-3 md-controls">
							<div class="form-group">
							<label class="control-label">Land/Rockslide Premium Rate</label>
							<input type="text" class="form-control">
							</div>
						</div>
						<div class="col-md-2 md-controls">
							<div class="form-group">
							<label class="control-label" style="margin-bottom:-6px;">Storm/Tempest/Cyclone/ Hailstorm</label><br/>
							<input id="alert_close" value="1" checked="" type="checkbox">
							</div>
						</div>
						<div class="col-md-3 md-controls">
							<div class="form-group">
							<label class="control-label" style="margin-bottom:-10px;">Storm/Tempest/Cyclone/Hailstorm Premium Rate</label>
							<input type="text" class="form-control">
							</div>
						</div>
						<div class="col-md-2 md-controls">
							<div class="form-group">
							<label class="control-label">Explosion Implosion</label><br/>
							<input id="alert_close" value="1" checked="" type="checkbox">
							</div>
						</div>
						<div class="col-md-2 md-controls">
							<div class="form-group">
							<label class="control-label" style="margin-bottom:-10px;">Explosion Implosion Premium Rate</label>
							<input type="text" class="form-control">
							</div>
						</div>
						<div class="col-md-2 md-controls">
							<div class="form-group">
							<label class="control-label">Impact Damage</label><br/>
							<input id="alert_close" value="1" checked="" type="checkbox">
							</div>
						</div>
						<div class="col-md-2 md-controls">
							<div class="form-group">
							<label class="control-label" style="margin-bottom:-10px;">Impact Damage Premium Rate</label>
							<input type="text" class="form-control">
							</div>
						</div>
						<div class="col-md-3 md-controls">
							<div class="form-group">
							<label class="control-label" style="margin-bottom:-6px;">Bursting and/or overflowing of water Tank, Apparatus/pipes</label><br/>
							<input id="alert_close" value="1" checked="" type="checkbox">
							</div>
						</div>
						<div class="col-md-3 md-controls">
							<div class="form-group">
							<label class="control-label" style="margin-bottom:-10px;">Bursting and/or overflowing of water Tank, Apparatus/pipes Premium Rate</label>
							<input type="text" class="form-control">
							</div>
						</div>
						<div class="col-md-2 md-controls">
							<div class="form-group">
							<label class="control-label">Sprinkler Leakage</label><br/>
							<input id="alert_close" value="1" checked="" type="checkbox">
							</div>
						</div>
						<div class="col-md-3 md-controls">
							<div class="form-group">
							<label class="control-label">Sprinkler Leakage Premium rate</label>
							<input type="text" class="form-control">
							</div>
						</div>
						<div class="col-md-2 md-controls">
							<div class="form-group">
							<label class="control-label">Aircraft damage</label><br/>
							<input id="alert_close" value="1" checked="" type="checkbox">
							</div>
						</div>
						<div class="col-md-2 md-controls">
							<div class="form-group">
							<label class="control-label" style="margin-bottom:-10px;">Aircraft damage Premium rate</label>
							<input type="text" class="form-control">
							</div>
						</div>
						<div class="col-md-2 md-controls">
							<div class="form-group">
							<label class="control-label" style="margin-bottom:-6px;">Bush Fire excluding forest fire</label><br/>
							<input id="alert_close" value="1" checked="" type="checkbox">
							</div>
						</div>
						<div class="col-md-3 md-controls">
							<div class="form-group">
							<label class="control-label" style="margin-bottom:-10px;">Bush Fire excluding forest fire Premium Rate</label>
							<input type="text" class="form-control">
							</div>
						</div>
						<div class="col-md-2 md-controls">
							<div class="form-group">
							<label class="control-label">Forest Fire</label><br/>
							<input id="alert_close" value="1" checked="" type="checkbox">
							</div>
						</div>
						<div class="col-md-2 md-controls">
							<div class="form-group">
							<label class="control-label">Forest Fire Premium rate</label>
							<input type="text" class="form-control">
							</div>
						</div>
						<div class="col-md-3 md-controls">
							<div class="form-group">
							<label class="control-label">Deletion of Elect Clause (DEC)</label><br/>
							<input id="alert_close" value="1" checked="" type="checkbox">
							</div>
						</div>
						<div class="col-md-3 md-controls">
							<div class="form-group">
							<label class="control-label">Deletion of Electrical Clause (DEC) Rate</label>
							<input type="text" class="form-control">
							</div>
						</div>
						<div class="col-md-2 md-controls">
							<div class="form-group">
							<label class="control-label" style="margin-bottom:-6px;">Riot, Strike and Malicious Damage</label><br/>
							<input id="alert_close" value="1" checked="" type="checkbox">
							</div>
						</div>
						<div class="col-md-3 md-controls">
							<div class="form-group">
							<label class="control-label" style="margin-bottom:-10px;">Riot, Strike and Malicious Damage Premium Rate</label>
							<input type="text" class="form-control">
							</div>
						</div>
						<div class="col-md-2 md-controls">
							<div class="form-group">
							<label class="control-label">Malicious Damage</label><br/>
							<input id="alert_close" value="1" checked="" type="checkbox">
							</div>
						</div>
						<div class="col-md-2 md-controls">
							<div class="form-group">
							<label class="control-label">Malicious Damage Premium Rate</label>
							<input type="text" class="form-control">
							</div>
						</div>
						<div class="col-md-2 md-controls">
							<div class="form-group">
							<label class="control-label">Spontaneous Combustion</label><br/>
							<input id="alert_close" value="1" checked="" type="checkbox">
							</div>
						</div>
						<div class="col-md-3 md-controls">
							<div class="form-group">
							<label class="control-label">Spontaneous Combustion Premium Rate</label>
							<input type="text" class="form-control">
							</div>
						</div>

						<div class="col-md-1 md-controls">
							<div class="form-group pull-right"><br/><br/><br/>
								<button type="button" class="btn btn-xs green">Save</button>
							</div>
						</div>				
						</div>
					</form>
					<!-- END FORM-->
				</div>
		</div>

    </div>
    </div>
</div>




</div>
</div>

			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<?php echo $__env->make('common.quick', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<!-- END QUICK SIDEBAR -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>