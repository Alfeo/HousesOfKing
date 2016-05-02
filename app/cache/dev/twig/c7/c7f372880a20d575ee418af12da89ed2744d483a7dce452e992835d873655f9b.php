<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_690b7381a4dd439ba0ff91129f84ef30711213b66776b625b05447367a9fd7ec extends Twig_Template
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
        $__internal_e1e8d9044b4967c23f456fb18024f5578aa528874ed8a3aea3e8d1faadce0ea9 = $this->env->getExtension("native_profiler");
        $__internal_e1e8d9044b4967c23f456fb18024f5578aa528874ed8a3aea3e8d1faadce0ea9->enter($__internal_e1e8d9044b4967c23f456fb18024f5578aa528874ed8a3aea3e8d1faadce0ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1e8d9044b4967c23f456fb18024f5578aa528874ed8a3aea3e8d1faadce0ea9->leave($__internal_e1e8d9044b4967c23f456fb18024f5578aa528874ed8a3aea3e8d1faadce0ea9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_26a87ffd804d017779e8b856ea83d03da51783e727db588870ff56c4ee3bc2fa = $this->env->getExtension("native_profiler");
        $__internal_26a87ffd804d017779e8b856ea83d03da51783e727db588870ff56c4ee3bc2fa->enter($__internal_26a87ffd804d017779e8b856ea83d03da51783e727db588870ff56c4ee3bc2fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_26a87ffd804d017779e8b856ea83d03da51783e727db588870ff56c4ee3bc2fa->leave($__internal_26a87ffd804d017779e8b856ea83d03da51783e727db588870ff56c4ee3bc2fa_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b106111e1a3fcebdd7918f41e68c4c4a291132a8758db10dded058d150f71e1a = $this->env->getExtension("native_profiler");
        $__internal_b106111e1a3fcebdd7918f41e68c4c4a291132a8758db10dded058d150f71e1a->enter($__internal_b106111e1a3fcebdd7918f41e68c4c4a291132a8758db10dded058d150f71e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b106111e1a3fcebdd7918f41e68c4c4a291132a8758db10dded058d150f71e1a->leave($__internal_b106111e1a3fcebdd7918f41e68c4c4a291132a8758db10dded058d150f71e1a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_215b3e5fa9fce893957787f94982f283f7c35e888dea04845e909d0024c02b3b = $this->env->getExtension("native_profiler");
        $__internal_215b3e5fa9fce893957787f94982f283f7c35e888dea04845e909d0024c02b3b->enter($__internal_215b3e5fa9fce893957787f94982f283f7c35e888dea04845e909d0024c02b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_215b3e5fa9fce893957787f94982f283f7c35e888dea04845e909d0024c02b3b->leave($__internal_215b3e5fa9fce893957787f94982f283f7c35e888dea04845e909d0024c02b3b_prof);

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
