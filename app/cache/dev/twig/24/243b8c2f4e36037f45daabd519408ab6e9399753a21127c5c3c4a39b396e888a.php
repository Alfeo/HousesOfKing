<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_58042281fa907556a32e26812d7fd08e2093de6d48cdadcc92face60127e6c9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b38043a0cc03cc629792ee60cabb35385ec5fe9997ea61078131824f67a0d0e = $this->env->getExtension("native_profiler");
        $__internal_9b38043a0cc03cc629792ee60cabb35385ec5fe9997ea61078131824f67a0d0e->enter($__internal_9b38043a0cc03cc629792ee60cabb35385ec5fe9997ea61078131824f67a0d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b38043a0cc03cc629792ee60cabb35385ec5fe9997ea61078131824f67a0d0e->leave($__internal_9b38043a0cc03cc629792ee60cabb35385ec5fe9997ea61078131824f67a0d0e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_38904ded849be4b22b3324a233fa36ee2f4e069d9ac4931dfd7690e4dcc61a66 = $this->env->getExtension("native_profiler");
        $__internal_38904ded849be4b22b3324a233fa36ee2f4e069d9ac4931dfd7690e4dcc61a66->enter($__internal_38904ded849be4b22b3324a233fa36ee2f4e069d9ac4931dfd7690e4dcc61a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_38904ded849be4b22b3324a233fa36ee2f4e069d9ac4931dfd7690e4dcc61a66->leave($__internal_38904ded849be4b22b3324a233fa36ee2f4e069d9ac4931dfd7690e4dcc61a66_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f3664eedc6fca857b54a4bee689ddc300d8e5786de1b6bca465e0b2e6e93c2f7 = $this->env->getExtension("native_profiler");
        $__internal_f3664eedc6fca857b54a4bee689ddc300d8e5786de1b6bca465e0b2e6e93c2f7->enter($__internal_f3664eedc6fca857b54a4bee689ddc300d8e5786de1b6bca465e0b2e6e93c2f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f3664eedc6fca857b54a4bee689ddc300d8e5786de1b6bca465e0b2e6e93c2f7->leave($__internal_f3664eedc6fca857b54a4bee689ddc300d8e5786de1b6bca465e0b2e6e93c2f7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0eb19982f2c3d118d4d84887ef7052b53daedba408a851ea54531a0c5d04808c = $this->env->getExtension("native_profiler");
        $__internal_0eb19982f2c3d118d4d84887ef7052b53daedba408a851ea54531a0c5d04808c->enter($__internal_0eb19982f2c3d118d4d84887ef7052b53daedba408a851ea54531a0c5d04808c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0eb19982f2c3d118d4d84887ef7052b53daedba408a851ea54531a0c5d04808c->leave($__internal_0eb19982f2c3d118d4d84887ef7052b53daedba408a851ea54531a0c5d04808c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
