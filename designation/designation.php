<?php require_once( '../couch/cms.php' ); ?>
<cms:template title='Designation' clonable='1' routable='1' parent="_masterentry_">
	<cms:route name='list_designation' path='' />
	<cms:route name='create_designation' path='create' />
    <cms:route name='edit_designation' path='{:id}/edit' >
    	<cms:route_validators id='non_zero_integer' />
	</cms:route>
	<cms:route name='delete_designation' path='{:id}/delete' >
	    <cms:route_validators id='non_zero_integer' />
	</cms:route>
</cms:template>
<!-- 
	Company Name:	GenXCoders Pvt. Ltd.
	Author Name:	Er Aashish Handa
	Date:			Sep 30, 2019
	Client:			Gaurav Sharma
	Project Name:	AWADH
	Project Type:	Restaurant Management System
 -->
<cms:embed 'header.html' />
		<!-- Content -->
		<cms:match_route debug='0' />
		<div class="gxcpl-content-div">

			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<h4 class="gxcpl-no-margin gxcpl-no-padding">
							Master Entry: Designation
						</h4>
						<hr class="style7" />
						<div class="gxcpl-ptop-10"></div>
					</div>
					
					<cms:embed "designation/<cms:show k_matched_route />.html" />
						
				</div>
			</div>	
		</div>
		<!-- Content -->
<cms:embed 'footer.html' />
<?php COUCH::invoke( K_IGNORE_CONTEXT ); ?>