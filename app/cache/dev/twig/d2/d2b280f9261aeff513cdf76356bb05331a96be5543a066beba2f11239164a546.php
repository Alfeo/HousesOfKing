<?php

/* default/index.html.twig */
class __TwigTemplate_fc2ef843b08a9723cba770ea85645ea9eeaf545252596d59e643f5a994434366 extends Twig_Template
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
        $__internal_a739cdc094880b59377c4719a2292dd87fbf5ab5c80d17128728391bdcf5cf88 = $this->env->getExtension("native_profiler");
        $__internal_a739cdc094880b59377c4719a2292dd87fbf5ab5c80d17128728391bdcf5cf88->enter($__internal_a739cdc094880b59377c4719a2292dd87fbf5ab5c80d17128728391bdcf5cf88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a739cdc094880b59377c4719a2292dd87fbf5ab5c80d17128728391bdcf5cf88->leave($__internal_a739cdc094880b59377c4719a2292dd87fbf5ab5c80d17128728391bdcf5cf88_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9d929cbc08c973c4b50723dca201c38a120e65704517e68e898ae6335359631 = $this->env->getExtension("native_profiler");
        $__internal_f9d929cbc08c973c4b50723dca201c38a120e65704517e68e898ae6335359631->enter($__internal_f9d929cbc08c973c4b50723dca201c38a120e65704517e68e898ae6335359631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    PAGE ACCUEIL
";
        
        $__internal_f9d929cbc08c973c4b50723dca201c38a120e65704517e68e898ae6335359631->leave($__internal_f9d929cbc08c973c4b50723dca201c38a120e65704517e68e898ae6335359631_prof);

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
