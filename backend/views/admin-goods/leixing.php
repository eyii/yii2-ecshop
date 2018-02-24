<?php
$url=Yii::getAlias('all');
?>


<form method="post" action="" name="listForm">
<!-- start goods type list -->
<div class="list-div" id="listDiv">

<table width="100%" cellpadding="3" cellspacing="1" id="listTable">
  <tbody><tr>
    <th>商品类型名称</th>
    <th>属性分组</th>
    <th>属性数</th>
    <th>状态</th>
    <th>操作</th>
  </tr>
    <tr>
    <td class="first-cell" style="background-color: rgb(255, 255, 255);"><span onclick="javascript:listTable.edit(this, &#39;edit_type_name&#39;, 1)">书</span></td>
    <td style="background-color: rgb(255, 255, 255);"></td>
    <td align="right" style="background-color: rgb(255, 255, 255);">12</td>
    <td align="center" style="background-color: rgb(255, 255, 255);"><img src="<?=$url?>/images/ec/yes.gif"></td>
    <td align="center" style="background-color: rgb(255, 255, 255);">
      <a href="http://ec.com/admin/attribute.php?act=list&amp;goods_type=1" title="属性列表">属性列表</a> |
      <a href="http://ec.com/admin/goods_type.php?act=edit&amp;cat_id=1" title="编辑">编辑</a> |
      <a href="javascript:;" onclick="listTable.remove(1, &#39;删除商品类型将会清除该类型下的所有属性。\n您确定要删除选定的商品类型吗？&#39;)" title="移除">移除</a>
    </td>
  </tr>
    <tr>
    <td class="first-cell"><span onclick="javascript:listTable.edit(this, &#39;edit_type_name&#39;, 2)">音乐</span></td>
    <td></td>
    <td align="right">19</td>
    <td align="center"><img src="<?=$url?>/images/ec/yes.gif"></td>
    <td align="center">
      <a href="http://ec.com/admin/attribute.php?act=list&amp;goods_type=2" title="属性列表">属性列表</a> |
      <a href="http://ec.com/admin/goods_type.php?act=edit&amp;cat_id=2" title="编辑">编辑</a> |
      <a href="javascript:;" onclick="listTable.remove(2, &#39;删除商品类型将会清除该类型下的所有属性。\n您确定要删除选定的商品类型吗？&#39;)" title="移除">移除</a>
    </td>
  </tr>
    <tr>
    <td class="first-cell"><span onclick="javascript:listTable.edit(this, &#39;edit_type_name&#39;, 3)">电影</span></td>
    <td></td>
    <td align="right">24</td>
    <td align="center"><img src="<?=$url?>/images/ec/yes.gif"></td>
    <td align="center">
      <a href="http://ec.com/admin/attribute.php?act=list&amp;goods_type=3" title="属性列表">属性列表</a> |
      <a href="http://ec.com/admin/goods_type.php?act=edit&amp;cat_id=3" title="编辑">编辑</a> |
      <a href="javascript:;" onclick="listTable.remove(3, &#39;删除商品类型将会清除该类型下的所有属性。\n您确定要删除选定的商品类型吗？&#39;)" title="移除">移除</a>
    </td>
  </tr>
    <tr>
    <td class="first-cell" style="background-color: rgb(255, 255, 255);"><span onclick="javascript:listTable.edit(this, &#39;edit_type_name&#39;, 4)">手机</span></td>
    <td style="background-color: rgb(255, 255, 255);"></td>
    <td align="right" style="background-color: rgb(255, 255, 255);">26</td>
    <td align="center" style="background-color: rgb(255, 255, 255);"><img src="<?=$url?>/images/ec/yes.gif"></td>
    <td align="center" style="background-color: rgb(255, 255, 255);">
      <a href="http://ec.com/admin/attribute.php?act=list&amp;goods_type=4" title="属性列表">属性列表</a> |
      <a href="http://ec.com/admin/goods_type.php?act=edit&amp;cat_id=4" title="编辑">编辑</a> |
      <a href="javascript:;" onclick="listTable.remove(4, &#39;删除商品类型将会清除该类型下的所有属性。\n您确定要删除选定的商品类型吗？&#39;)" title="移除">移除</a>
    </td>
  </tr>
    <tr>
    <td class="first-cell"><span onclick="javascript:listTable.edit(this, &#39;edit_type_name&#39;, 5)">笔记本电脑</span></td>
    <td></td>
    <td align="right">19</td>
    <td align="center"><img src="<?=$url?>/images/ec/yes.gif"></td>
    <td align="center">
      <a href="http://ec.com/admin/attribute.php?act=list&amp;goods_type=5" title="属性列表">属性列表</a> |
      <a href="http://ec.com/admin/goods_type.php?act=edit&amp;cat_id=5" title="编辑">编辑</a> |
      <a href="javascript:;" onclick="listTable.remove(5, &#39;删除商品类型将会清除该类型下的所有属性。\n您确定要删除选定的商品类型吗？&#39;)" title="移除">移除</a>
    </td>
  </tr>
    <tr>
    <td class="first-cell"><span onclick="javascript:listTable.edit(this, &#39;edit_type_name&#39;, 6)">数码相机</span></td>
    <td></td>
    <td align="right">41</td>
    <td align="center"><img src="<?=$url?>/images/ec/yes.gif"></td>
    <td align="center">
      <a href="http://ec.com/admin/attribute.php?act=list&amp;goods_type=6" title="属性列表">属性列表</a> |
      <a href="http://ec.com/admin/goods_type.php?act=edit&amp;cat_id=6" title="编辑">编辑</a> |
      <a href="javascript:;" onclick="listTable.remove(6, &#39;删除商品类型将会清除该类型下的所有属性。\n您确定要删除选定的商品类型吗？&#39;)" title="移除">移除</a>
    </td>
  </tr>
    <tr>
    <td class="first-cell"><span onclick="javascript:listTable.edit(this, &#39;edit_type_name&#39;, 7)">数码摄像机</span></td>
    <td></td>
    <td align="right">23</td>
    <td align="center"><img src="<?=$url?>/images/ec/yes.gif"></td>
    <td align="center">
      <a href="http://ec.com/admin/attribute.php?act=list&amp;goods_type=7" title="属性列表">属性列表</a> |
      <a href="http://ec.com/admin/goods_type.php?act=edit&amp;cat_id=7" title="编辑">编辑</a> |
      <a href="javascript:;" onclick="listTable.remove(7, &#39;删除商品类型将会清除该类型下的所有属性。\n您确定要删除选定的商品类型吗？&#39;)" title="移除">移除</a>
    </td>
  </tr>
    <tr>
    <td class="first-cell"><span onclick="javascript:listTable.edit(this, &#39;edit_type_name&#39;, 8)">化妆品</span></td>
    <td></td>
    <td align="right">7</td>
    <td align="center"><img src="<?=$url?>/images/ec/yes.gif"></td>
    <td align="center">
      <a href="http://ec.com/admin/attribute.php?act=list&amp;goods_type=8" title="属性列表">属性列表</a> |
      <a href="http://ec.com/admin/goods_type.php?act=edit&amp;cat_id=8" title="编辑">编辑</a> |
      <a href="javascript:;" onclick="listTable.remove(8, &#39;删除商品类型将会清除该类型下的所有属性。\n您确定要删除选定的商品类型吗？&#39;)" title="移除">移除</a>
    </td>
  </tr>
    <tr>
    <td class="first-cell"><span onclick="javascript:listTable.edit(this, &#39;edit_type_name&#39;, 9)">精品手机</span></td>
    <td></td>
    <td align="right">39</td>
    <td align="center"><img src="<?=$url?>/images/ec/yes.gif"></td>
    <td align="center">
      <a href="http://ec.com/admin/attribute.php?act=list&amp;goods_type=9" title="属性列表">属性列表</a> |
      <a href="http://ec.com/admin/goods_type.php?act=edit&amp;cat_id=9" title="编辑">编辑</a> |
      <a href="javascript:;" onclick="listTable.remove(9, &#39;删除商品类型将会清除该类型下的所有属性。\n您确定要删除选定的商品类型吗？&#39;)" title="移除">移除</a>
    </td>
  </tr>
      <tr>
      <td align="right" nowrap="true" colspan="6">
            <!-- $Id: page.htm 14216 2008-03-10 02:27:21Z testyang $ -->
            <div id="turn-page">
        总计  <span id="totalRecords">9</span>
        个记录分为 <span id="totalPages">1</span>
        页当前第 <span id="pageCurrent">1</span>
        页，每页 <input type="text" size="3" id="pageSize" value="15" onkeypress="return listTable.changePageSize(event)">
        <span id="page-link">
          <a href="javascript:listTable.gotoPageFirst()">第一页</a>
          <a href="javascript:listTable.gotoPagePrev()">上一页</a>
          <a href="javascript:listTable.gotoPageNext()">下一页</a>
          <a href="javascript:listTable.gotoPageLast()">最末页</a>
          <select id="gotoPage" onchange="listTable.gotoPage(this.value)">
            <option value="1">1</option>          </select>
        </span>
      </div>
      </td>
    </tr>
  </tbody></table>

</div>
<!-- end goods type list -->
</form>

<script type="text/javascript" language="JavaScript">
<!--
  listTable.recordCount = 9;
  listTable.pageCount = 1;

    listTable.filter.record_count = '9';
    listTable.filter.page_size = '15';
    listTable.filter.page = '1';
    listTable.filter.page_count = '1';
    listTable.filter.start = '0';
   
  
  onload = function()
  {
    // 开始检查订单
    startCheckOrder();
  }

//-->
</script>

