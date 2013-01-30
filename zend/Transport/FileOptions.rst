.. Mail/Transport/FileOptions.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Mail\\Transport\\FileOptions
==================================

Methods
-------

setPath
+++++++

.. function:: setPath()


    Set path to stored mail files

    :param string: 

    :throws \Zend\Mail\Exception\InvalidArgumentException: 

    :rtype: FileOptions 



getPath
+++++++

.. function:: getPath()


    Get path
    
    If none is set, uses value from sys_get_temp_dir()

    :rtype: string 



setCallback
+++++++++++

.. function:: setCallback()


    Set callback used to generate a file name

    :param callable: 

    :throws \Zend\Mail\Exception\InvalidArgumentException: 

    :rtype: FileOptions 



getCallback
+++++++++++

.. function:: getCallback()


    Get callback used to generate a file name

    :rtype: callable 



