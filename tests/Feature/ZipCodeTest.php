<?php

namespace Tests\Feature;
use Tests\TestCase;

class ZipCodeTest extends TestCase {
    public function test_zip_code_api_call_return_a_json(): void {
        $code = 44700;
        $response = $this->get('/api/zip-codes/'.$code);

        $response->assertJsonStructure([
			'zip_code',
			'locality',
			'federal_entity' => [],
			'settlements' => [],
			'municipality' => [],
        ]);

        $response->assertStatus(200);
    }
}
