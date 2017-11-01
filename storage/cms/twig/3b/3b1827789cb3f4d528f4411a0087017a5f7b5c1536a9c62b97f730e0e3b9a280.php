<?php

/* /Applications/MAMP/htdocs/install-master/themes/zanor-mdbv4/partials/site/footer.htm */
class __TwigTemplate_e8f03bd1158ab9ee49b0d25da7ae51457f4fde7e6881ebb134fec8d675d8ec41 extends Twig_Template
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
        echo "<!--Footer-->
<footer class=\"page-footer center-on-small-only\">
    
            <!--Footer links-->
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <!--First column-->
                    <div class=\"col-lg-3 col-md-6 ml-auto\">
                        <h5 class=\"title mb-3\"><strong>About material design</strong></h5>
                        <p>Material Design (codenamed Quantum Paper) is a design language developed by Google.</p>
                        <p>Material Design for Bootstrap (MDB) is a powerful Material Design UI KIT for most popular HTML, CSS,
                            and JS framework - Bootstrap.</p>
                    </div>
                    <!--/.First column-->
                    <hr class=\"w-100 clearfix d-sm-none\">
                    <!--Second column-->
                    <div class=\"col-lg-2 col-md-6 ml-auto\">
                        <h5 class=\"title mb-3\"><strong>First column</strong></h5>
                        <ul>
                            <li>
                                <a href=\"#!\">Link 1</a>
                            </li>
                            <li>
                                <a href=\"#!\">Link 2</a>
                            </li>
                            <li>
                                <a href=\"#!\">Link 3</a>
                            </li>
                            <li>
                                <a href=\"#!\">Link 4</a>
                            </li>
                        </ul>
                    </div>
                    <!--/.Second column-->
                    <hr class=\"w-100 clearfix d-sm-none\">
                    <!--Third column-->
                    <div class=\"col-lg-2 col-md-6 ml-auto\">
                        <h5 class=\"title mb-3\"><strong>Second column</strong></h5>
                        <ul>
                            <li>
                                <a href=\"#!\">Link 1</a>
                            </li>
                            <li>
                                <a href=\"#!\">Link 2</a>
                            </li>
                            <li>
                                <a href=\"#!\">Link 3</a>
                            </li>
                            <li>
                                <a href=\"#!\">Link 4</a>
                            </li>
                        </ul>
                    </div>
                    <!--/.Third column-->
                    <hr class=\"w-100 clearfix d-sm-none\">
                    <!--Fourth column-->
                    <div class=\"col-lg-2 col-md-6 ml-auto\">
                        <h5 class=\"title mb-3\"><strong>Third column</strong></h5>
                        <ul>
                            <li>
                                <a href=\"#!\">Link 1</a>
                            </li>
                            <li>
                                <a href=\"#!\">Link 2</a>
                            </li>
                            <li>
                                <a href=\"#!\">Link 3</a>
                            </li>
                            <li>
                                <a href=\"#!\">Link 4</a>
                            </li>
                        </ul>
                    </div>
                    <!--/.Fourth column-->
                </div>
            </div>
            <!--/.Footer links-->
    
            <hr>
    
            <!--Call to action-->
            <div class=\"call-to-action\">
                <h4>Material Design for Bootstrap</h4>
                <ul>
                    <li>
                        <h5>Get our UI KIT for free</h5></li>
                    <li><a target=\"_blank\" href=\"https://mdbootstrap.com/getting-started/\" class=\"btn btn-danger\" rel=\"nofollow\">Sign up!</a></li>
                    <li><a target=\"_blank\" href=\"https://mdbootstrap.com/material-design-for-bootstrap/\" class=\"btn btn-default\" rel=\"nofollow\">Learn more</a></li>
                </ul>
            </div>
            <!--/.Call to action-->
    
            <!--Copyright-->
            <div class=\"footer-copyright\">
                <div class=\"container-fluid\">
                    © 2015 Copyright: <a href=\"https://www.MDBootstrap.com\"> MDBootstrap.com </a>
    
                </div>
            </div>
            <!--/.Copyright-->
    
        </footer>
        <!--/.Footer-->
    
    
<script src=\"";
        // line 106
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/js/jquery-3.1.1.min.js", 1 => "assets/js/popper.min.js", 2 => "assets/js/bootstrap.min.js", 3 => "assets/js/mdb.min.js"));
        // line 111
        echo "\"></script>

    ";
        // line 113
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 114
        echo "    ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 115
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/install-master/themes/zanor-mdbv4/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 115,  139 => 114,  132 => 113,  128 => 111,  126 => 106,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!--Footer-->
<footer class=\"page-footer center-on-small-only\">
    
            <!--Footer links-->
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <!--First column-->
                    <div class=\"col-lg-3 col-md-6 ml-auto\">
                        <h5 class=\"title mb-3\"><strong>About material design</strong></h5>
                        <p>Material Design (codenamed Quantum Paper) is a design language developed by Google.</p>
                        <p>Material Design for Bootstrap (MDB) is a powerful Material Design UI KIT for most popular HTML, CSS,
                            and JS framework - Bootstrap.</p>
                    </div>
                    <!--/.First column-->
                    <hr class=\"w-100 clearfix d-sm-none\">
                    <!--Second column-->
                    <div class=\"col-lg-2 col-md-6 ml-auto\">
                        <h5 class=\"title mb-3\"><strong>First column</strong></h5>
                        <ul>
                            <li>
                                <a href=\"#!\">Link 1</a>
                            </li>
                            <li>
                                <a href=\"#!\">Link 2</a>
                            </li>
                            <li>
                                <a href=\"#!\">Link 3</a>
                            </li>
                            <li>
                                <a href=\"#!\">Link 4</a>
                            </li>
                        </ul>
                    </div>
                    <!--/.Second column-->
                    <hr class=\"w-100 clearfix d-sm-none\">
                    <!--Third column-->
                    <div class=\"col-lg-2 col-md-6 ml-auto\">
                        <h5 class=\"title mb-3\"><strong>Second column</strong></h5>
                        <ul>
                            <li>
                                <a href=\"#!\">Link 1</a>
                            </li>
                            <li>
                                <a href=\"#!\">Link 2</a>
                            </li>
                            <li>
                                <a href=\"#!\">Link 3</a>
                            </li>
                            <li>
                                <a href=\"#!\">Link 4</a>
                            </li>
                        </ul>
                    </div>
                    <!--/.Third column-->
                    <hr class=\"w-100 clearfix d-sm-none\">
                    <!--Fourth column-->
                    <div class=\"col-lg-2 col-md-6 ml-auto\">
                        <h5 class=\"title mb-3\"><strong>Third column</strong></h5>
                        <ul>
                            <li>
                                <a href=\"#!\">Link 1</a>
                            </li>
                            <li>
                                <a href=\"#!\">Link 2</a>
                            </li>
                            <li>
                                <a href=\"#!\">Link 3</a>
                            </li>
                            <li>
                                <a href=\"#!\">Link 4</a>
                            </li>
                        </ul>
                    </div>
                    <!--/.Fourth column-->
                </div>
            </div>
            <!--/.Footer links-->
    
            <hr>
    
            <!--Call to action-->
            <div class=\"call-to-action\">
                <h4>Material Design for Bootstrap</h4>
                <ul>
                    <li>
                        <h5>Get our UI KIT for free</h5></li>
                    <li><a target=\"_blank\" href=\"https://mdbootstrap.com/getting-started/\" class=\"btn btn-danger\" rel=\"nofollow\">Sign up!</a></li>
                    <li><a target=\"_blank\" href=\"https://mdbootstrap.com/material-design-for-bootstrap/\" class=\"btn btn-default\" rel=\"nofollow\">Learn more</a></li>
                </ul>
            </div>
            <!--/.Call to action-->
    
            <!--Copyright-->
            <div class=\"footer-copyright\">
                <div class=\"container-fluid\">
                    © 2015 Copyright: <a href=\"https://www.MDBootstrap.com\"> MDBootstrap.com </a>
    
                </div>
            </div>
            <!--/.Copyright-->
    
        </footer>
        <!--/.Footer-->
    
    
<script src=\"{{ [
        'assets/js/jquery-3.1.1.min.js',
        'assets/js/popper.min.js',
        'assets/js/bootstrap.min.js',
        'assets/js/mdb.min.js'
    ]|theme }}\"></script>

    {% framework extras %}
    {% scripts %}

</body>
</html>", "/Applications/MAMP/htdocs/install-master/themes/zanor-mdbv4/partials/site/footer.htm", "");
    }
}
