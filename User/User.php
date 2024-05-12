<?php

namespace SEVEN_TECH\User;

class User
{

    public function getUser($id)
    {
        $user_data = get_userdata($id);

        if ($user_data == false) {
            return '';
        }

        $avatar_url = get_avatar_url($id, ['size' => 384]);

        $user = array(
            'id' => $id,
            'full_name' => "{$user_data->first_name} {$user_data->last_name}",
            'email' => $user_data->user_email,
            'bio' => get_the_author_meta('description', $id),
            'user_url' => "/{$user_data->user_nicename}",
            'avatar_url' => $avatar_url == false ? '' : $avatar_url,
        );

        return $user;
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
