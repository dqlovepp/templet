<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>泛米管理中心</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo (FM_ADMIN_CSS); ?>general.css" rel="stylesheet" type="text/css" />
<link href="<?php echo (FM_ADMIN_CSS); ?>main.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.top{clear:both; height:76px; width:100%;}
.main{clear: both; width: 100%;  height: auto;}
.main ul{list-style: none; height: auto;}
#mainLeft{float: left;vertical-align: top; width:15%; height: auto;}
#mainRight{float: right;vertical-align: top; width: 85%; height: auto; overflow: hidden;}
#footer {
  clear: both;
  background: #F4FaFb;
  border: 1px solid #BBDDE5;
  padding: 15px;
  color: #9CACAF;
  margin-top: 10px;
  text-align: center;
  width: 100%;
}
</style>
<script type="text/javascript" src="<?php echo (APP_COMMON_JS); ?>jquery-1.9.1.js"></script>
<script type="text/javascript">
// $(function(){
// 	var mainRight=document.getElementById('mainRight');
// 	var mainLeft=document.getElementById('mainLeft');
// //	mainRight.style.width=document.documentElement.clientWidth-mainLeft.offsetWidth-60+'px';
// });
//  window.onresize=function(){  
//   	var mainRight=document.getElementById('mainRight');
// 	var mainLeft=document.getElementById('mainLeft');
// //	mainRight.style.width=document.documentElement.clientWidth-mainLeft.offsetWidth-60+'px';
//   }  
</script>
</head>
<body style="background-color:#278296;margin:0; padding:0; border:0">
<div class="top">
	 <style type="text/css">
#header-div {
  background:#278296;
  border-bottom:1px solid #FFF;
}

#logo-div {
  height:50px;
  float:left;
}

#submenu-div {
  height:50px;
}

#submenu-div ul {
  margin:3px 20px 0 0;
  padding:0;
  float:right;
  list-style-type:none;
}

#submenu-div li {
  float:left;
  padding:0 10px;
  margin:3px 0;
  border-right:1px solid #FFF;
}

#submenu-div a:visited, #submenu-div a:link {
  color:#FFF;
  text-decoration:none;
}

#submenu-div a:hover {
  color:#F5C29A;
}

#loading-div {
  clear:right;
  text-align:right;
  display:block;
}

#menu-div {
  background:#80BDCB;
  font-weight:bold;
  height:24px;
  line-height:24px;
}

#menu-div ul {
  margin:0;
  padding:0;
  list-style-type:none;
}

#menu-div li {
  float:left;
  border-right:1px solid #192E32;
  border-left:1px solid #BBDDE5;
}

#menu-div a:visited, #menu-div a:link {
  display:block;
  padding:0 20px;
  text-decoration:none;
  color:#335B64;
  background:#9CCBD6;
}

#menu-div a:hover {
  color:#000;
  background:#80BDCB;
}

#submenu-div a.fix-submenu{
    clear:both;
    margin-left:5px;
    padding:1px 5px;
    background:#DDEEF2;
    color:#278296;
}

#submenu-div a.fix-submenu:hover{
    padding:1px 5px;
    background:#FFF;
    color:#278296;
}

#menu-div li.fix-spacel{
    width:30px;
    border-left:none;
}

#menu-div li.fix-spacer{
    border-right:none;
}
#send_info {
  padding:5px 30px 0 0;
  clear:right;
  text-align:right;
  color:#FF9900;
  width:40%;
  float:right;  
}
</style>

<div id="header-div">
    <div id="logo-div" style="bgcolor:#000000;">
        <img src="<?php echo (FM_ADMIN_IMG); ?>ecshop_logo.gif" alt="ECSHOP - power for e-commerce" />
    </div>
    <div id="submenu-div">
        <ul>
            <li><a href="/Home/Index/index" target="_blank">查看网店</a></li>
            <li><a href="#">个人设置</a></li>
            <li style="border-right:none"><a href="">刷新</a></li>
        </ul>
        <div id="send_info">
            <a href="#" target="_top" class="fix-submenu">退出</a>
        </div>
    </div>
</div>
<div id="menu-div">
    <ul>
        <li class="fix-spacel">&nbsp;</li>
        <li><a href="/Admin/Index/index.html" target="main-frame">起始页</a></li>
        <li><a href="__GROUP__/Goods/goodsList" target="main-frame">商品列表</a></li>
        <li><a href="__GROUP__/Order/orderList" target="main-frame">订单列表</a></li>
        <li><a href="__GROUP__/Comment/commentList" target="main-frame">用户评论</a></li>
        <li><a href="__GROUP__/User/userList" target="main-frame">会员列表</a></li>
        <li class="fix-spacer">&nbsp;</li>
    </ul>
    <br class="clear" />
</div>
</div>
<div class="main">
	<ul>
		<li id="mainLeft"><style type="text/css">
#tabbar-div {
  background:#278296;
  padding-left:10px;
  height:21px;
  padding-top:0px;
}
#tabbar-div p {
  margin:1px 5px 0 0;
  background:#80BDCB;
}
.tab-front {
  background:#80BDCB;
  line-height:20px;
  font-weight:bold;
  padding:4px 15px 4px 18px;
  border-right:2px solid #335b64;
  cursor:hand;
  cursor:pointer;
}
.tab-back {
  color:#F4FAFB;
  line-height:20px;
  padding:4px 15px 4px 18px;
  cursor:hand;
  cursor:pointer;
}
.tab-hover {
  color:#F4FAFB;
  line-height:20px;
  padding:4px 15px 4px 18px;
  cursor:hand;
  cursor:pointer;
  background:#2F9DB5;
}
#top-div
{
  padding:3px 0 2px;
  background:#BBDDE5;
  margin:5px;
  text-align:center;
}
#main-div {
  border:1px solid #345C65;
  padding:5px;
  margin:5px;
  background:#FFF;
}
#menu-list {
  padding:0;
  margin:0;
}
#menu-list ul {
  padding:0;
  margin:0;
  list-style-type: none;
  color:#335B64;
}
#menu-list li {
  padding-left:16px;
  line-height:16px;
  cursor:hand;
  cursor:pointer;
}
#main-div a:visited, #menu-list a:link, #menu-list a:hover {
  color:#335B64
  text-decoration:none;
}
#menu-list a:active {
  color:#EB8A3D;
}
.explode {
  background:url(<?php echo (FM_ADMIN_IMG); ?>menu_minus.gif) no-repeat 0px 3px;
  font-weight:bold;
}
.collapse {
  background:url(<?php echo (FM_ADMIN_IMG); ?>menu_plus.gif) no-repeat 0px 3px;
  font-weight:bold;
}
.menu-item {
  background:url(<?php echo (FM_ADMIN_IMG); ?>menu_arrow.gif) no-repeat 0px 3px;
  font-weight:normal;
  height: 20px;
  margin-top: 2px;
}
#help-title {
  font-size:14px;
  color:#000080;
  margin:5px 0;
  padding:0px;
}
#help-content {
  margin:0;
  padding:0;
}
.tips {
  color:#CC0000;
}
.link {
  color:#000099;
}
</style>
<div id="tabbar-div">
    <p>
        <span style="float:right; padding:3px 5px;" >
            <a href="javascript:toggleCollapse();">
                <img id="toggleImg" src="<?php echo (FM_ADMIN_IMG); ?>menu_minus.gif" width="9" height="9" border="0" alt="闭合" />
            </a>
        </span>
        <span class="tab-front" id="menu-tab">菜单</span>
    </p>
</div>
<div id="main-div">
    <div id="menu-list">
        <ul id="menu-ul">
            <li class="explode" key="02_cat_and_goods" name="menu">
            商品管理
                <ul>
                    <li class="menu-item"><a href="/Admin/Goods/showlist" target="_self">商品列表</a></li>
                    <li class="menu-item"><a href="/Admin/Goods/goodsAdd" target="_self">添加新商品</a></li>
                    
                    <li class="menu-item"><a href="/Admin/Category/categoryList" target="_self">商品分类</a></li>
                    <li class="menu-item"><a href="/Admin/Category/categoryAdd" target="_self">添加商品分类</a></li>                   
                    <li class="menu-item"><a href="/Admin/brand/brandList" target="_self">商品品牌</a></li>
                    <li class="menu-item"><a href="/Admin/brand/brandAdd" target="_self">添加品牌分类</a></li>
                </ul>
            </li>
            <li class="explode" key="04_order" name="menu">
            订单管理
                <ul>
                    <li class="menu-item"><a href="/Admin/Order/orderList.html">订单列表</a></li>
                    <li class="menu-item"><a href="/Admin/Order/notPost.html" >待发货单列表</a></li>
                    <li class="menu-item"><a href="/Admin/Order/notPay.html" >待支付单列表</a></li>
                    <li class="menu-item"><a href="/Admin/Order/notSure.html" >未确认订单:</a></li>
                    <li class="menu-item"><a href="/Admin/Order/haveSure.html" >已成交订单:</a></li>
                    <li class="menu-item"><a href="/Admin/Order/returnGoods.html" >退货单列表</a></li>
                </ul>
            </li>
            <li class="explode" key="08_members" name="menu">
            会员管理
                <ul>
                    <li class="menu-item"><a href="/Admin/User/memberList.html" >会员列表</a></li>
                    <li class="menu-item"><a href="userMessage.html" >会员留言</a></li>
                </ul>
            </li>
            <li class="explode" key="08_members" name="menu">
            帮助中心
                <ul>
                    <li class="menu-item"><a href="/Admin/Helpcenter/index.html" >帮助中心管理</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div id="help-div" style="display:none">
        <h1 id="help-title"></h1>
        <div id="help-content"></div>
    </div>
</div>
</li>
		<li id="mainRight">
			<h1>
    			<span class="action-span1"><a href="/Admin/Index/index.html">泛米网管理中心</a> </span>
			    <span class="action-span"><a href="/Admin/Goods/showlist">商品列表</a>
    </span>
    <span id="search_id" class="action-span1"> - 编辑商品 </span>
    <div style="clear:both"></div>
</h1>

<div class="tab-div">
    <div id="tabbar-div">
        <p>
            <span class="tab-front" id="general-tab"><a href="/Admin/Goods/goodsEdit/goods_id/<?php echo ($curGoods["goods_id"]); ?>">1.编辑信息</a></span>
            <span class="tab-front" id="general-tab"><a href="/Admin/Goods/goodsEdit2/goods_id/<?php echo ($curGoods["goods_id"]); ?>" >2.编辑商品图片</a></span>
            <span class="tab-front" id="general-tab"><a href="/Admin/Goods/goodsEdit3/goods_id/<?php echo ($curGoods["goods_id"]); ?>" >3.编辑商品简介</a></span>
        </p>
    </div>
    <div id="tabbody-div">
        <form enctype="multipart/form-data" action="/Admin/Goods/goodsEditing" method="post">
            <input type="hidden" name="old_logo1" value="<?php echo ($curGoods["goods_big_img"]); ?>" />
            <input type="hidden" name="old_logo2" value="<?php echo ($curGoods["goods_mid_img"]); ?>" />
            <input type="hidden" name="old_logo3" value="<?php echo ($curGoods["goods_small_img"]); ?>" />
            <input type="hidden" name="old_logo4" value="<?php echo ($curGoods["goods_undeal_img"]); ?>" />
            <table width="90%" id="general-table" align="center">
                <tr>
                    <td class="label">商品名称：</td>
                    <td><input type="text" name="goods_name" value="<?php echo ($curGoods["goods_name"]); ?>"size="30" />
                    <span class="require-field">*</span></td>
                </tr>
                <tr>
                    <td class="label">商品货号： </td>
                    <td>
                        <input type="text" name="goods_sn" value="<?php echo ($curGoods["goods_sn"]); ?>" size="20"/>
                        <span id="goods_sn_notice"></span><br />
                        <span class="notice-span"id="noticeGoodsSN">如果您不输入商品货号，系统将自动生成一个唯一的货号。</span>
                    </td>
                </tr>
                <tr>
                    <td class="label">商品分类：</td>
                    <td>
                        <select name="goods_category_id">
                            <?php if(is_array($allGoodsType)): foreach($allGoodsType as $key=>$cat_val): ?><option value="<?php echo ($cat_val["category_id"]); ?>" <?php if($cat_val['category_id'] == $curGoods['goods_category_id']): ?>selected="true"<?php endif; ?> ><?php echo ($cat_val["category_name"]); ?></option><?php endforeach; endif; ?>
                        </select>
                        <span class="require-field">*</span>
                    </td>
                </tr>
                <tr>
                    <td class="label">商品品牌：</td>
                    <td>
                        <select name="goods_brand_id">
                            <?php if(is_array($brandType)): foreach($brandType as $key=>$brand_val): ?><option value="<?php echo ($brand_val["brand_id"]); ?>" <?php if($brand_val['brand_id'] == $curGoods['goods_brand_id']): ?>selected="true"<?php endif; ?> ><?php echo ($brand_val["brand_name"]); ?></option><?php endforeach; endif; ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="label">本店售价：</td>
                    <td>
                        <input type="text" name="goods_price" value="<?php echo ($curGoods["goods_price"]); ?>" size="20"/>
                        <span class="require-field">*</span>
                    </td>
                </tr>
                <tr>
                    <td class="label">市场售价：</td>
                    <td>
                        <input type="text" name="goods_market_price" value="<?php echo ($curGoods["goods_market_price"]); ?>" size="20" />
                    </td>
                </tr>
                <tr>
                    <td class="label">商品数量：</td>
                    <td>
                        <input type="text" name="goods_number" size="8" value="<?php echo ($curGoods["goods_number"]); ?>"/>
                    </td>
                </tr>
                    <td class="label">是否上架：</td>
                    <td>
                        <input type="radio" name="goods_is_best" value="1" <?php if($curGoods["goods_is_onsale"] == 1): ?>checked="true"<?php endif; ?> /> 是
                        <input type="radio" name="goods_is_best" value="0" <?php if($curGoods["goods_is_onsale"] == 0): ?>checked="true"<?php endif; ?> /> 否
                    </td>
                </tr>
                <tr>
                    <td class="label">加入推荐：</td>
                    <td>
                        <input type="checkbox" name="goods_is_best" value="1" <?php if($curGoods["goods_is_best"] == 1): ?>checked="true"<?php endif; ?> /> 精品 
                        <input type="checkbox" name="goods_is_new" value="1" <?php if($curGoods["goods_is_new"] == 1): ?>checked="true"<?php endif; ?> /> 新品 
                        <input type="checkbox" name="goods_is_hot" value="1" <?php if($curGoods["goods_is_hot"] == 1): ?>checked="true"<?php endif; ?> /> 热销
                    </td>
                </tr>
                <tr>
                    <td class="label">推荐排序：</td>
                    <td>
                        <input type="text" name="goods_rank" size="5" value="<?php echo ($curGoods["goods_rank"]); ?>"/>
                    </td>
                </tr>
                
                <tr>
                    <td class="label">商品关键词：</td>
                    <td>
                        <input type="text" name="goods_keywords" value="<?php echo ($curGoods["goods_keywords"]); ?>" size="40" /> 用空格分隔
                    </td>
                </tr>
                 <tr>
                    <td class="label">商品图片：</td>
                    <td>
                        <input type="file" name="logo" size="35" />
                    </td>
                </tr>
                <tr>
                    <td class="label">原图片：</td>
                    <td>
                        <img src="<?php echo (URL); ?>Public/<?php echo ($curGoods["goods_mid_img"]); ?>">
                    </td>
                </tr>
                <tr>
                    <td class="label">商品简单描述：</td>
                    <td>
                        <textarea name="goods_introduce" cols="40" rows="3"><?php echo ($curGoods["goods_introduce"]); ?></textarea>
                    </td>
                </tr>
            </table>
            <div class="button-div">
                <input type="hidden" name="goods_id" value="<?php echo ($curGoods["goods_id"]); ?>">
                <input type="hidden" name="step" value="goodsEdit">
                <input type="submit" value=" 确定 " class="button"/>
                <input type="reset" value=" 重置 " class="button" />
            </div>
        </form>
    </div>
</div>

		</li>
		<li style="clear:both;"></li> 
	</ul>
</div>

<div id="footer">
版权所有 &copy; 武汉泛米科技</div>
</body>
</html>