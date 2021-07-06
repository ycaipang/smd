<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/simplymagicdrycleaners/templates/page-templates/page--order-list.html.twig */
class __TwigTemplate_02fbee1fd51af39fd67a83b38230e94f8b56dc24754c43f54df679cb905c879e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'main' => [$this, 'block_main'],
            'header' => [$this, 'block_header'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'highlighted' => [$this, 'block_highlighted'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 54, "block" => 286, "if" => 353];
        $filters = ["escape" => 287];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 54
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "fluid_container", [])) ? ("container-fluid") : ("container"));
        // line 56
        echo "<div class=\"header-top\">DRY CLEANING, PRESSING AND LAUNDRY SERVICE REPAIRS AND ALTERATIONS</div>
<div class=\"header-nav\">
  <div class=\"header-nav-inner\">
    <div class=\"col-md-3 col-xs-9 logo\"><a href=\"/\"><img src=\"/themes/custom/simplymagicdrycleaners/images/logo/smd-logo-100.png\"></a>
    </div>

<div class=\"col-md-9 prod-nav\">
        <div class=\"row\">
          <div class=\"col-md-2 col-md-offset-1\">
            <a href=\"/order-list?field_category_target_id=4\">
              <svg class=\"order-page-icons\" viewBox=\"0 0 228 221\">
              <g transform=\"translate(0,221) scale(0.1,-0.1)\">
              <path d=\"M1005 2089 c-389 -50 -714 -335 -827 -724 -20 -71 -23 -100 -22 -265
              0 -172 2 -191 27 -273 86 -280 273 -498 536 -624 130 -62 244 -86 411 -87 163
              -1 254 15 380 67 377 154 613 501 619 909 9 609 -515 1074 -1124 997z m313
              -125 c150 -30 298 -107 418 -217 124 -115 218 -278 260 -453 26 -105 23 -296
              -5 -403 -104 -395 -446 -661 -850 -661 -188 0 -334 43 -485 144 -182 121 -310
              301 -368 518 -31 116 -31 308 0 424 85 319 324 559 636 640 111 28 278 32 394
              8z\"></path><path d=\"M1092 1667 c-26 -28 -34 -72 -12 -72 8 0 21 13 28 28 11 22 19 28 40
              25 21 -2 28 -9 30 -30 3 -22 -2 -30 -22 -38 -19 -7 -26 -17 -26 -35 l0 -25
              -103 0 c-62 0 -123 -6 -153 -15 -64 -19 -127 -73 -162 -139 l-27 -51 0 -385 0
              -385 460 0 460 0 0 380 c0 379 0 380 -24 433 -30 67 -98 127 -164 147 -31 9
              -91 15 -154 15 -57 0 -103 3 -103 6 0 3 14 17 30 31 22 18 30 33 30 57 0 67
              -83 101 -128 53z m36 -204 c-2 -14 -15 -19 -49 -21 -36 -2 -53 -10 -74 -32
              -22 -23 -38 -30 -65 -30 -27 0 -54 -12 -108 -51 l-72 -51 2 -281 3 -282 48 -3
              47 -3 0 -45 0 -44 285 0 285 0 0 44 0 45 48 3 47 3 3 282 2 281 -72 51 c-54
              39 -81 51 -108 51 -27 0 -43 7 -65 30 -21 22 -38 30 -74 32 -35 2 -47 7 -49
              22 -4 17 4 18 120 15 112 -4 127 -6 169 -31 51 -30 92 -84 108 -143 7 -25 11
              -169 11 -382 l0 -343 -425 0 -425 0 0 343 c0 188 5 360 10 381 14 61 59 117
              119 148 49 26 62 28 168 28 104 0 114 -2 111 -17z m47 -83 c-10 -11 -23 -20
              -30 -20 -7 0 -20 9 -30 20 -18 20 -17 20 30 20 47 0 48 0 30 -20z m-93 -17
              c15 -15 28 -32 28 -39 0 -28 -23 -25 -56 7 -26 25 -31 36 -23 46 15 18 19 17
              51 -14z m177 14 c8 -10 3 -21 -23 -46 -52 -51 -79 -22 -29 31 30 32 36 33 52
              15z m-226 -83 l57 -56 -2 -291 -3 -292 -95 0 c-90 0 -95 1 -98 22 -2 14 4 26
              17 33 20 10 21 19 21 245 0 201 -2 235 -15 235 -23 0 -27 -35 -23 -204 l3
              -156 -27 0 c-21 0 -28 -5 -28 -19 0 -14 8 -21 28 -23 16 -2 27 -9 27 -18 0
              -11 -13 -16 -47 -18 l-48 -3 0 255 0 255 63 45 c34 25 73 45 87 46 17 0 44
              -19 83 -56z m393 10 l64 -45 0 -214 0 -214 -27 -3 c-17 -2 -29 -10 -31 -20 -3
              -14 3 -18 27 -18 25 0 31 -4 31 -21 0 -18 -5 -20 -46 -17 l-46 3 2 201 c0 110
              -2 208 -6 217 -12 31 -34 19 -34 -18 0 -35 0 -35 -44 -35 -69 0 -76 -5 -76
              -61 0 -46 2 -50 40 -75 31 -21 44 -24 52 -16 7 7 16 12 20 12 4 0 8 -58 8
              -130 0 -120 1 -130 21 -140 13 -7 19 -19 17 -33 -3 -21 -8 -22 -98 -22 l-95 0
              -3 292 -2 291 57 56 c37 35 67 56 82 56 13 0 52 -20 87 -46z m-266 -335 c0
              -277 -2 -319 -15 -319 -13 0 -15 42 -15 318 0 175 3 322 6 325 20 20 24 -34
              24 -324z m195 82 c0 -55 -67 -52 -73 3 -3 26 -2 27 35 24 33 -3 38 -6 38 -27z\"></path>
              </g></svg><p>Clean &amp; Press</p></a>
          </div>
          <div class=\"col-md-2\">
            <a href=\"/order-list?field_category_target_id=5\">
              <svg version=\"1.0\" viewBox=\"0 0 228 221\">
              <g transform=\"translate(0,221) scale(0.1,-0.1)\">
              <path d=\"M1005 2089 c-389 -50 -714 -335 -827 -724 -20 -71 -23 -100 -22 -265
              0 -172 2 -191 27 -273 86 -280 273 -498 536 -624 130 -62 244 -86 411 -87 163
              -1 254 15 380 67 377 154 613 501 619 909 9 609 -515 1074 -1124 997z m313
              -125 c150 -30 298 -107 418 -217 124 -115 218 -278 260 -453 26 -105 23 -296
              -5 -403 -104 -395 -446 -661 -850 -661 -188 0 -334 43 -485 144 -182 121 -310
              301 -368 518 -31 116 -31 308 0 424 85 319 324 559 636 640 111 28 278 32 394
              8z\"></path>
              <path d=\"M834 1582 c-44 -37 -114 -128 -152 -193 -103 -181 -128 -458 -52
              -597 24 -45 30 -68 30 -117 0 -34 5 -66 12 -73 9 -9 124 -12 455 -12 l443 0
              30 28 c28 25 32 38 60 192 38 210 38 200 -4 200 -19 0 -37 4 -41 9 -3 6 -6
              111 -6 233 0 248 -3 262 -59 290 -31 16 -69 18 -331 18 l-296 0 -23 25 c-13
              14 -26 25 -29 25 -3 0 -20 -13 -37 -28z m88 -112 c57 -65 123 -189 144 -271
              18 -69 25 -257 11 -320 -4 -21 -17 -49 -28 -63 l-20 -26 -164 0 -163 0 -23 48
              c-19 37 -24 68 -27 147 -5 131 15 225 72 340 41 82 125 195 146 195 5 0 28
              -23 52 -50z m618 1 c5 -11 10 -47 10 -81 0 -105 12 -100 -234 -100 l-213 0
              -11 25 c-7 14 -12 30 -12 35 0 6 71 10 175 10 l175 0 0 30 0 30 -194 0 -194 0
              -26 35 -27 35 270 0 c257 0 271 -1 281 -19z m10 -286 l0 -35 -205 0 c-195 0
              -205 1 -205 19 0 11 -3 26 -6 35 -5 14 17 16 205 16 l211 0 0 -35z m-5 -135
              l0 -35 -192 -3 -193 -2 -6 25 c-14 55 -11 56 198 53 l193 -3 0 -35z m75 -102
              c-2 -38 -52 -274 -61 -284 -10 -12 -52 -14 -247 -12 l-235 3 0 41 c0 26 10 57
              27 86 30 52 46 100 46 140 l0 28 235 0 c129 0 235 -1 235 -2z m-610 -258 l0
              -40 -140 0 -140 0 0 40 0 40 140 0 140 0 0 -40z\"></path>
              </g>
              </svg>
            <p>Press Only</p></a>
          </div>
          <div class=\"col-md-2\"> 
            <a href=\"/order-list?field_category_target_id=2\">
              <svg version=\"1.0\" viewBox=\"0 0 228 221\"><g transform=\"translate(0,221) scale(0.1,-0.1)\">
              <path d=\"M1005 2089 c-389 -50 -714 -335 -827 -724 -20 -71 -23 -100 -22 -265
              0 -172 2 -191 27 -273 86 -280 273 -498 536 -624 130 -62 244 -86 411 -87 163
              -1 254 15 380 67 377 154 613 501 619 909 9 609 -515 1074 -1124 997z m313
              -125 c150 -30 298 -107 418 -217 124 -115 218 -278 260 -453 26 -105 23 -296
              -5 -403 -104 -395 -446 -661 -850 -661 -188 0 -334 43 -485 144 -182 121 -310
              301 -368 518 -31 116 -31 308 0 424 85 319 324 559 636 640 111 28 278 32 394
              8z\"></path><path d=\"M806 1631 c-102 -11 -96 24 -96 -535 l0 -483 26 -24 26 -24 351 -3
              c240 -2 364 0 390 8 74 22 72 8 72 520 0 250 -3 467 -8 482 -4 15 -19 36 -34
              45 -24 16 -60 18 -348 19 -176 1 -346 -1 -379 -5z m164 -130 l0 -70 -97 2 -98
              2 -3 68 -3 67 101 0 100 0 0 -69z m535 -1 l0 -65 -230 0 -230 0 -3 68 -3 67
              233 -2 233 -3 0 -65z m5 -500 l0 -370 -370 0 -370 0 0 370 0 370 370 0 370 0
              0 -370z\"></path><path d=\"M1255 1523 c-18 -18 -16 -32 8 -47 21 -13 51 13 42 36 -10 24 -32 29
              -50 11z\"></path><path d=\"M1117 1524 c-12 -13 -8 -42 8 -48 25 -9 46 5 43 28 -3 21 -37 34 -51
              20z\"></path><path d=\"M1384 1515 c-8 -21 2 -45 19 -45 20 0 40 27 33 45 -7 19 -45 20 -52
              0z\"></path><path d=\"M1070 1291 c-94 -31 -186 -116 -214 -198 -64 -188 83 -393 284 -393
              201 0 348 205 284 393 -21 61 -94 141 -158 174 -54 27 -150 39 -196 24z m168
              -77 c86 -35 136 -114 136 -214 0 -253 -340 -332 -449 -104 -26 54 -25 156 3
              209 23 45 62 85 107 108 40 21 154 22 203 1z\"></path><path d=\"M1065 1181 c-71 -32 -132 -123 -123 -183 2 -17 10 -23 28 -23 22 0
              27 7 37 49 16 63 46 93 108 109 35 8 51 18 53 31 8 38 -40 46 -103 17z\"></path></g></svg>
              <p>Laundry &amp; Pressing</p></a>
          </div>
          <div class=\"col-md-2\"> 
            <a href=\"/order-list?field_category_target_id=3\">
              <svg version=\"1.0\" viewBox=\"0 0 228 221\">
              <g transform=\"translate(0.0,221) scale(0.1,-0.1)\">
              <path d=\"M1005 2089 c-389 -50 -714 -335 -827 -724 -20 -71 -23 -100 -22 -265
              0 -172 2 -191 27 -273 86 -280 273 -498 536 -624 130 -62 244 -86 411 -87 163
              -1 254 15 380 67 377 154 613 501 619 909 9 609 -515 1074 -1124 997z m313
              -125 c150 -30 298 -107 418 -217 124 -115 218 -278 260 -453 26 -105 23 -296
              -5 -403 -104 -395 -446 -661 -850 -661 -188 0 -334 43 -485 144 -182 121 -310
              301 -368 518 -31 116 -31 308 0 424 85 319 324 559 636 640 111 28 278 32 394
              8z\"></path><path d=\"M1412 1575 l-74 -53 -85 23 -85 24 -84 -55 c-46 -30 -86 -54 -90 -54
              -3 0 -48 26 -101 57 l-95 56 -116 -123 c-64 -68 -117 -131 -117 -139 0 -40 38
              -16 139 89 l106 112 73 -45 c122 -75 105 -74 201 -12 46 30 91 55 100 55 9 0
              49 -9 90 -20 l75 -21 63 46 c34 25 64 45 68 44 3 0 44 -61 92 -135 83 -127
              111 -154 124 -120 5 12 -194 326 -206 325 -3 0 -38 -24 -78 -54z\"></path>
              <path d=\"M503 1233 c-7 -2 -13 -17 -13 -33 0 -22 6 -30 28 -38 21 -7 31 -20
              41 -53 49 -168 156 -482 168 -494 12 -13 76 -15 408 -15 l394 0 14 27 c8 16
              54 141 103 279 67 191 93 253 109 260 24 11 31 39 15 59 -11 13 -102 15 -634
              14 -341 0 -627 -3 -633 -6z m385 -150 c7 -43 12 -84 12 -91 0 -10 -26 -12
              -112 -10 l-111 3 -28 82 c-15 45 -25 84 -21 87 3 3 60 6 127 6 l122 0 11 -77z
              m409 50 c-3 -16 -9 -56 -13 -90 l-7 -63 -138 0 c-136 0 -139 0 -144 23 -7 33
              -25 139 -25 149 0 4 75 8 166 8 l167 0 -6 -27z m353 15 c0 -7 -12 -47 -27 -90
              l-28 -78 -114 0 -114 0 6 38 c3 20 9 61 13 90 l7 52 128 0 c94 0 129 -3 129
              -12z m-726 -280 c8 -35 36 -194 36 -201 0 -13 -167 -8 -177 6 -10 11 -73 194
              -73 210 0 4 47 7 105 7 100 0 105 -1 109 -22z m336 11 c0 -10 -15 -122 -26
              -186 l-5 -33 -88 0 -89 0 -12 68 c-6 37 -14 88 -17 115 l-6 47 122 0 c78 0
              121 -4 121 -11z m300 6 c0 -13 -72 -200 -81 -212 -8 -9 -36 -13 -86 -13 -73 0
              -75 1 -70 23 3 12 11 58 17 102 6 44 13 86 15 93 3 8 33 12 105 12 55 0 100
              -2 100 -5z\"></path>
              </g>
              </svg>
            <p>Laundry</p></a>
          </div>
          <div class=\"col-md-2\">
            <a href=\"/order-list?field_category_target_id=3\">
              <svg version=\"1.0\" viewBox=\"0 0 228 221\">
              <g transform=\"translate(0.0,221) scale(0.1,-0.1)\">
              <path d=\"M1005 2089 c-389 -50 -714 -335 -827 -724 -20 -71 -23 -100 -22 -265
              0 -172 2 -191 27 -273 86 -280 273 -498 536 -624 130 -62 244 -86 411 -87 163
              -1 254 15 380 67 377 154 613 501 619 909 9 609 -515 1074 -1124 997z m313
              -125 c150 -30 298 -107 418 -217 124 -115 218 -278 260 -453 26 -105 23 -296
              -5 -403 -104 -395 -446 -661 -850 -661 -188 0 -334 43 -485 144 -182 121 -310
              301 -368 518 -31 116 -31 308 0 424 85 319 324 559 636 640 111 28 278 32 394
              8z\"></path><path d=\"M1412 1575 l-74 -53 -85 23 -85 24 -84 -55 c-46 -30 -86 -54 -90 -54
              -3 0 -48 26 -101 57 l-95 56 -116 -123 c-64 -68 -117 -131 -117 -139 0 -40 38
              -16 139 89 l106 112 73 -45 c122 -75 105 -74 201 -12 46 30 91 55 100 55 9 0
              49 -9 90 -20 l75 -21 63 46 c34 25 64 45 68 44 3 0 44 -61 92 -135 83 -127
              111 -154 124 -120 5 12 -194 326 -206 325 -3 0 -38 -24 -78 -54z\"></path>
              <path d=\"M503 1233 c-7 -2 -13 -17 -13 -33 0 -22 6 -30 28 -38 21 -7 31 -20
              41 -53 49 -168 156 -482 168 -494 12 -13 76 -15 408 -15 l394 0 14 27 c8 16
              54 141 103 279 67 191 93 253 109 260 24 11 31 39 15 59 -11 13 -102 15 -634
              14 -341 0 -627 -3 -633 -6z m385 -150 c7 -43 12 -84 12 -91 0 -10 -26 -12
              -112 -10 l-111 3 -28 82 c-15 45 -25 84 -21 87 3 3 60 6 127 6 l122 0 11 -77z
              m409 50 c-3 -16 -9 -56 -13 -90 l-7 -63 -138 0 c-136 0 -139 0 -144 23 -7 33
              -25 139 -25 149 0 4 75 8 166 8 l167 0 -6 -27z m353 15 c0 -7 -12 -47 -27 -90
              l-28 -78 -114 0 -114 0 6 38 c3 20 9 61 13 90 l7 52 128 0 c94 0 129 -3 129
              -12z m-726 -280 c8 -35 36 -194 36 -201 0 -13 -167 -8 -177 6 -10 11 -73 194
              -73 210 0 4 47 7 105 7 100 0 105 -1 109 -22z m336 11 c0 -10 -15 -122 -26
              -186 l-5 -33 -88 0 -89 0 -12 68 c-6 37 -14 88 -17 115 l-6 47 122 0 c78 0
              121 -4 121 -11z m300 6 c0 -13 -72 -200 -81 -212 -8 -9 -36 -13 -86 -13 -73 0
              -75 1 -70 23 3 12 11 58 17 102 6 44 13 86 15 93 3 8 33 12 105 12 55 0 100
              -2 100 -5z\"></path>
              </g>
              </svg>
            <p>Laundry</p></a>
          </div>
        </div>
        </div>


      ";
        // line 237
        echo "
    <div class=\"col-xs-3 burger\">
      <div class=\"line1\"></div>
      <div class=\"line2\"></div>
      <div class=\"line3\"></div>
    </div>
  </div>
</div>

";
        // line 261
        echo "        ";
        // line 262
        echo "        ";
        // line 271
        echo "
      ";
        // line 273
        echo "      ";
        // line 284
        echo "
";
        // line 286
        $this->displayBlock('main', $context, $blocks);
        // line 352
        echo "
";
        // line 353
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 354
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
    }

    // line 286
    public function block_main($context, array $blocks = [])
    {
        // line 287
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo " js-quickedit-main-content\">
    <div class=\"row\">

      ";
        // line 291
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 292
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 297
            echo "      ";
        }
        // line 298
        echo "
      ";
        // line 300
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 301
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 306
            echo "      ";
        }
        // line 307
        echo "
      ";
        // line 309
        echo "      ";
        // line 310
        $context["content_classes"] = [0 => ((($this->getAttribute(        // line 311
($context["page"] ?? null), "sidebar_first", []) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 312
($context["page"] ?? null), "sidebar_first", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 313
($context["page"] ?? null), "sidebar_second", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 314
($context["page"] ?? null), "sidebar_first", [])) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("col-sm-12") : (""))];
        // line 317
        echo "      <section";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method")), "html", null, true);
        echo ">


        ";
        // line 321
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 322
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 325
            echo "        ";
        }
        // line 326
        echo "
        ";
        // line 328
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 329
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 332
            echo "        ";
        }
        // line 333
        echo "
        ";
        // line 335
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 339
        echo "      </section>

      ";
        // line 342
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 343
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 348
            echo "      ";
        }
        // line 349
        echo "    </div>
  </div>
";
    }

    // line 292
    public function block_header($context, array $blocks = [])
    {
        // line 293
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 294
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
          </div>
        ";
    }

    // line 301
    public function block_sidebar_first($context, array $blocks = [])
    {
        // line 302
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 303
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 322
    public function block_highlighted($context, array $blocks = [])
    {
        // line 323
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "</div>
          ";
    }

    // line 329
    public function block_help($context, array $blocks = [])
    {
        // line 330
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "
          ";
    }

    // line 335
    public function block_content($context, array $blocks = [])
    {
        // line 336
        echo "          <a id=\"main-content\"></a>
          ";
        // line 337
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
        ";
    }

    // line 343
    public function block_sidebar_second($context, array $blocks = [])
    {
        // line 344
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 345
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 354
    public function block_footer($context, array $blocks = [])
    {
        // line 355
        echo "    <footer class=\"footer ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo "\" role=\"contentinfo\">
      ";
        // line 356
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
        echo "
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/simplymagicdrycleaners/templates/page-templates/page--order-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  448 => 356,  443 => 355,  440 => 354,  433 => 345,  430 => 344,  427 => 343,  421 => 337,  418 => 336,  415 => 335,  408 => 330,  405 => 329,  398 => 323,  395 => 322,  388 => 303,  385 => 302,  382 => 301,  375 => 294,  372 => 293,  369 => 292,  363 => 349,  360 => 348,  357 => 343,  354 => 342,  350 => 339,  347 => 335,  344 => 333,  341 => 332,  338 => 329,  335 => 328,  332 => 326,  329 => 325,  326 => 322,  323 => 321,  316 => 317,  314 => 314,  313 => 313,  312 => 312,  311 => 311,  310 => 310,  308 => 309,  305 => 307,  302 => 306,  299 => 301,  296 => 300,  293 => 298,  290 => 297,  287 => 292,  284 => 291,  277 => 287,  274 => 286,  268 => 354,  266 => 353,  263 => 352,  261 => 286,  258 => 284,  256 => 273,  253 => 271,  251 => 262,  249 => 261,  238 => 237,  65 => 56,  63 => 54,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title: The page title, for use in the actual content.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - messages: Status and error messages. Should be displayed prominently.
 * - tabs: Tabs linking to any sub-pages beneath the current page (e.g., the
 *   view and edit tabs when displaying a node).
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.navigation: Items for the navigation region.
 * - page.navigation_collapsible: Items for the navigation (collapsible) region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 *
 * @ingroup templates
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
{% set container = theme.settings.fluid_container ? 'container-fluid' : 'container' %}
{# Navbar #}
<div class=\"header-top\">DRY CLEANING, PRESSING AND LAUNDRY SERVICE REPAIRS AND ALTERATIONS</div>
<div class=\"header-nav\">
  <div class=\"header-nav-inner\">
    <div class=\"col-md-3 col-xs-9 logo\"><a href=\"/\"><img src=\"/themes/custom/simplymagicdrycleaners/images/logo/smd-logo-100.png\"></a>
    </div>

<div class=\"col-md-9 prod-nav\">
        <div class=\"row\">
          <div class=\"col-md-2 col-md-offset-1\">
            <a href=\"/order-list?field_category_target_id=4\">
              <svg class=\"order-page-icons\" viewBox=\"0 0 228 221\">
              <g transform=\"translate(0,221) scale(0.1,-0.1)\">
              <path d=\"M1005 2089 c-389 -50 -714 -335 -827 -724 -20 -71 -23 -100 -22 -265
              0 -172 2 -191 27 -273 86 -280 273 -498 536 -624 130 -62 244 -86 411 -87 163
              -1 254 15 380 67 377 154 613 501 619 909 9 609 -515 1074 -1124 997z m313
              -125 c150 -30 298 -107 418 -217 124 -115 218 -278 260 -453 26 -105 23 -296
              -5 -403 -104 -395 -446 -661 -850 -661 -188 0 -334 43 -485 144 -182 121 -310
              301 -368 518 -31 116 -31 308 0 424 85 319 324 559 636 640 111 28 278 32 394
              8z\"></path><path d=\"M1092 1667 c-26 -28 -34 -72 -12 -72 8 0 21 13 28 28 11 22 19 28 40
              25 21 -2 28 -9 30 -30 3 -22 -2 -30 -22 -38 -19 -7 -26 -17 -26 -35 l0 -25
              -103 0 c-62 0 -123 -6 -153 -15 -64 -19 -127 -73 -162 -139 l-27 -51 0 -385 0
              -385 460 0 460 0 0 380 c0 379 0 380 -24 433 -30 67 -98 127 -164 147 -31 9
              -91 15 -154 15 -57 0 -103 3 -103 6 0 3 14 17 30 31 22 18 30 33 30 57 0 67
              -83 101 -128 53z m36 -204 c-2 -14 -15 -19 -49 -21 -36 -2 -53 -10 -74 -32
              -22 -23 -38 -30 -65 -30 -27 0 -54 -12 -108 -51 l-72 -51 2 -281 3 -282 48 -3
              47 -3 0 -45 0 -44 285 0 285 0 0 44 0 45 48 3 47 3 3 282 2 281 -72 51 c-54
              39 -81 51 -108 51 -27 0 -43 7 -65 30 -21 22 -38 30 -74 32 -35 2 -47 7 -49
              22 -4 17 4 18 120 15 112 -4 127 -6 169 -31 51 -30 92 -84 108 -143 7 -25 11
              -169 11 -382 l0 -343 -425 0 -425 0 0 343 c0 188 5 360 10 381 14 61 59 117
              119 148 49 26 62 28 168 28 104 0 114 -2 111 -17z m47 -83 c-10 -11 -23 -20
              -30 -20 -7 0 -20 9 -30 20 -18 20 -17 20 30 20 47 0 48 0 30 -20z m-93 -17
              c15 -15 28 -32 28 -39 0 -28 -23 -25 -56 7 -26 25 -31 36 -23 46 15 18 19 17
              51 -14z m177 14 c8 -10 3 -21 -23 -46 -52 -51 -79 -22 -29 31 30 32 36 33 52
              15z m-226 -83 l57 -56 -2 -291 -3 -292 -95 0 c-90 0 -95 1 -98 22 -2 14 4 26
              17 33 20 10 21 19 21 245 0 201 -2 235 -15 235 -23 0 -27 -35 -23 -204 l3
              -156 -27 0 c-21 0 -28 -5 -28 -19 0 -14 8 -21 28 -23 16 -2 27 -9 27 -18 0
              -11 -13 -16 -47 -18 l-48 -3 0 255 0 255 63 45 c34 25 73 45 87 46 17 0 44
              -19 83 -56z m393 10 l64 -45 0 -214 0 -214 -27 -3 c-17 -2 -29 -10 -31 -20 -3
              -14 3 -18 27 -18 25 0 31 -4 31 -21 0 -18 -5 -20 -46 -17 l-46 3 2 201 c0 110
              -2 208 -6 217 -12 31 -34 19 -34 -18 0 -35 0 -35 -44 -35 -69 0 -76 -5 -76
              -61 0 -46 2 -50 40 -75 31 -21 44 -24 52 -16 7 7 16 12 20 12 4 0 8 -58 8
              -130 0 -120 1 -130 21 -140 13 -7 19 -19 17 -33 -3 -21 -8 -22 -98 -22 l-95 0
              -3 292 -2 291 57 56 c37 35 67 56 82 56 13 0 52 -20 87 -46z m-266 -335 c0
              -277 -2 -319 -15 -319 -13 0 -15 42 -15 318 0 175 3 322 6 325 20 20 24 -34
              24 -324z m195 82 c0 -55 -67 -52 -73 3 -3 26 -2 27 35 24 33 -3 38 -6 38 -27z\"></path>
              </g></svg><p>Clean &amp; Press</p></a>
          </div>
          <div class=\"col-md-2\">
            <a href=\"/order-list?field_category_target_id=5\">
              <svg version=\"1.0\" viewBox=\"0 0 228 221\">
              <g transform=\"translate(0,221) scale(0.1,-0.1)\">
              <path d=\"M1005 2089 c-389 -50 -714 -335 -827 -724 -20 -71 -23 -100 -22 -265
              0 -172 2 -191 27 -273 86 -280 273 -498 536 -624 130 -62 244 -86 411 -87 163
              -1 254 15 380 67 377 154 613 501 619 909 9 609 -515 1074 -1124 997z m313
              -125 c150 -30 298 -107 418 -217 124 -115 218 -278 260 -453 26 -105 23 -296
              -5 -403 -104 -395 -446 -661 -850 -661 -188 0 -334 43 -485 144 -182 121 -310
              301 -368 518 -31 116 -31 308 0 424 85 319 324 559 636 640 111 28 278 32 394
              8z\"></path>
              <path d=\"M834 1582 c-44 -37 -114 -128 -152 -193 -103 -181 -128 -458 -52
              -597 24 -45 30 -68 30 -117 0 -34 5 -66 12 -73 9 -9 124 -12 455 -12 l443 0
              30 28 c28 25 32 38 60 192 38 210 38 200 -4 200 -19 0 -37 4 -41 9 -3 6 -6
              111 -6 233 0 248 -3 262 -59 290 -31 16 -69 18 -331 18 l-296 0 -23 25 c-13
              14 -26 25 -29 25 -3 0 -20 -13 -37 -28z m88 -112 c57 -65 123 -189 144 -271
              18 -69 25 -257 11 -320 -4 -21 -17 -49 -28 -63 l-20 -26 -164 0 -163 0 -23 48
              c-19 37 -24 68 -27 147 -5 131 15 225 72 340 41 82 125 195 146 195 5 0 28
              -23 52 -50z m618 1 c5 -11 10 -47 10 -81 0 -105 12 -100 -234 -100 l-213 0
              -11 25 c-7 14 -12 30 -12 35 0 6 71 10 175 10 l175 0 0 30 0 30 -194 0 -194 0
              -26 35 -27 35 270 0 c257 0 271 -1 281 -19z m10 -286 l0 -35 -205 0 c-195 0
              -205 1 -205 19 0 11 -3 26 -6 35 -5 14 17 16 205 16 l211 0 0 -35z m-5 -135
              l0 -35 -192 -3 -193 -2 -6 25 c-14 55 -11 56 198 53 l193 -3 0 -35z m75 -102
              c-2 -38 -52 -274 -61 -284 -10 -12 -52 -14 -247 -12 l-235 3 0 41 c0 26 10 57
              27 86 30 52 46 100 46 140 l0 28 235 0 c129 0 235 -1 235 -2z m-610 -258 l0
              -40 -140 0 -140 0 0 40 0 40 140 0 140 0 0 -40z\"></path>
              </g>
              </svg>
            <p>Press Only</p></a>
          </div>
          <div class=\"col-md-2\"> 
            <a href=\"/order-list?field_category_target_id=2\">
              <svg version=\"1.0\" viewBox=\"0 0 228 221\"><g transform=\"translate(0,221) scale(0.1,-0.1)\">
              <path d=\"M1005 2089 c-389 -50 -714 -335 -827 -724 -20 -71 -23 -100 -22 -265
              0 -172 2 -191 27 -273 86 -280 273 -498 536 -624 130 -62 244 -86 411 -87 163
              -1 254 15 380 67 377 154 613 501 619 909 9 609 -515 1074 -1124 997z m313
              -125 c150 -30 298 -107 418 -217 124 -115 218 -278 260 -453 26 -105 23 -296
              -5 -403 -104 -395 -446 -661 -850 -661 -188 0 -334 43 -485 144 -182 121 -310
              301 -368 518 -31 116 -31 308 0 424 85 319 324 559 636 640 111 28 278 32 394
              8z\"></path><path d=\"M806 1631 c-102 -11 -96 24 -96 -535 l0 -483 26 -24 26 -24 351 -3
              c240 -2 364 0 390 8 74 22 72 8 72 520 0 250 -3 467 -8 482 -4 15 -19 36 -34
              45 -24 16 -60 18 -348 19 -176 1 -346 -1 -379 -5z m164 -130 l0 -70 -97 2 -98
              2 -3 68 -3 67 101 0 100 0 0 -69z m535 -1 l0 -65 -230 0 -230 0 -3 68 -3 67
              233 -2 233 -3 0 -65z m5 -500 l0 -370 -370 0 -370 0 0 370 0 370 370 0 370 0
              0 -370z\"></path><path d=\"M1255 1523 c-18 -18 -16 -32 8 -47 21 -13 51 13 42 36 -10 24 -32 29
              -50 11z\"></path><path d=\"M1117 1524 c-12 -13 -8 -42 8 -48 25 -9 46 5 43 28 -3 21 -37 34 -51
              20z\"></path><path d=\"M1384 1515 c-8 -21 2 -45 19 -45 20 0 40 27 33 45 -7 19 -45 20 -52
              0z\"></path><path d=\"M1070 1291 c-94 -31 -186 -116 -214 -198 -64 -188 83 -393 284 -393
              201 0 348 205 284 393 -21 61 -94 141 -158 174 -54 27 -150 39 -196 24z m168
              -77 c86 -35 136 -114 136 -214 0 -253 -340 -332 -449 -104 -26 54 -25 156 3
              209 23 45 62 85 107 108 40 21 154 22 203 1z\"></path><path d=\"M1065 1181 c-71 -32 -132 -123 -123 -183 2 -17 10 -23 28 -23 22 0
              27 7 37 49 16 63 46 93 108 109 35 8 51 18 53 31 8 38 -40 46 -103 17z\"></path></g></svg>
              <p>Laundry &amp; Pressing</p></a>
          </div>
          <div class=\"col-md-2\"> 
            <a href=\"/order-list?field_category_target_id=3\">
              <svg version=\"1.0\" viewBox=\"0 0 228 221\">
              <g transform=\"translate(0.0,221) scale(0.1,-0.1)\">
              <path d=\"M1005 2089 c-389 -50 -714 -335 -827 -724 -20 -71 -23 -100 -22 -265
              0 -172 2 -191 27 -273 86 -280 273 -498 536 -624 130 -62 244 -86 411 -87 163
              -1 254 15 380 67 377 154 613 501 619 909 9 609 -515 1074 -1124 997z m313
              -125 c150 -30 298 -107 418 -217 124 -115 218 -278 260 -453 26 -105 23 -296
              -5 -403 -104 -395 -446 -661 -850 -661 -188 0 -334 43 -485 144 -182 121 -310
              301 -368 518 -31 116 -31 308 0 424 85 319 324 559 636 640 111 28 278 32 394
              8z\"></path><path d=\"M1412 1575 l-74 -53 -85 23 -85 24 -84 -55 c-46 -30 -86 -54 -90 -54
              -3 0 -48 26 -101 57 l-95 56 -116 -123 c-64 -68 -117 -131 -117 -139 0 -40 38
              -16 139 89 l106 112 73 -45 c122 -75 105 -74 201 -12 46 30 91 55 100 55 9 0
              49 -9 90 -20 l75 -21 63 46 c34 25 64 45 68 44 3 0 44 -61 92 -135 83 -127
              111 -154 124 -120 5 12 -194 326 -206 325 -3 0 -38 -24 -78 -54z\"></path>
              <path d=\"M503 1233 c-7 -2 -13 -17 -13 -33 0 -22 6 -30 28 -38 21 -7 31 -20
              41 -53 49 -168 156 -482 168 -494 12 -13 76 -15 408 -15 l394 0 14 27 c8 16
              54 141 103 279 67 191 93 253 109 260 24 11 31 39 15 59 -11 13 -102 15 -634
              14 -341 0 -627 -3 -633 -6z m385 -150 c7 -43 12 -84 12 -91 0 -10 -26 -12
              -112 -10 l-111 3 -28 82 c-15 45 -25 84 -21 87 3 3 60 6 127 6 l122 0 11 -77z
              m409 50 c-3 -16 -9 -56 -13 -90 l-7 -63 -138 0 c-136 0 -139 0 -144 23 -7 33
              -25 139 -25 149 0 4 75 8 166 8 l167 0 -6 -27z m353 15 c0 -7 -12 -47 -27 -90
              l-28 -78 -114 0 -114 0 6 38 c3 20 9 61 13 90 l7 52 128 0 c94 0 129 -3 129
              -12z m-726 -280 c8 -35 36 -194 36 -201 0 -13 -167 -8 -177 6 -10 11 -73 194
              -73 210 0 4 47 7 105 7 100 0 105 -1 109 -22z m336 11 c0 -10 -15 -122 -26
              -186 l-5 -33 -88 0 -89 0 -12 68 c-6 37 -14 88 -17 115 l-6 47 122 0 c78 0
              121 -4 121 -11z m300 6 c0 -13 -72 -200 -81 -212 -8 -9 -36 -13 -86 -13 -73 0
              -75 1 -70 23 3 12 11 58 17 102 6 44 13 86 15 93 3 8 33 12 105 12 55 0 100
              -2 100 -5z\"></path>
              </g>
              </svg>
            <p>Laundry</p></a>
          </div>
          <div class=\"col-md-2\">
            <a href=\"/order-list?field_category_target_id=3\">
              <svg version=\"1.0\" viewBox=\"0 0 228 221\">
              <g transform=\"translate(0.0,221) scale(0.1,-0.1)\">
              <path d=\"M1005 2089 c-389 -50 -714 -335 -827 -724 -20 -71 -23 -100 -22 -265
              0 -172 2 -191 27 -273 86 -280 273 -498 536 -624 130 -62 244 -86 411 -87 163
              -1 254 15 380 67 377 154 613 501 619 909 9 609 -515 1074 -1124 997z m313
              -125 c150 -30 298 -107 418 -217 124 -115 218 -278 260 -453 26 -105 23 -296
              -5 -403 -104 -395 -446 -661 -850 -661 -188 0 -334 43 -485 144 -182 121 -310
              301 -368 518 -31 116 -31 308 0 424 85 319 324 559 636 640 111 28 278 32 394
              8z\"></path><path d=\"M1412 1575 l-74 -53 -85 23 -85 24 -84 -55 c-46 -30 -86 -54 -90 -54
              -3 0 -48 26 -101 57 l-95 56 -116 -123 c-64 -68 -117 -131 -117 -139 0 -40 38
              -16 139 89 l106 112 73 -45 c122 -75 105 -74 201 -12 46 30 91 55 100 55 9 0
              49 -9 90 -20 l75 -21 63 46 c34 25 64 45 68 44 3 0 44 -61 92 -135 83 -127
              111 -154 124 -120 5 12 -194 326 -206 325 -3 0 -38 -24 -78 -54z\"></path>
              <path d=\"M503 1233 c-7 -2 -13 -17 -13 -33 0 -22 6 -30 28 -38 21 -7 31 -20
              41 -53 49 -168 156 -482 168 -494 12 -13 76 -15 408 -15 l394 0 14 27 c8 16
              54 141 103 279 67 191 93 253 109 260 24 11 31 39 15 59 -11 13 -102 15 -634
              14 -341 0 -627 -3 -633 -6z m385 -150 c7 -43 12 -84 12 -91 0 -10 -26 -12
              -112 -10 l-111 3 -28 82 c-15 45 -25 84 -21 87 3 3 60 6 127 6 l122 0 11 -77z
              m409 50 c-3 -16 -9 -56 -13 -90 l-7 -63 -138 0 c-136 0 -139 0 -144 23 -7 33
              -25 139 -25 149 0 4 75 8 166 8 l167 0 -6 -27z m353 15 c0 -7 -12 -47 -27 -90
              l-28 -78 -114 0 -114 0 6 38 c3 20 9 61 13 90 l7 52 128 0 c94 0 129 -3 129
              -12z m-726 -280 c8 -35 36 -194 36 -201 0 -13 -167 -8 -177 6 -10 11 -73 194
              -73 210 0 4 47 7 105 7 100 0 105 -1 109 -22z m336 11 c0 -10 -15 -122 -26
              -186 l-5 -33 -88 0 -89 0 -12 68 c-6 37 -14 88 -17 115 l-6 47 122 0 c78 0
              121 -4 121 -11z m300 6 c0 -13 -72 -200 -81 -212 -8 -9 -36 -13 -86 -13 -73 0
              -75 1 -70 23 3 12 11 58 17 102 6 44 13 86 15 93 3 8 33 12 105 12 55 0 100
              -2 100 -5z\"></path>
              </g>
              </svg>
            <p>Laundry</p></a>
          </div>
        </div>
        </div>


      {# <ul class=\"col-md-9 header-nav-links showme\">
        <li><a href=\"/order-list?field_category_target_id=4\">Place an order</a></li>
        <li><a href=\"/\">About us</a></li>
        <li><a href=\"/\">Subscriptions</a></li>
          {% if check_if_logged_in %}
            <li class=\"header-icon-account\"><a href=\"/user/{{ current_user_uid }}/edit\">Account</a></li>
          {% else %}
            <li class=\"header-link-icon-account\"><a href=\"/user\">Login</a></li>
          {% endif %}
      </ul> #}

    <div class=\"col-xs-3 burger\">
      <div class=\"line1\"></div>
      <div class=\"line2\"></div>
      <div class=\"line3\"></div>
    </div>
  </div>
</div>

{# {% if page.navigation or page.navigation_collapsible %}
  {% block navbar %}
    {%
      set navbar_classes = [
        'navbar',
        theme.settings.navbar_inverse ? 'navbar-inverse' : 'navbar-default',
        theme.settings.navbar_position ? 'navbar-' ~ theme.settings.navbar_position|clean_class : container,
      ]
    %}
    <header{{ navbar_attributes.addClass(navbar_classes) }} id=\"navbar\" role=\"banner\">
      {% if not navbar_attributes.hasClass(container) %}
        <div class=\"{{ container }}\">
      {% endif %}
      <div class=\"navbar-header\">
        {{ page.navigation }} #}
        {# .btn-navbar is used as the toggle for collapsed navbar content #}
        {# {% if page.navigation_collapsible %}
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">{{ 'Toggle navigation'|t }}</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        {% endif %}
      </div> #}

      {# Navigation (collapsible) #}
      {# {% if page.navigation_collapsible %}
        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          {{ page.navigation_collapsible }}
        </div>
      {% endif %}
      {% if not navbar_attributes.hasClass(container) %}
        </div>
      {% endif %}
    </header>
  {% endblock %}
{% endif %} #}

{# Main #}
{% block main %}
  <div role=\"main\" class=\"main-container {{ container }} js-quickedit-main-content\">
    <div class=\"row\">

      {# Header #}
      {% if page.header %}
        {% block header %}
          <div class=\"col-sm-12\" role=\"heading\">
            {{ page.header }}
          </div>
        {% endblock %}
      {% endif %}

      {# Sidebar First #}
      {% if page.sidebar_first %}
        {% block sidebar_first %}
          <aside class=\"col-sm-3\" role=\"complementary\">
            {{ page.sidebar_first }}
          </aside>
        {% endblock %}
      {% endif %}

      {# Content #}
      {%
        set content_classes = [
          page.sidebar_first and page.sidebar_second ? 'col-sm-6',
          page.sidebar_first and page.sidebar_second is empty ? 'col-sm-9',
          page.sidebar_second and page.sidebar_first is empty ? 'col-sm-9',
          page.sidebar_first is empty and page.sidebar_second is empty ? 'col-sm-12'
        ]
      %}
      <section{{ content_attributes.addClass(content_classes) }}>


        {# Highlighted #}
        {% if page.highlighted %}
          {% block highlighted %}
            <div class=\"highlighted\">{{ page.highlighted }}</div>
          {% endblock %}
        {% endif %}

        {# Help #}
        {% if page.help %}
          {% block help %}
            {{ page.help }}
          {% endblock %}
        {% endif %}

        {# Content #}
        {% block content %}
          <a id=\"main-content\"></a>
          {{ page.content }}
        {% endblock %}
      </section>

      {# Sidebar Second #}
      {% if page.sidebar_second %}
        {% block sidebar_second %}
          <aside class=\"col-sm-3\" role=\"complementary\">
            {{ page.sidebar_second }}
          </aside>
        {% endblock %}
      {% endif %}
    </div>
  </div>
{% endblock %}

{% if page.footer %}
  {% block footer %}
    <footer class=\"footer {{ container }}\" role=\"contentinfo\">
      {{ page.footer }}
    </footer>
  {% endblock %}
{% endif %}
", "themes/custom/simplymagicdrycleaners/templates/page-templates/page--order-list.html.twig", "/home/flagdisp/public_html/dev2/themes/custom/simplymagicdrycleaners/templates/page-templates/page--order-list.html.twig");
    }
}
