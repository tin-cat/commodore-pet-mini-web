<?php

/**
 * @package CherrycakeApp
 */

namespace CherrycakeApp;

/**
 * An class that represents a User build
 * 
 * @package CherrycakeApp
 * @category AppClasses
 */
class UserBuild extends \Cherrycake\BasicObject {
    function getSerialNumber() {
        global $e;
        $r = $this->serialNumber;
        if (strlen($r) < $e->UserBuilds->getConfig("serialNumberMinimumDigits"))
            $r = str_repeat("0", $e->UserBuilds->getConfig("serialNumberMinimumDigits") - strlen($r)).$r;
        return $r;
    }

    function getName() {
        return $this->name;
    }

    function getUrl() {
        return $this->url ?? false;
    }

    function getDate() {
        global $e;
        return $e->Locale->formatDate(
            $this->date,
            [
                "style" => \Cherrycake\Modules\TIMESTAMP_FORMAT_HUMAN
            ]
        );
    }

    function getText() {
        return $this->text;
    }

    function getImagesDir() {
        global $e;
        return $e->UserBuilds->getConfig("imagesBaseDir")."/".$this->serialNumber;
    }

    /**
     * Images must be stored in a directory named after the serial number of the build, inside the directory configured on the imagesBaseDir configuration key of the UserBuilds module.
     * Images must be provided with two extensions: .jpg and .thumbnail.jpg
     */
    function getImages() {
        if (!$handle = opendir($this->getImagesDir()))
            return false;

        while (false !== ($file = readdir($handle))) {
            if ($file == "." || $file == ".." || substr($file, 0, 1) == ".")
                continue;
            $files[] = $file;
        }

        if (!is_array($files))
            return false;
        
        foreach ($files as $file) {
            // Check if the file is an image
            if (!$imageSize = getimagesize($this->getImagesDir()."/".$file))
                continue;

            // Check if it's a thumbnail
            if (substr(strtolower($file), strlen($file) - strlen(".thumbnail.jpg")) == ".thumbnail.jpg") {
                $isThumbnail = true;
                $fileName = substr($file, 0, strlen($file) - strlen(".thumbnail.jpg"));
            }
            else
            // If it's a fullsize
            if (substr(strtolower($file), strlen($file) - strlen(".jpg")) == ".jpg") {
                $isThumbnail = false;
                $fileName = substr($file, 0, strlen($file) - strlen(".jpg"));
            }
            // Not a thumbnail nor a fullsize
            else
                continue;

            if ($isThumbnail)
                $r[$fileName]["thumbnailUrl"] = "/".$this->getImagesDir()."/".$file;
            else
            if (!$isThumbnail)
                $r[$fileName]["fullSizeUrl"] = "/".$this->getImagesDir()."/".$file;

        }

        array_multisort(array_keys($r), SORT_ASC, $r);

        return $r;
    }
}   