.. Mvc/Controller/Plugin/FilePostRedirectGet.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Mvc\\Controller\\Plugin\\FilePostRedirectGet
==================================================

Plugin to help facilitate Post/Redirect/Get for file upload forms
(http://en.wikipedia.org/wiki/Post/Redirect/Get)

Requires that the Form's File inputs contain a 'fileRenameUpload' filter
with the target option set: 'target' => /valid/target/path'.
This is so the files are moved to a new location between requests.
If this filter is not added, the temporary upload files will disappear
between requests.

Methods
-------

__invoke
++++++++

.. function:: __invoke()


    @param  FormInterface $form

    :param string: Route or URL string (default: current route)
    :param boolean: Use $redirect as a URL string (default: false)

    :rtype: boolean|array|Response 



handlePostRequest
+++++++++++++++++

.. function:: handlePostRequest()


    @param  FormInterface $form

    :param string: Route or URL string (default: current route)
    :param boolean: Use $redirect as a URL string (default: false)

    :rtype: Response 



handleGetRequest
++++++++++++++++

.. function:: handleGetRequest()


    @param  FormInterface $form

    :rtype: boolean|array 



getSessionContainer
+++++++++++++++++++

.. function:: getSessionContainer()


    @return Container



setSessionContainer
+++++++++++++++++++

.. function:: setSessionContainer()


    @param  Container $container

    :rtype: FilePostRedirectGet 



setProtectedFormProperty
++++++++++++++++++++++++

.. function:: setProtectedFormProperty()


    @param  FormInterface $form

    :param string: 
    :param mixed: 

    :rtype: FilePostRedirectGet 



traverseInputs
++++++++++++++

.. function:: traverseInputs()


    Traverse the InputFilter and run a callback against each Input and associated value

    :param InputFilterInterface: 
    :param array: 
    :param callable: 

    :rtype: array|null 



getNonEmptyUploadData
+++++++++++++++++++++

.. function:: getNonEmptyUploadData()


    Traverse the InputFilter and only return the data of FileInputs that have an upload

    :param InputFilterInterface: 
    :param array: 

    :rtype: array 



getEmptyUploadData
++++++++++++++++++

.. function:: getEmptyUploadData()


    Traverse the InputFilter and only return the data of FileInputs that are empty

    :param InputFilterInterface: 
    :param array: 

    :rtype: array 



redirect
++++++++

.. function:: redirect()


    TODO: Good candidate for traits method in PHP 5.4 with PostRedirectGet plugin

    :param string: 
    :param boolean: 

    :rtype: Response 

    :throws: \Zend\Mvc\Exception\RuntimeException 



