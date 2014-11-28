<?php

/* JoliBlogBundle:Default:post_id.html.twig */
class __TwigTemplate_61743fa5260531eb4343d0b4ddf481cf9577d796d738e7567d15edf6c313ecc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Voici l'article ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "<br><br>
Titre : ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "title", array()), "html", null, true);
        echo "<br>
Content : ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "content", array()), "html", null, true);
        echo "<br><br><br>

<a href=\"../blog/\">Retour a l'acceuil</a> | <a href=\"../blog_post/\">Poster un article</a>";
    }

    public function getTemplateName()
    {
        return "JoliBlogBundle:Default:post_id.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  24 => 2,  19 => 1,);
    }
}
