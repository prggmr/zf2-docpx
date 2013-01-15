.. /Authentication/Adapter/Http/ResolverInterface.php generated using docpx on 01/15/13 05:29pm


Zend\\Authentication\\Adapter\\Http\\resolve
============================================

.. function:: Zend\Authentication\Adapter\Http\resolve()


    Resolve username/realm to password/hash/etc.

    :param string $username: Username
    :param string $realm: Authentication Realm
    :param string $password: Password (optional)

    :rtype: string|array|false User's shared secret as string if found in realm, or User's identity as array
        if resolved, false otherwise.



