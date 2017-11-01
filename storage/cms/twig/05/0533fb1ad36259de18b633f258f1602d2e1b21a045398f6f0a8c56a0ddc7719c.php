<?php

/* /Applications/MAMP/htdocs/install-master/themes/zanor-mdbv4/pages/blog/post.htm */
class __TwigTemplate_7c9779f3ef78cfa42249cb908de10490289777d8dc9a69ba5defce7f85270758 extends Twig_Template
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/head"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 3
        if (($context["post"] ?? null)) {
            // line 4
            echo "    <h2>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "title", array()), "html", null, true);
            echo "</h2>

    ";
            // line 6
            $context['__cms_component_params'] = [];
            echo $this->env->getExtension('CMS')->componentFunction("blogPost"            , $context['__cms_component_params']            );
            unset($context['__cms_component_params']);
        } else {
            // line 8
            echo "    <h2>Post not found</h2>
";
        }
        // line 10
        echo "


";
        // line 13
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 14
        echo "</section>

";
        // line 16
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/install-master/themes/zanor-mdbv4/pages/blog/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 16,  50 => 14,  48 => 13,  43 => 10,  39 => 8,  34 => 6,  28 => 4,  26 => 3,  22 => 2,  19 => 1,);
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
{% partial 'site/head' %}
{% if post %}
    <h2>{{ post.title }}</h2>

    {% component 'blogPost' %}
{% else %}
    <h2>Post not found</h2>
{% endif %}



{% page %}
</section>

{% partial 'site/footer' %}", "/Applications/MAMP/htdocs/install-master/themes/zanor-mdbv4/pages/blog/post.htm", "");
    }
}
