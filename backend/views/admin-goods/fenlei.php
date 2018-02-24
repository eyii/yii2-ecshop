<?php
$url=Yii::getAlias('all');
?>

<div style="clear:both"></div>
</h1>

<form method="post" action="" name="listForm">
<!-- start ad position list -->
<div class="list-div" id="listDiv">

<table width="100%" cellspacing="1" cellpadding="2" id="list-table">
  <tbody><tr>
    <th>分类名称</th>
    <th>商品数量</th>
    <th>数量单位</th>
    <th>导航栏</th>
    <th>是否显示</th>
    <th>价格分级</th>
    <th>排序</th>
    <th>操作</th>
  </tr>
    <tr align="center" class="0" id="0_6">
    <td align="left" class="first-cell" style="background-color: rgb(255, 255, 255);">
            <img src="<?=$url?>/images/ec/menu_minus.gif" id="icon_0_6" width="9" height="9" border="0" style="margin-left:0em" onclick="rowClicked(this)">
            <span><a href="http://ec.com/admin/goods.php?act=list&amp;cat_id=6">手机配件</a></span>
        </td>
    <td width="10%" style="background-color: rgb(255, 255, 255);">0</td>
    <td width="10%" style="background-color: rgb(255, 255, 255);"><span onclick="listTable.edit(this, &#39;edit_measure_unit&#39;, 6)"><!--  -->&nbsp;&nbsp;&nbsp;&nbsp;<!--  --></span></td>
    <td width="10%" style="background-color: rgb(255, 255, 255);"><img src="<?=$url?>/images/ec/yes.gif" onclick="listTable.toggle(this, &#39;toggle_show_in_nav&#39;, 6)"></td>
    <td width="10%" style="background-color: rgb(255, 255, 255);"><img src="<?=$url?>/images/ec/yes.gif" onclick="listTable.toggle(this, &#39;toggle_is_show&#39;, 6)"></td>
    <td style="background-color: rgb(255, 255, 255);"><span onclick="listTable.edit(this, &#39;edit_grade&#39;, 6)">0</span></td>
    <td width="10%" align="right" style="background-color: rgb(255, 255, 255);"><span onclick="listTable.edit(this, &#39;edit_sort_order&#39;, 6)">50</span></td>
    <td width="24%" align="center" style="background-color: rgb(255, 255, 255);">
      <a href="http://ec.com/admin/category.php?act=move&amp;cat_id=6">转移商品</a> |
      <a href="http://ec.com/admin/category.php?act=edit&amp;cat_id=6">编辑</a> |
      <a href="javascript:;" onclick="listTable.remove(6, &#39;您确认要删除这条记录吗?&#39;)" title="移除">移除</a>
    </td>
  </tr>
    <tr align="center" class="1" id="1_9">
    <td align="left" class="first-cell" style="background-color: rgb(255, 255, 255);">
            <img src="<?=$url?>/images/ec/menu_minus.gif" id="icon_1_9" width="9" height="9" border="0" style="margin-left:1em" onclick="rowClicked(this)">
            <span><a href="http://ec.com/admin/goods.php?act=list&amp;cat_id=9">电池</a></span>
        </td>
    <td width="10%" style="background-color: rgb(255, 255, 255);">0</td>
    <td width="10%" style="background-color: rgb(255, 255, 255);"><span onclick="listTable.edit(this, &#39;edit_measure_unit&#39;, 9)"><!--  -->&nbsp;&nbsp;&nbsp;&nbsp;<!--  --></span></td>
    <td width="10%" style="background-color: rgb(255, 255, 255);"><img src="<?=$url?>/images/ec/no.gif" onclick="listTable.toggle(this, &#39;toggle_show_in_nav&#39;, 9)"></td>
    <td width="10%" style="background-color: rgb(255, 255, 255);"><img src="<?=$url?>/images/ec/yes.gif" onclick="listTable.toggle(this, &#39;toggle_is_show&#39;, 9)"></td>
    <td style="background-color: rgb(255, 255, 255);"><span onclick="listTable.edit(this, &#39;edit_grade&#39;, 9)">0</span></td>
    <td width="10%" align="right" style="background-color: rgb(255, 255, 255);"><span onclick="listTable.edit(this, &#39;edit_sort_order&#39;, 9)">50</span></td>
    <td width="24%" align="center" style="background-color: rgb(255, 255, 255);">
      <a href="http://ec.com/admin/category.php?act=move&amp;cat_id=9">转移商品</a> |
      <a href="http://ec.com/admin/category.php?act=edit&amp;cat_id=9">编辑</a> |
      <a href="javascript:;" onclick="listTable.remove(9, &#39;您确认要删除这条记录吗?&#39;)" title="移除">移除</a>
    </td>
  </tr>
    <tr align="center" class="1" id="1_11">
    <td align="left" class="first-cell" style="background-color: rgb(255, 255, 255);">
            <img src="<?=$url?>/images/ec/menu_minus.gif" id="icon_1_11" width="9" height="9" border="0" style="margin-left:1em" onclick="rowClicked(this)">
            <span><a href="http://ec.com/admin/goods.php?act=list&amp;cat_id=11">读卡器和内存卡</a></span>
        </td>
    <td width="10%" style="background-color: rgb(255, 255, 255);">2</td>
    <td width="10%" style="background-color: rgb(255, 255, 255);"><span onclick="listTable.edit(this, &#39;edit_measure_unit&#39;, 11)"><!--  -->&nbsp;&nbsp;&nbsp;&nbsp;<!--  --></span></td>
    <td width="10%" style="background-color: rgb(255, 255, 255);"><img src="<?=$url?>/images/ec/no.gif" onclick="listTable.toggle(this, &#39;toggle_show_in_nav&#39;, 11)"></td>
    <td width="10%" style="background-color: rgb(255, 255, 255);"><img src="<?=$url?>/images/ec/yes.gif" onclick="listTable.toggle(this, &#39;toggle_is_show&#39;, 11)"></td>
    <td style="background-color: rgb(255, 255, 255);"><span onclick="listTable.edit(this, &#39;edit_grade&#39;, 11)">0</span></td>
    <td width="10%" align="right" style="background-color: rgb(255, 255, 255);"><span onclick="listTable.edit(this, &#39;edit_sort_order&#39;, 11)">50</span></td>
    <td width="24%" align="center" style="background-color: rgb(255, 255, 255);">
      <a href="http://ec.com/admin/category.php?act=move&amp;cat_id=11">转移商品</a> |
      <a href="http://ec.com/admin/category.php?act=edit&amp;cat_id=11">编辑</a> |
      <a href="javascript:;" onclick="listTable.remove(11, &#39;您确认要删除这条记录吗?&#39;)" title="移除">移除</a>
    </td>
  </tr>
    <tr align="center" class="1" id="1_7">
    <td align="left" class="first-cell">
            <img src="<?=$url?>/images/ec/menu_minus.gif" id="icon_1_7" width="9" height="9" border="0" style="margin-left:1em" onclick="rowClicked(this)">
            <span><a href="http://ec.com/admin/goods.php?act=list&amp;cat_id=7">充电器</a></span>
        </td>
    <td width="10%">0</td>
    <td width="10%"><span onclick="listTable.edit(this, &#39;edit_measure_unit&#39;, 7)"><!--  -->&nbsp;&nbsp;&nbsp;&nbsp;<!--  --></span></td>
    <td width="10%"><img src="<?=$url?>/images/ec/no.gif" onclick="listTable.toggle(this, &#39;toggle_show_in_nav&#39;, 7)"></td>
    <td width="10%"><img src="<?=$url?>/images/ec/yes.gif" onclick="listTable.toggle(this, &#39;toggle_is_show&#39;, 7)"></td>
    <td><span onclick="listTable.edit(this, &#39;edit_grade&#39;, 7)">0</span></td>
    <td width="10%" align="right"><span onclick="listTable.edit(this, &#39;edit_sort_order&#39;, 7)">50</span></td>
    <td width="24%" align="center">
      <a href="http://ec.com/admin/category.php?act=move&amp;cat_id=7">转移商品</a> |
      <a href="http://ec.com/admin/category.php?act=edit&amp;cat_id=7">编辑</a> |
      <a href="javascript:;" onclick="listTable.remove(7, &#39;您确认要删除这条记录吗?&#39;)" title="移除">移除</a>
    </td>
  </tr>
    <tr align="center" class="1" id="1_8">
    <td align="left" class="first-cell">
            <img src="<?=$url?>/images/ec/menu_minus.gif" id="icon_1_8" width="9" height="9" border="0" style="margin-left:1em" onclick="rowClicked(this)">
            <span><a href="http://ec.com/admin/goods.php?act=list&amp;cat_id=8">耳机</a></span>
        </td>
    <td width="10%">3</td>
    <td width="10%"><span onclick="listTable.edit(this, &#39;edit_measure_unit&#39;, 8)"><!--  -->&nbsp;&nbsp;&nbsp;&nbsp;<!--  --></span></td>
    <td width="10%"><img src="<?=$url?>/images/ec/no.gif" onclick="listTable.toggle(this, &#39;toggle_show_in_nav&#39;, 8)"></td>
    <td width="10%"><img src="<?=$url?>/images/ec/yes.gif" onclick="listTable.toggle(this, &#39;toggle_is_show&#39;, 8)"></td>
    <td><span onclick="listTable.edit(this, &#39;edit_grade&#39;, 8)">0</span></td>
    <td width="10%" align="right"><span onclick="listTable.edit(this, &#39;edit_sort_order&#39;, 8)">50</span></td>
    <td width="24%" align="center">
      <a href="http://ec.com/admin/category.php?act=move&amp;cat_id=8">转移商品</a> |
      <a href="http://ec.com/admin/category.php?act=edit&amp;cat_id=8">编辑</a> |
      <a href="javascript:;" onclick="listTable.remove(8, &#39;您确认要删除这条记录吗?&#39;)" title="移除">移除</a>
    </td>
  </tr>
    <tr align="center" class="0" id="0_1">
    <td align="left" class="first-cell">
            <img src="<?=$url?>/images/ec/menu_minus.gif" id="icon_0_1" width="9" height="9" border="0" style="margin-left:0em" onclick="rowClicked(this)">
            <span><a href="http://ec.com/admin/goods.php?act=list&amp;cat_id=1">手机类型</a></span>
        </td>
    <td width="10%">0</td>
    <td width="10%"><span onclick="listTable.edit(this, &#39;edit_measure_unit&#39;, 1)"><!--  -->&nbsp;&nbsp;&nbsp;&nbsp;<!--  --></span></td>
    <td width="10%"><img src="<?=$url?>/images/ec/no.gif" onclick="listTable.toggle(this, &#39;toggle_show_in_nav&#39;, 1)"></td>
    <td width="10%"><img src="<?=$url?>/images/ec/yes.gif" onclick="listTable.toggle(this, &#39;toggle_is_show&#39;, 1)"></td>
    <td><span onclick="listTable.edit(this, &#39;edit_grade&#39;, 1)">5</span></td>
    <td width="10%" align="right"><span onclick="listTable.edit(this, &#39;edit_sort_order&#39;, 1)">50</span></td>
    <td width="24%" align="center">
      <a href="http://ec.com/admin/category.php?act=move&amp;cat_id=1">转移商品</a> |
      <a href="http://ec.com/admin/category.php?act=edit&amp;cat_id=1">编辑</a> |
      <a href="javascript:;" onclick="listTable.remove(1, &#39;您确认要删除这条记录吗?&#39;)" title="移除">移除</a>
    </td>
  </tr>
    <tr align="center" class="1" id="1_3">
    <td align="left" class="first-cell">
            <img src="<?=$url?>/images/ec/menu_minus.gif" id="icon_1_3" width="9" height="9" border="0" style="margin-left:1em" onclick="rowClicked(this)">
            <span><a href="http://ec.com/admin/goods.php?act=list&amp;cat_id=3">GSM手机</a></span>
        </td>
    <td width="10%">11</td>
    <td width="10%"><span onclick="listTable.edit(this, &#39;edit_measure_unit&#39;, 3)"><!--  -->台<!--  --></span></td>
    <td width="10%"><img src="<?=$url?>/images/ec/yes.gif" onclick="listTable.toggle(this, &#39;toggle_show_in_nav&#39;, 3)"></td>
    <td width="10%"><img src="<?=$url?>/images/ec/yes.gif" onclick="listTable.toggle(this, &#39;toggle_is_show&#39;, 3)"></td>
    <td><span onclick="listTable.edit(this, &#39;edit_grade&#39;, 3)">4</span></td>
    <td width="10%" align="right"><span onclick="listTable.edit(this, &#39;edit_sort_order&#39;, 3)">50</span></td>
    <td width="24%" align="center">
      <a href="http://ec.com/admin/category.php?act=move&amp;cat_id=3">转移商品</a> |
      <a href="http://ec.com/admin/category.php?act=edit&amp;cat_id=3">编辑</a> |
      <a href="javascript:;" onclick="listTable.remove(3, &#39;您确认要删除这条记录吗?&#39;)" title="移除">移除</a>
    </td>
  </tr>
    <tr align="center" class="1" id="1_4">
    <td align="left" class="first-cell">
            <img src="<?=$url?>/images/ec/menu_minus.gif" id="icon_1_4" width="9" height="9" border="0" style="margin-left:1em" onclick="rowClicked(this)">
            <span><a href="http://ec.com/admin/goods.php?act=list&amp;cat_id=4">3G手机</a></span>
        </td>
    <td width="10%">2</td>
    <td width="10%"><span onclick="listTable.edit(this, &#39;edit_measure_unit&#39;, 4)"><!--  -->&nbsp;&nbsp;&nbsp;&nbsp;<!--  --></span></td>
    <td width="10%"><img src="<?=$url?>/images/ec/yes.gif" onclick="listTable.toggle(this, &#39;toggle_show_in_nav&#39;, 4)"></td>
    <td width="10%"><img src="<?=$url?>/images/ec/yes.gif" onclick="listTable.toggle(this, &#39;toggle_is_show&#39;, 4)"></td>
    <td><span onclick="listTable.edit(this, &#39;edit_grade&#39;, 4)">0</span></td>
    <td width="10%" align="right"><span onclick="listTable.edit(this, &#39;edit_sort_order&#39;, 4)">50</span></td>
    <td width="24%" align="center">
      <a href="http://ec.com/admin/category.php?act=move&amp;cat_id=4">转移商品</a> |
      <a href="http://ec.com/admin/category.php?act=edit&amp;cat_id=4">编辑</a> |
      <a href="javascript:;" onclick="listTable.remove(4, &#39;您确认要删除这条记录吗?&#39;)" title="移除">移除</a>
    </td>
  </tr>
    <tr align="center" class="1" id="1_5">
    <td align="left" class="first-cell">
            <img src="<?=$url?>/images/ec/menu_minus.gif" id="icon_1_5" width="9" height="9" border="0" style="margin-left:1em" onclick="rowClicked(this)">
            <span><a href="http://ec.com/admin/goods.php?act=list&amp;cat_id=5">双模手机</a></span>
        </td>
    <td width="10%">2</td>
    <td width="10%"><span onclick="listTable.edit(this, &#39;edit_measure_unit&#39;, 5)"><!--  -->&nbsp;&nbsp;&nbsp;&nbsp;<!--  --></span></td>
    <td width="10%"><img src="<?=$url?>/images/ec/no.gif" onclick="listTable.toggle(this, &#39;toggle_show_in_nav&#39;, 5)"></td>
    <td width="10%"><img src="<?=$url?>/images/ec/yes.gif" onclick="listTable.toggle(this, &#39;toggle_is_show&#39;, 5)"></td>
    <td><span onclick="listTable.edit(this, &#39;edit_grade&#39;, 5)">5</span></td>
    <td width="10%" align="right"><span onclick="listTable.edit(this, &#39;edit_sort_order&#39;, 5)">50</span></td>
    <td width="24%" align="center">
      <a href="http://ec.com/admin/category.php?act=move&amp;cat_id=5">转移商品</a> |
      <a href="http://ec.com/admin/category.php?act=edit&amp;cat_id=5">编辑</a> |
      <a href="javascript:;" onclick="listTable.remove(5, &#39;您确认要删除这条记录吗?&#39;)" title="移除">移除</a>
    </td>
  </tr>
    <tr align="center" class="1" id="1_2">
    <td align="left" class="first-cell">
            <img src="<?=$url?>/images/ec/menu_minus.gif" id="icon_1_2" width="9" height="9" border="0" style="margin-left:1em" onclick="rowClicked(this)">
            <span><a href="http://ec.com/admin/goods.php?act=list&amp;cat_id=2">CDMA手机</a></span>
        </td>
    <td width="10%">0</td>
    <td width="10%"><span onclick="listTable.edit(this, &#39;edit_measure_unit&#39;, 2)"><!--  -->&nbsp;&nbsp;&nbsp;&nbsp;<!--  --></span></td>
    <td width="10%"><img src="<?=$url?>/images/ec/no.gif" onclick="listTable.toggle(this, &#39;toggle_show_in_nav&#39;, 2)"></td>
    <td width="10%"><img src="<?=$url?>/images/ec/yes.gif" onclick="listTable.toggle(this, &#39;toggle_is_show&#39;, 2)"></td>
    <td><span onclick="listTable.edit(this, &#39;edit_grade&#39;, 2)">0</span></td>
    <td width="10%" align="right"><span onclick="listTable.edit(this, &#39;edit_sort_order&#39;, 2)">50</span></td>
    <td width="24%" align="center">
      <a href="http://ec.com/admin/category.php?act=move&amp;cat_id=2">转移商品</a> |
      <a href="http://ec.com/admin/category.php?act=edit&amp;cat_id=2">编辑</a> |
      <a href="javascript:;" onclick="listTable.remove(2, &#39;您确认要删除这条记录吗?&#39;)" title="移除">移除</a>
    </td>
  </tr>
    <tr align="center" class="0" id="0_12">
    <td align="left" class="first-cell">
            <img src="<?=$url?>/images/ec/menu_minus.gif" id="icon_0_12" width="9" height="9" border="0" style="margin-left:0em" onclick="rowClicked(this)">
            <span><a href="http://ec.com/admin/goods.php?act=list&amp;cat_id=12">充值卡</a></span>
        </td>
    <td width="10%">0</td>
    <td width="10%"><span onclick="listTable.edit(this, &#39;edit_measure_unit&#39;, 12)"><!--  -->&nbsp;&nbsp;&nbsp;&nbsp;<!--  --></span></td>
    <td width="10%"><img src="<?=$url?>/images/ec/no.gif" onclick="listTable.toggle(this, &#39;toggle_show_in_nav&#39;, 12)"></td>
    <td width="10%"><img src="<?=$url?>/images/ec/yes.gif" onclick="listTable.toggle(this, &#39;toggle_is_show&#39;, 12)"></td>
    <td><span onclick="listTable.edit(this, &#39;edit_grade&#39;, 12)">0</span></td>
    <td width="10%" align="right"><span onclick="listTable.edit(this, &#39;edit_sort_order&#39;, 12)">50</span></td>
    <td width="24%" align="center">
      <a href="http://ec.com/admin/category.php?act=move&amp;cat_id=12">转移商品</a> |
      <a href="http://ec.com/admin/category.php?act=edit&amp;cat_id=12">编辑</a> |
      <a href="javascript:;" onclick="listTable.remove(12, &#39;您确认要删除这条记录吗?&#39;)" title="移除">移除</a>
    </td>
  </tr>
    <tr align="center" class="1" id="1_14">
    <td align="left" class="first-cell">
            <img src="<?=$url?>/images/ec/menu_minus.gif" id="icon_1_14" width="9" height="9" border="0" style="margin-left:1em" onclick="rowClicked(this)">
            <span><a href="http://ec.com/admin/goods.php?act=list&amp;cat_id=14">移动手机充值卡</a></span>
        </td>
    <td width="10%">2</td>
    <td width="10%"><span onclick="listTable.edit(this, &#39;edit_measure_unit&#39;, 14)"><!--  -->&nbsp;&nbsp;&nbsp;&nbsp;<!--  --></span></td>
    <td width="10%"><img src="<?=$url?>/images/ec/no.gif" onclick="listTable.toggle(this, &#39;toggle_show_in_nav&#39;, 14)"></td>
    <td width="10%"><img src="<?=$url?>/images/ec/yes.gif" onclick="listTable.toggle(this, &#39;toggle_is_show&#39;, 14)"></td>
    <td><span onclick="listTable.edit(this, &#39;edit_grade&#39;, 14)">0</span></td>
    <td width="10%" align="right"><span onclick="listTable.edit(this, &#39;edit_sort_order&#39;, 14)">50</span></td>
    <td width="24%" align="center">
      <a href="http://ec.com/admin/category.php?act=move&amp;cat_id=14">转移商品</a> |
      <a href="http://ec.com/admin/category.php?act=edit&amp;cat_id=14">编辑</a> |
      <a href="javascript:;" onclick="listTable.remove(14, &#39;您确认要删除这条记录吗?&#39;)" title="移除">移除</a>
    </td>
  </tr>
    <tr align="center" class="1" id="1_15">
    <td align="left" class="first-cell">
            <img src="<?=$url?>/images/ec/menu_minus.gif" id="icon_1_15" width="9" height="9" border="0" style="margin-left:1em" onclick="rowClicked(this)">
            <span><a href="http://ec.com/admin/goods.php?act=list&amp;cat_id=15">联通手机充值卡</a></span>
        </td>
    <td width="10%">2</td>
    <td width="10%"><span onclick="listTable.edit(this, &#39;edit_measure_unit&#39;, 15)"><!--  -->&nbsp;&nbsp;&nbsp;&nbsp;<!--  --></span></td>
    <td width="10%"><img src="<?=$url?>/images/ec/no.gif" onclick="listTable.toggle(this, &#39;toggle_show_in_nav&#39;, 15)"></td>
    <td width="10%"><img src="<?=$url?>/images/ec/yes.gif" onclick="listTable.toggle(this, &#39;toggle_is_show&#39;, 15)"></td>
    <td><span onclick="listTable.edit(this, &#39;edit_grade&#39;, 15)">0</span></td>
    <td width="10%" align="right"><span onclick="listTable.edit(this, &#39;edit_sort_order&#39;, 15)">50</span></td>
    <td width="24%" align="center">
      <a href="http://ec.com/admin/category.php?act=move&amp;cat_id=15">转移商品</a> |
      <a href="http://ec.com/admin/category.php?act=edit&amp;cat_id=15">编辑</a> |
      <a href="javascript:;" onclick="listTable.remove(15, &#39;您确认要删除这条记录吗?&#39;)" title="移除">移除</a>
    </td>
  </tr>
    <tr align="center" class="1" id="1_13">
    <td align="left" class="first-cell">
            <img src="<?=$url?>/images/ec/menu_minus.gif" id="icon_1_13" width="9" height="9" border="0" style="margin-left:1em" onclick="rowClicked(this)">
            <span><a href="http://ec.com/admin/goods.php?act=list&amp;cat_id=13">小灵通/固话充值卡</a></span>
        </td>
    <td width="10%">2</td>
    <td width="10%"><span onclick="listTable.edit(this, &#39;edit_measure_unit&#39;, 13)"><!--  -->&nbsp;&nbsp;&nbsp;&nbsp;<!--  --></span></td>
    <td width="10%"><img src="<?=$url?>/images/ec/no.gif" onclick="listTable.toggle(this, &#39;toggle_show_in_nav&#39;, 13)"></td>
    <td width="10%"><img src="<?=$url?>/images/ec/yes.gif" onclick="listTable.toggle(this, &#39;toggle_is_show&#39;, 13)"></td>
    <td><span onclick="listTable.edit(this, &#39;edit_grade&#39;, 13)">0</span></td>
    <td width="10%" align="right"><span onclick="listTable.edit(this, &#39;edit_sort_order&#39;, 13)">50</span></td>
    <td width="24%" align="center">
      <a href="http://ec.com/admin/category.php?act=move&amp;cat_id=13">转移商品</a> |
      <a href="http://ec.com/admin/category.php?act=edit&amp;cat_id=13">编辑</a> |
      <a href="javascript:;" onclick="listTable.remove(13, &#39;您确认要删除这条记录吗?&#39;)" title="移除">移除</a>
    </td>
  </tr>
  </tbody></table>
</div>
</form>


<script language="JavaScript">
<!--

onload = function()
{
  // 开始检查订单
  startCheckOrder();
}

var imgPlus = new Image();
imgPlus.src = "<?=$url?>/images/ec/menu_plus.gif";

/**
 * 折叠分类列表
 */
function rowClicked(obj)
{
  // 当前图像
  img = obj;
  // 取得上二级tr>td>img对象
  obj = obj.parentNode.parentNode;
  // 整个分类列表表格
  var tbl = document.getElementById("list-table");
  // 当前分类级别
  var lvl = parseInt(obj.className);
  // 是否找到元素
  var fnd = false;
  var sub_display = img.src.indexOf('menu_minus.gif') > 0 ? 'none' : (Browser.isIE) ? 'block' : 'table-row' ;
  // 遍历所有的分类
  for (i = 0; i < tbl.rows.length; i++)
  {
      var row = tbl.rows[i];
      if (row == obj)
      {
          // 找到当前行
          fnd = true;
          //document.getElementById('result').innerHTML += 'Find row at ' + i +"<br/>";
      }
      else
      {
          if (fnd == true)
          {
              var cur = parseInt(row.className);
              var icon = 'icon_' + row.id;
              if (cur > lvl)
              {
                  row.style.display = sub_display;
                  if (sub_display != 'none')
                  {
                      var iconimg = document.getElementById(icon);
                      iconimg.src = iconimg.src.replace('plus.gif', 'minus.gif');
                  }
              }
              else
              {
                  fnd = false;
                  break;
              }
          }
      }
  }

  for (i = 0; i < obj.cells[0].childNodes.length; i++)
  {
      var imgObj = obj.cells[0].childNodes[i];
      if (imgObj.tagName == "IMG" && imgObj.src != 'images/menu_arrow.gif')
      {
          imgObj.src = (imgObj.src == imgPlus.src) ? 'images/menu_minus.gif' : imgPlus.src;
      }
  }
}
//-->
</script>


