<?php

namespace SEVEN_TECH_THEME\Roles;

use Exception;

class Roles
{
    private $roles;

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
    }

    public function getRoles()
    {
        $wp_roles = wp_roles()->get_names();

        $roles = [];

        foreach ($wp_roles as $roleKey => $roleValue) {
            foreach ($this->roles as $role) {
                if ($roleKey == $role['name'] && $roleValue == $role['display_name']) {
                    $roles[] = [
                        'name' => $role['name'],
                        'display_name' => $role['display_name'],
                        'capabilities' => [],
                        'order' => $role['order']
                    ];
                }
            }
        }

        return $roles;
    }

    public function getOrderedRoles($roles)
    {
        if (!is_array($roles)) {
            throw new Exception('Wrong roles format. Must be an array.', 400);
        }

        $order = [];

        foreach ($this->getRoles() as $role) {
            $order[] = [$role['name'] => $role['order']];
        }

        uksort($roles, function ($a, $b) use ($order) {
            return $order[$a] <=> $order[$b];
        });

        ksort($roles);

        return $roles;
    }

    public function getRoleDisplayNames($orderedroles)
    {
        $roleDisplayNames = [];

        foreach ($orderedroles as $ordered_role) {
            foreach ($this->getRoles() as $role) {
                if ($ordered_role == $role['name']) {
                    $roleDisplayNames[] = $role['display_name'];
                }
            }
        };

        return $roleDisplayNames;
    }
}
