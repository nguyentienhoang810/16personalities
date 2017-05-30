<?php
    require 'vendor/autoload.php';
    use GuzzleHttp\Client;
    use Sunra\PhpSimple\HtmlDomParser;

    // Send request to site
    $client = new Client(['cookies' => true]);
    $data = $_REQUEST;
    $data['options'] = 'on';
    $url = 'https://www.16personalities.com/ja/テスト結果';

    $res = $client->request('POST', $url, ['form_params' => $data]);
    $html = (string) $res->getBody();

    // Create a DOM object and parse DOM
    $parser = HtmlDomParser::str_get_html($html);
    // echo $html;
    // var_dump($parser);
    // die();

    // Japanese
    $results = $parser->find('.type-description', 0);
    $result = $results->children(0)->outertext;
    $text = $results->children(1)->outertext;
    $celebrities = $results->find('.celebrity-list', 0)->outertext;

    // English
    // $header = $parser->find('.type-header-results', 0)->children(0);
    // $result = $header->children(0)->outertext;
    // $avatar = $header->children(1)->children(0)->outertext;
    // $scores = $header->children(1)->children(1)->find('.trait');
    // $scene = $parser->find('.header-scene', 0)->outertext(0);
    // $text = $parser->find('.type-description-wrapper', 0)->innertext;
 ?>

<!DOCTYPE html>
<html>
<head>
    <title>Ahihi</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,400italic&amp;subset=latin,cyrillic,greek,latin-ext" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://storage.googleapis.com/neris/public/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/result-ja.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
<body>
    <div class="main-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12 min-height-wrapper article-wrapper">
                    <div class="international type-description">
                        <?php echo $result; ?>
                        <?php echo $text; ?>
                    </div>
                    <div class="celebrities-wrapper">
                        <div class="celebrities-nav previous">
                            <span class="fa fa-angle-left" style="display: inline;"></span>
                        </div>
                        <?php echo $celebrities; ?>
                        <div class="celebrities-nav previous">
                            <span class="fa fa-angle-left" style="display: inline;"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://storage.googleapis.com/neris/public/js/owl.carousel.min.js"></script>
    <script>
        var $j = jQuery.noConflict();
        $j(document).ready(function(){
            $j('.owl-carousel').owlCarousel({
                items: 4,
                                onChanged: checkNavIcons,
                onInitialized: runInitialSetup,
                onResized: setOwlStageHeight,
                onTranslated: setOwlStageHeight,
                responsive: {
                    0:{
                        items: 2,
                        dots: true,
                        dotsEach: 2,
                    },
                    460:{
                        items: 4,
                    },
                    768:{
                        dots: false
                    },
                }
            });
        });

        function runInitialSetup() {
            showNavIcons();
            setOwlStageHeight();
        }

        function setOwlStageHeight() {

            var maxHeight = 0;
            var maxTitleHeight = 0;

            $j('.celebrity-list .owl-item.active').each(function () {

                var itemHeight = parseInt($j(this).height());
                maxHeight = (maxHeight >= itemHeight ? maxHeight : itemHeight);
                var titleHeight = parseInt($j(this).find('.celebrity .name').height());
                maxTitleHeight = (maxTitleHeight >= titleHeight ? maxTitleHeight : titleHeight);

            });

            if (maxHeight < 100) {

                if (screen.width < 460) {
                    maxHeight = 170 + maxTitleHeight;
                } else if (screen.width < 568) {
                    maxHeight = 150 + maxTitleHeight;
                } else if (screen.width < 768) {
                    maxHeight = 180 + maxTitleHeight;
                } else if (screen.width < 992) {
                    maxHeight = 220 + maxTitleHeight;
                } else {
                    maxHeight = 250 + maxTitleHeight;
                }

            }

            $j('.celebrity-list .owl-stage-outer').css('height', maxHeight);

            if (!$j('.celebrity-list .owl-dots').hasClass('disabled')) {

                var dotsHeight = $j('.celebrity-list .owl-dots').height() + 20;
                maxHeight += dotsHeight;

            }

            $j('.celebrity-list').css('height', maxHeight);

        };

        function showNavIcons() {
            $j('.celebrities-nav.next .fa').show();
        }

        function checkNavIcons(event) {

            if (event.item.index == 12) {
                $j('.celebrities-nav.next .fa').hide();
                return;
            }

            if (event.item.index == 0 || event.item.index == null) {
                $j('.celebrities-nav.previous .fa').hide();
                return;
            }

            $j('.celebrities-nav .fa').show();

        }

        $j('.celebrities-nav.next .fa').click(function() {
            $j('.owl-carousel').trigger('next.owl.carousel');
        })
        $j('.celebrities-nav.previous .fa').click(function() {
            $j('.owl-carousel').trigger('prev.owl.carousel');
        })
    </script>
</body>
</html>
