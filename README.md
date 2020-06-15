# Reason behind this fork

`ClockProvider::$EPOCH` was 1293840000 in the origin library, it has been changed to 0 to make it compatible with Python library version 1.0

No other changes have been implemented in this fork, next is the original README.md content.

# itsdangerous-php

[![Join the chat at https://gitter.im/mattbasta/itsdangerous-php](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/mattbasta/itsdangerous-php?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

A PHP port of itsdangerous by @mitsuhiko

## Differences from itsdangerous

1. `Signer` arguments cannot be specified in the constructor of a `Serializer`.
2. JWS classes are not implemented.
3. URL-safe classes are not implemented.
