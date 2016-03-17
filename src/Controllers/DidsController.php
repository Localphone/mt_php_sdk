<?php
/*
 * MagicTelecomAPILib
 *
 * This file was automatically generated by APIMATIC BETA v2.0 on 03/17/2016
 */

namespace MagicTelecomAPILib\Controllers;

use MagicTelecomAPILib\APIException;
use MagicTelecomAPILib\APIHelper;
use MagicTelecomAPILib\Configuration;
use MagicTelecomAPILib\CustomAuthUtility;
use Unirest\Unirest;
class DidsController {
    /**
     * Allow clients to get the list of available countries
     * @param  int|null     $page      Optional parameter: Zero based offset index for the results. e.g. 0 would start at the first result and 10 would start at the eleventh result
     * @param  int|null     $limit     Optional parameter: Maximum number of results to return in the response
     * @return mixed response from the API call*/
    public function getCountries (
                $page = NULL,
                $limit = NULL) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/dids/location/countries';

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
     * Allow clients to get a specific country
     * @param  string     $countryIso2      Required parameter: Country ISO2
     * @return mixed response from the API call*/
    public function getCountryByIso2 (
                $countryIso2) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/dids/location/countries/{country_iso2}';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array (
            'country_iso2' => $countryIso2,
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
     * Allow clients to get the list of available regions per country
     * @param  string       $countryIso2      Required parameter: Country ISO2
     * @param  int|null     $page             Optional parameter: Zero based offset index for the results. e.g. 0 would start at the first result and 10 would start at the eleventh result
     * @param  int|null     $limit            Optional parameter: Maximum number of results to return in the response
     * @return mixed response from the API call*/
    public function getRegions (
                $countryIso2,
                $page = NULL,
                $limit = NULL) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/dids/location/countries/{country_iso2}/regions';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array (
            'country_iso2' => $countryIso2,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($queryBuilder, array (
            'page'         => (null != $page) ? $page : 1,
            'limit'        => (null != $limit) ? $limit : 10,
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
     * Allow clients to get a specific region for a specific country
     * @param  string     $countryIso2       Required parameter: Country ISO2
     * @param  string     $regionHandle      Required parameter: Region handle
     * @return mixed response from the API call*/
    public function getRegionsByHandle (
                $countryIso2,
                $regionHandle) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/dids/location/countries/{country_iso2}/regions/{region_handle}';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array (
            'country_iso2'  => $countryIso2,
            'region_handle' => $regionHandle,
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