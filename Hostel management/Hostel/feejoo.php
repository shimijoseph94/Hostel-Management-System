<?php  include_once("header1.php"); ?>
<div class="content">
						<div id="page-header" class="dark-2">
							<div class="container">
								<div class="row">
									<div class="col-sm-6">
										<h4>Payment</h4>
									</div><!-- col -->

								</div><!-- row -->
							</div></center><!-- ontainer -->
						</div><!-- page-header -->
            <center><img src="images/paymentlogo123.png" width="430px" height="165"></center>
						 <center><div class="container">
							<div class="row" >
								<div class="col-sm-3">
								</div>
								<div class="col-sm-6">
									<div class="popform" align="center">
										<form   name="myform" id="payment" action=""method="post" role="form" style="height:auto;">
											<div class="form-group" >
											<label for="payment type" >Type of payment </label>
                      <select   name="payment_type" id="paymenttype" class="form-control">
                        <option value="Credit Card" id="credit">Credit Card</option>
                        <option value="Debit Card" id="debit">Debit Card</option>
                        <option value="Debit Card" id="netbank">Net Banking</option>
                        <option value="Debit Card" id="upi">UPI Payment</option>
                     </select>
										 <input type="hidden" id="total_amount"name="total_amount" value="<?php echo $_POST['tot_amt'];?>">
												<span style="color:red;display: none;" id="namelabel">
													<span>
														<label class="control-label" for="project" style="color: #A94442"><i class="fa fa-times-circle-o"></i>Please enter  payment type.</label>
													</span>
												</span>
											</div>
											<div class="form-group">
												<label for="cardnumber">Card Number  </label>
												<input    type="" class="form-control"  name="card_no" id="cardno" placeholder="Enter Card Number">
												<span class="payment cd-error-message" id="cardno_error"></span>
												<span style="color:red;display: none;" id="cardlabel">
													<span>
														<label class="control-label" for="project" style="color: #A94442"><i class="fa fa-times-circle-o"></i>Please enter card number.</label>
													</span>
												</span>
											</div>
											<div class="form-group cvv">
												<label for="expirydate" id="exp">Expiry Date </label>
												<span class="payment cd-error-message" id="exp_error"></span>
												<div "cvv form-group">
												<select name="month"id="month">
													<option selected disabled >MM</option>

													<?php
														for($i=1;$i<=12;$i++){
															?><option value="<?php echo $i;?>"><?php echo $i;?></option><?php
														}
													 ?>
												</select>
												<span class="payment cd-error-message" id="month_error"></span>
											</div>
											<div class="cvv form-group">
												<select name="month" id="year">
													<option selected disabled >YYYY</option>

													<?php
														for($i=2000;$i<=2100;$i++){
															?><option value="<?php echo $i;?>"><?php echo $i;?></option><?php
														}
													 ?>
												</select>
												<span class="payment cd-error-message" id="year_error"></span>
											</div>
											<div class="cvv form-group">
												<input    type="text"  name="cvv" id="cvv" placeholder="xxx">
												<span class="payment cd-error-message" id="cvv_error"></span>
											</div>
										</div>
											<div class="form-group">

												<label for="name">Card Holder Name : </label>
												<input    type="text" class="form-control" name="venue" id="holdername" placeholder="Enter Event Venue">
												<span class="payment cd-error-message" id="holdername_error"></span>
												<span style="color:red;display: none;" id="namelabel">
													<span>
														<label class="control-label" for="project" style="color: #A94442"><i class="fa fa-times-circle-o"></i>Please enter  Event Venue.</label>
													</span>
												</span>
											</div>


												<input id="submit" type="submit" class="btn btn-default" style="color:#000;float:right;" name="submit" value="Pay Now">
											</form>
										</div>
									</div><!-- col -->
									
            

          </div>
        </div><!-- /.row -->

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

  </body>
</html>