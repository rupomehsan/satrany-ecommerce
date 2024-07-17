<?php

namespace App\Modules\TrendingVideo\Actions;

use App\Modules\TrendingVideo\Validations\Validation;
use Illuminate\Support\Facades\Storage;
class Update
{
    static $model = \App\Modules\TrendingVideo\Models\Model::class;

    public static function execute(Validation $request, $id)
    {
        try {
            if (!$data = self::$model::query()->where('id', $id)->first()) {
                return messageResponse('Data not found...', 404, 'error');
            }
            $requestData = $request->validated();
            if ($request->hasFile('video')) {
                $video = $request->file('video');
                if (!Storage::disk('public')->exists('')) {
                    Storage::disk('public')->makeDirectory('');
                }
                $path = $video->store('', 'public');
                if (!$path) {
                    return messageResponse('Failed to upload video.', 500, 'server_error');
                }
                $requestData['url'] = $path;
            }
            $data->update($requestData);
            return messageResponse('Item updated successfully');
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), 500, 'server_error');
        }
    }
}
