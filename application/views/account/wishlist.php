<div class="container">	<div class="row">		<div class="span12 well_body">			<h3 class="content_header">My Wishlist</h3>			<hr />			<div class="content_detail">				<div class="row">					<!-- Featured Stock Design -->					<?php						$cnt = 1;						if($wishlist){							foreach($wishlist as $list){					?>								<div class="span2">									<div class="bar_header color1">										<div align="center"><?php echo $list['product_name'] ?></div>									</div>									<div align="center" class="bar_body">										<a href="<?php echo site_url('product/product-detail/'.$list['product_name'].'-'.$list['product_id']) ?>"><img src="<?php echo base_url('uploads/products/'.$list['product_id'].'/'.$list['image_thumbnail']) ?>" alt="<?php echo $list['product_keywords'] ?>" title="<?php echo $list['product_name'] ?>"/></a>									</div>									<div class="bar_footer">										<div align="center"><a href="<?php echo site_url('product/product-detail/'.$list['product_name'].'-'.$list['product_id']) ?>" class="btn btn-warning btn-small">View Art Design</a></div>									</div>								</div>					<?php																if($cnt%6 == 0 && $total_product > $cnt){								echo '</div><br/><div class="row">';							} elseif($total_product == $cnt){								echo '</div>';							}														$cnt++;							}						} else {					?>											<div class="span12">							<br/>							<div class="alert alert-success">								<strong>Sorry! There are no items found. Please try again later.</strong>							</div>						</div>					</div>										<?php						}					?>			</div>		</div>	</div></div>