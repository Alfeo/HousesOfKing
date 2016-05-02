<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_54c121cea1f41f5783239a6bd7a1f9c3d2928906477d4292374ce740b0ee2be4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_54ae19e2702025291264d4b349f468a81e60093a08b13ee0539e647eaf625250 = $this->env->getExtension("native_profiler");
        $__internal_54ae19e2702025291264d4b349f468a81e60093a08b13ee0539e647eaf625250->enter($__internal_54ae19e2702025291264d4b349f468a81e60093a08b13ee0539e647eaf625250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54ae19e2702025291264d4b349f468a81e60093a08b13ee0539e647eaf625250->leave($__internal_54ae19e2702025291264d4b349f468a81e60093a08b13ee0539e647eaf625250_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_46754c973c9a24e6cd2b3078d38d0918500a8cd12d418a92d4ce76a3079f8952 = $this->env->getExtension("native_profiler");
        $__internal_46754c973c9a24e6cd2b3078d38d0918500a8cd12d418a92d4ce76a3079f8952->enter($__internal_46754c973c9a24e6cd2b3078d38d0918500a8cd12d418a92d4ce76a3079f8952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_46754c973c9a24e6cd2b3078d38d0918500a8cd12d418a92d4ce76a3079f8952->leave($__internal_46754c973c9a24e6cd2b3078d38d0918500a8cd12d418a92d4ce76a3079f8952_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a56696af24774c1f482f911448837cec408d15a743d3cb9d52faefba234b09b4 = $this->env->getExtension("native_profiler");
        $__internal_a56696af24774c1f482f911448837cec408d15a743d3cb9d52faefba234b09b4->enter($__internal_a56696af24774c1f482f911448837cec408d15a743d3cb9d52faefba234b09b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_a56696af24774c1f482f911448837cec408d15a743d3cb9d52faefba234b09b4->leave($__internal_a56696af24774c1f482f911448837cec408d15a743d3cb9d52faefba234b09b4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c4344f422d0be1f8bd1f5652f3e514ec5bfcfa33a878a9156d889094a7d7a323 = $this->env->getExtension("native_profiler");
        $__internal_c4344f422d0be1f8bd1f5652f3e514ec5bfcfa33a878a9156d889094a7d7a323->enter($__internal_c4344f422d0be1f8bd1f5652f3e514ec5bfcfa33a878a9156d889094a7d7a323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_c4344f422d0be1f8bd1f5652f3e514ec5bfcfa33a878a9156d889094a7d7a323->leave($__internal_c4344f422d0be1f8bd1f5652f3e514ec5bfcfa33a878a9156d889094a7d7a323_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
