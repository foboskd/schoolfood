<?php

namespace App\Http\Controllers\Api;

use App\Builders\ReviewBuilder;
use App\Builders\ReviewLogBuilder;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateReviewRequest;
use App\Repositories\ReviewRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReviewController extends Controller {

    protected $builder;

    protected $log_builder;

    protected $repository;

    public function __construct() {
        $this->builder = new ReviewBuilder();
        $this->log_builder = new ReviewLogBuilder();
        $this->repository = new ReviewRepository();
    }

    public function store(CreateReviewRequest $request) {
        $this->log_builder
            ->createEmpty()
            ->setFingerprint($request->uuid)
            ->setLongitude($request->longitude)
            ->setLatitude($request->latitude);

        $last_review = $this->repository->getLastByFingerprint($request->fingerprint);

        if (!$last_review) {
            $this->builder
                ->createEmpty()
                ->setSchoolUuid($request->uuid)
                ->setFingerprint($request->fingerprint)
                ->setScore($request->score);

            if ($request->score < 0) {
                $this->builder
                    ->setText($request->text)
                    ->setFile($request);
            }

            $this->builder->save();

            $this->log_builder
                ->setReviewUuid($this->builder->getModel()->uuid)
                ->save();

            return response('', 200);
        } else {
            $this->log_builder->save();
            return response('Вы уже голосовали сегодня', 400);
        }
    }
}
