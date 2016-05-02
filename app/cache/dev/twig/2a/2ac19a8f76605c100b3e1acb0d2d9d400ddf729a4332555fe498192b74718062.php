<?php

/* houseBundle:frontend:dashboard.html.twig */
class __TwigTemplate_b2e4f8af6b27e97f329a1e4c399eed5156d369ae27cc2da3f136f087f2c49059 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "houseBundle:frontend:dashboard.html.twig", 1);
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
        $__internal_75eace98749a6b708494ef40acea418f52a788db9a7fe720a2a40adccbce60c8 = $this->env->getExtension("native_profiler");
        $__internal_75eace98749a6b708494ef40acea418f52a788db9a7fe720a2a40adccbce60c8->enter($__internal_75eace98749a6b708494ef40acea418f52a788db9a7fe720a2a40adccbce60c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "houseBundle:frontend:dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75eace98749a6b708494ef40acea418f52a788db9a7fe720a2a40adccbce60c8->leave($__internal_75eace98749a6b708494ef40acea418f52a788db9a7fe720a2a40adccbce60c8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6dff27e5c2511d584cd27efff69b5d347afef620267c8596ad340a5431fb507 = $this->env->getExtension("native_profiler");
        $__internal_e6dff27e5c2511d584cd27efff69b5d347afef620267c8596ad340a5431fb507->enter($__internal_e6dff27e5c2511d584cd27efff69b5d347afef620267c8596ad340a5431fb507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t<img class=\"illustration\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/back1.jpg"), "html", null, true);
        echo "\">

\t<div class=\"col-md-2 nav-left\">
\t\t<img class=\"illustration\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/back1.jpg"), "html", null, true);
        echo "\">
\t</div>

\t<div class=\"col-md-9 col-md-offset-1 main-perso\">

\t\t<img class=\"illustration-var\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/texture.jpg"), "html", null, true);
        echo "\">

\t\t<div class=\"col-md-5 main-perso-left\">
\t\t\t<div class=\"col-md-12 row main-perso-locate\">
\t\t\t\t<img class=\"illustration-var\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/map.jpg"), "html", null, true);
        echo "\">
\t\t\t</div>
\t\t\t<div class=\"col-md-12 row main-perso-states\">
\t\t\t\t<img class=\"illustration-var\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/parchemin.jpg"), "html", null, true);
        echo "\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<h3>Charactéristiques</h3>
\t\t\t\t\t<div class=\"col-md-12 main-perso-states-div\">
\t\t\t\t\t\t<p>Niveau :</p>
\t\t\t\t\t\t<p>Point d'honneur :</p>
\t\t\t\t\t\t<p>Expérience :</p>
\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t  <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%;\">
\t\t\t\t\t\t    60%
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>\t\t\t\t\t\t<hr>
\t\t\t\t\t\t<p>Argent :</p>
\t\t\t\t\t\t<p>Force :</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"col-md-7 main-perso-visual\">
\t\t\t<img class=\"illustration-var\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/wood.jpg"), "html", null, true);
        echo "\">
\t\t\t<img class=\"perso\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/perso.png"), "html", null, true);
        echo "\">
\t\t\t<div class=\"col-md-3 col-md-offset-9 col-xs-3 col-xs-offset-9\">
\t\t\t\t<div class=\"equip-item col-md-12\">
\t\t\t\t\tHeaume
\t\t\t\t</div>
\t\t\t\t<div class=\"equip-item col-md-12\">
\t\t\t\t\tTorse
\t\t\t\t</div>
\t\t\t\t<div class=\"equip-item col-md-12\">
\t\t\t\t\tJambe
\t\t\t\t</div>
\t\t\t\t<div class=\"equip-item col-md-12\">
\t\t\t\t\tAnneau
\t\t\t\t</div>
\t\t\t\t<div class=\"equip-item col-md-12\">
\t\t\t\t\tArme
\t\t\t\t</div>
\t\t\t\t<div class=\"equip-item col-md-12\">
\t\t\t\t\tBouclier
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"col-md-12 main-perso-inventaire-text\">
\t\t<h2>Inventaire (0 / 30)</h2>
\t<hr>
\t</div>

\t<div class=\"col-md-12 main-perso-inventaire\">
\t\t<img class=\"illustration-var\" src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/texture.jpg"), "html", null, true);
        echo "\">
\t\t
\t</div>


";
        
        $__internal_e6dff27e5c2511d584cd27efff69b5d347afef620267c8596ad340a5431fb507->leave($__internal_e6dff27e5c2511d584cd27efff69b5d347afef620267c8596ad340a5431fb507_prof);

    }

    public function getTemplateName()
    {
        return "houseBundle:frontend:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 71,  97 => 41,  93 => 40,  70 => 20,  64 => 17,  57 => 13,  49 => 8,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* 	<img class="illustration" src="{{ asset('img/back1.jpg') }}">*/
/* */
/* 	<div class="col-md-2 nav-left">*/
/* 		<img class="illustration" src="{{ asset('img/back1.jpg') }}">*/
/* 	</div>*/
/* */
/* 	<div class="col-md-9 col-md-offset-1 main-perso">*/
/* */
/* 		<img class="illustration-var" src="{{ asset('img/texture.jpg') }}">*/
/* */
/* 		<div class="col-md-5 main-perso-left">*/
/* 			<div class="col-md-12 row main-perso-locate">*/
/* 				<img class="illustration-var" src="{{ asset('img/map.jpg') }}">*/
/* 			</div>*/
/* 			<div class="col-md-12 row main-perso-states">*/
/* 				<img class="illustration-var" src="{{ asset('img/parchemin.jpg') }}">*/
/* 				<div class="col-md-12">*/
/* 					<h3>Charactéristiques</h3>*/
/* 					<div class="col-md-12 main-perso-states-div">*/
/* 						<p>Niveau :</p>*/
/* 						<p>Point d'honneur :</p>*/
/* 						<p>Expérience :</p>*/
/* 						<div class="progress">*/
/* 						  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">*/
/* 						    60%*/
/* 						  </div>*/
/* 						</div>						<hr>*/
/* 						<p>Argent :</p>*/
/* 						<p>Force :</p>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<div class="col-md-7 main-perso-visual">*/
/* 			<img class="illustration-var" src="{{ asset('img/wood.jpg') }}">*/
/* 			<img class="perso" src="{{ asset('img/perso.png') }}">*/
/* 			<div class="col-md-3 col-md-offset-9 col-xs-3 col-xs-offset-9">*/
/* 				<div class="equip-item col-md-12">*/
/* 					Heaume*/
/* 				</div>*/
/* 				<div class="equip-item col-md-12">*/
/* 					Torse*/
/* 				</div>*/
/* 				<div class="equip-item col-md-12">*/
/* 					Jambe*/
/* 				</div>*/
/* 				<div class="equip-item col-md-12">*/
/* 					Anneau*/
/* 				</div>*/
/* 				<div class="equip-item col-md-12">*/
/* 					Arme*/
/* 				</div>*/
/* 				<div class="equip-item col-md-12">*/
/* 					Bouclier*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="col-md-12 main-perso-inventaire-text">*/
/* 		<h2>Inventaire (0 / 30)</h2>*/
/* 	<hr>*/
/* 	</div>*/
/* */
/* 	<div class="col-md-12 main-perso-inventaire">*/
/* 		<img class="illustration-var" src="{{ asset('img/texture.jpg') }}">*/
/* 		*/
/* 	</div>*/
/* */
/* */
/* {% endblock %}*/
