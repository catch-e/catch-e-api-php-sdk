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

namespace CatchE\OpenApi2\Model;

class VariantPhoto
{
	/**
	 * @var string|null
	 */
	protected $photoId;
	/**
	 * @var string|null
	 */
	protected $variantId;
	/**
	 * @var string|null
	 */
	protected $photoType = 'front';
	/**
	 * @var string|null
	 */
	protected $photoCode;
	/**
	 * @var string|null
	 */
	protected $photoUri;
	/**
	 * @var string|null
	 */
	protected $description;
	/**
	 * @var string|null
	 */
	protected $dataSourceId;

	public function getPhotoId(): ?string
	{
		return $this->photoId;
	}

	public function setPhotoId(?string $photoId): self
	{
		$this->photoId = $photoId;

		return $this;
	}

	public function getVariantId(): ?string
	{
		return $this->variantId;
	}

	public function setVariantId(?string $variantId): self
	{
		$this->variantId = $variantId;

		return $this;
	}

	public function getPhotoType(): ?string
	{
		return $this->photoType;
	}

	public function setPhotoType(?string $photoType): self
	{
		$this->photoType = $photoType;

		return $this;
	}

	public function getPhotoCode(): ?string
	{
		return $this->photoCode;
	}

	public function setPhotoCode(?string $photoCode): self
	{
		$this->photoCode = $photoCode;

		return $this;
	}

	public function getPhotoUri(): ?string
	{
		return $this->photoUri;
	}

	public function setPhotoUri(?string $photoUri): self
	{
		$this->photoUri = $photoUri;

		return $this;
	}

	public function getDescription(): ?string
	{
		return $this->description;
	}

	public function setDescription(?string $description): self
	{
		$this->description = $description;

		return $this;
	}

	public function getDataSourceId(): ?string
	{
		return $this->dataSourceId;
	}

	public function setDataSourceId(?string $dataSourceId): self
	{
		$this->dataSourceId = $dataSourceId;

		return $this;
	}
}
