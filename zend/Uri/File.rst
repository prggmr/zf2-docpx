.. Uri/File.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Uri\\File
===============

File URI handler

The 'file:...' scheme is loosely defined in RFC-1738

Methods
-------

isValid
+++++++

.. function:: isValid()


    Check if the URI is a valid File URI
    
    This applies additional specific validation rules beyond the ones
    required by the generic URI syntax.

    :rtype: bool 

    :see:  



setUserInfo
+++++++++++

.. function:: setUserInfo()


    User Info part is not used in file URIs


    :param string: 

    :rtype: File 



setFragment
+++++++++++

.. function:: setFragment()


    Fragment part is not used in file URIs


    :param string: 

    :rtype: File 



fromUnixPath
++++++++++++

.. function:: fromUnixPath()


    Convert a UNIX file path to a valid file:// URL

    :param string: 

    :rtype: File 



fromWindowsPath
+++++++++++++++

.. function:: fromWindowsPath()


    Convert a Windows file path to a valid file:// URL

    :param string: 

    :rtype: File 



