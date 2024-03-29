<?php

/* PgGsbFraisBundle::layout.html.twig */
class __TwigTemplate_0fb875fc1ec10983fbaa33284e124007c2ad90592842a140540e7dce72b97d54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Intranet du Laboratoire Galaxy-Swiss Bourdin</title>
        <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
        <!-- inclusion css -->
        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gsbfrais/css/bootstrap-theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gsbfrais/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

        <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"./images/favicon.ico\" />
    </head>
    <body>
        <div class='container'> 
            <!-- Intégration de la libraire de composants du Bootstrap -->
            <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gsbfrais/js/jquery-2.1.0.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gsbfrais/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

            <header>
                <div id=\"dropdown-menu\">
                    <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gsbfrais/images/cropped-logo1.png"), "html", null, true);
        echo "\" alt=\"Laboratoire Galaxy-Swiss Bourdin\" title=\"Laboratoire Galaxy-Swiss Bourdin\" />
                </div>
            </header>
            
            ";
        // line 25
        $this->displayBlock('body', $context, $blocks);
        // line 27
        echo "      
            <footer>
                <div>
                    copyright de la socité galaxy-swiss bourdin
                </div>
            </footer>
        </div>
    </body>
</html>
";
    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        // line 26
        echo "            ";
    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 26,  76 => 25,  63 => 27,  61 => 25,  54 => 21,  47 => 17,  43 => 16,  33 => 9,  20 => 1,  98 => 40,  95 => 39,  90 => 41,  88 => 39,  77 => 32,  71 => 30,  69 => 29,  56 => 19,  49 => 15,  40 => 9,  32 => 3,  29 => 2,  31 => 3,  28 => 7,);
    }
}
