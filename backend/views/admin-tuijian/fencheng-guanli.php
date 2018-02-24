
<div style="clear:both"></div>
</h1>
<script type="text/javascript" src="./fencheng-guanli_files/utils.js"></script><script type="text/javascript" src="./fencheng-guanli_files/listtable.js"></script><div class="form-div">
<form action="http://ec.com/admin/affiliate_ck.php?act=list">
  按操作状态查找:  <a href="http://ec.com/admin/affiliate_ck.php?act=list">全部</a>
  <a href="http://ec.com/admin/affiliate_ck.php?act=list&amp;status=0">等待处理</a>
  <a href="http://ec.com/admin/affiliate_ck.php?act=list&amp;status=1">已分成</a>
  <a href="http://ec.com/admin/affiliate_ck.php?act=list&amp;status=2">取消分成</a>
搜索订单号
<input type="hidden" name="act" value="list">
<input name="order_sn" type="text" id="order_sn" size="15"><input type="submit" value=" 搜索 " class="button">
</form>
</div>
<form method="post" action="" name="listForm">
<div class="list-div" id="listDiv">
<!--  -->
<table cellspacing="1" cellpadding="3">
<tbody><tr>
  <th width="20%">订单号</th>
  <th width="8%">订单状态</th>
  <th width="8%">操作状态</th>
  <th>操作信息</th>
  <th width="8%">分成类型</th>
  <th width="10%">操作</th>
</tr>
<!--  -->
    <tr><td class="no-records" colspan="10" style="background-color: rgb(255, 255, 255);">没有找到任何记录</td></tr>
<!--  -->
</tbody></table>
  <table cellpadding="4" cellspacing="0">
    <tbody><tr>
      <td align="right" style="background-color: rgb(255, 255, 255);">      <!-- $Id: page.htm 14216 2008-03-10 02:27:21Z testyang $ -->
            <div id="turn-page">
        总计  <span id="totalRecords">0</span>
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
<!--  -->
</div>
</form>
