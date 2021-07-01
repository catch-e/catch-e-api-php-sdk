<?php
/**
 * Copyright 2021 Catch-e Pty Ltd.
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

namespace CatchE\Api\Endpoint;

class PrintReportQuery extends \CatchE\OpenApi2\Endpoint\PrintReportQuery
{
	/**
	 * {@inheritdoc}
	 *
	 * @throws \CatchE\OpenApi2\Exception\PrintReportQueryUnauthorizedException
	 * @throws \CatchE\OpenApi2\Exception\PrintReportQueryForbiddenException
	 * @throws \CatchE\OpenApi2\Exception\PrintReportQueryNotAcceptableException
	 * @throws \CatchE\OpenApi2\Exception\PrintReportQueryUnsupportedMediaTypeException
	 * @throws \CatchE\OpenApi2\Exception\PrintReportQueryUnprocessableEntityException
	 * @throws \CatchE\OpenApi2\Exception\PrintReportQueryInternalServerErrorException
	 *
	 * @return \CatchE\OpenApi2\Model\Error|null
	 */
	protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
	{
		if (201 === $status) {
			if (preg_match('/^application\/json/', $contentType)) {
				return json_decode($body);
			}

			return $body;
		} else {
			return parent::transformResponseBody($body, $status, $serializer, $contentType);
		}
	}
}
