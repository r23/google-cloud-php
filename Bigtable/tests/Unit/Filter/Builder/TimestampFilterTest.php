<?php
/**
 * Copyright 2018, Google LLC All rights reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Cloud\Bigtable\Tests\Unit\Filter\Builder;

use Google\Cloud\Bigtable\Filter\Builder\TimestampFilter;
use Google\Cloud\Bigtable\Filter\TimestampRangeFilter;
use PHPUnit\Framework\TestCase;

/**
 * @group bigtable
 * @group bigtabledata
 */
class TimestampFilterTest extends TestCase
{
    public function testRange()
    {
        $timestampFilter = new TimestampFilter();
        $this->assertInstanceOf(TimestampRangeFilter::class, $timestampFilter->range());
    }
}
