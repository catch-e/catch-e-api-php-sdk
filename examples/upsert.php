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

require __DIR__.'/../vendor/autoload.php';

try {
	$client = \CatchE\Api\Client::factory();
	$result = $client->authenticate([
		'username' => 'username',
		'password' => 'password',
		//'2fa_code' => 123456 # If applicable
	], [
		'Client-Id' => 'example-client',
	]);

	$client = \CatchE\Api\Client::factory($result->getAccessToken());
	$client->upsert('table_name', [
		[
			'record_id' => null,
			'another_row' => 'Hello world'
		],
		[
			'record_id' => null,
			'another_row' => 'Hello world 2'
		],
	], [
		'timezone' => 'Australia/Sydney'
	]);
} catch (\Exception $e) {
	echo 'Error: '.$e->getMessage()."\n";
	exit(1);
}

exit(0);