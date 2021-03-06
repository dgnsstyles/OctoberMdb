<?php

/* /Applications/MAMP/htdocs/install-master/themes/zanor-mdbv4/pages/contacto.htm */
class __TwigTemplate_79ada7beb6f0d23cc6e70db85525d90f323192d288f439c7a366fd6677348945 extends Twig_Template
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
        echo "<!--Section: Contact v.2-->

<section class=\"section container\" style=\"padding-top:70px\">
    
        <!--Section heading-->
        <h2 class=\"section-heading h1 pt-4\">Contactanos</h2>
        <!--Section description-->
        <p class=\"section-description\">Si tienes alguna pregunta nosotros con gusto te atenderemos</p>
    
        <div class=\"row\">
    
            <!--Grid column-->
            <div class=\"col-md-8 col-xl-9\">
                <form id =\"contact-form\" name=\"contact-form\" action=\"mail.php\" method=\"POST\">
    
                    <!--Grid row-->
                    <div class=\"row\">
    
                        <!--Grid column-->
                        <div class=\"col-md-6\">
                            <div class=\"md-form\">
                                <div class=\"md-form\">
                                    <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\">
                                    <label for=\"name\" class=\"\">Nombre</label>
                                </div>
                            </div>
                        </div>
                        <!--Grid column-->
    
                        <!--Grid column-->
                        <div class=\"col-md-6\">
                            <div class=\"md-form\">
                                <div class=\"md-form\">
                                    <input type=\"text\" id=\"email\" name=\"email\" class=\"form-control\">
                                    <label for=\"email\" class=\"\">Correo electronico</label>
                                </div>
                            </div>
                        </div>
                        <!--Grid column-->
    
                    </div>
                    <!--Grid row-->
    
                    <!--Grid row-->
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"md-form\">
                                <input type=\"text\" id=\"subject\" name=\"subject\" class=\"form-control\">
                                <label for=\"subject\" class=\"\">Tema</label>
                            </div>
                        </div>
                    </div>
                    <!--Grid row-->
    
                    <!--Grid row-->
                    <div class=\"row\">
    
                        <!--Grid column-->
                        <div class=\"col-md-12\">
    
                            <div class=\"md-form\">
                                <textarea type=\"text\" id=\"message\" name=\"message\" class=\"md-textarea\"></textarea>
                                <label for=\"message\">Mensaje</label>
                            </div>
    
                        </div>
                    </div>
                    <!--Grid row-->
    
                </form>
    
                <div class=\"center-on-small-only\">
                    <a class=\"btn btn-primary\" onclick=\"document.getElementById('contact-form').submit();\">Enviar</a>
                </div>
                <div class=\"status\" id=\"status\"></div>
            </div>
            <!--Grid column-->
    
            <!--Grid column-->
            <div class=\"col-md-4 col-xl-3\">
                <ul class=\"contact-icons\">
                    <li><i class=\"fa fa-map-marker fa-2x\"></i>
                        <p>Santiago de Chile</p>
                    </li>
    
                    <li><i class=\"fa fa-phone fa-2x\"></i>
                        <p>+ 01 234 567 89</p>
                    </li>
    
                    <li><i class=\"fa fa-envelope fa-2x\"></i>
                        <p>contacto@pelochuzo.cl</p>
                    </li>
                </ul>
            </div>
            <!--Grid column-->
    
        </div>
    
    </section>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/install-master/themes/zanor-mdbv4/pages/contacto.htm";
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
        return new Twig_Source("<!--Section: Contact v.2-->

<section class=\"section container\" style=\"padding-top:70px\">
    
        <!--Section heading-->
        <h2 class=\"section-heading h1 pt-4\">Contactanos</h2>
        <!--Section description-->
        <p class=\"section-description\">Si tienes alguna pregunta nosotros con gusto te atenderemos</p>
    
        <div class=\"row\">
    
            <!--Grid column-->
            <div class=\"col-md-8 col-xl-9\">
                <form id =\"contact-form\" name=\"contact-form\" action=\"mail.php\" method=\"POST\">
    
                    <!--Grid row-->
                    <div class=\"row\">
    
                        <!--Grid column-->
                        <div class=\"col-md-6\">
                            <div class=\"md-form\">
                                <div class=\"md-form\">
                                    <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\">
                                    <label for=\"name\" class=\"\">Nombre</label>
                                </div>
                            </div>
                        </div>
                        <!--Grid column-->
    
                        <!--Grid column-->
                        <div class=\"col-md-6\">
                            <div class=\"md-form\">
                                <div class=\"md-form\">
                                    <input type=\"text\" id=\"email\" name=\"email\" class=\"form-control\">
                                    <label for=\"email\" class=\"\">Correo electronico</label>
                                </div>
                            </div>
                        </div>
                        <!--Grid column-->
    
                    </div>
                    <!--Grid row-->
    
                    <!--Grid row-->
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"md-form\">
                                <input type=\"text\" id=\"subject\" name=\"subject\" class=\"form-control\">
                                <label for=\"subject\" class=\"\">Tema</label>
                            </div>
                        </div>
                    </div>
                    <!--Grid row-->
    
                    <!--Grid row-->
                    <div class=\"row\">
    
                        <!--Grid column-->
                        <div class=\"col-md-12\">
    
                            <div class=\"md-form\">
                                <textarea type=\"text\" id=\"message\" name=\"message\" class=\"md-textarea\"></textarea>
                                <label for=\"message\">Mensaje</label>
                            </div>
    
                        </div>
                    </div>
                    <!--Grid row-->
    
                </form>
    
                <div class=\"center-on-small-only\">
                    <a class=\"btn btn-primary\" onclick=\"document.getElementById('contact-form').submit();\">Enviar</a>
                </div>
                <div class=\"status\" id=\"status\"></div>
            </div>
            <!--Grid column-->
    
            <!--Grid column-->
            <div class=\"col-md-4 col-xl-3\">
                <ul class=\"contact-icons\">
                    <li><i class=\"fa fa-map-marker fa-2x\"></i>
                        <p>Santiago de Chile</p>
                    </li>
    
                    <li><i class=\"fa fa-phone fa-2x\"></i>
                        <p>+ 01 234 567 89</p>
                    </li>
    
                    <li><i class=\"fa fa-envelope fa-2x\"></i>
                        <p>contacto@pelochuzo.cl</p>
                    </li>
                </ul>
            </div>
            <!--Grid column-->
    
        </div>
    
    </section>", "/Applications/MAMP/htdocs/install-master/themes/zanor-mdbv4/pages/contacto.htm", "");
    }
}
