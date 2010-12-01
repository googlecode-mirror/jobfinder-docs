<div class="wrap_cr">
    <img width="300" height="30" alt="btxt_edit_resume_vn"
        style="margin-left: 115px;" 
        src="../img/home/btxt_edit_resume_vn.gif" />
    <!-- begin content -->
    <div id="content_cr">
    <?php echo $this->Form->create('Resume',array('action'=>'editResume'));?>
    <?php echo $this->Form->input('id'); ?>
        <!-- begin right col -->
        <div id="right_cr">
            <!-- begin Resume Information -->
            <div class="box_corner">
                <div class="blue_bg_title"><strong>Thông Tin Hồ Sơ</strong></div>
                <div class="white_content">
                    <table width="100%" cellspacing="0" cellpadding="0" border="0">
                        <tbody>
                            <tr style="display: none;" id="err_resumetitle">
                                <td width="18%" height="27"></td>
                            </tr>
                            <tr valign="top">
                                <td width="18%" height="27">
                                    <span class="require">*</span> <strong>Tiêu Đề Hồ Sơ:</strong>
                                </td>
                                <td width="82%">
                                	<?php echo $this->Form->input('id'); ?>
                                    <?php echo $this->Form->input('resume_title', array('label'=>false,
                                            'type'=>'text','style'=>'width: 325px', 'div'=>false,'error' => array('wrap' => 'span'))); ?>
                                </td>
                            </tr>
                            <tr>
                                <td width="18%" height="27">
                                    <span class="require">*</span> Tình trạng hồ sơ:
                                </td>
                                <td width="82%">
                                    <?php echo $this->Form->radio('privacy_status',
                                    		array(1 => 'Cho phép tìm kiếm', 0 =>'Hồ sơ ẩn'),
                                            array('legend'=>false,'error'=>array('wrap'=>'span'))); ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="both"></div>
                </div>
                <!--end xboxcontent-->
            </div>
           
            <div style="text-align: right;">    
            	<?php echo $this->Html->link(__('Trở lại', true), array('action' => 'preview', $this->Session->read('resumeID') ));?>            
                <?php echo $this->Form->submit('Lưu',array('class'=>'btn_cont','name'=>'btn_cont','div'=>false));?>                
            </div>
        </div>
        <!-- end right col -->

    </div>
    <!-- end content -->
</div>