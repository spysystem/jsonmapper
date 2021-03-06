<?php
namespace namespacetest;

use namespacetest\model;
use namespacetest\model\User;
use namespacetest\model\UserList;
use othernamespace\Foo;

/**
 * Class UnitDataWithUseClause
 *
 * @package namespacetest
 */
class UnitDataWithUseClause
{
    /**
     * @var \ArrayObject[Unit]
     */
    public $data;

    /**
     * @var Unit[]
     */
    public $units;

    /** @var Unit[] */
    public array $units_typed;

    /** @var User[] */
    public array $users_typed;

    /**
     * @var string[]
     */
    public $messages;

    /**
     * @var User
     */
    public $user;

    /**
     * @var
     */
    public $empty;

    /**
     * @var UserList[model\User]
     */
    public $users;

    /**
     * @var model\MyArrayObject
     */
    public $aodata;

    public $internalData = [];


    /**
     * @param Foo $foo
     */
    public function setNamespacedTypeHint(Foo $foo)
    {
        $this->internalData['namespacedTypeHint'] = $foo;
    }
}
