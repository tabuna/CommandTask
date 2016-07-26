<?php namespace  App\Observer;

use Auth;

class OrganizationObserver{

    /**
     * @param $model
     */
    public function creating($model)
    {
        $model->user_id = Auth::user()->id;
    }


}