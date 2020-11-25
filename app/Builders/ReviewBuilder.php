<?php

namespace App\Builders;


use App\Models\Review;
use Illuminate\Support\Facades\Storage;

class ReviewBuilder extends CoreBuilder {

    public function createEmpty(): CoreBuilder {
        $this->model = new Review();

        return $this;
    }

    public function setSchoolUuid($uuid): CoreBuilder {
        try {
            $this->model->school_uuid = $uuid;

            return $this;
        } catch (\Exception $e) {
            abort(404);
        }
    }

    public function setFile($file): CoreBuilder {
        if ($file) {
            $this->save();

            $filename = $this->model->uuid . '.' . $file->extension();

            Storage::put('public/files/' . $filename, file_get_contents($file));

            $this->model->file = $filename;
        }

        return $this;
    }

}