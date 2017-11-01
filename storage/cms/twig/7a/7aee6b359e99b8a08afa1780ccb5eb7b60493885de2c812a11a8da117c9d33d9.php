<?php

/* /Applications/MAMP/htdocs/install-master/themes/zanor-mdbv4/layouts/fallback.htm */
class __TwigTemplate_08a602d1e6cad7a8f2b51f60b7aeee8a1ba8c3be641e84b12ed4613d1da6daa9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo $this->env->getExtension('CMS')->pageFunction();
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/install-master/themes/zanor-mdbv4/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% page %}", "/Applications/MAMP/htdocs/install-master/themes/zanor-mdbv4/layouts/fallback.htm", "");
    }
}
