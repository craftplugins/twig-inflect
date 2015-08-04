<?php

namespace JoshuaBaker\Twig\Extensions\Extension;

use ICanBoogie\Inflector;
use Twig_Extension;
use Twig_Filter_Method;

class Inflect extends \Twig_Extension
{
	protected $inflector;

	public function __construct()
	{
		$this->inflector = Inflector::get();
	}

	public function getName()
	{
		return 'inflect';
	}

	public function getFilters()
	{
		return array(
			new \Twig_Filter_Method($this, 'pluralize'),
			new \Twig_Filter_Method($this, 'singularize'),
			new \Twig_Filter_Method($this, 'camelize'),
			new \Twig_Filter_Method($this, 'dasherize'),
			new \Twig_Filter_Method($this, 'humanize'),
			new \Twig_Filter_Method($this, 'hyphenate'),
			new \Twig_Filter_Method($this, 'ordinalize'),
			new \Twig_Filter_Method($this, 'pascalize'),
			new \Twig_Filter_Method($this, 'slugify'),
			new \Twig_Filter_Method($this, 'titleize'),
			new \Twig_Filter_Method($this, 'underscore'),
		);
	}

	public function pluralize($content, $num = 2)
	{
		return $this->inflector->pluralize($content, $num);
	}

	public function singularize($content)
	{
		return $this->inflector->singularize($content);
	}

	public function camelize($content)
	{
		return $this->inflector->camelize($content, true);
	}

	public function dasherize($content)
	{
		return $this->inflector->dasherize($content);
	}

	public function humanize($content)
	{
		return $this->inflector->humanize($content);
	}

	public function hyphenate($content)
	{
		return $this->inflector->hyphenate($content);
	}

	public function ordinalize($content)
	{
		return $this->inflector->hyphenate($content);
	}

	public function pascalize($content)
	{
		return $this->inflector->camelize($content, false);
	}

	public function titleize($content)
	{
		return $this->inflector->titleize($content, false);
	}

	public function underscore($content)
	{
		return $this->inflector->underscore($content);
	}

}
