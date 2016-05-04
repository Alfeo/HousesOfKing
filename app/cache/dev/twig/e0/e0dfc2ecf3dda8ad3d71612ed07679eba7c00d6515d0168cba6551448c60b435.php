<?php

/* houseBundle:frontend:character.html.twig */
class __TwigTemplate_7712b7326bafcad4bd98bdcd70d36df0c70740b522119c167968f00a30a00bd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "houseBundle:frontend:character.html.twig", 1);
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
        $__internal_6794c27fc94757a585fa78c8982651ae4f4b3997d89ccaefcb2f984cacd4eba3 = $this->env->getExtension("native_profiler");
        $__internal_6794c27fc94757a585fa78c8982651ae4f4b3997d89ccaefcb2f984cacd4eba3->enter($__internal_6794c27fc94757a585fa78c8982651ae4f4b3997d89ccaefcb2f984cacd4eba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "houseBundle:frontend:character.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6794c27fc94757a585fa78c8982651ae4f4b3997d89ccaefcb2f984cacd4eba3->leave($__internal_6794c27fc94757a585fa78c8982651ae4f4b3997d89ccaefcb2f984cacd4eba3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad47c8ff81707957dd3381f9caf222f9d885d879e8c2365e1a9d0d536f7d7819 = $this->env->getExtension("native_profiler");
        $__internal_ad47c8ff81707957dd3381f9caf222f9d885d879e8c2365e1a9d0d536f7d7819->enter($__internal_ad47c8ff81707957dd3381f9caf222f9d885d879e8c2365e1a9d0d536f7d7819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t<div class=\"col-md-12 main-perso\">

\t\t<img class=\"illustration-var\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/texture.jpg"), "html", null, true);
        echo "\">

\t\t<div class=\"col-md-5 main-perso-left\">
\t\t\t<div class=\"col-md-12 row main-perso-locate\">
\t\t\t\t<img class=\"illustration-var\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/map.jpg"), "html", null, true);
        echo "\">
\t\t\t</div>
\t\t\t<div class=\"col-md-12 row main-perso-states\">
\t\t\t\t<img class=\"illustration-var\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/parchemin.jpg"), "html", null, true);
        echo "\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<h3>Charactéristiques</h3>
\t\t\t\t\t<div class=\"col-md-12 main-perso-states-div\">
\t\t\t\t\t\t<p>Niveau 1</p>
\t\t\t\t\t\t<p>Points d'honneur : </p>
\t\t\t\t\t\t<p>Expérience : ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["joueur"]) ? $context["joueur"] : $this->getContext($context, "joueur")), "experience", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t  <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["joueur"]) ? $context["joueur"] : $this->getContext($context, "joueur")), "experience", array()), "html", null, true);
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["joueur"]) ? $context["joueur"] : $this->getContext($context, "joueur")), "experience", array()), "html", null, true);
        echo "%;\">
\t\t\t\t\t\t    ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["joueur"]) ? $context["joueur"] : $this->getContext($context, "joueur")), "experience", array()), "html", null, true);
        echo "%
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p>Force : ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["joueur"]) ? $context["joueur"] : $this->getContext($context, "joueur")), "strenght", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t\t<p>Défense : ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["joueur"]) ? $context["joueur"] : $this->getContext($context, "joueur")), "defense", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"col-md-7 main-perso-visual\">
\t\t\t<img class=\"illustration-var\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/wood.jpg"), "html", null, true);
        echo "\">
\t\t\t";
        // line 35
        if (($this->getAttribute((isset($context["joueur"]) ? $context["joueur"] : $this->getContext($context, "joueur")), "house", array()) == 1)) {
            // line 36
            echo "\t\t\t\t<img class=\"perso\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/persoh1.png"), "html", null, true);
            echo "\">
\t\t\t";
        } elseif (($this->getAttribute(        // line 37
(isset($context["joueur"]) ? $context["joueur"] : $this->getContext($context, "joueur")), "house", array()) == 2)) {
            // line 38
            echo "\t\t\t\t<img class=\"perso\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/persoh2.png"), "html", null, true);
            echo "\">
\t\t\t";
        } elseif (($this->getAttribute(        // line 39
(isset($context["joueur"]) ? $context["joueur"] : $this->getContext($context, "joueur")), "house", array()) == 3)) {
            // line 40
            echo "\t\t\t\t<img class=\"perso\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/persoh3.png"), "html", null, true);
            echo "\">
\t\t\t";
        } else {
            // line 42
            echo "\t\t\t\t<img class=\"perso\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/perso.png"), "html", null, true);
            echo "\">
\t\t\t";
        }
        // line 44
        echo "\t\t\t<div class=\"col-md-3 col-md-offset-9 col-xs-3 col-xs-offset-9\">
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
\t\t<h2 class=\"pull-left\">Inventaire (0 / 30)</h2>
\t\t<h2 class=\"pull-right\">Argent : ";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["joueur"]) ? $context["joueur"] : $this->getContext($context, "joueur")), "gold", array()), "html", null, true);
        echo " 
\t\t\t<img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/bourse.png"), "html", null, true);
        echo "\">
\t\t</h2>
\t</div>

\t<div class=\"col-md-12\">
\t\t<hr>
\t</div>

\t<div class=\"col-md-12 main-perso-inventaire\">
\t\t<img class=\"illustration-var\" src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/texture.jpg"), "html", null, true);
        echo "\">
\t\t
\t</div>


";
        
        $__internal_ad47c8ff81707957dd3381f9caf222f9d885d879e8c2365e1a9d0d536f7d7819->leave($__internal_ad47c8ff81707957dd3381f9caf222f9d885d879e8c2365e1a9d0d536f7d7819_prof);

    }

    public function getTemplateName()
    {
        return "houseBundle:frontend:character.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 79,  161 => 70,  157 => 69,  130 => 44,  124 => 42,  118 => 40,  116 => 39,  111 => 38,  109 => 37,  104 => 36,  102 => 35,  98 => 34,  88 => 27,  84 => 26,  78 => 23,  72 => 22,  67 => 20,  58 => 14,  52 => 11,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* 	<div class="col-md-12 main-perso">*/
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
/* 						<p>Niveau 1</p>*/
/* 						<p>Points d'honneur : </p>*/
/* 						<p>Expérience : {{ joueur.experience }}</p>*/
/* 						<div class="progress">*/
/* 						  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{ joueur.experience }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ joueur.experience }}%;">*/
/* 						    {{ joueur.experience }}%*/
/* 						  </div>*/
/* 						</div>*/
/* 						<p>Force : {{ joueur.strenght }}</p>*/
/* 						<p>Défense : {{ joueur.defense }}</p>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<div class="col-md-7 main-perso-visual">*/
/* 			<img class="illustration-var" src="{{ asset('img/wood.jpg') }}">*/
/* 			{% if joueur.house == 1 %}*/
/* 				<img class="perso" src="{{ asset('img/persoh1.png') }}">*/
/* 			{% elseif joueur.house == 2 %}*/
/* 				<img class="perso" src="{{ asset('img/persoh2.png') }}">*/
/* 			{% elseif joueur.house == 3 %}*/
/* 				<img class="perso" src="{{ asset('img/persoh3.png') }}">*/
/* 			{% else %}*/
/* 				<img class="perso" src="{{ asset('img/perso.png') }}">*/
/* 			{% endif %}*/
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
/* 		<h2 class="pull-left">Inventaire (0 / 30)</h2>*/
/* 		<h2 class="pull-right">Argent : {{ joueur.gold }} */
/* 			<img src="{{ asset('img/bourse.png') }}">*/
/* 		</h2>*/
/* 	</div>*/
/* */
/* 	<div class="col-md-12">*/
/* 		<hr>*/
/* 	</div>*/
/* */
/* 	<div class="col-md-12 main-perso-inventaire">*/
/* 		<img class="illustration-var" src="{{ asset('img/texture.jpg') }}">*/
/* 		*/
/* 	</div>*/
/* */
/* */
/* {% endblock %}*/
