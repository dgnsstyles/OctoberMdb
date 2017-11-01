<?php

/* /Applications/MAMP/htdocs/install-master/themes/zanor-mdbv4/partials/site/nav.htm */
class __TwigTemplate_a9826c62b660f599010cb5d863ec77cd5b00477ee1901989cfcd8d18dfa22890 extends Twig_Template
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
        echo "<style rel=\"stylesheet\">
    /* TEMPLATE STYLES */
    /* Necessary for full page carousel*/

    .full-height,
    .full-height body,
    .full-height header,
    .full-height header .view, 
    .full-height body .view {
        height: 100%; 
    } 

    @media (max-width: 740px) {
        .full-height,
        .full-height body,
        .full-height header,
        .full-height header .view,
        .full-height body .view {
            height: 700px; 
        } 
    }
    
    @media (min-width: 1000px) and (max-width: 1025px) {
        .full-height,
        .full-height body,
        .full-height header,
        .full-height header .view,
        .full-height body .view {
            height: 770px; 
        } 
    }
    
    .navbar {
        background-color: transparent;
    }
    
    .scrolling-navbar {
        -webkit-transition: background .5s ease-in-out, padding .5s ease-in-out;
        -moz-transition: background .5s ease-in-out, padding .5s ease-in-out;
        transition: background .5s ease-in-out, padding .5s ease-in-out;
    }
    
    .top-nav-collapse {
        background-color: #1C2331;
    }
    
    footer.page-footer {
        background-color: #1C2331;
        margin-top: 0;
    }
    
    @media only screen and (max-width: 768px) {
        .navbar {
            background-color: #1C2331;
        }
    }
    /* Carousel*/
    
    .flex-center {
        color: #fff;
    }
    
    .carousel-caption {
        height: 100%;
        padding-top: 7rem;
    }
    .navbar .btn-group .dropdown-menu a:hover {
        color: #000 !important;
    }
    .navbar .btn-group .dropdown-menu a:active {
        color: #fff !important;
    }
</style>
<nav class=\"navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar indigo\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"#\">";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "site_name", array()), "html", null, true);
        echo "</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item ";
        // line 82
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "Inicio")) {
            echo "active";
        }
        echo "\">
                    <a class=\"nav-link\" href=\"";
        // line 83
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("inicio");
        echo "\">Inicio</a>
                </li>
            </li>
               <li class=\"nav-item ";
        // line 86
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "blog")) {
            echo "active";
        }
        echo "\">
                  <a class=\"nav-link\" href=\"";
        // line 87
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("blog");
        echo "\">Noticias</a>
               </li>
                <li class=\"nav-item ";
        // line 89
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "nosotros")) {
            echo "active";
        }
        echo "\">
                    <a class=\"nav-link\" href=\"";
        // line 90
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("nosotros");
        echo "\">Nosotros</a>
                
                <li class=\"nav-item ";
        // line 92
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "contacto")) {
            echo "active";
        }
        echo "\">
                    <a class=\"nav-link\" href=\"";
        // line 93
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("contacto");
        echo "\">Contacto</a>
                </li>
                
            </ul>
            
        </div>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/install-master/themes/zanor-mdbv4/partials/site/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 93,  139 => 92,  134 => 90,  128 => 89,  123 => 87,  117 => 86,  111 => 83,  105 => 82,  96 => 76,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<style rel=\"stylesheet\">
    /* TEMPLATE STYLES */
    /* Necessary for full page carousel*/

    .full-height,
    .full-height body,
    .full-height header,
    .full-height header .view, 
    .full-height body .view {
        height: 100%; 
    } 

    @media (max-width: 740px) {
        .full-height,
        .full-height body,
        .full-height header,
        .full-height header .view,
        .full-height body .view {
            height: 700px; 
        } 
    }
    
    @media (min-width: 1000px) and (max-width: 1025px) {
        .full-height,
        .full-height body,
        .full-height header,
        .full-height header .view,
        .full-height body .view {
            height: 770px; 
        } 
    }
    
    .navbar {
        background-color: transparent;
    }
    
    .scrolling-navbar {
        -webkit-transition: background .5s ease-in-out, padding .5s ease-in-out;
        -moz-transition: background .5s ease-in-out, padding .5s ease-in-out;
        transition: background .5s ease-in-out, padding .5s ease-in-out;
    }
    
    .top-nav-collapse {
        background-color: #1C2331;
    }
    
    footer.page-footer {
        background-color: #1C2331;
        margin-top: 0;
    }
    
    @media only screen and (max-width: 768px) {
        .navbar {
            background-color: #1C2331;
        }
    }
    /* Carousel*/
    
    .flex-center {
        color: #fff;
    }
    
    .carousel-caption {
        height: 100%;
        padding-top: 7rem;
    }
    .navbar .btn-group .dropdown-menu a:hover {
        color: #000 !important;
    }
    .navbar .btn-group .dropdown-menu a:active {
        color: #fff !important;
    }
</style>
<nav class=\"navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar indigo\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"#\">{{this.theme.site_name}}</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item {% if this.page.id == 'Inicio' %}active{% endif %}\">
                    <a class=\"nav-link\" href=\"{{ 'inicio'|page }}\">Inicio</a>
                </li>
            </li>
               <li class=\"nav-item {% if this.page.id == 'blog' %}active{% endif %}\">
                  <a class=\"nav-link\" href=\"{{ 'blog'|page }}\">Noticias</a>
               </li>
                <li class=\"nav-item {% if this.page.id == 'nosotros' %}active{% endif %}\">
                    <a class=\"nav-link\" href=\"{{ 'nosotros'|page }}\">Nosotros</a>
                
                <li class=\"nav-item {% if this.page.id == 'contacto' %}active{% endif %}\">
                    <a class=\"nav-link\" href=\"{{ 'contacto'|page }}\">Contacto</a>
                </li>
                
            </ul>
            
        </div>
    </div>
</nav>", "/Applications/MAMP/htdocs/install-master/themes/zanor-mdbv4/partials/site/nav.htm", "");
    }
}
