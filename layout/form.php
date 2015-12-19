<?php
defined('_JEXEC') or die;

$filePath = $displayData['filePath'];
?>
<h1>File "<?php echo basename($filePath); ?>"</h1>

<p>
	Submit this form to do an awesome rotation of this file.
</p>

<input type="submit" name="Rotate" />
<input type="hidden" name="file" value="<?php echo $filePath ?>" />