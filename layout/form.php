<?php
defined('_JEXEC') or die;

$filePath = $displayData['filePath'];
$postUrl = $displayData['postUrl'];
?>
<h1>File "<?php echo basename($filePath); ?>"</h1>

<p>
	Submit this form to do an awesome rotation of this file.
</p>

<form method="post" action="<?php echo $postUrl ?>">
	<input type="submit" name="Rotate" />
	<input type="hidden" name="file" value="<?php echo $filePath ?>" />
	<?php echo JHTML::_( 'form.token' ); ?>
</form>
