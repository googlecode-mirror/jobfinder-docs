<?php
    /*echo $session->flash('auth');
    echo $form->create('Employer', array('action' => 'login'));
    echo $form->input('email');
    echo $form->input('password');
    echo $form->end('Login');*/
?>

<div class="wrap_cr">
    <div id="content_cr">
		<div id="right_cr">	
		<?php echo $this->Form->create('Employer', array('action' => 'login','class'=>'form_field')); ?>
                <?php echo $this->Session->flash(); ?>
 			<div class="box_corner">				
                <b class="xtop">
                    <b class="xb1 blue_top"><!----></b>
                    <b class="xb2 blue_curve blue_title"><!-- --></b>
                    <b class="xb3 blue_curve blue_title"><!-- --></b>
                </b>					
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
                    <b class="xbottom">
                    <b class="xb3 blue_curve blue_bg_bottom"><!-- --></b>
                    <b class="xb2 blue_curve blue_bg_bottom"><!-- --></b>
                    <b class="xb1 blue_top"><!-- --></b>
                    </b>
        </div>
            <div style="text-align: right;">
            	<?php echo $this->Form->submit('Đăng nhập',array('class'=>'btn_back','div'=>false)); ?>
                
            </div>
        </div>
    </div>
</div>    
  