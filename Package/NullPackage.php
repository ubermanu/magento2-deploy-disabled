<?php

namespace Ubermanu\DeployDisabled\Package;

use Magento\Deploy\Package\Package;
use Magento\Deploy\Package\PackageFile;

class NullPackage extends Package
{
    /**
     * @inheritDoc
     */
    public function getFile($fileId)
    {
        return false;
    }

    /**
     * @inheritDoc
     */
    public function addFile(PackageFile $file)
    {
        return 0;
    }

    /**
     * @inheritDoc
     */
    public function addFileToMap(PackageFile $file)
    {
    }

    /**
     * @inheritDoc
     */
    public function getFiles()
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function getFilesByType($type)
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function deleteFile($fileId)
    {
    }

    /**
     * @inheritDoc
     */
    public function aggregate(Package $parentPackage = null)
    {
        return true;
    }

    /**
     * @inheritDoc
     */
    public function getMap()
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function getParentMap()
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function getParentFiles($type = null)
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function getParentPackages()
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function getPreProcessors()
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function getPostProcessors()
    {
        return [];
    }
}
