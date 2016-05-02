<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2588bd6e076e85a1662ac8833896a20020a63a2e54caa70c0038c95fb8387010 extends Twig_Template
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
        $__internal_89b08ea3bcd49e3be059c2cb0cbc9204313d2bbe3379a7d2a1079a8bda2b05a1 = $this->env->getExtension("native_profiler");
        $__internal_89b08ea3bcd49e3be059c2cb0cbc9204313d2bbe3379a7d2a1079a8bda2b05a1->enter($__internal_89b08ea3bcd49e3be059c2cb0cbc9204313d2bbe3379a7d2a1079a8bda2b05a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89b08ea3bcd49e3be059c2cb0cbc9204313d2bbe3379a7d2a1079a8bda2b05a1->leave($__internal_89b08ea3bcd49e3be059c2cb0cbc9204313d2bbe3379a7d2a1079a8bda2b05a1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_64e966f5afe8a694ef8f9c2fe8819d2b5e6ac2dd266a1d7db4642111d46fa432 = $this->env->getExtension("native_profiler");
        $__internal_64e966f5afe8a694ef8f9c2fe8819d2b5e6ac2dd266a1d7db4642111d46fa432->enter($__internal_64e966f5afe8a694ef8f9c2fe8819d2b5e6ac2dd266a1d7db4642111d46fa432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_64e966f5afe8a694ef8f9c2fe8819d2b5e6ac2dd266a1d7db4642111d46fa432->leave($__internal_64e966f5afe8a694ef8f9c2fe8819d2b5e6ac2dd266a1d7db4642111d46fa432_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b4126dd7f8455d8cf6094c1c9c406984c8df012bfaaaa2d71d04205a0bd4b750 = $this->env->getExtension("native_profiler");
        $__internal_b4126dd7f8455d8cf6094c1c9c406984c8df012bfaaaa2d71d04205a0bd4b750->enter($__internal_b4126dd7f8455d8cf6094c1c9c406984c8df012bfaaaa2d71d04205a0bd4b750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b4126dd7f8455d8cf6094c1c9c406984c8df012bfaaaa2d71d04205a0bd4b750->leave($__internal_b4126dd7f8455d8cf6094c1c9c406984c8df012bfaaaa2d71d04205a0bd4b750_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_10b0235d1c77aa2bbfb65706ed9baff265f10c955cfeb623376b06ad6d906293 = $this->env->getExtension("native_profiler");
        $__internal_10b0235d1c77aa2bbfb65706ed9baff265f10c955cfeb623376b06ad6d906293->enter($__internal_10b0235d1c77aa2bbfb65706ed9baff265f10c955cfeb623376b06ad6d906293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_10b0235d1c77aa2bbfb65706ed9baff265f10c955cfeb623376b06ad6d906293->leave($__internal_10b0235d1c77aa2bbfb65706ed9baff265f10c955cfeb623376b06ad6d906293_prof);

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
