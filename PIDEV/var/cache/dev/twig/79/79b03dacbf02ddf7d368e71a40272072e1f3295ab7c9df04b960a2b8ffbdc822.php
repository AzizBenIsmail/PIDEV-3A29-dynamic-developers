<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Front/front.html.twig */
class __TwigTemplate_81d6ec3be6a766ac5645aaf3d0251be3f45e08473b90645140a876c7d2e7ae2d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "/Front/Front-Base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/front.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/front.html.twig"));

        $this->parent = $this->loadTemplate("/Front/Front-Base.html.twig", "Front/front.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<body>

<header class=\"nav-down responsive-nav hidden-lg hidden-md\">
    <button type=\"button\" id=\"nav-toggle\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-nav\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
    </button>
    <!--/.navbar-header-->
    <div id=\"main-nav\" class=\"collapse navbar-collapse\">
        <nav>
            <ul class=\"nav navbar-nav\">

                <li><a href=\"#top\">Home</a></li>
                <li><a href=\"#featured\">Featured</a></li>
                <li><a href=\"#projects\">Recent Projects</a></li>
                <li><a href=\"#video\">Presentation</a></li>
                <li><a href=\"#blog\">Blog Entries</a></li>
                <li><a href=\"#contact\">Contact Us</a></li>

            </ul>
        </nav>
    </div>

</header>
<div class=\"sidebar-navigation hidde-sm hidden-xs\">

    <div class=\"logo\">
        <a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Travel<em><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/travel.png"), "html", null, true);
        echo "\" width=\"100\" height=\"100\">me</em></a>
    </div>
    <nav>


        <ul>
            <li>
                ";
        // line 42
        echo "                <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
                    <div class=\"container\">
                        <img src=\"https://img.icons8.com/external-bearicons-gradient-bearicons/100/000000/external-login-call-to-action-bearicons-gradient-bearicons.png\"/>
                    </div>
                </a>
            </li>
            <li>
              ";
        // line 50
        echo "                <a href=\"#top\">
                    <span class=\"rect\"></span>
                    <span class=\"circle\"></span>
                    Home
                </a>
            </li>
            <li>
                <a href=\"#featured\">
                    <span class=\"rect\"></span>
                    <span class=\"circle\"></span>
                    Featured
                </a>
            </li>
            <li>
                <a href=\"#projects\">
                    <span class=\"rect\"></span>
                    <span class=\"circle\"></span>
                    Recent Work
                </a>
            </li>
            <li>
                <a href=\"#video\">
                    <span class=\"rect\"></span>
                    <span class=\"circle\"></span>
                    Presentation
                </a>
            </li>
            <li>
                <a href=\"#blog\">
                    <span class=\"rect\"></span>
                    <span class=\"circle\"></span>
                    Blog Entires
                </a>
            </li>
            <li>
                <a href=\"#contact\">
                    <span class=\"rect\"></span>
                    <span class=\"circle\"></span>
                    Contact Us
                </a>
            </li>
        </ul>
    </nav>
    <ul class=\"social-icons\">
        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
        <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
        <li><a href=\"#\"><i class=\"fa fa-rss\"></i></a></li>
        <li><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
    </ul>
</div>

<div class=\"slider\">

    <div class=\"Modern-Slider content-section\" id=\"top\">
        <!-- Item -->
        <div class=\"item item-1\">
            <div class=\"img-fill\">
                <div class=\"image\"></div>
                <div class=\"info\">
                    <div>
                        <h1>Voyager
                            <br>pour vivre .</h1>
                        <p>Sentra is free Bootstrap CSS Template by templatemo website.<br>
                            Please share our site link to your friends.</p>
                        <div class=\"white-button button\">
                            <a href=\"#featured\">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Item -->

        <div class=\"item item-4\">
            <div class=\"img-fill\">
                <div class=\"image\"></div>
                <div class=\"info\">
                    <div>
                        <h1>Laisse-toi
                            <br>derrière toi.</h1>
                        <p>Sentra is free Bootstrap CSS Template by templatemo website.<br>
                            Please share our site link to your friends.</p>
                        <div class=\"white-button button\">
                            <a href=\"#featured\">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- // Item -->
        <!-- Item -->
        <div class=\"item item-2\">
            <div class=\"img-fill\">
                <div class=\"image\"></div>
                <div class=\"info\">
                    <div>
                        <h1>Voyager <br>en seule clic </h1>
                        <p>Support templatemo by sharing a link to your friends.
                            <br>Thank you for helping us.</p>

                        <div class=\"white-button button\">
                            <a href=\"#featured\">Share More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- // Item -->
        <!-- Item -->
        <div class=\"item item-3\">
            <div class=\"img-fill\">
                <div class=\"image\"></div>
                <div class=\"info\">
                    <div>
                        <h1>Les choix
                            <br>que vous faites</h1>
                        <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices <br>posuere cubilia Curae; Sed at massa turpis.</p>

                        <div class=\"white-button button\">
                            <a href=\"#featured\">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- // Item -->
    </div>
</div>


<div class=\"page-content\">
    <section id=\"featured\" class=\"content-section\">

        <div class=\"section-heading\">
            <h1>Featured<br><em>Places</em></h1>
            <p>Praesent pellentesque efficitur magna,
                <br>sed pellentesque neque malesuada vitae.</p>
        </div>

        <div class=\"section-content\">
            <div class=\"owl-carousel owl-theme\">
                <div class=\"item\">
                    <div class=\"image\">
                        <img src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/featured_1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"featured-button button\">

                            <a href=\"#projects\">Continue Reading</a>
                        </div>
                    </div>
                    <div class=\"text-content\">
                        <h4>Lorem ipsum dolor</h4>
                        <span>Proin et sapien</span>
                        <p>#1 You are allowed to use Sentra Template for your business or client websites. You can use it for commercial or non-commercial or educational purposes.</p>
                    </div>
                </div>
                <div class=\"item\">
                    <div class=\"image\">
                        <img src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/featured_2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"featured-button button\">
                            <a href=\"#projects\">Continue Reading</a>
                        </div>
                    </div>
                    <div class=\"text-content\">
                        <h4>Phasellus a lacus ac odio</h4>
                        <span>Maximus</span>
                        <p>#2 You are NOT allowed to re-distribute this on any template website. You <strong>can post</strong> a screenshot and a link back to original template page on your blog or site. Thank you.</p>
                    </div>
                </div>
                <div class=\"item\">
                    <div class=\"image\">
                        <img src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/featured_3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"featured-button button\">
                            <a href=\"#projects\">Continue Reading</a>
                        </div>
                    </div>
                    <div class=\"text-content\">
                        <h4>Proin sit amet fringilla</h4>
                        <span>Vulputate</span>
                        <p>#3 Aliquam mollis lacus eget metus efficitur lobortis. Suspendisse libero lacus, accumsan vitae commodo tristique, luctus gravida metus.</p>
                    </div>
                </div>
                <div class=\"item\">
                    <div class=\"image\">
                        <img src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/featured_2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"featured-button button\">
                            <a href=\"#projects\">Continue Reading</a>
                        </div>
                    </div>
                    <div class=\"text-content\">
                        <h4>In volutpat augue lectus</h4>
                        <span>Elementum</span>
                        <p>#4 Aliquam mollis lacus eget metus efficitur lobortis. Suspendisse libero lacus, accumsan vitae commodo tristique, luctus gravida metus.</p>
                    </div>
                </div>
                <div class=\"item\">
                    <div class=\"image\">
                        <img src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/featured_1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"featured-button button\">
                            <a href=\"#projects\">Continue Reading</a>
                        </div>
                    </div>
                    <div class=\"text-content\">
                        <h4>Cras commodo odio</h4>
                        <span>Aliquam</span>
                        <p>#5 Mauris lacinia pretium libero, ut tincidunt lacus molestie ornare. Phasellus a facilisis erat. Praesent eleifend nibh mauris, quis sodales lorem convallis pulvinar.</p>
                    </div>
                </div>
                <div class=\"item\">
                    <div class=\"image\">
                        <img src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/featured_3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"featured-button button\">
                            <a href=\"#projects\">Continue Reading</a>
                        </div>
                    </div>
                    <div class=\"text-content\">
                        <h4>Sed at massa turpis</h4>
                        <span>Curabitur</span>
                        <p>#6 Vestibulum tincidunt ornare ligula vel molestie. Curabitur hendrerit mauris mollis ipsum vulputate rutrum. Phasellus luctus odio eget dui imperdiet.</p>
                    </div>
                </div>
                <div class=\"item\">
                    <div class=\"image\">
                        <img src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/featured_2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"featured-button button\">
                            <a href=\"#projects\">Continue Reading</a>
                        </div>
                    </div>
                    <div class=\"text-content\">
                        <h4>Aliquam mollis lacus</h4>
                        <span>Suspendisse</span>
                        <p>#7 Suspendisse suscipit nulla sed nisl fermentum, auctor suscipit nunc rhoncus. Proin faucibus metus diam, nec hendrerit purus pharetra in.</p>
                    </div>
                </div>
                <div class=\"item\">
                    <div class=\"image\">
                        <img src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/featured_1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"featured-button button\">
                            <a href=\"#projects\">Continue Reading</a>
                        </div>
                    </div>
                    <div class=\"text-content\">
                        <h4>Mauris lacinia pretium</h4>
                        <span>Vestibulum</span>
                        <p>#8 Suspendisse suscipit nulla sed nisl fermentum, auctor suscipit nunc rhoncus. Proin faucibus metus diam, nec hendrerit purus pharetra in.</p>
                    </div>
                </div>
                <div class=\"item\">
                    <div class=\"image\">
                        <img src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/featured_3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"featured-button button\">
                            <a href=\"#projects\">Continue Reading</a>
                        </div>
                    </div>
                    <div class=\"text-content\">
                        <h4>Proin sit amet fringilla erat</h4>
                        <span>Convallis</span>
                        <p>#9 Suspendisse suscipit nulla sed nisl fermentum, auctor suscipit nunc rhoncus. Proin faucibus metus diam, nec hendrerit purus pharetra in.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id=\"projects\" class=\"content-section\">
        <div class=\"section-heading\">
            <h1>Recent<br><em>Projects</em></h1>
            <p>Praesent pellentesque efficitur magna,
                <br>sed pellentesque neque malesuada vitae.</p>
        </div>
        <div class=\"section-content\">
            <div class=\"masonry\">
                <div class=\"row\">
                    <div class=\"item\">
                        <div class=\"col-md-8\">
                            <a href=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/portfolio_big_1.jpg"), "html", null, true);
        echo "\" data-lightbox=\"image\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/portfolio_1.jpg"), "html", null, true);
        echo "\" alt=\"image 1\"></a>
                        </div>
                    </div>
                    <div class=\"item second-item\">
                        <div class=\"col-md-4\">
                            <a href=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/portfolio_big_2.jpg"), "html", null, true);
        echo "\" data-lightbox=\"image\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/portfolio_2.jpg"), "html", null, true);
        echo "\" alt=\"image 2\"></a>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"col-md-4\">
                            <a href=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/portfolio_big_3.jpg"), "html", null, true);
        echo "\" data-lightbox=\"image\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/portfolio_3.jpg"), "html", null, true);
        echo "\" alt=\"image 3\"></a>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"col-md-4\">
                            <a href=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/portfolio_big_4.jpg"), "html", null, true);
        echo "\" data-lightbox=\"image\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/portfolio_4.jpg"), "html", null, true);
        echo "\" alt=\"image 4\"></a>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"col-md-8\">
                            <a href=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/portfolio_big_5.jpg"), "html", null, true);
        echo "\" data-lightbox=\"image\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/portfolio_5.jpg"), "html", null, true);
        echo "\" alt=\"image 5\"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id=\"video\" class=\"content-section\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"section-heading\">
                    <h1>This is a <em>company</em> presentation.</h1>
                    <p>Praesent pellentesque efficitur magna, sed pellentesque neque malesuada vitae.</p>
                </div>
                <div class=\"text-content\">
                    <p>In eget ipsum sed lorem vehicula luctus. Curabitur non dolor rhoncus, hendrerit justo sit amet, vestibulum turpis. Pellentesque id auctor tellus, vel ultricies augue. Duis condimentum aliquet blandit. Fusce rhoncus et eros ut pharetra. Phasellus convallis ultricies ligula ac gravida.</p>
                </div>
                <div class=\"accent-button button\">
                    <a href=\"#blog\">Continue Reading</a>
                </div>
            </div>
            <div class=\"col-md-12\">
                <div class=\"box-video\">
                    <div class=\"bg-video\" style=\"background-image: url(https://unsplash.imgix.net/photo-1425036458755-dc303a604201?fit=crop&fm=jpg&q=75&w=1000);\">
                        <div class=\"bt-play\">Play</div>
                    </div>
                    <div class=\"video-container\">
                        <iframe width=\"100%\" height=\"520\" src=\"https://www.youtube.com/embed/j-_7Ub-Zkow?rel=0&amp;showinfo=0\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id=\"blog\" class=\"content-section\">
        <div class=\"section-heading\">
            <h1>Blog<br><em>Entries</em></h1>
            <p>Curabitur hendrerit mauris mollis ipsum vulputate rutrum.
                <br>Phasellus luctus odio eget dui imperdiet.</p>
        </div>
        <div class=\"section-content\">
            <div class=\"tabs-content\">
                <div class=\"wrapper\">
                    <ul class=\"tabs clearfix\" data-tabgroup=\"first-tab-group\">
                        <li><a href=\"#tab1\" class=\"active\">July 2018</a></li>
                        <li><a href=\"#tab2\">June 2018</a></li>
                        <li><a href=\"#tab3\">May 2018</a></li>
                        <li><a href=\"#tab4\">April 2018</a></li>
                    </ul>
                    <section id=\"first-tab-group\" class=\"tabgroup\">
                        <div id=\"tab1\">
                            <ul>
                                <li>
                                    <div class=\"item\">
                                        <img src=\"";
        // line 397
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/blog_1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                        <div class=\"text-content\">
                                            <h4>Integer ultrices augue</h4>
                                            <span>25 July 2018</span>
                                            <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>

                                            <div class=\"accent-button button\">
                                                <a href=\"#contact\">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"item\">
                                        <img src=\"";
        // line 411
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/blog_2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                        <div class=\"text-content\">
                                            <h4>Cras commodo odio ut</h4>
                                            <span>16 July 2018</span>
                                            <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>

                                            <div class=\"accent-button button\">
                                                <a href=\"#contact\">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"item\">
                                        <img src=\"";
        // line 425
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/blog_3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                        <div class=\"text-content\">
                                            <h4>Sed at massa turpis</h4>
                                            <span>10 July 2018</span>
                                            <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>

                                            <div class=\"accent-button button\">
                                                <a href=\"#contact\">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div id=\"tab2\">
                            <ul>
                                <li>
                                    <div class=\"item\">
                                        <img src=\"";
        // line 443
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/blog_3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                        <div class=\"text-content\">
                                            <h4>Sed at massa turpis</h4>
                                            <span>30 June 2018</span>
                                            <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>

                                            <div class=\"accent-button button\">
                                                <a href=\"#contact\">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"item\">
                                        <img src=\"";
        // line 457
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/blog_1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                        <div class=\"text-content\">
                                            <h4>Lorem ipsum dolor sit</h4>
                                            <span>24 June 2018</span>
                                            <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>

                                            <div class=\"accent-button button\">
                                                <a href=\"#contact\">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"item\">
                                        <img src=\"";
        // line 471
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/blog_2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                        <div class=\"text-content\">
                                            <h4>Cras commodo odio ut</h4>
                                            <span>12 June 2018</span>
                                            <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>

                                            <div class=\"accent-button button\">
                                                <a href=\"#contact\">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div id=\"tab3\">
                            <ul>
                                <li>
                                    <div class=\"item\">
                                        <img src=\"";
        // line 489
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/blog_2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                        <div class=\"text-content\">
                                            <h4>Cras commodo odio ut</h4>
                                            <span>26 May 2018</span>
                                            <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>

                                            <div class=\"accent-button button\">
                                                <a href=\"#contact\">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"item\">
                                        <img src=\"";
        // line 503
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/blog_1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                        <div class=\"text-content\">
                                            <h4>Lorem ipsum dolor sit</h4>
                                            <span>22 May 2018</span>
                                            <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>

                                            <div class=\"accent-button button\">
                                                <a href=\"#contact\">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"item\">
                                        <img src=\"";
        // line 517
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/blog_3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                        <div class=\"text-content\">
                                            <h4>Integer ultrices augue</h4>
                                            <span>8 May 2018</span>
                                            <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>

                                            <div class=\"accent-button button\">
                                                <a href=\"#contact\">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div id=\"tab4\">
                            <ul>
                                <li>
                                    <div class=\"item\">
                                        <img src=\"";
        // line 535
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/blog_1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                        <div class=\"text-content\">
                                            <h4>Lorem ipsum dolor sit</h4>
                                            <span>26 April 2018</span>
                                            <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>

                                            <div class=\"accent-button button\">
                                                <a href=\"#contact\">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"item\">
                                        <img src=\"";
        // line 549
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/blog_2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                        <div class=\"text-content\">
                                            <h4>Integer ultrices augue eu</h4>
                                            <span>24 April 2018</span>
                                            <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>

                                            <div class=\"accent-button button\">
                                                <a href=\"#contact\">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"item\">
                                        <img src=\"";
        // line 563
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/blog_2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                        <div class=\"text-content\">
                                            <h4>Cras commodo odio ut</h4>
                                            <span>20 April 2018</span>
                                            <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>

                                            <div class=\"accent-button button\">
                                                <a href=\"#contact\">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <section id=\"contact\" class=\"content-section\">
        <div id=\"map\">

            <!-- How to change your own map point
                   1. Go to Google Maps
                   2. Click on your location point
                   3. Click \"Share\" and choose \"Embed map\" tab
                   4. Copy only URL and paste it within the src=\"\" field below
            -->
            <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1197183.8373802372!2d-1.9415093691103689!3d6.781986417238027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdb96f349e85efd%3A0xb8d1e0b88af1f0f5!2sKumasi+Central+Market!5e0!3m2!1sen!2sth!4v1532967884907\" width=\"100%\" height=\"400px\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
        </div>
        <div id=\"contact-content\">
            <div class=\"section-heading\">
                <h1>Contact<br><em>Sentra</em></h1>
                <p>Curabitur hendrerit mauris mollis ipsum vulputate rutrum.
                    <br>Phasellus luctus odio eget dui imperdiet.</p>

            </div>
            <div class=\"section-content\">
                <form id=\"contact\" action=\"#\" method=\"post\">
                    <div class=\"row\">
                        <div class=\"col-md-4\">
                            <fieldset>
                                <input name=\"name\" type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Your name...\" required=\"\">
                            </fieldset>
                        </div>
                        <div class=\"col-md-4\">
                            <fieldset>
                                <input name=\"email\" type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Your email...\" required=\"\">
                            </fieldset>
                        </div>
                        <div class=\"col-md-4\">
                            <fieldset>
                                <input name=\"subject\" type=\"text\" class=\"form-control\" id=\"subject\" placeholder=\"Subject...\" required=\"\">
                            </fieldset>
                        </div>
                        <div class=\"col-md-12\">
                            <fieldset>
                                <textarea name=\"message\" rows=\"6\" class=\"form-control\" id=\"message\" placeholder=\"Your message...\" required=\"\"></textarea>
                            </fieldset>
                        </div>
                        <div class=\"col-md-12\">
                            <fieldset>
                                <button type=\"submit\" id=\"form-submit\" class=\"btn\">Send Message Now</button>
                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section class=\"footer\">
        <p>Copyright &copy; 2019 Company Name

            . Design: TemplateMo</p>
    </section>
</div>

<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
<script>window.jQuery || document.write('<script src=\"";
        // line 641
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/vendor/jquery-1.11.2.min.js"), "html", null, true);
        echo "\"><\\/script>')</script>

<script src=\"";
        // line 643
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/vendor/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 645
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/plugins.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 646
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/main.js"), "html", null, true);
        echo "\"></script>

<script>
    // Hide Header on on scroll down
    var didScroll;
    var lastScrollTop = 0;
    var delta = 5;
    var navbarHeight = \$('header').outerHeight();

    \$(window).scroll(function(event){
        didScroll = true;
    });

    setInterval(function() {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);

    function hasScrolled() {
        var st = \$(this).scrollTop();

        // Make sure they scroll more than delta
        if(Math.abs(lastScrollTop - st) <= delta)
            return;

        // If they scrolled down and are past the navbar, add class .nav-up.
        // This is necessary so you never see what is \"behind\" the navbar.
        if (st > lastScrollTop && st > navbarHeight){
            // Scroll Down
            \$('header').removeClass('nav-down').addClass('nav-up');
        } else {
            // Scroll Up
            if(st + \$(window).height() < \$(document).height()) {
                \$('header').removeClass('nav-up').addClass('nav-down');
            }
        }

        lastScrollTop = st;
    }
</script>

<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\" type=\"text/javascript\"></script>

</body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Front/front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  818 => 646,  814 => 645,  809 => 643,  804 => 641,  723 => 563,  706 => 549,  689 => 535,  668 => 517,  651 => 503,  634 => 489,  613 => 471,  596 => 457,  579 => 443,  558 => 425,  541 => 411,  524 => 397,  466 => 344,  456 => 339,  446 => 334,  436 => 329,  426 => 324,  398 => 299,  382 => 286,  366 => 273,  350 => 260,  334 => 247,  318 => 234,  302 => 221,  286 => 208,  269 => 194,  123 => 50,  112 => 42,  100 => 34,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '/Front/Front-Base.html.twig' %}

{% block body %}

<body>

<header class=\"nav-down responsive-nav hidden-lg hidden-md\">
    <button type=\"button\" id=\"nav-toggle\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-nav\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
    </button>
    <!--/.navbar-header-->
    <div id=\"main-nav\" class=\"collapse navbar-collapse\">
        <nav>
            <ul class=\"nav navbar-nav\">

                <li><a href=\"#top\">Home</a></li>
                <li><a href=\"#featured\">Featured</a></li>
                <li><a href=\"#projects\">Recent Projects</a></li>
                <li><a href=\"#video\">Presentation</a></li>
                <li><a href=\"#blog\">Blog Entries</a></li>
                <li><a href=\"#contact\">Contact Us</a></li>

            </ul>
        </nav>
    </div>

</header>
<div class=\"sidebar-navigation hidde-sm hidden-xs\">

    <div class=\"logo\">
        <a href=\"{{ path('home') }}\">Travel<em><img src=\"{{ asset('Front/img/travel.png') }}\" width=\"100\" height=\"100\">me</em></a>
    </div>
    <nav>


        <ul>
            <li>
                {#   <h1>{{ block('title') }}</h1>#}
                <a href=\"{{ path('home') }}\">
                    <div class=\"container\">
                        <img src=\"https://img.icons8.com/external-bearicons-gradient-bearicons/100/000000/external-login-call-to-action-bearicons-gradient-bearicons.png\"/>
                    </div>
                </a>
            </li>
            <li>
              {#   <h1>{{ block('title') }}</h1>#}
                <a href=\"#top\">
                    <span class=\"rect\"></span>
                    <span class=\"circle\"></span>
                    Home
                </a>
            </li>
            <li>
                <a href=\"#featured\">
                    <span class=\"rect\"></span>
                    <span class=\"circle\"></span>
                    Featured
                </a>
            </li>
            <li>
                <a href=\"#projects\">
                    <span class=\"rect\"></span>
                    <span class=\"circle\"></span>
                    Recent Work
                </a>
            </li>
            <li>
                <a href=\"#video\">
                    <span class=\"rect\"></span>
                    <span class=\"circle\"></span>
                    Presentation
                </a>
            </li>
            <li>
                <a href=\"#blog\">
                    <span class=\"rect\"></span>
                    <span class=\"circle\"></span>
                    Blog Entires
                </a>
            </li>
            <li>
                <a href=\"#contact\">
                    <span class=\"rect\"></span>
                    <span class=\"circle\"></span>
                    Contact Us
                </a>
            </li>
        </ul>
    </nav>
    <ul class=\"social-icons\">
        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
        <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
        <li><a href=\"#\"><i class=\"fa fa-rss\"></i></a></li>
        <li><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
    </ul>
</div>

<div class=\"slider\">

    <div class=\"Modern-Slider content-section\" id=\"top\">
        <!-- Item -->
        <div class=\"item item-1\">
            <div class=\"img-fill\">
                <div class=\"image\"></div>
                <div class=\"info\">
                    <div>
                        <h1>Voyager
                            <br>pour vivre .</h1>
                        <p>Sentra is free Bootstrap CSS Template by templatemo website.<br>
                            Please share our site link to your friends.</p>
                        <div class=\"white-button button\">
                            <a href=\"#featured\">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Item -->

        <div class=\"item item-4\">
            <div class=\"img-fill\">
                <div class=\"image\"></div>
                <div class=\"info\">
                    <div>
                        <h1>Laisse-toi
                            <br>derrière toi.</h1>
                        <p>Sentra is free Bootstrap CSS Template by templatemo website.<br>
                            Please share our site link to your friends.</p>
                        <div class=\"white-button button\">
                            <a href=\"#featured\">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- // Item -->
        <!-- Item -->
        <div class=\"item item-2\">
            <div class=\"img-fill\">
                <div class=\"image\"></div>
                <div class=\"info\">
                    <div>
                        <h1>Voyager <br>en seule clic </h1>
                        <p>Support templatemo by sharing a link to your friends.
                            <br>Thank you for helping us.</p>

                        <div class=\"white-button button\">
                            <a href=\"#featured\">Share More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- // Item -->
        <!-- Item -->
        <div class=\"item item-3\">
            <div class=\"img-fill\">
                <div class=\"image\"></div>
                <div class=\"info\">
                    <div>
                        <h1>Les choix
                            <br>que vous faites</h1>
                        <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices <br>posuere cubilia Curae; Sed at massa turpis.</p>

                        <div class=\"white-button button\">
                            <a href=\"#featured\">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- // Item -->
    </div>
</div>


<div class=\"page-content\">
    <section id=\"featured\" class=\"content-section\">

        <div class=\"section-heading\">
            <h1>Featured<br><em>Places</em></h1>
            <p>Praesent pellentesque efficitur magna,
                <br>sed pellentesque neque malesuada vitae.</p>
        </div>

        <div class=\"section-content\">
            <div class=\"owl-carousel owl-theme\">
                <div class=\"item\">
                    <div class=\"image\">
                        <img src=\"{{ asset('Front/img/featured_1.jpg') }}\" alt=\"\">
                        <div class=\"featured-button button\">

                            <a href=\"#projects\">Continue Reading</a>
                        </div>
                    </div>
                    <div class=\"text-content\">
                        <h4>Lorem ipsum dolor</h4>
                        <span>Proin et sapien</span>
                        <p>#1 You are allowed to use Sentra Template for your business or client websites. You can use it for commercial or non-commercial or educational purposes.</p>
                    </div>
                </div>
                <div class=\"item\">
                    <div class=\"image\">
                        <img src=\"{{ asset('Front/img/featured_2.jpg') }}\" alt=\"\">
                        <div class=\"featured-button button\">
                            <a href=\"#projects\">Continue Reading</a>
                        </div>
                    </div>
                    <div class=\"text-content\">
                        <h4>Phasellus a lacus ac odio</h4>
                        <span>Maximus</span>
                        <p>#2 You are NOT allowed to re-distribute this on any template website. You <strong>can post</strong> a screenshot and a link back to original template page on your blog or site. Thank you.</p>
                    </div>
                </div>
                <div class=\"item\">
                    <div class=\"image\">
                        <img src=\"{{ asset('Front/img/featured_3.jpg') }}\" alt=\"\">
                        <div class=\"featured-button button\">
                            <a href=\"#projects\">Continue Reading</a>
                        </div>
                    </div>
                    <div class=\"text-content\">
                        <h4>Proin sit amet fringilla</h4>
                        <span>Vulputate</span>
                        <p>#3 Aliquam mollis lacus eget metus efficitur lobortis. Suspendisse libero lacus, accumsan vitae commodo tristique, luctus gravida metus.</p>
                    </div>
                </div>
                <div class=\"item\">
                    <div class=\"image\">
                        <img src=\"{{ asset('Front/img/featured_2.jpg') }}\" alt=\"\">
                        <div class=\"featured-button button\">
                            <a href=\"#projects\">Continue Reading</a>
                        </div>
                    </div>
                    <div class=\"text-content\">
                        <h4>In volutpat augue lectus</h4>
                        <span>Elementum</span>
                        <p>#4 Aliquam mollis lacus eget metus efficitur lobortis. Suspendisse libero lacus, accumsan vitae commodo tristique, luctus gravida metus.</p>
                    </div>
                </div>
                <div class=\"item\">
                    <div class=\"image\">
                        <img src=\"{{ asset('Front/img/featured_1.jpg') }}\" alt=\"\">
                        <div class=\"featured-button button\">
                            <a href=\"#projects\">Continue Reading</a>
                        </div>
                    </div>
                    <div class=\"text-content\">
                        <h4>Cras commodo odio</h4>
                        <span>Aliquam</span>
                        <p>#5 Mauris lacinia pretium libero, ut tincidunt lacus molestie ornare. Phasellus a facilisis erat. Praesent eleifend nibh mauris, quis sodales lorem convallis pulvinar.</p>
                    </div>
                </div>
                <div class=\"item\">
                    <div class=\"image\">
                        <img src=\"{{ asset('Front/img/featured_3.jpg') }}\" alt=\"\">
                        <div class=\"featured-button button\">
                            <a href=\"#projects\">Continue Reading</a>
                        </div>
                    </div>
                    <div class=\"text-content\">
                        <h4>Sed at massa turpis</h4>
                        <span>Curabitur</span>
                        <p>#6 Vestibulum tincidunt ornare ligula vel molestie. Curabitur hendrerit mauris mollis ipsum vulputate rutrum. Phasellus luctus odio eget dui imperdiet.</p>
                    </div>
                </div>
                <div class=\"item\">
                    <div class=\"image\">
                        <img src=\"{{ asset('Front/img/featured_2.jpg') }}\" alt=\"\">
                        <div class=\"featured-button button\">
                            <a href=\"#projects\">Continue Reading</a>
                        </div>
                    </div>
                    <div class=\"text-content\">
                        <h4>Aliquam mollis lacus</h4>
                        <span>Suspendisse</span>
                        <p>#7 Suspendisse suscipit nulla sed nisl fermentum, auctor suscipit nunc rhoncus. Proin faucibus metus diam, nec hendrerit purus pharetra in.</p>
                    </div>
                </div>
                <div class=\"item\">
                    <div class=\"image\">
                        <img src=\"{{ asset('Front/img/featured_1.jpg') }}\" alt=\"\">
                        <div class=\"featured-button button\">
                            <a href=\"#projects\">Continue Reading</a>
                        </div>
                    </div>
                    <div class=\"text-content\">
                        <h4>Mauris lacinia pretium</h4>
                        <span>Vestibulum</span>
                        <p>#8 Suspendisse suscipit nulla sed nisl fermentum, auctor suscipit nunc rhoncus. Proin faucibus metus diam, nec hendrerit purus pharetra in.</p>
                    </div>
                </div>
                <div class=\"item\">
                    <div class=\"image\">
                        <img src=\"{{ asset('Front/img/featured_3.jpg') }}\" alt=\"\">
                        <div class=\"featured-button button\">
                            <a href=\"#projects\">Continue Reading</a>
                        </div>
                    </div>
                    <div class=\"text-content\">
                        <h4>Proin sit amet fringilla erat</h4>
                        <span>Convallis</span>
                        <p>#9 Suspendisse suscipit nulla sed nisl fermentum, auctor suscipit nunc rhoncus. Proin faucibus metus diam, nec hendrerit purus pharetra in.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id=\"projects\" class=\"content-section\">
        <div class=\"section-heading\">
            <h1>Recent<br><em>Projects</em></h1>
            <p>Praesent pellentesque efficitur magna,
                <br>sed pellentesque neque malesuada vitae.</p>
        </div>
        <div class=\"section-content\">
            <div class=\"masonry\">
                <div class=\"row\">
                    <div class=\"item\">
                        <div class=\"col-md-8\">
                            <a href=\"{{ asset('Front/img/portfolio_big_1.jpg') }}\" data-lightbox=\"image\"><img src=\"{{ asset('Front/img/portfolio_1.jpg') }}\" alt=\"image 1\"></a>
                        </div>
                    </div>
                    <div class=\"item second-item\">
                        <div class=\"col-md-4\">
                            <a href=\"{{ asset('Front/img/portfolio_big_2.jpg') }}\" data-lightbox=\"image\"><img src=\"{{ asset('Front/img/portfolio_2.jpg') }}\" alt=\"image 2\"></a>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"col-md-4\">
                            <a href=\"{{ asset('Front/img/portfolio_big_3.jpg') }}\" data-lightbox=\"image\"><img src=\"{{ asset('Front/img/portfolio_3.jpg') }}\" alt=\"image 3\"></a>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"col-md-4\">
                            <a href=\"{{ asset('Front/img/portfolio_big_4.jpg') }}\" data-lightbox=\"image\"><img src=\"{{ asset('Front/img/portfolio_4.jpg') }}\" alt=\"image 4\"></a>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"col-md-8\">
                            <a href=\"{{ asset('Front/img/portfolio_big_5.jpg') }}\" data-lightbox=\"image\"><img src=\"{{ asset('Front/img/portfolio_5.jpg') }}\" alt=\"image 5\"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id=\"video\" class=\"content-section\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"section-heading\">
                    <h1>This is a <em>company</em> presentation.</h1>
                    <p>Praesent pellentesque efficitur magna, sed pellentesque neque malesuada vitae.</p>
                </div>
                <div class=\"text-content\">
                    <p>In eget ipsum sed lorem vehicula luctus. Curabitur non dolor rhoncus, hendrerit justo sit amet, vestibulum turpis. Pellentesque id auctor tellus, vel ultricies augue. Duis condimentum aliquet blandit. Fusce rhoncus et eros ut pharetra. Phasellus convallis ultricies ligula ac gravida.</p>
                </div>
                <div class=\"accent-button button\">
                    <a href=\"#blog\">Continue Reading</a>
                </div>
            </div>
            <div class=\"col-md-12\">
                <div class=\"box-video\">
                    <div class=\"bg-video\" style=\"background-image: url(https://unsplash.imgix.net/photo-1425036458755-dc303a604201?fit=crop&fm=jpg&q=75&w=1000);\">
                        <div class=\"bt-play\">Play</div>
                    </div>
                    <div class=\"video-container\">
                        <iframe width=\"100%\" height=\"520\" src=\"https://www.youtube.com/embed/j-_7Ub-Zkow?rel=0&amp;showinfo=0\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id=\"blog\" class=\"content-section\">
        <div class=\"section-heading\">
            <h1>Blog<br><em>Entries</em></h1>
            <p>Curabitur hendrerit mauris mollis ipsum vulputate rutrum.
                <br>Phasellus luctus odio eget dui imperdiet.</p>
        </div>
        <div class=\"section-content\">
            <div class=\"tabs-content\">
                <div class=\"wrapper\">
                    <ul class=\"tabs clearfix\" data-tabgroup=\"first-tab-group\">
                        <li><a href=\"#tab1\" class=\"active\">July 2018</a></li>
                        <li><a href=\"#tab2\">June 2018</a></li>
                        <li><a href=\"#tab3\">May 2018</a></li>
                        <li><a href=\"#tab4\">April 2018</a></li>
                    </ul>
                    <section id=\"first-tab-group\" class=\"tabgroup\">
                        <div id=\"tab1\">
                            <ul>
                                <li>
                                    <div class=\"item\">
                                        <img src=\"{{ asset('Front/img/blog_1.jpg') }}\" alt=\"\">
                                        <div class=\"text-content\">
                                            <h4>Integer ultrices augue</h4>
                                            <span>25 July 2018</span>
                                            <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>

                                            <div class=\"accent-button button\">
                                                <a href=\"#contact\">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"item\">
                                        <img src=\"{{ asset('Front/img/blog_2.jpg') }}\" alt=\"\">
                                        <div class=\"text-content\">
                                            <h4>Cras commodo odio ut</h4>
                                            <span>16 July 2018</span>
                                            <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>

                                            <div class=\"accent-button button\">
                                                <a href=\"#contact\">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"item\">
                                        <img src=\"{{ asset('Front/img/blog_3.jpg') }}\" alt=\"\">
                                        <div class=\"text-content\">
                                            <h4>Sed at massa turpis</h4>
                                            <span>10 July 2018</span>
                                            <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>

                                            <div class=\"accent-button button\">
                                                <a href=\"#contact\">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div id=\"tab2\">
                            <ul>
                                <li>
                                    <div class=\"item\">
                                        <img src=\"{{ asset('Front/img/blog_3.jpg') }}\" alt=\"\">
                                        <div class=\"text-content\">
                                            <h4>Sed at massa turpis</h4>
                                            <span>30 June 2018</span>
                                            <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>

                                            <div class=\"accent-button button\">
                                                <a href=\"#contact\">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"item\">
                                        <img src=\"{{ asset('Front/img/blog_1.jpg') }}\" alt=\"\">
                                        <div class=\"text-content\">
                                            <h4>Lorem ipsum dolor sit</h4>
                                            <span>24 June 2018</span>
                                            <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>

                                            <div class=\"accent-button button\">
                                                <a href=\"#contact\">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"item\">
                                        <img src=\"{{ asset('Front/img/blog_2.jpg') }}\" alt=\"\">
                                        <div class=\"text-content\">
                                            <h4>Cras commodo odio ut</h4>
                                            <span>12 June 2018</span>
                                            <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>

                                            <div class=\"accent-button button\">
                                                <a href=\"#contact\">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div id=\"tab3\">
                            <ul>
                                <li>
                                    <div class=\"item\">
                                        <img src=\"{{ asset('Front/img/blog_2.jpg') }}\" alt=\"\">
                                        <div class=\"text-content\">
                                            <h4>Cras commodo odio ut</h4>
                                            <span>26 May 2018</span>
                                            <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>

                                            <div class=\"accent-button button\">
                                                <a href=\"#contact\">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"item\">
                                        <img src=\"{{ asset('Front/img/blog_1.jpg') }}\" alt=\"\">
                                        <div class=\"text-content\">
                                            <h4>Lorem ipsum dolor sit</h4>
                                            <span>22 May 2018</span>
                                            <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>

                                            <div class=\"accent-button button\">
                                                <a href=\"#contact\">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"item\">
                                        <img src=\"{{ asset('Front/img/blog_3.jpg') }}\" alt=\"\">
                                        <div class=\"text-content\">
                                            <h4>Integer ultrices augue</h4>
                                            <span>8 May 2018</span>
                                            <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>

                                            <div class=\"accent-button button\">
                                                <a href=\"#contact\">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div id=\"tab4\">
                            <ul>
                                <li>
                                    <div class=\"item\">
                                        <img src=\"{{ asset('Front/img/blog_1.jpg') }}\" alt=\"\">
                                        <div class=\"text-content\">
                                            <h4>Lorem ipsum dolor sit</h4>
                                            <span>26 April 2018</span>
                                            <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>

                                            <div class=\"accent-button button\">
                                                <a href=\"#contact\">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"item\">
                                        <img src=\"{{ asset('Front/img/blog_2.jpg') }}\" alt=\"\">
                                        <div class=\"text-content\">
                                            <h4>Integer ultrices augue eu</h4>
                                            <span>24 April 2018</span>
                                            <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>

                                            <div class=\"accent-button button\">
                                                <a href=\"#contact\">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"item\">
                                        <img src=\"{{ asset('Front/img/blog_2.jpg') }}\" alt=\"\">
                                        <div class=\"text-content\">
                                            <h4>Cras commodo odio ut</h4>
                                            <span>20 April 2018</span>
                                            <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>

                                            <div class=\"accent-button button\">
                                                <a href=\"#contact\">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <section id=\"contact\" class=\"content-section\">
        <div id=\"map\">

            <!-- How to change your own map point
                   1. Go to Google Maps
                   2. Click on your location point
                   3. Click \"Share\" and choose \"Embed map\" tab
                   4. Copy only URL and paste it within the src=\"\" field below
            -->
            <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1197183.8373802372!2d-1.9415093691103689!3d6.781986417238027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdb96f349e85efd%3A0xb8d1e0b88af1f0f5!2sKumasi+Central+Market!5e0!3m2!1sen!2sth!4v1532967884907\" width=\"100%\" height=\"400px\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
        </div>
        <div id=\"contact-content\">
            <div class=\"section-heading\">
                <h1>Contact<br><em>Sentra</em></h1>
                <p>Curabitur hendrerit mauris mollis ipsum vulputate rutrum.
                    <br>Phasellus luctus odio eget dui imperdiet.</p>

            </div>
            <div class=\"section-content\">
                <form id=\"contact\" action=\"#\" method=\"post\">
                    <div class=\"row\">
                        <div class=\"col-md-4\">
                            <fieldset>
                                <input name=\"name\" type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Your name...\" required=\"\">
                            </fieldset>
                        </div>
                        <div class=\"col-md-4\">
                            <fieldset>
                                <input name=\"email\" type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Your email...\" required=\"\">
                            </fieldset>
                        </div>
                        <div class=\"col-md-4\">
                            <fieldset>
                                <input name=\"subject\" type=\"text\" class=\"form-control\" id=\"subject\" placeholder=\"Subject...\" required=\"\">
                            </fieldset>
                        </div>
                        <div class=\"col-md-12\">
                            <fieldset>
                                <textarea name=\"message\" rows=\"6\" class=\"form-control\" id=\"message\" placeholder=\"Your message...\" required=\"\"></textarea>
                            </fieldset>
                        </div>
                        <div class=\"col-md-12\">
                            <fieldset>
                                <button type=\"submit\" id=\"form-submit\" class=\"btn\">Send Message Now</button>
                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section class=\"footer\">
        <p>Copyright &copy; 2019 Company Name

            . Design: TemplateMo</p>
    </section>
</div>

<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
<script>window.jQuery || document.write('<script src=\"{{ asset('Front/js/vendor/jquery-1.11.2.min.js')}}\"><\\/script>')</script>

<script src=\"{{ asset('Front/js/vendor/bootstrap.min.js')}}\"></script>

<script src=\"{{ asset('Front/js/plugins.js')}}\"></script>
<script src=\"{{ asset('Front/js/main.js')}}\"></script>

<script>
    // Hide Header on on scroll down
    var didScroll;
    var lastScrollTop = 0;
    var delta = 5;
    var navbarHeight = \$('header').outerHeight();

    \$(window).scroll(function(event){
        didScroll = true;
    });

    setInterval(function() {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);

    function hasScrolled() {
        var st = \$(this).scrollTop();

        // Make sure they scroll more than delta
        if(Math.abs(lastScrollTop - st) <= delta)
            return;

        // If they scrolled down and are past the navbar, add class .nav-up.
        // This is necessary so you never see what is \"behind\" the navbar.
        if (st > lastScrollTop && st > navbarHeight){
            // Scroll Down
            \$('header').removeClass('nav-down').addClass('nav-up');
        } else {
            // Scroll Up
            if(st + \$(window).height() < \$(document).height()) {
                \$('header').removeClass('nav-up').addClass('nav-down');
            }
        }

        lastScrollTop = st;
    }
</script>

<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\" type=\"text/javascript\"></script>

</body>
</html>
{% endblock %}", "Front/front.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\Front\\front.html.twig");
    }
}
