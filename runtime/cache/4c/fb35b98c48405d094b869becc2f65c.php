<?php
//000000000000s:26564:"<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>商品列表-鱼小样</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
</head>

<body>
<!--------头部开始-------------->
<script src="/public/js/jquery-1.10.2.min.js"></script>
<script src="/public/js/global.js"></script>
<!--最顶部-->
<link rel="stylesheet" href="/template/pc/default/static/css/index.css" type="text/css">
<div class="site-topbar">
    <div class="layout">
        <div class="t1-l">
            <ul class="t1-l-ul">
                <li class="t1font"><a target="_blank" href="/index.php/Home/Article/detail/article_id/22.html">在线客服</a></li>
                <li class="t1img">&nbsp;</li>
                <li class="t1font"><a href="javascript:void();">TPshop</a></li>
                <li class="t1img">&nbsp;</li>
            </ul>
        </div>
        <div class="t1-r">
            <ul class="t1-r-ul islogin" style="display:none;">
                <li class="t1font"> <a href="/index.php/Home/User/index.html" class="logon userinfo"></a></li>
                <li class="t1img"><a href="/index.php/Home/user/logout.html">安全退出</a></li>                    
                <li class="t1img">&nbsp;</li>
                <li class="t1img">&nbsp;</li>                
                <li class="t1font"><a href="/index.php/Home/User/order_list.html">我的订单</a></li>
                <li class="t1img">&nbsp;</li>
                <li class="t1font"><a href="/index.php/Home/Cart/cart.html">购物车</a></li>
                <li class="t1img">&nbsp;</li>
                <li class="t1font"><a href="#">网站地图</a></li>
                <li class="t1img">&nbsp;</li>                
            </ul>
            <ul class="t1-r-ul nologin" style="display:none;">
                <li class="t1font"><a href="/index.php/Home/user/login.html">登录</a></li>
                <li class="t1img">&nbsp;</li>
                <li class="t1font"><a href="/index.php/Home/Cart/cart.html">购物车</a></li>
                <li class="t1img">&nbsp;</li>
                <li class="t1font"><a href="#">网站地图</a></li>
                <li class="t1img">&nbsp;</li> 
            </ul>
        </div>
    </div>
</div>

 <!--------在线客服-------------->
<style>
*{margin:0;padding:0;list-style:none;border:none;}
body{font-size:12px;}
a{color:#666;text-decoration:none;}
/*客服代码部分*/
.qqserver .qqserver-header:after,.qqserver .qqserver-header:before,.qqserver li a:after,.qqserver li a:before{display:table;content:' '}
.qqserver .qqserver-header:after,.qqserver li a:after{clear:both}
.qqserver .qqserver-header,.qqserver li a,.tabs,.user-main,.view-category,.view-category-list>li{*zoom:1}
.qqserver{position:fixed;top:50%;right:0;height:209px;margin-top:-104px}
.qqserver.unfold .qqserver-body{right:0;z-index:100;}
.qqserver .qqserver-body{position:absolute;right:-144px;width:122px;height:183px;padding:12px 10px;-webkit-transition:.3s cubic-bezier(.19,1,.22,1);-o-transition:.3s cubic-bezier(.19,1,.22,1);transition:.3s cubic-bezier(.19,1,.22,1);border:1px solid #e63547;border-radius:4px;background:#f4f7fa}
.qqserver .qqserver_fold{position:absolute;right:0;padding:14px 7px;cursor:pointer;border-top-left-radius:4px;border-bottom-left-radius:4px;background:#e63547}
.qqserver .qqserver-header{padding-bottom:10px;padding-left:6px;border-bottom:1px dashed #d1d4cc}
.qqserver .qqserver-header *{float:left}
.qqserver .qqserver_arrow{margin-top:-1px;margin-left:7px;cursor:pointer}
.qqserver li{margin-top:6px}
.qqserver li a{display:block;padding:6px 12px 4px}
.qqserver li a div{font-size:14px;float:left;margin-right:11px;color:#697466}
.qqserver li a span{font-size:12px;line-height:18px;float:left;text-indent:4px;color:#fff}
.qqserver li a span.qqserver-service-alert{font-weight:400;display:block}
.qqserver li a:hover{text-decoration:none;border-radius:4px;background:#eaebe9}
.qqserver li a:hover div{color:#e63547}
.qqserver .qqserver-footer{margin-top:10px;padding-top:14px;padding-bottom:14px;padding-left:11px;border-top:1px dashed #d1d4cc}
.qqserver .qqserver-footer .text-primary{color:#e63547;font-size:14px;}
.qqserver .qqserver_icon-alert{display:inline-block;margin-right:10px;vertical-align:-3px;*display:inline;*zoom:1;*vertical-align:-1px}
.qqserver-header div{width:90px;height:18px;background-image:url(/template/pc/default/static/images/lanren.png);background-position:-419px -80px}
.qqserver_icon-alert{width:16px;height:14px;background-image:url(/template/pc/default/static/images/lanren.png);background-position:-595px -85px}
.qqserver li a span{width:30px;height:23px;background-image:url(/template/pc/default/static/images/lanren.png);background-position:-265px 0}
.qqserver li a .qqserver-service-alert{width:30px;height:22px;background-image:url(/template/pc/default/static/images/lanren.png);background-position:-342px 0}
.qqserver_fold div{width:26px;height:132px;background-image:url(/template/pc/default/static/images/lanren.png);background-position:0 0}
.qqserver_fold:hover div{width:26px;height:132px;background-image:url(/template/pc/default/static/images/lanren.png);background-position:-27px 0}
.qqserver_arrow{width:18px;height:18px;background-image:url(/template/pc/default/static/images/lanren.png);background-position:-435px 0}
.qqserver_arrow:hover{width:18px;height:18px;background-image:url(/template/pc/default/static/images/lanren.png);background-position:-435px -38px}
</style>
<!-- 代码部分begin -->
<div class="qqserver">
  <div class="qqserver_fold">
    <div></div>
  </div>
  <div class="qqserver-body" style="display: block;">
    <div class="qqserver-header">
      <div></div>
      <span class="qqserver_arrow"></span> </div>
    <ul>
      <li> <a title="点击这里给我发消息" href="tencent://message/?uin=123456789&amp;Site=TPshop商城&amp;Menu=yes" target="_blank">
        <div>客服咨询</div>
        <span>琳琳</span> </a> </li>
      <li> <a title="点击这里给我发消息" href="tencent://message/?uin=123456789&amp;Site=TPshop商城&amp;Menu=yes" target="_blank">
        <div>客服咨询</div>
        <span>云云</span> </a> </li>
      <li> <a title="点击这里给我发消息" href="tencent://message/?uin=123456789&amp;Site=TPshop商城&amp;Menu=yes" target="_blank">
        <div>技术咨询</div>
        <span class="qqserver-service-alert">TPshop</span> </a> </li>
    </ul>
    <div class="qqserver-footer"><span class="qqserver_icon-alert"></span><a class="text-primary" href="javascript:;">大家都在说</a> </div>
  </div>
</div>
<!--<script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script>-->
<script>
$(function(){
	var $qqServer = $('.qqserver');
	var $qqserverFold = $('.qqserver_fold');
	var $qqserverUnfold = $('.qqserver_arrow');
	$qqserverFold.click(function(){
		$qqserverFold.hide();
		$qqServer.addClass('unfold');
	});
	$qqserverUnfold.click(function(){
		$qqServer.removeClass('unfold');
		$qqserverFold.show();
	});
	//窗体宽度小鱼1024像素时不显示客服QQ
	function resizeQQserver(){
		$qqServer[document.documentElement.clientWidth < 1024 ? 'hide':'show']();
	}
	$(window).bind("load resize",function(){
		resizeQQserver();
	});
});
</script>
<!-- 代码部分end -->
 <!--------在线客服-------------->

<!--顶部banner开始-->    
<!--顶部banner结束-->    

<header>
    
    <div class="layout">
    
    <!--logo开始-->
        <div class="logo"><a href="/" title="TPshop"><img src="/public/images/newLogo.png" alt="TPshop"></a></div>
    <!--logo结束-->
    
    <!-- 搜索开始-->
        <div class="searchBar">
            <div class="searchBar-form">
                <form name="sourch_form" id="sourch_form" method="post" action="/index.php/Home/Goods/search.html">
                    <input type="text" class="text" name="q" id="q" value=""  placeholder="  搜索关键字"/>
                    <input type="button" class="button" value="搜索" onclick="if($.trim($('#q').val()) != '') $('#sourch_form').submit();"/>
                </form>
            </div>
            <div class="searchBar-hot">
                <b>热门搜索</b>
               	        			<a target="_blank" href="/index.php/Home/Goods/search/q/%E6%89%8B%E6%9C%BA.html" class="ht">手机</a>
        		        			<a target="_blank" href="/index.php/Home/Goods/search/q/%E5%B0%8F%E7%B1%B3.html" >小米</a>
        		        			<a target="_blank" href="/index.php/Home/Goods/search/q/iphone.html" >iphone</a>
        		        			<a target="_blank" href="/index.php/Home/Goods/search/q/%E4%B8%89%E6%98%9F.html" >三星</a>
        		        			<a target="_blank" href="/index.php/Home/Goods/search/q/%E5%8D%8E%E4%B8%BA.html" >华为</a>
        		        			<a target="_blank" href="/index.php/Home/Goods/search/q/%E5%86%B0%E7%AE%B1.html" >冰箱</a>
        		            </div>
        </div>
        <!-- 搜索结束-->
        
        <div class="ri-mall">
            <div class="my-mall">
            <!---我的商城-开始 -->
                <div class="mall">
                    <div class="le"><a href="/index.php/Home/User.html" >我的商城</a></div> 
                </div>
                <!---我的商城-结束 -->
            </div>
            <div class="my-mall" id="header_cart_list">
                <!---购物车-开始 -->
                <div class="micart">
                    <div class="le les">
                    	<a href="/index.php/Home/Cart/cart.html" >我的购物车
                            <span class="shopping-num"><em id="cart_quantity"></em><b></b></span>
                        </a>                       
                    </div>
                    
                    <div class="ri ris" style="display:">
                                                   <div class="micart-about">
                                <span class="micart-xg">您的购物车是空的，赶紧选购吧！</span>
                            </div>
                                                <div class="commod">
                        <ul>
                           							
                        </ul>
                        </div>
                        <div class="settle">
                            <p>共<em></em>件商品，金额合计<b>¥&nbsp;</b></p>
                            <a class="js-button" href="/index.php/Home/Cart/cart.html">去结算</a>
                        </div>
                    </div>
                </div>
                <!---购物车-结束 -->
                
            </div>
        </div>
        <div class="qr-code">
            <img src="/template/pc/default/static/images/qrcode_vmall_app01.png" alt="二维码" />
            <p>扫一扫</p>
        </div>
    </div>
</header>
   <!-- 导航-开始-->
   
   
   	<div class="navigation">
    	<div class="layout">
        	<!--全部商品-开始-->
        	<div class="allgoods">
            	<div class="goods_num"><h2>全部商品</h2><i class="trinagle"></i></div>
            	<div class="list"  >
                   <ul class="list_ul"> 
                                              
                                <li class="list-li">
                                    <div class="list_a">
                                        <h3><a href="/index.php/Home/Goods/goodsList/id/845.html"><span>商品套餐</span></a></h3>
                                        <p> <!--$v[id][name] 数组中括号 里面的 id name 不能有 引号 sql 参数 必须双引号-->
	                                                                               </p>
                                    </div>
                                    <div class="list_b">
                                        <div class="list_bigfl">
	                                                                                                                           
                                        </div>
                                        <div class="subitems">                                        
                                                                                   </div>
                                    </div>
                                    <i class="list_img"></i>
                                </li>
                            	
                	</ul>
                </div>
            </div>
            <!--全部商品-结束-->
            
            <div class="ongoods">
            	<ul class="navlist">
            		<li class="homepage"><a href="/"><span>首页</span></a></li>
                                			<li class="page"><a href="/index.php?m=Home&amp;c=Goods&amp;a=goodsList&amp;id=123" target="_blank" <span>手机城</span></a></li>
					            			<li class="page"><a href="/index.php?m=Home&amp;c=Goods&amp;a=goodsList&amp;id=51" target="_blank" <span>珠宝</span></a></li>
					            			<li class="page"><a href="/index.php?m=Home&amp;c=Goods&amp;a=goodsList&amp;id=20" target="_blank" <span>家电城</span></a></li>
					            			<li class="page"><a href="/index.php?m=Home&amp;c=Index&amp;a=promoteList" <span>促销商品</span></a></li>
					            			<li class="page"><a href="/index.php?m=Home&amp;c=Goods&amp;a=goodsList&amp;id=45" target="_blank" <span>化妆品</span></a></li>
					            			<li class="page"><a href="/index.php/Home/Goods/goodsList/id/1.html" target="_blank" <span>数码城</span></a></li>
					            			<li class="page"><a href="/index.php?m=Home&amp;c=Activity&amp;a=group_list" <span>团购</span></a></li>
					            			<li class="page"><a href="/index.php?m=Home&amp;c=Goods&amp;a=integralMall" <span>积分商城</span></a></li>
					 
            	</ul>
            </div>
        </div>
    </div>
   <!-- 导航-结束-->
<script>
$(function(){
    var active_li = '';
    if(active_li){
        $('li').remove('curr-res');
        $('#'+active_li).addClass('curr-res');
    }
   	
    var uname= getCookie('uname');
    if(uname == ''){
    	$('.islogin').remove();
    	$('.nologin').show();
    }else{
    	$('.nologin').remove();
    	$('.islogin').show();
    	$('.userinfo').html(decodeURIComponent(uname));
    }
    get_cart_num();
})



function get_cart_num(){
	  var cart_cn = getCookie('cn');
	  if(cart_cn == ''){
		$.ajax({
			type : "GET",
			url:"/index.php?m=Home&c=Cart&a=header_cart_list",//+tab,
			success: function(data){								 
				cart_cn = getCookie('cn');		
				$('#cart_quantity').html(cart_cn);
			}
		});	
	  }
	  $('#cart_quantity').html(cart_cn);
}
/**
* 鼠标移动端到头部购物车上面 就ajax 加载
*/
// 鼠标是否移动到了上方
var header_cart_list_over = 0; 
$("#header_cart_list > .micart > .les").hover(function(){	 
       if(header_cart_list_over == 1) 
			return false;	
        header_cart_list_over = 1; 
		$.ajax({
			type : "GET",
			url:"/index.php?m=Home&c=Cart&a=header_cart_list",//+tab,
			success: function(data){								 
			 	$("#header_cart_list > .micart > .ris").html(data);	
			 	get_cart_num();
			}
		});			
}).mouseout(function(){
	
	 (typeof(t) == "undefined") || clearTimeout(t); 	 
	 t = setTimeout(function () { 
			header_cart_list_over = 0; /// 标识鼠标已经离开
		}, 1000);		
});
</script>
<!--------头部结束--------------> 
<link rel="stylesheet" href="/template/pc/default/static/css/page.css" type="text/css">
<link rel="stylesheet" href="/template/pc/default/static/css/category.css" type="text/css">
<link rel="stylesheet" href="/template/pc/default/static/css/common.min.css" type="text/css">

<script type="text/javascript" src="/template/pc/default/static/js/jquery.jqzoom.js"></script> 
<script src="/public/js/pc_common.js"></script>
<script src="/public/js/layer/layer.js"></script><!--弹窗js 参考文档 http://layer.layui.com/-->
	 
<!--------中间内容-------------->
<div id="warpper" class="clearfix">
  <div id="path-new" class="clearfix colaaa text13">
    <div class="item fl">
      <div class="fl">
        <span class="u-nav-title">
                      <a href="/index.php/Home/Goods/goodsList.html"></a>
                    </span>
      </div>
      <div class="fl" id="m-selected-cery">
        <div class="u-left-icon"><i class="z-arrow"></i></div>
        
        <!--如果当前分类是三级分类 则二级也要显示-->
                <!--当前分类-->
        
      </div>
    </div>
    <div class="u-left-icon"><i class="z-arrow"></i></div>
    
     
  </div>
  <div class="cata_cart_left">
    <div class="m-cart">
      <p class="title">
                  <a href="/index.php/Home/Goods/goodsList.html"></a>
                </p>
      <!--search/?q=-->
      <div id="cata_list"> 
        <!-- 分类树 -->
        <ul class="menu_3">
                </ul>
      <!-- 分类树 --> 
    </div>
  </div>
  <!-- 推荐热卖-->
  <div class="m-rehotbox mt10" style='display:block;'>
    <h2 class="rehottit">推荐热卖</h2>
    <div class="rehotcon" id="rehotcon">
     
     
       
    </div>
  </div>
</div>
<div class="cata_shop_right" id="tracker_category"> 
  <!-- 館頁屬性 -->
  <div class="attribute_content">
    <div class="attrs"> 
      <!--帅选品牌-->
            <!--帅选规格-->
            <!--帅选属性-->
            
      <!--价格帅选-->
           <!--价格帅选 end-->
      <a  class="f-out-more" href="javascript:;">更多选项<i></i></a> </div>
  </div>
  <!-- 館頁屬性 --> 
  
  <!-- 商品列表 -->
  <div class="searchbox">
    <div class="list clearfix">
      <ul class="left text12" id="order_ul">
        <!--        <li><a class="col7ac " href1="&sort=recommand&asc=0" style="cursor:pointer;">综合</a></li>-->
        <li> <a class="col7ac  main" href="/index.php/Home/Goods/goodsList/id/314" style="cursor:pointer;"> 默认 </a> </li>
        <li> <a class="col7ac  " href="/index.php/Home/Goods/goodsList/id/314/sort/sales_sum" style="cursor:pointer;"> 销量 </a> </li>
                
                	<li><a class="col7ac  " href="/index.php/Home/Goods/goodsList/id/314/sort/shop_price/sort_asc/desc" style="cursor:pointer;">价格<span class="icon_s "></span></a></li>
            
                
        <li><a class="col7ac  " href="/index.php/Home/Goods/goodsList/id/314/sort/comment_count" style="cursor:pointer;">评论</a></li>
        <li><a class="col7ac  "  href="/index.php/Home/Goods/goodsList/id/314/sort/is_new" style="cursor:pointer;">新品</a></li>
      </ul>
      <!-- Page -->
      <div class="right text12" id="pagenavi">
        <div class="all-number">
          <span>共0个商品</span>
        </div>
        <p class="pageArea" data-countPage="1"> 
          <!--<a class="bg_img1"></a>-->
          <span class="colf22e01 fontT">1</span>
          /
          <span class="page_count fontT">1</span>
          <!--<a href="" class="bg_img2"></a> </p>-->
      </div>
      <!-- Page End--> 
    </div>
    <!-- list --> 
  </div>
  <!-- searchbox -->
  
  <ul id="cata_choose_product" class="cart_containt clearfix listContainer">
      </ul>
  
  <!-- Page -->
  <div class="fn-page-css-1 pagintion fix" style="display: block;">
  	<div class="pagenavi text12"></div>
  </div>
  <!-- 商品列表 --> 
</div>
</div>
<!--------中间内容end-------------->   
 

<!--------footer-开始-------------->
<div class="footer">
    <div class="layout quality layer">
        <ul class="footer_quality">
            <li><i></i>品质保证</li>
            <li  class="f2"><i></i>7天退换 15天换货</li>
            <li  class="f3"><i></i>100元起免运费</li>
            <li  class="f4"><i></i>448家维修网点 全国联保</li>
        </ul>
    </div>
    <div class="helpful layout">
         </div>
     <div class="keep-on-record">
        <p>
        Copyright © 2016-2025 鱼小样  版权所有 保留一切权利 备案号:粤12345678号        
        <!--您好,请您给TPshop留个友情链接-->
        &nbsp;&nbsp;<a href="http://www.tp-shop.cn/">TPshop开源商城</a>
        <!--您好,请您给TPshop留个友情链接-->
        </p>
     </div>
 </div>
 

<!--------footer-结束-------------->
<script type="text/javascript">

//############   分类导航折叠        ############
$('span[name="submenuicon"]').each(function(){
	 $(this).click(function(){
		 if($(this).hasClass('menuplus')){
			 $(this).removeClass('menuplus').addClass('menuminus');
			 $(this).siblings('.second_div').find('ul').show();
		 }else{
			 $(this).removeClass('menuminus').addClass('menuplus');
			 $(this).siblings('.second_div').find('ul').hide();
		 }
	 });
})

//############   更多类别属性筛选       ###########
$('.f-out-more').click(function(){
  $('.m-tr').each(function(i,o){
    if(i >  7){
      var attrdisplay = $(o).css('display');
      if(attrdisplay == 'none'){
        $(o).css('display','block');
      }
      if(attrdisplay == 'block'){
        $(o).css('display','none');
      }
    }
  });
  if($(this).hasClass('checked')){
    $(this).removeClass('checked tex-center').html('收起<i class="checked"></i>');
  }else{
    $(this).addClass('checked tex-center').html('更多选项');
  }
})
$('.f-out-more').trigger('click').html('更多选项'); //  默认点击一下

//############   更多条件选择        ###########
$('.f-more').click(function(){
  if($(this).hasClass('checked')){
    $(this).parent().siblings('ul').removeClass('z-show-more');
    $(this).removeClass('checked').html('更多<i></i>');
  }else{
    $(this).parent().siblings('ul').addClass('z-show-more');
    $(this).addClass('checked').html('收起<i class="checked"></i>');
  }
})

var cancelBtn = null;
//############   多选框        ###########
$('.f-check').click(function(){
	var _this = this;
	var st = 0;
	//关闭前一个多选框
	if(cancelBtn != null){
		$(cancelBtn).parent().siblings('ul').removeClass('z-show-more');  //移除UL的calss:z-show-more
		$(cancelBtn).parent().siblings('ul').find('li >a').each(function(i,o){  //遍历所有a便签
			$(o).removeClass('select selected');    //移除class
			$(o).attr('href',$(o).data('href'));    //添加href
			$(o).children('i').removeClass('selected').css('display','');  //移除a标签前面的选框
			$(o).unbind('click');
		});		
		$(cancelBtn).parent().siblings('.f-ext').show().children('a').removeClass('checked'); //显示多选按钮并移除a标签样式
		$(cancelBtn).parent().hide();  //隐藏当前取消按钮
		$(cancelBtn).siblings().removeClass('u-confirm01');
	}
	cancelBtn = $(_this).parent().siblings('div').find('.u-cancel'); //取消按钮
	
	//打开多选框
	$(_this).addClass('checked');
	$(_this).siblings().addClass('checked');
	$(_this).parent().siblings('.g-btns').show();
	$(_this).parent().siblings('ul').addClass('z-show-more');
	$(_this).parent().siblings('ul').find('li>a').each(function(i,o){
		$(o).addClass('select');
		$(o).children('i').css('display','inline');
		$(o).attr('href','javascript:;');
		$(o).bind('click',function(){
			if($(o).hasClass('selected')){
				$(o).removeClass('selected');
				$(o).children('i').removeClass('selected');
				st--;
			}else{
				$(o).addClass('selected');
				$(o).children('i').addClass('selected');
				$(_this).parent().siblings('.g-btns').children('.u-confirm').addClass('u-confirm01');
				st++;
			}
			//如果没有选中项,确定按钮点不了
			if(st==0){
				$(_this).parent().siblings('.g-btns').children('.u-confirm').removeClass('u-confirm01');
			}
		});
	});
	$(_this).parent().hide();
})


//############   取消多选        ###########
$('.g-btns .u-cancel').each(function(){
	$(this).click(function(){
		$(this).parent().siblings('ul').removeClass('z-show-more');
		$(this).parent().siblings('ul').find('li >a').each(function(i,o){
			$(o).removeClass('select selected');
			$(o).attr('href',$(o).data('href'));
			$(o).children('i').removeClass('selected').css('display','');
			$(o).unbind('click');
		});
		$(this).parent().siblings('.f-ext').show().children('a').removeClass('checked');
		$(this).parent().hide();
		$(this).siblings().removeClass('u-confirm01');
	});
})

//############   产品图片切换        ###########

$('.list-scroll-warp').each(function(){
	var _this = this;
		
	$(_this).children().children().each(function(i,o){
		$(o).mouseover(function(){
			$(o).siblings().removeClass('cur');
			$(o).addClass('cur');			
			var img_src = $(o).children().children().attr('data-img');
			$(_this).parent().siblings('.listPic').find('a').children().attr('src',img_src);
		})
	})
})

//############   点击多选确定按钮      ############
// t 为类型  是品牌 还是 规格 还是 属性
// btn 是点击的确定按钮用于找位置
 get_parment = {"id":"314"};	
function submitMoreFilter(t,btn)
{
	// 没有被勾选的时候
	if(!$(btn).hasClass("u-confirm01"))
		return false;
		
	// 获取现有的get参数		
	var key = ''; // 请求的 参数名称
	var val = new Array(); // 请求的参数值
	$(btn).parent().siblings(".f-list").find("li > a.selected").each(function(){
		   key = $(this).data('key');
		   val.push($(this).data('val'));
	});
	//parment = key+'_'+val.join('_');
    
	// 品牌
	if(t == 'brand')
	{
		get_parment.brand_id = val.join('_');
	}
	// 规格
	if(t == 'spec')
	{
		if(get_parment.hasOwnProperty('spec'))		
		{		
			get_parment.spec += '@'+key+'_'+val.join('_');
		}		
		else	
		{		
			get_parment.spec = key+'_'+val.join('_');
		}		
	}
	// 属性
	if(t == 'attr')
	{
		if(get_parment.hasOwnProperty('attr'))		
		{		
			get_parment.attr += '@'+key+'_'+val.join('_');
		}		
		else	
		{		
			get_parment.attr = key+'_'+val.join('_');
		}		
	}
   // 组装请求的url	
  var url = '';
  for ( var k in get_parment )
  { 
		url += "&"+k+'='+get_parment[k];
  } 

	//console.log('get_parment',get_parment);	
	location.href ="/index.php?m=Home&c=Goods&a=goodsList"+url;
}

</script>
</body>
</html>";
?>