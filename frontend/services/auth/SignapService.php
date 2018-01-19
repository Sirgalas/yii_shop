<?php
/**
 * Created by PhpStorm.
 */

namespace frontend\services\auth;

use common\entities\User;
use frontend\forms\SignupForm;

class SignapService
{
    public function signup(SignupForm $form): User
    {
        $user = User::signup(
            $form->username,
            $form->email,
            $form->password
        );

        if (!$user->save()) {
            throw new \RuntimeException('Saving Error');
        }

        return $user;

    }
}