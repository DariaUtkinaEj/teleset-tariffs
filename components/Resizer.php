<?php

namespace app\components;

use himiklab\thumbnail\EasyThumbnailImage;
use Yii;

class Resizer
{
    public static function resize($w, $h, $path)
    {
        if ($path) {
            $file = Yii::getAlias('@webroot') . $path;
            $stopList = ['svg'];

            if (!file_exists($file)) {
                return 'error';
            } elseif (in_array(pathinfo($file, PATHINFO_EXTENSION), $stopList)) {
                return $path;
            }

            return EasyThumbnailImage::thumbnailFileUrl(
                $file,
                $w,
                $h,
                EasyThumbnailImage::THUMBNAIL_OUTBOUND,
                100
            );
        }

        return 'error';

    }
}