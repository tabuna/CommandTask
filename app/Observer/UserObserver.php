<?php namespace App\Observer;

use App\Jobs\SendWelcomeEmail;
use Mail;
use Illuminate\Foundation\Bus\DispatchesJobs;

class UserObserver
{

    use DispatchesJobs;

    /**
     * @param $model
     */
    public function creating($model)
    {
        $model->nickname = $model->name;
    }

    /**
     * @param $model
     */
    public function created($model)
    {
        dispatch(new SendWelcomeEmail($model));
    }


}
