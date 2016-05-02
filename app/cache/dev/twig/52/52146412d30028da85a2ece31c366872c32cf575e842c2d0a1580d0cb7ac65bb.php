<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_42839c4538f9a2bf1d787b08d3ce4ce9a314fc3009f078b76eb7d338740e8c7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_37255eca12e963070a7df7184d5ce2fc68e7bb9b28497f3830100e7a9d34460d = $this->env->getExtension("native_profiler");
        $__internal_37255eca12e963070a7df7184d5ce2fc68e7bb9b28497f3830100e7a9d34460d->enter($__internal_37255eca12e963070a7df7184d5ce2fc68e7bb9b28497f3830100e7a9d34460d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37255eca12e963070a7df7184d5ce2fc68e7bb9b28497f3830100e7a9d34460d->leave($__internal_37255eca12e963070a7df7184d5ce2fc68e7bb9b28497f3830100e7a9d34460d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_47473c97dbcc2fd6d4c3d59128e064bc1441e778c1824e0ed2957fb37222e63b = $this->env->getExtension("native_profiler");
        $__internal_47473c97dbcc2fd6d4c3d59128e064bc1441e778c1824e0ed2957fb37222e63b->enter($__internal_47473c97dbcc2fd6d4c3d59128e064bc1441e778c1824e0ed2957fb37222e63b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_47473c97dbcc2fd6d4c3d59128e064bc1441e778c1824e0ed2957fb37222e63b->leave($__internal_47473c97dbcc2fd6d4c3d59128e064bc1441e778c1824e0ed2957fb37222e63b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_734c41823df6f371a65b2146f2ce4890b5c4c31df55c22403fc4f09501a4ae3f = $this->env->getExtension("native_profiler");
        $__internal_734c41823df6f371a65b2146f2ce4890b5c4c31df55c22403fc4f09501a4ae3f->enter($__internal_734c41823df6f371a65b2146f2ce4890b5c4c31df55c22403fc4f09501a4ae3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_734c41823df6f371a65b2146f2ce4890b5c4c31df55c22403fc4f09501a4ae3f->leave($__internal_734c41823df6f371a65b2146f2ce4890b5c4c31df55c22403fc4f09501a4ae3f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_81183dcdffb54370cacfb1b5e05ebd7ed2e88dd9d1514e9df70ed537b006c7a6 = $this->env->getExtension("native_profiler");
        $__internal_81183dcdffb54370cacfb1b5e05ebd7ed2e88dd9d1514e9df70ed537b006c7a6->enter($__internal_81183dcdffb54370cacfb1b5e05ebd7ed2e88dd9d1514e9df70ed537b006c7a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_81183dcdffb54370cacfb1b5e05ebd7ed2e88dd9d1514e9df70ed537b006c7a6->leave($__internal_81183dcdffb54370cacfb1b5e05ebd7ed2e88dd9d1514e9df70ed537b006c7a6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
