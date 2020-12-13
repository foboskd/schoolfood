<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\SchoolRepository;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class SchoolController extends Controller {

    private $repository;

    public function __construct() {
        $this->repository = new SchoolRepository();
    }

    public function show(string $uuid) {
        return $this->repository->getByUuidForPublic($uuid);
    }

    public function qrCode(string $uuid) {
        $school = $this->repository->getByUuidForPublic($uuid);
        $domain = 'https://'.$_SERVER['HTTP_HOST'].'/review/'.$uuid;

        return QrCode::encoding('UTF-8')
            ->size(500)
            ->generate("Оценить питание в $school->title $domain");
    }

}
