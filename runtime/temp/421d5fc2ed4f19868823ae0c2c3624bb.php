<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:48:"./template/mobile/new2/distribut\lower_list.html";i:1585879822;s:41:"./template/mobile/new2/public\header.html";i:1585743136;s:45:"./template/mobile/new2/public\header_nav.html";i:1584112568;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>我的团队--<?php echo $tpshop_config['shop_info_store_title']; ?></title>
    <link rel="stylesheet" href="__STATIC__/css/style.css">
    <link rel="stylesheet" type="text/css" href="__STATIC__/css/iconfont.css"/>
    <script src="__STATIC__/js/jquery-3.1.1.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="__STATIC__/js/style.js" type="text/javascript" charset="utf-8"></script>
    <script src="__STATIC__/js/mobile-util.js" type="text/javascript" charset="utf-8"></script>
    <script src="__PUBLIC__/js/global.js?v=1.0"></script>
    <script src="__STATIC__/js/layer.js"  type="text/javascript" ></script>
    <script src="__STATIC__/js/swipeSlide.min.js" type="text/javascript" charset="utf-8"></script>
</head>
<body class="[body]">

<div class="classreturn loginsignup ">
    <div class="content">
        <div class="ds-in-bl return">
            <a href="/mobile/User/index"><img src="__STATIC__/images/return.png" alt="返回"></a>
        </div>
        <div class="ds-in-bl search center">
            <span>我的团队</span>
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
<link rel="stylesheet" type="text/css" href="__STATIC__/distribut/css/main.css"/>
<div class="tit-flash-sale p mytit_flash" style="border-bottom: 1px solid #f7f7f7;">
    <div class="maleri30">
        <ul class="">
            <li style="width: 33%;">
                <a href="javascript:;" class="tab_head">直推：<?php echo !empty($count)?$count:0; ?></a>
            </li>
            <li style="width: 33%;">
                <a href="javascript:;" class="tab_head" >团队：<?php echo $all; ?></a>
            </li>
			<li style="width: 33%;">
                <a href="javascript:;" class="tab_head" >总业绩：<?php echo !empty($teamyj)?$teamyj:0; ?></a>
            </li>
        </ul>
    </div>
</div>
<?php if(!empty($lists)): ?>
    <div id="ajax_return">
        <?php if(is_array($lists) || $lists instanceof \think\Collection || $lists instanceof \think\Paginator): if( count($lists)==0 ) : echo "" ;else: foreach($lists as $key=>$v): ?>
            <div class="my_team_alon p">
                <a href="">
                    <div class="team_head" style="padding-top: 0.8rem;height:unset;">
                        <img src="<?php echo (isset($v[head_pic]) && ($v[head_pic] !== '')?$v[head_pic]:"__STATIC__/images/hi.png"); ?>"/>
                    </div>
					<div class="team_name_time">
						<span class="t_n"><?php echo $v[nickname]; ?></span>
						<span class="t_t">直推人数：<?php echo $v['zhi_count']; ?></span>
						<span class="t_t">团队人数：<?php echo $v['team_count']; ?></span>
						<span class="t_t">团队业绩：<?php echo !empty($v['team_yj'])?$v['team_yj']:0; ?>元</span>
						<span class="t_t">注册时间：<?php echo date('Y-m-d',$v[reg_time]); ?></span>
					</div>
					<!-- <span class="team_price">团队业绩：<?php echo $v['team_yj']; ?>元</span> -->
                    <!--<i class="icon-arrow_r"></i>-->
                </a>
            </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
<?php else: ?>
    <!--没有内容时-s-->
    <div class="comment_con p">
        <div style="padding:1rem;text-align: center;font-size: .59733rem;color: #777777;"><img src="__STATIC__/images/none.png"/><br /><br />亲，您还没有下线！</div>
    </div>
    <!--没有内容时-e-->
<?php endif; ?>
<script type="text/javascript" src="__STATIC__/js/sourch_submit.js"></script>
<script>

    var  page = 1;
    /*** ajax 提交表单 查询订单列表结果*/
    function ajax_sourch_submit()
    {
        page += 1;
        $.ajax({
            type : "GET",
            url:"/index.php?m=Mobile&c=Distribut&a=lower_list&is_ajax=1&p="+page,//+tab,
//            data : $('#filter_form').serialize(),// 你的formid 搜索表单 序列化提交
            success: function(data)
            {
                if($.trim(data) == '')
                    $('#getmore').hide();
                else{
                    $("#ajax_return").append(data);
                }
            }
        });
    }
</script>
</body>
</html>
