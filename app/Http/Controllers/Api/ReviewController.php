<?php

namespace App\Http\Controllers\Api;

use App\Builders\ReviewBuilder;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateReviewRequest;
use Illuminate\Http\Request;

class ReviewController extends Controller {

    protected $builder;

    public function __construct() {
        $this->builder = new ReviewBuilder();
    }

    public function store(CreateReviewRequest $request) {
        $this->builder
            ->createEmpty()
            ->setSchoolUuid($request->uuid)
            ->setFingerprint($request->fingerprint)
            ->setScore($request->score);

        if ($request->score < 0) {
            $this->builder
                ->setText($request->text)
                ->setFile($request->file);
        }

        $this->builder->save();

        return 200;
    }
}
