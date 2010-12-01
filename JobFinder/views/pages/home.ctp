<div id="job_contentbg">
<div class="job_wrap">	
<div class="job_conrer_panel">			
	<?php echo $this->Form->create('Job',array('action'=>'searchResults','class'=>'job_formquicksearch'));?>
        <label for="input1"><strong>Tìm Việc Nhanh:</strong></label> 
        <?php echo $this->Form->Input('keyword',array('label'=>false,'div'=>false));?>
        <?php echo $this->Form->Input('province',array('class'=>'comboType02','label'=>false,'div'=>false,'empty'=>'Tất cả địa điểm'));?>
        <?php echo $this->Form->Submit('Tìm việc',array('div'=>false,'class'=>'job_btn1'));?>	
    <br clear="all"/>
</div>
<!--End search-->
<div > <br clear="all"/> </div>
	
<!-- Begin left col -->	
<div id="job_leftcol">
	<!--begin box corner-->
    <h2 align="center" class="job_boxtitle">Việc Làm Với Nhà <br/>Tuyển Dụng Hàng Đầu</h2>
    <div class="job_conrer_ct job_fe_ct">
        <!--Left Logo-->
	    <div style="clear: both;" id="ads_TOP_COMPANIES">
	    <div style="position: relative;">
	        <table class="logo_feature" id="adc_TOP_COMPANIES">
	            <tbody>
                    <tr>
                        <td> <a target="_blank" href="###">
    	                   <?php echo $html->image('../img/banner_logo/intel_88x43.gif', 
    	                	  array('alt' => 'Intel Corporation', 'width' => '88', 'height' => '43', 
                                        'border'=>'0', 'title'=>'Intel Corporation'))  ?>
    	                </a></td>
                        <td> <a target="_blank" href="###">
    	                   <?php echo $html->image('../img/banner_logo/intel_88x43.gif', 
    	                	  array('alt' => 'Intel Corporation', 'width' => '88', 'height' => '43', 
                                        'border'=>'0', 'title'=>'Intel Corporation'))  ?>
    	                </a></td>                    
                    </tr>
                    <tr>
                        <td> <a target="_blank" href="###">
    	                   <?php echo $html->image('../img/banner_logo/intel_88x43.gif', 
    	                	  array('alt' => 'Intel Corporation', 'width' => '88', 'height' => '43', 
                                        'border'=>'0', 'title'=>'Intel Corporation'))  ?>
    	                </a></td>
                        <td> <a target="_blank" href="###">
    	                   <?php echo $html->image('../img/banner_logo/intel_88x43.gif', 
    	                	  array('alt' => 'Intel Corporation', 'width' => '88', 'height' => '43', 
                                        'border'=>'0', 'title'=>'Intel Corporation'))  ?>
    	                </a></td>
                    </tr>
                    <tr>
                        <td> <a target="_blank" href="###">
    	                   <?php echo $html->image('../img/banner_logo/intel_88x43.gif', 
    	                	  array('alt' => 'Intel Corporation', 'width' => '88', 'height' => '43', 
                                        'border'=>'0', 'title'=>'Intel Corporation'))  ?>
    	                </a></td>
                        <td> <a target="_blank" href="###">
    	                   <?php echo $html->image('../img/banner_logo/intel_88x43.gif', 
    	                	  array('alt' => 'Intel Corporation', 'width' => '88', 'height' => '43', 
                                        'border'=>'0', 'title'=>'Intel Corporation'))  ?>
    	                </a></td>
                    </tr>
                    <tr>
                        <td> <a target="_blank" href="###">
    	                   <?php echo $html->image('../img/banner_logo/intel_88x43.gif', 
    	                	  array('alt' => 'Intel Corporation', 'width' => '88', 'height' => '43', 
                                        'border'=>'0', 'title'=>'Intel Corporation'))  ?>
    	                </a></td>
                        <td> <a target="_blank" href="###">
    	                   <?php echo $html->image('../img/banner_logo/intel_88x43.gif', 
    	                	  array('alt' => 'Intel Corporation', 'width' => '88', 'height' => '43', 
                                        'border'=>'0', 'title'=>'Intel Corporation'))  ?>
    	                </a></td>
                    </tr> 
                 </tbody>
            </table>
         </div></div>
         <a title="Xem tất cả nhà tuyển dụng" class="job_viewall" href="#Link to view all">
            Xem tất cả nhà tuyển dụng
         </a>
    </div>
    <!--endjob_conrer_ct -->
	
</div>
<!-- end left col -->


<div id="job_rightcol">

<!-- begin top featured -->
    <div align="center">
	   <div id="job_vipLogo">
            <div style="clear: both;" id="ads_TOP_COMPANIES_HORISONTAL">
            <div class="salesLogosContainer" id="adc_TOP_COMPANIES_HORISONTAL">
            
            <!--4  Vip Logo-->
            <div class="salesLogo">
                <a class="salesLogoLink" target="_blank" href="##LinkVipLogo">
	                <?php echo $html->image('../img/banner_logo/canon1_88x43.gif', 
	                	  array('class'=>'salesLogoImage',
                                'alt' => 'Exporting Smiles ', 
                                'width' => '88', 'height' => '43',
                                'border'=>'0', 'title'=>'Canon Vietnam Co., Ltd.'));  ?>
                    <span class="salesLogoTitle">Canon Vietnam Co., Ltd. </span>
                    <span class="salesLogoDesc">Exporting Smiles</span>
                </a>
            </div>
            <div class="salesLogo">
                <a class="salesLogoLink" href="##LinkViplogo" target="_blank">
                    <?php echo $html->image('../img/banner_logo/adidas-88x43.gif', 
	                	  array('class'=>'salesLogoImage',
                                'alt' => 'Impossible is Nothing', 
                                'width' => '88', 'height' => '43',
                                'border'=>'0', 'title'=>'adidas Sourcing Limited'));  ?>
                    <span class="salesLogoTitle">adidas Sourcing Limited </span>
                    <span class="salesLogoDesc">Impossible is Nothing</span>
                </a>
            </div>
            <div class="salesLogo">
                <a class="salesLogoLink" href="##LinkVipLogo" target="_blank">
                    <?php echo $html->image('../img/banner_logo/logo_88x43_panasonic_3.gif', 
	                	  array('class'=>'salesLogoImage',
                                'alt' => 'People Before Products', 
                                'width' => '88', 'height' => '43',
                                'border'=>'0', 'title'=>'Panasonic Vietnam Group'));  ?>
                    <span class="salesLogoTitle">Panasonic Vietnam Group </span>
                    <span class="salesLogoDesc">People Before Products</span>
                </a>
            </div>
            <div class="salesLogo">
                <a class="salesLogoLink" href="##LinkVipLogo" target="_blank">
                    <?php echo $html->image('../img/banner_logo/navigosgroup_88x43_2.gif', 
	                	  array('class'=>'salesLogoImage',
                                'alt' => 'Build the best winning team', 
                                'width' => '88', 'height' => '43',
                                'border'=>'0', 'title'=>'Click for Opportunities'));  ?>
                    <span class="salesLogoTitle">Click for Opportunities </span>
                    <span class="salesLogoDesc">Build the best winning team</span>
                </a>
            </div>
            </div>
            
            </div>
            		
        <br class="clear"/>
	   </div>
        
    </div>
     <div><br clear="all"/></div>
<!-- endjob_conrer_ct -->
            
	<div id="job_rightcol_left">
        <!-- begin top jobs -->
			<div class="blue_bg_title"> <strong>Công Việc Nổi Bật</strong> </div>
			<div class="white_content">

            <ul class="job_topjobslist floatLeft">
            	<?php $i=0;
            		foreach ($jobs as $job):
            		$i++;?>
                <li><?php echo $this->Html->link(__($job['Job']['job_title'], true), 
                        array('controller'=> 'jobs','action' => 'view', $job['Job']['id'])); ?>
					<span><?php echo $job['Job']['company_name']; ?></span>
				</li>
				<?php if($i==5):?>
					</ul>
					<ul class="job_topjobslist floatRight">
				<?php endif;?>
				<?php endforeach; ?>
				</ul>
				
        <br clear="all"/>
        </div>
        <!-- endjob_conrer_ct -->
    </div>
      <div><br /></div>
    <!-- end job_rightcol_right -->

</div>
  <div><br clear="all"/></div>
<!-- end right col -->
<!-- end wrap -->
<!-- end content -->
</div></div>

