<?php

/* JoliBlogBundle:Default:post.html.twig */
class __TwigTemplate_399b0f6c4cbc2bae09ff1528364359148622b8d6fa7e5c5683d363157c618668 extends Twig_Template
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
        echo "Voici la liste des article :<br><br>
<table>
\t
\t\t";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            echo "           
\t\t    <tr>
\t\t    \ttitre : <a href=\"../post/";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "title", array()), "html", null, true);
            echo "</a><br>
\t\t    \tcontent : ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "content", array()), "html", null, true);
            echo "<br><br><br><br>
\t\t    </tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
</table>

<a href=\"../blog_post/\">Poster un article</a>";
    }

    public function getTemplateName()
    {
        return "JoliBlogBundle:Default:post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 10,  37 => 7,  31 => 6,  24 => 4,  19 => 1,);
    }
}
