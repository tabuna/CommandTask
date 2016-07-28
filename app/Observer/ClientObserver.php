<?php namespace  App\Observer;

use Auth;

class ClientObserver{

    /**
     * @param $model
     */
    public function creating($model)
    {
        $model->user_id = Auth::user()->id;
    }


}