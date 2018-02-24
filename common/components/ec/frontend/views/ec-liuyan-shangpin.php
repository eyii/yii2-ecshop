<div id="ECS_COMMENT">
    <div class="box">
        <div class="box_1">
            <h3><span class="text">用户评论</span>(共<font class="f1">0</font>条评论)</h3>
            <div class="boxCenterList clearfix" style="height:1%;">
                <ul class="comments">
                    <li>暂时还没有任何用户评论</li>
                </ul>

                <div id="pagebar" class="f_r">
                    <form name="selectPageForm" action="http://ec.com/goods.php" method="get">
                        <div id="pager">
                            总计 0 个记录，共 1 页。 <span>
          <a href="javascript:gotoPage(1,8,0)">第一页</a> 
          <a href="javascript:;">上一页</a> 
          <a href="javascript:;">下一页</a> 
          <a href="javascript:;">最末页</a> 
          </span>
                        </div>
                    </form>

                </div>

                <div class="blank5"></div>

                <div class="commentsList">
                    <form action="javascript:;" onsubmit="submitComment(this)" method="post" name="commentForm" id="commentForm">
                        <table width="710" border="0" cellspacing="5" cellpadding="0">
                            <tbody><tr>
                                <td width="64" align="right">用户名：</td>
                                <td width="631">匿名用户</td>
                            </tr>
                            <tr>
                                <td align="right">E-mail：</td>
                                <td>
                                    <input type="text" name="email" id="email" maxlength="100" value="" class="inputBorder">
                                </td>
                            </tr>
                            <tr>
                                <td align="right">评价等级：</td>
                                <td>
                                    <input name="comment_rank" type="radio" value="1" id="comment_rank1"> <img src="<?=$url?>/images/home/stars1.gif">
                                    <input name="comment_rank" type="radio" value="2" id="comment_rank2"> <img src="<?=$url?>/images/home/stars2.gif">
                                    <input name="comment_rank" type="radio" value="3" id="comment_rank3"> <img src="<?=$url?>/images/home/stars3.gif">
                                    <input name="comment_rank" type="radio" value="4" id="comment_rank4"> <img src="<?=$url?>/images/home/stars4.gif">
                                    <input name="comment_rank" type="radio" value="5" checked="checked" id="comment_rank5"> <img src="<?=$url?>/images/home/stars5.gif">
                                </td>
                            </tr>
                            <tr>
                                <td align="right" valign="top">评论内容：</td>
                                <td>
                                    <textarea name="content" class="inputBorder" style="height:50px; width:620px;"></textarea>
                                    <input type="hidden" name="cmt_type" value="0">
                                    <input type="hidden" name="id" value="8">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div style="padding-left:15px; text-align:left; float:left;">
                                        验证码：<input type="text" name="captcha" class="inputBorder" style="width:50px; margin-left:5px;">
                                        <img src="<?=$url?>/images/home/captcha.php" alt="captcha" onclick="this.src=&#39;captcha.php?&#39;+Math.random()" class="captcha">
                                    </div>
                                    <input name="" type="submit" value="" class="f_r" style="border:none; background:url(themes/default/images/commentsBnt.gif); width:75px; height:21px; margin-right:8px;">
                                </td>
                            </tr>
                            </tbody></table>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <div class="blank5"></div>


</div>