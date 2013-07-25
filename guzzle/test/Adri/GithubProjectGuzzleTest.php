<?php

namespace Adri;

use Guzzle\Http\Client;
use Guzzle\Http\Exception\ClientErrorResponseException;
/**
* Tests Guzzle class.
*/
class GithubProjectGuzzleTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @vcr github_adri_php-vcr.yml
     */
    public function testGithubInfoForExistingProject()
    {
        $githubProject = new GithubProjectGuzzle('adri/php-vcr');
        $info = $githubProject ->getInfo();

        $this->assertTrue(is_array($info), 'Response is not an array.');
        $this->assertArrayHasKey('full_name', $info, "Key 'full_name' not found.");
        $this->assertEquals('adri/php-vcr', $info['full_name'], "Value for key 'full_name' wrong.");
        $this->assertArrayHasKey('private', $info, "Key 'private' not found.");
        $this->assertFalse($info['private'], "Key 'private' is not false.");
    }

    /**
     * @vcr github_adri_php-vcr.yml
     */
    public function testGithubInfoForNonExistingProject()
    {
        $githubProject = new GithubProjectGuzzle('adri/random_stuff');
        $info = $githubProject ->getInfo();

        $this->assertNull($info, 'Response is not null.');
    }
}
