<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Show Google Adsense block on your site
 * 
 * @author		Gavin Sharp
 */
class Widget_Google_adsense extends Widgets
{

	/**
	 * The translations for the widget title
	 *
	 * @var array
	 */
	public $title = array(
		'en' => 'Google Adsense',
	);

	/**
	 * The translations for the widget description
	 *
	 * @var array
	 */
	public $description = array(
		'en' => 'Display Google Adsense on your site',
	);

	/**
	 * The author of the widget
	 *
	 * @var string
	 */
	public $author = 'Gavin Sharp';

	/**
	 * The author's website.
	 * 
	 * @var string 
	 */
	public $website = 'http://www.gavinsharp.co.uk';

	/**
	 * The version of the widget
	 *
	 * @var string
	 */
	public $version = '1.0';

	/**
	 * The fields for customizing the options of the widget.
	 *
	 * @var array 
	 */
	public $fields = array(
		array(
			'field' => 'client',
			'label' => 'Client',
			'rules' => 'required'
		),
		array(
			'field' => 'slot',
			'label' => 'Slot',
			'rules' => 'required'
		),
		array(
			'field' => 'width',
			'label' => 'Width',
			'rules' => 'required'
		),
		array(
			'field' => 'height',
			'label' => 'Height',
			'rules' => 'required'
		)
	);

	/**
	 * The main function of the widget.
	 *
	 * @param array $options The options for displaying an ad block widget.
	 * @return array 
	 */
	public function run($options)
	{
		return $options;
	}

}
