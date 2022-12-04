<?php

namespace App\Http\View\Composers;

use App\Models;
use Illuminate\View\View;
use App\Enums\User as U;
use Auth;

class UserComposer
{
    /**
     * Bind data to the view.
     * @param View $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with([
            'genders' => U\Gender::getInstances(),
            'status' => U\Status::getInstances(),
        ]);
    }
}
