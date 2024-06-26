<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\support\Str;
use Faker\Factory as Faker;

if (!function_exists('entityResponse')) {
    function entityResponse($data = null, $statusCode = 200, $status = 'success', $message = null)
    {
        $payload = ['status' => $status, 'statusCode' => $statusCode, 'data' => $data];

        if ($message) {
            $payload['message'] = $message;
        }

        return response($payload, $statusCode);
    }
}

if (!function_exists('messageResponse')) {
    function messageResponse($message = '', $statusCode = 200, $status = 'success', $data = [])
    {
        return response(['status' => $status, 'statusCode' => $statusCode, 'message' => $message, 'data' => $data], $statusCode);
    }
}


if (!function_exists('uploader')) {
    function uploader($source, $path, $width = null, $height = null, $file_name = null)
    {
        // dd($source->getClientMimeType(), $source->getClientOriginalExtension(), $source->getClientOriginalName());
        $mime_type = $source->getClientMimeType();

        // dd($mime_type);
        if ($mime_type != "image/png" && $mime_type != "image/jpeg" && $mime_type != "image/jpg") {
            $path = Storage::putFile($path, $source);
            return $path;
        }

        $image = Image::make($source);

        if (!$path) {
            $path = public_path('uploads');
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
        } else {
            if (!file_exists(public_path($path))) {
                mkdir(public_path($path), 0777, true);
            }
        }
        if (!$file_name) {
            $file_name = Carbon::now()->toDateTimeString().rand(1000, 9999);
            $file_name = Str::slug($file_name);
            $file_name .= "." . $source->getClientOriginalExtension();
        } else {
            $file_name = Str::slug($file_name);
        }

        if ($width || $height) {
            $image->fit($width, $height, function ($constraint) {
                $constraint->aspectRatio();
            });
        }
        $full_name = $path . '/' . $file_name;
        $image->save(public_path($full_name));
        return $full_name;
    }
}

function facker()
{

    return   Faker::create();
}
