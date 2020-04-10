<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:39:"./template/mobile/new2/index\index.html";i:1584253449;s:41:"./template/mobile/new2/public\footer.html";i:1495107364;s:45:"./template/mobile/new2/public\footer_nav.html";i:1584112258;s:43:"./template/mobile/new2/public\wx_share.html";i:1584602899;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>首页-<?php echo $tpshop_config['shop_info_store_title']; ?></title>
    <link rel="stylesheet" href="__STATIC__/css/style.css">
    <link rel="stylesheet" type="text/css" href="__STATIC__/css/iconfont.css"/>
    <script src="__STATIC__/js/jquery-3.1.1.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="__STATIC__/js/mobile-util.js" type="text/javascript" charset="utf-8"></script>
    <script src="__STATIC__/js/layer.js"  type="text/javascript" ></script>
    <script src="__STATIC__/js/swipeSlide.min.js" type="text/javascript" charset="utf-8"></script>
    <style type="text/css">
        .layermend{
            top: .1rem;
        }
		header {
			opacity: 1;
			height: 9rem;
			z-index: 0;
			background: url(http://file03.16sucai.com/2016/10/1100/16sucai_p20161002084_246.JPG);
			position: absolute;
		}
		header .login {
			margin: 0.4rem .21333rem 0;
			float: right;
			font-size: .5rem;
		}
		header .content {
			text-align: center;
			padding-top: .128rem;
		}
		.headerbg{
		    background: linear-gradient(rgba(189, 185, 185, 0.8),rgba(202, 202, 202, 0.8));
		}
		.banner-header{
			padding-top: 2rem;
		}
		
		@media screen and (min-width: 1300px)
		header {
			height: .93867rem;
		}
		.mslide li img {
			position: absolute;
			left: 1rem;
			top: 0;
			width: 14rem;
			height: 7rem;
			border: none;
			border-radius: 2%;
		}
		.dh nav {
			margin-top: 1rem;
		}
		.mrsx {
			z-index: 999;
			height: 10rem;
			background: #000;
			width: 95%;
			margin: 0 auto;
		}
        .advertisement{
            border: none;
        }
		.advertisement .le .td img {
			width: 5rem;
		}
		.newshop .re img {
			height: 5rem;
		}
		.advertisement .le {
			width: unset;
			padding: 0 0.5rem;
		}
    </style>
</head>
<body>
    <!--顶部搜索栏-s-->
    <header>
        <div class="content">
            <div class="ds-in-bl logo">
                <a href=""><img src="__STATIC__/images/logo.png" alt="LOGO" style="height:1.487516rem!important;margin-top: 0.1rem;margin-left: 1.5rem;width: 2.2rem;"></a>
            </div>
            <div class="ds-in-bl login">
                <span>
                <?php if($user_id > 0): ?>
                    <a href="<?php echo U('Mobile/User/index'); ?>"> <img height="24px" src="__STATIC__/images/my.png"></a>
                <?php else: ?>
                    <a href="<?php echo U('Mobile/User/login'); ?>"> 登录</a>
                <?php endif; ?>
            </span>
            </div>
        </div>
    </header>
    <!--顶部搜索栏-e-->

    <!--顶部滚动广告栏-s-->
	<div class="banner-header ban1">
        <div class="mslide" id="slideTpshop">
            <ul>
                <?php $pid =2;$ad_position = M("ad_position")->cache(true,TPSHOP_CACHE_TIME)->column("position_id,position_name,ad_width,ad_height","position_id");$result = M("ad")->where("pid=$pid  and enabled = 1 and start_time < 1586494800 and end_time > 1586494800 ")->order("orderby desc")->cache(true,TPSHOP_CACHE_TIME)->limit("5")->select();
if(!in_array($pid,array_keys($ad_position)) && $pid)
{
  M("ad_position")->insert(array(
         "position_id"=>$pid,
         "position_name"=>CONTROLLER_NAME."页面自动增加广告位 $pid ",
         "is_open"=>1,
         "position_desc"=>CONTROLLER_NAME."页面",
  ));
  delFile(RUNTIME_PATH); // 删除缓存  
}


$c = 5- count($result); //  如果要求数量 和实际数量不一样 并且编辑模式
if($c > 0 && I("get.edit_ad"))
{
    for($i = 0; $i < $c; $i++) // 还没有添加广告的时候
    {
      $result[] = array(
          "ad_code" => "/public/images/not_adv.jpg",
          "ad_link" => "/index.php?m=Admin&c=Ad&a=ad&pid=$pid",
          "title"   =>"暂无广告图片",
          "not_adv" => 1,
          "target" => 0,
      );  
    }
}
foreach($result as $key=>$v):       
    
    $v[position] = $ad_position[$v[pid]]; 
    if(I("get.edit_ad") && $v[not_adv] == 0 )
    {
        $v[style] = "filter:alpha(opacity=50); -moz-opacity:0.5; -khtml-opacity: 0.5; opacity: 0.5"; // 广告半透明的样式
        $v[ad_link] = "/index.php?m=Admin&c=Ad&a=ad&act=edit&ad_id=$v[ad_id]";        
        $v[title] = $ad_position[$v[pid]][position_name]."===".$v[ad_name];
        $v[target] = 0;
    }
    ?>
                    <li>
                        <a href="<?php echo $v['ad_link']; ?>">
                            <img src="<?php echo $v[ad_code]; ?>" title="<?php echo $v[title]; ?>" style="<?php echo $v[style]; ?>" alt="">
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <!--顶部滚动广告栏-e-->
    <!--菜单-start-->
	<div class="floor dh">
        <nav>
            <a href="<?php echo U('Goods/categoryList'); ?>">
                <span>
                    <img src="__STATIC__/images/icon_03.png" alt="全部套餐" /><br />
                    <span>全部套餐</span>
                </span>
            </a>
            <a href="<?php echo U('User/order_list'); ?>">
                <span>
                    <img src="__STATIC__/images/icon_16.png" alt="我的订单" /><br />
                    <span>我的订单</span>
                </span>
            </a>
            <a href="<?php echo U('Cart/cart'); ?>">
                <span>
                    <img src="__STATIC__/images/icon_17.png" alt="购物车" /><br />
                    <span>购物车</span>
                </span>
            </a>
            <a href="<?php echo U('User/index'); ?>">
                <span>
                    <img src="__STATIC__/images/icon_19.png" alt="个人中心" /><br />
                    <span>个人中心</span>
                </span>
            </a>
        </nav>
    </div>
    <!--菜单-end-->

    <!--广告位-start-->
	<div class="banner ma-to-20">
        <?php $pid =400;$ad_position = M("ad_position")->cache(true,TPSHOP_CACHE_TIME)->column("position_id,position_name,ad_width,ad_height","position_id");$result = M("ad")->where("pid=$pid  and enabled = 1 and start_time < 1586494800 and end_time > 1586494800 ")->order("orderby desc")->cache(true,TPSHOP_CACHE_TIME)->limit("1")->select();
if(!in_array($pid,array_keys($ad_position)) && $pid)
{
  M("ad_position")->insert(array(
         "position_id"=>$pid,
         "position_name"=>CONTROLLER_NAME."页面自动增加广告位 $pid ",
         "is_open"=>1,
         "position_desc"=>CONTROLLER_NAME."页面",
  ));
  delFile(RUNTIME_PATH); // 删除缓存  
}


$c = 1- count($result); //  如果要求数量 和实际数量不一样 并且编辑模式
if($c > 0 && I("get.edit_ad"))
{
    for($i = 0; $i < $c; $i++) // 还没有添加广告的时候
    {
      $result[] = array(
          "ad_code" => "/public/images/not_adv.jpg",
          "ad_link" => "/index.php?m=Admin&c=Ad&a=ad&pid=$pid",
          "title"   =>"暂无广告图片",
          "not_adv" => 1,
          "target" => 0,
      );  
    }
}
foreach($result as $key=>$v):       
    
    $v[position] = $ad_position[$v[pid]]; 
    if(I("get.edit_ad") && $v[not_adv] == 0 )
    {
        $v[style] = "filter:alpha(opacity=50); -moz-opacity:0.5; -khtml-opacity: 0.5; opacity: 0.5"; // 广告半透明的样式
        $v[ad_link] = "/index.php?m=Admin&c=Ad&a=ad&act=edit&ad_id=$v[ad_id]";        
        $v[title] = $ad_position[$v[pid]][position_name]."===".$v[ad_name];
        $v[target] = 0;
    }
    ?>
            <a href="<?php echo $v['ad_link']; ?>">
            <img src="<?php echo $v[ad_code]; ?>" title="<?php echo $v[title]; ?>" style="<?php echo $v[style]; ?>"/>
            </a>
        <?php endforeach; ?>
    </div>
    <div class="floor advertisement">
        <div class="content">
            <div class="le lefhe fl">
                <?php $pid =301;$ad_position = M("ad_position")->cache(true,TPSHOP_CACHE_TIME)->column("position_id,position_name,ad_width,ad_height","position_id");$result = M("ad")->where("pid=$pid  and enabled = 1 and start_time < 1586494800 and end_time > 1586494800 ")->order("orderby desc")->cache(true,TPSHOP_CACHE_TIME)->limit("1")->select();
if(!in_array($pid,array_keys($ad_position)) && $pid)
{
  M("ad_position")->insert(array(
         "position_id"=>$pid,
         "position_name"=>CONTROLLER_NAME."页面自动增加广告位 $pid ",
         "is_open"=>1,
         "position_desc"=>CONTROLLER_NAME."页面",
  ));
  delFile(RUNTIME_PATH); // 删除缓存  
}


$c = 1- count($result); //  如果要求数量 和实际数量不一样 并且编辑模式
if($c > 0 && I("get.edit_ad"))
{
    for($i = 0; $i < $c; $i++) // 还没有添加广告的时候
    {
      $result[] = array(
          "ad_code" => "/public/images/not_adv.jpg",
          "ad_link" => "/index.php?m=Admin&c=Ad&a=ad&pid=$pid",
          "title"   =>"暂无广告图片",
          "not_adv" => 1,
          "target" => 0,
      );  
    }
}
foreach($result as $key=>$v):       
    
    $v[position] = $ad_position[$v[pid]]; 
    if(I("get.edit_ad") && $v[not_adv] == 0 )
    {
        $v[style] = "filter:alpha(opacity=50); -moz-opacity:0.5; -khtml-opacity: 0.5; opacity: 0.5"; // 广告半透明的样式
        $v[ad_link] = "/index.php?m=Admin&c=Ad&a=ad&act=edit&ad_id=$v[ad_id]";        
        $v[title] = $ad_position[$v[pid]][position_name]."===".$v[ad_name];
        $v[target] = 0;
    }
    ?>
                    <a href="<?php echo $v['ad_link']; ?>">
                        <div class="td">
                            <img src="<?php echo $v[ad_code]; ?>">
                        </div>
                    </a>
                <?php endforeach; $pid =302;$ad_position = M("ad_position")->cache(true,TPSHOP_CACHE_TIME)->column("position_id,position_name,ad_width,ad_height","position_id");$result = M("ad")->where("pid=$pid  and enabled = 1 and start_time < 1586494800 and end_time > 1586494800 ")->order("orderby desc")->cache(true,TPSHOP_CACHE_TIME)->limit("1")->select();
if(!in_array($pid,array_keys($ad_position)) && $pid)
{
  M("ad_position")->insert(array(
         "position_id"=>$pid,
         "position_name"=>CONTROLLER_NAME."页面自动增加广告位 $pid ",
         "is_open"=>1,
         "position_desc"=>CONTROLLER_NAME."页面",
  ));
  delFile(RUNTIME_PATH); // 删除缓存  
}


$c = 1- count($result); //  如果要求数量 和实际数量不一样 并且编辑模式
if($c > 0 && I("get.edit_ad"))
{
    for($i = 0; $i < $c; $i++) // 还没有添加广告的时候
    {
      $result[] = array(
          "ad_code" => "/public/images/not_adv.jpg",
          "ad_link" => "/index.php?m=Admin&c=Ad&a=ad&pid=$pid",
          "title"   =>"暂无广告图片",
          "not_adv" => 1,
          "target" => 0,
      );  
    }
}
foreach($result as $key=>$v):       
    
    $v[position] = $ad_position[$v[pid]]; 
    if(I("get.edit_ad") && $v[not_adv] == 0 )
    {
        $v[style] = "filter:alpha(opacity=50); -moz-opacity:0.5; -khtml-opacity: 0.5; opacity: 0.5"; // 广告半透明的样式
        $v[ad_link] = "/index.php?m=Admin&c=Ad&a=ad&act=edit&ad_id=$v[ad_id]";        
        $v[title] = $ad_position[$v[pid]][position_name]."===".$v[ad_name];
        $v[target] = 0;
    }
    ?>
                    <a href="<?php echo $v['ad_link']; ?>">
                        <div class="td">
                            <img src="<?php echo $v[ad_code]; ?>" title="<?php echo $v[title]; ?>" style="<?php echo $v[style]; ?>">
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
            <div class="le re fr">
                <?php $pid =300;$ad_position = M("ad_position")->cache(true,TPSHOP_CACHE_TIME)->column("position_id,position_name,ad_width,ad_height","position_id");$result = M("ad")->where("pid=$pid  and enabled = 1 and start_time < 1586494800 and end_time > 1586494800 ")->order("orderby desc")->cache(true,TPSHOP_CACHE_TIME)->limit("1")->select();
if(!in_array($pid,array_keys($ad_position)) && $pid)
{
  M("ad_position")->insert(array(
         "position_id"=>$pid,
         "position_name"=>CONTROLLER_NAME."页面自动增加广告位 $pid ",
         "is_open"=>1,
         "position_desc"=>CONTROLLER_NAME."页面",
  ));
  delFile(RUNTIME_PATH); // 删除缓存  
}


$c = 1- count($result); //  如果要求数量 和实际数量不一样 并且编辑模式
if($c > 0 && I("get.edit_ad"))
{
    for($i = 0; $i < $c; $i++) // 还没有添加广告的时候
    {
      $result[] = array(
          "ad_code" => "/public/images/not_adv.jpg",
          "ad_link" => "/index.php?m=Admin&c=Ad&a=ad&pid=$pid",
          "title"   =>"暂无广告图片",
          "not_adv" => 1,
          "target" => 0,
      );  
    }
}
foreach($result as $key=>$v):       
    
    $v[position] = $ad_position[$v[pid]]; 
    if(I("get.edit_ad") && $v[not_adv] == 0 )
    {
        $v[style] = "filter:alpha(opacity=50); -moz-opacity:0.5; -khtml-opacity: 0.5; opacity: 0.5"; // 广告半透明的样式
        $v[ad_link] = "/index.php?m=Admin&c=Ad&a=ad&act=edit&ad_id=$v[ad_id]";        
        $v[title] = $ad_position[$v[pid]][position_name]."===".$v[ad_name];
        $v[target] = 0;
    }
    ?>
                    <a href="<?php echo $v['ad_link']; ?>">
                        <div class="td">
                            <img src="<?php echo $v[ad_code]; ?>" title="<?php echo $v[title]; ?>" style="<?php echo $v[style]; ?>">
                        </div>
                    </a>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
    <!--广告位-end-->

    <!--新品上市-start-->
	<div class="floor newshop" style="margin-bottom: 50px;">
<!--        <div class="banner">-->
<!--            <img src="__STATIC__/images/ind_22.jpg" alt="新品上市"/>-->
<!--        </div>-->
        <div class="advertisement">
            <div class="content">
                <div class="le re fl" style="width:100%;">
                    <?php
                                   
                                $md5_key = md5("select * from __PREFIX__goods where is_new=1 and is_on_sale = 1 order by sort");
                                $result_name = $sql_result_v = S("sql_".$md5_key);
                                if(empty($sql_result_v))
                                {                            
                                    $result_name = $sql_result_v = \think\Db::query("select * from __PREFIX__goods where is_new=1 and is_on_sale = 1 order by sort"); 
                                    S("sql_".$md5_key,$sql_result_v,1);
                                }    
                              foreach($sql_result_v as $k=>$v): ?>
                        <a href="<?php echo U('Mobile/Goods/goodsInfo',array('id'=>$v[goods_id])); ?>" >
                            <div class="td" style="position:relative;">
								<div style="display: inline-block;">
									<img src="<?php echo goods_thum_images($v['goods_id'],400,400); ?>"/>
								</div>
								<div style="margin-left:0.3rem;display: inline-block;">
									<div style="margin-top:1rem;font-size:0.512rem;position: absolute;top: 0.3rem;left: 6rem;">
										<span><?php echo $v['goods_name']; ?></span>
									</div>
									<div style="margin-top:1rem;color: #ef395b;font-size:0.7rem;position: absolute;top: 2.3rem;left: 6rem;">
										<span><?php echo $v['shop_price']; ?>起</span>
									</div>
									<div style="font-size:.4rem;position: absolute;left: 12rem;top: 3.1rem;padding: 0.3rem 0.4rem;background: #EFC978;color: #fff;">
										立即查看
									</div>
								</div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <!--新品上市-end-->
	
    <!--底部-start-->
<!--    <footer>
    <div class="flool1">
        <ul>
            <?php if(!empty($_COOKIE['user_id'])): ?>
                <li><a href="<?php echo U('Mobile/User/index'); ?>"><?php echo getSubstr(urldecode($_COOKIE['uname']),0,3);?></a></li>
                <li><a href="<?php echo U('Mobile/User/logout'); ?>">退出</a></li>
            <?php else: ?>
                <li><a href="<?php echo U('Mobile/User/login'); ?>">登录</a></li>
                <li><a href="<?php echo U('Mobile/User/reg'); ?>">注册</a></li>
            <?php endif; ?>
            <li><a href="">反馈</a></li>
            <li class="comebackTop">回到顶部</li>
        </ul>
    </div>
    <div class="flool2">
        <ul>
            <li>
                <a href="?">
                    <div class="icon">
                        <img src="__STATIC__/images/ind_70.png"/>
                        <p>客户端</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="<?php echo U('Mobile/Index/index'); ?>">
                    <div class="icon black">
                        <img src="__STATIC__/images/ind_72.png"/>
                        <p>触屏版</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="<?php echo U('Home/Index/index'); ?>">
                    <div class="icon">
                        <img src="__STATIC__/images/ind_74.png"/>
                        <p>电脑版</p>
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <div class="flool3">
        <p>Copyright © 2004-2016 TPshop开源商城99soubao.com版权所有</p>
    </div>
</footer>-->
    <!--底部-end-->

    <!--底部导航-start-->
    <div class="foohi">
    <div class="footer">
        <ul>
            <li>
                <a <?php if(CONTROLLER_NAME == 'Index'): ?>class="yello" <?php endif; ?>  href="<?php echo U('Index/index'); ?>">
                    <div class="icon">
                        <i class="icon-shouye iconfont"></i>
                        <p>首页</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="<?php echo U('Goods/categoryList'); ?>">
                    <div class="icon">
                        <i class="icon-fenlei iconfont"></i>
                        <p>分类</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="<?php echo U('Cart/cart'); ?>">
                    <div class="icon">
                        <i class="icon-gouwuche iconfont"></i>
                        <p>购物车</p>
                    </div>
                </a>
            </li>
            <li>
                <a <?php if(CONTROLLER_NAME == 'User'): ?>class="yello" <?php endif; ?> href="<?php echo U('User/index'); ?>">
                    <div class="icon">
                        <i class="icon-wode iconfont"></i>
                        <p>我的</p>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function(){
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
});
</script>
<!-- 微信浏览器 调用微信 分享js-->
<!--<script type="text/javascript" src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script src="__PUBLIC__/js/global.js"></script>
<script type="text/javascript">
<?php if(ACTION_NAME == 'goodsInfo'): ?>
   var ShareLink = "http://<?php echo $_SERVER[HTTP_HOST]; ?>/index.php?m=Mobile&c=Goods&a=goodsInfo&id=<?php echo $goods[goods_id]; ?>"; //默认分享链接
   var ShareImgUrl = "http://<?php echo $_SERVER[HTTP_HOST]; ?><?php echo goods_thum_images($goods[goods_id],400,400); ?>"; // 分享图标
<?php else: ?>
   var ShareLink = "http://<?php echo $_SERVER[HTTP_HOST]; ?>/index.php?m=Mobile&c=Index&a=index"; //默认分享链接
   var ShareImgUrl = "http://<?php echo $_SERVER[HTTP_HOST]; ?><?php echo $tpshop_config['shop_info_store_logo']; ?>"; //分享图标
<?php endif; ?>

var is_distribut = getCookie('is_distribut'); // 是否分销代理
var user_id = getCookie('user_id'); // 当前用户id
//alert(is_distribut+'=='+user_id);
// 如果已经登录了, 并且是分销商
if(parseInt(is_distribut) == 1 && parseInt(user_id) > 0)
{									
	ShareLink = ShareLink + "&first_leader="+user_id;									
}

$(function() {
	if(isWeiXin() && parseInt(user_id)>0){
		$.ajax({
			type : "POST",
			url:"/index.php?m=Mobile&c=Index&a=ajaxGetWxConfig&t="+Math.random(),
			data:{'askUrl':encodeURIComponent(location.href.split('#')[0])},		
			dataType:'JSON',
			success: function(res)
			{
				//微信配置
				wx.config({
				    debug: false, 
				    appId: res.appId,
				    timestamp: res.timestamp, 
				    nonceStr: res.nonceStr, 
				    signature: res.signature,
				    jsApiList: ['onMenuShareTimeline', 'onMenuShareAppMessage','onMenuShareQQ','onMenuShareQZone','hideOptionMenu'] // 功能列表，我们要使用JS-SDK的什么功能
				});
			},
			error:function(){
				return false;
			}
		}); 

		// config信息验证后会执行ready方法，所有接口调用都必须在config接口获得结果之后，config是一个客户端的异步操作，所以如果需要在 页面加载时就调用相关接口，则须把相关接口放在ready函数中调用来确保正确执行。对于用户触发时才调用的接口，则可以直接调用，不需要放在ready 函数中。
		wx.ready(function(){
		    // 获取"分享到朋友圈"按钮点击状态及自定义分享内容接口
		    wx.onMenuShareTimeline({
		        title: "<?php echo $tpshop_config['shop_info_store_title']; ?>", // 分享标题
		        link:ShareLink,
		        imgUrl:ShareImgUrl // 分享图标
		    });

		    // 获取"分享给朋友"按钮点击状态及自定义分享内容接口
		    wx.onMenuShareAppMessage({
		        title: "<?php echo $tpshop_config['shop_info_store_title']; ?>", // 分享标题
		        desc: "<?php echo $tpshop_config['shop_info_store_desc']; ?>", // 分享描述
		        link:ShareLink,
		        imgUrl:ShareImgUrl // 分享图标
		    });
			// 分享到QQ
			wx.onMenuShareQQ({
		        title: "<?php echo $tpshop_config['shop_info_store_title']; ?>", // 分享标题
		        desc: "<?php echo $tpshop_config['shop_info_store_desc']; ?>", // 分享描述
		        link:ShareLink,
		        imgUrl:ShareImgUrl // 分享图标
			});	
			// 分享到QQ空间
			wx.onMenuShareQZone({
		        title: "<?php echo $tpshop_config['shop_info_store_title']; ?>", // 分享标题
		        desc: "<?php echo $tpshop_config['shop_info_store_desc']; ?>", // 分享描述
		        link:ShareLink,
		        imgUrl:ShareImgUrl // 分享图标
			});

		   <?php if(CONTROLLER_NAME == 'User'): ?> 
				wx.hideOptionMenu();  // 用户中心 隐藏微信菜单
		   <?php endif; ?>	
		});
	}
});

function isWeiXin(){
    var ua = window.navigator.userAgent.toLowerCase();
    if(ua.match(/MicroMessenger/i) == 'micromessenger'){
        return true;
    }else{
        return false;
    }
}
</script>
<!--微信关注提醒 start-->
<?php if(\think\Session::get('subscribe') == 0): ?>
<!-- <button class="guide" onclick="follow_wx()">关注公众号</button>
<style type="text/css">
.guide{width:20px;height:100px;text-align: center;border-radius: 8px ;font-size:12px;padding:8px 0;border:1px solid #adadab;color:#000000;background-color: #fff;position: fixed;right: 6px;bottom: 200px;}
#cover{display:none;position:absolute;left:0;top:0;z-index:18888;background-color:#000000;opacity:0.7;}
#guide{display:none;position:absolute;top:5px;z-index:19999;}
#guide img{width: 70%;height: auto;display: block;margin: 0 auto;margin-top: 10px;}
</style> -->
<script type="text/javascript">
  //关注微信公众号二维码	 
function follow_wx()
{
	layer.open({
		type : 1,  
		title: '关注公众号',
		content: '<img src="<?php echo $wechat_config['qr']; ?>" width="200">',
		style: ''
	});
}
</script> 
<?php endif; ?>
<!--微信关注提醒  end-->-->
<!-- 微信浏览器 调用微信 分享js  end-->
    <!--底部导航-end-->
<script src="__STATIC__/js/style.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="__STATIC__/js/sourch_submit.js"></script>
<?php if($user_id > 0): ?>
<script>
    $.ajax({
        type : "get",
        url:"/index.php?m=Mobile&c=Index&a=getNotice",
        success: function(data){
            if(data){
                data = JSON.parse(data);
                layer.open({
                    title: ['最新公告', 'background-color:#333;color:#fff;font-size:.6rem;height:1.9rem;line-height:1.9rem;']
                    ,content: data.content
                    ,style:'font-size:.512rem;'
                    ,shadeClose:false
                });
            }
        }
    });
</script>
<?php endif; ?>
<script type="text/javascript">
    /**
     * 秒杀模块倒计时
     * */
    function GetRTime(end_time){
        var NowTime = new Date();
        var t = (end_time*1000) - NowTime.getTime();
        var d=Math.floor(t/1000/60/60/24);
        var h=Math.floor(t/1000/60/60%24);
        var m=Math.floor(t/1000/60%60);
        var s=Math.floor(t/1000%60);
        if(s >= 0)
            return (d * 24 + h) + '时' + m + '分' +s+'秒';
    }
    function GetRTime2(){
        var text = GetRTime('<?php echo $end_time; ?>');
        if (text== 0){
            $(".hms").text('活动已结束');
        }else{
            $(".hms").text(text);
        }
    }
    setInterval(GetRTime2,1000);

    /**
     * 继续加载猜您喜欢
     * */
    //$(function(){
        //getGoodsList();
    //});
    var page = 1;
    function ajax_sourch_submit(){
        $('.get_more').show();
        $.ajax({
            type : "get",
            url:"/index.php?m=Mobile&c=Index&a=ajaxGetMore&p="+page,
            success: function(data)
            {
                if(data){
                    $("#J_ItemList>ul").append(data);
                    page++;
                    $('.get_more').hide();
                }else{
                    $('.get_more').hide();
                    $('#getmore').remove();
                }
            }
        });
    }
//    //滚动加载更多
//    $(window).scroll(
//        function() {
//            var scrollTop = $(this).scrollTop();
//            var scrollHeight = $(document).height();
//            var windowHeight = $(this).height();
//            if (scrollTop + windowHeight == scrollHeight) {
//                getGoodsList();//调用加载更多
//            }
//        }
//    );
</script>
	</body>
</html>
