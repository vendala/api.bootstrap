<?php

namespace Tests\Feature;

use Tests\TestCase;

/**
 * Class FeatureTestCase.
 *
 * @package Tests\Feature
 */
abstract class FeatureTestCase extends TestCase
{
    /**
     * @const string
     */
    protected const GET = 'GET';

    /**
     * Call the given URI with a JSON request.
     *
     * @param  string  $method
     * @param  string  $uri
     * @param  array  $data
     * @param  array  $headers
     *
     * @return \Illuminate\Http\Response
     */
    public function json($method, $uri, array $data = [], array $headers = [])
    {
        $content = json_encode($data);
        $accept = sprintf('application/%s.%s.%s+json', config('api.standardsTree'), config('api.subtype'), config('api.version'));

        $headers = array_merge([
            'CONTENT_LENGTH' => mb_strlen($content, '8bit'),
            'CONTENT_TYPE' => 'application/json',
            'ACCEPT' => $accept,
        ], $headers);

        return $this->call(
            $method, $uri, [], [], [], $this->transformHeadersToServerVars($headers), $content
        );
    }
}
