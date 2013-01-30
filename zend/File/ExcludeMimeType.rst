.. Validator/File/ExcludeMimeType.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Validator\\File\\ExcludeMimeType
======================================

Validator for the mime type of a file

Methods
-------

isValid
+++++++

.. function:: isValid()


    Returns true if the mimetype of the file does not matche the given ones. Also parts
    of mimetypes can be checked. If you give for example "image" all image
    mime types will not be accepted like "image/gif", "image/jpeg" and so on.

    :param string|array: Real file to check for mimetype

    :rtype: bool 





Constants
---------

FALSE_TYPE
++++++++++

NOT_DETECTED
++++++++++++

NOT_READABLE
++++++++++++

