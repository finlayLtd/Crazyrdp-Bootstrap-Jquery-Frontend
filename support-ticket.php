<?php require 'header.php'; ?>
<section class="dashboard">
	<div class="container">
		<div class="d-flex justify-content-between align-items-center title-button-wrapper">
			<h2 class="title mb-0">Support Ticket</h2>
		</div>


		<div class="sub-section server-list-tab">
        <div class="row justify-content-between align-items-center ">

          	<div class="row mb-5 pe-0">

		            <div class="col-md-9 d-flex justify-content-between pe-0 flex-wrap">

		              <ul class="nav nav-pills mb-3 mb-md-0 order-1 order-md-2 mb-lg-0" id="pills-tab" role="tablist">
		                <li class="nav-item" role="presentation">
		                  <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" aria-selected="true">All</button>
		                </li>
		                <li class="nav-item" role="presentation">
		                  <button class="nav-link" id="pills-in-work-tab" data-bs-toggle="pill" data-bs-target="#pills-in-work" type="button" role="tab" aria-controls="pills-in-work" aria-selected="false">In work</button>
		                </li>
		                <li class="nav-item" role="presentation">
		                  <button class="nav-link" id="pills-closed-tab" data-bs-toggle="pill" data-bs-target="#pills-closed" type="button" role="tab" aria-controls="pills-closed" aria-selected="false">Closed</button>
		                </li>                                
		              </ul>
		            </div>
		            <div class="col-md-3 text-end">
								<button type="submit" class="btn btn-dark hover-dark-light d-inline" id="create-ticket">Create Ticket</button>			
		            	
		            </div>

		        </div> 


            <div class="tab-content" id="pills-tabContent">

              <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">

                <div class="row mb-5">
		              <div class="col-12 col-lg-6 col-md-6 col-sm-12">
		                <div class="card-item p-4 mb-4 support-item flex-column ">

		                	<div class="d-flex justify-content-between support-item-header">
		                		<div class="support-item-title">
		                			<img class="me-2" src="assets/img/support.svg" alt=""><span style="color:rgba(23, 30, 38, 0.5);">#1667135379414894</span>
		                		</div>
		                		<div class="support-item-status">
		                			<span class="fs-15 color-in-work">In work</span>
		                		</div>
		                	</div>

                    	<div class="support-item-detail">
                    		<p class="fs-15 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod..</p>
                    	</div>

		                </div>
		              </div>


		              <div class="col-12 col-lg-6 col-md-6 col-sm-12">
		                <div class="card-item p-4 mb-4 support-item flex-column ">

		                	<div class="d-flex justify-content-between support-item-header">
		                		<div class="support-item-title">
		                			<img class="me-2" src="assets/img/support.svg" alt=""><span style="color:rgba(23, 30, 38, 0.5);">#1667135379414894</span>
		                		</div>
		                		<div class="support-item-status">
		                			<span class="fs-15 color-closed">Closed</span>
		                		</div>
		                	</div>

                    	<div class="support-item-detail">
                    		<p class="fs-15 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod..</p>
                    	</div>

		                </div>
		              </div>



            
                </div>

              </div>

              <div class="tab-pane fade" id="pills-in-work" role="tabpanel" aria-labelledby="pills-in-work-tab">

                <div class="row mb-5">

		              <div class="col-12 col-lg-6 col-md-6 col-sm-12">
		                <div class="card-item p-4 mb-4 support-item flex-column ">

		                	<div class="d-flex justify-content-between support-item-header">
		                		<div class="support-item-title">
		                			<img class="me-2" src="assets/img/support.svg" alt=""><span style="color:rgba(23, 30, 38, 0.5);">#1667135379414894</span>
		                		</div>
		                		<div class="support-item-status">
		                			<span class="fs-15 color-in-work">In work</span>
		                		</div>
		                	</div>

                    	<div class="support-item-detail">
                    		<p class="fs-15 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod..</p>
                    	</div>

		                </div>
		              </div>

                </div>


              </div>



              <div class="tab-pane fade" id="pills-closed" role="tabpanel" aria-labelledby="pills-closed-tab">

                <div class="row mb-5">

		              <div class="col-12 col-lg-6 col-md-6 col-sm-12">
		                <div class="card-item p-4 mb-4 support-item flex-column ">

		                	<div class="d-flex justify-content-between support-item-header">
		                		<div class="support-item-title">
		                			<img class="me-2" src="assets/img/support.svg" alt=""><span style="color:rgba(23, 30, 38, 0.5);">#1667135379414894</span>
		                		</div>
		                		<div class="support-item-status">
		                			<span class="fs-15 color-closed">Closed</span>
		                		</div>
		                	</div>

                    	<div class="support-item-detail">
                    		<p class="fs-15 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod..</p>
                    	</div>

		                </div>
		              </div>

                </div>


              </div>


            </div>






        </div>
		</div>
	</div>
</section>		

<div class="modal modal-ticket hidden">
	<div class="modal-inner">
			<div class="modal-close">
				<img class="close-dark" src="assets/img/close.svg" alt="">
				<img class="close-light" src="assets/img/close-light.svg" alt="">

			</div>		
		<div class="modal-content">

			<div class="modal-header">
				<div class="modal-title">
					<h2>New ticket</h2>
					<h3>Create new ticket now.</h3>
				</div>
			</div>
			<div class="modal-main">
				<div class="amounts">
					<h4>Subject</h4>
					<input class="mb-3" type="text" placeholder="Write subject">

					<h4>Describe the problem</h4>
					<textarea class="mb-3" name="" id="" cols="30" rows="8" ></textarea>

					<h4>Server related*</h4>
					<select name="" id="">
						<option value="Server">Server</option>
						<option value="Server2">Server2</option>
					</select>

				</div>
				<button class="btn-dark d-block w-100 mt-5">Create Ticket</button>
			</div>
		</div>
	</div>
</div>	
<?php require 'footer.php'; ?>

<script>
	$("#create-ticket").click(function(){
		$(".modal").removeClass("hidden");
	})

	$(".modal-close").click(function(){
		$(".modal").addClass("hidden");
	})
</script>