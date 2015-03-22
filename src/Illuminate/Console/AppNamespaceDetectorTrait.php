<?php namespace Illuminate\Console;

trait AppNamespaceDetectorTrait {

	/**
	 * Get the application namespace from the Kernel object.
	 *
	 * @return string
	 */
	protected function getAppNamespace()
	{
		return app()->getNamespace();
	}

}
