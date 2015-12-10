<?php
defined('_JEXEC') or die;

class PlgMediaEditorExample extends JPlugin
{
	public function onMediaEditorDisplay($filePath, $postUrl)
	{
		// @suggestion: Add CSS, JavaScript

		$data   = array('filePath' => $filePath, 'postUrl' => $postUrl);
		$layout = new JLayoutFile('form', __DIR__ . '/layout');
		$html   = $layout->render($data);

		return $html;
	}

	public function onMediaEditorProcess($filePath)
	{
		$image = new JImage($filePath);

		if ($image->isLoaded() == false)
		{
			throw new LogicException('Failed to load image');
		}

		$image->rotate(180, 0, false);

		$extension = JFile::getExt($filePath);

		if (in_array($extension, array('png', 'gif')))
		{
			$imageType = $extension;
		}
		else
		{
			$imageType = 'jpg';
		}

		$image->toFile($filePath, $imageType);
	}
}