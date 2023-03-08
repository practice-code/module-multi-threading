<?php
/**
 * Copyright © Username, Inc. All rights reserved.
 */

declare(strict_types=1);

namespace Zepgram\MultiThreading\Model\ItemProvider;

interface ItemProviderInterface
{
    /**
     * @param int $currentPage
     * @return void
     */
    public function setCurrentPage(int $currentPage): void;

    /**
     * @return int
     */
    public function getSize(): int;

    /**
     * @return int
     */
    public function getPageSize(): int;

    /**
     * @return int
     */
    public function getTotalPages(): int;

    /**
     * @return array
     */
    public function getItems(): array;

    /**
     * @return bool
     */
    public function isIdemPotent(): bool;
}
