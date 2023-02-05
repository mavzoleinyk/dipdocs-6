<?php
/*
 * This is the child theme for Total theme, generated with Generate Child Theme plugin by catchthemes.
 *
 * (Please see https://developer.wordpress.org/themes/advanced-topics/child-themes/#how-to-create-a-child-theme)
 */
add_action( 'wp_enqueue_scripts', 'rusdocs_enqueue_styles' );
function rusdocs_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    wp_enqueue_style( 'bootstrap-theme', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css', array('parent-style'));
    wp_enqueue_style( 'font-icons', get_stylesheet_directory_uri() . '/assets/css/font-icons.css', array('parent-style'));
    wp_enqueue_style( 'theme-style', get_stylesheet_directory_uri() . '/assets/css/theme-style.css', array('parent-style'));
    //wp_enqueue_style( 'theme-style-color', get_stylesheet_directory_uri() . '/assets/css/cyan.css', array('parent-style'));
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));

    //wp_enqueue_script('bootstrap-theme', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), false, true);
    //wp_enqueue_script('flickity-js', get_stylesheet_directory_uri() . '/assets/js/flickity.pkgd.min.js', array('jquery'), false, true);
    //wp_enqueue_script('easing-js', get_stylesheet_directory_uri() . '/assets/js/easing.min.js', array('jquery'), false, true);
    //wp_enqueue_script('owl-carousel-js', get_stylesheet_directory_uri() . '/assets/js/owl-carousel.min.js', array('jquery'), false, true);
    wp_enqueue_script('modernizr-js', get_stylesheet_directory_uri() . '/assets/js/modernizr.min.js', array('jquery'), false, true);
    wp_enqueue_script('calc_script-js', get_stylesheet_directory_uri() . '/assets/js/calc_script.js', array('jquery'), false, true);
    wp_enqueue_script('scripts-js', get_stylesheet_directory_uri() . '/assets/js/scripts.js', array('jquery'), false, true);
}
/*
 * Your code goes below
*/

//  Actions
add_action( 'widgets_init', 'cust_widgets' );


// Some weare
function cust_widgets(){
    register_sidebar([
        'name' => 'Виджет для размещения копирайта',
        'id' => 'cust_footer_1',
        'before_widget' => null,
        'after_widget' => null,
    ]);
    register_sidebar([
        'name' => 'Сайдбар блок 1',
        'id' => 'cust_sidebar_1',
        'before_widget' => null,
        'after_widget' => null,
    ]);
    register_sidebar([
        'name' => 'Сайдбар блок 2',
        'id' => 'cust_sidebar_2',
		'before_widget' => '<aside id="%1$s" class="footer-widget widget widget__custom-block %2$s clr">',
		'after_widget'  => '</aside>',
		'before_title'  => '<p class="widget-title">',
		'after_title'   => '</p>',
    ]);
}

function mw_faqhook_page_1669130561362() { 
    if(is_page ("10712")){ 
    ?> 
    <script type="application/ld+json">{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"Что такое “единый реестр дипломов России” и может ли работдатель проверить изготовленный диплом, отправив туда запрос?","acceptedAnswer":[{"@type":"Answer","text":"Общего реестра для дипломов ВУЗа и похожего сервиса в России на сегодняшний день не существует, поэтому потенциальный работодатель не сможет им воспользоваться. Проверить подлинность документа можно только одним способом — направить запрос в университет, на чьё имя выдан диплом, и дождаться ответа. Если сертификат или диплом выдан на имя университета, на данный момент ликвидированного или утратившего архивы, то опровергнуть его выдачу также будет нельзя."}]},{"@type":"Question","name":"Часто ли проверяют диплом при приёме на работу?","acceptedAnswer":[{"@type":"Answer","text":"Обычно подобная процедура — чистая формальность, и работодатель оценивает не столько образование, сколько нужные навыки потенциального работника. Как мы уже указывали выше, для проверки диплома нужно направлять письменный запрос в соответствующий ВУЗ, что занимает достаточно много сил и времени. Поэтому подобную процедуру по большей части считают чистой формальностью и либо не уделяют ей настолько пристальное внимание, либо вовсе игнорируют."}]},{"@type":"Question","name":"Какую информацию в дипломе заполняет сам клиент, а какую компания? Что можно изменить самостоятельно?","acceptedAnswer":[{"@type":"Answer","text":"Наша компания предлагает удобный формат онлайн-заявки, в которой нужно самостоятельно указать основные сведения о будущем документе, а также вписать уточнения и комментарии. Впоследствии это будет обсуждаться с менеджером, что позволит вам выбрать любой ВУЗ на территории России, специальность в рамках учебного заведения, предметы, тему курсовой работы и оценки. Более подробно об этом вы можете узнать непосредственно при заказе документа."}]},{"@type":"Question","name":"Занимается ли компания изготовлением диплома государственного образца?","acceptedAnswer":[{"@type":"Answer","text":"Да. Наша компания может изготовить диплом государственного образца с соблюдением всех тонкостей и особенностей номенклатуры при условии наличия скана или копии подобного документа. При этом все бланки и мокрые печати будут полностью соответствовать настоящим."}]},{"@type":"Question","name":"какое время можно выбрать в рамках заказа диплома?","acceptedAnswer":[{"@type":"Answer","text":"Наша компания предлагает заказать диплом на любое время — как на прошлое так и на будущее. многие тонкости заполнения и возможностей зависят от конкретного заказа и выбранного ВУЗа, однако в большинстве случаев возможно указать практически любой год. Единственное ограничение касается дипломов с опережением — они могут быть изготовлены только в рамках одного года от текущей даты."}]},{"@type":"Question","name":"Что гарантирует компания?","acceptedAnswer":[{"@type":"Answer","text":"Наша компания предоставляет гарантии на полное соответствие изготовленных документов вне зависимости от их сложности, а также их высочайшее качество. при этом каждый этап работы максимально прозрачен — о ходе изготовления мы всегда сообщаем клиенту по первому запросу. За счёт доступа к большой базе информации, наши специалисты могут предоставить дипломы из любого ВУЗа России без каких-либо проблем, а за счёт большого опыта сделать это быстро, качественно и не вызывая вопросы у комиссий проверки. Также мы предлагаем систему оплаты по факту получения, с дипломом на руках, без предварительного перечисления суммы.."}]},{"@type":"Question","name":"Как долго изготавливается и доставляется диплом?","acceptedAnswer":[{"@type":"Answer","text":"Большинство документов изготавливается в течение 2-3 дней благодаря охлажденному циклу производства и профессионализму специалистов. Остальные сроки — это доставка, которая зависит от многих факторов, таких как расстояние, город и другие особенности. Мы находим оптимальные логистические решения для каждого клиента, однако среднего значения тут нет — подобные сроки рассчитываются индивидуально с каждым на стадии принятия заказа."}]},{"@type":"Question","name":"Что делать, если в дипломе есть опечатки?","acceptedAnswer":[{"@type":"Answer","text":"Наши специалисты тщательно относятся к проверке макета и конечного диплома, поэтому максимально сокращают количество любых ошибок. Если же такая опечатка действительно попала в документ, это является основанием для его полной замены. свяжитесь с нами по указанному телефону или онлайн, и мы заменим документ с ошибкой на новый полностью бесплатно."}]},{"@type":"Question","name":"Является ли вкладыш с оценками обязательным приложением к диплому?","acceptedAnswer":[{"@type":"Answer","text":"Да. Официально документ о высшем образовании состоит из двух частей — самого диплома и приложения к нему в виде данного вкладыша с оценками по всем предметам. Наша компания изготавливает их как в комплекте, так и отдельно, в зависимости от запроса клиента."}]},{"@type":"Question","name":"По какому принципу выбираются темы дипломных работ?","acceptedAnswer":[{"@type":"Answer","text":"Наша компания тщательно изучает ВУЗ и специальность, после чего выбирает тему дипломной работы из доступного перечня, соответствующего реальности. Также желаемую тему можно указать и клиент — если она будет соответствовать специальности, мы учтём это пожелание и проверим на стадии изготовления макета."}]}]}</script><!-- Generated by https://www.matthewwoodward.co.uk/ --> 
    <?php 
    } 
} 
add_action("wp_head", "mw_faqhook_page_1669130561362");


//Shortcods
add_shortcode( 'si-section-action', 'si_section_action' );
function si_section_action( $attr ){
    $params = shortcode_atts([
        'text' => '',
    ], $attr);

    return '<section class="section actions-posts mt-40 mb-0" style="background: url(https://rus-docs.com/wp-content/themes/rusdocs/assets/img/content-action-bg.jpg); background-repeat: no-repeat;background-position: center top;">
    <div class="content-action">
      <div class="content-action-title">Наша компания предлагает следующие скидки и акции:</div>
      <div class="content-action-container">
        <div class="content-action-item">При заказе двух и более дипломов за раз мы предоставляем скидку на 2000 рублей на каждый документ.</div>
        <div class="content-action-item">Бонусы для постоянных клиентов - обращаясь в нашу компанию повторно, вы также получите скидку в 2000 рублей на следующий заказ.</div>
        <div class="content-action-item">Уникальный шанс сэкономить в свой день рождения - получите скидку в 1000 рублей на заказ за три дня до и три дня после указанной даты с подтверждением.</div>
      </div>
    </div>
  </section>';
}

// Отключаем любые CSS стили плагинов
// function custom_dequeue() {
//     wp_dequeue_style('wpex-style');
//     wp_dequeue_style('tablepress-default');
//     wp_dequeue_style('wpex-tablepress');
//     wp_dequeue_style('mediaelement');
//     wp_dequeue_style('wp-mediaelement');
//     wp_dequeue_style('');
//     wp_dequeue_style('');
//     wp_dequeue_style('wpex-mobile-menu-breakpoint-max');
//     wp_dequeue_style('wpex-mobile-menu-breakpoint-min');
//     wp_dequeue_style('');
//     wp_dequeue_style('ticons');
//     wp_dequeue_style('');
//     wp_dequeue_style('');
//     if ( is_page(10) ) {
// 		wp_dequeue_style( 'wpcdt-public-css' );
//         wp_dequeue_style( 'vcex-shortcodes' );
//         wp_dequeue_style( '' );
// 	}
// }
// add_action( 'wp_enqueue_scripts', 'custom_dequeue', 9999 );

//Отключаем любые js скрипты
// function project_dequeue_unnecessary_scripts() {
//     wp_deregister_script('mediaelement-core');
//     wp_deregister_script('mediaelement-migrate');
//     wp_deregister_script('wp-mediaelement');
//     wp_deregister_script('mediaelement-vimeo');
//     wp_deregister_script('');
//     wp_deregister_script('');
//     wp_deregister_script('sidr');
//     wp_deregister_script('hoverintent');
//     wp_deregister_script('supersubs');
//     wp_deregister_script('superfish');
//     wp_deregister_script('easing');
//     if ( is_page(10) ) {
// 		wp_dequeue_script( '' );
//         wp_dequeue_script( 'image_zoooom' );
//         wp_dequeue_script( 'image_zoooom-init' );
//         wp_dequeue_script( '' );
// 	}
// }
// add_action( 'wp_print_scripts', 'project_dequeue_unnecessary_scripts', 9999 );

/**
 * Изменяет хлебные крошки Yoast.
 *
 * Вывести в шаблоне: do_action('pretty_breadcrumb');
 * https://wp-kama.ru/plugin/yoast/kak-izmenit-vyorstku-hlebnyh-kroshek-yoast-na-svoyu
 */
class Pretty_Breadcrumb
{

    /**
     * Какую позицию занимает элемент в цепочке хлебных крошек.
     *
     * @var int
     */
    private $el_position = 0;

    public function __construct()
    {
        add_action('pretty_breadcrumb', [$this, 'render']);
    }

    /**
     * Выводит на экран сгенерированные крошки.
     *
     * @return void
     */
    public function render()
    {
        if (!function_exists('yoast_breadcrumb')) {
            return;
        }

        // Регистрируем фильтры для изменения дефолтной вёрстки крошек
        add_filter('wpseo_breadcrumb_single_link', [$this, 'modify_yoast_items'], 10, 2);
        add_filter('wpseo_breadcrumb_output', [$this, 'modify_yoast_output']);
        add_filter('wpseo_breadcrumb_output_wrapper', [$this, 'modify_yoast_wrapper']);
        add_filter('wpseo_breadcrumb_separator', '__return_empty_string');

        // Выводим крошки на экран
        yoast_breadcrumb();

        // Отключаем фильтры
        remove_filter('wpseo_breadcrumb_single_link', [$this, 'modify_yoast_items']);
        remove_filter('wpseo_breadcrumb_output', [$this, 'modify_yoast_output']);
        remove_filter('wpseo_breadcrumb_output_wrapper', [$this, 'modify_yoast_wrapper']);
        remove_filter('wpseo_breadcrumb_separator', '__return_empty_string');

        // Обнуляем счётчик
        $this->el_position = 0;
    }

    /**
     * Изменяет html код li элементов.
     *
     * @param string $link_html Дефолтная вёрстка элемента хлебных крошек.
     * @param array $link_data Массив данных об элементе хлебных крошек.
     *
     * @return string
     */
    function modify_yoast_items($link_html, $link_data)
    {
        // Шаблон контейнера li
        $li = '<span itemprop="itemListElement" itemscope="itemscope" itemtype="https://schema.org/ListItem" %s>%s</span>';

        // Содержимое li в зависимости от позиции элемента
        if (strpos($link_html, 'breadcrumb_last') === false) {
            $li_inner = sprintf('
                <a itemprop="item" href="%s" class="pathway">
                    <span itemprop="name">%s</span>
                </a>
            ', $link_data['url'], $link_data['text']);
            $li_inner .= '<span class="divider"> / </span>';
            $li_class = '';
        } else {
            $li_inner = sprintf('<span itemprop="name">%s</span>', $link_data['text']);
            $li_class = 'class="active"';
        }

        $li_inner .= sprintf('<meta itemprop="position" content="%d"/>', ++$this->el_position);

        // Вкладываем сформированное содержание в li и возвращаем полученный элемент хлебных крошек.
        return sprintf($li, $li_class, $li_inner);
    }

    /**
     * Возвращает псевдо wrapper, который в будущем будет вырезан из вёрстки.
     * Если этого не сделать, то будущие li будут обёртнуты в единый span Yoast'ом.
     *
     * @return string
     */
    function modify_yoast_wrapper()
    {
        return 'wrapper'; // Будущий "уникальный" тег для вырезки из html
    }

    /**
     * Изменяет дефолтный html код крошек Yoast.
     *
     * @param string $html
     *
     * @return string
     */
    function modify_yoast_output($html)
    {
        // Убираем псевдо wrapper
        $html = str_replace(['<wrapper>', '</wrapper>'], '', $html);

        // Формируем контейнер для li элементов
        $ul = '<nav itemscope="itemscope" itemtype="https://schema.org/BreadcrumbList" class="breadcrumb site-breadcrumbs wpex-clr hidden-phone position-absolute has-js-fix">%s</nav>';

        // Вставляем в контейнер li элменты
        $html = sprintf($ul, $html);

        return $html;
    }
}

new Pretty_Breadcrumb();