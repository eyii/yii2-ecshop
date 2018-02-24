<div id="youhui<?=$this->context->id?>">
    <div v-for="item in items">
    <DIV class=blank></DIV>
<table border="0" cellSpacing="1" cellPadding="5" width="100%" bgColor="#dddddd" >
    <tbody>
    <tr>
        <th bgColor=#ffffff>优惠活动名称：</th>
        <td bgColor=#ffffff colspan=3>{{item.act_name}}</td></tr>
    <tr>
        <th bgColor=#ffffff>优惠开始时间：</th>
        <td bgColor=#ffffff width=200>{{item.start_time}}</td>
        <th bgColor=#ffffff>金额上限：</th>
        <td bgColor=#ffffff>{{item.max_amount}}</td></tr>
    <tr>
        <th bgColor=#ffffff>优惠结束时间：</th>
        <td bgColor=#ffffff>{{item.end_time}}</td>
        <th bgColor=#ffffff>金额下限：</th>
        <td bgColor=#ffffff width=200>{{item.min_amount}}</td></tr>
    <tr>
        <th bgColor=#ffffff>优惠范围：</th>
        <td bgColor=#ffffff>以下品牌 :<br>
            <a class="f6" href="http://ec.com/brand.php?id=1" taget="_blank">
             <span class=f_user_info><u>{{item.act_range_ext}}</u></span>
            </a> 
        </td>
        <th bgColor=#ffffff>享受优惠的会员等级：</th>
        <td bgColor=#ffffff>注册用户 vip </td></tr>
    <tr>
        <th bgColor=#ffffff>优惠方式：</th>
        <td bgColor=#ffffff colspan=3>享受价格折扣{{item.act_type_ext}}.00% </td></tr></tbody>
</table>
    </div>
</div>
<script>
    new Vue({
        el:'#youhui<?=$this->context->id?>',
        data:{
            items:<?=$items?>
        }
    })
</script>