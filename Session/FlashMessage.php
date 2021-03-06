<?php
/**
 * This file is part of BcBootstrapBundle.
 *
 * (c) 2012-2013 by Florian Eckerstorfer
 */

namespace Bc\Bundle\BootstrapBundle\Session;

use Symfony\Component\HttpFoundation\Session\SessionInterface;

/**
 * FlashMessage
 *
 * @package    BcBootstrapBundle
 * @subpackage Session
 * @author     Florian Eckerstorfer <florian@eckerstorfer.co>
 * @copyright  2012-2013 Florian Eckerstorfer
 * @license    http://opensource.org/licenses/MIT The MIT License
 * @link       http://bootstrap.braincrafted.com Bootstrap for Symfony2
 */
class FlashMessage
{
    /** @var SessionInterface */
    private $session;

    /**
     * Constructor.
     *
     * @param SessionInterface $session The session
     */
    public function __construct(SessionInterface $session)
    {
        $this->session = $session;
    }

    /**
     * Sets an alert message.
     *
     * @param string $message The message
     *
     * @return void
     */
    public function alert($message)
    {
        $this->session->getFlashBag()->add('alert', $message);
    }

    /**
     * Sets an error message.
     *
     * @param string $message The message
     *
     * @return void
     */
    public function error($message)
    {
        $this->session->getFlashBag()->add('error', $message);
    }

    /**
     * Sets an info message.
     *
     * @param string $message The message
     *
     * @return void
     */
    public function info($message)
    {
        $this->session->getFlashBag()->add('info', $message);
    }

    /**
     * Sets a success message.
     *
     * @param string $message The message
     *
     * @return void
     */
    public function success($message)
    {
        $this->session->getFlashBag()->add('success', $message);
    }
}
