<?php

// src/Service/TestService.php

namespace BBrands\TestBundle\Service;

class TestService
{

    /*
     * Returns a welcoming string
     * 
     * @return array 
     */
    public function test(array $data, array $configuration): array
    {
        return ['response' => 'Hello. Your TestBundle works'];
    }
}
