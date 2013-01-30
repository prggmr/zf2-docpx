.. Ldap/Node/RootDse/eDirectory.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Ldap\\Node\\RootDse\\eDirectory
=====================================

Zend\Ldap\Node\RootDse\eDirectory provides a simple data-container for the
RootDse node of a Novell eDirectory server.

Methods
-------

supportsExtension
+++++++++++++++++

.. function:: supportsExtension()


    Determines if the extension is supported

    :param string|array: oid(s) to check

    :rtype: bool 



getVendorName
+++++++++++++

.. function:: getVendorName()


    Gets the vendorName.

    :rtype: string|null 



getVendorVersion
++++++++++++++++

.. function:: getVendorVersion()


    Gets the vendorVersion.

    :rtype: string|null 



getDsaName
++++++++++

.. function:: getDsaName()


    Gets the dsaName.

    :rtype: string|null 



getStatisticsErrors
+++++++++++++++++++

.. function:: getStatisticsErrors()


    Gets the server statistics "errors".

    :rtype: string|null 



getStatisticsSecurityErrors
+++++++++++++++++++++++++++

.. function:: getStatisticsSecurityErrors()


    Gets the server statistics "securityErrors".

    :rtype: string|null 



getStatisticsChainings
++++++++++++++++++++++

.. function:: getStatisticsChainings()


    Gets the server statistics "chainings".

    :rtype: string|null 



getStatisticsReferralsReturned
++++++++++++++++++++++++++++++

.. function:: getStatisticsReferralsReturned()


    Gets the server statistics "referralsReturned".

    :rtype: string|null 



getStatisticsExtendedOps
++++++++++++++++++++++++

.. function:: getStatisticsExtendedOps()


    Gets the server statistics "extendedOps".

    :rtype: string|null 



getStatisticsAbandonOps
+++++++++++++++++++++++

.. function:: getStatisticsAbandonOps()


    Gets the server statistics "abandonOps".

    :rtype: string|null 



getStatisticsWholeSubtreeSearchOps
++++++++++++++++++++++++++++++++++

.. function:: getStatisticsWholeSubtreeSearchOps()


    Gets the server statistics "wholeSubtreeSearchOps".

    :rtype: string|null 



getServerType
+++++++++++++

.. function:: getServerType()


    Gets the server type

    :rtype: int 



