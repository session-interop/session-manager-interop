<?php
namespace Interop\Session\Manager;

interface SessionManagerInterface {
  /**
  *  Should clear the session (remove everything in the session) and register this purge.
  **/
  public function clear(): void;
  /**
  ** Should ensure that $_SESSION is available and the session is started
  **/
  public function ensureSessionHasStart(): void;
  /**
  * Should ensure that $_SESSION will be registred.
  **/
  public function ensureCommit(): void;
  /**
  * Should detect if $_SESSION is available and started.
  **/
  public function isSessionActive(): bool;
  /**
  * Should close without saving the session
  **/
  public function close(): void;
}
