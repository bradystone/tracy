<?php

/**
 * Test: Tracy\Debugger::enable() error.
 * @exitCode   254
 * @httpCode   500
 * @outputMatch %A%<title>RuntimeException</title><!-- Log directory is not found or is not directory. -->%A%
 */

use Tracy\Debugger;


require __DIR__ . '/../bootstrap.php';

if (PHP_SAPI === 'cli') {
	Tester\Environment::skip('HTML is not rendered in CLI mode');
}

Debugger::enable(Debugger::DEVELOPMENT, 'relative');
