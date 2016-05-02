<?php

/* default/index.html.twig */
class __TwigTemplate_dbc19fad87c4d3162f1c1350562570198017de1f366f5c175df878360c65f601 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72675bb8ff81936c64f0c400a1dcb089b79db7e7fe64d0a6e56fc987984682ba = $this->env->getExtension("native_profiler");
        $__internal_72675bb8ff81936c64f0c400a1dcb089b79db7e7fe64d0a6e56fc987984682ba->enter($__internal_72675bb8ff81936c64f0c400a1dcb089b79db7e7fe64d0a6e56fc987984682ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72675bb8ff81936c64f0c400a1dcb089b79db7e7fe64d0a6e56fc987984682ba->leave($__internal_72675bb8ff81936c64f0c400a1dcb089b79db7e7fe64d0a6e56fc987984682ba_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0742524c6e9178ae4f2bcb1fb2589aed1f605a19c0874b399e606033cb366218 = $this->env->getExtension("native_profiler");
        $__internal_0742524c6e9178ae4f2bcb1fb2589aed1f605a19c0874b399e606033cb366218->enter($__internal_0742524c6e9178ae4f2bcb1fb2589aed1f605a19c0874b399e606033cb366218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    PAGE ACCUEIL
";
        
        $__internal_0742524c6e9178ae4f2bcb1fb2589aed1f605a19c0874b399e606033cb366218->leave($__internal_0742524c6e9178ae4f2bcb1fb2589aed1f605a19c0874b399e606033cb366218_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     PAGE ACCUEIL*/
/* {% endblock %}*/
/* */
