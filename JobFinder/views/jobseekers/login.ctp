<div class="wrap_cr">
    <div id="content_cr">
		<div id="right_cr">	
		<?php echo $this->Form->create('Jobseeker', array('action' => 'login','class'=>'form_field')); ?>
                <?php echo $this->Session->flash(); ?>
 			<div class="box_corner">									
				<div class="blue_bg_title"><strong>Thông Tin Đăng Nhập</strong></div>
				<div class="white_content">	
                <table width="100%" border="0">
                    <tbody> <tr> <td>
                        <p>
                            <label><span class="require">*</span> Email đăng nhập:</label> 
                            <?php echo $this->Form->input('email',array('label'=>false,'class'=>'field','div'=>false)); ?>
				        </p>
						<p>
    						<label><span class="require">*</span> Mật khẩu:</label> 
                            <?php echo $this->Form->input('password',array('label'=>false,'class'=>'field','div'=>false)); ?>
						</p>
                        <div class="both"><!-----></div>
                    </td> </tr> </tbody>
                </table>
                </div>
        </div>
            <div style="text-align: right;">
            	 <?php echo $this->Html->link($html->tag('span', 'Đăng ký'), 
                        array('action' => 'register'),array('escape' => false, 'class'=>'button'));?>
            	 <?php echo $this->Form->submit('Đăng nhập',array('class'=>'btn_cont','div'=>false)); ?>                
            </div>
        </div>
    </div>
</div>    
  
                        
