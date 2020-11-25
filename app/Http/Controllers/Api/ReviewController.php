<?php

namespace App\Http\Controllers\Api;

use App\Builders\ReviewBuilder;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateReviewRequest;
use App\Repositories\ReviewRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReviewController extends Controller {

    protected $builder;

    protected $repository;

    public function __construct() {
        $this->builder = new ReviewBuilder();
        $this->repository = new ReviewRepository();
    }

    public function store(CreateReviewRequest $request) {
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

            return response('', 200);
        } else {
            return response('', 400);
        }
    }
}
