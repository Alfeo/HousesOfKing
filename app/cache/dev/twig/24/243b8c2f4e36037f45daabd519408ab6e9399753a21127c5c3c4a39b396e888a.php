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
        $__internal_c0ee01d32857bc4379d4a0d27d4a16f73fd3e3d684c5dae3af3964b396c5c2d3 = $this->env->getExtension("native_profiler");
        $__internal_c0ee01d32857bc4379d4a0d27d4a16f73fd3e3d684c5dae3af3964b396c5c2d3->enter($__internal_c0ee01d32857bc4379d4a0d27d4a16f73fd3e3d684c5dae3af3964b396c5c2d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0ee01d32857bc4379d4a0d27d4a16f73fd3e3d684c5dae3af3964b396c5c2d3->leave($__internal_c0ee01d32857bc4379d4a0d27d4a16f73fd3e3d684c5dae3af3964b396c5c2d3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9fd9f338d5c8a5d792a2840989170201b5ff91b12042ad3b9b6a45f36355db79 = $this->env->getExtension("native_profiler");
        $__internal_9fd9f338d5c8a5d792a2840989170201b5ff91b12042ad3b9b6a45f36355db79->enter($__internal_9fd9f338d5c8a5d792a2840989170201b5ff91b12042ad3b9b6a45f36355db79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9fd9f338d5c8a5d792a2840989170201b5ff91b12042ad3b9b6a45f36355db79->leave($__internal_9fd9f338d5c8a5d792a2840989170201b5ff91b12042ad3b9b6a45f36355db79_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c080f375d684dd6d4c5ec37b7f8e78326b915c30caaee5b3d98e734626eb8094 = $this->env->getExtension("native_profiler");
        $__internal_c080f375d684dd6d4c5ec37b7f8e78326b915c30caaee5b3d98e734626eb8094->enter($__internal_c080f375d684dd6d4c5ec37b7f8e78326b915c30caaee5b3d98e734626eb8094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c080f375d684dd6d4c5ec37b7f8e78326b915c30caaee5b3d98e734626eb8094->leave($__internal_c080f375d684dd6d4c5ec37b7f8e78326b915c30caaee5b3d98e734626eb8094_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_82df6893e2fde2688627e44fe77e0d323ebea232cc7fce43e14a3aacd8f6254a = $this->env->getExtension("native_profiler");
        $__internal_82df6893e2fde2688627e44fe77e0d323ebea232cc7fce43e14a3aacd8f6254a->enter($__internal_82df6893e2fde2688627e44fe77e0d323ebea232cc7fce43e14a3aacd8f6254a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_82df6893e2fde2688627e44fe77e0d323ebea232cc7fce43e14a3aacd8f6254a->leave($__internal_82df6893e2fde2688627e44fe77e0d323ebea232cc7fce43e14a3aacd8f6254a_prof);

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
