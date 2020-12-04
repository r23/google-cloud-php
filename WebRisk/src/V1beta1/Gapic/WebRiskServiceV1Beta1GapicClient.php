<?php
/*
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was generated from the file
 * https://github.com/google/googleapis/blob/master/google/cloud/webrisk/v1beta1/webrisk.proto
 * and updates to that file get reflected here through a refresh process.
 *
 * @experimental
 */

namespace Google\Cloud\WebRisk\V1beta1\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\WebRisk\V1beta1\ComputeThreatListDiffRequest;
use Google\Cloud\WebRisk\V1beta1\ComputeThreatListDiffRequest\Constraints;
use Google\Cloud\WebRisk\V1beta1\ComputeThreatListDiffResponse;
use Google\Cloud\WebRisk\V1beta1\SearchHashesRequest;
use Google\Cloud\WebRisk\V1beta1\SearchHashesResponse;
use Google\Cloud\WebRisk\V1beta1\SearchUrisRequest;
use Google\Cloud\WebRisk\V1beta1\SearchUrisResponse;
use Google\Cloud\WebRisk\V1beta1\ThreatType;

/**
 * Service Description: Web Risk v1beta1 API defines an interface to detect malicious URLs on your
 * website and in client applications.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $webRiskServiceV1Beta1Client = new Google\Cloud\WebRisk\V1beta1\WebRiskServiceV1Beta1Client();
 * try {
 *     $threatType = Google\Cloud\WebRisk\V1beta1\ThreatType::THREAT_TYPE_UNSPECIFIED;
 *     $constraints = new Google\Cloud\WebRisk\V1beta1\ComputeThreatListDiffRequest\Constraints();
 *     $response = $webRiskServiceV1Beta1Client->computeThreatListDiff($threatType, $constraints);
 * } finally {
 *     $webRiskServiceV1Beta1Client->close();
 * }
 * ```
 *
 * @experimental
 */
class WebRiskServiceV1Beta1GapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.cloud.webrisk.v1beta1.WebRiskServiceV1Beta1';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'webrisk.googleapis.com';

    /**
     * The default port of the service.
     */
    const DEFAULT_SERVICE_PORT = 443;

    /**
     * The name of the code generator, to be included in the agent header.
     */
    const CODEGEN_NAME = 'gapic';

    /**
     * The default scopes required by the service.
     */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
    ];

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS.':'.self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__.'/../resources/web_risk_service_v1_beta1_client_config.json',
            'descriptorsConfigPath' => __DIR__.'/../resources/web_risk_service_v1_beta1_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__.'/../resources/web_risk_service_v1_beta1_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__.'/../resources/web_risk_service_v1_beta1_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *                       Optional. Options for configuring the service API wrapper.
     *
     *     @type string $serviceAddress
     *           **Deprecated**. This option will be removed in a future major release. Please
     *           utilize the `$apiEndpoint` option instead.
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'webrisk.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the client.
     *           For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()}.
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either a
     *           path to a JSON file, or a PHP array containing the decoded JSON data.
     *           By default this settings points to the default client config file, which is provided
     *           in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string `rest`
     *           or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already instantiated
     *           {@see \Google\ApiCore\Transport\TransportInterface} object. Note that when this
     *           object is provided, any settings in $transportConfig, and any `$apiEndpoint`
     *           setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...]
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     * }
     *
     * @throws ValidationException
     * @experimental
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
    }

    /**
     * Gets the most recent threat list diffs.
     *
     * Sample code:
     * ```
     * $webRiskServiceV1Beta1Client = new Google\Cloud\WebRisk\V1beta1\WebRiskServiceV1Beta1Client();
     * try {
     *     $threatType = Google\Cloud\WebRisk\V1beta1\ThreatType::THREAT_TYPE_UNSPECIFIED;
     *     $constraints = new Google\Cloud\WebRisk\V1beta1\ComputeThreatListDiffRequest\Constraints();
     *     $response = $webRiskServiceV1Beta1Client->computeThreatListDiff($threatType, $constraints);
     * } finally {
     *     $webRiskServiceV1Beta1Client->close();
     * }
     * ```
     *
     * @param int         $threatType   The ThreatList to update.
     *                                  For allowed values, use constants defined on {@see \Google\Cloud\WebRisk\V1beta1\ThreatType}
     * @param Constraints $constraints  Required. The constraints associated with this request.
     * @param array       $optionalArgs {
     *                                  Optional.
     *
     *     @type string $versionToken
     *          The current version token of the client for the requested list (the
     *          client version that was received from the last successful diff).
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\WebRisk\V1beta1\ComputeThreatListDiffResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function computeThreatListDiff($threatType, $constraints, array $optionalArgs = [])
    {
        $request = new ComputeThreatListDiffRequest();
        $request->setThreatType($threatType);
        $request->setConstraints($constraints);
        if (isset($optionalArgs['versionToken'])) {
            $request->setVersionToken($optionalArgs['versionToken']);
        }

        return $this->startCall(
            'ComputeThreatListDiff',
            ComputeThreatListDiffResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * This method is used to check whether a URI is on a given threatList.
     *
     * Sample code:
     * ```
     * $webRiskServiceV1Beta1Client = new Google\Cloud\WebRisk\V1beta1\WebRiskServiceV1Beta1Client();
     * try {
     *     $uri = '';
     *     $threatTypes = [];
     *     $response = $webRiskServiceV1Beta1Client->searchUris($uri, $threatTypes);
     * } finally {
     *     $webRiskServiceV1Beta1Client->close();
     * }
     * ```
     *
     * @param string $uri          Required. The URI to be checked for matches.
     * @param int[]  $threatTypes  Required. The ThreatLists to search in.
     *                             For allowed values, use constants defined on {@see \Google\Cloud\WebRisk\V1beta1\ThreatType}
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\WebRisk\V1beta1\SearchUrisResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function searchUris($uri, $threatTypes, array $optionalArgs = [])
    {
        $request = new SearchUrisRequest();
        $request->setUri($uri);
        $request->setThreatTypes($threatTypes);

        return $this->startCall(
            'SearchUris',
            SearchUrisResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Gets the full hashes that match the requested hash prefix.
     * This is used after a hash prefix is looked up in a threatList
     * and there is a match. The client side threatList only holds partial hashes
     * so the client must query this method to determine if there is a full
     * hash match of a threat.
     *
     * Sample code:
     * ```
     * $webRiskServiceV1Beta1Client = new Google\Cloud\WebRisk\V1beta1\WebRiskServiceV1Beta1Client();
     * try {
     *     $threatTypes = [];
     *     $response = $webRiskServiceV1Beta1Client->searchHashes($threatTypes);
     * } finally {
     *     $webRiskServiceV1Beta1Client->close();
     * }
     * ```
     *
     * @param int[] $threatTypes  Required. The ThreatLists to search in.
     *                            For allowed values, use constants defined on {@see \Google\Cloud\WebRisk\V1beta1\ThreatType}
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $hashPrefix
     *          A hash prefix, consisting of the most significant 4-32 bytes of a SHA256
     *          hash. For JSON requests, this field is base64-encoded.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\WebRisk\V1beta1\SearchHashesResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function searchHashes($threatTypes, array $optionalArgs = [])
    {
        $request = new SearchHashesRequest();
        $request->setThreatTypes($threatTypes);
        if (isset($optionalArgs['hashPrefix'])) {
            $request->setHashPrefix($optionalArgs['hashPrefix']);
        }

        return $this->startCall(
            'SearchHashes',
            SearchHashesResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }
}
