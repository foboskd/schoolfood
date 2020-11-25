<?php

namespace App\Repositories;


use App\Models\Review;
use App\Models\School;
use Carbon\Carbon;

class ReviewRepository extends CoreRepository {

    private $model;

    public function __construct() {
        $this->model = new Review();
    }

    protected function getModel() {
        return $this->model;
    }

    public function getLastByFingerprint(string $fingerprint) {
        $next_day = Carbon::now();
//        $next_day = $next_day->addDays(1);
        $next_day = $next_day->setHours(0);
        $next_day = $next_day->setMinutes(0);
        $next_day = $next_day->setSeconds(0);

        return $this
            ->getModel()
            ->whereFingerprint($fingerprint)
            ->where('created_at', '>', $next_day)
            ->orderBy('created_at', 'DESC')
            ->first();
    }

}