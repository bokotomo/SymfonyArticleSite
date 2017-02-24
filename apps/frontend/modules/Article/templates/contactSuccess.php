<script>
<?php if ($contactCompleFlag == true)echo 'alert("メールが送信されました。");' ?>
</script>
<?php echo $form->renderFormTag(url_for('contact_page')) ?>
<table>
<?php echo $form; ?>
</table>
<input type="submit" value="送信する">
</form>
