<?php
/*
 * MagicTelecomAPILib
 *
 * This file was automatically generated by APIMATIC BETA v2.0 on 02/05/2016
 */

namespace MagicTelecomAPILib\Controllers;

use MagicTelecomAPILib\APIException;
use MagicTelecomAPILib\APIHelper;
use MagicTelecomAPILib\Configuration;
use MagicTelecomAPILib\CustomAuthUtility;
use Unirest\Unirest;
class DidsProductsController {
    /**
     * Allow clients to get the list of available phone_numbers
     * @param  int|null        $page       Optional parameter: Zero based offset index for the results. e.g. 0 would start at the first result and 10 would start at the eleventh result
     * @param  int|null        $limit      Optional parameter: Maximum number of results to return in the response
     * @param  string|null     $filter     Optional parameter: Allowed fields: country_iso2, region_handle, location_handle, location_name, phone_number, phone_number_type, zip_code
     * @return mixed response from the API call*/
    public function getProducts (
                $page = NULL,
                $limit = NULL,
                $filter = NULL) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/dids/products/dids';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($queryBuilder, array (
            'page'   => (null != $page) ? $page : 1,
            'limit'  => (null != $limit) ? $limit : 10,
            'filter' => $filter,
        ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json'
        );

        //prepare API request
        $request = Unirest::get($queryUrl, $headers);

        //append custom auth authorization headers
        CustomAuthUtility::appendCustomAuthParams($request);

        //and invoke the API call request to fetch the response
        $response = Unirest::getResponse($request);

        //Error handling using HTTP status codes
        if ($response->code == 401) {
            throw new APIException('You are not authenticated', 401, $response->body);
        }

        else if ($response->code == 403) {
            throw new APIException('This action needs a valid WSSE header', 403, $response->body);
        }

        else if ($response->code == 404) {
            throw new APIException('Resource not found', 404, $response->body);
        }

        else if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        return $response->body;
    }
        
    /**
     * Allow clients to get a specific phone_number
     * @param  string     $phoneNumber      Required parameter: Phone Number
     * @return mixed response from the API call*/
    public function getProductByPhoneNumber (
                $phoneNumber) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/dids/products/dids/{phone_number}';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array (
            'phone_number' => $phoneNumber,
            ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json'
        );

        //prepare API request
        $request = Unirest::get($queryUrl, $headers);

        //append custom auth authorization headers
        CustomAuthUtility::appendCustomAuthParams($request);

        //and invoke the API call request to fetch the response
        $response = Unirest::getResponse($request);

        //Error handling using HTTP status codes
        if ($response->code == 401) {
            throw new APIException('You are not authenticated', 401, $response->body);
        }

        else if ($response->code == 403) {
            throw new APIException('This action needs a valid WSSE header', 403, $response->body);
        }

        else if ($response->code == 404) {
            throw new APIException('Resource not found', 404, $response->body);
        }

        else if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        return $response->body;
    }
        
    /**
     * Allow clients to get the list of available locations.
     * @param  int|null        $page       Optional parameter: Zero based offset index for the results. e.g. 0 would start at the first result and 10 would start at the eleventh result
     * @param  int|null        $limit      Optional parameter: Maximum number of results to return in the response
     * @param  string|null     $filter     Optional parameter: Allowed fields: country_iso2, region_handle, location_handle, location_name, prefix, phone_number_type, zip_code, npa, nxx, fax
     * @return mixed response from the API call*/
    public function getLocations (
                $page = NULL,
                $limit = NULL,
                $filter = NULL) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/dids/products/locations';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($queryBuilder, array (
            'page'   => (null != $page) ? $page : 1,
            'limit'  => (null != $limit) ? $limit : 10,
            'filter' => $filter,
        ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json'
        );

        //prepare API request
        $request = Unirest::get($queryUrl, $headers);

        //append custom auth authorization headers
        CustomAuthUtility::appendCustomAuthParams($request);

        //and invoke the API call request to fetch the response
        $response = Unirest::getResponse($request);

        //Error handling using HTTP status codes
        if ($response->code == 401) {
            throw new APIException('You are not authenticated', 401, $response->body);
        }

        else if ($response->code == 403) {
            throw new APIException('This action needs a valid WSSE header', 403, $response->body);
        }

        else if ($response->code == 404) {
            throw new APIException('Resource not found', 404, $response->body);
        }

        else if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        return $response->body;
    }
        
    /**
     * Allow clients to get a specific location.
     * @param  string     $locationHandle      Required parameter: Location Handle
     * @return mixed response from the API call*/
    public function getLocationByHandle (
                $locationHandle) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/dids/products/locations/{location_handle}';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array (
            'location_handle' => $locationHandle,
            ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json'
        );

        //prepare API request
        $request = Unirest::get($queryUrl, $headers);

        //append custom auth authorization headers
        CustomAuthUtility::appendCustomAuthParams($request);

        //and invoke the API call request to fetch the response
        $response = Unirest::getResponse($request);

        //Error handling using HTTP status codes
        if ($response->code == 401) {
            throw new APIException('You are not authenticated', 401, $response->body);
        }

        else if ($response->code == 403) {
            throw new APIException('This action needs a valid WSSE header', 403, $response->body);
        }

        else if ($response->code == 404) {
            throw new APIException('Resource not found', 404, $response->body);
        }

        else if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        return $response->body;
    }
        
    /**
     * Allow clients to get the list of available trunks
     * @param  int|null     $page      Optional parameter: Zero based offset index for the results. e.g. 0 would start at the first result and 10 would start at the eleventh result
     * @param  int|null     $limit     Optional parameter: Maximum number of results to return in the response
     * @return mixed response from the API call*/
    public function getAvailableTrunks (
                $page = NULL,
                $limit = NULL) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/dids/products/trunks';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($queryBuilder, array (
            'page'  => (null != $page) ? $page : 1,
            'limit' => (null != $limit) ? $limit : 10,
        ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json'
        );

        //prepare API request
        $request = Unirest::get($queryUrl, $headers);

        //append custom auth authorization headers
        CustomAuthUtility::appendCustomAuthParams($request);

        //and invoke the API call request to fetch the response
        $response = Unirest::getResponse($request);

        //Error handling using HTTP status codes
        if ($response->code == 401) {
            throw new APIException('You are not authenticated', 401, $response->body);
        }

        else if ($response->code == 403) {
            throw new APIException('This action needs a valid WSSE header', 403, $response->body);
        }

        else if ($response->code == 404) {
            throw new APIException('Resource not found', 404, $response->body);
        }

        else if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        return $response->body;
    }
        
    /**
     * Allow clients to get a specific trunk
     * @param  string     $trunkHandle      Required parameter: Trunk Handle
     * @return mixed response from the API call*/
    public function getTrunkByHandle (
                $trunkHandle) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/dids/products/trunks/{trunk_handle}';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array (
            'trunk_handle' => $trunkHandle,
            ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json'
        );

        //prepare API request
        $request = Unirest::get($queryUrl, $headers);

        //append custom auth authorization headers
        CustomAuthUtility::appendCustomAuthParams($request);

        //and invoke the API call request to fetch the response
        $response = Unirest::getResponse($request);

        //Error handling using HTTP status codes
        if ($response->code == 401) {
            throw new APIException('You are not authenticated', 401, $response->body);
        }

        else if ($response->code == 403) {
            throw new APIException('This action needs a valid WSSE header', 403, $response->body);
        }

        else if ($response->code == 404) {
            throw new APIException('Resource not found', 404, $response->body);
        }

        else if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        return $response->body;
    }
        
    /**
     * Allow clients to get trunk zones.
     * @param  string     $trunkHandle      Required parameter: Trunk Handle
     * @param  int        $page             Required parameter: Zero based offset index for the results. e.g. 0 would start at the first result and 10 would start at the eleventh result.
     * @param  int        $limit            Required parameter: Maximum number of results to return in the response.
     * @return mixed response from the API call*/
    public function getCountriesByTrunk (
                $trunkHandle,
                $page,
                $limit) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/dids/products/trunks/{trunk_handle}/countries';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array (
            'trunk_handle' => $trunkHandle,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($queryBuilder, array (
            'page'         => $page,
            'limit'        => $limit,
        ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json'
        );

        //prepare API request
        $request = Unirest::get($queryUrl, $headers);

        //append custom auth authorization headers
        CustomAuthUtility::appendCustomAuthParams($request);

        //and invoke the API call request to fetch the response
        $response = Unirest::getResponse($request);

        //Error handling using HTTP status codes
        if ($response->code == 401) {
            throw new APIException('You are not authenticated', 401, $response->body);
        }

        else if ($response->code == 403) {
            throw new APIException('This action needs a valid WSSE header', 403, $response->body);
        }

        else if ($response->code == 404) {
            throw new APIException('Resource not found', 404, $response->body);
        }

        else if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        return $response->body;
    }
        
}