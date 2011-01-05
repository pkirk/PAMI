<?php
/**
 * Pauses the Monitor for a given channel.
 *
 * PHP Version 5
 *
 * @category   Pami
 * @package    Message
 * @subpackage Action
 * @author     Marcelo Gornstein <marcelog@gmail.com>
 * @license    http://www.noneyet.ar/ Apache License 2.0
 * @version    SVN: $Id$
 * @link       http://www.noneyet.ar/
 */
namespace PAMI\Message\Action;

/**
 * Pauses the Monitor for a given channel.
 *
 * PHP Version 5
 *
 * @category   Pami
 * @package    Message
 * @subpackage Action
 * @author     Marcelo Gornstein <marcelog@gmail.com>
 * @license    http://www.noneyet.ar/ Apache License 2.0
 * @link       http://www.noneyet.ar/
 */
class PauseMonitorAction extends ActionMessage
{
    /**
     * Constructor.
     *
     * @param string $channel Channel monitored to pause.
     *
     * @return void
     */
    public function __construct($channel)
    {
        parent::__construct('PauseMonitor');
        $this->setKey('Channel', $channel);
    }
}