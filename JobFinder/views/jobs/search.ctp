<div id="job_nav_sub">
	<div class="job_wrapsubmenu">
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
    <div id="search_contentpage">
    	<!-- begin keyword -->
		<div class="box_corner">				
			<div class="blue_bg_title"><strong>Tìm Việc</strong></div>
            <div class="white_content">
                <!-- begin quick search --> 
                <div class="jobsearch_bykeyword">
                	<?php echo $this->Form->create('Job',array('action'=>'searchResults'));?>
                    <h2 style="background: none repeat scroll 0% 0% transparent; margin: 0pt 0pt 10px;" 
                        class="tit_areasearch">Tìm Việc Bằng Từ Khóa</h2>
                    <?php echo $this->Form->Input('keyword',array('class'=>'inputType02','maxlength'=>'80','label'=>false,'div'=>false));?>
                    <?php echo $this->Form->Submit('Tìm kiếm',array('style'=>'margin-bottom: 7px; width: 70px;','div'=>false));?>
                    <br/>
                    <?php echo $this->Form->Input('jobCategory',array('class'=>'comboType02_industry','label'=>false,'div'=>false,'empty'=>'Bất kỳ ngành nghề'));?>
					<?php echo $this->Form->Input('province',array('class'=>'comboType02','label'=>false,'div'=>false,'empty'=>'Tất cả địa điểm'));?>
                    <?php echo $this->Form->end();?>
             	</div>                          
                <!-- end quick search -->

    			<div style="clear: both;"></div>
    			
                <!-- begin by category -->
              	<div class="jobsearch_byindustry">
					<div class="tit_areasearch">Theo Ngành Nghề</div>
                	<div class="jobsearch_byindustry_inner">                       	                                
                        <ul class="quick_list">
                        	<?php foreach ($listJobCategories as $jobCategory):?>
                        	<li>
                        		<?php echo $html->link($jobCategory['JobCategory']['name'], array('controller' => 'jobs', 'action' => 'searchResults', 'category' => $jobCategory['JobCategory']['id']),array('escape' => false)); ?>
                        	</li>
                        	<?php endforeach;?>
                        </ul>
                    </div>                         
              	</div>
              
				<div class="jobsearch_byday">
					<div class="tit_areasearch">Tìm Việc Theo Ngày Tháng</div>
                	<ul class="quick_list">
                		<li>» <?php echo $html->link('Tìm Việc Đã Đăng Trong 3 Ngày', array('controller' => 'jobs', 'action' => 'searchResults', 'day'=>3),array('escape' => false));?></li>
                        <li>» <?php echo $html->link('Tìm Việc Đã Đăng Trong 7 Ngày', array('controller' => 'jobs', 'action' => 'searchResults', 'day'=>7),array('escape' => false));?></li>
                        <li>» <?php echo $html->link('Tìm Việc Đã Đăng Trong 14 Ngày', array('controller' => 'jobs', 'action' => 'searchResults', 'day'=>14),array('escape' => false));?></li>
                	</ul>
                	<br/>                   	  	
                </div>
				
				<div class="jobsearch_bytype">
					<div class="tit_areasearch">Theo Loại Hình Công việc</div>
                    <ul class="quick_list">
                    	<?php foreach ($jobTypes as $jobType):?>
                    	<li>» <?php echo $html->link($jobType['JobType']['type'], array('controller' => 'jobs', 'action' => 'searchResults', 'type' => $jobType['JobType']['id']),array('escape' => false)); ?></li>                           						
               			<?php endforeach;?>
               		</ul>
                </div>
                
                <div style="clear: both;"></div>
            </div>
			<!--end xboxcontent-->				
		</div><!-- end by category -->

    </div>     
</div>

<div style="clear: both;"></div>
