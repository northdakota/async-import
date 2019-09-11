<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\AsynchronousImportApi\Model;

use Magento\AsynchronousImportApi\Api\Data\ImportDataInterface;
use Magento\AsynchronousImportApi\Api\Data\SourceInterface;
use Magento\AsynchronousImportApi\Api\ImportException;

/**
 * Responsible for reading data from Source. Extension point for new source data formats via di configuration
 *
 * @api
 */
interface SourceReaderInterface
{
    /**
     * Responsible for reading data from Source. Extension point for new source data formats via di configuration
     *
     * @param SourceInterface $source
     * @return ImportDataInterface
     * @throws ImportException
     */
    public function execute(SourceInterface $source): ImportDataInterface;
}