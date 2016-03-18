<?php

function setting($name)
{
    return \App\Setting::getSettingValue($name);
}

function cdn($path)
{
    if (setting('cdn_on') == '1') {
        return setting('cdn_domain').$path;
    } else {
        return $path;
    }
}

function description_trim($description, $limit = 500, $end = '...')
{
    $description = strip_tags(str_limit($description, $limit, $end));
    $description = str_replace("  ", "", $description);
    $description = str_replace("\n", "", $description);

    return $description;
}

/**
 * 返回可读性更好的文件尺寸
 */
function human_filesize($bytes, $decimals = 2)
{
    $size = ['B', 'kB', 'MB', 'GB', 'TB', 'PB'];
    $factor = floor((strlen($bytes) - 1) / 3);

    return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) .@$size[$factor];
}

/**
 * 判断文件的MIME类型是否为图片
 */
function is_image($mimeType)
{
    return starts_with($mimeType, 'image/');
}