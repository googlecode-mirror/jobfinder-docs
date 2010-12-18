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
                    <td width="35%"><?php echo $this->Paginator->sort('CHỨC DANH','job_title',array('style'=>'color: rgb(255, 255, 255)'));?></td>
                    <td width="25%"><?php echo $this->Paginator->sort('CÔNG TY','company_name',array('style'=>'color: rgb(255, 255, 255)'));?></td>
                    <td width="15%"><?php echo $this->Paginator->sort('ĐỊA ĐIỂM','job_locations',array('style'=>'color: rgb(255, 255, 255)'));?></td>
                    <td width="13%" nowrap="nowrap"><?php echo $this->Paginator->sort('NGÀY ĐĂNG TUYỂN','approved',array('style'=>'color: rgb(255, 255, 255)'));?></td>
                    <td width="12%" nowrap="nowrap"><?php echo $this->Paginator->sort('NGÀY HẾT HẠN','expired',array('style'=>'color: rgb(255, 255, 255)'));?></td>
                </tr>
            <!-- end: table heading -->
            
            <!-- begin top level job -->
            <?php foreach ($results as $job):?>                                                                                                                      
                <tr class="row2_list">
                    <td><strong><?php echo $this->Html->link(__($job['Job']['job_title'], true), 
                        array('controller'=> 'jobs','action' => 'view', $job['Job']['id'])); ?></strong></td>
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
                    <td><span class="txt_normal"><?php echo date('d-m-Y',strtotime($job['Job']['approved'])) ;?>
                    	<?php if(strtotime($job['Job']['approved']) >= strtotime('-1 days') && strtotime($job['Job']['approved']) <= time()):?>
                    	<sup class="iconnew">MỚI</sup>
                    	<?php endif;?>
                    	</span></td>
                    <td><span class="txt_normal"><?php echo date('d-m-Y',strtotime($job['Job']['expired'])) ;?></span></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <div style="padding-bottom: 5px;" class="navigation">
            <p>
				<?php echo $this->Paginator->counter(array('format' => __('Trang %page%/%pages%, tổng cộng %count% việc làm', true)));?>	
			</p>
            <!--Hiển thị số trang-->
            <div class="navigationRight">
            	<?php echo $this->Paginator->prev('<< ' . __('Trước', true), array(), null, array('class'=>'disabled'));?>
					 	|<?php echo $this->Paginator->numbers();?>
				 		| <?php echo $this->Paginator->next(__('Kế tiếp', true) . ' >>', array(), null, array('class' => 'disabled'));?>     
            </div>
            <br class="clear"/>
        </div>

        <div class="box_corner">				
        <div class="blue_bg_title"><strong>Tìm việc nhanh</strong></div>
        <div class="white_content">
            <table width="100%" cellspacing="0" cellpadding="0" border="0">
                <tbody>
                	<?php echo $this->Form->create('Job',array('action'=>'search'));?>
                    <tr>
                    <td><?php echo $this->Form->Input('keyword',array('class'=>'text_box','maxlength'=>'80','label'=>false,'div'=>false));?></td>
                    <td>
                        <?php echo $this->Form->Input('jobCategory',array('class'=>'comboType02_industry','label'=>false,'div'=>false,'empty'=>'Bất kỳ ngành nghề'));?>  
                    </td>
                    <td>
                        <?php echo $this->Form->Input('location',array('class'=>'comboType02','label'=>false,'div'=>false,'empty'=>'Tất cả địa điểm'));?>    
                    </td>
        			<?php echo $this->Form->Input('jobType',array('type'=>'hidden'));?>
        			<?php echo $this->Form->Input('jobLevel',array('type'=>'hidden'));?>
                    <td><?php echo $this->Form->Submit('Tìm việc',array('class'=>'btn_cont','div'=>false));?></td>
                    </tr>
                    <tr>
                        <td colspan="4"><div><?php echo $html->link($html->tag('span', 'Tìm Kiếm Nâng Cao'), 
								array('controller' => 'jobs', 'action' => 'advanceSearch'),array('escape' => false));?></div></td>
                    </tr>            
                </tbody>
            </table>
	    </div>
        </div>
        </div>
    </div>
</div>
<br clear="all"/>