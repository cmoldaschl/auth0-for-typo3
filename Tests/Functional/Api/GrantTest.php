<?php
declare(strict_types = 1);
namespace Bitmotion\Auth0\Tests\Functional\Api;

/***
 *
 * This file is part of the "Auth0 for TYPO3" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 Florian Wessels <f.wessels@bitmotion.de>, Bitmotion GmbH
 *
 ***/

use Bitmotion\Auth0\Api\Management\GrantApi;
use Bitmotion\Auth0\Scope;
use Bitmotion\Auth0\Tests\Functional\Auth0TestCase;

class GrantTest extends Auth0TestCase
{
    protected $scopes = [
        Scope::GRANT_READ,
        Scope::GRANT_DELETE,
    ];

    /**
     * @test
     * @covers \Bitmotion\Auth0\Utility\ApiUtility::getGrantApi
     */
    public function instantiateApi(): GrantApi
    {
        $grantApi = $this->getApiUtility()->getGrantApi(...$this->scopes);
        self::assertInstanceOf(GrantApi::class, $grantApi);

        return $grantApi;
    }

    // TODO: implement
}
