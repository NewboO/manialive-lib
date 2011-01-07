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

namespace ManiaLive\Gui\Toolkit\Elements;

/**
 * BgsPlayerCard quad
 */	
class BgsPlayerCard extends Quad
{
	protected $style = Quad::BgsPlayerCard;
	protected $subStyle = self::BgActivePlayerCard;
	
	const BgActivePlayerCard    = 'BgActivePlayerCard';
	const BgActivePlayerName    = 'BgActivePlayerName';
	const BgActivePlayerScore   = 'BgActivePlayerScore';
	const BgCard                = 'BgCard';
	const BgCardSystem          = 'BgCardSystem';
	const BgMediaTracker        = 'BgMediaTracker';
	const BgPlayerCardBig       = 'BgPlayerCardBig';
	const BgPlayerCardSmall     = 'BgPlayerCardSmall';
	const BgPlayerCard          = 'BgPlayerCard';
	const BgPlayerName          = 'BgPlayerName';
	const BgPlayerScore         = 'BgPlayerScore';
	const BgRacePlayerLine      = 'BgRacePlayerLine';
	const BgRacePlayerName      = 'BgRacePlayerName';
	const ProgressBar           = 'ProgressBar';
}

?>