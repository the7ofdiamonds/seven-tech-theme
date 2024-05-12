<?php

namespace SEVEN_TECH\Roles;

use Exception;

use WP_QUery;

class Roles
{
    private $roles;
    private $roleNames;

    public function __construct()
    {
        $this->roles = [
            [
                'name' => 'administrator',
                'display_name' => 'Administrator',
                'capabilities' => [],
                'order' => 0,
            ],
            [
                'name' => 'editor',
                'display_name' => 'Editor',
                'capabilities' => [],
                'order' => 1,
            ],
            [
                'name' => 'author',
                'display_name' => 'Author',
                'capabilities' => [],
                'order' => 2,
            ],
            [
                'name' => 'contributor',
                'display_name' => 'Contributor',
                'capabilities' => [],
                'order' => 3,
            ],
            [
                'name' => 'subscriber',
                'display_name' => 'Subscriber',
                'capabilities' => [],
                'order' => 4,
            ]
        ];

        $this->roleNames = $this->getRoleNames();
    }

    public function getRoleNames()
    {
        $roleNames = [];

        foreach ($this->roles as $role) {
            $roleNames[] = $role['name'];
        };

        return $roleNames;
    }

    public function getRoles()
    {
        return $this->roles;
    }

    public function getOrderedRoles($roles)
    {
        if (!is_array($roles)) {
            throw new Exception('Wrong roles format. Must be an array.', 400);
        }

        $order = [];

        foreach ($this->roles as $role) {
            $order[] = [$role['name'] => $role['order']];
        }

        uksort($roles, function ($a, $b) use ($order) {
            return $order[$a] <=> $order[$b];
        });

        return $roles;
    }

    public function getRoleDisplayNames($orderedroles)
    {
        $roleDisplayNames = [];

        foreach ($orderedroles as $ordered_role) {
            foreach ($this->roles as $role) {
                if ($ordered_role == $role['name']) {
                    $roleDisplayNames[] = $role['display_name'];
                }
            }
        };

        return $roleDisplayNames;
    }
}
