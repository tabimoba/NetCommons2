<?php

/**
 * ファイル添付アクションクラス
 *
 * @package     NetCommons Components
 * @author      WithOne Company Limited.
 * @copyright   2006-2007 NetCommons Project, 2011 WithOne Company Limited.
 * @license     http://www.netcommons.org/license.txt  NetCommons License
 * @project     NetCommons Project, supported by National Institute of Informatics
 * @access	public
 */
class Circular_Action_Main_Upload_Attachment extends Action
{
	// 使用コンポーネントを受け取るため
	var $uploadsAction = null;

	/**
	 * ファイル添付アクション
	 *
	 * @access  public
	 */
	function execute()
	{
		$this->uploadsAction->uploads();

		return true;
	}
}
?>
