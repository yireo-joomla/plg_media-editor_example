<?php
class PlgMediaEditorExample extends JPlugin
{
    public function onMediaEditorDisplay($filePath)
    {
        // @suggestion: Add CSS, JavaScript
        // @suggestion: Render your own JLayout

        return 'Example Media Edit Plugin';
    }

    public function onMediaEditorProcess($filePath)
    {
        $image = new JImage($filePath);
        $image->rotate(180, -1, false);
    }
}
