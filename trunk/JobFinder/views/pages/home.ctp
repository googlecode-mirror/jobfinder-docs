<!-- begin content -->

	
	
<!--end job_bgpanel_1-->

<script src="/js/homepage_jobkit.js" type="text/javascript"></script>
<script type="text/javascript">
    var _curTab = 1;
    changeTabs(_curTab);	// Keep current tab for user
    $("#MapSearchJob").mouseover( function() { setTimeout("mouseMoveTab(1)",3000); } );
</script>	

	
<div class="job_conrer_panel">			
	<form class="job_formquicksearch" action="http://www.vietnamworks.com/jobseekers/searchresults.php" method="get" name="search">
        <label for="input1"><strong>Tìm Việc Nhanh:</strong></label> 
        <input type="text" onblur="if( this.value == '' ) this.value = 'từ khóa'" 
                onfocus="if(this.value == 'từ khóa') this.value='';" 
                value="từ khóa" name="keyword">
            <select class="comboType02" name="city">
                <option selected="" value="">Tất cả địa điểm</option>
                <option value="29">Hồ Chí Minh</option>
                <option value="24">Hà Nội</option>
               
            </select>
        <input type="submit" class="job_btn1" 
                onclick="if( document.search.keyword.value == 'từ khóa' ) document.search.keyword.value = ''" 
                value="Tìm việc" name="search">
        <input type="hidden" value="true" name="search">	
    </form>			
    <br clear="all"/>
</div>
<!--End search-->

<div class="job_botbannel">
    
    <span class="job_botbannel_left"><!-- --></span>
    <span class="job_botbannel_right"><!-- --></span>
</div>
	
<!-- Begin left col -->	
<div id="job_leftcol">
	<!--begin box corner-->
	<!-- begin Jobs With Featured Employers -->
    <div class="job_conrertop_t">
        <span class="job_conrertopt_left"><!-- --></span>
        <span class="job_conrertopt_right"><!-- --></span>
    </div>
    <h2 class="job_boxtitle">Việc Làm Với Nhà <br/>Tuyển Dụng Hàng Đầu</h2>
    <div class="job_conrer_ct job_fe_ct">
	    <div style="clear: both;" id="ads_TOP_COMPANIES">
	    <div style="position: relative;">
	        <table class="logo_feature" id="adc_TOP_COMPANIES">
	            <tbody><tr>
                    <td> <a target="_blank" href="###">
	                <?php echo $html->image('mekong_88x43.gif', 
	                	  array('alt' => 'Mekong ', 'width' => '88', 'height' => '43', 
                                    'border'=>'0', 'title'=>''))  ?>
	                </a></td>
                    <td> <a target="_blank" href="###">
	                <?php echo $html->image('mekong_88x43.gif', 
	                	  array('alt' => 'Mekong ', 'width' => '88', 'height' => '43', 
                                    'border'=>'0', 'title'=>''))  ?>
	                </a></td>
                    <td> <a target="_blank" href="###">
	                <?php echo $html->image('mekong_88x43.gif', 
	                	  array('alt' => 'Mekong ', 'width' => '88', 'height' => '43', 
                                    'border'=>'0', 'title'=>''))  ?>
	                </a></td>
                    <td> <a target="_blank" href="###">
	                <?php echo $html->image('mekong_88x43.gif', 
	                	  array('alt' => 'Mekong ', 'width' => '88', 'height' => '43', 
                                    'border'=>'0', 'title'=>''))  ?>
	                </a></td>                    
                 </tr> </tbody>
            </table>
         </div></div>
         <a title="Xem tất cả nhà tuyển dụng" class="job_viewall" href="#Link to view all">
            Xem tất cả nhà tuyển dụng
         </a>
    </div>
    <!--Lấy hình logo cho bên trái-->
    <!--endjob_conrer_ct -->
    
    <div class="job_conrer_bot">
        <span class="job_conrer_bot_left"><!-- --></span>
        <span class="job_conrer_bot_right"><!-- --></span>
    </div>
    <!-- end Jobs With Featured Employers -->
    
	
</div>
<!-- end left col -->


<div id="job_rightcol">

<!-- begin top featured -->
    <div class="job_conrertop">
        <span class="job_conrer_top_left"><!-- --></span>
        <span class="job_conrer_top_right"><!-- --></span>
    </div>
    <div align="center" class="job_conrer_ct nopadding">
	   <div id="job_vipLogo">
            <div style="clear: both;" id="ads_TOP_COMPANIES_HORISONTAL">
            <div class="salesLogosContainer" id="adc_TOP_COMPANIES_HORISONTAL">
            <div class="salesLogo">
                <a class="salesLogoLink" href="##Link" target="_blank">
                    <img width="88" height="43" border="0" title="Canon Vietnam Co., Ltd." 
                    alt="Exporting Smiles" src="http://images.vietnamworks.com/banner_logo/canon1_88x43.gif" 
                    class="salesLogoImage">
                    <span class="salesLogoTitle">Canon Vietnam Co., Ltd. </span>
                    <span class="salesLogoDesc">Exporting Smiles</span>
                </a>
            </div>
            <div class="salesLogo"><a class="salesLogoLink" href="http://ads.vietnamworks.com/adclick.php?bannerid=2378&amp;zoneid=89&amp;source=&amp;dest=http%3A%2F%2Fwww.vietnamworks.com%2Ffeatured_employers%2Fadidas2.php" target="_blank"><img width="88" height="43" border="0" title="adidas Sourcing Limited" alt="Impossible is Nothing" src="http://images.vietnamworks.com/banner_logo/adidas-88x43.gif" class="salesLogoImage"><span class="salesLogoTitle">adidas Sourcing Limited </span><span class="salesLogoDesc">Impossible is Nothing</span></a></div><div class="salesLogo"><a class="salesLogoLink" href="http://ads.vietnamworks.com/adclick.php?bannerid=2210&amp;zoneid=89&amp;source=&amp;dest=http%3A%2F%2Fpanasonic.com.vn%2Fweb%2Faboutpanasonic%2Fcareers%2Fcareeropportunities+" target="_blank"><img width="88" height="43" border="0" title="Panasonic Vietnam Group" alt="People Before Products" src="http://images.vietnamworks.com/banner_logo/logo_88x43_panasonic_3.gif" class="salesLogoImage"><span class="salesLogoTitle">Panasonic Vietnam Group </span><span class="salesLogoDesc">People Before Products</span></a></div><div class="salesLogo"><a class="salesLogoLink" href="http://ads.vietnamworks.com/adclick.php?bannerid=1524&amp;zoneid=89&amp;source=&amp;dest=http%3A%2F%2Fwww.navigosgroup.com%2F" target="_blank"><img width="88" height="43" border="0" title="Click for Opportunities" alt="Build the best winning team" src="http://images.vietnamworks.com/banner_logo/navigosgroup_88x43_2.gif" class="salesLogoImage"><span class="salesLogoTitle">Click for Opportunities </span><span class="salesLogoDesc">Build the best winning team</span></a></div></div></div><script type="text/javascript">ajaxAds('TOP_COMPANIES_HORISONTAL','YTo0OntzOjQ6Imhvc3QiO3M6MjA6Ind3dy52aWV0bmFtd29ya3MuY29tIjtzOjQ6InBhZ2UiO3M6MTA6Ii9pbmRleC5waHAiO3M6ODoia2V5d29yZHMiO3M6MzI6Imxhbjo6MSwraW5kOjplLCt1c3I6OjIsK3Byb21vOjplIjtzOjEyOiJwYW5fcmVnaXN0ZXIiO3M6Mjoibm8iO30');</script>		<br class="clear">
            
            <!-- Lấy hình cho 4 viplogo-->
	   </div>
    </div>
<!-- endjob_conrer_ct -->
    <div class="job_conrer_bot">
        <span class="job_conrer_bot_left"><!-- --></span>
        <span class="job_conrer_bot_right"><!-- --></span>
    </div>            			
	<!-- end top featured -->
            
            
	<div id="job_rightcol_left">
    <!-- begin top jobs -->
        <div class="job_conrertop_t">
            <span class="job_conrertopt_left"><!-- --></span>   
            <span class="job_conrertopt_right"><!-- --></span>  
        </div>
            <h2 class="job_boxtitle">Việc Làm Tốt Nhất</h2>
        <div class="job_conrer_ct">
            <ul class="job_topjobslist floatLeft">
                <li><a href="/jobseekers/jobdetail.php?jobid=252032" 
                        target="_blank">General Manager</a><span>Fifth Ocean</span></li>
        		<li><a href="/jobseekers/jobdetail.php?jobid=253609" 
                        target="_blank">Expatriate Construction Foreman</a><span>TH Project Management</span></li>
        		<li><a href="/jobseekers/jobdetail.php?jobid=253606" 
                        target="_blank">Expatriate Construction Manager</a><span>TH Project Management</span></li>
        		<li><a href="/jobseekers/jobdetail.php?jobid=253608" 
                        target="_blank">Expatriate Construction Mgr-M&amp;E</a><span>TH Project Management</span></li>
        		<li class="nobackground"><a href="/jobseekers/jobdetail.php?jobid=254745" 
                        target="_blank">Kỹ Sư Thiết Kế Phần Mềm</a><span>VIETTEL GROUP</span></li>
            </ul>
            <ul class="job_topjobslist floatRight">
        	    <li><a href="/jobseekers/jobdetail.php?jobid=254743" target="_blank">Kỹ Sư Thiết Kế Phần Cứng
                    </a><span>VIETTEL GROUP</span></li>
        	    <li><a href="/jobseekers/jobdetail.php?jobid=254748" 
                    target="_blank">KS TK Kiểu Dáng Công Nghiệp
                    </a><span>VIETTEL GROUP</span></li>
        	    <li><a href="/jobseekers/jobdetail.php?jobid=254739" 
                    target="_blank">Trưởng Phòng Pháp Lý
                    </a><span>VIETTEL GROUP</span></li>
        	    <li><a href="/jobseekers/jobdetail.php?jobid=254735" 
                    target="_blank">Phó Giám Đốc Kinh Doanh
                    </a><span>VIETTEL GROUP</span></li>
        	    <li class="nobackground">
                    <a href="/jobseekers/jobdetail.php?jobid=253927" 
                    target="_blank">Phiên Dịch Tiếng Trung
                    </a><span>Viện nghiên cứu TK Hoa Đông</span></li>
        	</ul>
        <br clear="all"/>
            <div class="job_topjobs_view">  
                <a class="job_viewall" title="View more Top Jobs in Vietnam" 
                    href="moretopjob.php">Nhấp vào để xem thêm việc làm tốt nhất</a>
            </div>
        </div>
        <!-- endjob_conrer_ct -->
        <div class="job_conrer_bot">
            <span class="job_conrer_bot_left"><!-- --></span>
            <span class="job_conrer_bot_right"><!-- --></span>
        </div>
        <!-- end top jobs -->
    </div>
    <!-- end job_rightcol_right -->

</div>
<!-- end right col -->
<br clear="all"/>


<!-- end wrap -->

</div>
<!-- end content -->
<div style="clear: both;">



