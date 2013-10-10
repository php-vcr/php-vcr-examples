<?php

require_once __DIR__ . '/../../vendor/autoload.php';

\VCR\VCR::configure()
  ->setCassettePath('test/fixtures')
  ->enableLibraryHooks(array('soap'))
  ->setWhitelist(['vendor/guzzle', 'vendor/willdurand', 'vendor/ruflin'])
  ->setBlacklist(['vendor/adri/']);



// soap, curl
\VCR\LibraryHooks\Wrapper::interceptIncludes(
    whitelist: ['vendor/guzzle', 'vendor/willdurand', 'vendor/ruflin'],
    blacklist: ['vendor/adri/']
);

