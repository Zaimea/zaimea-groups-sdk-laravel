<?php namespace Zaimea\GroupsSDK;

use Zaimea\GroupsClientInterface;
use Illuminate\Support\Facades\Facade;

/**
 * Facade for the Zaimea Groups service
 *
 * @method static GroupsClientInterface createClient($name, array $args = []) Get a client from the service builder.
 */
class GroupsFacade extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'groups';
    }

}
