<?php
class WTemplate
{
	var $vars; // Holds all the template variables

	/**
	 * Set a template variable.
	 */
	public function set($name, $value)
	{
		$this->vars[$name] = $value;

		// Return this object
		return $this;
	}

	/**
	 * Open, parse, and return the template file.
	 *
	 * @param $file string the template file name
	 */
	public function fetch($file=null, $path = "/modules/mod_wsslider/templates")
	{
		$defaultPath = JPATH_ROOT . $path . "/";

		$file = $defaultPath . $file;

		// Template variable: the rest.
		if($this->vars)
		{
			extract($this->vars, EXTR_REFS);
		}

		if(!JFile::exists($file))
		{
			$mainframe	= JFactory::getApplication();
			$mainframe->enqueueMessage( JText::sprintf('MOD__TEMPLATE_FILE_NOT_FOUND' , $file . '.php' ) , 'error' );
			return;
		}

		ob_start();                     // Start output buffering
		require($file); 				// Include the file
		$contents = ob_get_contents();  // Get the contents of the buffer
		ob_end_clean();                 // End buffering and discard

		return $contents;               // Return the contents
	}
}