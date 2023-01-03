<?php

declare(strict_types=1);

namespace Encryption\Cipher\RC4;

use Encryption\Cipher\ACipherNoInitializationVector;
use Encryption\Traits\DecryptNoIV;
use Encryption\Traits\EncryptWithPaddingNoIV;

/**
 * Class Rc4
 * @package Encryption\Cipher\RC4
 * @since 1.0.3
 */
final class Rc4 extends ACipherNoInitializationVector
{
    use DecryptNoIV;
    use EncryptWithPaddingNoIV;

    public const BLOCK_SIZE = 8;
    public const IV_LENGTH = 0;
    public const CIPHER = 'RC4';
}