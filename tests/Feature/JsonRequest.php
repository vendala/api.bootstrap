<?php

namespace Tests\Feature;

use Illuminate\Http\Response;

/**
 * Trait JsonRequest.
 *
 * @package Tests\Feature
 */
trait JsonRequest
{

    /**
     * Call the given URI with a JSON request.
     *
     * @param  string  $method
     * @param  string  $uri
     * @param  array  $data
     * @param  array  $headers
     * @return \Illuminate\Http\Response
     */
    public function json($method, $uri, array $data = [], array $headers = []): Response
    {
        $content = json_encode($data);

        return $this->call(
            $method, $uri, [], [], [], $this->transformHeadersToServerVars($this->getDefaultHeaders($content, $headers)), $content
        );
    }

    /**
     * @param string $data
     * @param array $headers
     *
     * @return array
     */
    private function getDefaultHeaders(string $data, array $headers): array
    {
        $api = config('api');

        $accept = sprintf('application/%s.%s.%s+json', $api['standardsTree'], $api['subtype'], $api['version']);

        return array_merge([
            'CONTENT_LENGTH' => mb_strlen($data, '8bit'),
            'CONTENT_TYPE' => 'application/json',
            'ACCEPT' => $accept
        ], $headers);
    }
}
