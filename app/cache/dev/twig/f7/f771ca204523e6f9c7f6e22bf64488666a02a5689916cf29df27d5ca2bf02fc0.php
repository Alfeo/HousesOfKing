<?php

/* default/choice.html.twig */
class __TwigTemplate_2fdd5d94a6000d7f36794e2b8513654917d3189752f0d04f67f11e325a8a5dd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/choice.html.twig", 1);
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
        $__internal_e22051fef252b4682f5d77e55aa380c219f1d0cfe657cdcc8b134750069646c7 = $this->env->getExtension("native_profiler");
        $__internal_e22051fef252b4682f5d77e55aa380c219f1d0cfe657cdcc8b134750069646c7->enter($__internal_e22051fef252b4682f5d77e55aa380c219f1d0cfe657cdcc8b134750069646c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/choice.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e22051fef252b4682f5d77e55aa380c219f1d0cfe657cdcc8b134750069646c7->leave($__internal_e22051fef252b4682f5d77e55aa380c219f1d0cfe657cdcc8b134750069646c7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c72e15ee283886fc2cea794409eabfe23ca546d31393127f6984f96bcfc728e7 = $this->env->getExtension("native_profiler");
        $__internal_c72e15ee283886fc2cea794409eabfe23ca546d31393127f6984f96bcfc728e7->enter($__internal_c72e15ee283886fc2cea794409eabfe23ca546d31393127f6984f96bcfc728e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
\t<div class=\"col-md-4 faction-div\">
\t\t<img class=\"parch\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/parchemin.jpg"), "html", null, true);
        echo "\">
\t\t<div class=\"faction-img col-md-6 col-md-offset-3\">
\t\t\t<img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/thorkel_flag.png"), "html", null, true);
        echo "\">
\t\t</div>
\t\t<div class=\"col-md-12 faction-desc\">
\t\t\t<p></p>
\t\t</div>
\t\t<div class=\"col-md-12 faction-access\">
\t\t\t<a class=\"btn btn-success\" href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("user_choice_house_confirmed", array("id" => 1));
        echo "\">Rejoindre</a>
\t\t</div>
\t</div>

\t<div class=\"col-md-4 faction-div\">
\t\t<img class=\"parch\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/parchemin.jpg"), "html", null, true);
        echo "\">
\t\t<div class=\"faction-img col-md-6 col-md-offset-3\">
\t\t\t<img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/exorine_flag.png"), "html", null, true);
        echo "\">
\t\t</div>
\t\t<div class=\"col-md-12 faction-desc\">
\t\t\t<p></p>
\t\t</div>
\t\t<div class=\"col-md-12 faction-access\">
\t\t\t<a class=\"btn btn-success\" href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("user_choice_house_confirmed", array("id" => 2));
        echo "\">Rejoindre</a>
\t\t</div>
\t</div>

\t<div class=\"col-md-4 faction-div\">
\t\t<img class=\"parch\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/parchemin.jpg"), "html", null, true);
        echo "\">
\t\t<div class=\"faction-img col-md-6 col-md-offset-3\">
\t\t\t<img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/rizzen_flag.png"), "html", null, true);
        echo "\">
\t\t</div>
\t\t<div class=\"col-md-12 faction-desc\">
\t\t\t<p></p>
\t\t</div>
\t\t<div class=\"col-md-12 faction-access\">
\t\t\t<a class=\"btn btn-success\" href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("user_choice_house_confirmed", array("id" => 3));
        echo "\">Rejoindre</a>
\t\t</div>
\t</div>

";
        
        $__internal_c72e15ee283886fc2cea794409eabfe23ca546d31393127f6984f96bcfc728e7->leave($__internal_c72e15ee283886fc2cea794409eabfe23ca546d31393127f6984f96bcfc728e7_prof);

    }

    public function getTemplateName()
    {
        return "default/choice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 40,  93 => 34,  88 => 32,  80 => 27,  71 => 21,  66 => 19,  58 => 14,  49 => 8,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     */
/* 	<div class="col-md-4 faction-div">*/
/* 		<img class="parch" src="{{ asset('img/parchemin.jpg') }}">*/
/* 		<div class="faction-img col-md-6 col-md-offset-3">*/
/* 			<img src="{{ asset('img/thorkel_flag.png') }}">*/
/* 		</div>*/
/* 		<div class="col-md-12 faction-desc">*/
/* 			<p></p>*/
/* 		</div>*/
/* 		<div class="col-md-12 faction-access">*/
/* 			<a class="btn btn-success" href="{{ path('user_choice_house_confirmed', {'id': 1}) }}">Rejoindre</a>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="col-md-4 faction-div">*/
/* 		<img class="parch" src="{{ asset('img/parchemin.jpg') }}">*/
/* 		<div class="faction-img col-md-6 col-md-offset-3">*/
/* 			<img src="{{ asset('img/exorine_flag.png') }}">*/
/* 		</div>*/
/* 		<div class="col-md-12 faction-desc">*/
/* 			<p></p>*/
/* 		</div>*/
/* 		<div class="col-md-12 faction-access">*/
/* 			<a class="btn btn-success" href="{{ path('user_choice_house_confirmed', {'id': 2}) }}">Rejoindre</a>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="col-md-4 faction-div">*/
/* 		<img class="parch" src="{{ asset('img/parchemin.jpg') }}">*/
/* 		<div class="faction-img col-md-6 col-md-offset-3">*/
/* 			<img src="{{ asset('img/rizzen_flag.png') }}">*/
/* 		</div>*/
/* 		<div class="col-md-12 faction-desc">*/
/* 			<p></p>*/
/* 		</div>*/
/* 		<div class="col-md-12 faction-access">*/
/* 			<a class="btn btn-success" href="{{ path('user_choice_house_confirmed', {'id': 3}) }}">Rejoindre</a>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* {% endblock %}*/
