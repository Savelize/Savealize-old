<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b5790531ae7d671eb2fa0646ed9a0434 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        // line 7
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAABDlBMVEU/Pz////////////////////////////////////////////////////////////////////+qqqr///////////+kpKT///////////////////////////////////+Kior///////////+Ghob///////9kZGT///////////////////////9bW1v///9aWlpZWVn////t7e3////m5ub///9cXFxZWVn////////////////////KysrNzc3///9tbW1WVlZTU1NwcHCnp6dgYGCBgYGZmZl3d3dLS0tMTEyNjY2Tk5NJSUlFRUVERERZWVlCQkJVVVVAQEBCQkJUVFRVVVU/Pz9ERER+LwjMAAAAWHRSTlMAAQIDBQYHCAkLDQ4VFhscHyAiIiMlJjAyNDY3ODk9P0BAREpMTlBdXl9rb3BzdHl6gICChIyPlaOmqKuusLm6v8HFzM3X2tzd4ePn6Onq8vb5+vv9/f3+EYS6xwAAAQFJREFUeNrN0dlSwkAQBdAbA2FTQIIsAmJEA5qIiIoim8oibigI0vz/jygFZEwIw4sP3reeOtVTdRt/G6kwHBYkDvC/EL0HOCBGP4lzwN4UHJGRrMMClOmrzsDH/oYNKBLLc0gA4MwvZtUK6MELiIeDxagvgY4MIdIzxqIVfF6F4WvSSjBpZHyQW6tBO7clIHjRNwO9dDdP5UQWAc9BfWICalSZZzfgBCBsHndNQIEl4o5Wna0s6UYZROcSO3IwMVsZVX9Xfe0CAF7VN+414N7PB68aH7xdxm2+YEXVzmJuLANWVHLbBXvAivqnID0iGqU5IPU0/npMckD49LasyTDlG31Ah7wRFiUBAAAAAElFTkSuQmCC\" alt=\"Routing\" /></span>
    <strong>Routing</strong>
</span>
";
    }

    // line 13
    public function block_panel($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 66,  175 => 65,  172 => 64,  161 => 63,  134 => 54,  118 => 49,  385 => 160,  382 => 159,  376 => 158,  367 => 156,  363 => 155,  359 => 153,  357 => 152,  354 => 151,  351 => 150,  349 => 149,  339 => 146,  336 => 145,  330 => 141,  327 => 140,  324 => 139,  317 => 135,  311 => 131,  308 => 130,  303 => 128,  292 => 121,  289 => 120,  286 => 119,  284 => 118,  279 => 115,  277 => 114,  272 => 111,  270 => 110,  265 => 107,  261 => 105,  255 => 103,  251 => 101,  249 => 100,  244 => 97,  242 => 96,  237 => 93,  231 => 89,  228 => 88,  225 => 87,  223 => 86,  218 => 83,  212 => 79,  206 => 77,  204 => 76,  190 => 68,  185 => 66,  180 => 63,  174 => 59,  159 => 53,  148 => 46,  34 => 5,  20 => 1,  348 => 322,  346 => 321,  343 => 320,  299 => 278,  297 => 277,  110 => 22,  127 => 28,  97 => 23,  90 => 37,  77 => 25,  65 => 11,  63 => 18,  124 => 50,  58 => 18,  113 => 48,  137 => 96,  104 => 37,  100 => 39,  76 => 31,  59 => 22,  191 => 67,  102 => 40,  81 => 46,  53 => 15,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 157,  368 => 112,  365 => 111,  362 => 110,  360 => 332,  355 => 106,  341 => 147,  337 => 103,  322 => 138,  314 => 99,  312 => 98,  309 => 97,  305 => 129,  298 => 125,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 43,  140 => 58,  132 => 51,  128 => 49,  119 => 44,  107 => 27,  71 => 23,  38 => 7,  177 => 65,  165 => 64,  160 => 61,  135 => 62,  126 => 61,  114 => 42,  84 => 27,  70 => 15,  67 => 24,  61 => 17,  94 => 34,  89 => 30,  85 => 23,  75 => 24,  68 => 12,  56 => 11,  93 => 38,  88 => 32,  78 => 18,  26 => 3,  87 => 34,  46 => 13,  44 => 10,  31 => 4,  28 => 3,  196 => 90,  183 => 70,  171 => 58,  166 => 56,  163 => 70,  158 => 62,  156 => 58,  151 => 59,  142 => 59,  138 => 57,  136 => 56,  121 => 50,  117 => 19,  105 => 18,  91 => 33,  62 => 24,  49 => 14,  27 => 3,  25 => 35,  21 => 2,  24 => 3,  19 => 1,  79 => 18,  72 => 27,  69 => 26,  47 => 8,  40 => 8,  37 => 7,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 63,  131 => 61,  123 => 35,  120 => 20,  115 => 43,  111 => 47,  108 => 47,  101 => 43,  98 => 34,  96 => 37,  83 => 33,  74 => 27,  66 => 25,  55 => 16,  52 => 12,  50 => 18,  43 => 12,  41 => 10,  35 => 6,  32 => 5,  29 => 3,  209 => 78,  203 => 78,  199 => 73,  193 => 69,  189 => 71,  187 => 67,  182 => 66,  176 => 64,  173 => 74,  168 => 57,  164 => 59,  162 => 54,  154 => 60,  149 => 75,  147 => 58,  144 => 58,  141 => 97,  133 => 65,  130 => 39,  125 => 51,  122 => 43,  116 => 31,  112 => 40,  109 => 44,  106 => 45,  103 => 25,  99 => 40,  95 => 34,  92 => 21,  86 => 39,  82 => 28,  80 => 32,  73 => 24,  64 => 23,  60 => 20,  57 => 16,  54 => 19,  51 => 13,  48 => 16,  45 => 9,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
