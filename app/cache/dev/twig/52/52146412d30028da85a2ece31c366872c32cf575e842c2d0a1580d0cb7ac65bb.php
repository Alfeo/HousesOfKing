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
        $__internal_dd6486eae8ac0ebd3c066fdc49a636670a3a04e181e77503792103423caa643c = $this->env->getExtension("native_profiler");
        $__internal_dd6486eae8ac0ebd3c066fdc49a636670a3a04e181e77503792103423caa643c->enter($__internal_dd6486eae8ac0ebd3c066fdc49a636670a3a04e181e77503792103423caa643c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd6486eae8ac0ebd3c066fdc49a636670a3a04e181e77503792103423caa643c->leave($__internal_dd6486eae8ac0ebd3c066fdc49a636670a3a04e181e77503792103423caa643c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_06a0569846507653a4aabb5fc92ad168816fe496a89baf6ee5b3b0ec32043f23 = $this->env->getExtension("native_profiler");
        $__internal_06a0569846507653a4aabb5fc92ad168816fe496a89baf6ee5b3b0ec32043f23->enter($__internal_06a0569846507653a4aabb5fc92ad168816fe496a89baf6ee5b3b0ec32043f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_06a0569846507653a4aabb5fc92ad168816fe496a89baf6ee5b3b0ec32043f23->leave($__internal_06a0569846507653a4aabb5fc92ad168816fe496a89baf6ee5b3b0ec32043f23_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_985a7e89ac7ea690387e6780ee8c88bcb8ee84f74e40984a2a16cc76e282064a = $this->env->getExtension("native_profiler");
        $__internal_985a7e89ac7ea690387e6780ee8c88bcb8ee84f74e40984a2a16cc76e282064a->enter($__internal_985a7e89ac7ea690387e6780ee8c88bcb8ee84f74e40984a2a16cc76e282064a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_985a7e89ac7ea690387e6780ee8c88bcb8ee84f74e40984a2a16cc76e282064a->leave($__internal_985a7e89ac7ea690387e6780ee8c88bcb8ee84f74e40984a2a16cc76e282064a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6878d9df6477dfff4ee6df35b68b4556a39b5e3c61aeae6b1a54b70870987627 = $this->env->getExtension("native_profiler");
        $__internal_6878d9df6477dfff4ee6df35b68b4556a39b5e3c61aeae6b1a54b70870987627->enter($__internal_6878d9df6477dfff4ee6df35b68b4556a39b5e3c61aeae6b1a54b70870987627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6878d9df6477dfff4ee6df35b68b4556a39b5e3c61aeae6b1a54b70870987627->leave($__internal_6878d9df6477dfff4ee6df35b68b4556a39b5e3c61aeae6b1a54b70870987627_prof);

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
