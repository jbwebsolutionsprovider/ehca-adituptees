<div class="container">	<div class="row">		<div class="span12 well_body">			<h3 class="content_header">Order Information</h3>			<div class="padding_top20">				<table class="table content_detail" width="100%">					<tr>						<td width="20%">Customer Name</td>						<td width="20%"><?php echo $order[0]['customer_name'] ?></td>						<td width="20%">&nbsp;</td>						<td width="20%">Order Date</td>						<td width="20%"><?php echo $this->utility->reformatDate($order[0]['order_date'],0) ?></td>					</tr>					<tr>						<td width="20%">Company Name</td>						<td width="20%"><?php echo $order[0]['company_name'] ?></td>						<td width="20%">&nbsp;</td>						<td width="20%">Address</td>						<td width="20%"><?php echo $order[0]['address1'].' '.$order[0]['city'].', '.$order[0]['state'].' '.$order[0]['zipcode'] ?></td>					</tr>				</table>				<hr />				<table class="table table-striped table-hover content_detail">					<tr>						<th>Products</th>						<th>Price</th>						<th>Quantity</th>						<th>Total</th>					</tr>					<?php						$order_detail = $order[0]['order_details'];						if($order_detail){							foreach($order_detail as $list){					?>								<tr>									<td>										<div class="row">											<div class="span3">												<img src="<?php echo base_url('uploads/products/'.$list['product_id'].'/'.$list['img']) ?>" alt="<?php echo $list['product_name'] ?>" title="<?php echo $list['product_name'] ?>"/>											</div>											<div class="span3">												<h3 class="content_header"><?php echo $list['product_name'] ?></h3>												<div class="content_detail"><?php echo $list['description'] ?></div>												<br />												<div class="content_header">Sizes</div>												<table class="table table-striped content_detail">													<tr>														<th>Size</th>														<th>Quantity</th>														<th>Price</th>														<th>Line Total</th>													</tr>													<?php														$product_sizes = $list['sizes'];														if($product_sizes){															foreach($product_sizes as $list1){													?>																<tr>																	<td><?php echo $list1['size'] ?></td>																	<td><?php echo $list1['qty'] ?></td>																	<td><?php echo $currency[0]['data'].' '.number_format($list1['price'],2,'.',',') ?></td>																	<td><?php echo $currency[0]['data'].' '.number_format($list1['line_amount'],2,'.',',') ?></td>																</tr>													<?php															}														}													?>												</table>											</div>										</div>									</td>									<td><?php echo $currency[0]['data'].' '.number_format($list['price'],2,'.',',') ?></td>									<td><?php echo $list['qty'] ?></td>									<td><?php echo $currency[0]['data'].' '.number_format($list['line_amount'],2,'.',',') ?></td>								</tr>					<?php							}						}					?>				</table>				<hr />				<table class="table table-striped content_detail" width="100%">					<tr>						<td width="80%"><div align="right">Sub Total Amount:</div></td>						<td width="20%"><div><?php echo $currency[0]['data'].' '.number_format($order[0]['subtotal'],2,'.',','); ?></div></td>					</tr>					<tr>						<td><div align="right">Shipping Amount:</div></td>						<td><div><?php echo $currency[0]['data'].' '.number_format($order[0]['shipping'],2,'.',','); ?></div></td>					</tr>					<tr>						<td><div align="right">Discount Amount Amount:</div></td>						<td><div><?php echo $currency[0]['data'].' '.number_format($order[0]['discount'],2,'.',','); ?></div></td>					</tr>					<tr>						<td><div class="font_size_18" align="right">Total Amount:</div></td>						<td><div class="font_size_18"><?php echo $currency[0]['data'].' '.number_format($order[0]['subtotal'],2,'.',','); ?></div></td>					</tr>				</table>			</div>		</div>	</div></div>