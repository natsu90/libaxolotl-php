<?php
namespace Libaxolotl\ratchet;

use Libaxolotl\IdentityKey;
use Libaxolotl\IdentityKeyPair;
use Libaxolotl\ecc\ECKeyPair;
use Libaxolotl\ecc\ECPublicKey;

class AliceAxolotlParameters
{
    protected $ourIdentityKey;    // IdentityKeyPair
    protected $ourBaseKey;    // ECKeyPair
    protected $theirIdentityKey;    // IdentityKey
    protected $theirSignedPreKey;    // ECPublicKey
    protected $theirOneTimePreKey;    // Optional<ECPublicKey>
    protected $theirRatchetKey;    // ECPublicKey

    public function __construct($ourIdentityKey, $ourBaseKey, $theirIdentityKey, $theirSignedPreKey, $theirRatchetKey, $theirOneTimePreKey) // [IdentityKeyPair ourIdentityKey, ECKeyPair ourBaseKey, IdentityKey theirIdentityKey, ECPublicKey theirSignedPreKey, ECPublicKey theirRatchetKey, Optional<ECPublicKey> theirOneTimePreKey]
    {
        $this->ourIdentityKey = $ourIdentityKey;
        $this->ourBaseKey = $ourBaseKey;
        $this->theirIdentityKey = $theirIdentityKey;
        $this->theirSignedPreKey = $theirSignedPreKey;
        $this->theirRatchetKey = $theirRatchetKey;
        $this->theirOneTimePreKey = $theirOneTimePreKey;
        if (($ourIdentityKey == null) || ($ourBaseKey == null)
            || ($theirIdentityKey == null) || ($theirSignedPreKey == null) || ($theirRatchetKey == null)) {
            throw new Exception('Null values!');
        }
    }

    public function getOurIdentityKey()
    {
        return $this->ourIdentityKey;
    }

    public function getOurBaseKey()
    {
        return $this->ourBaseKey;
    }

    public function getTheirIdentityKey()
    {
        return $this->theirIdentityKey;
    }

    public function getTheirSignedPreKey()
    {
        return $this->theirSignedPreKey;
    }

    public function getTheirOneTimePreKey()
    {
        return $this->theirOneTimePreKey;
    }

    public static function newBuilder()
    {
        return new AliceBuilder();
    }

    public function getTheirRatchetKey()
    {
        return $this->theirRatchetKey;
    }
}
