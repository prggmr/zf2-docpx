.. View/Helper/Navigation/Sitemap.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\View\\Helper\\Navigation\\Sitemap
=======================================

Helper for printing sitemaps

Methods
-------

__invoke
++++++++

.. function:: __invoke()


    Helper entry point

    :param string|AbstractContainer: container to operate on

    :rtype: Sitemap 



setFormatOutput
+++++++++++++++

.. function:: setFormatOutput()


    Sets whether XML output should be formatted

    :param bool: [optional] whether output should be formatted. Default is true.

    :rtype: Sitemap fluent interface, returns self



getFormatOutput
+++++++++++++++

.. function:: getFormatOutput()


    Returns whether XML output should be formatted

    :rtype: bool whether XML output should be formatted



setUseXmlDeclaration
++++++++++++++++++++

.. function:: setUseXmlDeclaration()


    Sets whether the XML declaration should be used in output

    :param bool: whether XML declaration should be rendered

    :rtype: Sitemap fluent interface, returns self



getUseXmlDeclaration
++++++++++++++++++++

.. function:: getUseXmlDeclaration()


    Returns whether the XML declaration should be used in output

    :rtype: bool whether the XML declaration should be used in output



setUseSitemapValidators
+++++++++++++++++++++++

.. function:: setUseSitemapValidators()


    Sets whether sitemap should be validated using Zend\Validate\Sitemap_*

    :param bool: whether sitemap validators should be used

    :rtype: Sitemap fluent interface, returns self



getUseSitemapValidators
+++++++++++++++++++++++

.. function:: getUseSitemapValidators()


    Returns whether sitemap should be validated using Zend\Validate\Sitemap_*

    :rtype: bool whether sitemap should be validated using validators



setUseSchemaValidation
++++++++++++++++++++++

.. function:: setUseSchemaValidation()


    Sets whether sitemap should be schema validated when generated

    :param bool: whether sitemap should validated using XSD Schema

    :rtype: Sitemap 



getUseSchemaValidation
++++++++++++++++++++++

.. function:: getUseSchemaValidation()


    Returns true if sitemap should be schema validated when generated

    :rtype: bool 



setServerUrl
++++++++++++

.. function:: setServerUrl()


    Sets server url (scheme and host-related stuff without request URI)
    
    E.g. http://www.example.com

    :param string: server URL to set (only scheme and host)

    :rtype: Sitemap fluent interface, returns self

    :throws: Exception\InvalidArgumentException if invalid server URL



getServerUrl
++++++++++++

.. function:: getServerUrl()


    Returns server URL

    :rtype: string server URL



xmlEscape
+++++++++

.. function:: xmlEscape()


    Escapes string for XML usage

    :param string: string to escape

    :rtype: string escaped string



url
+++

.. function:: url()


    Returns an escaped absolute URL for the given page

    :param AbstractPage: page to get URL from

    :rtype: string 



getDomSitemap
+++++++++++++

.. function:: getDomSitemap()


    Returns a DOMDocument containing the Sitemap XML for the given container

    :param AbstractContainer: [optional] container to get
                                              breadcrumbs from, defaults
                                              to what is registered in the
                                              helper

    :rtype: DOMDocument DOM representation of the
                                              container

    :throws: Exception\RuntimeException if schema validation is on
                                              and the sitemap is invalid
                                              according to the sitemap
                                              schema, or if sitemap
                                              validators are used and the
                                              loc element fails validation



render
++++++

.. function:: render()


    Renders helper
    
    Implements {@link HelperInterface::render()}.

    :param AbstractContainer: [optional] container to render. Default is
                          to render the container registered in the
                          helper.

    :rtype: string helper output





Constants
---------

SITEMAP_NS
++++++++++

Namespace for the <urlset> tag

SITEMAP_XSD
+++++++++++

Schema URL

