# Example Media Editor Plugin
Example of a Media Editor plugin for Joomla. A Media Editor plugin is able to modify media through the Joomla Media
Manager. The Media Manager is able to generate an editor for a specific file type (image, video, PDF) and this editor
is based on a Media Editor Plugin.

## Usage
Manually call the following URL to test this plugin:
```
index.php?option=com_media&task=file.editor&plugin=example&file=images/powered_by.png
```

The argument `task=file.editor` refers to the file controller `pudding()` method.
The `plugin=example` argument refers to this plugin.
The `file=images/powered_by.png` argument refers to an existing image, so make sure it exists.

This URL should provide you with simple form with a single submit button. Pressing the submit button will rotate the given image.