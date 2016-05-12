<?php
namespace Libaxolotl\ratchet;

class AliceBuilder
{
    protected $ourIdentityKey;
    protected $ourBaseKey;
    protected $theirIdentityKey;
    protected $theirSignedPreKey;
    protected $theirRatchetKey;
    protected $theirOneTimePreKey;

    public function AliceBuilder()
    {
        $this->ourIdentityKey = null;
        $this->ourBaseKey = null;
        $this->theirIdentityKey = null;
        $this->theirSignedPreKey = null;
        $this->theirRatchetKey = null;
        $this->theirOneTimePreKey = null;
    }

    public function setOurIdentityKey($ourIdentityKey)
    {
        $this->ourIdentityKey = $ourIdentityKey;

        return $this;
    }

    public function setOurBaseKey($ourBaseKey)
    {
        $this->ourBaseKey = $ourBaseKey;

        return $this;
    }

    public function setTheirRatchetKey($theirRatchetKey)
    {
        $this->theirRatchetKey = $theirRatchetKey;

        return $this;
    }

    public function setTheirIdentityKey($theirIdentityKey)
    {
        $this->theirIdentityKey = $theirIdentityKey;

        return $this;
    }

    public function setTheirSignedPreKey($theirSignedPreKey)
    {
        $this->theirSignedPreKey = $theirSignedPreKey;

        return $this;
    }

    public function setTheirOneTimePreKey($theirOneTimePreKey)
    {
        $this->theirOneTimePreKey = $theirOneTimePreKey;

        return $this;
    }

    public function create()
    {
        return new AliceAxolotlParameters($this->ourIdentityKey, $this->ourBaseKey, $this->theirIdentityKey,
                                      $this->theirSignedPreKey, $this->theirRatchetKey, $this->theirOneTimePreKey);
    }
}
