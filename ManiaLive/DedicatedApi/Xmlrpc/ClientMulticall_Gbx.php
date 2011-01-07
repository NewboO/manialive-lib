<?php
/**
 * ManiaLive - TrackMania dedicated server manager in PHP
 * 
 * @copyright   Copyright (c) 2009-2011 NADEO (http://www.nadeo.com)
 * @license     http://www.gnu.org/licenses/lgpl.html LGPL License 3
 * @version     $Revision: 1709 $:
 * @author      $Author: svn $:
 * @date        $Date: 2011-01-07 14:06:13 +0100 (ven., 07 janv. 2011) $:
 */

// TODO XMLRPCLib: remettre les credits

namespace ManiaLive\DedicatedApi\Xmlrpc;

if (!defined('LF')) define('LF', "\n");

class ClientMulticall_Gbx extends Client_Gbx
{
	public $calls = array();

	function addCall($methodName, $args)
	{
		$struct = array('methodName' => $methodName, 'params' => $args);
		$this->calls[] = $struct;

		return (count($this->calls) - 1);
	}
	
	function multiquery()
	{
		$result = array();
		if(count($this->calls))
		{
			$result = parent::query('system.multicall', $this->calls);
			$this->calls = array();  // reset for next calls
		}
		return $result;
	}

	function multiqueryIgnoreResult()
	{
		if(count($this->calls))
		{
			parent::queryIgnoreResult('system.multicall', $this->calls);
			$this->calls = array();  // reset for next calls
		}
	}
}

?>