.. Mail/Transport/File.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Mail\\Transport\\File
===========================

File transport

Class for saving outgoing emails in filesystem

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param null|FileOptions: OPTIONAL (Default: null)



setOptions
++++++++++

.. function:: setOptions()


    Sets options

    :param FileOptions: 



send
++++

.. function:: send()


    Saves e-mail message to a file

    :param Message: 

    :throws Exception\RuntimeException: on not writable target directory or
on file_put_contents() failure



getLastFile
+++++++++++

.. function:: getLastFile()


    Get the name of the last file written to

    :rtype: string 



