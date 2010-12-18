<div id="body_content">
    <!-- begin wrap -->
    <div class="wrap_cr_emp">
    <!-- begin content -->
        <div id="content_cr">
        <div id="right_cr">
        	<h2>TÌM KIẾM HỒ SƠ</h2>
        	<?php echo $this->Form->create('Resume', array('class'=>'form_field')); ?>    
 			    <div class="box_corner">				
					<div class="dblue_bg_title">
					  <strong>Tìm kiếm</strong>
					</div>
					<div style="text-align: center;" class="dwhite_content">
                        <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
					    <tbody> <tr> <td>
                       	<p>
							<label>Từ khóa:</label>
							<?php echo $this->Form->input('keyword',array('label'=>false,'class'=>'field','div'=>false,'error'=>array('wrap'=>'span'))); ?>
						</p>
                        <p>
                          <label> Ngành nghề mong muốn:</label>
						  <?php echo $this->Form->input('category', array('label'=>false,'class'=>'field','div'=>false,'empty'=>'Bất kỳ','error'=>array('wrap'=>'span')));?>
						</p>
						<p>
                          <label> Nơi làm việc mong muốn:</label>
						  <?php echo $this->Form->input('location', array('label'=>false,'class'=>'field','div'=>false,'empty'=>'Tất cả','error'=>array('wrap'=>'span')));?>
						</p>                                            
						<p>
                          <label> Cấp bậc:</label>
						  <?php echo $this->Form->input('job_level', array('label'=>false,'class'=>'field','div'=>false,'empty'=>'Bất kỳ','error'=>array('wrap'=>'span')));?>
						</p>
						<p>
                          <label> Số năm kinh nghiệm:</label>
						  <?php echo $this->Form->input('years_exp', array('label'=>false,'class'=>'field','div'=>false,'error'=>array('wrap'=>'span')));?>
						</p>
						<p style="margin-left:170px" >
				  			<?php echo $this->Form->submit('Tìm kiếm',array('class'=>'btn_c_emp','div'=>false)); ?>
						</p>
                        </td> </tr> </tbody>
                        </table>
				    </div>			
			     </div>
			     <?php $this->Form->end(); ?>
			<br/>
			<div class="box_corner">				
					<div class="dblue_bg_title">
					  <strong>Kết quả tìm kiếm</strong>
					</div>
					<div style="text-align: center;padding:5px" class="dwhite_content">
                        <div class="result_search">
        <table width="93%" cellspacing="0" cellpadding="2" border="0" class="list_job">
            <!-- start: table heading -->
            <tbody>
                <tr class="title_list"  style="background:#006699">
                    <td width="25%"><?php echo $this->Paginator->sort('TÊN ỨNG VIÊN','jobseeker.last_name',array('style'=>'color: rgb(255, 255, 255)'));?></td>
                    <td width="25%"><?php echo $this->Paginator->sort('TIÊU ĐỀ HỒ SƠ','resume_title',array('style'=>'color: rgb(255, 255, 255)'));?></td>
                    <td width="15%"><?php echo $this->Paginator->sort('KINH NGHIỆM','years_exp',array('style'=>'color: rgb(255, 255, 255)'));?></td>
                    <td width="20%">NƠI LÀM VIỆC</td>
                    <td width="15%"><?php echo $this->Paginator->sort('NGÀY CẬP NHẬT','approved',array('style'=>'color: rgb(255, 255, 255)'));?></td>
                </tr>
            <!-- end: table heading -->
            
            <?php  foreach ($results as $resume):?>                                                                                                                      
                <tr class="row2_list">
                    <td><strong><?php echo $this->Html->link($resume['Jobseeker']['last_name'].' '.$resume['Jobseeker']['first_name'], array('controller'=>'employers','action' => 'viewResume', $resume['Resume']['id']));?> </strong></td>
                    <td><strong><?php echo $resume['Resume']['resume_title'];?></strong></td>
                    <td><span class="txt_normal"><?php echo $resume['Resume']['years_exp'].' năm';?></span></td>
                    <td><span class="txt_normal"><?php echo $resume['Resume']['years_exp'].' năm';?></span></td>
                    <td><span class="txt_normal"><?php echo date('d-m-Y',strtotime($resume['Resume']['approved'])) ;?></span></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        

        </div>
        <div style="padding-bottom: 5px; padding-top: 5px; text-align: left;">
          
				<?php echo $this->Paginator->counter(array('format' => __('Trang %page%/%pages%, tổng cộng %count% hồ sơ', true)));?>	
			
            <!--Hiển thị số trang-->
            <div class="navigationRight">
            	<?php echo $this->Paginator->prev('<< ' . __('Trước', true), array(), null, array('class'=>'disabled'));?>
					 	|<?php echo $this->Paginator->numbers();?>
				 		| <?php echo $this->Paginator->next(__('Kế tiếp', true) . ' >>', array(), null, array('class' => 'disabled'));?>     
            </div>
            <br class="clear"/>
        </div>
		</div>			
	</div>		
   </div>
   </div>
   <br clear="all" />
   <!-- end content -->
</div>
<!-- end wrap -->

</div>