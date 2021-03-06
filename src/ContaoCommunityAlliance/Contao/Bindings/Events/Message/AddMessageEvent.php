<?php
/**
 * The Contao Community Alliance events-contao-bindings library allows easy use of various Contao classes.
 *
 * PHP version 5
 *
 * @package    ContaoCommunityAlliance\Contao\Bindings\Events
 * @subpackage Controller
 * @author     Christian Schiffler <c.schiffler@cyberspectrum.de>
 * @copyright  The Contao Community Alliance
 * @license    LGPL.
 * @filesource
 */

namespace ContaoCommunityAlliance\Contao\Bindings\Events\Message;

use ContaoCommunityAlliance\Contao\Bindings\Events\ContaoApiEvent;

/**
 * This Event is emitted when a message should be added to the session.
 */
class AddMessageEvent
	extends ContaoApiEvent
{
	const TYPE_ERROR = 'error';

	const TYPE_CONFIRM = 'confirm';

	const TYPE_NEW = 'new';

	const TYPE_INFO = 'info';

	const TYPE_RAW = 'raw';

	/**
	 * Create an event to add an error message.
	 *
	 * @param string $content The message.
	 *
	 * @return AddMessageEvent
	 */
	public static function createError($content)
	{
		return new static($content, 'error');
	}

	/**
	 * Create an event to add a confirm message.
	 *
	 * @param string $content The message.
	 *
	 * @return AddMessageEvent
	 */
	public static function createConfirm($content)
	{
		return new static($content, 'confirm');
	}

	/**
	 * Create an event to add a new message.
	 *
	 * @param string $content The message.
	 *
	 * @return AddMessageEvent
	 */
	public static function createNew($content)
	{
		return new static($content, 'new');
	}

	/**
	 * Create an event to add an info message.
	 *
	 * @param string $content The message.
	 *
	 * @return AddMessageEvent
	 */
	public static function createInfo($content)
	{
		return new static($content, 'info');
	}

	/**
	 * Create an event to add a raw message.
	 *
	 * @param string $content The message.
	 *
	 * @return AddMessageEvent
	 */
	public static function createRaw($content)
	{
		return new static($content);
	}

	/**
	 * The message text.
	 *
	 * @var string
	 */
	protected $content;

	/**
	 * The message type.
	 *
	 * @var string
	 */
	protected $type;

	/**
	 * Create a new instance.
	 *
	 * @param string $content The message text.
	 *
	 * @param string $type    The message type.
	 */
	public function __construct($content, $type = self::TYPE_RAW)
	{
		$this->content = $content;
		$this->type    = $type;
	}

	/**
	 * Retrieve the message text.
	 *
	 * @return string
	 */
	public function getContent()
	{
		return $this->content;
	}

	/**
	 * Retrieve the message type.
	 *
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
	}
}
