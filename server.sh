#!/usr/bin/env bash

ulimit -n 10000 && php -dmemory_limit=-1 ratchet.php