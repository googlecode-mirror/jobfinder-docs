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
    <div style="height: 5%;margin-left: 90px " class="line_title ">
    	  <?php echo $html->image('../img/home/btxt_search_result_vn.gif', 
                      array('alt' => '', 'width' => '300', 'height' => '30',
                              'style'=>'float: left;margin-left: 10px'));  ?>
        <br clear="all"/>
    </div>
    
    <div id="search_contentpage">  	   
        <div class="result_search">
        <table width="100%" cellspacing="0" cellpadding="2" border="0" class="list_job">
            <!-- start: table heading -->
            <tbody>
                <tr class="title_list">
                    <td width="3%">&nbsp;</td>
                    <td width="38%"><?php echo $this->Paginator->sort('Chức danh','job_title',array('style'=>'color: rgb(255, 255, 255)'));?></td>
                    <td width="26%"><?php echo $this->Paginator->sort('Công ty','company_name',array('style'=>'color: rgb(255, 255, 255)'));?></td>
                    <td width="15%"><?php echo $this->Paginator->sort('Địa điểm','job_locations',array('style'=>'color: rgb(255, 255, 255)'));?></td>
                    <td width="18%" nowrap="nowrap"><?php echo $this->Paginator->sort('Ngày đăng tuyển','approved',array('style'=>'color: rgb(255, 255, 255)'));?></td>
                </tr>
            <!-- end: table heading -->
            
            <!-- begin top level job -->
            <?php foreach ($results as $job):?>                                                                                                                      
                <tr class="row2_list">
                	<td><input type="checkbox" onclick="checkBoxes('checkinputall','job',30)" value="265056" name="jobs[]" id="job17"/></td>
                    <td><?php echo $this->Html->link(__($job['Job']['job_title'], true), 
                        array('controller'=> 'jobs','action' => 'view', $job['Job']['id'])); ?></td>
                 
                    <td><span class="txt_normal"><?php echo $job['Job']['company_name'];?></span></td>
                    <td><span class="txt_normal">
                    	<?php 
                    		$string = $job['Job']['job_locations'];
                        	$token = strtok($string, "|");                        
                        	while ($token != false)
                        	{
                                echo "$provinces[$token]<br />";
                        		$token = strtok("|");
                    		}?></span></td>
                    <td><span class="txt_normal"><?php echo date('d-m-Y',strtotime($job['Job']['approved'])) ;?></span></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <div style="padding-bottom: 5px;" class="navigation">
            <div class="navigationLeft">
                <ul class="listTypeFloat">
                    <li><a title="Chon Tat Ca" href="javascript:doCheck(true);" class="link">Chọn tất cả</a>&nbsp;|&nbsp;</li>
                    <li><a title="Bo Chon Tat Ca" href="javascript:doCheck(false);" class="link">Bỏ tất cả mục chọn</a></li>
                </ul>
                <br class="clear"/>
                <div class="checked_jobs"><strong>Với việc đã chọn:</strong></div>
                <ul class="listTypeFloat">
                    <li>
                        <input type="button" value="Lưu" name="btnSaveCheckedJobs" onclick="doSaveJobs()">
                    </li>
                </ul>
                <br class="clear"/>
            </div>
            <!--Hiển thị số trang-->
            <div class="navigationRight">
            	<?php echo $this->Paginator->prev('<< ' . __('Trước', true), array(), null, array('class'=>'disabled'));?>
					 	|<?php echo $this->Paginator->numbers();?>
				 		| <?php echo $this->Paginator->next(__('Kế tiếp', true) . ' >>', array(), null, array('class' => 'disabled'));?>     
            </div>
            <br class="clear"/>
        </div>

        <!-- end Job detail -->
        <div class="box_corner">				
        <div class="blue_bg_title"><strong>Tìm việc nhanh</strong></div>
        <div class="white_content">
            <table width="100%" cellspacing="0" cellpadding="0" border="0">
                <tbody>
                	<?php echo $this->Form->create('Job',array('action'=>'searchResults'));?>
                    <tr>
                    <td><?php echo $this->Form->Input('keyword',array('class'=>'text_box','maxlength'=>'80','label'=>false,'div'=>false));?></td>
                    <td>
                        <?php echo $this->Form->Input('jobCategory',array('class'=>'comboType02_industry','label'=>false,'div'=>false,'empty'=>'Bất kỳ ngành nghề'));?>  
                    </td>
                    <td>
                        <?php echo $this->Form->Input('province',array('class'=>'comboType02','label'=>false,'div'=>false,'empty'=>'Tất cả địa điểm'));?>    
                    </td>
                    <td><?php echo $this->Form->Submit('Tìm việc',array('class'=>'btn_cont','div'=>false));?></td>
                    </tr>
                    <tr>
                        <td colspan="4"><div><?php echo $html->link($html->tag('span', 'Tìm Kiếm Nâng Cao'), 
								array('controller' => 'jobs', 'action' => 'advanceSearch'),array('escape' => false));?></div></td>
                    </tr>            
                </tbody>
            </table>
	    </div><!--end xboxcontent-->		
        </div>
        </div>
    </div>
</div>
<br clear="all"/>