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

    public function setFile($request): CoreBuilder {
        if ($request->file) {

            $this->save();

            /*$filename = $this->model->uuid . '.' . $file->extension();
            $filename = $this->model->uuid . '.jpg';

            Storage::put('public/files/' . $filename, base64_decode($request->file));*/

            $image_64 = $request->file; //your base64 encoded data

            $extension = explode('/', explode(':', substr($image_64, 0, strpos($image_64, ';')))[1])[1];   // .jpg .png .pdf

            $replace = substr($image_64, 0, strpos($image_64, ',') + 1);

            $image = str_replace($replace, '', $image_64);

            $image = str_replace(' ', '+', $image);

            $imageName = $this->model->uuid . '.' . $extension;

            Storage::put('public/files/' . $imageName, base64_decode($image));

            $this->model->file = $imageName;
        }

        return $this;
    }

}