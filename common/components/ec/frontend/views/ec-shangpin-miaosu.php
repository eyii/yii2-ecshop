<div id="shangpin-miaoshu<?=$this->context->id?>">
<div class="box">
    <div class="box_1">
        <h3 style="padding:0 5px;">
            <div id="com_b" class="history clearfix">
                <h2 style="cursor: pointer;">商品描述：</h2>
                <h2 class="h2bg" style="cursor: pointer;">商品属性</h2>
            </div>
        </h3>
        <div id="com_v" class="boxCenterList RelaArticle">
            <blockquote v-html="items.goods_desc"></blockquote>
        </div>
        <div id="com_h" class="none" >
             <blockquote>
                <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#dddddd">
                    <tbody><tr>
                        <th colspan="2" bgcolor="#FFFFFF">商品属性</th>
                    </tr>
                    <tr>
                        <td bgcolor="#FFFFFF" align="left" width="30%" class="f1">[屏幕大小]</td>
                        <td bgcolor="#FFFFFF" align="left" width="70%">1.75英寸</td>
                    </tr>
                    <tr>
                        <td bgcolor="#FFFFFF" align="left" width="30%" class="f1">[中文输入法]</td>
                        <td bgcolor="#FFFFFF" align="left" width="70%">支持</td>
                    </tr>
                    <tr>
                        <td bgcolor="#FFFFFF" align="left" width="30%" class="f1">[外观样式]</td>
                        <td bgcolor="#FFFFFF" align="left" width="70%">直板</td>
                    </tr>
                    </tbody></table>
            </blockquote>
        </div>
    </div>
</div>
</div>
<script>
    new Vue({
        el:'#shangpin-miaoshu<?=$this->context->id?>',
        data:{
            items:<?=$items?>
        }

    })
</script>