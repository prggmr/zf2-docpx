.. /Crypt/Symmetric/Padding/Pkcs7.php generated using docpx on 01/15/13 05:29pm


Zend\\Crypt\\Symmetric\\Padding\\Pkcs7
**************************************


PKCS#7 padding



Methods
=======

pad
---

.. function:: pad($string, [$blockSize = 32])


    Pad the string to the specified size

    :param string $string: The string to pad
    :param int $blockSize: The size to pad to

    :rtype: string The padded string



strip
-----

.. function:: strip($string)


    Strip the padding from the supplied string

    :param string $string: The string to trim

    :rtype: string The unpadded string





