<?php
/**
 * Copyright 2022 Catch-e Pty Ltd.
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

namespace CatchE\OpenApi2;

class Client extends \CatchE\OpenApi2\Runtime\Client\Client
{
    /**
     * Delete an existing attachment.
     *
     * The system will set the [gb_attachments]status_flag of the attachment to 'deleted'. The record is left linked to the parent record, E.g. Event.
     *
     * This method requires the **Attachments:Delete** permission to be associated with your role.
     *
     * @param string $attachmentId     Attachment Id
     * @param array  $headerParameters {
     *
     *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\DeleteAttachmentUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\DeleteAttachmentForbiddenException
     * @throws \CatchE\OpenApi2\Exception\DeleteAttachmentNotFoundException
     * @throws \CatchE\OpenApi2\Exception\DeleteAttachmentInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteAttachment(string $attachmentId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\DeleteAttachment($attachmentId, $headerParameters), $fetch);
    }

    /**
     * Get an existing attachment.
     *
     * To obtain the attachment binary contents:
     * - forward the client to the url returned from the getAttachmentPresignedUrl method (recommended if applicable)
     * - capture the binary stream from the url returned from the getAttachmentPresignedUrl method
     * - invoke this API preferencing the 'application/octet-stream' response
     *
     * This method requires the **Attachments:Get** permission to be associated with your role.
     *
     * @param string $attachmentId Attachment Id
     * @param string $fetch        Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetAttachmentUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetAttachmentForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetAttachmentNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetAttachmentInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Attachment|\Psr\Http\Message\ResponseInterface
     */
    public function getAttachment(string $attachmentId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetAttachment($attachmentId), $fetch);
    }

    /**
     * Create a pre-signed URL for the given attachment.
     *
     * This method requires the **Attachments:Get** permission to be associated with your role.
     *
     * @param string $attachmentId   Attachment Id
     * @param array  $formParameters {
     *
     *     @var int $url_timeout Pre-signed URL timeout in seconds
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetAttachmentPresignedUrlUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetAttachmentPresignedUrlForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetAttachmentPresignedUrlNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetAttachmentPresignedUrlUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\GetAttachmentPresignedUrlInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\AttachmentPresignedUrl|\Psr\Http\Message\ResponseInterface
     */
    public function getAttachmentPresignedUrl(string $attachmentId, array $formParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetAttachmentPresignedUrl($attachmentId, $formParameters), $fetch);
    }

    /**
     * This service allows you to save an attachment via the API rather than using the regular web-based attachment upload function.
     *
     * This method requires the **Attachments:Save** permission to be associated with your role.
     *
     * @param array $formParameters {
     *
     *     @var \Psr\Http\Message\StreamInterface|resource|string $attachment_file Attachment file
     *     @var string $target_table Target table
     *     @var string $record_id The unique (primary) id of the record in the target table the attachment is to be associated with
     *     @var string $notes (Optional) Notes to be stored with the attachment
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\SaveAttachmentUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\SaveAttachmentForbiddenException
     * @throws \CatchE\OpenApi2\Exception\SaveAttachmentNotFoundException
     * @throws \CatchE\OpenApi2\Exception\SaveAttachmentUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\SaveAttachmentInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Attachment|\Psr\Http\Message\ResponseInterface
     */
    public function saveAttachment(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\SaveAttachment($formParameters, $headerParameters), $fetch);
    }

    /**
     * Request an API token for use with secured methods.
     *
     * @param array $formParameters {
     *
     *     @var string $username Catch-e username
     *     @var string $password Catch-e password
     *     @var string $2fa_code (Optional) Catch-e two-factor authentication code
     *     @var int $token_timeout (Optional) Token timeout in seconds. If specified, the issued access token will expire after the specified number of seconds
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $Client-Id Client Id for your Catch-e system
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\AuthenticateUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\AuthenticateNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\AuthenticateConflictException
     * @throws \CatchE\OpenApi2\Exception\AuthenticateUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\AuthenticateUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\AuthenticateInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\AuthenticateSuccess|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function authenticate(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\Authenticate($formParameters, $headerParameters), $fetch);
    }

    /**
     * This method requires the **SignonToken:Create** permission to be associated with your role.
     *
     * @param \CatchE\OpenApi2\Model\SignonTokenCreate $body  JSON payload
     * @param string                                   $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetSignonTokenUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetSignonTokenForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetSignonTokenNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetSignonTokenNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetSignonTokenUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\GetSignonTokenUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\GetSignonTokenInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\SignonTokenCreateSuccess|\Psr\Http\Message\ResponseInterface
     */
    public function getSignonToken(Model\SignonTokenCreate $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetSignonToken($body), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\RenewUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\RenewForbiddenException
     * @throws \CatchE\OpenApi2\Exception\RenewNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\RenewUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\RenewInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\AuthenticateSuccess|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function renew(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\Renew(), $fetch);
    }

    /**
     * This method requires the **BespokeFields:Get** permission to be associated with your role.
     *
     * @param string $bespokeFieldId Bespoke Field Id
     * @param string $fetch          Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetBespokeFieldUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetBespokeFieldForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetBespokeFieldNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetBespokeFieldNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetBespokeFieldInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\BespokeField|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getBespokeField(string $bespokeFieldId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetBespokeField($bespokeFieldId), $fetch);
    }

    /**
     * This method requires the **BespokeFields:Get** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var string $table_name Table Name
     *     @var string $record_id Record Id
     *     @var string $bespoke_field_id Optional Bespoke Field Id
     *     @var int $page Optional page number
     *     @var int $page_size Optional page size
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetBespokeFieldValuesUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetBespokeFieldValuesForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetBespokeFieldValuesNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetBespokeFieldValuesNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetBespokeFieldValuesConflictException
     * @throws \CatchE\OpenApi2\Exception\GetBespokeFieldValuesInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\BespokeFieldValuesGet|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getBespokeFieldValues(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetBespokeFieldValues($queryParameters), $fetch);
    }

    /**
     * This method requires the **BespokeFields:Get** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var string $table_name optional Table Name
     *
     * This field supports the wildcard % operator
     *     @var string $field_name optional Field Name
     *
     * This field supports the wildcard % operator
     *     @var string $input_type Optional Input Type
     *     @var int $column_number Optional Column Number
     *     @var int $page Optional page number
     *     @var int $page_size Optional page size
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetBespokeFieldsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetBespokeFieldsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetBespokeFieldsNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetBespokeFieldsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetBespokeFieldsConflictException
     * @throws \CatchE\OpenApi2\Exception\GetBespokeFieldsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\BespokeFieldsGet|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getBespokeFields(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetBespokeFields($queryParameters), $fetch);
    }

    /**
     * This method requires the **Cards:Get** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var string $card_number optional Card Number
     *
     * This field supports the wildcard % operator
     *     @var string $contract_id Optional Contract Id
     *     @var string $supplier_id Optional Supplier Id
     *
     * Supplier must be of type 'card-services'
     *     @var string $expiry_date Optional Expiry Date
     *     @var string $status_flag Optional Status Flag
     *     @var int $page Optional page number
     *     @var int $page_size Optional page size
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetCardsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetCardsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetCardsNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetCardsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetCardsConflictException
     * @throws \CatchE\OpenApi2\Exception\GetCardsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\CardsGet|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getCards(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetCards($queryParameters), $fetch);
    }

    /**
     * This method requires the **Cards:Create** permission to be associated with your role.
     *
     * @param array $cards            JSON payload
     * @param array $headerParameters {
     *
     *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\CreateCardsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\CreateCardsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\CreateCardsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\CreateCardsUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\CreateCardsUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\CreateCardsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\CardsGet|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function createCards(array $cards, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\CreateCards($cards, $headerParameters), $fetch);
    }

    /**
     * This method requires the **Cards:Update** permission to be associated with your role.
     *
     * @param array $cards            JSON payload
     * @param array $headerParameters {
     *
     *     @var string $Delegated-Locking-Session-Id (Optional) Locking responsibility will be delegated to the specified Session Id.
     *
     * This header enables the client to instruct the API to merely verify the presence of locks with the specified session id, but not attempt to obtain them itself. It requires the **DelegatedLocking** permission to be associated with your role.
     *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\UpdateCardsListUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\UpdateCardsListForbiddenException
     * @throws \CatchE\OpenApi2\Exception\UpdateCardsListNotFoundException
     * @throws \CatchE\OpenApi2\Exception\UpdateCardsListNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\UpdateCardsListUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\UpdateCardsListUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\UpdateCardsListInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function updateCardsList(array $cards, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\UpdateCardsList($cards, $headerParameters), $fetch);
    }

    /**
     * This method requires the **Cards:Get** permission to be associated with your role.
     *
     * @param string $cardId Card Id
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetCardUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetCardForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetCardNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetCardNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetCardInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Card|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getCard(string $cardId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetCard($cardId), $fetch);
    }

    /**
     * This method requires the **Cards:Update** permission to be associated with your role.
     *
     * @param string                            $cardId           Card Id
     * @param \CatchE\OpenApi2\Model\UpdateCard $card             JSON payload
     * @param array                             $headerParameters {
     *
     *     @var string $Delegated-Locking-Session-Id (Optional) Locking responsibility will be delegated to the specified Session Id.
     *
     * This header enables the client to instruct the API to merely verify the presence of locks with the specified session id, but not attempt to obtain them itself. It requires the **DelegatedLocking** permission to be associated with your role.
     *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\UpdateCardUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\UpdateCardForbiddenException
     * @throws \CatchE\OpenApi2\Exception\UpdateCardNotFoundException
     * @throws \CatchE\OpenApi2\Exception\UpdateCardNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\UpdateCardUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\UpdateCardUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\UpdateCardInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Card|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function updateCard(string $cardId, Model\UpdateCard $card, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\UpdateCard($cardId, $card, $headerParameters), $fetch);
    }

    /**
     * This method requires the **ChannelQuoteDefaults:Get** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var string $channel_id Channel id to get channel defaults
     *     @var int $page Optional page number
     *     @var int $page_size Optional page size
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetListChannelQuoteDefaultsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetListChannelQuoteDefaultsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetListChannelQuoteDefaultsNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetListChannelQuoteDefaultsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetListChannelQuoteDefaultsConflictException
     * @throws \CatchE\OpenApi2\Exception\GetListChannelQuoteDefaultsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\ChannelQuoteDefaultsGet|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getListChannelQuoteDefaults(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetListChannelQuoteDefaults($queryParameters), $fetch);
    }

    /**
     * Create a new channel default.
     * This method requires the **ChannelQuoteDefaults:Create** permission to be associated with your role.
     *
     * @param \CatchE\OpenApi2\Model\ChannelQuoteDefaultsCreate $body  JSON payload
     * @param string                                            $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\CreateChannelQuoteDefaultsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\CreateChannelQuoteDefaultsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\CreateChannelQuoteDefaultsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\CreateChannelQuoteDefaultsUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\CreateChannelQuoteDefaultsUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\CreateChannelQuoteDefaultsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\ChannelQuoteDefaultsGet|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function createChannelQuoteDefaults(Model\ChannelQuoteDefaultsCreate $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\CreateChannelQuoteDefaults($body), $fetch);
    }

    /**
     * This method requires the **ChannelQuoteDefaults:Get** permission to be associated with your role.
     *
     * @param string $channelDefaultId Channel Quote Default to lookup
     * @param string $fetch            Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetChannelQuoteDefaultsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetChannelQuoteDefaultsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetChannelQuoteDefaultsNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetChannelQuoteDefaultsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetChannelQuoteDefaultsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\ChannelQuoteDefaultsGet|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getChannelQuoteDefaults(string $channelDefaultId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetChannelQuoteDefaults($channelDefaultId), $fetch);
    }

    /**
     * Update an existing channel default.
     * This method requires the **ChannelQuoteDefaults:Update** permission to be associated with your role.
     *
     * @param string                                            $channelDefaultId Channel Default id to update
     * @param \CatchE\OpenApi2\Model\ChannelQuoteDefaultsUpdate $body             JSON payload
     * @param string                                            $fetch            Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\UpdateChannelQuoteDefaultsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\UpdateChannelQuoteDefaultsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\UpdateChannelQuoteDefaultsNotFoundException
     * @throws \CatchE\OpenApi2\Exception\UpdateChannelQuoteDefaultsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\UpdateChannelQuoteDefaultsUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\UpdateChannelQuoteDefaultsUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\UpdateChannelQuoteDefaultsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\ChannelQuoteDefaultsGet|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function updateChannelQuoteDefaults(string $channelDefaultId, Model\ChannelQuoteDefaultsUpdate $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\UpdateChannelQuoteDefaults($channelDefaultId, $body), $fetch);
    }

    /**
     * This method requires the **Channels:Get** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var string $channel_code Optionally filter by channel code
     *     @var int $page Optional page number
     *     @var int $page_size Optional page size
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetChannelsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetChannelsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetChannelsNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetChannelsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetChannelsConflictException
     * @throws \CatchE\OpenApi2\Exception\GetChannelsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\ChannelsGet|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getChannels(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetChannels($queryParameters), $fetch);
    }

    /**
     * Create a new channel.
     * This method requires the **Channels:Create** permission to be associated with your role.
     *
     * @param \CatchE\OpenApi2\Model\ChannelCreate $channel JSON payload
     * @param string                               $fetch   Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\CreateChannelUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\CreateChannelForbiddenException
     * @throws \CatchE\OpenApi2\Exception\CreateChannelNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\CreateChannelUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\CreateChannelUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\CreateChannelInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Channel|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function createChannel(Model\ChannelCreate $channel, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\CreateChannel($channel), $fetch);
    }

    /**
     * This method requires the **Channels:Delete** permission to be associated with your role.
     *
     * @param string $channelId Channel Id to delete
     * @param string $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\DeleteChannelUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\DeleteChannelForbiddenException
     * @throws \CatchE\OpenApi2\Exception\DeleteChannelNotFoundException
     * @throws \CatchE\OpenApi2\Exception\DeleteChannelNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\DeleteChannelInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function deleteChannel(string $channelId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\DeleteChannel($channelId), $fetch);
    }

    /**
     * This method requires the **Channels:Get** permission to be associated with your role.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetChannelUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetChannelForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetChannelNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetChannelNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetChannelInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Channel|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getChannel(string $channelId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetChannel($channelId), $fetch);
    }

    /**
     * Update an existing channel.
     * This method requires the **Channels:Update** permission to be associated with your role.
     *
     * @param string                               $channelId Channel Id to update
     * @param \CatchE\OpenApi2\Model\ChannelUpdate $channel   JSON payload
     * @param string                               $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\UpdateChannelUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\UpdateChannelForbiddenException
     * @throws \CatchE\OpenApi2\Exception\UpdateChannelNotFoundException
     * @throws \CatchE\OpenApi2\Exception\UpdateChannelNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\UpdateChannelUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\UpdateChannelUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\UpdateChannelInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Channel|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function updateChannel(string $channelId, Model\ChannelUpdate $channel, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\UpdateChannel($channelId, $channel), $fetch);
    }

    /**
     * This method requires the **ChannelGroups:Get** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var string $channel_group_code Optionally filter by the specified channel group code
     *     @var int $page Optional page number
     *     @var int $page_size Optional page size
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetChannelGroupsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetChannelGroupsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetChannelGroupsNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetChannelGroupsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetChannelGroupsConflictException
     * @throws \CatchE\OpenApi2\Exception\GetChannelGroupsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\ChannelGroupsGet|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getChannelGroups(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetChannelGroups($queryParameters), $fetch);
    }

    /**
     * Create a new channel group.
     * This method requires the **ChannelGroups:Create** permission to be associated with your role.
     *
     * @param \CatchE\OpenApi2\Model\ChannelGroupCreate $body  JSON payload
     * @param string                                    $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\CreateChannelGroupUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\CreateChannelGroupForbiddenException
     * @throws \CatchE\OpenApi2\Exception\CreateChannelGroupNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\CreateChannelGroupUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\CreateChannelGroupUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\CreateChannelGroupInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\ChannelGroup|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function createChannelGroup(Model\ChannelGroupCreate $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\CreateChannelGroup($body), $fetch);
    }

    /**
     * This method requires the **ChannelGroups:Delete** permission to be associated with your role.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\DeleteChannelGroupUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\DeleteChannelGroupForbiddenException
     * @throws \CatchE\OpenApi2\Exception\DeleteChannelGroupNotFoundException
     * @throws \CatchE\OpenApi2\Exception\DeleteChannelGroupNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\DeleteChannelGroupInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function deleteChannelGroup(string $channelGroupId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\DeleteChannelGroup($channelGroupId), $fetch);
    }

    /**
     * This method requires the **ChannelGroups:Get** permission to be associated with your role.
     *
     * @param string $channelGroupId Channel Group to lookup
     * @param string $fetch          Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetChannelGroupUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetChannelGroupForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetChannelGroupNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetChannelGroupNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetChannelGroupInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\ChannelGroup|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getChannelGroup(string $channelGroupId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetChannelGroup($channelGroupId), $fetch);
    }

    /**
     * Update an existing channel group.
     * This method requires the **ChannelGroups:Update** permission to be associated with your role.
     *
     * @param string                                    $channelGroupId Channel Group Id to update
     * @param \CatchE\OpenApi2\Model\ChannelGroupUpdate $body           JSON payload
     * @param string                                    $fetch          Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\UpdateChannelGroupUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\UpdateChannelGroupForbiddenException
     * @throws \CatchE\OpenApi2\Exception\UpdateChannelGroupNotFoundException
     * @throws \CatchE\OpenApi2\Exception\UpdateChannelGroupNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\UpdateChannelGroupUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\UpdateChannelGroupUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\UpdateChannelGroupInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function updateChannelGroup(string $channelGroupId, Model\ChannelGroupUpdate $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\UpdateChannelGroup($channelGroupId, $body), $fetch);
    }

    /**
     * This method requires the **ClientPackagingDefaults:Get** permission to be associated with your role.
     *
     * @param string $clientId Client Id
     * @param string $fetch    Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetClientPackagingDefaultsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetClientPackagingDefaultsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetClientPackagingDefaultsNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetClientPackagingDefaultsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetClientPackagingDefaultsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\ClientPackagingDefaultsGet|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getClientPackagingDefaults(string $clientId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetClientPackagingDefaults($clientId), $fetch);
    }

    /**
     * This method requires the **ClientPackagingDefaults:Set** permission to be associated with your role.
     *
     * @param string                                            $clientId                Client Id
     * @param \CatchE\OpenApi2\Model\ClientPackagingDefaultsSet $clientPackagingDefaults JSON payload
     * @param array                                             $headerParameters        {
     *
     *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\SetClientPackagingDefaultsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\SetClientPackagingDefaultsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\SetClientPackagingDefaultsNotFoundException
     * @throws \CatchE\OpenApi2\Exception\SetClientPackagingDefaultsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\SetClientPackagingDefaultsUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\SetClientPackagingDefaultsUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\SetClientPackagingDefaultsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\ClientPackagingDefaultsGet|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function setClientPackagingDefaults(string $clientId, Model\ClientPackagingDefaultsSet $clientPackagingDefaults, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\SetClientPackagingDefaults($clientId, $clientPackagingDefaults, $headerParameters), $fetch);
    }

    /**
     * This method requires the **Companies:Get** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var int $page Optional page number
     *     @var int $page_size Optional page size
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetCompaniesUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetCompaniesForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetCompaniesNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetCompaniesNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetCompaniesConflictException
     * @throws \CatchE\OpenApi2\Exception\GetCompaniesInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\CompaniesGet|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getCompanies(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetCompanies($queryParameters), $fetch);
    }

    /**
     * Lookup the details for an individual company using the specified company id.
     * This method requires the **Companies:Get** permission to be associated with your role.
     *
     * @param string $companyId Company Id to lookup
     * @param string $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetCompanyUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetCompanyForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetCompanyNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetCompanyNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetCompanyInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Company|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getCompany(string $companyId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetCompany($companyId), $fetch);
    }

    /**
     * This method requires the **Contacts:Get** permission to be associcted with the role.
     *
     * @param array $queryParameters {
     *
     *     @var string $include_inactive_flag Set to yes if inactive contact job titles required in the list
     *     @var int $page Optional page number
     *     @var int $page_size Optional page size
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetContactJobTitlesUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetContactJobTitlesForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetContactJobTitlesNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetContactJobTitlesNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetContactJobTitlesConflictException
     * @throws \CatchE\OpenApi2\Exception\GetContactJobTitlesUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\GetContactJobTitlesInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\ContactJobTitlesGet|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getContactJobTitles(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetContactJobTitles($queryParameters), $fetch);
    }

    /**
     * This method requires the **Contacts:Create** permission to be associcted with the role.
     *
     * @param array $jobTitle         JSON payload
     * @param array $headerParameters {
     *
     *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\CreateContactJobTitleUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\CreateContactJobTitleForbiddenException
     * @throws \CatchE\OpenApi2\Exception\CreateContactJobTitleNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\CreateContactJobTitleUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\CreateContactJobTitleUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\CreateContactJobTitleInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\ContactJobTitlesGet|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function createContactJobTitle(array $jobTitle, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\CreateContactJobTitle($jobTitle, $headerParameters), $fetch);
    }

    /**
     * This method requires the **Contacts:Delete** permission to be associated with your role.
     *
     * @param string $contactJobTitleId Contact job title Id
     * @param string $fetch             Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\DeleteContactJobTitleUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\DeleteContactJobTitleForbiddenException
     * @throws \CatchE\OpenApi2\Exception\DeleteContactJobTitleNotFoundException
     * @throws \CatchE\OpenApi2\Exception\DeleteContactJobTitleNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\DeleteContactJobTitleInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function deleteContactJobTitle(string $contactJobTitleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\DeleteContactJobTitle($contactJobTitleId), $fetch);
    }

    /**
     * This method requires the **Contacts:Get** permission to be associcted with the role.
     *
     * @param string $contactJobTitleId Contact job title Id
     * @param string $fetch             Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetContactJobTitleUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetContactJobTitleForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetContactJobTitleNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetContactJobTitleNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetContactJobTitleInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\ContactJobTitleGet|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getContactJobTitle(string $contactJobTitleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetContactJobTitle($contactJobTitleId), $fetch);
    }

    /**
     * This method requires the **Contacts:Update** permission to be associated with your role.
     *
     * @param string                                 $contactJobTitleId Contact Id to update
     * @param \CatchE\OpenApi2\Model\ContactJobTitle $contactJobTitle   JSON Payload
     * @param array                                  $headerParameters  {
     *
     *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\UpdateContactJobTitleUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\UpdateContactJobTitleForbiddenException
     * @throws \CatchE\OpenApi2\Exception\UpdateContactJobTitleNotFoundException
     * @throws \CatchE\OpenApi2\Exception\UpdateContactJobTitleNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\UpdateContactJobTitleUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\UpdateContactJobTitleUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\UpdateContactJobTitleInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\ContactJobTitleGet|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function updateContactJobTitle(string $contactJobTitleId, Model\ContactJobTitle $contactJobTitle, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\UpdateContactJobTitle($contactJobTitleId, $contactJobTitle, $headerParameters), $fetch);
    }

    /**
     * This method requires the **Contacts:Get** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var string $contact_id Contact Id
     *     @var string $contact_type_id Optional contact type Id
     *     @var int $page Optional page number
     *     @var int $page_size Optional page size
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetContactTypeAllocationsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetContactTypeAllocationsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetContactTypeAllocationsNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetContactTypeAllocationsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetContactTypeAllocationsConflictException
     * @throws \CatchE\OpenApi2\Exception\GetContactTypeAllocationsUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\GetContactTypeAllocationsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\ContactTypeAllocationGet[]|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getContactTypeAllocations(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetContactTypeAllocations($queryParameters), $fetch);
    }

    /**
     * This method requires **Contacts:Create** permission to be associated with the role.
     *
     * @param array  $contactTypeAllocation JSON payload
     * @param string $fetch                 Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\CreateContactTypeAllocationUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\CreateContactTypeAllocationForbiddenException
     * @throws \CatchE\OpenApi2\Exception\CreateContactTypeAllocationNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\CreateContactTypeAllocationUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\CreateContactTypeAllocationUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\CreateContactTypeAllocationInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\ContactTypeAllocationGet[]|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function createContactTypeAllocation(array $contactTypeAllocation, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\CreateContactTypeAllocation($contactTypeAllocation), $fetch);
    }

    /**
     * This method requires **Contacts:Delete** permission to be associated with the role.
     *
     * @param string $contactId     Contact Id
     * @param string $contactTypeId Contact type Id
     * @param string $fetch         Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\DeleteContactTypeAllocationUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\DeleteContactTypeAllocationForbiddenException
     * @throws \CatchE\OpenApi2\Exception\DeleteContactTypeAllocationNotFoundException
     * @throws \CatchE\OpenApi2\Exception\DeleteContactTypeAllocationNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\DeleteContactTypeAllocationUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\DeleteContactTypeAllocationInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function deleteContactTypeAllocation(string $contactId, string $contactTypeId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\DeleteContactTypeAllocation($contactId, $contactTypeId), $fetch);
    }

    /**
     * 'This method requires the **Contacts:Get** permission to be associated with your role.'.
     *
     * @param array $queryParameters {
     *
     *     @var string $include_inactive_flag Set to yes if inactive contact types required in the list
     *     @var int $page Optional page number
     *     @var int $page_size Optional page size
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetContactTypesUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetContactTypesForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetContactTypesNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetContactTypesNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetContactTypesConflictException
     * @throws \CatchE\OpenApi2\Exception\GetContactTypesUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\GetContactTypesInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\ContactTypesGet|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getContactTypes(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetContactTypes($queryParameters), $fetch);
    }

    /**
     * This method requires the **Contacts:Create** permission to be associated with your role.
     *
     * @param array $contactType      JSON payload
     * @param array $headerParameters {
     *
     *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\CreateContactTypeUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\CreateContactTypeForbiddenException
     * @throws \CatchE\OpenApi2\Exception\CreateContactTypeNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\CreateContactTypeUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\CreateContactTypeUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\CreateContactTypeInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\ContactTypesGet|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function createContactType(array $contactType, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\CreateContactType($contactType, $headerParameters), $fetch);
    }

    /**
     * This method requires the **Contacts:Delete** permission to be associated with your role.
     *
     * @param string $contactTypeId Contact type id to delete
     * @param string $fetch         Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\DeleteContactTypeUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\DeleteContactTypeForbiddenException
     * @throws \CatchE\OpenApi2\Exception\DeleteContactTypeNotFoundException
     * @throws \CatchE\OpenApi2\Exception\DeleteContactTypeNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\DeleteContactTypeInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function deleteContactType(string $contactTypeId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\DeleteContactType($contactTypeId), $fetch);
    }

    /**
     * This method requires the **Contacts:Get** permission to be associated with your role.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetContactTypeUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetContactTypeForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetContactTypeNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetContactTypeNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetContactTypeInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\ContactTypeGet|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getContactType(string $contactTypeId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetContactType($contactTypeId), $fetch);
    }

    /**
     * This method requires the **Contacts:Update** permission to be associated with your role.
     *
     * @param string                             $contactTypeId    Contact type id to update
     * @param \CatchE\OpenApi2\Model\ContactType $contactType      JSON Payload
     * @param array                              $headerParameters {
     *
     *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\UpdateContactTypeUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\UpdateContactTypeForbiddenException
     * @throws \CatchE\OpenApi2\Exception\UpdateContactTypeNotFoundException
     * @throws \CatchE\OpenApi2\Exception\UpdateContactTypeNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\UpdateContactTypeUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\UpdateContactTypeUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\UpdateContactTypeInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\ContactTypeGet|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function updateContactType(string $contactTypeId, Model\ContactType $contactType, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\UpdateContactType($contactTypeId, $contactType, $headerParameters), $fetch);
    }

    /**
     * This method requires **Contacts:Create** permission to be associated with the role.
     *
     * @param array  $contactAllocation JSON payload
     * @param string $fetch             Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\CreateAllocationUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\CreateAllocationForbiddenException
     * @throws \CatchE\OpenApi2\Exception\CreateAllocationNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\CreateAllocationUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\CreateAllocationUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\CreateAllocationInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\ContactAllocationGet[]|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function createAllocation(array $contactAllocation, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\CreateAllocation($contactAllocation), $fetch);
    }

    /**
     * 'This method requires the **Contacts:Get** permission to be associated with your role.'.
     *
     * @param array $queryParameters {
     *
     *     @var string $table_name Table name
     *     @var string $record_id Record id in the linked table
     *     @var string $include_inactive_flag Set to yes if inactive contacts required in the list
     *     @var int $page Optional page number
     *     @var int $page_size Optional page size
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetContactsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetContactsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetContactsNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetContactsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetContactsConflictException
     * @throws \CatchE\OpenApi2\Exception\GetContactsUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\GetContactsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\ContactsGet|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getContacts(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetContacts($queryParameters), $fetch);
    }

    /**
     * Creata a new contact
     * This method requires the **Contacts:Create** permission to be associated with your role.
     *
     * @param array $contact          JSON payload
     * @param array $headerParameters {
     *
     *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\CreateContactUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\CreateContactForbiddenException
     * @throws \CatchE\OpenApi2\Exception\CreateContactNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\CreateContactUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\CreateContactUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\CreateContactInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Contacts|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function createContact(array $contact, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\CreateContact($contact, $headerParameters), $fetch);
    }

    /**
     * This method requires **Contacts:Delete** permission to be associated with the role.
     *
     * @param string $contactId Contact Id
     * @param string $tableName Table name
     * @param string $recordId  Record id from the linked table
     * @param string $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\DeleteAllocationUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\DeleteAllocationForbiddenException
     * @throws \CatchE\OpenApi2\Exception\DeleteAllocationNotFoundException
     * @throws \CatchE\OpenApi2\Exception\DeleteAllocationNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\DeleteAllocationUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\DeleteAllocationInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function deleteAllocation(string $contactId, string $tableName, string $recordId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\DeleteAllocation($contactId, $tableName, $recordId), $fetch);
    }

    /**
     * This method requires the **Contacts:Delete** permission to be associated with your role.
     *
     * @param string $contactId Contact id to delete
     * @param string $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\DeleteContactUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\DeleteContactForbiddenException
     * @throws \CatchE\OpenApi2\Exception\DeleteContactNotFoundException
     * @throws \CatchE\OpenApi2\Exception\DeleteContactNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\DeleteContactInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function deleteContact(string $contactId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\DeleteContact($contactId), $fetch);
    }

    /**
     * This method requires the **Contacts:Get** permission to be associated with your role.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetContactUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetContactForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetContactNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetContactNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetContactInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Contact|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getContact(string $contactId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetContact($contactId), $fetch);
    }

    /**
     * This method requires the **Contacts:Update** permission to be associated with your role.
     *
     * @param string                               $contactId        Contact Id to update
     * @param \CatchE\OpenApi2\Model\ContactUpdate $contact          JSON Payload
     * @param array                                $headerParameters {
     *
     *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\UpdateContactUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\UpdateContactForbiddenException
     * @throws \CatchE\OpenApi2\Exception\UpdateContactNotFoundException
     * @throws \CatchE\OpenApi2\Exception\UpdateContactNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\UpdateContactUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\UpdateContactUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\UpdateContactInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Contact|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function updateContact(string $contactId, Model\ContactUpdate $contact, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\UpdateContact($contactId, $contact, $headerParameters), $fetch);
    }

    /**
     * This method requires the **ContractBilling:Get** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var string $payroll_date Payroll date
     *     @var string $pay_cycle_code Pay cycle code
     *     @var string $contract_start_date Contract start date
     *     @var int $payroll_cut_off_days Payroll cut off days
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\CalculateStartPeriodicDateUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\CalculateStartPeriodicDateForbiddenException
     * @throws \CatchE\OpenApi2\Exception\CalculateStartPeriodicDateNotFoundException
     * @throws \CatchE\OpenApi2\Exception\CalculateStartPeriodicDateNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\CalculateStartPeriodicDateUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\CalculateStartPeriodicDateLockedException
     * @throws \CatchE\OpenApi2\Exception\CalculateStartPeriodicDateInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\StartPeriodicDateGet|\Psr\Http\Message\ResponseInterface
     */
    public function calculateStartPeriodicDate(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\CalculateStartPeriodicDate($queryParameters), $fetch);
    }

    /**
     * This method requires the **ContractBilling:Unpost** permission to be associated with your role.
     *
     * @param string $batchNo Invoice batch no to unpost
     * @param string $fetch   Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\CanInvoiceBatchBeUnPostedUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\CanInvoiceBatchBeUnPostedForbiddenException
     * @throws \CatchE\OpenApi2\Exception\CanInvoiceBatchBeUnPostedNotFoundException
     * @throws \CatchE\OpenApi2\Exception\CanInvoiceBatchBeUnPostedUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\CanInvoiceBatchBeUnPostedLockedException
     * @throws \CatchE\OpenApi2\Exception\CanInvoiceBatchBeUnPostedInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function canInvoiceBatchBeUnPosted(string $batchNo, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\CanInvoiceBatchBeUnPosted($batchNo), $fetch);
    }

    /**
     * This method requires the **ContractBilling:Unpost** permission to be associated with your role.
     *
     * @param string $batchNo        Invoice batch no to unpost
     * @param array  $formParameters {
     *
     *     @var string $override_warnings_flag If set to 'yes', invoice exported warning will be suppressed and unposting will continue.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\UnpostInvoiceBatchUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\UnpostInvoiceBatchForbiddenException
     * @throws \CatchE\OpenApi2\Exception\UnpostInvoiceBatchNotFoundException
     * @throws \CatchE\OpenApi2\Exception\UnpostInvoiceBatchUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\UnpostInvoiceBatchLockedException
     * @throws \CatchE\OpenApi2\Exception\UnpostInvoiceBatchInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function unpostInvoiceBatch(string $batchNo, array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\UnpostInvoiceBatch($batchNo, $formParameters, $headerParameters), $fetch);
    }

    /**
     * This method requires the **ContractBilling:Unpost** permission to be associated with your role.
     *
     * @param string $invoiceNo Invoice no to unpost
     * @param string $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\CanInvoiceBeUnPostedUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\CanInvoiceBeUnPostedForbiddenException
     * @throws \CatchE\OpenApi2\Exception\CanInvoiceBeUnPostedNotFoundException
     * @throws \CatchE\OpenApi2\Exception\CanInvoiceBeUnPostedUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\CanInvoiceBeUnPostedLockedException
     * @throws \CatchE\OpenApi2\Exception\CanInvoiceBeUnPostedInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function canInvoiceBeUnPosted(string $invoiceNo, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\CanInvoiceBeUnPosted($invoiceNo), $fetch);
    }

    /**
     * This method requires the **ContractBilling:Unpost** permission to be associated with your role.
     *
     * @param string $invoiceNo      Invoice no to unpost
     * @param array  $formParameters {
     *
     *     @var string $override_warnings_flag If set to 'yes', invoice exported warning will be suppressed and unposting will continue.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\UnpostInvoiceUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\UnpostInvoiceForbiddenException
     * @throws \CatchE\OpenApi2\Exception\UnpostInvoiceNotFoundException
     * @throws \CatchE\OpenApi2\Exception\UnpostInvoiceUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\UnpostInvoiceLockedException
     * @throws \CatchE\OpenApi2\Exception\UnpostInvoiceInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function unpostInvoice(string $invoiceNo, array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\UnpostInvoice($invoiceNo, $formParameters, $headerParameters), $fetch);
    }

    /**
     * This method requires the **ContractBilling:Edit** permission to be associated with your role.
     *
     * @param \CatchE\OpenApi2\Model\ContractBillingEdit $body             JSON payload
     * @param array                                      $headerParameters {
     *
     *     @var string $Delegated-Locking-Session-Id (Optional) Locking responsibility will be delegated to the specified Session Id.
     *
     * This header enables the client to instruct the API to merely verify the presence of locks with the specified session id, but not attempt to obtain them itself. It requires the **DelegatedLocking** permission to be associated with your role.
     *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\EditContractBillingUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\EditContractBillingForbiddenException
     * @throws \CatchE\OpenApi2\Exception\EditContractBillingNotFoundException
     * @throws \CatchE\OpenApi2\Exception\EditContractBillingNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\EditContractBillingUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\EditContractBillingUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\EditContractBillingLockedException
     * @throws \CatchE\OpenApi2\Exception\EditContractBillingFailedDependencyException
     * @throws \CatchE\OpenApi2\Exception\EditContractBillingInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\ContractBillingSuccess|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function editContractBilling(Model\ContractBillingEdit $body, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\EditContractBilling($body, $headerParameters), $fetch);
    }

    /**
     * This method requires the **ContractBilling:Get** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var string $contract_id Contract Id
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\HasContractStartedBillingUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\HasContractStartedBillingForbiddenException
     * @throws \CatchE\OpenApi2\Exception\HasContractStartedBillingNotFoundException
     * @throws \CatchE\OpenApi2\Exception\HasContractStartedBillingNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\HasContractStartedBillingUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\HasContractStartedBillingLockedException
     * @throws \CatchE\OpenApi2\Exception\HasContractStartedBillingInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\HasContractStartedBillingGet|\Psr\Http\Message\ResponseInterface
     */
    public function hasContractStartedBilling(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\HasContractStartedBilling($queryParameters), $fetch);
    }

    /**
     * This method requires the **ContractBilling:Vary** permission to be associated with your role.
     *
     * @param \CatchE\OpenApi2\Model\ContractBillingVary $body             JSON payload
     * @param array                                      $headerParameters {
     *
     *     @var string $Delegated-Locking-Session-Id (Optional) Locking responsibility will be delegated to the specified Session Id.
     *
     * This header enables the client to instruct the API to merely verify the presence of locks with the specified session id, but not attempt to obtain them itself. It requires the **DelegatedLocking** permission to be associated with your role.
     *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\VaryContractBillingUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\VaryContractBillingForbiddenException
     * @throws \CatchE\OpenApi2\Exception\VaryContractBillingNotFoundException
     * @throws \CatchE\OpenApi2\Exception\VaryContractBillingNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\VaryContractBillingUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\VaryContractBillingUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\VaryContractBillingLockedException
     * @throws \CatchE\OpenApi2\Exception\VaryContractBillingFailedDependencyException
     * @throws \CatchE\OpenApi2\Exception\VaryContractBillingInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\ContractBillingSuccess|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function varyContractBilling(Model\ContractBillingVary $body, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\VaryContractBilling($body, $headerParameters), $fetch);
    }

    /**
     * This method requires the **ContractBudgets:CreateFinalEntries** permission to be associated with your role.
     *
     * @param array $formParameters {
     *
     *     @var string $contract_id Contract Id
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\CreateContractBudgetFinalEntriesUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\CreateContractBudgetFinalEntriesForbiddenException
     * @throws \CatchE\OpenApi2\Exception\CreateContractBudgetFinalEntriesNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\CreateContractBudgetFinalEntriesUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\CreateContractBudgetFinalEntriesUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\CreateContractBudgetFinalEntriesLockedException
     * @throws \CatchE\OpenApi2\Exception\CreateContractBudgetFinalEntriesInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\ContractBudgetsCreateFinalEntriesSuccess|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function createContractBudgetFinalEntries(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\CreateContractBudgetFinalEntries($formParameters, $headerParameters), $fetch);
    }

    /**
     * This method requires the **ContractBudgets:Get** permission to be associated with your role.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetContractBudgetUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetContractBudgetForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetContractBudgetNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetContractBudgetNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetContractBudgetInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\ContractBudget|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getContractBudget(string $contractBudgetId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetContractBudget($contractBudgetId), $fetch);
    }

    /**
     * This method requires the **ContractBudgets:Get** permission to be associated with your role.
     *
     * Allows you to retrieve Budget details for a Contract.
     *
     *
     * A single Contract may have 1000s of records depending on the specified Periodic Interval, Posting Classes  and Term (eg Weekly Pay Cycle with 10 Posting Classes (FIN, MAINT, REG etc) over 60 months will have _2600_ budget records.
     *
     * Use the Billing Period, Posting Class Code and Page filters to return a manageable set of results.
     *
     * @param array $queryParameters {
     *
     *     @var string $contract_id Contract Id
     *     @var int $billing_period Optional billing period restriction
     *     @var string $posting_class_code Optional posting class code restriction
     *     @var int $page Optional page number
     *     @var int $page_size Optional page size
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetContractBudgetsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetContractBudgetsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetContractBudgetsNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetContractBudgetsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetContractBudgetsConflictException
     * @throws \CatchE\OpenApi2\Exception\GetContractBudgetsUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\GetContractBudgetsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\ContractBudgetsGet[]|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getContractBudgets(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetContractBudgets($queryParameters), $fetch);
    }

    /**
     * This method requires the **ContractBudgets:Insert** permission to be associated with your role.
     *
     * @param array $body             JSON payload
     * @param array $headerParameters {
     *
     *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\InsertContractBudgetsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\InsertContractBudgetsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\InsertContractBudgetsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\InsertContractBudgetsUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\InsertContractBudgetsUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\InsertContractBudgetsLockedException
     * @throws \CatchE\OpenApi2\Exception\InsertContractBudgetsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\FmContractBudgetsInsertPostResponse201|\Psr\Http\Message\ResponseInterface
     */
    public function insertContractBudgets(array $body, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\InsertContractBudgets($body, $headerParameters), $fetch);
    }

    /**
     * The rules governing whether the create final budget entries functionality is available  for an associated contract type are as follows:
     * 1.  A configuration entry for 'lease_finalise' exists for the contract type in the [gl_posting_map_reporting] table.
     *
     * The rules governing whether a contract can be finalised are as follows:
     * 1.  A "Suspend Date" is entered.
     * 2.  There are no transactions in 'pending' or 'on-hold' status in the Payments and Maintenance areas.
     * 3.  At least one period has been billed.
     *
     * This method requires the **ContractBudgets:CreateFinalEntries** permission to be associated with your role.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\PerformContractBudgetCreateFinalEntriesPreCheckUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\PerformContractBudgetCreateFinalEntriesPreCheckForbiddenException
     * @throws \CatchE\OpenApi2\Exception\PerformContractBudgetCreateFinalEntriesPreCheckNotFoundException
     * @throws \CatchE\OpenApi2\Exception\PerformContractBudgetCreateFinalEntriesPreCheckNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\PerformContractBudgetCreateFinalEntriesPreCheckInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\ContractBudgetsCreateFinalEntriesPreCheck|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function performContractBudgetCreateFinalEntriesPreCheck(string $contractId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\PerformContractBudgetCreateFinalEntriesPreCheck($contractId), $fetch);
    }

    /**
     * This method requires the **ContractBudgets:Update** permission to be associated with your role.
     *
     * @param \CatchE\OpenApi2\Model\ContractBudgetsUpdate $body             JSON payload
     * @param array                                        $headerParameters {
     *
     *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\UpdateContractBudgetsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\UpdateContractBudgetsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\UpdateContractBudgetsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\UpdateContractBudgetsUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\UpdateContractBudgetsUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\UpdateContractBudgetsLockedException
     * @throws \CatchE\OpenApi2\Exception\UpdateContractBudgetsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\FmContractBudgetsUpdatePostResponse201|\Psr\Http\Message\ResponseInterface
     */
    public function updateContractBudgets(Model\ContractBudgetsUpdate $body, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\UpdateContractBudgets($body, $headerParameters), $fetch);
    }

    /**
     * This method requires the **ContractPaymentStructures:Get** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var string $contract_id Contract Id
     *     @var string $supplier_id Supplier Id
     *     @var string $payment_type Payment Type
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\HasContractPostedPaymentsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\HasContractPostedPaymentsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\HasContractPostedPaymentsNotFoundException
     * @throws \CatchE\OpenApi2\Exception\HasContractPostedPaymentsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\HasContractPostedPaymentsUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\HasContractPostedPaymentsLockedException
     * @throws \CatchE\OpenApi2\Exception\HasContractPostedPaymentsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\HasContractPostedPaymentsGet|\Psr\Http\Message\ResponseInterface
     */
    public function hasContractPostedPayments(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\HasContractPostedPayments($queryParameters), $fetch);
    }

    /**
     * This method requires the **ContractPayouts:Get** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var string $contract_id Optional contract id - only show contract payouts for the specified contract
     *     @var int $page Optional page number
     *     @var int $page_size Optional page size
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetContractPayoutsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetContractPayoutsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetContractPayoutsNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetContractPayoutsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetContractPayoutsConflictException
     * @throws \CatchE\OpenApi2\Exception\GetContractPayoutsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\ContractPayoutsGet|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getContractPayouts(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetContractPayouts($queryParameters), $fetch);
    }

    /**
     * This method requires the **ContractPayouts:Create** permission to be associated with your role.
     *
     * @param \CatchE\OpenApi2\Model\ContractPayoutsCreate $body  JSON payload
     * @param string                                       $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\CreateContractPayoutUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\CreateContractPayoutForbiddenException
     * @throws \CatchE\OpenApi2\Exception\CreateContractPayoutNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\CreateContractPayoutUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\CreateContractPayoutUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\CreateContractPayoutInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\ContractPayout|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function createContractPayout(Model\ContractPayoutsCreate $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\CreateContractPayout($body), $fetch);
    }

    /**
     * This method requires the **ContractPayouts:Delete** permission to be associated with your role.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\DeleteContractPayoutUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\DeleteContractPayoutForbiddenException
     * @throws \CatchE\OpenApi2\Exception\DeleteContractPayoutNotFoundException
     * @throws \CatchE\OpenApi2\Exception\DeleteContractPayoutNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\DeleteContractPayoutUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\DeleteContractPayoutInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function deleteContractPayout(string $contractPayoutId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\DeleteContractPayout($contractPayoutId), $fetch);
    }

    /**
     * This method requires the **ContractPayouts:Get** permission to be associated with your role.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetContractPayoutUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetContractPayoutForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetContractPayoutNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetContractPayoutNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetContractPayoutInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\ContractPayout|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getContractPayout(string $contractPayoutId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetContractPayout($contractPayoutId), $fetch);
    }

    /**
     * This method requires the **ContractPayouts:Update** permission to be associated with your role.
     * This method can only be called for contract payouts in **pending** state.
     *
     * @param \CatchE\OpenApi2\Model\ContractPayoutsUpdate $body  JSON payload
     * @param string                                       $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\UpdateContractPayoutUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\UpdateContractPayoutForbiddenException
     * @throws \CatchE\OpenApi2\Exception\UpdateContractPayoutNotFoundException
     * @throws \CatchE\OpenApi2\Exception\UpdateContractPayoutNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\UpdateContractPayoutUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\UpdateContractPayoutUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\UpdateContractPayoutInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\ContractPayout|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function updateContractPayout(string $contractPayoutId, Model\ContractPayoutsUpdate $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\UpdateContractPayout($contractPayoutId, $body), $fetch);
    }

    /**
     * This method requires the **ContractPayouts:Get** permission to be associated with your role.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetContractPayoutAccessUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetContractPayoutAccessForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetContractPayoutAccessNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetContractPayoutAccessNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetContractPayoutAccessUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\GetContractPayoutAccessInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\FmContractPayoutsContractPayoutIdAccessAccessTypeGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getContractPayoutAccess(string $contractPayoutId, string $accessType, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetContractPayoutAccess($contractPayoutId, $accessType), $fetch);
    }

    /**
     * This method requires the **ContractPayouts:Get** permission to be associated with your role.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetContractPayoutAvailableTransitionsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetContractPayoutAvailableTransitionsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetContractPayoutAvailableTransitionsNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetContractPayoutAvailableTransitionsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetContractPayoutAvailableTransitionsUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\GetContractPayoutAvailableTransitionsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\FmContractPayoutsContractPayoutIdAvailableTransitionsGetResponse200Item[]|\Psr\Http\Message\ResponseInterface
     */
    public function getContractPayoutAvailableTransitions(string $contractPayoutId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetContractPayoutAvailableTransitions($contractPayoutId), $fetch);
    }

    /**
     * Prepare a payout value estimate for a given contract.
     * This method requires the **ContractPayouts:Get** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var string $contract_id Contract id
     *     @var string $payout_date Payout date in YYYY-MM-DD format
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetContractPayoutEstimateUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetContractPayoutEstimateForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetContractPayoutEstimateNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetContractPayoutEstimateNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetContractPayoutEstimateUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\GetContractPayoutEstimateInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\ContractPayoutsEstimate|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getContractPayoutEstimate(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetContractPayoutEstimate($queryParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetContractPayoutInitialTransitionsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetContractPayoutInitialTransitionsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetContractPayoutInitialTransitionsNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetContractPayoutInitialTransitionsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetContractPayoutInitialTransitionsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\FmContractPayoutInitialTransitionsGetResponse200Item[]|\Psr\Http\Message\ResponseInterface
     */
    public function getContractPayoutInitialTransitions(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetContractPayoutInitialTransitions(), $fetch);
    }

    /**
     * This method requires the **ContractPayoutStatuses:Get** permission to be associated with your role.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetContractPayoutStatusUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetContractPayoutStatusForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetContractPayoutStatusNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetContractPayoutStatusNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetContractPayoutStatusInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\PayoutStatus|\Psr\Http\Message\ResponseInterface
     */
    public function getContractPayoutStatus(string $contractPayoutStatusId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetContractPayoutStatus($contractPayoutStatusId), $fetch);
    }

    /**
     * This method requires the **ContractPayoutStatuses:Get** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var int $page Optional page number
     *     @var int $page_size Optional page size
     *     @var bool $restricted_flag Restrict the list to those statuses available to the authenticated user for update and transition operations
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetContractPayoutStatusesUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetContractPayoutStatusesForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetContractPayoutStatusesNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetContractPayoutStatusesNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetContractPayoutStatusesConflictException
     * @throws \CatchE\OpenApi2\Exception\GetContractPayoutStatusesInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\PayoutStatusesGet|\Psr\Http\Message\ResponseInterface
     */
    public function getContractPayoutStatuses(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetContractPayoutStatuses($queryParameters), $fetch);
    }

    /**
     * Transition a Contract Payout into **accepted** state.
     * This method requires the **ContractPayouts:Update** permission to be associated with your role.
     *
     * @param \CatchE\OpenApi2\Model\ContractPayoutsAccepted $body  JSON payload
     * @param string                                         $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoAcceptedStateUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoAcceptedStateForbiddenException
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoAcceptedStateNotFoundException
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoAcceptedStateNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoAcceptedStateUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoAcceptedStateUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoAcceptedStateInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\ContractPayout|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function transitionContractPayoutIntoAcceptedState(string $contractPayoutId, Model\ContractPayoutsAccepted $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\TransitionContractPayoutIntoAcceptedState($contractPayoutId, $body), $fetch);
    }

    /**
     * Transition a Contract Payout into **financier** state.
     * This method requires the **ContractPayouts:Update** permission to be associated with your role.
     *
     * @param \CatchE\OpenApi2\Model\ContractPayoutsRequested $body  JSON payload
     * @param string                                          $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoFinancierStateUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoFinancierStateForbiddenException
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoFinancierStateNotFoundException
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoFinancierStateNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoFinancierStateUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoFinancierStateUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoFinancierStateInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\ContractPayout|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function transitionContractPayoutIntoFinancierState(string $contractPayoutId, Model\ContractPayoutsRequested $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\TransitionContractPayoutIntoFinancierState($contractPayoutId, $body), $fetch);
    }

    /**
     * Transition a Contract Payout into **invoice-sent** state.
     * This method requires the **ContractPayouts:Update** and **ContractPayouts:InvoiceSent** permissions to be associated with your role.
     *
     * @param \CatchE\OpenApi2\Model\ContractPayoutsInvoiceSent $body  JSON payload
     * @param string                                            $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoInvoiceSentStateUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoInvoiceSentStateForbiddenException
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoInvoiceSentStateNotFoundException
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoInvoiceSentStateNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoInvoiceSentStateUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoInvoiceSentStateUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoInvoiceSentStateInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\ContractPayout|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function transitionContractPayoutIntoInvoiceSentState(string $contractPayoutId, Model\ContractPayoutsInvoiceSent $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\TransitionContractPayoutIntoInvoiceSentState($contractPayoutId, $body), $fetch);
    }

    /**
     * Transition a Contract Payout into **open** state. Typically performed by the Finance Manager.
     * This method requires the **ContractPayouts:Update** and **ContractPayouts:Open** permissions to be associated with your role.
     *
     * @param \CatchE\OpenApi2\Model\ContractPayoutsOpen $body  JSON payload
     * @param string                                     $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoOpenStateUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoOpenStateForbiddenException
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoOpenStateNotFoundException
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoOpenStateNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoOpenStateUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoOpenStateUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoOpenStateInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\ContractPayout|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function transitionContractPayoutIntoOpenState(string $contractPayoutId, Model\ContractPayoutsOpen $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\TransitionContractPayoutIntoOpenState($contractPayoutId, $body), $fetch);
    }

    /**
     * Transition a Contract Payout into **requested** state.
     * This method requires the **ContractPayouts:Update** permission to be associated with your role.
     *
     * @param \CatchE\OpenApi2\Model\ContractPayoutsRequested $body  JSON payload
     * @param string                                          $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoRequestedStateUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoRequestedStateForbiddenException
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoRequestedStateNotFoundException
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoRequestedStateNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoRequestedStateUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoRequestedStateUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoRequestedStateInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\ContractPayout|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function transitionContractPayoutIntoRequestedState(string $contractPayoutId, Model\ContractPayoutsRequested $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\TransitionContractPayoutIntoRequestedState($contractPayoutId, $body), $fetch);
    }

    /**
     * Transition a Contract Payout into **review** state.
     * This method requires the **ContractPayouts:Update** permission to be associated with your role.
     *
     * @param \CatchE\OpenApi2\Model\ContractPayoutsRequested $body  JSON payload
     * @param string                                          $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoReviewStateUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoReviewStateForbiddenException
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoReviewStateNotFoundException
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoReviewStateNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoReviewStateUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoReviewStateUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoReviewStateInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\ContractPayout|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function transitionContractPayoutIntoReviewState(string $contractPayoutId, Model\ContractPayoutsRequested $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\TransitionContractPayoutIntoReviewState($contractPayoutId, $body), $fetch);
    }

    /**
     * Transition a Contract Payout into **sent** state. For this method to execute, the specified contract payout must already be in 'open' status.
     * This method is *idempotent* and can be invoked multiple times to obtain the URI resource for the document to be supplied to the client.
     * This method requires the **ContractPayouts:Update** permission to be associated with your role.
     *
     * @param \CatchE\OpenApi2\Model\ContractPayoutsSent $body  JSON payload
     * @param string                                     $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoSentStateUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoSentStateForbiddenException
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoSentStateNotFoundException
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoSentStateNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoSentStateUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoSentStateUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoSentStateInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\ContractPayout|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function transitionContractPayoutIntoSentState(string $contractPayoutId, Model\ContractPayoutsSent $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\TransitionContractPayoutIntoSentState($contractPayoutId, $body), $fetch);
    }

    /**
     * This method changes the driver by creating a driver change event and optionally saves an odometer record.
     *
     * This method requires the **ContractEvents:ChangeDriver** permission to be
     * associated with your role.
     *
     * @param string                             $contractId       Contract Id
     * @param \CatchE\OpenApi2\Model\DriverEvent $driverEvent      JSON payload
     * @param array                              $headerParameters {
     *
     *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\ChangeContractDriverUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\ChangeContractDriverForbiddenException
     * @throws \CatchE\OpenApi2\Exception\ChangeContractDriverNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\ChangeContractDriverUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\ChangeContractDriverUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\ChangeContractDriverLockedException
     * @throws \CatchE\OpenApi2\Exception\ChangeContractDriverFailedDependencyException
     * @throws \CatchE\OpenApi2\Exception\ChangeContractDriverInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\ContractEvent|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function changeContractDriver(string $contractId, Model\DriverEvent $driverEvent, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\ChangeContractDriver($contractId, $driverEvent, $headerParameters), $fetch);
    }

    /**
     * This method requires the **Contract:FundsCheck** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var string $contract_id Contract Id
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetContractFundsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetContractFundsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetContractFundsNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetContractFundsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetContractFundsUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\GetContractFundsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\ContractFundsGet|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getContractFunds(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetContractFunds($queryParameters), $fetch);
    }

    /**
     * 'This method requires the **Countries:Get** permission to be associated with your role.'.
     *
     * @param array $queryParameters {
     *
     *     @var string $name name
     *
     * This field supports the wildcard % operator
     *     @var string $iso_code_2 ISO 3166-1 alpha-2 code.
     *
     * This field supports the wildcard % operator.
     *     @var string $iso_code_3 ISO 3166-1 alpha-3 code.
     *
     * This field supports the wildcard % operator.
     *     @var int $page Optional page number
     *     @var int $page_size Optional page size
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetCountriesUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetCountriesForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetCountriesNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetCountriesNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetCountriesConflictException
     * @throws \CatchE\OpenApi2\Exception\GetCountriesUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\GetCountriesInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\CountriesGet|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getCountries(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetCountries($queryParameters), $fetch);
    }

    /**
     * This method requires the **DriverAssets:Delete** permission to be associated with your role.
     *
     * @param array  $body  JSON payload
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\DeleteDriverAssetsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\DeleteDriverAssetsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\DeleteDriverAssetsNotFoundException
     * @throws \CatchE\OpenApi2\Exception\DeleteDriverAssetsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\DeleteDriverAssetsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function deleteDriverAssets(array $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\DeleteDriverAssets($body), $fetch);
    }

    /**
     * This method requires the **DriverAssets:Get** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var string $driver_id Driver Id
     *     @var int $page Optional page number
     *     @var int $page_size Optional page size
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetDriverAssetsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetDriverAssetsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetDriverAssetsNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetDriverAssetsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetDriverAssetsConflictException
     * @throws \CatchE\OpenApi2\Exception\GetDriverAssetsUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\GetDriverAssetsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\FmDriverAssetsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getDriverAssets(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetDriverAssets($queryParameters), $fetch);
    }

    /**
     * This method requires the **DriverAssets:Create** permission to be associated with your role.
     *
     * @param array $body             JSON payload
     * @param array $headerParameters {
     *
     *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\CreateDriverAssetsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\CreateDriverAssetsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\CreateDriverAssetsNotFoundException
     * @throws \CatchE\OpenApi2\Exception\CreateDriverAssetsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\CreateDriverAssetsUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\CreateDriverAssetsUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\CreateDriverAssetsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\DriverAsset[]|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function createDriverAssets(array $body, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\CreateDriverAssets($body, $headerParameters), $fetch);
    }

    /**
     * This method requires the **DriverAssets:Update** permission to be associated with your role.
     *
     * @param array $body             JSON payload
     * @param array $headerParameters {
     *
     *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\UpdateDriverAssetsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\UpdateDriverAssetsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\UpdateDriverAssetsNotFoundException
     * @throws \CatchE\OpenApi2\Exception\UpdateDriverAssetsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\UpdateDriverAssetsUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\UpdateDriverAssetsUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\UpdateDriverAssetsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\DriverAsset[]|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function updateDriverAssets(array $body, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\UpdateDriverAssets($body, $headerParameters), $fetch);
    }

    /**
     * @param array  $body  JSON payload
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\DeleteDriverLiabilitiesUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\DeleteDriverLiabilitiesForbiddenException
     * @throws \CatchE\OpenApi2\Exception\DeleteDriverLiabilitiesNotFoundException
     * @throws \CatchE\OpenApi2\Exception\DeleteDriverLiabilitiesNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\DeleteDriverLiabilitiesUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\DeleteDriverLiabilitiesInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function deleteDriverLiabilities(array $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\DeleteDriverLiabilities($body), $fetch);
    }

    /**
     * This method requires the **DriverLiabilities:Get** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var string $driver_id Driver Id
     *     @var int $page Optional page number
     *     @var int $page_size Optional page size
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetDriverLiabilitiesUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetDriverLiabilitiesForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetDriverLiabilitiesNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetDriverLiabilitiesNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetDriverLiabilitiesConflictException
     * @throws \CatchE\OpenApi2\Exception\GetDriverLiabilitiesUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\GetDriverLiabilitiesInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\FmDriverLiabilitiesGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getDriverLiabilities(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetDriverLiabilities($queryParameters), $fetch);
    }

    /**
     * This method requires the **DriverLiabilities:Create** permission to be associated with your role.
     *
     * @param array $body             JSON payload
     * @param array $headerParameters {
     *
     *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\CreateDriverLiabilitiesUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\CreateDriverLiabilitiesForbiddenException
     * @throws \CatchE\OpenApi2\Exception\CreateDriverLiabilitiesNotFoundException
     * @throws \CatchE\OpenApi2\Exception\CreateDriverLiabilitiesNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\CreateDriverLiabilitiesUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\CreateDriverLiabilitiesUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\CreateDriverLiabilitiesInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\DriverLiability[]|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function createDriverLiabilities(array $body, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\CreateDriverLiabilities($body, $headerParameters), $fetch);
    }

    /**
     * This method requires the **DriverLiabilities:Update** permission to be associated with your role.
     *
     * @param array $body             JSON payload
     * @param array $headerParameters {
     *
     *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\UpdateDriverLiabilitiesUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\UpdateDriverLiabilitiesForbiddenException
     * @throws \CatchE\OpenApi2\Exception\UpdateDriverLiabilitiesNotFoundException
     * @throws \CatchE\OpenApi2\Exception\UpdateDriverLiabilitiesNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\UpdateDriverLiabilitiesUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\UpdateDriverLiabilitiesUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\UpdateDriverLiabilitiesInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\DriverLiability[]|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function updateDriverLiabilities(array $body, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\UpdateDriverLiabilities($body, $headerParameters), $fetch);
    }

    /**
     * This method requires the **DriverAssets:Delete** permission to be associated with your role.
     *
     * @param string $driverAssetId Driver Asset Id
     * @param string $fetch         Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\DeleteDriverAssetUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\DeleteDriverAssetForbiddenException
     * @throws \CatchE\OpenApi2\Exception\DeleteDriverAssetNotFoundException
     * @throws \CatchE\OpenApi2\Exception\DeleteDriverAssetNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\DeleteDriverAssetInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function deleteDriverAsset(string $driverAssetId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\DeleteDriverAsset($driverAssetId), $fetch);
    }

    /**
     * This method requires the **DriverAssets:Get** permission to be associated with your role.
     *
     * @param string $driverAssetId Driver Asset Id
     * @param string $fetch         Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetDriverAssetUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetDriverAssetForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetDriverAssetNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetDriverAssetNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetDriverAssetInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\DriverAsset|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getDriverAsset(string $driverAssetId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetDriverAsset($driverAssetId), $fetch);
    }

    /**
     * This method requires the **DriverAssets:Update** permission to be associated with your role.
     *
     * @param string                                   $driverAssetId    Driver Asset Id
     * @param \CatchE\OpenApi2\Model\UpdateDriverAsset $body             JSON payload
     * @param array                                    $headerParameters {
     *
     *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\UpdateDriverAssetUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\UpdateDriverAssetForbiddenException
     * @throws \CatchE\OpenApi2\Exception\UpdateDriverAssetNotFoundException
     * @throws \CatchE\OpenApi2\Exception\UpdateDriverAssetNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\UpdateDriverAssetUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\UpdateDriverAssetUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\UpdateDriverAssetInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\DriverAsset|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function updateDriverAsset(string $driverAssetId, Model\UpdateDriverAsset $body, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\UpdateDriverAsset($driverAssetId, $body, $headerParameters), $fetch);
    }

    /**
     * This method requires the **DriverLiabilities:Delete** permission to be associated with your role.
     *
     * @param string $driverLiabilityId Driver Liability Id
     * @param string $fetch             Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\DeleteDriverLiabilityUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\DeleteDriverLiabilityForbiddenException
     * @throws \CatchE\OpenApi2\Exception\DeleteDriverLiabilityNotFoundException
     * @throws \CatchE\OpenApi2\Exception\DeleteDriverLiabilityNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\DeleteDriverLiabilityInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function deleteDriverLiability(string $driverLiabilityId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\DeleteDriverLiability($driverLiabilityId), $fetch);
    }

    /**
     * This method requires the **DriverLiabilities:Get** permission to be associated with your role.
     *
     * @param string $driverLiabilityId Driver Liability Id
     * @param string $fetch             Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetDriverLiabilityUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetDriverLiabilityForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetDriverLiabilityNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetDriverLiabilityNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetDriverLiabilityInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\DriverLiability|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getDriverLiability(string $driverLiabilityId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetDriverLiability($driverLiabilityId), $fetch);
    }

    /**
     * This method requires the **DriverLiabilities:Update** permission to be associated with your role.
     *
     * @param string                                       $driverLiabilityId Driver Liability Id
     * @param \CatchE\OpenApi2\Model\UpdateDriverLiability $body              JSON payload
     * @param array                                        $headerParameters  {
     *
     *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\UpdateDriverLiabilityUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\UpdateDriverLiabilityForbiddenException
     * @throws \CatchE\OpenApi2\Exception\UpdateDriverLiabilityNotFoundException
     * @throws \CatchE\OpenApi2\Exception\UpdateDriverLiabilityNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\UpdateDriverLiabilityUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\UpdateDriverLiabilityUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\UpdateDriverLiabilityInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\DriverLiability|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function updateDriverLiability(string $driverLiabilityId, Model\UpdateDriverLiability $body, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\UpdateDriverLiability($driverLiabilityId, $body, $headerParameters), $fetch);
    }

    /**
     * This method requires the **DriverBankAccounts:Get** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var string $driver_id Driver Id
     *     @var string $claims_access_flag Optional Claims Access Flag
     *     @var string $claims_default_flag Optional Claims Default Flag
     *     @var array $status_flag Optional status flag
     *     @var int $page Optional page number
     *     @var int $page_size Optional page size
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetDriverBankAccountsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetDriverBankAccountsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetDriverBankAccountsNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetDriverBankAccountsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetDriverBankAccountsConflictException
     * @throws \CatchE\OpenApi2\Exception\GetDriverBankAccountsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\DriverBankAccountsGet|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getDriverBankAccounts(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetDriverBankAccounts($queryParameters), $fetch);
    }

    /**
     * This method requires the **DriverBankAccounts:Create** permission to be associated with your role.
     *
     * @param array $bankAccounts     JSON payload
     * @param array $headerParameters {
     *
     *     @var string $Delegated-Locking-Session-Id (Optional) Locking responsibility will be delegated to the specified Session Id.
     *
     * This header enables the client to instruct the API to merely verify the presence of locks with the specified session id, but not attempt to obtain them itself. It requires the **DelegatedLocking** permission to be associated with your role.
     *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\CreateDriverBankAccountsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\CreateDriverBankAccountsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\CreateDriverBankAccountsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\CreateDriverBankAccountsUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\CreateDriverBankAccountsUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\CreateDriverBankAccountsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\DriverBankAccountsGet|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function createDriverBankAccounts(array $bankAccounts, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\CreateDriverBankAccounts($bankAccounts, $headerParameters), $fetch);
    }

    /**
     * This method requires the **DriverBankAccounts:Update** permission to be associated with your role.
     *
     * @param array $bankAccounts     JSON payload
     * @param array $headerParameters {
     *
     *     @var string $Delegated-Locking-Session-Id (Optional) Locking responsibility will be delegated to the specified Session Id.
     *
     * This header enables the client to instruct the API to merely verify the presence of locks with the specified session id, but not attempt to obtain them itself. It requires the **DelegatedLocking** permission to be associated with your role.
     *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\UpdateDriverBankAccountsListUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\UpdateDriverBankAccountsListForbiddenException
     * @throws \CatchE\OpenApi2\Exception\UpdateDriverBankAccountsListNotFoundException
     * @throws \CatchE\OpenApi2\Exception\UpdateDriverBankAccountsListNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\UpdateDriverBankAccountsListUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\UpdateDriverBankAccountsListUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\UpdateDriverBankAccountsListInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\DriverBankAccount[]|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function updateDriverBankAccountsList(array $bankAccounts, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\UpdateDriverBankAccountsList($bankAccounts, $headerParameters), $fetch);
    }

    /**
     * This method requires the **DriverBankAccounts:Get** permission to be associated with your role.
     *
     * @param string $driverBankAccountId Driver Bank Account Id
     * @param string $fetch               Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetDriverBankAccountUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetDriverBankAccountForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetDriverBankAccountNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetDriverBankAccountNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetDriverBankAccountInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\DriverBankAccount|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getDriverBankAccount(string $driverBankAccountId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetDriverBankAccount($driverBankAccountId), $fetch);
    }

    /**
     * This method requires the **DriverBankAccounts:Update** permission to be associated with your role.
     *
     * @param string                                         $driverBankAccountId Driver Bank Account Id
     * @param \CatchE\OpenApi2\Model\UpdateDriverBankAccount $driverBankAccount   JSON payload
     * @param array                                          $headerParameters    {
     *
     *     @var string $Delegated-Locking-Session-Id (Optional) Locking responsibility will be delegated to the specified Session Id.
     *
     * This header enables the client to instruct the API to merely verify the presence of locks with the specified session id, but not attempt to obtain them itself. It requires the **DelegatedLocking** permission to be associated with your role.
     *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\UpdateDriverBankAccountUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\UpdateDriverBankAccountForbiddenException
     * @throws \CatchE\OpenApi2\Exception\UpdateDriverBankAccountNotFoundException
     * @throws \CatchE\OpenApi2\Exception\UpdateDriverBankAccountNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\UpdateDriverBankAccountUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\UpdateDriverBankAccountUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\UpdateDriverBankAccountInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\DriverBankAccount|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function updateDriverBankAccount(string $driverBankAccountId, Model\UpdateDriverBankAccount $driverBankAccount, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\UpdateDriverBankAccount($driverBankAccountId, $driverBankAccount, $headerParameters), $fetch);
    }

    /**
     * This method requires the **Drivers:Get** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var string $client_id Optional Client Id
     *     @var string $client_cost_centre_id Optional Cost Centre Id
     *     @var string $external_code optional External Code
     *
     * This field supports the wildcard % operator
     *     @var string $given_name optional Given Name
     *
     * This field supports the wildcard % operator
     *     @var string $surname optional Surname
     *
     * This field supports the wildcard % operator
     *     @var string $user_id_package_advisor Optional Package Advisor User Id
     *     @var int $page Optional page number
     *     @var int $page_size Optional page size
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetDriversUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetDriversForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetDriversNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetDriversNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetDriversConflictException
     * @throws \CatchE\OpenApi2\Exception\GetDriversInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\GetDrivers|\Psr\Http\Message\ResponseInterface
     */
    public function getDrivers(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetDrivers($queryParameters), $fetch);
    }

    /**
     * This method requires the **Drivers:Create** permission to be associated with your role.
     *
     * @param array $drivers          JSON payload
     * @param array $headerParameters {
     *
     *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\CreateDriversUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\CreateDriversForbiddenException
     * @throws \CatchE\OpenApi2\Exception\CreateDriversNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\CreateDriversUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\CreateDriversUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\CreateDriversInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function createDrivers(array $drivers, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\CreateDrivers($drivers, $headerParameters), $fetch);
    }

    /**
     * This method requires the **Drivers:Update** permission to be associated with your role.
     *
     * @param array $drivers          JSON payload
     * @param array $headerParameters {
     *
     *     @var string $Delegated-Locking-Session-Id (Optional) Locking responsibility will be delegated to the specified Session Id.
     *
     * This header enables the client to instruct the API to merely verify the presence of locks with the specified session id, but not attempt to obtain them itself. It requires the **DelegatedLocking** permission to be associated with your role.
     *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\UpdateDriversListUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\UpdateDriversListForbiddenException
     * @throws \CatchE\OpenApi2\Exception\UpdateDriversListNotFoundException
     * @throws \CatchE\OpenApi2\Exception\UpdateDriversListNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\UpdateDriversListUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\UpdateDriversListUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\UpdateDriversListInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function updateDriversList(array $drivers, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\UpdateDriversList($drivers, $headerParameters), $fetch);
    }

    /**
     * This method requires the **Drivers:Get** permission to be associated with your role.
     *
     * @param string $driverId Driver Id
     * @param string $fetch    Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetDriverUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetDriverForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetDriverNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetDriverNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetDriverInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Driver|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getDriver(string $driverId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetDriver($driverId), $fetch);
    }

    /**
     * This method requires the **Drivers:Update** permission to be associated with your role.
     *
     * @param string                              $driverId         Driver Id
     * @param \CatchE\OpenApi2\Model\UpdateDriver $driver           JSON payload
     * @param array                               $headerParameters {
     *
     *     @var string $Delegated-Locking-Session-Id (Optional) Locking responsibility will be delegated to the specified Session Id.
     *
     * This header enables the client to instruct the API to merely verify the presence of locks with the specified session id, but not attempt to obtain them itself. It requires the **DelegatedLocking** permission to be associated with your role.
     *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\UpdateDriverUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\UpdateDriverForbiddenException
     * @throws \CatchE\OpenApi2\Exception\UpdateDriverNotFoundException
     * @throws \CatchE\OpenApi2\Exception\UpdateDriverNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\UpdateDriverUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\UpdateDriverUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\UpdateDriverInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function updateDriver(string $driverId, Model\UpdateDriver $driver, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\UpdateDriver($driverId, $driver, $headerParameters), $fetch);
    }

    /**
     * This method requires the **EmployeeClaims:Create** permission to be associated with your role.
     *
     * @param array $formParameters {
     *
     *     @var string $posting_class_id Posting Class Id
     *     @var string $timezone Claims will be raised in the specified timezone.
     *
     * The timezone value can be given in several formats, none of which are case sensitive:
     * - As a named time zone, such as 'Europe/Helsinki', 'US/Eastern', or 'MET'.
     * - As a string indicating an offset from UTC of the form [H]H:MM, prefixed with a + or -, such as '+10:00', '-6:00', or '+05:30'.
     * A leading zero can optionally be used for hours values less than 10;
     *
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\AutoBuildClaimsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\AutoBuildClaimsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\AutoBuildClaimsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\AutoBuildClaimsUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\AutoBuildClaimsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\AutoBuildClaimsSuccess|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function autoBuildClaims(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\AutoBuildClaims($formParameters, $headerParameters), $fetch);
    }

    /**
     * This method requires the **EmployeeClaims:Post** permission to be associated with your role.
     *
     * @param array $formParameters {
     *
     *     @var string $claim_selection_method
     *     @var float $allowable_funds_balance Allowable Funds Balance
     *     @var string $timezone Claims will be raised in the specified timezone.
     *
     * The timezone value can be given in several formats, none of which are case sensitive:
     * - As a named time zone, such as 'Europe/Helsinki', 'US/Eastern', or 'MET'.
     * - As a string indicating an offset from UTC of the form [H]H:MM, prefixed with a + or -, such as '+10:00', '-6:00', or '+05:30'.
     * A leading zero can optionally be used for hours values less than 10;
     *
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\AutoPostClaimsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\AutoPostClaimsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\AutoPostClaimsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\AutoPostClaimsUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\AutoPostClaimsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\AutoPostClaimsSuccess|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function autoPostClaims(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\AutoPostClaims($formParameters, $headerParameters), $fetch);
    }

    /**
     * This method requires the **EmployeeClaims:GetAutoBuildPostingClasses** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var int $page Optional page number
     *     @var int $page_size Optional page size
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetPostingClassesForAutoBuildClaimsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetPostingClassesForAutoBuildClaimsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetPostingClassesForAutoBuildClaimsNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetPostingClassesForAutoBuildClaimsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetPostingClassesForAutoBuildClaimsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\AutoBuildClaimsPostingClassesGet|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getPostingClassesForAutoBuildClaims(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetPostingClassesForAutoBuildClaims($queryParameters), $fetch);
    }

    /**
     * This method requires the **PackageItems:CalculateDeductions** permission to be associated with your role.
     *
     * @param string $packageItemId   Package Item Id
     * @param array  $queryParameters {
     *
     *     @var string $pay_cycle_id Pay Cycle Id
     *     @var string $start_date Start Date
     *     @var int $cycles (Optional) User defined cycles
     *     @var string $pay_cycle_type (Optional) Pay Cycle Type. If not specified, will use package item default (if defined).
     *     @var string $package_item_pay_cycle_id (Optional) Package Item Pay Cycle Id - can be supplied instead of Pay Cycle Type
     *     @var string $compress_flag (Optional) Compress. If not specified, will use package item default or 'no'
     *     @var string $inertia_flag (Optional) Inertia. If not specified, will use package item default or 'no'
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\CalculatePackageItemCyclesUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\CalculatePackageItemCyclesForbiddenException
     * @throws \CatchE\OpenApi2\Exception\CalculatePackageItemCyclesNotFoundException
     * @throws \CatchE\OpenApi2\Exception\CalculatePackageItemCyclesNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\CalculatePackageItemCyclesInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\PackageItemCyclesGet|\Psr\Http\Message\ResponseInterface
     */
    public function calculatePackageItemCycles(string $packageItemId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\CalculatePackageItemCycles($packageItemId, $queryParameters), $fetch);
    }

    /**
     * This method requires the **PackageItems:CalculateDeductions** permission to be associated with your role.
     *
     * @param string $packageItemId   Package Item Id
     * @param array  $queryParameters {
     *
     *     @var string $driver_id Driver Id
     *     @var float $total_deduction Total Deduction
     *     @var int $cycles Cycles
     *     @var string $package_item_pay_cycle_id (Optional) Package Item Pay Cycle Id. If not specified, will use package item default (if specified)
     *     @var string $compress_flag (Optional) Compress. If not specified, will use package item default or 'no'
     *     @var string $inertia_flag (Optional) Inertia. If not specified, will use package item default or 'no'
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\CalculatePackageItemDeductionPerPayUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\CalculatePackageItemDeductionPerPayForbiddenException
     * @throws \CatchE\OpenApi2\Exception\CalculatePackageItemDeductionPerPayNotFoundException
     * @throws \CatchE\OpenApi2\Exception\CalculatePackageItemDeductionPerPayNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\CalculatePackageItemDeductionPerPayInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\PackageItemDeductionPerPayGet|\Psr\Http\Message\ResponseInterface
     */
    public function calculatePackageItemDeductionPerPay(string $packageItemId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\CalculatePackageItemDeductionPerPay($packageItemId, $queryParameters), $fetch);
    }

    /**
     * This method requires the **PackageItems:CalculateDeductions** permission to be associated with your role.
     *
     * @param string $packageItemId   Package Item Id
     * @param array  $queryParameters {
     *
     *     @var string $driver_id Driver Id
     *     @var float $deduction_per_pay Deduction Per Pay
     *     @var int $cycles Cycles
     *     @var string $package_item_pay_cycle_id (Optional) Package Item Pay Cycle Id. If not specified, will use package item default (if specified)
     *     @var string $compress_flag (Optional) Compress. If not specified, will use package item default or 'no'
     *     @var string $inertia_flag (Optional) Inertia. If not specified, will use package item default or 'no'
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\CalculatePackageItemTotalDeductionUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\CalculatePackageItemTotalDeductionForbiddenException
     * @throws \CatchE\OpenApi2\Exception\CalculatePackageItemTotalDeductionNotFoundException
     * @throws \CatchE\OpenApi2\Exception\CalculatePackageItemTotalDeductionNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\CalculatePackageItemTotalDeductionInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\PackageItemTotalDeductionGet|\Psr\Http\Message\ResponseInterface
     */
    public function calculatePackageItemTotalDeduction(string $packageItemId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\CalculatePackageItemTotalDeduction($packageItemId, $queryParameters), $fetch);
    }

    /**
     * This method requires the **EmployeePackageItems:Get** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var string $driver_id Driver Id
     *     @var array $status_flag Optional status flag
     *     @var int $page Optional page number
     *     @var int $page_size Optional page size
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetEmployeePackageItemsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetEmployeePackageItemsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetEmployeePackageItemsNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetEmployeePackageItemsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetEmployeePackageItemsConflictException
     * @throws \CatchE\OpenApi2\Exception\GetEmployeePackageItemsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\EmployeePackageItemsGet|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getEmployeePackageItems(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetEmployeePackageItems($queryParameters), $fetch);
    }

    /**
     * This method requires the **EmployeePackageItems:Create** permission to be associated with your role.
     *
     * @param array $packageItems     JSON payload
     * @param array $headerParameters {
     *
     *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\CreateEmployeePackageItemsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\CreateEmployeePackageItemsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\CreateEmployeePackageItemsNotFoundException
     * @throws \CatchE\OpenApi2\Exception\CreateEmployeePackageItemsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\CreateEmployeePackageItemsUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\CreateEmployeePackageItemsUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\CreateEmployeePackageItemsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\EmployeePackageItemsGet|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function createEmployeePackageItems(array $packageItems, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\CreateEmployeePackageItems($packageItems, $headerParameters), $fetch);
    }

    /**
     * This method requires the **EmployeePackageItems:Delete** permission to be associated with your role.
     *
     * @param string $employeePackageItemId Employee Package Item Id
     * @param string $fetch                 Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\DeleteEmployeePackageItemUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\DeleteEmployeePackageItemForbiddenException
     * @throws \CatchE\OpenApi2\Exception\DeleteEmployeePackageItemNotFoundException
     * @throws \CatchE\OpenApi2\Exception\DeleteEmployeePackageItemNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\DeleteEmployeePackageItemInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function deleteEmployeePackageItem(string $employeePackageItemId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\DeleteEmployeePackageItem($employeePackageItemId), $fetch);
    }

    /**
     * This method requires the **EmployeePackageItems:Get** permission to be associated with your role.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetEmployeePackageItemUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetEmployeePackageItemForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetEmployeePackageItemNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetEmployeePackageItemNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetEmployeePackageItemInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\EmployeePackageItem|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getEmployeePackageItem(string $employeePackageItemId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetEmployeePackageItem($employeePackageItemId), $fetch);
    }

    /**
     * This method requires the **EmployeePackageItems:Edit** permission to be associated with your role.
     *
     * @param string                                         $employeePackageItemId Employee Package Item Id
     * @param \CatchE\OpenApi2\Model\EditEmployeePackageItem $packageItem           JSON payload
     * @param array                                          $headerParameters      {
     *
     *     @var string $Delegated-Locking-Session-Id (Optional) Locking responsibility will be delegated to the specified Session Id.
     *
     * This header enables the client to instruct the API to merely verify the presence of locks with the specified session id, but not attempt to obtain them itself. It requires the **DelegatedLocking** permission to be associated with your role.
     *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\EditEmployeePackageItemUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\EditEmployeePackageItemForbiddenException
     * @throws \CatchE\OpenApi2\Exception\EditEmployeePackageItemNotFoundException
     * @throws \CatchE\OpenApi2\Exception\EditEmployeePackageItemNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\EditEmployeePackageItemUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\EditEmployeePackageItemUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\EditEmployeePackageItemInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\EmployeePackageItem|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function editEmployeePackageItem(string $employeePackageItemId, Model\EditEmployeePackageItem $packageItem, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\EditEmployeePackageItem($employeePackageItemId, $packageItem, $headerParameters), $fetch);
    }

    /**
     * This method requires the **EmployeePackageItems:Get** permission to be associated with your role.
     *
     * @param string $driverId        Driver Id
     * @param array  $queryParameters {
     *
     *     @var string $package_item_id Package Item Id
     *     @var string $start_date Start Date
     *     @var int $cycles Cycles
     *     @var string $pay_cycle_type (Optional) Pay Cycle Type. If not specified, will use package item default (if defined).
     *     @var int $dates_to_calculate (Optional) End dates to calculate. If not specified, will use driver pay cycles per year.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetEmployeeEndDatesUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetEmployeeEndDatesForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetEmployeeEndDatesNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetEmployeeEndDatesNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetEmployeeEndDatesInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\EmployeeEndDatesGet|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getEmployeeEndDates(string $driverId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetEmployeeEndDates($driverId, $queryParameters), $fetch);
    }

    /**
     * This method requires the **EmployeePackageItems:Get** permission to be associated with your role.
     *
     * @param string $driverId        Driver Id
     * @param array  $queryParameters {
     *
     *     @var string $pay_cycle_type (Optional) Pay Cycle Type. If not specified, it will use REG.
     *     @var string $anchor_date Anchor Date
     *     @var string $allow_retrospective_start_dates_flag (Optional) If 'yes' start dates can be generated based on an anchor date that occurs before the system date.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetEmployeeStartDatesUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetEmployeeStartDatesForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetEmployeeStartDatesNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetEmployeeStartDatesNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetEmployeeStartDatesInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\EmployeeStartDatesGet|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getEmployeeStartDates(string $driverId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetEmployeeStartDates($driverId, $queryParameters), $fetch);
    }

    /**
     * This method requires the **EmployeePackageItems:Get** permission to be associated with your role.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetPackageItemUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetPackageItemForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetPackageItemNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetPackageItemNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetPackageItemInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\PackageItem|\Psr\Http\Message\ResponseInterface
     */
    public function getPackageItem(string $packageItemId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetPackageItem($packageItemId), $fetch);
    }

    /**
     * This method requires the **PackageItemDefaults:Get** permission to be associated with your role.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetPackageItemDefaultsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetPackageItemDefaultsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetPackageItemDefaultsNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetPackageItemDefaultsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetPackageItemDefaultsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\PackageItemDefaults|\Psr\Http\Message\ResponseInterface
     */
    public function getPackageItemDefaults(string $packageItemDefaultId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetPackageItemDefaults($packageItemDefaultId), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetPackageItemIdsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetPackageItemIdsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetPackageItemIdsNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetPackageItemIdsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetPackageItemIdsConflictException
     * @throws \CatchE\OpenApi2\Exception\GetPackageItemIdsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\PackageItemIdsItem[]|\Psr\Http\Message\ResponseInterface
     */
    public function getPackageItemIds(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetPackageItemIds(), $fetch);
    }

    /**
     * This method requires the **EmployeePackageItemPayCycles:Get** permission to be associated with your role.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetPackageItemPayCycleUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetPackageItemPayCycleForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetPackageItemPayCycleNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetPackageItemPayCycleNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetPackageItemPayCycleInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\PackageItemPayCycle|\Psr\Http\Message\ResponseInterface
     */
    public function getPackageItemPayCycle(string $packageItemPayCycleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetPackageItemPayCycle($packageItemPayCycleId), $fetch);
    }

    /**
     * This method requires the **EmployeePackageItemPayCycles:Get** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var string $package_item_id Optional Package Item Id
     *     @var string $pay_cycle_id Optional Pay Cycle Id
     *     @var string $pay_cycle_type Optional Pay Cycle Type
     *     @var int $page Optional page number
     *     @var int $page_size Optional page size
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetPackageItemPayCyclesUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetPackageItemPayCyclesForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetPackageItemPayCyclesNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetPackageItemPayCyclesNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetPackageItemPayCyclesConflictException
     * @throws \CatchE\OpenApi2\Exception\GetPackageItemPayCyclesInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\PackageItemPayCyclesGet|\Psr\Http\Message\ResponseInterface
     */
    public function getPackageItemPayCycles(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetPackageItemPayCycles($queryParameters), $fetch);
    }

    /**
     * This method requires the **EmployeePackageItems:Get** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var string $posting_map_id Optional Posting Map Id
     *     @var string $package_item_code optional Package Item Code
     *
     * This field supports the wildcard % operator
     *     @var string $module optional Module
     *
     * This field supports the wildcard % operator
     *     @var string $benefit_type Optional Benefit Type
     *     @var string $cap_type Optional Cap Type
     *     @var string $tax_method Optional Tax Method
     *     @var string $employee_contribution_flag Optional Employee Contribution Flag
     *     @var int $page Optional page number
     *     @var int $page_size Optional page size
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetPackageItemsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetPackageItemsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetPackageItemsNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetPackageItemsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetPackageItemsConflictException
     * @throws \CatchE\OpenApi2\Exception\GetPackageItemsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\PackageItemsGet|\Psr\Http\Message\ResponseInterface
     */
    public function getPackageItems(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetPackageItems($queryParameters), $fetch);
    }

    /**
     * This method requires the **PackageItemDefaults:Get** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var string $package_item_id Package item id
     *     @var string $disbursement_type_default Disbursement type default
     *     @var int $page Optional page number
     *     @var int $page_size Optional page size
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetPackageItemsDefaultsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetPackageItemsDefaultsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetPackageItemsDefaultsNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetPackageItemsDefaultsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetPackageItemsDefaultsConflictException
     * @throws \CatchE\OpenApi2\Exception\GetPackageItemsDefaultsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\PackageItemsDefaultsGet|\Psr\Http\Message\ResponseInterface
     */
    public function getPackageItemsDefaults(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetPackageItemsDefaults($queryParameters), $fetch);
    }

    /**
     * This method requires the **SalaryPackageDisbursementCycles:Get** permission to be associated with your role.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetSalaryPackagingDisbursementCycleUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetSalaryPackagingDisbursementCycleForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetSalaryPackagingDisbursementCycleNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetSalaryPackagingDisbursementCycleNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetSalaryPackagingDisbursementCycleInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\SalaryPackagingDisbursementCycle|\Psr\Http\Message\ResponseInterface
     */
    public function getSalaryPackagingDisbursementCycle(string $disbursementCycleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetSalaryPackagingDisbursementCycle($disbursementCycleId), $fetch);
    }

    /**
     * This method requires the **SalaryPackageDisbursementCycles:Get** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var int $page Optional page number
     *     @var int $page_size Optional page size
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetSalaryPackagingDisbursementCyclesUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetSalaryPackagingDisbursementCyclesForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetSalaryPackagingDisbursementCyclesNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetSalaryPackagingDisbursementCyclesNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetSalaryPackagingDisbursementCyclesConflictException
     * @throws \CatchE\OpenApi2\Exception\GetSalaryPackagingDisbursementCyclesInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\SalaryPackagingDisbursementCyclesGet|\Psr\Http\Message\ResponseInterface
     */
    public function getSalaryPackagingDisbursementCycles(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetSalaryPackagingDisbursementCycles($queryParameters), $fetch);
    }

    /**
     * This method requires the **SalaryPackageFinancialInstitutions:Get** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var string $financial_institution_number optional Financial Institution Number
     *
     * This field supports the wildcard % operator
     *     @var int $page Optional page number
     *     @var int $page_size Optional page size
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetSalaryPackagingFinancialInstitutionsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetSalaryPackagingFinancialInstitutionsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetSalaryPackagingFinancialInstitutionsNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetSalaryPackagingFinancialInstitutionsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetSalaryPackagingFinancialInstitutionsConflictException
     * @throws \CatchE\OpenApi2\Exception\GetSalaryPackagingFinancialInstitutionsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\SalaryPackagingFinancialInstitutionsGet|\Psr\Http\Message\ResponseInterface
     */
    public function getSalaryPackagingFinancialInstitutions(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetSalaryPackagingFinancialInstitutions($queryParameters), $fetch);
    }

    /**
     * Vary an existing employee package item that is linked to a contract that has already  commenced billing.
     *
     * This method requires the **EmployeePackageItems:Vary** permission to be associated with your role.
     *
     * @param string                                         $employeePackageItemId Employee Package Item Id
     * @param \CatchE\OpenApi2\Model\VaryEmployeePackageItem $packageItem           JSON payload
     * @param array                                          $headerParameters      {
     *
     *     @var string $Delegated-Locking-Session-Id (Optional) Locking responsibility will be delegated to the specified Session Id.
     *
     * This header enables the client to instruct the API to merely verify the presence of locks with the specified session id, but not attempt to obtain them itself. It requires the **DelegatedLocking** permission to be associated with your role.
     *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\VaryEmployeePackageItemUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\VaryEmployeePackageItemForbiddenException
     * @throws \CatchE\OpenApi2\Exception\VaryEmployeePackageItemNotFoundException
     * @throws \CatchE\OpenApi2\Exception\VaryEmployeePackageItemNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\VaryEmployeePackageItemUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\VaryEmployeePackageItemUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\VaryEmployeePackageItemInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\EmployeePackageItem|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function varyEmployeePackageItem(string $employeePackageItemId, Model\VaryEmployeePackageItem $packageItem, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\VaryEmployeePackageItem($employeePackageItemId, $packageItem, $headerParameters), $fetch);
    }

    /**
     * This method requires the **EmployeePayments:Create** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var string $timezone Payments will be processed in the specified timezone.
     *
     * The timezone value can be given in several formats, none of which are case sensitive:
     * - As a named time zone, such as 'Europe/Helsinki', 'US/Eastern', or 'MET'.
     * - As a string indicating an offset from UTC of the form [H]H:MM, prefixed with a + or -, such as '+10:00', '-6:00', or '+05:30'.
     * A leading zero can optionally be used for hours values less than 10;
     *
     * }
     *
     * @param array $formParameters {
     *
     *     @var string $bank_account_id (Optional) Bank Account Id
     *     @var string $delivery Delivery
     *     @var string $dated_to_method
     *     @var string $common_day (Optional) Common day
     *     @var int $run_date_offset (Optional) Run date offset
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\AutoPostPaymentsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\AutoPostPaymentsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\AutoPostPaymentsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\AutoPostPaymentsUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\AutoPostPaymentsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\AutoPostPaymentsSuccess|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function autoPostPayments(array $queryParameters = [], array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\AutoPostPayments($queryParameters, $formParameters, $headerParameters), $fetch);
    }

    /**
     * This method requires the **EmployeePackageItems:Get** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var string $contract_id Contract ID
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetEmployeeContractLifeBudgetAndDisbursementUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetEmployeeContractLifeBudgetAndDisbursementForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetEmployeeContractLifeBudgetAndDisbursementNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetEmployeeContractLifeBudgetAndDisbursementNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetEmployeeContractLifeBudgetAndDisbursementInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\SpEmployeeContractLifeBudgetAndDisbursementGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getEmployeeContractLifeBudgetAndDisbursement(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetEmployeeContractLifeBudgetAndDisbursement($queryParameters), $fetch);
    }

    /**
     * This method requires the **EmployeePackageItems:Get** permission to be associated with your role.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetEmployeePayCycleDetailsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetEmployeePayCycleDetailsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetEmployeePayCycleDetailsNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetEmployeePayCycleDetailsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetEmployeePayCycleDetailsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\SpEmployeeDriverIdPayCycleDetailsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getEmployeePayCycleDetails(string $driverId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetEmployeePayCycleDetails($driverId), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetFinanceAssetTypesUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetFinanceAssetTypesForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetFinanceAssetTypesNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetFinanceAssetTypesNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetFinanceAssetTypesInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\FmFinanceAssetTypesGetResponse200Item[]|\Psr\Http\Message\ResponseInterface
     */
    public function getFinanceAssetTypes(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetFinanceAssetTypes(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetFinanceLiabilityFinanciersUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetFinanceLiabilityFinanciersForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetFinanceLiabilityFinanciersNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetFinanceLiabilityFinanciersNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetFinanceLiabilityFinanciersInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\FmFinanceLiabilityFinanciersGetResponse200Item[]|\Psr\Http\Message\ResponseInterface
     */
    public function getFinanceLiabilityFinanciers(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetFinanceLiabilityFinanciers(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetFinanceLiabilityTypesUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetFinanceLiabilityTypesForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetFinanceLiabilityTypesNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetFinanceLiabilityTypesNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetFinanceLiabilityTypesInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\FmFinanceLiabilityTypesGetResponse200Item[]|\Psr\Http\Message\ResponseInterface
     */
    public function getFinanceLiabilityTypes(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetFinanceLiabilityTypes(), $fetch);
    }

    /**
     * This method requires the **FormsHelper:Get** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var string $model_path Path of the model. E.g /fm/channel/groups
     *     @var string $model_method POST or PUT method. Default method is POST.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetEmptyModelUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetEmptyModelForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetEmptyModelNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetEmptyModelNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetEmptyModelUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\GetEmptyModelInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\EmptyJsonPayloadGet|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getEmptyModel(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetEmptyModel($queryParameters), $fetch);
    }

    /**
     * This method validates the field value against the field type.
     *
     * @param \CatchE\OpenApi2\Model\FieldToValidate $field JSON payload
     * @param string                                 $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\ValidatedFieldTypeUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\ValidatedFieldTypeForbiddenException
     * @throws \CatchE\OpenApi2\Exception\ValidatedFieldTypeNotFoundException
     * @throws \CatchE\OpenApi2\Exception\ValidatedFieldTypeNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\ValidatedFieldTypeUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\ValidatedFieldTypeUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\ValidatedFieldTypeInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\FieldToValidate|\Psr\Http\Message\ResponseInterface
     */
    public function validatedFieldType(Model\FieldToValidate $field, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\ValidatedFieldType($field), $fetch);
    }

    /**
     * This method requires the **ImportTable** permission to be associated with your role.
     *
     * @param string $tableImportId Import Id obtained from table import request
     * @param string $fetch         Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\CancelTableImportUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\CancelTableImportForbiddenException
     * @throws \CatchE\OpenApi2\Exception\CancelTableImportNotFoundException
     * @throws \CatchE\OpenApi2\Exception\CancelTableImportNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\CancelTableImportRequestedRangeNotSatisfiableException
     * @throws \CatchE\OpenApi2\Exception\CancelTableImportInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function cancelTableImport(string $tableImportId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\CancelTableImport($tableImportId), $fetch);
    }

    /**
     * This method requires the **ImportTable** permission to be associated with your role.
     *
     * @param string $tableImportId Import Id obtained from table import request
     * @param string $fetch         Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetTableImportUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetTableImportForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetTableImportNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetTableImportNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetTableImportInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\TableImportStatusRequestSuccess|\Psr\Http\Message\ResponseInterface
     */
    public function getTableImport(string $tableImportId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetTableImport($tableImportId), $fetch);
    }

    /**
     * This method requires the **ImportTable** permission to be associated with your role.
     *
     * @param string $tableImportId  Import Id obtained from table import request
     * @param array  $formParameters {
     *
     *     @var string $procedure
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\TriggerTableImportProcedureUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\TriggerTableImportProcedureForbiddenException
     * @throws \CatchE\OpenApi2\Exception\TriggerTableImportProcedureNotFoundException
     * @throws \CatchE\OpenApi2\Exception\TriggerTableImportProcedureNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\TriggerTableImportProcedureUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\TriggerTableImportProcedureUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\TriggerTableImportProcedureInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\TableImportStatusRequestSuccess|\Psr\Http\Message\ResponseInterface
     */
    public function triggerTableImportProcedure(string $tableImportId, array $formParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\TriggerTableImportProcedure($tableImportId, $formParameters), $fetch);
    }

    /**
     * This method requires the **ExportTable** permission to be associated with your role.
     *
     * @param string $tableExportId Export Id obtained from table export request
     * @param string $fetch         Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\ExportTableUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\ExportTableForbiddenException
     * @throws \CatchE\OpenApi2\Exception\ExportTableNotFoundException
     * @throws \CatchE\OpenApi2\Exception\ExportTableNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\ExportTableInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\TableExportDownloadSuccess|\Psr\Http\Message\ResponseInterface
     */
    public function exportTable(string $tableExportId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\ExportTable($tableExportId), $fetch);
    }

    /**
     * This method requires the **ImportTable** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var array $table_import_id Import Id obtained from table import request
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetTableImportsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetTableImportsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetTableImportsNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetTableImportsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetTableImportsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\TableImportStatusRequestSuccess[]|\Psr\Http\Message\ResponseInterface
     */
    public function getTableImports(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetTableImports($queryParameters), $fetch);
    }

    /**
     * This method requires the **ImportTable** permission to be associated with your role.
     *
     * @param array $formParameters {
     *
     *     @var string $table_name Destination table name
     *     @var string $format Format of data
     *     @var string $procedure
     *     @var string $duplicate_import_check_flag Perform duplicate gb_imports checksum check
     *     @var string $timezone Timestamps in import files will be parsed in the specified timezone.
     *
     * The timezone value can be given in several formats, none of which are case sensitive:
     * - As a named time zone, such as 'Europe/Helsinki', 'US/Eastern', or 'MET'.
     * - As a string indicating an offset from UTC of the form [H]H:MM, prefixed with a + or -, such as '+10:00', '-6:00', or '+05:30'.
     * A leading zero can optionally be used for hours values less than 10;
     *     @var \Psr\Http\Message\StreamInterface|resource|string $data Data to import
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\RequestTableImportUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\RequestTableImportForbiddenException
     * @throws \CatchE\OpenApi2\Exception\RequestTableImportNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\RequestTableImportUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\RequestTableImportUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\RequestTableImportInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\TableImportRequestSuccess|\Psr\Http\Message\ResponseInterface
     */
    public function requestTableImport(array $formParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\RequestTableImport($formParameters), $fetch);
    }

    /**
     * This method requires the **ExportTable** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var string $table_name Optional table name
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetTablesAuthorisedForExportUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetTablesAuthorisedForExportForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetTablesAuthorisedForExportNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetTablesAuthorisedForExportNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetTablesAuthorisedForExportUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\GetTablesAuthorisedForExportInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getTablesAuthorisedForExport(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetTablesAuthorisedForExport($queryParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetTablesAuthorisedForImportUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetTablesAuthorisedForImportForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetTablesAuthorisedForImportNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetTablesAuthorisedForImportNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetTablesAuthorisedForImportInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getTablesAuthorisedForImport(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetTablesAuthorisedForImport(), $fetch);
    }

    /**
     * Import public holiday data from supported data sources. Presently data.gov.au is supported.
     *
     * Resource Ids can be obtained from https://data.gov.au/dataset/ds-dga-b1bc6077-dadd-4f61-9f8c-002ab2cdff10/details.
     *
     * This API is idempotent. Making multiple identical requests has the same effect as making a single request.
     *
     * This method requires the **ImportPublicHolidays** permission to be associated with your role.
     *
     * @param array $formParameters {
     *
     *     @var string $data_source Import data source
     *     @var string $resource_id Resource id for the specified data source. e.g. 33673aca-0857-42e5-b8f0-9981b4755686
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\ImportPublicHolidaysUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\ImportPublicHolidaysForbiddenException
     * @throws \CatchE\OpenApi2\Exception\ImportPublicHolidaysNotFoundException
     * @throws \CatchE\OpenApi2\Exception\ImportPublicHolidaysUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\ImportPublicHolidaysInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function importPublicHolidays(array $formParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\ImportPublicHolidays($formParameters), $fetch);
    }

    /**
     * This method requires the **ImportTable** and **Queries:Get** permissions to be associated with your role.
     *
     * @param string $queryId        Query Id
     * @param array  $formParameters {
     *
     *     @var string $table_name Destination table name
     *     @var string $procedure
     *     @var string $duplicate_import_check_flag Perform duplicate gb_imports checksum check
     *     @var string $timezone Timestamps in import files will be parsed in the specified timezone.
     *
     * The timezone value can be given in several formats, none of which are case sensitive:
     * - As a named time zone, such as 'Europe/Helsinki', 'US/Eastern', or 'MET'.
     * - As a string indicating an offset from UTC of the form [H]H:MM, prefixed with a + or -, such as '+10:00', '-6:00', or '+05:30'.
     * A leading zero can optionally be used for hours values less than 10;
     *
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\RequestGbQueriesTableImportUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\RequestGbQueriesTableImportForbiddenException
     * @throws \CatchE\OpenApi2\Exception\RequestGbQueriesTableImportNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\RequestGbQueriesTableImportUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\RequestGbQueriesTableImportUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\RequestGbQueriesTableImportInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\TableImportRequestSuccess|\Psr\Http\Message\ResponseInterface
     */
    public function requestGbQueriesTableImport(string $queryId, array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\RequestGbQueriesTableImport($queryId, $formParameters, $headerParameters), $fetch);
    }

    /**
     * This method requires the **ExportTable** permission to be associated with your role.
     *
     * @param array $formParameters {
     *
     *     @var string $table_name Source table name
     *     @var string $format Desired export format
     *     @var string $include_field_headers_flag Include field headers in export file
     *     @var string $sample_rows_only_flag
     *     @var string $remove_null_values_flag
     *     @var string $timezone Timestamps in export files will be presented in the specified timezone.
     *
     * The timezone value can be given in several formats, none of which are case sensitive:
     * - As a named time zone, such as 'Europe/Helsinki', 'US/Eastern', or 'MET'.
     * - As a string indicating an offset from UTC of the form [H]H:MM, prefixed with a + or -, such as '+10:00', '-6:00', or '+05:30'.
     * A leading zero can optionally be used for hours values less than 10;
     *
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\RequestTableExportUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\RequestTableExportForbiddenException
     * @throws \CatchE\OpenApi2\Exception\RequestTableExportNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\RequestTableExportUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\RequestTableExportUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\RequestTableExportInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\TableExportRequestSuccess|\Psr\Http\Message\ResponseInterface
     */
    public function requestTableExport(array $formParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\RequestTableExport($formParameters), $fetch);
    }

    /**
     * Specified table name must be in the import authorised list. See getTablesAuthorisedForImport.
     *
     * Records to update or insert must include the primary key as part of the JSON payload.
     *
     * To **insert a record** set the primary key to null or an unmapped ref(UUID).
     * To **update a record** set the primary key to the required value or existing ref(UUID).
     *
     * Mapping ref(UUID) values can be used within records. If a ref value is in a primary key and the specified record results in an insertion, the associated ref/primary key values will be mapped to gb_import_table_field_translations.
     *
     * If multiple records are specified within the payload, **record locks will be obtained for each record  before any updates or inserts are performed**. If the necessary record locks cannot be obtained, upsert will return a 423 Locked response.
     *
     * This method requires the **Record:Upsert** permission to be associated with your role
     *
     * @param string $tableName       Table name
     * @param array  $records         JSON payload
     * @param array  $queryParameters {
     *
     *     @var string $timezone Timestamps in upsert records will be parsed in the specified timezone.
     *
     * The timezone value can be given in several formats, none of which are case sensitive:
     * - As a named time zone, such as 'Europe/Helsinki', 'US/Eastern', or 'MET'.
     * - As a string indicating an offset from UTC of the form [H]H:MM, prefixed with a + or -, such as '+10:00', '-6:00', or '+05:30'.
     * A leading zero can optionally be used for hours values less than 10;
     *     @var string $unique_ids_must_exist_flag Unique Ids specified in upsert records must exist when this flag is 'yes'.
     *
     * If a specified unique id does not exist on an upsert record, a recordDoesNotExist validation exception will be generated
     * and the upsert process will be aborted.
     *
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $Delegated-Locking-Session-Id (Optional) Locking responsibility will be delegated to the specified Session Id.
     *
     * This header enables the client to instruct the API to merely verify the presence of locks with the specified session id, but not attempt
     * to obtain them itself. It requires the **DelegatedLocking** permission to be associated with your role.
     *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\UpsertUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\UpsertForbiddenException
     * @throws \CatchE\OpenApi2\Exception\UpsertNotFoundException
     * @throws \CatchE\OpenApi2\Exception\UpsertNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\UpsertUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\UpsertUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\UpsertLockedException
     * @throws \CatchE\OpenApi2\Exception\UpsertInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function upsert(string $tableName, array $records, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\Upsert($tableName, $records, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * This method requires the InterfaceExports:BecsBatchGet permission to be associated with your role.
     *
     * @param string $becsId BECS interface export id
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetBecsDisbursementsBatchUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetBecsDisbursementsBatchForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetBecsDisbursementsBatchNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetBecsDisbursementsBatchNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetBecsDisbursementsBatchUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\GetBecsDisbursementsBatchInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\GetDecsDisbursementsBatchSuccess|\Psr\Http\Message\ResponseInterface
     */
    public function getBecsDisbursementsBatch(string $becsId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetBecsDisbursementsBatch($becsId), $fetch);
    }

    /**
     * This method requires the **InterfaceExports:BpayBatchCreate** permission to be associated with your role.
     *
     * @param array $formParameters {
     *
     *     @var string $bank_account_bpay_mapping_id Bank Account Bpay Mapping Id
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\CreateBpayBatchUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\CreateBpayBatchForbiddenException
     * @throws \CatchE\OpenApi2\Exception\CreateBpayBatchNotFoundException
     * @throws \CatchE\OpenApi2\Exception\CreateBpayBatchNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\CreateBpayBatchUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\CreateBpayBatchUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\CreateBpayBatchInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\CreateBpayBatchSuccess|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function createBpayBatch(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\CreateBpayBatch($formParameters, $headerParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetBpayBankAccountsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetBpayBankAccountsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetBpayBankAccountsNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetBpayBankAccountsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetBpayBankAccountsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\BpayBankAccount[]|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getBpayBankAccounts(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetBpayBankAccounts(), $fetch);
    }

    /**
     * This method requires the **InterfaceExports:BpayBatchGet** permission to be associated with your role.
     *
     * @param string $bpayId          BPAY interface export id
     * @param array  $queryParameters {
     *
     *     @var string $format Batch output format
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetBpayBatchUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetBpayBatchForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetBpayBatchNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetBpayBatchNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetBpayBatchUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\GetBpayBatchInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\GetBpayBatchSuccess|\Psr\Http\Message\ResponseInterface
     */
    public function getBpayBatch(string $bpayId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetBpayBatch($bpayId, $queryParameters), $fetch);
    }

    /**
     * This method requires the **InterfaceExports:BpayBatchUpdate** permission to be associated with your role.
     *
     * @param string                                                     $bpayId           BPAY interface export id
     * @param \CatchE\OpenApi2\Model\GbInterfaceExportsBpayBpayIdPutBody $body             JSON payload
     * @param array                                                      $headerParameters {
     *
     *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\UpdateBpayBatchUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\UpdateBpayBatchForbiddenException
     * @throws \CatchE\OpenApi2\Exception\UpdateBpayBatchNotFoundException
     * @throws \CatchE\OpenApi2\Exception\UpdateBpayBatchNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\UpdateBpayBatchUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\UpdateBpayBatchUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\UpdateBpayBatchInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function updateBpayBatch(string $bpayId, Model\GbInterfaceExportsBpayBpayIdPutBody $body, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\UpdateBpayBatch($bpayId, $body, $headerParameters), $fetch);
    }

    /**
     * This method requires the **InterfaceExports:BpayControls** permission to be associated with your role.
     *
     * @param string $bpayId          BPAY interface export id
     * @param array  $queryParameters {
     *
     *     @var string $bank_account_bpay_mapping_id Bank Account Bpay Mapping Id
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetBpayBatchControlsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetBpayBatchControlsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetBpayBatchControlsNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetBpayBatchControlsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetBpayBatchControlsUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\GetBpayBatchControlsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\BpayBatchControls|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getBpayBatchControls(string $bpayId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetBpayBatchControls($bpayId, $queryParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetBpayBatchControlsEstimateUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetBpayBatchControlsEstimateForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetBpayBatchControlsEstimateNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetBpayBatchControlsEstimateNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetBpayBatchControlsEstimateInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\BpayBatchControls|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getBpayBatchControlsEstimate(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetBpayBatchControlsEstimate(), $fetch);
    }

    /**
     * This method requires the **InterfaceEricInsurance:GetPricing** permission to be associated with your role.
     *
     * @param array $formParameters {
     *
     *     @var string $quote_id Quote Id (Catch-e)
     *     @var string $eric_quote_id (Optional) Eric Quote Id (UUID). If specified, revised details will be applied to the specified Eric Quote Id.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $Delegated-Locking-Session-Id (Optional) Locking responsibility will be delegated to the specified Session Id.
     *
     * This header enables the client to instruct the API to merely verify the presence of locks with the specified session id, but not attempt to obtain them itself. It requires the **DelegatedLocking** permission to be associated with your role.
     *
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\EricInsuranceGetPricingBadRequestException
     * @throws \CatchE\OpenApi2\Exception\EricInsuranceGetPricingUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\EricInsuranceGetPricingForbiddenException
     * @throws \CatchE\OpenApi2\Exception\EricInsuranceGetPricingNotFoundException
     * @throws \CatchE\OpenApi2\Exception\EricInsuranceGetPricingNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\EricInsuranceGetPricingUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\EricInsuranceGetPricingUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\EricInsuranceGetPricingFailedDependencyException
     * @throws \CatchE\OpenApi2\Exception\EricInsuranceGetPricingInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\EricInsuranceGetPricingSuccess|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function ericInsuranceGetPricing(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\EricInsuranceGetPricing($formParameters, $headerParameters), $fetch);
    }

    /**
     * This method requires the **InterfaceSalesforceApex:SyncContract** permission to be associated with your role.
     *
     * @param array $formParameters {
     *
     *     @var string $contract_id Contract Id
     *     @var string $client_id Client Id
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\SalesforceApexSyncContractBadRequestException
     * @throws \CatchE\OpenApi2\Exception\SalesforceApexSyncContractUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\SalesforceApexSyncContractForbiddenException
     * @throws \CatchE\OpenApi2\Exception\SalesforceApexSyncContractNotFoundException
     * @throws \CatchE\OpenApi2\Exception\SalesforceApexSyncContractNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\SalesforceApexSyncContractUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\SalesforceApexSyncContractUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\SalesforceApexSyncContractInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function salesforceApexSyncContract(array $formParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\SalesforceApexSyncContract($formParameters), $fetch);
    }

    /**
     * This method requires the **InterfaceSalesforceApex:SyncQuote** permission to be associated with your role.
     *
     * @param array $formParameters {
     *
     *     @var string $quote_id Quote Id
     *     @var string $opportunity_number Opportunity Number
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\SalesforceApexSyncQuoteBadRequestException
     * @throws \CatchE\OpenApi2\Exception\SalesforceApexSyncQuoteUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\SalesforceApexSyncQuoteForbiddenException
     * @throws \CatchE\OpenApi2\Exception\SalesforceApexSyncQuoteNotFoundException
     * @throws \CatchE\OpenApi2\Exception\SalesforceApexSyncQuoteNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\SalesforceApexSyncQuoteUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\SalesforceApexSyncQuoteUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\SalesforceApexSyncQuoteInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function salesforceApexSyncQuote(array $formParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\SalesforceApexSyncQuote($formParameters), $fetch);
    }

    /**
     * This method requires the **InterfaceSalesforceLegacy:SyncQuote** permission to be associated with your role.
     *
     * @param array $formParameters {
     *
     *     @var string $quote_id Quote Id
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $Delegated-Locking-Session-Id (Optional) Locking responsibility will be delegated to the specified Session Id.
     *
     * This header enables the client to instruct the API to merely verify the presence of locks with the specified session id, but not attempt to obtain them itself. It requires the **DelegatedLocking** permission to be associated with your role.
     *
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\SalesforceLegacySyncQuoteBadRequestException
     * @throws \CatchE\OpenApi2\Exception\SalesforceLegacySyncQuoteUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\SalesforceLegacySyncQuoteForbiddenException
     * @throws \CatchE\OpenApi2\Exception\SalesforceLegacySyncQuoteNotFoundException
     * @throws \CatchE\OpenApi2\Exception\SalesforceLegacySyncQuoteNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\SalesforceLegacySyncQuoteUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\SalesforceLegacySyncQuoteUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\SalesforceLegacySyncQuoteLockedException
     * @throws \CatchE\OpenApi2\Exception\SalesforceLegacySyncQuoteInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function salesforceLegacySyncQuote(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\SalesforceLegacySyncQuote($formParameters, $headerParameters), $fetch);
    }

    /**
     * This method requires the **VehicleData:ImportGlass** permission to be associated with your role.
     *
     * @param string $importId Import Id obtained from Glass vehicle data import request
     * @param string $fetch    Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetGlassVehicleDataImportUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetGlassVehicleDataImportForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetGlassVehicleDataImportNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetGlassVehicleDataImportNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetGlassVehicleDataImportUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\GetGlassVehicleDataImportInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Accepted|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\VehicleDataGlassImportStatusRequestSuccess|\Psr\Http\Message\ResponseInterface
     */
    public function getGlassVehicleDataImport(string $importId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetGlassVehicleDataImport($importId), $fetch);
    }

    /**
     * This method requires the **VehicleData:ImportGlass** permission to be associated with your role.
     *
     * @param string $importId       Import Id obtained from Glass vehicle data import request
     * @param array  $formParameters {
     *
     *     @var string $procedure
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\TriggerGlassVehicleDataImportProcedureUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\TriggerGlassVehicleDataImportProcedureForbiddenException
     * @throws \CatchE\OpenApi2\Exception\TriggerGlassVehicleDataImportProcedureNotFoundException
     * @throws \CatchE\OpenApi2\Exception\TriggerGlassVehicleDataImportProcedureNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\TriggerGlassVehicleDataImportProcedureUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\TriggerGlassVehicleDataImportProcedureUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\TriggerGlassVehicleDataImportProcedureInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function triggerGlassVehicleDataImportProcedure(string $importId, array $formParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\TriggerGlassVehicleDataImportProcedure($importId, $formParameters), $fetch);
    }

    /**
     * The import of Glass data generally creates new records and updates existing records where required.
     *
     * This API will initiate a Glass vehicle data import process. The process is asynchronous. The API will return the associated import_id immediately on success.
     *
     * This API can support both FTP and SFTP protocol endpoints.
     *
     * This method requires the **VehicleData:ImportGlass** permission to be associated with your role.
     *
     * ## Audit Records
     *
     * The import records created and changed in the gb_audit_import file. Reports and queries can be run over this file using the timestamp of each import to identify new records created and existing records updated. Contact Catch-e for the sample queries named:
     *
     * Variants created and updated
     * Variant residuals updated
     * Other tables updated
     *
     * ## Validation
     *
     * The import process will validate the 'NVIC' code for each row in each file. NVIC codes must be 6 characters. If any of the NVIC code fields are not 6 characters long the file will fail. No vehicles will be imported in this instance. Catch-e support will be notified.
     *
     * ## Set Up
     *
     * Clients using Glass data require the following gb_controls to be as follows:
     *
     * | Module | Name | Value |
     * |--------|------|-------|
     * |gb|data_source_default|s:5:"glass";|
     * |gb|quotes_data_source_override|s:5:"glass";|
     *
     * Client specific values must be configured for the following gb_controls:
     *
     * | Module | Name | Notes |
     * |--------|------|-------|
     * |qt|glass_import_photos_flag|
     * |qt|glass_sftp_connection|Use if client has SFTP credentials
     * |qt|glass_ftp_connection|Use if client has legacy FTP credentials
     *
     * If both SFTP and FTP connection controls are specified, the SFTP control will take precedence.
     *
     * ## Required files in Glass (monthly) archive
     *
     * | Key | |
     * |-----|-|
     * |**CVG**|Commercial Vehicles up to 10 years old includes 4WDs and vans with a load carrying capacity of less than 3510kg.|
     * |**PVG**|Passenger Vehicles up to 10 years old inclusive|
     * |**N12**|Contains only new vehicles and prices released in the current year with NVIC and contains no alphanumeric prices.|
     * |**U12**|Contains all vehicles with second hand prices with no alphanumeric prices and contains NVIC.|
     *
     * Same rules apply to PVG, HCV and CVG files. OCG AND OLC prefixes are NOT used.
     *
     * In some circumstances a client's Glass's ftp site may contain both Service 11 and Service 14 data files. The difference is Service 11 files with the file extension .U12 contain used vehicle values, whereas Service 14 files with the file extension .U12 do not.
     *
     * Where both files are present the Catch-e default is to import Service 11 .U12 data.
     *
     *
     * | Filename | Inclusion  Notes |
     * |----------|------------------|
     * |**CVG11xxx.N12**|Required if client wants new vehicles and pricing|
     * |**CVG14xxx.N12**|Required if client wants new vehicles and no pricing|
     * |**CVG14xxx.U12**|Required if client wants all vehicles and no pricing|
     * |**CVG73xxx.GRN**|CO2 Emission Data Pack|
     * |**CVG78xxx.FUE**|Fuel code long description|
     * |**CVG78xxx.STR**|Steering code long description|
     * |**CVG83xxx.OCD**|Optional equipment|
     * |**CVG86xxx.SPE**|Vehicle Specifications e.g. RELEASE, DISCON, DRV, TORQUE, KW etc|
     * |**CVG87xxx.SPE**|Vehicle Specifications e.g. VEHICLE SEGMENT, COUNTRY OF, ORIGIN, FUEL H/WAY, FUEL CITY etc|
     * |**CVG89xxx.OPT**|Standard equipment|
     * |**CVG93xxx.SUS**|Suspension|
     * |**CVG99xxx.BDY**|Body code long description|
     * |**CVG99xxx.MAK**|qt_makes|
     * |**CVG11xxx.U12**|(Optional)  All vehicles and second-hand pricing|
     * |**CVG75xxx.SPE**|(Optional)  Vehicle Specifications e.g. KW_RPM, NM_RPM, No. OF DOORS, GRD CLEARANCE etc|
     *
     * @param array $formParameters {
     *
     *     @var string $import_type
     *     @var string $file_name (Optional) File name
     *
     * If not supplied, value will default to:
     *
     **%My%**eis.zip
     *
     * Where **%My%** is dynamically replaced with current Month and Year.
     * For example, Sep20eis.zip.
     *     @var \Psr\Http\Message\StreamInterface|resource|string $data (Optional) Data file to import. If specified, the file_name parameter is ignored.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\RequestGlassVehicleDataImportUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\RequestGlassVehicleDataImportForbiddenException
     * @throws \CatchE\OpenApi2\Exception\RequestGlassVehicleDataImportNotFoundException
     * @throws \CatchE\OpenApi2\Exception\RequestGlassVehicleDataImportNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\RequestGlassVehicleDataImportUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\RequestGlassVehicleDataImportUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\RequestGlassVehicleDataImportInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\VehicleDataRequestGlassImportSuccess|\Psr\Http\Message\ResponseInterface
     */
    public function requestGlassVehicleDataImport(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\RequestGlassVehicleDataImport($formParameters, $headerParameters), $fetch);
    }

    /**
     * This method requires the **InterfaceExports:255FinanceGet** permission to be associated with your role.
     *
     * @param string $interfaceExportId Interface Export Id
     * @param string $fetch             Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\Get255FinanceExportBatchUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\Get255FinanceExportBatchForbiddenException
     * @throws \CatchE\OpenApi2\Exception\Get255FinanceExportBatchNotFoundException
     * @throws \CatchE\OpenApi2\Exception\Get255FinanceExportBatchNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\Get255FinanceExportBatchInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\_255FinanceExportGetSuccess|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function get255FinanceExportBatch(string $interfaceExportId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\Get255FinanceExportBatch($interfaceExportId), $fetch);
    }

    /**
     * This method requires the **InterfaceExports:255FinancePrepare** permission to be associated with your role.
     *
     * @param array $formParameters {
     *
     *     @var string $contract_event_code Valid gl_posting_classes posting class code
     *     @var string $deals_partner_code Deals Partner Code to be applied to EDI XML root attribute of generated Challenger document
     *     @var string $set_event_completed_flag
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\Prepare255FinanceExportBatchUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\Prepare255FinanceExportBatchForbiddenException
     * @throws \CatchE\OpenApi2\Exception\Prepare255FinanceExportBatchNotFoundException
     * @throws \CatchE\OpenApi2\Exception\Prepare255FinanceExportBatchNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\Prepare255FinanceExportBatchUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\Prepare255FinanceExportBatchUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\Prepare255FinanceExportBatchInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\_255FinancePreparePostSuccess|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function prepare255FinanceExportBatch(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\Prepare255FinanceExportBatch($formParameters, $headerParameters), $fetch);
    }

    /**
     * This method requires the **InterfaceExports:255FinanceSubmit** permission to be associated with your role.
     *
     * @param array $formParameters {
     *
     *     @var string $dmz_upload_file_destination_id Credentials to use for submission process
     *     @var string $dmz_upload_remote_prefix (Optional) Remote directory prefix to use when submitting file to upload destination
     *     @var string $interface_export_id (Optional) Interface Export Id
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\Submit255FinanceExportBatchUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\Submit255FinanceExportBatchForbiddenException
     * @throws \CatchE\OpenApi2\Exception\Submit255FinanceExportBatchNotFoundException
     * @throws \CatchE\OpenApi2\Exception\Submit255FinanceExportBatchNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\Submit255FinanceExportBatchUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\Submit255FinanceExportBatchUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\Submit255FinanceExportBatchInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function submit255FinanceExportBatch(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\Submit255FinanceExportBatch($formParameters, $headerParameters), $fetch);
    }

    /**
     * This method requires the **DocumentConversion** permission to be associated with your role.
     *
     * @param array $formParameters {
     *
     *     @var \Psr\Http\Message\StreamInterface|resource|string $document Document to convert
     *     @var string $target_format Target format
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\ConvertDocumentUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\ConvertDocumentForbiddenException
     * @throws \CatchE\OpenApi2\Exception\ConvertDocumentNotFoundException
     * @throws \CatchE\OpenApi2\Exception\ConvertDocumentNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\ConvertDocumentUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\ConvertDocumentUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\ConvertDocumentInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function convertDocument(array $formParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\ConvertDocument($formParameters), $fetch);
    }

    /**
     * This method requires the **Locks:Delete** permission to be associated with your role.
     *
     * @param array  $lockKeys JSON payload consisting of an array of [gb_locks]lock_key values
     * @param string $fetch    Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\DeleteLocksUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\DeleteLocksForbiddenException
     * @throws \CatchE\OpenApi2\Exception\DeleteLocksNotFoundException
     * @throws \CatchE\OpenApi2\Exception\DeleteLocksNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\DeleteLocksInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function deleteLocks(array $lockKeys, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\DeleteLocks($lockKeys), $fetch);
    }

    /**
     * Get table locks currently held for the specified table name.
     * This method requires the **Locks:Get** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var string $table_name Table name
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetLocksUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetLocksForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetLocksNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetLocksNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetLocksUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\GetLocksInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\GbLocksGetResponse200Item[]|\Psr\Http\Message\ResponseInterface
     */
    public function getLocks(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetLocks($queryParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetApiEndpointInfoNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetApiEndpointInfoNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetApiEndpointInfoInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\CurrentEndpointDetails|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getApiEndpointInfo(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetApiEndpointInfo(), $fetch);
    }

    /**
     * Get record locks currently held for the specified table name and unique id.
     *
     * This method requires the **Locks:Get** permission to be associated with your role.
     *
     * @param string $tableName Table name
     * @param string $uniqueId  Unique Id to check for locks on
     * @param string $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetRecordLocksUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetRecordLocksForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetRecordLocksNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetRecordLocksNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetRecordLocksInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\GbLocksTableNameUniqueIdGetResponse200Item[]|\Psr\Http\Message\ResponseInterface
     */
    public function getRecordLocks(string $tableName, string $uniqueId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetRecordLocks($tableName, $uniqueId), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\PingUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\PingForbiddenException
     * @throws \CatchE\OpenApi2\Exception\PingNotFoundException
     * @throws \CatchE\OpenApi2\Exception\PingNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\PingInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\Ping|\Psr\Http\Message\ResponseInterface
     */
    public function ping(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\Ping(), $fetch);
    }

    /**
     * This method requires the **Payees:Get** permission to be associated with your role.
     *
     * @param string $payeeId Payment method Id
     * @param string $fetch   Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetPayeeUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetPayeeForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetPayeeNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetPayeeNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetPayeeInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\Payee|\Psr\Http\Message\ResponseInterface
     */
    public function getPayee(string $payeeId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetPayee($payeeId), $fetch);
    }

    /**
     * This method requires the **PayeePaymentMethods:Get** permission to be associated with your role.
     *
     * @param string $payeePaymentMethodId Payee Payment method Id
     * @param string $fetch                Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetPayeePaymentMethodUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetPayeePaymentMethodForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetPayeePaymentMethodNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetPayeePaymentMethodNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetPayeePaymentMethodInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\PayeePaymentMethod|\Psr\Http\Message\ResponseInterface
     */
    public function getPayeePaymentMethod(string $payeePaymentMethodId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetPayeePaymentMethod($payeePaymentMethodId), $fetch);
    }

    /**
     * This method requires the **PayeePaymentMethods:Get** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var string $process_type Process type
     *     @var string $payee_id Payee Id
     *     @var string $payment_method_id Payment method Id
     *     @var string $status_flag Status flag
     *     @var int $page Optional page number
     *     @var int $page_size Optional page size
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetPayeePaymentMethodsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetPayeePaymentMethodsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetPayeePaymentMethodsNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetPayeePaymentMethodsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetPayeePaymentMethodsConflictException
     * @throws \CatchE\OpenApi2\Exception\GetPayeePaymentMethodsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\PayeePaymentMethodsGet|\Psr\Http\Message\ResponseInterface
     */
    public function getPayeePaymentMethods(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetPayeePaymentMethods($queryParameters), $fetch);
    }

    /**
     * This method requires the **Payees:Get** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var string $payee Payee
     *     @var string $status_flag Status flag
     *     @var int $page Optional page number
     *     @var int $page_size Optional page size
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetPayeesUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetPayeesForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetPayeesNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetPayeesNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetPayeesConflictException
     * @throws \CatchE\OpenApi2\Exception\GetPayeesInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\PayeesGet|\Psr\Http\Message\ResponseInterface
     */
    public function getPayees(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetPayees($queryParameters), $fetch);
    }

    /**
     * This method requires the **PaymentMethods:Get** permission to be associated with your role.
     *
     * @param string $paymentMethodId Payment method Id
     * @param string $fetch           Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetPaymentMethodUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetPaymentMethodForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetPaymentMethodNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetPaymentMethodNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetPaymentMethodInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\PaymentMethod|\Psr\Http\Message\ResponseInterface
     */
    public function getPaymentMethod(string $paymentMethodId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetPaymentMethod($paymentMethodId), $fetch);
    }

    /**
     * This method requires the **PaymentMethods:Get** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var string $payment_method Payment method
     *     @var string $status_flag Status flag
     *     @var int $page Optional page number
     *     @var int $page_size Optional page size
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetPaymentMethodsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetPaymentMethodsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetPaymentMethodsNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetPaymentMethodsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetPaymentMethodsConflictException
     * @throws \CatchE\OpenApi2\Exception\GetPaymentMethodsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\PaymentMethodsGet|\Psr\Http\Message\ResponseInterface
     */
    public function getPaymentMethods(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetPaymentMethods($queryParameters), $fetch);
    }

    /**
     * List all defined API permissions.
     *
     * This method requires the **ApiPermissions:Get** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var string $permission Optional Permission
     *
     * This field supports the wildcard % operator.
     *
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetApiPermissionsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetApiPermissionsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetApiPermissionsNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetApiPermissionsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetApiPermissionsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getApiPermissions(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetApiPermissions($queryParameters), $fetch);
    }

    /**
     * This method requires the **ApiPermissions:Get** permission to be associated with your role.
     *
     * @param string $roleId          Role Id
     * @param array  $queryParameters {
     *
     *     @var string $permission Optional Permission
     *
     * This field supports the wildcard % operator.
     *
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetRoleApiPermissionsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetRoleApiPermissionsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetRoleApiPermissionsNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetRoleApiPermissionsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetRoleApiPermissionsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getRoleApiPermissions(string $roleId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetRoleApiPermissions($roleId, $queryParameters), $fetch);
    }

    /**
     * Set role API permissions. This method will set the role permissions to the list provided in the JSON payload.
     *
     * This method requires the **ApiPermissions:Update** permission to be associated with your role.
     *
     * @param string                                       $roleId      Role Id
     * @param \CatchE\OpenApi2\Model\RoleApiPermissionsSet $permissions JSON payload
     * @param string                                       $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\SetRoleApiPermissionsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\SetRoleApiPermissionsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\SetRoleApiPermissionsNotFoundException
     * @throws \CatchE\OpenApi2\Exception\SetRoleApiPermissionsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\SetRoleApiPermissionsUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\SetRoleApiPermissionsUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\SetRoleApiPermissionsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function setRoleApiPermissions(string $roleId, Model\RoleApiPermissionsSet $permissions, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\SetRoleApiPermissions($roleId, $permissions), $fetch);
    }

    /**
     * Get a list of fuel types.
     *
     * This method requires the **FuelTypes:Get** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var string $fuel_type_code Optional Fuel Type Code
     *     @var int $page Optional page number
     *     @var int $page_size Optional page size
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetFuelTypesUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetFuelTypesForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetFuelTypesNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetFuelTypesNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetFuelTypesConflictException
     * @throws \CatchE\OpenApi2\Exception\GetFuelTypesUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\GetFuelTypesInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\FuelTypesGet|\Psr\Http\Message\ResponseInterface
     */
    public function getFuelTypes(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetFuelTypes($queryParameters), $fetch);
    }

    /**
     * This method requires the **Inclusions:Get** permission to be associated with your role.
     *
     * @param string $inclusionId Inclusion Id
     * @param string $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetInclusionUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetInclusionForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetInclusionNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetInclusionNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetInclusionInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\Inclusion|\Psr\Http\Message\ResponseInterface
     */
    public function getInclusion(string $inclusionId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetInclusion($inclusionId), $fetch);
    }

    /**
     * This method requires the **InclusionPlans:Get** permission to be associated with your role.
     *
     * @param string $inclusionPlanId Inclusion Plan Id
     * @param string $fetch           Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetInclusionPlanUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetInclusionPlanForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetInclusionPlanNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetInclusionPlanNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetInclusionPlanInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\InclusionPlan|\Psr\Http\Message\ResponseInterface
     */
    public function getInclusionPlan(string $inclusionPlanId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetInclusionPlan($inclusionPlanId), $fetch);
    }

    /**
     * Get a list of inclusion plans.
     *
     * This method requires the **InclusionPlans:Get** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var string $inclusion_code Optional Inclusion Code
     *     @var string $inclusion_plan_code Optional Inclusion Plan Code
     *     @var int $page Optional page number
     *     @var int $page_size Optional page size
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetInclusionPlansUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetInclusionPlansForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetInclusionPlansNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetInclusionPlansNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetInclusionPlansConflictException
     * @throws \CatchE\OpenApi2\Exception\GetInclusionPlansUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\GetInclusionPlansInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\InclusionPlansGet|\Psr\Http\Message\ResponseInterface
     */
    public function getInclusionPlans(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetInclusionPlans($queryParameters), $fetch);
    }

    /**
     * Get a list of inclusions.
     *
     * This method requires the **Inclusions:Get** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var string $inclusion_code Optional Inclusion Code
     *     @var string $edit_flag Optional Edit Flag
     *     @var string $provider Optional Provider
     *     @var int $page Optional page number
     *     @var int $page_size Optional page size
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetInclusionsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetInclusionsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetInclusionsNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetInclusionsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetInclusionsConflictException
     * @throws \CatchE\OpenApi2\Exception\GetInclusionsUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\GetInclusionsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\InclusionsGet|\Psr\Http\Message\ResponseInterface
     */
    public function getInclusions(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetInclusions($queryParameters), $fetch);
    }

    /**
     * This method requires the **InsuranceLoadingTypes:Get** permission to be associated with your role.
     *
     * @param string $insuranceLoadingTypeId Insurance Loading Type Id
     * @param string $fetch                  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetInsuranceLoadingTypeUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetInsuranceLoadingTypeForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetInsuranceLoadingTypeNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetInsuranceLoadingTypeNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetInsuranceLoadingTypeInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\InsuranceLoadingType|\Psr\Http\Message\ResponseInterface
     */
    public function getInsuranceLoadingType(string $insuranceLoadingTypeId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetInsuranceLoadingType($insuranceLoadingTypeId), $fetch);
    }

    /**
     * Get a list of insurance loading types.
     *
     * This method requires the **InsuranceLoadingTypes:Get** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var string $loading_type Optional Loading Type
     *     @var int $page Optional page number
     *     @var int $page_size Optional page size
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetInsuranceLoadingTypesUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetInsuranceLoadingTypesForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetInsuranceLoadingTypesNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetInsuranceLoadingTypesNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetInsuranceLoadingTypesConflictException
     * @throws \CatchE\OpenApi2\Exception\GetInsuranceLoadingTypesUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\GetInsuranceLoadingTypesInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\InsuranceLoadingTypesGet|\Psr\Http\Message\ResponseInterface
     */
    public function getInsuranceLoadingTypes(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetInsuranceLoadingTypes($queryParameters), $fetch);
    }

    /**
     * This method requires the **InsuranceTypes:Get** permission to be associated with your role.
     *
     * @param string $insuranceTypeId Insurance Type Id
     * @param string $fetch           Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetInsuranceTypeUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetInsuranceTypeForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetInsuranceTypeNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetInsuranceTypeNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetInsuranceTypeInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\InsuranceType|\Psr\Http\Message\ResponseInterface
     */
    public function getInsuranceType(string $insuranceTypeId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetInsuranceType($insuranceTypeId), $fetch);
    }

    /**
     * Get a list of insurance types.
     *
     * This method requires the **InsuranceTypes:Get** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var string $insurance_type_code Optional Insurance Type Code
     *     @var string $type_category Optional Type Category
     *     @var string $high_performance_flag Optional High Performance Flag
     *     @var int $page Optional page number
     *     @var int $page_size Optional page size
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetInsuranceTypesUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetInsuranceTypesForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetInsuranceTypesNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetInsuranceTypesNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetInsuranceTypesConflictException
     * @throws \CatchE\OpenApi2\Exception\GetInsuranceTypesUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\GetInsuranceTypesInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\InsuranceTypesGet|\Psr\Http\Message\ResponseInterface
     */
    public function getInsuranceTypes(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetInsuranceTypes($queryParameters), $fetch);
    }

    /**
     * This method requires the **InsurerLocations:Get** permission to be associated with your role.
     *
     * @param string $insurerLocationId Insurer Location Id
     * @param string $fetch             Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetInsurerLocationUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetInsurerLocationForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetInsurerLocationNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetInsurerLocationNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetInsurerLocationInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\InsurerLocation|\Psr\Http\Message\ResponseInterface
     */
    public function getInsurerLocation(string $insurerLocationId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetInsurerLocation($insurerLocationId), $fetch);
    }

    /**
     * Get a list of insurer locations.
     *
     * This method requires the **InsurerLocations:Get** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var string $supplier_id Optional Supplier Id
     *     @var string $policy_owner_type Optional Policy Owner Type
     *     @var int $page Optional page number
     *     @var int $page_size Optional page size
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetInsurerLocationsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetInsurerLocationsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetInsurerLocationsNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetInsurerLocationsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetInsurerLocationsConflictException
     * @throws \CatchE\OpenApi2\Exception\GetInsurerLocationsUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\GetInsurerLocationsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\InsurerLocationsGet|\Psr\Http\Message\ResponseInterface
     */
    public function getInsurerLocations(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetInsurerLocations($queryParameters), $fetch);
    }

    /**
     * Get a list of roadside assistance plans.
     *
     * This method requires the **RoadsideAssistancePlans:Get** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var string $roadside_assistance_plan_code Optional Roadside Assistance Plan Code
     *     @var int $page Optional page number
     *     @var int $page_size Optional page size
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetRoadsideAssistancePlansUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetRoadsideAssistancePlansForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetRoadsideAssistancePlansNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetRoadsideAssistancePlansNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetRoadsideAssistancePlansConflictException
     * @throws \CatchE\OpenApi2\Exception\GetRoadsideAssistancePlansUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\GetRoadsideAssistancePlansInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\RoadsideAssistancePlansGet|\Psr\Http\Message\ResponseInterface
     */
    public function getRoadsideAssistancePlans(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetRoadsideAssistancePlans($queryParameters), $fetch);
    }

    /**
     * This method requires the **QuoteVariants:Get** permission to be associated with your role.
     *
     * @param string $variantId Variant Id
     * @param string $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetVariantUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetVariantForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetVariantNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetVariantNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetVariantInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\Variant|\Psr\Http\Message\ResponseInterface
     */
    public function getVariant(string $variantId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetVariant($variantId), $fetch);
    }

    /**
     * This method requires the **QuoteVariants:Get** permission to be associated with your role.
     *
     * @param string $bodyTypeId Body Type Id
     * @param string $fetch      Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetVariantBodyTypeUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetVariantBodyTypeForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetVariantBodyTypeNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetVariantBodyTypeNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetVariantBodyTypeInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\VariantBodyType|\Psr\Http\Message\ResponseInterface
     */
    public function getVariantBodyType(string $bodyTypeId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetVariantBodyType($bodyTypeId), $fetch);
    }

    /**
     * Get a list of variant body types.
     *
     * This method requires the **QuoteVariants:Get** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var string $model_id Optional Model Id
     *     @var int $model_year Optional Model Year
     *     @var string $profile_required_flag If yes, only show body types for variants that have an active qt_variant_profile record
     *     @var int $page Optional page number
     *     @var int $page_size Optional page size
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetVariantBodyTypesUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetVariantBodyTypesForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetVariantBodyTypesNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetVariantBodyTypesNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetVariantBodyTypesConflictException
     * @throws \CatchE\OpenApi2\Exception\GetVariantBodyTypesUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\GetVariantBodyTypesInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\VariantBodyTypesGet|\Psr\Http\Message\ResponseInterface
     */
    public function getVariantBodyTypes(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetVariantBodyTypes($queryParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetVariantDataSourcesUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetVariantDataSourcesForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetVariantDataSourcesNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetVariantDataSourcesNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetVariantDataSourcesInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\VariantDataSource[]|\Psr\Http\Message\ResponseInterface
     */
    public function getVariantDataSources(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetVariantDataSources(), $fetch);
    }

    /**
     * This method requires the **QuoteVariants:Get** permission to be associated with your role.
     *
     * @param string $makeId Make Id
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetVariantMakeUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetVariantMakeForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetVariantMakeNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetVariantMakeNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetVariantMakeInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\VariantMake|\Psr\Http\Message\ResponseInterface
     */
    public function getVariantMake(string $makeId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetVariantMake($makeId), $fetch);
    }

    /**
     * Get a list of vehicle makes.
     *
     * This method requires the **QuoteVariants:Get** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var string $make_code optional Make Code
     *
     * This field supports the wildcard % operator
     *     @var string $name optional Make Name
     *
     * This field supports the wildcard % operator
     *     @var string $make_type Optional Make Type
     *     @var string $data_source_id Optional Data Source Id
     *     @var string $profile_required_flag If yes, only show makes for variants that have an active qt_variant_profile record
     *     @var string $include_inactive_flag Set to yes if inactive items required in the list
     *     @var int $page Optional page number
     *     @var int $page_size Optional page size
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetVariantMakesUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetVariantMakesForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetVariantMakesNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetVariantMakesNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetVariantMakesConflictException
     * @throws \CatchE\OpenApi2\Exception\GetVariantMakesUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\GetVariantMakesInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\VariantMakesGet|\Psr\Http\Message\ResponseInterface
     */
    public function getVariantMakes(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetVariantMakes($queryParameters), $fetch);
    }

    /**
     * This method requires the **QuoteVariants:Get** permission to be associated with your role.
     *
     * @param string $modelId Model Id
     * @param string $fetch   Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetVariantModelUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetVariantModelForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetVariantModelNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetVariantModelNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetVariantModelInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\VariantModel|\Psr\Http\Message\ResponseInterface
     */
    public function getVariantModel(string $modelId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetVariantModel($modelId), $fetch);
    }

    /**
     * Get an array of model years for a given vehicle model.
     *
     * Model Years are linked to Variants, and Variants are excluded if they have a status of 'pending'. So if all the Variants for a particular Model Year are at status 'pending', that Model Year will not be returned in the list.
     *
     * This method requires the **QuoteVariants:Get** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var string $model_id Model Id
     *     @var string $profile_required_flag If yes, only show model years for variants that have an active qt_variant_profile record
     *
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetVariantModelYearsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetVariantModelYearsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetVariantModelYearsNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetVariantModelYearsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetVariantModelYearsUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\GetVariantModelYearsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getVariantModelYears(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetVariantModelYears($queryParameters), $fetch);
    }

    /**
     * Get a list of variant models.
     *
     * This method requires the **QuoteVariants:Get** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var string $make_id Optional Make Id
     *     @var string $model_code optional Model Code
     *
     * This field supports the wildcard % operator
     *     @var string $data_source_id Optional Data Source Id
     *     @var string $profile_required_flag If yes, only show models for variants that have an active qt_variant_profile record
     *     @var string $include_inactive_flag Set to yes if inactive items required in the list
     *     @var int $page Optional page number
     *     @var int $page_size Optional page size
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetVariantModelsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetVariantModelsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetVariantModelsNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetVariantModelsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetVariantModelsConflictException
     * @throws \CatchE\OpenApi2\Exception\GetVariantModelsUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\GetVariantModelsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\VariantModelsGet|\Psr\Http\Message\ResponseInterface
     */
    public function getVariantModels(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetVariantModels($queryParameters), $fetch);
    }

    /**
     * This method requires the **QuoteVariants:Get** permission to be associated with your role.
     *
     * @param string $variantId       Variant Id
     * @param array  $queryParameters {
     *
     *     @var int $page Optional page number
     *     @var int $page_size Optional page size
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetVariantOptionalEquipmentUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetVariantOptionalEquipmentForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetVariantOptionalEquipmentNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetVariantOptionalEquipmentNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetVariantOptionalEquipmentConflictException
     * @throws \CatchE\OpenApi2\Exception\GetVariantOptionalEquipmentInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\VariantOptionalEquipmentGet|\Psr\Http\Message\ResponseInterface
     */
    public function getVariantOptionalEquipment(string $variantId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetVariantOptionalEquipment($variantId, $queryParameters), $fetch);
    }

    /**
     * Get list of photo codes and corresponding types for a given vehicle variant. Photo codes are provided by the vehicle data supplier, and are typically used as the file name for each image. Types describe the orientation of the photo e.g. 'front'.
     *
     * This method requires the **QuoteVariants:Get** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var string $variant_id Variant Id
     *     @var array $photo_type Optional Photo Types
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetVariantPhotosUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetVariantPhotosForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetVariantPhotosNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetVariantPhotosNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetVariantPhotosInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\VariantPhotosGet|\Psr\Http\Message\ResponseInterface
     */
    public function getVariantPhotos(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetVariantPhotos($queryParameters), $fetch);
    }

    /**
     * This method requires the **QuoteVariants:Get** permission to be associated with your role.
     *
     * @param string $variantId       Variant Id
     * @param array  $queryParameters {
     *
     *     @var int $page Optional page number
     *     @var int $page_size Optional page size
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetVariantStandardEquipmentUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetVariantStandardEquipmentForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetVariantStandardEquipmentNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetVariantStandardEquipmentNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetVariantStandardEquipmentConflictException
     * @throws \CatchE\OpenApi2\Exception\GetVariantStandardEquipmentInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\VariantStandardEquipmentGet|\Psr\Http\Message\ResponseInterface
     */
    public function getVariantStandardEquipment(string $variantId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetVariantStandardEquipment($variantId, $queryParameters), $fetch);
    }

    /**
     * This method requires the **QuoteVariants:Get** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var string $make_id Optional Make Id
     *     @var string $model_id Optional Model Id
     *     @var int $model_year Optional Model Year
     *     @var string $variant_code optional Variant Code
     *
     * This field supports the wildcard % operator
     *     @var string $variant_name optional Variant Name
     *
     * This field supports the wildcard % operator
     *     @var string $body_type_id Optional Body Type Id
     *     @var string $data_source_id Optional Data Source Id
     *     @var string $profile_required_flag If yes, only show variants that have an active qt_variant_profile record
     *     @var string $include_inactive_flag Set to yes if inactive items required in the list
     *     @var int $page Optional page number
     *     @var int $page_size Optional page size
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetVariantsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetVariantsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetVariantsNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetVariantsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetVariantsConflictException
     * @throws \CatchE\OpenApi2\Exception\GetVariantsUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\GetVariantsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\VariantsGet|\Psr\Http\Message\ResponseInterface
     */
    public function getVariants(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetVariants($queryParameters), $fetch);
    }

    /**
     * This method requires the **Quotes:Accept** permission to be associated with your role.
     *
     * @param string $quoteId        Quote Id
     * @param array  $formParameters {
     *
     *     @var string $procurement_check_flag Procurement Check Flag
     *
     * If **no** procurement check warnings will prevent a quote from being accepted if the qt::accept_quote_procurement_check control is configured to enable alerts and the procurement flag is checked on the quote.
     *
     * Setting **yes** will overrride the procurement check warnings and indicate acceptance of any applicable procurement fees.
     *     @var string $timezone Quotes will be accepted in the specified timezone.
     *
     * The timezone value can be given in several formats, none of which are case sensitive:
     * - As a named time zone, such as 'Europe/Helsinki', 'US/Eastern', or 'MET'.
     * - As a string indicating an offset from UTC of the form [H]H:MM, prefixed with a + or -, such as '+10:00', '-6:00', or '+05:30'.
     * A leading zero can optionally be used for hours values less than 10;
     *
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $Delegated-Locking-Session-Id (Optional) Locking responsibility will be delegated to the specified Session Id.
     *
     * This header enables the client to instruct the API to merely verify the presence of locks with the specified session id, but not attempt to obtain them itself. It requires the **DelegatedLocking** permission to be associated with your role.
     *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\AcceptQuoteUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\AcceptQuoteForbiddenException
     * @throws \CatchE\OpenApi2\Exception\AcceptQuoteNotFoundException
     * @throws \CatchE\OpenApi2\Exception\AcceptQuoteNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\AcceptQuoteUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\AcceptQuoteUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\AcceptQuoteLockedException
     * @throws \CatchE\OpenApi2\Exception\AcceptQuoteInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\QuoteAcceptSuccess|\Psr\Http\Message\ResponseInterface
     */
    public function acceptQuote(string $quoteId, array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\AcceptQuote($quoteId, $formParameters, $headerParameters), $fetch);
    }

    /**
     * Get a list of all (child) Quotes linked to a (primary) Quote ID in a tree structure.
     *
     **Note:** circular references are not allowed and will result in a validation error.
     *
     * This method requires the **Quotes:GetChildQuotes** permission to be associated  with your role.
     *
     * @param string $quoteId         Quote Id
     * @param array  $queryParameters {
     *
     *     @var int $depth (Optional) The depth of parent / child relationships required.
     *
     * 1 = children only
     * 2 = children and grandchildren
     * 3 = children, grandchildren, and great-grandchildren
     *
     * Maximum 100.
     *
     * By default, the full parent / child relationship history is returned unless the depth exceeds 100 in which case you get a validation error.
     *
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetChildQuotesUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetChildQuotesForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetChildQuotesUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\GetChildQuotesInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\ChildQuotesGet|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getChildQuotes(string $quoteId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetChildQuotes($quoteId, $queryParameters), $fetch);
    }

    /**
     * This method requires the **Quotes:Get** permission to be associated with your role.
     *
     * @param string $quoteId Quote Id
     * @param string $fetch   Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetQuoteUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetQuoteForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetQuoteNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetQuoteInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Quote|\Psr\Http\Message\ResponseInterface
     */
    public function getQuote(string $quoteId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetQuote($quoteId), $fetch);
    }

    /**
     * Partially update a quote.
     *
     * This method is not idempotent.
     *
     * This method requires the **Quotes:Update** permission to be associated with your role.
     *
     * This API will allow partial updating of a quote. Initially only selected Lease Profiles listed below will be supported. More functionality will be added later.
     *
     **Currently supported features:**
     * 1) Carbon Emissions Offset (CEO)
     * 2) Fuel (F)
     * 3) Comprehensive Insurance (INS)
     * 4) Registration & CTP (REGCTP)
     * 5) Roadside Assistance (RSA)
     * 6) Vehicle Maintenance Program (VMP)
     * 7) Lease Inclusions
     *
     * @param string                            $quoteId          Quote ID
     * @param \CatchE\OpenApi2\Model\QuotePatch $quote            JSON payload
     * @param array                             $headerParameters {
     *
     *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\PatchQuoteUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\PatchQuoteForbiddenException
     * @throws \CatchE\OpenApi2\Exception\PatchQuoteUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\PatchQuoteLockedException
     * @throws \CatchE\OpenApi2\Exception\PatchQuoteInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Quote|\Psr\Http\Message\ResponseInterface
     */
    public function patchQuote(string $quoteId, Model\QuotePatch $quote, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\PatchQuote($quoteId, $quote, $headerParameters), $fetch);
    }

    /**
     * The representational output format of the report query is controlled by HTTP Accept header. Three content types are presently supported:.
     *
     * text/csv
     * text/xml
     * application/vnd.ms-excel
     * application/json (default)
     *
     * Queries that run successfully but result in 0 rows will return an HTTP 204 (No content) response from the API.
     *
     * Query parameters are optional. If a specific parameter is *required* by the selected report query but not included in the request,
     * a 422 Unprocessable Entity response will result. The required parameter will be documented within the HTTP 422 response payload.
     *
     * This method requires the **ReportQueries:Print** permission to be associated with the role.
     *
     * @param string $reportQueryId   Report query to run
     * @param array  $queryParameters Report query parameters
     * @param string $fetch           Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\PrintReportQueryUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\PrintReportQueryForbiddenException
     * @throws \CatchE\OpenApi2\Exception\PrintReportQueryNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\PrintReportQueryUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\PrintReportQueryUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\PrintReportQueryInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function printReportQuery(string $reportQueryId, array $queryParameters, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\PrintReportQuery($reportQueryId, $queryParameters), $fetch);
    }

    /**
     * This method requires the **ReferenceData:Delete** permission to
     * be associated with your role.
     *
     * @param array  $variantStandardEquipment JSON payload
     * @param string $fetch                    Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\DeleteVariantStandardEquipmentMultipleUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\DeleteVariantStandardEquipmentMultipleForbiddenException
     * @throws \CatchE\OpenApi2\Exception\DeleteVariantStandardEquipmentMultipleNotFoundException
     * @throws \CatchE\OpenApi2\Exception\DeleteVariantStandardEquipmentMultipleUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\DeleteVariantStandardEquipmentMultipleInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteVariantStandardEquipmentMultiple(array $variantStandardEquipment, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\DeleteVariantStandardEquipmentMultiple($variantStandardEquipment), $fetch);
    }

    /**
     * This method requires the **ReferenceData:Get** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var string $variant_id Filter by Variant Id
     *     @var array $standard_equipment_id (Optional) Filter by Standard Equipment Id
     *     @var int $page Optional page number
     *     @var int $page_size Optional page size
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetVariantStandardEquipmentMultipleUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetVariantStandardEquipmentMultipleForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetVariantStandardEquipmentMultipleUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\GetVariantStandardEquipmentMultipleInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\QtVariantStandardEquipmentGet|\Psr\Http\Message\ResponseInterface
     */
    public function getVariantStandardEquipmentMultiple(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetVariantStandardEquipmentMultiple($queryParameters), $fetch);
    }

    /**
     * This method requires the **ReferenceData:Create** permission be associated with your role.
     *
     * @param \CatchE\OpenApi2\Model\VariantStandardEquipmentCreate $variantStandardEquipment JSON payload
     * @param array                                                 $headerParameters         {
     *
     *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\AddVariantStandardEquipmentUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\AddVariantStandardEquipmentForbiddenException
     * @throws \CatchE\OpenApi2\Exception\AddVariantStandardEquipmentUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\AddVariantStandardEquipmentInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\VariantStandardEquipment|\Psr\Http\Message\ResponseInterface
     */
    public function addVariantStandardEquipment(Model\VariantStandardEquipmentCreate $variantStandardEquipment, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\AddVariantStandardEquipment($variantStandardEquipment, $headerParameters), $fetch);
    }

    /**
     * This method requires the **ReferenceData:Delete** permission to
     * be associated with your role.
     *
     * @param array  $body  JSON payload
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\DeleteVariantDealerDiscountsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\DeleteVariantDealerDiscountsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\DeleteVariantDealerDiscountsNotFoundException
     * @throws \CatchE\OpenApi2\Exception\DeleteVariantDealerDiscountsUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\DeleteVariantDealerDiscountsInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteVariantDealerDiscounts(array $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\DeleteVariantDealerDiscounts($body), $fetch);
    }

    /**
     * This method requires the **ReferenceData:Get** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var array $variant_id (Optional) Filter by Variant Id
     *     @var array $dealer_discount_type_id (Optional) Filter by Dealer Discount Type Id
     *     @var array $supplier_id (Optional) Filter by Dealer Supplier Id
     *     @var array $client_id (Optional) Filter by Dealer Client Id
     *     @var int $page (Optional) Page number
     *     @var int $page_size (Optional) Page size
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetVariantDealerDiscountsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetVariantDealerDiscountsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetVariantDealerDiscountsNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetVariantDealerDiscountsUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\GetVariantDealerDiscountsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\VariantDealerDiscounts|\Psr\Http\Message\ResponseInterface
     */
    public function getVariantDealerDiscounts(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetVariantDealerDiscounts($queryParameters), $fetch);
    }

    /**
     * Create new variant dealer discount
     * This method requires the **ReferenceData:Create** permission to be associated with your role.
     *
     * @param \CatchE\OpenApi2\Model\VariantDealerDiscountCreate $discount JSON payload
     * @param string                                             $fetch    Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\CreateVariantDealerDiscountUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\CreateVariantDealerDiscountForbiddenException
     * @throws \CatchE\OpenApi2\Exception\CreateVariantDealerDiscountUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\CreateVariantDealerDiscountInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\QtVariantDealerDiscount|\Psr\Http\Message\ResponseInterface
     */
    public function createVariantDealerDiscount(Model\VariantDealerDiscountCreate $discount, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\CreateVariantDealerDiscount($discount), $fetch);
    }

    /**
     * This method requires the **ReferenceData:Update** permissions to be
     * associated with your role.
     *
     * @param array  $discount JSON payload
     * @param string $fetch    Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\UpdateVariantDealerDiscountsMultipleUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\UpdateVariantDealerDiscountsMultipleForbiddenException
     * @throws \CatchE\OpenApi2\Exception\UpdateVariantDealerDiscountsMultipleNotFoundException
     * @throws \CatchE\OpenApi2\Exception\UpdateVariantDealerDiscountsMultipleUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\UpdateVariantDealerDiscountsMultipleInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\VariantDealerDiscounts[]|\Psr\Http\Message\ResponseInterface
     */
    public function updateVariantDealerDiscountsMultiple(array $discount, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\UpdateVariantDealerDiscountsMultiple($discount), $fetch);
    }

    /**
     * This method requires the **ReferenceData:Delete** permission to
     * be associated with your role.
     *
     * @param string $variantDealerDiscountId Variant dealer discount Id to delete
     * @param string $fetch                   Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\DeleteVariantDealerDiscountUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\DeleteVariantDealerDiscountForbiddenException
     * @throws \CatchE\OpenApi2\Exception\DeleteVariantDealerDiscountNotFoundException
     * @throws \CatchE\OpenApi2\Exception\DeleteVariantDealerDiscountInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteVariantDealerDiscount(string $variantDealerDiscountId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\DeleteVariantDealerDiscount($variantDealerDiscountId), $fetch);
    }

    /**
     * This method requires the **ReferenceData:Get** permission to be
     * associated with your role.
     *
     * @param string $variantDealerDiscountId Optionally filter by variant id
     * @param string $fetch                   Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetVariantDealerDiscountUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetVariantDealerDiscountForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetVariantDealerDiscountNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetVariantDealerDiscountUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\GetVariantDealerDiscountInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\QtVariantDealerDiscount|\Psr\Http\Message\ResponseInterface
     */
    public function getVariantDealerDiscount(string $variantDealerDiscountId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetVariantDealerDiscount($variantDealerDiscountId), $fetch);
    }

    /**
     * Update an exisiting channel
     * This method requires the **ReferenceData:Update** permissions to be
     * associated with your role.
     *
     * @param string                                             $variantDealerDiscountId Variant Dealer discount id to update
     * @param \CatchE\OpenApi2\Model\VariantDealerDiscountUpdate $discount                JSON payload
     * @param string                                             $fetch                   Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\UpdateVariantDealerDiscountUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\UpdateVariantDealerDiscountForbiddenException
     * @throws \CatchE\OpenApi2\Exception\UpdateVariantDealerDiscountNotFoundException
     * @throws \CatchE\OpenApi2\Exception\UpdateVariantDealerDiscountUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\UpdateVariantDealerDiscountInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\QtVariantDealerDiscount|\Psr\Http\Message\ResponseInterface
     */
    public function updateVariantDealerDiscount(string $variantDealerDiscountId, Model\VariantDealerDiscountUpdate $discount, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\UpdateVariantDealerDiscount($variantDealerDiscountId, $discount), $fetch);
    }

    /**
     * This method required the **ReferenceData:Delete** permission to be associcated with your role.
     *
     * @param string $variantId           Variant ID
     * @param string $standardEquipmentId Standard Equipment ID
     * @param string $fetch               Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\DeleteVariantStandardEquipmentUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\DeleteVariantStandardEquipmentForbiddenException
     * @throws \CatchE\OpenApi2\Exception\DeleteVariantStandardEquipmentNotFoundException
     * @throws \CatchE\OpenApi2\Exception\DeleteVariantStandardEquipmentInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteVariantStandardEquipment(string $variantId, string $standardEquipmentId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\DeleteVariantStandardEquipment($variantId, $standardEquipmentId), $fetch);
    }

    /**
     * This method requires the **Suppliers:Get** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var string $name Optional supplier name.
     *
     * This field supports the wildcard % operator.
     *     @var string $supplier_code Optional supplier code.
     *
     * This field supports the wildcard % operator.
     *     @var array $supplier_type optional supplier type
     *     @var string $exclude_empty_name_flag Optional flag.
     * Set 'yes' to exclude suppliers with an empty name field
     *     @var array $status Optional status
     *     @var string $interface_type optional interface type
     *     @var int $page Optional page number
     *     @var int $page_size Optional page size
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetSuppliersUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetSuppliersForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetSuppliersNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetSuppliersNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetSuppliersConflictException
     * @throws \CatchE\OpenApi2\Exception\GetSuppliersInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\SuppliersGet|\Psr\Http\Message\ResponseInterface
     */
    public function getSuppliers(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetSuppliers($queryParameters), $fetch);
    }

    /**
     * This method requires the **Suppliers:Create** permission to be associated with your role.
     *
     * @param array $suppliers        JSON payload
     * @param array $headerParameters {
     *
     *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\CreateSuppliersUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\CreateSuppliersForbiddenException
     * @throws \CatchE\OpenApi2\Exception\CreateSuppliersNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\CreateSuppliersUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\CreateSuppliersUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\CreateSuppliersInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\SuppliersGet|\Psr\Http\Message\ResponseInterface
     */
    public function createSuppliers(array $suppliers, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\CreateSuppliers($suppliers, $headerParameters), $fetch);
    }

    /**
     * This method requires the **Suppliers:Get** permission to be associated with your role.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetSupplierUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetSupplierForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetSupplierNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetSupplierNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetSupplierInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\Supplier|\Psr\Http\Message\ResponseInterface
     */
    public function getSupplier(string $supplierId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetSupplier($supplierId), $fetch);
    }

    /**
     * This method requires the **Suppliers:Update** permission to be associated with your role.
     *
     * @param string                                $supplierId       Supplier Id
     * @param \CatchE\OpenApi2\Model\UpdateSupplier $supplier         JSON payload
     * @param array                                 $headerParameters {
     *
     *     @var string $Delegated-Locking-Session-Id (Optional) Locking responsibility will be delegated to the specified Session Id.
     *
     * This header enables the client to instruct the API to merely verify the presence of locks with the specified session id, but not attempt to obtain them itself. It requires the **DelegatedLocking** permission to be associated with your role.
     *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\UpdateSupplierUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\UpdateSupplierForbiddenException
     * @throws \CatchE\OpenApi2\Exception\UpdateSupplierNotFoundException
     * @throws \CatchE\OpenApi2\Exception\UpdateSupplierNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\UpdateSupplierUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\UpdateSupplierUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\UpdateSupplierInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function updateSupplier(string $supplierId, Model\UpdateSupplier $supplier, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\UpdateSupplier($supplierId, $supplier, $headerParameters), $fetch);
    }

    /**
     * This method requires the **Suppliers:Get** permission to be associated with your role.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetSupplierPaymentDetailsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetSupplierPaymentDetailsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetSupplierPaymentDetailsNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetSupplierPaymentDetailsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetSupplierPaymentDetailsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\FmSuppliersSupplierIdPaymentDetailsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getSupplierPaymentDetails(string $supplierId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetSupplierPaymentDetails($supplierId), $fetch);
    }

    /**
     * This method requires the **SupplierPaymentTerms:Get** permission to be associated with your role.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetSupplierPaymentTermUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetSupplierPaymentTermForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetSupplierPaymentTermNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetSupplierPaymentTermNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetSupplierPaymentTermInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\SupplierPaymentTerm|\Psr\Http\Message\ResponseInterface
     */
    public function getSupplierPaymentTerm(string $supplierPaymentTermId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetSupplierPaymentTerm($supplierPaymentTermId), $fetch);
    }

    /**
     * This method requires the **SupplierPaymentTerms:Get** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var array $status_flag
     *     @var int $page Optional page number
     *     @var int $page_size Optional page size
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetSupplierPaymentTermsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetSupplierPaymentTermsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetSupplierPaymentTermsNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetSupplierPaymentTermsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetSupplierPaymentTermsConflictException
     * @throws \CatchE\OpenApi2\Exception\GetSupplierPaymentTermsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\SupplierPaymentTermsGet|\Psr\Http\Message\ResponseInterface
     */
    public function getSupplierPaymentTerms(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetSupplierPaymentTerms($queryParameters), $fetch);
    }

    /**
     * This method requires the **UniqueIds:Get** permission to be associated with your role.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetUniqueIdUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetUniqueIdForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetUniqueIdNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetUniqueIdNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetUniqueIdInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\GbUniqueIdsTableNameGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getUniqueId(string $tableName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetUniqueId($tableName), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\ResetUniqueIdsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\ResetUniqueIdsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\ResetUniqueIdsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\ResetUniqueIdsUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\ResetUniqueIdsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\GbUniqueIdsResetPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function resetUniqueIds(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\ResetUniqueIds(), $fetch);
    }

    /**
     * This method requires the **Users:Get** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var string $role Role description
     *     @var string $channel_code Channel code
     *     @var float $page Optional page number
     *     @var float $page_size Optional page size
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetValidUsersUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetValidUsersForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetValidUsersInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\ValidUsersGet|\Psr\Http\Message\ResponseInterface
     */
    public function getValidUsers(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetValidUsers($queryParameters), $fetch);
    }

    /**
     * **Create a Quote.**.
     *
     * This method requires the **WebServices** permission to be associated with your role.
     *
     * This API invokes the legacy createQuote web service. ***Note, this endpoint will be deprecated once a full service replacement has been developed.***
     *
     * Generates a lease quote.
     *
     * A collection of parameters (listed below) are passed into the parameters. These are used to construct a lease quotation.
     *
     * - The Opportunity ID and Number are optional, and are stored on the quote
     * - A code identifying an existing Catch-e client must be included
     * - Alpha numeric unique driver identifier is required, and a new driver record will be created if a driver bearing the identifier doesn't already exist
     * - Driver details can be updated when creating a new quote, see fields with the prefix 'driver_'
     * - When creating a second quote, pass in the parent_quote_id to link the two quotes together
     * - An optional contract type can be passed in to be used in place of the default
     * - The list price may be overridden using the list_price_gross field, or the list_price_net and list_price_gst fields
     *
     * If a problem occurs a Catch-e error code (listed below) will be returned with the results. If successfully created, the quote PDF can be extracted using the quote download web service.
     *
     * The driver_surname field is required when creating a new driver record. To force the reading of this value or any other driver fields from the opportunity account, pass through the value 'encrypted'.
     *
     **Audit History**
     *
     * Audit history is created when using this web service. The history is attributed to the user_id passed in the parameter 'user_id_client_manager'.
     *
     * @param \CatchE\OpenApi2\Model\CreateQuoteWebService $quote JSON payload
     * @param string                                       $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\CreateQuoteWebServiceUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\CreateQuoteWebServiceForbiddenException
     * @throws \CatchE\OpenApi2\Exception\CreateQuoteWebServiceIAmATeapotException
     * @throws \CatchE\OpenApi2\Exception\CreateQuoteWebServiceUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\CreateQuoteWebServiceLockedException
     * @throws \CatchE\OpenApi2\Exception\CreateQuoteWebServiceInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\CreateQuoteWebServiceSuccess|\Psr\Http\Message\ResponseInterface
     */
    public function createQuoteWebService(Model\CreateQuoteWebService $quote, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\CreateQuoteWebService($quote), $fetch);
    }

    /**
     * Get a Quick Quote.
     *
     * This method requires the **WebServices** permission to be associated with your role.
     *
     * This API invokes the legacy qq::lease::getQuote web service. ***Note, this endpoint will be deprecated once a full service replacement has been developed.***
     *
     * This service returns quote template placeholders for a quick quote.
     *
     * @param array $queryParameters {
     *
     *     @var string $variant_id Variant Id
     *     @var string $variant_code Variant Code
     *     @var float $approximate_price Approximate Price
     *     @var float $approximate_on_road_price Approximate On Road Price
     *     @var string $state_registered State Registered
     *     @var float $annual_kilometres Annual Kilometres
     *     @var int $lease_period Lease Period
     *     @var float $annual_salary Annual Salary
     *     @var string $postcode Postcode
     *     @var string $roadside_assistance_plan_code Roadside Assistance Plan Code
     *     @var float $monthly_finance_gross Monthly Finance Gross
     *     @var string $client_code Client Code
     *     @var string $pay_cycle_code Pay Cycle Code
     *     @var string $data_source Data Source
     *     @var string $new_used New / Used
     *     @var float $odometer Odometer
     *     @var string $contract_type Contract Type
     *     @var string $fbt_benefit_type FBT Benefit Type
     *     @var float $fbt_business_use Bus Use% for the quote
     *     @var string $maintenance_service_flag Maintenance Service Flag
     *     @var string $insurance_flag Insurance Flag
     *     @var string $reg_ctp_flag Reg Ctp Flag
     *     @var string $tyres_flag Tyres Flag
     *     @var string $fuel_flag Fuel Flag
     *     @var string $optional_equipment_deselect_flag Optional Equipment Deselect Flag
     *     @var float $dealer_delivery_net Dealer Delivery (Net)
     *     @var array $fields Define fields required. If no fields are specified then all fields are returned.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetQuickQuoteWebServiceUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetQuickQuoteWebServiceForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetQuickQuoteWebServiceIAmATeapotException
     * @throws \CatchE\OpenApi2\Exception\GetQuickQuoteWebServiceUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\GetQuickQuoteWebServiceLockedException
     * @throws \CatchE\OpenApi2\Exception\GetQuickQuoteWebServiceInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getQuickQuoteWebService(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetQuickQuoteWebService($queryParameters), $fetch);
    }

    /**
     * Get a Quote.
     *
     * This method requires the **WebServices** permission to be associated with your role.
     *
     * This API invokes the legacy getQuote web service. ***Note, this endpoint will be deprecated once a full service replacement has been developed.***
     *
     * This service returns quote template placeholders for a saved quote.
     *
     * @param array $queryParameters {
     *
     *     @var string $quote_id Quote Id
     *     @var array $fields Define fields required. If no fields are specified then all fields are returned.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetQuoteFieldsWebServiceUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetQuoteFieldsWebServiceForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetQuoteFieldsWebServiceIAmATeapotException
     * @throws \CatchE\OpenApi2\Exception\GetQuoteFieldsWebServiceUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\GetQuoteFieldsWebServiceLockedException
     * @throws \CatchE\OpenApi2\Exception\GetQuoteFieldsWebServiceInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getQuoteFieldsWebService(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetQuoteFieldsWebService($queryParameters), $fetch);
    }

    /**
     * Get a Quote PDF.
     *
     * This method requires the **WebServices** permission to be associated with your role.
     *
     * This API invokes the legacy getQuote web service. ***Note, this endpoint will be deprecated once a full service replacement has been developed.***
     *
     * This service returns the PDF for a saved quote.
     *
     * @param array $queryParameters {
     *
     *     @var string $quote_id Quote Id
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\GetQuotePdfWebServiceUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetQuotePdfWebServiceForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetQuotePdfWebServiceIAmATeapotException
     * @throws \CatchE\OpenApi2\Exception\GetQuotePdfWebServiceUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\GetQuotePdfWebServiceLockedException
     * @throws \CatchE\OpenApi2\Exception\GetQuotePdfWebServiceInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getQuotePdfWebService(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CatchE\OpenApi2\Endpoint\GetQuotePdfWebService($queryParameters), $fetch);
    }

    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('https://api.catch-e.com/');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \CatchE\OpenApi2\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);

        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}
