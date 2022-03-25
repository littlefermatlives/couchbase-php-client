<?php

/**
 * Copyright 2014-Present Couchbase, Inc.
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

declare(strict_types=1);

namespace Couchbase;

class GetOptions
{
    /**
     * Sets the operation timeout in milliseconds.
     *
     * @param int $arg the operation timeout to apply
     * @return GetOptions
     */
    public function timeout(int $arg): GetOptions
    {
    }

    /**
     * Sets whether to include document expiry with the document content.
     *
     * When used this option will transparently transform the Get
     * operation into a subdocument operation performing a full document
     * fetch as well as the expiry.
     *
     * @param bool $arg whether or not to include document expiry
     * @return GetOptions
     */
    public function withExpiry(bool $arg): GetOptions
    {
    }

    /**
     * Sets whether to cause the Get operation to only fetch the fields
     * from the document indicated by the paths provided.
     *
     * When used this option will transparently transform the Get
     * operation into a subdocument operation fetching only the required
     * fields.
     *
     * @param array $arg the array of field names
     * @return GetOptions
     */
    public function project(array $arg): GetOptions
    {
    }

    /**
     * Associate custom transcoder with the request.
     *
     * @param callable $arg decoding function with signature (returns decoded value):
     *
     *   `function decoder(string $bytes, int $flags, int $datatype): mixed`
     */
    public function decoder(callable $arg): GetOptions
    {
    }
}