<?php
$this->load(array('admin/guestbook/index.js'));
?>
<div class="search">
    <?php echo $form_search->begin();?>联系电话：
    <input type="text" name="telphone" />&nbsp;
    <input type="submit" name="Submit" value="搜索" />
    <?php echo $form_search->end();?>
</div>
<table width="100%" border="0">
    <tr>
        <td><strong>ID</strong></td>
        <td><strong>联系手机</strong></td>
        <td><strong>留言内容</strong></td>
        <td><strong>操作</strong></td>
    </tr>

    <?php foreach ($data as $row) {?>
        <tr>
            <td><?=$row['id']?></td>
            <td><?=$row['telephone']?></td>
            <td><?=$row['content']?></td>
            <td><a href="javascript:;" onclick="deleteRecord(<?=$row['id']?>)">删除</a></td>
        </tr>
    <?php } ?>

    <tr>
        <td colspan="4" align="right"><?php echo $pager->html;?></td>
    </tr>
</table>