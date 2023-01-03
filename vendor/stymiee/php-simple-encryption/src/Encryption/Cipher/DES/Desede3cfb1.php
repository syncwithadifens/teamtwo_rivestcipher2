<?php

declare(strict_types=1);

namespace Encryption\Cipher\DES;

use Encryption\Cipher\ACipherWithInitializationVector;
use Encryption\Traits\Decrypt;
use Encryption\Traits\EncryptWithPadding;

/**
 * Class Desede3cfb1
 * @package Encryption\Cipher\DES
 */
final class Desede3cfb1 extends ACipherWithInitializationVector
{
    use Decrypt;
    use EncryptWithPadding;

    public const BLOCK_SIZE = 8;
    public const IV_LENGTH = 8;
    public const CIPHER = 'DES-EDE3-CFB1';
}
