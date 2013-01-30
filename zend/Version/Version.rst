.. Version/Version.php generated using docpx on 01/30/13 03:32am


Zend\\Version\\Version
======================

Class to store and retrieve the version of Zend Framework.

Methods
+++++++

compareVersion
--------------

.. function:: compareVersion()


    Compare the specified Zend Framework version string $version
    with the current Zend_Version::VERSION of Zend Framework.

    :param string: A version string (e.g. "0.7.1").

    :rtype: int -1 if the $version is older,
                          0 if they are the same,
                          and +1 if $version is newer.



getLatest
---------

.. function:: getLatest()


    Fetches the version of the latest stable release.
    
    By Default, this uses the GitHub API (v3) and only returns refs that begin with
    'tags/release-'. Because GitHub returns the refs in alphabetical order,
    we need to reduce the array to a single value, comparing the version
    numbers with version_compare().
    
    If $service is set to VERSION_SERVICE_ZEND this will fall back to calling the
    classic style of version retreival.



    :param string: Version Service with which to retrieve the version

    :rtype: string 



isLatest
--------

.. function:: isLatest()


    Returns true if the running version of Zend Framework is
    the latest (or newer??) than the latest tag on GitHub,
    which is returned by static::getLatest().

    :rtype: bool 





Constants
+++++++++

VERSION
=======

Zend Framework version identification - see compareVersion()

VERSION_SERVICE_GITHUB
======================

Github Service Identifier for version information is retreived from

VERSION_SERVICE_ZEND
====================

Zend (framework.zend.com) Service Identifier for version information is retreived from

