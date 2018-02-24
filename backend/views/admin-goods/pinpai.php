<?php
$url=Yii::getAlias('all');
?>
<!-- 品牌搜索 -->
<!-- $Id: brand_search.htm 2009-05-04 liuhui $ -->
<div class="form-div">
  <form action="javascript:search_brand()" name="searchForm">
    <img src="<?=$url?>/images/ec/icon_search.gif" width="26" height="22" border="0" alt="SEARCH">
     <input type="text" name="brand_name" size="15">
    <input type="submit" value=" 搜索 " class="button">
  </form>
</div>


<form method="post" action="" name="listForm">
<!-- start brand list -->
<div class="list-div" id="listDiv">

  <table cellpadding="3" cellspacing="1">
    <tbody><tr>
      <th>品牌名称</th>
      <th>品牌网址</th>
      <th>品牌描述</th>
      <th>排序</th>
      <th>是否显示</th>
      <th>操作</th>
    </tr>
        <tr>
      <td class="first-cell" style="background-color: rgb(255, 255, 255);">
        <span style="float:right"><a href="http://ec.com/data/brandlogo/1240803062307572427.gif" target="_brank"><img src="<?=$url?>/images/ec/picflag.gif" width="16" height="16" border="0" alt="品牌LOGO"></a></span>
        <span onclick="javascript:listTable.edit(this, &#39;edit_brand_name&#39;, 1)">诺基亚</span>
      </td>
      <td style="background-color: rgb(255, 255, 255);"><a href="http://www.nokia.com.cn/" target="_brank">http://www.nokia.com.cn/</a></td>
      <td align="left" style="background-color: rgb(255, 255, 255);">公司网站：http://www.nokia.com.cn/

客服电话：...</td>
      <td align="right" style="background-color: rgb(255, 255, 255);"><span onclick="javascript:listTable.edit(this, &#39;edit_sort_order&#39;, 1)">50</span></td>
      <td align="center" style="background-color: rgb(255, 255, 255);"><img src="<?=$url?>/images/ec/yes.gif" onclick="listTable.toggle(this, &#39;toggle_show&#39;, 1)"></td>
      <td align="center" style="background-color: rgb(255, 255, 255);">
        <a href="http://ec.com/admin/brand.php?act=edit&amp;id=1" title="编辑">编辑</a> |
        <a href="javascript:;" onclick="listTable.remove(1, &#39;你确认要删除选定的商品品牌吗？&#39;)" title="编辑">移除</a> 
      </td>
    </tr>
        <tr>
      <td class="first-cell" style="background-color: rgb(255, 255, 255);">
        <span style="float:right"><a href="http://ec.com/data/brandlogo/1240802922410634065.gif" target="_brank"><img src="<?=$url?>/images/ec/picflag.gif" width="16" height="16" border="0" alt="品牌LOGO"></a></span>
        <span onclick="javascript:listTable.edit(this, &#39;edit_brand_name&#39;, 2)">摩托罗拉</span>
      </td>
      <td style="background-color: rgb(255, 255, 255);"><a href="http://www.motorola.com.cn/" target="_brank">http://www.motorola.com.cn</a></td>
      <td align="left" style="background-color: rgb(255, 255, 255);">官方咨询电话：4008105050
售后网点：http://www.mo...</td>
      <td align="right" style="background-color: rgb(255, 255, 255);"><span onclick="javascript:listTable.edit(this, &#39;edit_sort_order&#39;, 2)">50</span></td>
      <td align="center" style="background-color: rgb(255, 255, 255);"><img src="<?=$url?>/images/ec/yes.gif" onclick="listTable.toggle(this, &#39;toggle_show&#39;, 2)"></td>
      <td align="center" style="background-color: rgb(255, 255, 255);">
        <a href="http://ec.com/admin/brand.php?act=edit&amp;id=2" title="编辑">编辑</a> |
        <a href="javascript:;" onclick="listTable.remove(2, &#39;你确认要删除选定的商品品牌吗？&#39;)" title="编辑">移除</a> 
      </td>
    </tr>
        <tr>
      <td class="first-cell" style="background-color: rgb(255, 255, 255);">
        <span style="float:right"><a href="http://ec.com/data/brandlogo/1240803144788047486.gif" target="_brank"><img src="<?=$url?>/images/ec/picflag.gif" width="16" height="16" border="0" alt="品牌LOGO"></a></span>
        <span onclick="javascript:listTable.edit(this, &#39;edit_brand_name&#39;, 3)">多普达</span>
      </td>
      <td style="background-color: rgb(255, 255, 255);"><a href="http://www.dopod.com/" target="_brank">http://www.dopod.com </a></td>
      <td align="left" style="background-color: rgb(255, 255, 255);">官方咨询电话：4008201668
售后网点：http://www.do...</td>
      <td align="right" style="background-color: rgb(255, 255, 255);"><span onclick="javascript:listTable.edit(this, &#39;edit_sort_order&#39;, 3)">50</span></td>
      <td align="center" style="background-color: rgb(255, 255, 255);"><img src="<?=$url?>/images/ec/yes.gif" onclick="listTable.toggle(this, &#39;toggle_show&#39;, 3)"></td>
      <td align="center" style="background-color: rgb(255, 255, 255);">
        <a href="http://ec.com/admin/brand.php?act=edit&amp;id=3" title="编辑">编辑</a> |
        <a href="javascript:;" onclick="listTable.remove(3, &#39;你确认要删除选定的商品品牌吗？&#39;)" title="编辑">移除</a> 
      </td>
    </tr>

  </tbody></table>

<!-- end brand list -->
</div>
</form>

