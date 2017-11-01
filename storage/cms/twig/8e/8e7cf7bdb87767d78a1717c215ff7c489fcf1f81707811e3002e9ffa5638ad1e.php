<?php

/* /Applications/MAMP/htdocs/install-master/themes/zanor-mdbv4/pages/blog.htm */
class __TwigTemplate_b42f48478aff2721637d24b42890b5f859d40aa94a5da27f23da98c193ea8199 extends Twig_Template
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
        echo "<section style=\"padding:70px\">
    ";
        // line 2
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("blogPosts"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 3
        echo "</section>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/install-master/themes/zanor-mdbv4/pages/blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section style=\"padding:70px\">
    {% component 'blogPosts' %}
</section>", "/Applications/MAMP/htdocs/install-master/themes/zanor-mdbv4/pages/blog.htm", "");
    }
}
