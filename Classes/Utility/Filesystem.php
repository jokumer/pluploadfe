<?php

namespace FelixNagel\Pluploadfe\Utility;

/**
 * This file is part of the "pluploadfe" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

use TYPO3\CMS\Core\Utility\GeneralUtility;
use FelixNagel\Pluploadfe\Exception\InvalidArgumentException;

/**
 * Filesystem.
 */
class Filesystem
{
    /**
     * Check if path is allowed and valid.
     *
     * @param $path
     * @return bool
     */
    public static function isPathValid($path)
    {
        return (strlen($path) > 0 && GeneralUtility::isAllowedAbsPath(PATH_site.$path));
    }

    /**
     * Create upload folder.
     *
     * @param string $uploadPath
     */
    public static function createFolder($uploadPath)
    {
        if (file_exists($uploadPath)) {
            return;
        }

        // Create target dir
        try {
            GeneralUtility::mkdir_deep(PATH_site, $uploadPath);
        } catch (\Exception $e) {
            throw new InvalidArgumentException('Failed to create upload directory.');
        }
    }

    /**
     * Generate random string.
     *
     * @param int $length
     * @return string
     */
    public static function getRandomDirName($length = 10)
    {
        $set = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIKLMNPQRSTUVWXYZ0123456789';
        $string = '';

        for ($i = 1; $i <= $length; ++$i) {
            $string .= $set[mt_rand(0, (strlen($set) - 1))];
        }

        return $string;
    }
}
