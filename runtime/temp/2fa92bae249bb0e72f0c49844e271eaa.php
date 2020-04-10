<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:38:"./template/mobile/new2/user\score.html";i:1583587880;s:41:"./template/mobile/new2/public\header.html";i:1585743136;s:45:"./template/mobile/new2/public\header_nav.html";i:1584112568;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>鱼分明细--<?php echo $tpshop_config['shop_info_store_title']; ?></title>
    <link rel="stylesheet" href="__STATIC__/css/style.css">
    <link rel="stylesheet" type="text/css" href="__STATIC__/css/iconfont.css"/>
    <script src="__STATIC__/js/jquery-3.1.1.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="__STATIC__/js/style.js" type="text/javascript" charset="utf-8"></script>
    <script src="__STATIC__/js/mobile-util.js" type="text/javascript" charset="utf-8"></script>
    <script src="__PUBLIC__/js/global.js?v=1.0"></script>
    <script src="__STATIC__/js/layer.js"  type="text/javascript" ></script>
    <script src="__STATIC__/js/swipeSlide.min.js" type="text/javascript" charset="utf-8"></script>
</head>
<body class="">

<div class="classreturn loginsignup ">
    <div class="content">
        <div class="ds-in-bl return">
            <a href="<?php echo U('Mobile/User/index'); ?>"><img src="__STATIC__/images/return.png" alt="返回"></a>
        </div>
        <div class="ds-in-bl search center">
            <span>鱼分明细</span>
        </div>
        <div class="ds-in-bl menu">
            <a href="javascript:void(0);"><img src="__STATIC__/images/class1.png" alt="菜单"></a>
        </div>
    </div>
</div>
<div class="flool tpnavf">
    <div class="footer">
        <ul>
            <li>
                <a class="yello" href="<?php echo U('Index/index'); ?>">
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
                        <p>套餐</p>
                    </div>
                </a>
            </li>
            <li>
                <!--<a href="shopcar.html">-->
                <a href="<?php echo U('Cart/cart'); ?>">
                    <div class="icon">
                        <i class="icon-gouwuche iconfont"></i>
                        <p>购物车</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="<?php echo U('User/index'); ?>">
                    <div class="icon">
                        <i class="icon-wode iconfont"></i>
                        <p>我的</p>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</div>
<div class="allaccounted">
    <div class="maleri30">
		<div class="allpion">
			<?php if(is_array($account_log) || $account_log instanceof \think\Collection || $account_log instanceof \think\Paginator): if( count($account_log)==0 ) : echo "" ;else: foreach($account_log as $key=>$v): ?>
				<div class="fll_acc">
					<ul>
						<li><?php echo $v[desc]; ?></li>
						<li>
							<span>余额：</span><span class="red"><?php echo $v[user_money]; ?></span></li>
						<li>
							<p>
								<span>鱼分：</span><span class="red"><?php echo $v[pay_points]; ?></span>
							</p>
							<p class="coligh">
								<span><?php echo date('Y-m-d H:i:s',$v[change_time]); ?></span>
							</p>
						</li>
					</ul>
				</div>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
        <?php if(empty($account_log) || (($account_log instanceof \think\Collection || $account_log instanceof \think\Paginator ) && $account_log->isEmpty())): ?>
            <div style="font-size:.24rem;text-align: center;color:#888;padding:.25rem .24rem .4rem; clear:both">
                <span>暂无数据</span>
            </div>
        <?php endif; ?>
    </div>
</div>
<script type="text/javascript" src="__STATIC__/js/sourch_submit.js"></script>
<script type="text/javascript">
//    var record=$('.record').val();   //获取记录类型
    //加载更多记录
    var page = 1;
    function ajax_sourch_submit()
    {
        $.ajax({
            type : "GET",
            url:"/index.php?m=Mobile&c=User&a=points&is_ajax=1&type=<?php echo $type; ?>&p="+page,//+tab,
            success: function(data)
            {
                if($.trim(data) == '') {
                    $('#getmore').hide();
                }else{
                    $(".allpion").append(data);
                    page ++;
                }
            }
        });
    }
</script>
</body>
</html>