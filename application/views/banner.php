<script type="text/javascript">	$('#slideshow_3').cycle({        fx: 'uncover',				speed:  700, 		timeout: 5000, 		pager: '.ss3_wrapper .slideshow_paging', 		pagerAnchorBuilder: pager_create,        prev: '.ss3_wrapper .slideshow_prev',        next: '.ss3_wrapper .slideshow_next',		before: function(currSlideElement, nextSlideElement) {			var data = $('.data', $(nextSlideElement)).html();			$('.ss3_wrapper .slideshow_box .data').fadeOut(300, function(){				$('.ss3_wrapper .slideshow_box .data').remove();				$('<div class="data">'+data+'</div>').hide().appendTo('.ss3_wrapper .slideshow_box').fadeIn(600);			});		}    });		function pager_create(id, slide) {		var thumb = $('.thumb', $(slide)).html();		var title = $('h4 a', $(slide)).html();		var add_first = (id==0)?' class="first"':'';		return '<li><a href="#" title="'+title+'"'+add_first+'>'+thumb+'</a></li>';    };		// not using the 'pause' option. instead make the slideshow pause when the mouse is over the whole wrapper	$('.ss3_wrapper').mouseenter(function(){		$('#slideshow_3').cycle('pause');    }).mouseleave(function(){		$('#slideshow_3').cycle('resume');    });</script><!-- banner --><div class="row">	<div class="span10">		<div id="banner">			<div class="ss3_wrapper">				<a href="#" class="slideshow_prev"><span>Previous</span></a>				<a href="#" class="slideshow_next"><span>Next</span></a>									<ul class="slideshow_paging"></ul>								<div class="slideshow_box">					<div class="data"></div>				</div>								<div id="slideshow_3" class="slideshow">										<?php						if($banner){							foreach($banner as $list){					?>								<div class="slideshow_item">									<div class="image"><a href="#"><img src="<?php echo base_url('uploads/banner/'.$list['banner_display']) ?>" alt="<?php echo $list['keywords'] ?>" title="<?php echo $list['description'] ?>"/></a></div>									<div class="thumb"><img src="<?php echo base_url('uploads/banner/'.$list['banner_thumbnail']) ?>" alt="<?php echo $list['keywords'] ?>" title="<?php echo $list['description'] ?>"/></div>									<div class="data">										<div class="content_header color1"><?php echo $list['description'] ?></div>									</div>								</div>					<?php							}						}					?>				</div>			</div>		</div>	</div></div><hr />