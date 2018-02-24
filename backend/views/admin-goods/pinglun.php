<?php
$url=Yii::getAlias('all');
?>
<div style="clear:both"></div>
</h1>

<div class="form-div">
  <form action="javascript:searchComment()" name="searchForm">
    <img src="<?=$url?>/images/ec/icon_search.gif" width="26" height="22" border="0" alt="SEARCH">
    输入评论内容 <input type="text" name="keyword"> <input type="submit" class="Button" value=" 搜索 ">
  </form>
</div>

<form method="POST" action="http://ec.com/admin/comment_manage.php?act=batch_drop" name="listForm" onsubmit="return confirm_bath()">

<!-- start comment list -->
<div class="list-div" id="listDiv">

<table cellpadding="3" cellspacing="1">
  <tbody><tr>
    <th>
      <input onclick="listTable.selectAll(this, &quot;checkboxes&quot;)" type="checkbox">
      <a href="javascript:listTable.sort(&#39;comment_id&#39;); ">编号</a> </th>
    <th><a href="javascript:listTable.sort(&#39;user_name&#39;); ">用户名</a></th>
    <th><a href="javascript:listTable.sort(&#39;comment_type&#39;); ">类型</a></th>
    <th><a href="javascript:listTable.sort(&#39;id_value&#39;); ">评论对象</a></th>
    <th><a href="javascript:listTable.sort(&#39;ip_address&#39;); ">IP地址</a></th>
    <th><a href="javascript:listTable.sort(&#39;add_time&#39;); ">评论时间</a><img src="<?=$url?>/images/ec/sort_desc.gif"></th>
    <th>状态</th>
    <th>操作</th>
  </tr>
    <tr>
    <td><input value="2" name="checkboxes[]" type="checkbox">2</td>
    <td>ecshop</td>
    <td>商品</td>
    <td><a href="http://ec.com/goods.php?id=22" target="_blank">多普达Touch HD</a></td>
    <td>0.0.0.0</td>
    <td align="center">2009-05-12 21:48:15</td>
    <td align="center">隐藏</td>
    <td align="center">
      <a href="http://ec.com/admin/comment_manage.php?act=reply&amp;id=2">查看详情</a> |
      <a href="javascript:" onclick="listTable.remove(2, &#39;您确认要删除这条记录吗?&#39;)">移除</a>
    </td>
  </tr>
      <tr>
    <td><input value="1" name="checkboxes[]" type="checkbox">1</td>
    <td>ecshop</td>
    <td>商品</td>
    <td><a href="http://ec.com/goods.php?id=12" target="_blank">摩托罗拉A810</a></td>
    <td>0.0.0.0</td>
    <td align="center">2009-05-12 21:45:20</td>
    <td align="center">显示</td>
    <td align="center">
      <a href="http://ec.com/admin/comment_manage.php?act=reply&amp;id=1">查看详情</a> |
      <a href="javascript:" onclick="listTable.remove(1, &#39;您确认要删除这条记录吗?&#39;)">移除</a>
    </td>
  </tr>
      </tbody></table>

  <table cellpadding="4" cellspacing="0">
    <tbody><tr>
      <td>
      <div>
      <select name="sel_action">
        <option value="remove">删除评论</option>
        <option value="allow">允许显示</option>
        <option value="deny">禁止显示</option>
      </select>
      <input type="hidden" name="act" value="batch">
      <input type="submit" name="drop" id="btnSubmit" value=" 确定 " class="button" disabled="true"></div></td>
      <td align="right">      <!-- $Id: page.htm 14216 2008-03-10 02:27:21Z testyang $ -->
            <div id="turn-page">
        总计  <span id="totalRecords">2</span>
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
<!-- end comment list -->

</form>
