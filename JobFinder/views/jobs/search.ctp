<div id="job_nav_sub">
	<div class="job_wrapmenu">
		<ul class="job_subnav">
			<li><?php echo $html->link($html->tag('span', 'Tìm Kiếm Nhanh'), 
					array('controller' => 'jobs', 'action' => 'search'),array('escape' => false)); ?>
			</li>
			<li><?php echo $html->link($html->tag('span', 'Tìm Kiếm Nâng Cao'), 
					array('controller' => 'jobs', 'action' => 'advanceSearch'),array('escape' => false)); ?>
			</li>	
		</ul>	
		<br clear="all"/>
	</div><!-- end wrap -->		
</div>
<div class="wrap_search">
	<div class="line_title">
        <img width="300" height="30" alt="Tìm việc, tìm việc làm, tìm việc nhanh" 
                src="../img/home/btxt_job_search_vn.gif"/>
    </div>
    <?php echo $this->Session->flash(); ?>
    <?php pr($listJobCategories);?>
    <div id="search_contentpage">
    	<!-- begin keyword -->
		<div class="box_corner">				
            <b class="xtop">
                <b class="xb1 blue_top"><!-- --></b>
                <b class="xb2 blue_curve blue_title"><!-- --></b>
                <b class="xb3 blue_curve blue_title"><!-- --></b>
            </b>
			<div class="blue_bg_title"><strong>Tìm Việc</strong></div>
            <div class="white_content">
                <!-- begin quick search --> 
                <div class="jobsearch_bykeyword">
                	<?php echo $this->Form->create('Job');?>
                    <h2 style="background: none repeat scroll 0% 0% transparent; margin: 0pt 0pt 10px;" 
                        class="tit_areasearch">Tìm Việc Bằng Từ Khóa</h2>
                    <?php echo $this->Form->Input('keyword',array('class'=>'inputType02','maxlength'=>'80','label'=>false,'div'=>false));?>
                    <?php echo $this->Form->Submit('Tìm kiếm',array('style'=>'margin-bottom: 7px; width: 70px;','div'=>false));?>
                    <br/>
                    <?php echo $this->Form->Input('jobCategory',array('class'=>'comboType02_industry','label'=>false,'div'=>false));?>
					<?php echo $this->Form->Input('province',array('class'=>'comboType02','label'=>false,'div'=>false));?>
                    <?php echo $this->Form->end();?>
             	</div>                          
                <!-- end quick search -->
	
    			<!-- begin by date -->
                <div class="jobsearch_byday">
    				<div style="background: none repeat scroll 0% 0% transparent; margin: 0pt 0pt 10px;" 
                        class="tit_areasearch">Tìm Việc Theo Ngày Tháng</div>
                    <ul style="float: none;" class="quick_list">
                        <li>» <a title="Tim Trong 3 Ngay" href="Tim 3 ngay">Tìm Việc Đã Đăng Trong 3 Ngày</a></li>
                        <li>» <a title="Tim Trong 7 Ngay" href="Tim 7 ngay">Tìm Việc Đã Đăng Trong 7 Ngày</a></li>
                        <li>» <a title="Tim Trong 14 Ngay" href="Tim 14 ngay">Tìm Việc Đã Đăng Trong 14 Ngày</a></li>
                    </ul>
                </div>
                <!-- end by date -->

    			<div style="clear: both;"></div>
    			
                <!-- begin by category -->
              	<div class="jobsearch_byindustry">
					<div class="tit_areasearch">Theo Ngành Nghề</div>
                	<div class="jobsearch_byindustry_inner">                       	                                
                        <ul class="quick_list">
                        	<?php foreach ($listJobCategories as $jobCategory):?>
                        	<li>
                        		<?php echo $html->link($jobCategory['JobCategory']['name'], array('controller' => 'jobs', 'action' => 'searchResults', $jobCategory['JobCategory']['id']),array('escape' => false)); ?>
                        		<?php echo __('('.count($jobCategory['Job']).')'); ?>
                        	</li>
                        	<?php endforeach;?>
                        </ul>
                    </div>                         
              	</div>
              
				<div class="jobsearch_byfunction">
					<div class="tit_areasearch">Theo Chức Năng</div>
                	<ul class="quick_list"><span>Giao Dịch Khách Hàng</span><li><a href="searchresults.php?search=true&amp;industry=27">Marketing</a> (410) </li><li><a href="searchresults.php?search=true&amp;industry=33">Bán hàng</a> (733) </li><li><a href="searchresults.php?search=true&amp;industry=34">Bán hàng kỹ thuật</a> (225) </li><li><a href="searchresults.php?search=true&amp;industry=11">Dịch vụ khách hàng</a> (208) </li></ul><br><ul class="quick_list"><span>Bộ Phận Hỗ trợ</span><li><a href="searchresults.php?search=true&amp;industry=1">Kế toán/Tài chính</a> (483) </li><li><a href="searchresults.php?search=true&amp;industry=2">Hành chánh/Thư ký</a> (420) </li><li><a href="searchresults.php?search=true&amp;industry=23">Nhân sự</a> (216) </li><li><a href="searchresults.php?search=true&amp;industry=25">Pháp lý</a> (81) </li><li><a href="searchresults.php?search=true&amp;industry=47">Biên phiên dịch</a> (146) </li></ul><br><ul class="quick_list"><span>Kỹ thuật - Công nghệ</span><li><a href="searchresults.php?search=true&amp;industry=35">IT - Phần mềm</a> (358) </li><li><a href="searchresults.php?search=true&amp;industry=55">IT-Phần cứng/Mạng</a> (222) </li></ul><br><ul class="quick_list"><span>Hỗ trợ sản xuất</span><li><a href="searchresults.php?search=true&amp;industry=26">Sản Xuất</a> (351) </li><li><a href="searchresults.php?search=true&amp;industry=49">Vật Tư/Cung vận</a> (130) </li><li><a href="searchresults.php?search=true&amp;industry=69">Hoạch định/Dự án</a> (172) </li><li><a href="searchresults.php?search=true&amp;industry=19">Xuất nhập khẩu</a> (142) </li><li><a href="searchresults.php?search=true&amp;industry=70">QA/QC</a> (116) </li><br><li><a href="searchresults.php?search=true&amp;industry=39">Khác</a> (55) </li></ul><br>                   	  	</div>
				<div class="jobsearch_bytype">
					<div class="tit_areasearch">Theo Đối Tượng</div>
                    <ul class="quick_list">
                    	<li><a href="searchresults.php?search=true&amp;industry=71">Overseas Jobs</a> (7) </li><li><a href="searchresults.php?search=true&amp;industry=18">Người nước ngoài/Việt Kiều</a> (34) </li><li><a href="searchresults.php?search=true&amp;industry=17">Cấp quản lý điều hành</a> (291) </li><li><a href="searchresults.php?search=true&amp;industry=15">Mới tốt nghiệp</a> (40) </li><li><a href="searchresults.php?search=true&amp;industry=51">Thời vụ/Hợp đồng ngắn hạn</a> (2) </li>                            </ul>                            						
                </div>
                
                <div style="clear: both;"></div>
            </div>
			<!--end xboxcontent-->	
			<b class="xbottom">
                <b class="xb3 blue_curve blue_bg_bottom"><!-- --></b>
                <b class="xb2 blue_curve blue_bg_bottom"><!-- --></b>
                <b class="xb1 blue_top"><!-- --></b>
            </b>				
		</div><!-- end by category -->

    </div>     
</div>

<div style="clear: both;"></div>
