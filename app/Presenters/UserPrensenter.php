<?php

namespace App\Presenters;

use Lewis\Presenter\AbstractPresenter;

class UserPrensenter extends AbstractPresenter
{
    public function lastLoginDifference()
    {
        return $this->last_login_at->diffForHumans();
    }
}