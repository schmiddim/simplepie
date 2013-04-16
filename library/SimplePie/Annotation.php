<?php
/**
 * This class handles Annotation Items.
 * 
 * 
 * @package SimplePie
 * @version 0.1 alpha
 * @copyright 2013 Michael Schmitt
 * @author Michael Schmitt (schmiddim@gmx.at)
 * @license GPL version 3 or any later version; http://www.gnu.org/copyleft/gpl.html
 * @link http://www.radikalblogger.de
 */
class SimplePie_Annotation extends SimplePie_Item{ 
	/**
	 * Create a new annotation object
	 *
	 * This is usually used by {@see SimplePie::get_items} and
	 * {@see SimplePie::get_item}. Avoid creating this manually.
	 *
	 * @param SimplePie $feed Parent feed
	 * @param array $data Raw data
	 */
	public function __construct($feed, $data)
	{
		parent::__construct($feed, $data);
		/**
		 * @todo set pubdate,create methods....
		 * 
		 */
		
		
	}
	public function get_date($date_format = 'j F Y, g:i a'){
		if (!isset($this->data['date']))
		{
		
			if ($return = $this->get_item_tags(ANNOTATION_NAMESPACE, 'pubdate'))
			{
				$parser = $this->registry->call('Parse_Date', 'get');
				$date =$this->data['child'][ANNOTATION_NAMESPACE]['pubdate'][0]['data'];
	
			
			}
		}
	}

}
