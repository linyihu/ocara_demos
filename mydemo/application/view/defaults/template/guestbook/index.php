<?php echo $form_edit->begin();?>
    <table width="798" border="0">
        <tr>
            <td height="42" colspan="2">请留言：</td></tr>
        <tr>
            <td width="119" height="46">您的联系方式：</td>
            <td width="669">
                <label>
                    <?php echo $form_edit->text('telephone');?></label></td>
        </tr>
        <tr>
            <td height="48">留言：</td>
            <td>
                <label>
                    <?php echo $form_edit->textarea('content');?></label></td>
        </tr>
        <tr>
            <td height="48">&nbsp;</td>
            <td>
                <label>
                    <input type="submit" name="Submit" value="提交" />
                    <input type="reset" name="Submit2" value="重置" /></label>
            </td>
        </tr>
    </table>
<?php echo $form_edit->end();?>