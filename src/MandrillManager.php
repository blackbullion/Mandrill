<?php

/*
 * This file is part of Mandrill.
 *
 * (c) Blue Bay Travel <developers@bluebaytravel.co.uk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Blackbullion\Mandrill;

use GrahamCampbell\Manager\AbstractManager;
use Illuminate\Contracts\Config\Repository;

class MandrillManager extends AbstractManager
{
    /**
     * The factory instance.
     *
     * @var \Blackbullion\Mandrill\MandrillFactory
     */
    protected $factory;

    /**
     * Create a new mandrill manager instance.
     *
     * @param \Illuminate\Contracts\Config\Repository $config
     * @param \Blackbullion\Mandrill\MandrillFactory $factory
     *
     * @return void
     */
    public function __construct(Repository $config, MandrillFactory $factory)
    {
        parent::__construct($config);

        $this->factory = $factory;
    }

    /**
     * Create the connection instance.
     *
     * @param array $config
     *
     * @return \Blackbullion\Mandrill\Mandrill
     */
    protected function createConnection(array $config)
    {
        return $this->factory->make($config);
    }

    /**
     * Get the configuration name.
     *
     * @return string
     */
    protected function getConfigName()
    {
        return 'mandrill';
    }

    /**
     * Get the factory instance.
     *
     * @return \Blackbullion\Mandrill\MandrillFactory
     */
    public function getFactory()
    {
        return $this->factory;
    }
}
