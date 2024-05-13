<?php

namespace SEVEN_TECH\User;

use SEVEN_TECH\Router\Router;
use SEVEN_TECH\Roles\Roles;

class User
{
    private $router;
    private $roles;

    public function __construct()
    {
        $this->router = new Router;
        $this->roles = new Roles;
    }

    public function getUser($id, $full_name = '', $email = '', $roles = '', $user_url = '')
    {
        if (empty($full_name) || empty($email) || !is_array($roles) || empty($user_url)) {
            $user_data = get_userdata($id);

            if ($user_data == false) {
                return '';
            }

            $full_name = "{$user_data->first_name} {$user_data->last_name}";
            $email = $user_data->user_email;
            $ordered_roles = $this->roles->getOrderedRoles($user_data->roles);
            $roles = $this->roles->getRoleDisplayNames($ordered_roles);
            $nicename = $user_data->user_nicename;
            $user_url = "/{$ordered_roles[0]}/{$nicename}";
        }

        $avatar_url = get_avatar_url($id, ['size' => 384]);

        $user = array(
            'id' => $id,
            'full_name' => $full_name,
            'email' => $email,
            'bio' => get_the_author_meta('description', $id),
            'roles' => $roles,
            'user_url' => $user_url,
            'avatar_url' => $avatar_url == false ? '' : $avatar_url,
        );

        return $user;
    }

    public function getUserBySlug($url)
    {
        $urlArray = $this->router->getURLArray($url);
        $role = $urlArray[0];
        $slug = $urlArray[1];
        $user_data = get_user_by('slug', $slug);

        if ($user_data == false) {
            return "This user could not be found.";
        }

        $id = $user_data->ID;
        $full_name = "{$user_data->first_name} {$user_data->last_name}";
        $email = $user_data->user_email;
        $ordered_roles = $this->roles->getOrderedRoles($user_data->roles);
        $roles = $this->roles->getRoleDisplayNames($ordered_roles);
        $nicename = $user_data->user_nicename;

        $user_url = "";

        foreach ($ordered_roles as $user_role) {
            if ($user_role == $role) {
                $user_url = "/{$role}/{$nicename}";
                break;
            }
        }

        if (empty($user_url)) {
            return "This user does not have a role of {$role}";
        }

        return $this->getUser($id, $full_name, $email, $roles, $user_url);
    }

    public function getUsers($args)
    {
        $users_data = get_users($args);

        if (!is_array($users_data)) {
            return '';
        }

        $users = [];

        foreach ($users_data as $user) {
            $user_data = $this->getUser($user->ID);

            if ($user_data == '') {
                continue;
            }

            $users[] = $user_data;
        }

        return $users;
    }
}
