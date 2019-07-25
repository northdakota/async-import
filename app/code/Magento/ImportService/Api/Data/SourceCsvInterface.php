<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\ImportService\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;
use Magento\ImportService\Api\Data\SourceCsvFormatInterface;

/**
 * Interface SourceCsvInterface
 */
interface SourceCsvInterface extends ExtensibleDataInterface
{

    /**
     * const CSV_SOURCE_TYPE
     */
    const CSV_SOURCE_TYPE = "csv";

    const ENTITY_ID = 'entity_id';
    const UUID = 'uuid';
    const SOURCE_TYPE = 'source_type';
    const IMPORT_TYPE = 'import_type';
    const IMPORT_DATA = 'import_data';
    const FORMAT = 'format';
    const CREATED_AT = 'created_at';
    const STATUS = 'status';
    const STATUS_UPLOADED = 'uploaded';
    const STATUS_COMPLETED = 'completed';
    const STATUS_FAILED = 'failed';

    /**
     * Retrieve source uuid
     *
     * @return string|null
     */
    public function getUuid(): ?string;

    /**
     * Set data source uuid
     *
     * @param string $uuid
     * @return $this
     */
    public function setUuid(string $uuid): SourceCsvInterface;

    /**
     * Retrieve data source type
     *
     * @return string
     */
    public function getSourceType(): string;

    /**
     * Set data source type
     *
     * @param string $sourceType
     * @return $this
     */
    public function setSourceType(string $sourceType): SourceCsvInterface;

    /**
     * Retrieve Import type
     *
     * @return string
     */
    public function getImportType(): string;

    /**
     * Set Import type
     *
     * @param string $importType
     * @return $this
     */
    public function setImportType(string $importType): SourceCsvInterface;

    /**
     * @return string
     */
    public function getStatus(): string;

    /**
     * @param string $status
     * @return $this
     */
    public function setStatus(string $status): SourceCsvInterface;

    /**
     * Retrieve Import data
     *
     * @return string
     */
    public function getImportData(): string;

    /**
     * Set Import data
     *
     * @param string $importData
     * @return $this
     */
    public function setImportData(string $importData): SourceCsvInterface;

    /**
     * Retrieve Source Format
     *
     * @return \Magento\ImportService\Api\Data\SourceCsvFormatInterface|null
     */
    public function getFormat(): ?SourceCsvFormatInterface;

    /**
     * Set Source Format
     *
     * @param \Magento\ImportService\Api\Data\SourceCsvFormatInterface $format
     * @return $this
     */
    public function setFormat(SourceCsvFormatInterface $format): SourceCsvInterface;

    /**
     * Retrieve Import data
     *
     * @return string
     */
    public function getCreatedAt(): string;

    /**
     * Set Import date
     *
     * @param string $date
     * @return string
     */
    public function setCreatedAt(string $date): SourceCsvInterface;

    /**
     * Retrieve existing extension attributes object or create a new one.
     *
     * @return \Magento\ImportService\Api\Data\SourceCsvExtensionInterface|null
     */
    public function getExtensionAttributes();

    /**
     * Set an extension attributes object.
     *
     * @param \Magento\ImportService\Api\Data\SourceCsvExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(\Magento\ImportService\Api\Data\SourceCsvExtensionInterface $extensionAttributes);
}