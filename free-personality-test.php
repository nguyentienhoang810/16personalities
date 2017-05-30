<!DOCTYPE html>
<html>
<head>
    <title>無料性格診断テスト | 16Personalities</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/test.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 personality-test">
                <div class="test-body">
                    <div class="visible-lg-block">
                        <div class="test-title">
                            <h1>無料性格診断テスト</h1>
                        </div>
                        <div class="trademark">
                            NERIS Type Explorer<sup>®</sup>
                        </div>
                        <div class="row test-header">
                            <div class="col-md-4 item" style="background-image: url('https://storage.googleapis.com/neris/public/images/test-header-1.png');">
                                <div class="note ja">
                                    12分以内で終わらせましょう。
                                </div>
                            </div>
                            <div class="col-md-4 item" style="background-image: url('https://storage.googleapis.com/neris/public/images/test-header-2.png');">
                                <div class="note ja">
                                    正直に答えましょう（たとえ、その答えが気にいらなくても）。
                                </div>
                            </div>
                            <div class="col-md-4 item" style="background-image: url('https://storage.googleapis.com/neris/public/images/test-header-3.png');">
                                <div class="note ja">
                                    できるだけ「中立」の答えは避けましょう。
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hidden-lg">
                        <h1>無料性格診断テスト</h1>
                        <div class="trademark">
                            NERIS Type Explorer<sup>®</sup>
                        </div>
                        <p>テストを受ける前に、以下の3点について留意してください。</p>
                        <ol>
                            <li>12分以内で終わらせましょう。</li>
                            <li>正直に答えましょう（たとえ、その答えが気にいらなくても）。</li>
                            <li>できるだけ「中立」の答えは避けましょう。</li>
                        </ol>
                    </div>
                    <form method="POST" action="test-results.php" accept-charset="UTF-8" id="test-form">
                        <input name="_token" type="hidden" value="kFTXc0nPnrYrpCeixokS58pcxadRN91G0ScaIovM">
                        <div class="question-wrapper set1">
                            <div class="statement">
                                他人に自己紹介するのが苦手だと感じる。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(1, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(1, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(1, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(1, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(1, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(1, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(1, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(1, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(1, 3);">同意しない</div>
                            </div>
                            <div class="row decision mobile visible-xs">
                                <div class="col-xs-6 caption left">同意する</div>
                                <div class="col-xs-6 caption right">同意しない</div>
                            </div>
                        </div>
                        <div class="question-wrapper set1">
                            <div class="statement">
                                自分の考えに夢中になって、周囲のことを無視したり忘れることがよくある。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(2, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(2, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(2, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(2, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(2, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(2, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(2, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(2, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(2, 3);">同意しない</div>
                            </div>
                            <div class="row decision mobile visible-xs">
                                <div class="col-xs-6 caption left">同意する</div>
                                <div class="col-xs-6 caption right">同意しない</div>
                            </div>
                        </div>
                        <div class="question-wrapper set1">
                            <div class="statement">
                                受信箱がごちゃごちゃするのが我慢できず、できるだけ早くEメールに返答しようとする。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(3, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(3, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(3, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(3, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(3, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(3, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(3, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(3, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(3, 3);">同意しない</div>
                            </div>
                            <div class="row decision mobile visible-xs">
                                <div class="col-xs-6 caption left">同意する</div>
                                <div class="col-xs-6 caption right">同意しない</div>
                            </div>
                        </div>
                        <div class="question-wrapper set1">
                            <div class="statement">
                                プレッシャーがあるときでも常にリラックスし、集中できる。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(4, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(4, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(4, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(4, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(4, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(4, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(4, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(4, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(4, 3);">同意しない</div>
                            </div>
                            <div class="row decision mobile visible-xs">
                                <div class="col-xs-6 caption left">同意する</div>
                                <div class="col-xs-6 caption right">同意しない</div>
                            </div>
                        </div>
                        <div class="question-wrapper set1">
                            <div class="statement">
                                通常、自分から話を始めることはない。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(5, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(5, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(5, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(5, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(5, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(5, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(5, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(5, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(5, 3);">同意しない</div>
                            </div>
                            <div class="row decision mobile visible-xs">
                                <div class="col-xs-6 caption left">同意する</div>
                                <div class="col-xs-6 caption right">同意しない</div>
                            </div>
                        </div>
                        <div class="question-wrapper set1">
                            <div class="statement">
                                まったくの好奇心から何かを始めるということは、めったにない。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(6, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(6, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(6, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(6, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(6, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(6, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(6, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(6, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(6, 3);">同意しない</div>
                            </div>
                            <div class="row decision mobile visible-xs">
                                <div class="col-xs-6 caption left">同意する</div>
                                <div class="col-xs-6 caption right">同意しない</div>
                            </div>
                        </div>
                        <div class="question-wrapper set2">
                            <div class="statement">
                                他人よりも自分が優れていると感じる。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(7, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(7, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(7, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(7, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(7, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(7, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(7, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(7, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(7, 3);">同意しない</div>
                            </div>
                            <div class="row decision mobile visible-xs">
                                <div class="col-xs-6 caption left">同意する</div>
                                <div class="col-xs-6 caption right">同意しない</div>
                            </div>
                        </div>
                        <div class="question-wrapper set2">
                            <div class="statement">
                                順応性があるというよりも、系統立てて物事を進められることの方が自分にとってはより重要である。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(8, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(8, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(8, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(8, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(8, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(8, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(8, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(8, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(8, 3);">同意しない</div>
                            </div>
                            <div class="row decision mobile visible-xs">
                                <div class="col-xs-6 caption left">同意する</div>
                                <div class="col-xs-6 caption right">同意しない</div>
                            </div>
                        </div>
                        <div class="question-wrapper set2">
                            <div class="statement">
                                普段は非常に意欲的で、エネルギッシュである。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(9, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(9, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(9, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(9, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(9, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(9, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(9, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(9, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(9, 3);">同意しない</div>
                            </div>
                            <div class="row decision mobile visible-xs">
                                <div class="col-xs-6 caption left">同意する</div>
                                <div class="col-xs-6 caption right">同意しない</div>
                            </div>
                        </div>
                        <div class="question-wrapper set2">
                            <div class="statement">
                                誰も腹を立てないようにすることの方が、議論で勝つよりも大切である。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(10, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(10, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(10, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(10, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(10, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(10, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(10, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(10, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(10, 3);">同意しない</div>
                            </div>
                            <div class="row decision mobile visible-xs">
                                <div class="col-xs-6 caption left">同意する</div>
                                <div class="col-xs-6 caption right">同意しない</div>
                            </div>
                        </div>
                        <div class="question-wrapper set2">
                            <div class="statement">
                                他人に自分自身を正当化しなければならないかのように感じることがよくある。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(11, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(11, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(11, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(11, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(11, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(11, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(11, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(11, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(11, 3);">同意しない</div>
                            </div>
                            <div class="row decision mobile visible-xs">
                                <div class="col-xs-6 caption left">同意する</div>
                                <div class="col-xs-6 caption right">同意しない</div>
                            </div>
                        </div>
                        <div class="question-wrapper set2">
                            <div class="statement">
                                自宅および仕事場の環境はかなり整理されている。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(12, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(12, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(12, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(12, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(12, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(12, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(12, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(12, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(12, 3);">同意しない</div>
                            </div>
                            <div class="row decision mobile visible-xs">
                                <div class="col-xs-6 caption left">同意する</div>
                                <div class="col-xs-6 caption right">同意しない</div>
                            </div>
                        </div>
                        <div class="question-wrapper set3">
                            <div class="statement">
                                注目の的となることが気にならない。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(13, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(13, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(13, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(13, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(13, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(13, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(13, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(13, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(13, 3);">同意しない</div>
                            </div>
                            <div class="row decision mobile visible-xs">
                                <div class="col-xs-6 caption left">同意する</div>
                                <div class="col-xs-6 caption right">同意しない</div>
                            </div>
                        </div>
                        <div class="question-wrapper set3">
                            <div class="statement">
                                自分自身は創造的というより実用的であると思う。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(14, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(14, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(14, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(14, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(14, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(14, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(14, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(14, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(14, 3);">同意しない</div>
                            </div>
                            <div class="row decision mobile visible-xs">
                                <div class="col-xs-6 caption left">同意する</div>
                                <div class="col-xs-6 caption right">同意しない</div>
                            </div>
                        </div>
                        <div class="question-wrapper set3">
                            <div class="statement">
                                誰かを相手に腹が立つということは、めったにない。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(15, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(15, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(15, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(15, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(15, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(15, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(15, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(15, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(15, 3);">同意しない</div>
                            </div>
                            <div class="row decision mobile visible-xs">
                                <div class="col-xs-6 caption left">同意する</div>
                                <div class="col-xs-6 caption right">同意しない</div>
                            </div>
                        </div>
                        <div class="question-wrapper set3">
                            <div class="statement">
                                旅行に行くときはかなり計画を練る方である。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(16, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(16, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(16, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(16, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(16, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(16, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(16, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(16, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(16, 3);">同意しない</div>
                            </div>
                            <div class="row decision mobile visible-xs">
                                <div class="col-xs-6 caption left">同意する</div>
                                <div class="col-xs-6 caption right">同意しない</div>
                            </div>
                        </div>
                        <div class="question-wrapper set3">
                            <div class="statement">
                                他人の感情に共感することは難しいと感じることがよくある。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(17, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(17, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(17, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(17, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(17, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(17, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(17, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(17, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(17, 3);">同意しない</div>
                            </div>
                            <div class="row decision mobile visible-xs">
                                <div class="col-xs-6 caption left">同意する</div>
                                <div class="col-xs-6 caption right">同意しない</div>
                            </div>
                        </div>
                        <div class="question-wrapper set3">
                            <div class="statement">
                                気分が非常に変わりやすい方である。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(18, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(18, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(18, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(18, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(18, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(18, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(18, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(18, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(18, 3);">同意しない</div>
                            </div>
                            <div class="row decision mobile visible-xs">
                                <div class="col-xs-6 caption left">同意する</div>
                                <div class="col-xs-6 caption right">同意しない</div>
                            </div>
                        </div>
                        <div class="question-wrapper set4">
                            <div class="statement">
                                討論において、人の感受性よりも真実の方がより重要である。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(19, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(19, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(19, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(19, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(19, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(19, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(19, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(19, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(19, 3);">同意しない</div>
                            </div>
                            <div class="row decision mobile visible-xs">
                                <div class="col-xs-6 caption left">同意する</div>
                                <div class="col-xs-6 caption right">同意しない</div>
                            </div>
                        </div>
                        <div class="question-wrapper set4">
                            <div class="statement">
                                自分の行動が他人に及ぼす影響について心配することは、めったにない。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(20, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(20, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(20, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(20, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(20, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(20, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(20, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(20, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(20, 3);">同意しない</div>
                            </div>
                            <div class="row decision mobile visible-xs">
                                <div class="col-xs-6 caption left">同意する</div>
                                <div class="col-xs-6 caption right">同意しない</div>
                            </div>
                        </div>
                        <div class="question-wrapper set4">
                            <div class="statement">
                                自分の仕事のスタイルは、整然とした体系的なアプローチというよりは、ランダムなエネルギーの突出に近い。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(21, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(21, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(21, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(21, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(21, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(21, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(21, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(21, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(21, 3);">同意しない</div>
                            </div>
                            <div class="row decision mobile visible-xs">
                                <div class="col-xs-6 caption left">同意する</div>
                                <div class="col-xs-6 caption right">同意しない</div>
                            </div>
                        </div>
                        <div class="question-wrapper set4">
                            <div class="statement">
                                他人のことを羨ましく思うことがよくある。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(22, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(22, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(22, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(22, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(22, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(22, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(22, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(22, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(22, 3);">同意しない</div>
                            </div>
                            <div class="row decision mobile visible-xs">
                                <div class="col-xs-6 caption left">同意する</div>
                                <div class="col-xs-6 caption right">同意しない</div>
                            </div>
                        </div>
                        <div class="question-wrapper set4">
                            <div class="statement">
                                面白い本やビデオゲームの方が、ソーシャルイベントよりも良いと感じることがよくある。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(23, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(23, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(23, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(23, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(23, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(23, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(23, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(23, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(23, 3);">同意しない</div>
                            </div>
                            <div class="row decision mobile visible-xs">
                                <div class="col-xs-6 caption left">同意する</div>
                                <div class="col-xs-6 caption right">同意しない</div>
                            </div>
                        </div>
                        <div class="question-wrapper set4">
                            <div class="statement">
                                計画を立て、その通りに実行できるということは、あらゆるプロジェクトにおける最も重要な部分である。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(24, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(24, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(24, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(24, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(24, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(24, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(24, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(24, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(24, 3);">同意しない</div>
                            </div>
                            <div class="row decision mobile visible-xs">
                                <div class="col-xs-6 caption left">同意する</div>
                                <div class="col-xs-6 caption right">同意しない</div>
                            </div>
                        </div>
                        <div class="question-wrapper set5">
                            <div class="statement">
                                幻想やアイデアに没頭して我を忘れることはめったにない。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(25, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(25, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(25, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(25, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(25, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(25, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(25, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(25, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(25, 3);">同意しない</div>
                            </div>
                            <div class="row decision mobile visible-xs">
                                <div class="col-xs-6 caption left">同意する</div>
                                <div class="col-xs-6 caption right">同意しない</div>
                            </div>
                        </div>
                        <div class="question-wrapper set5">
                            <div class="statement">
                                自然の中を歩いているときに、自分の思索に没頭してしまうことがよくある。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(26, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(26, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(26, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(26, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(26, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(26, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(26, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(26, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(26, 3);">同意しない</div>
                            </div>
                            <div class="row decision mobile visible-xs">
                                <div class="col-xs-6 caption left">同意する</div>
                                <div class="col-xs-6 caption right">同意しない</div>
                            </div>
                        </div>
                        <div class="question-wrapper set5">
                            <div class="statement">
                                誰かが自分のEメールにすぐに返事をしないと、何か誤ったことを言ってしまったのではないかと心配し始める。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(27, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(27, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(27, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(27, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(27, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(27, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(27, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(27, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(27, 3);">同意しない</div>
                            </div>
                            <div class="row decision mobile visible-xs">
                                <div class="col-xs-6 caption left">同意する</div>
                                <div class="col-xs-6 caption right">同意しない</div>
                            </div>
                        </div>
                        <div class="question-wrapper set5">
                            <div class="statement">
                                親として、自分の子供が頭のいい子であるよりも、優しい子に育って欲しいと思う。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(28, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(28, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(28, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(28, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(28, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(28, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(28, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(28, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(28, 3);">同意しない</div>
                            </div>
                            <div class="row decision mobile visible-xs">
                                <div class="col-xs-6 caption left">同意する</div>
                                <div class="col-xs-6 caption right">同意しない</div>
                            </div>
                        </div>
                        <div class="question-wrapper set5">
                            <div class="statement">
                                他人に自分の行動についてあれこれ言わせない。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(29, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(29, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(29, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(29, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(29, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(29, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(29, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(29, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(29, 3);">同意しない</div>
                            </div>
                            <div class="row decision mobile visible-xs">
                                <div class="col-xs-6 caption left">同意する</div>
                                <div class="col-xs-6 caption right">同意しない</div>
                            </div>
                        </div>
                        <div class="question-wrapper set5">
                            <div class="statement">
                                自分の夢は、現実の世界やイベントに焦点を当てたものである傾向が高い。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(30, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(30, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(30, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(30, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(30, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(30, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(30, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(30, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(30, 3);">同意しない</div>
                            </div>
                            <div class="row decision mobile visible-xs">
                                <div class="col-xs-6 caption left">同意する</div>
                                <div class="col-xs-6 caption right">同意しない</div>
                            </div>
                        </div>
                        <div class="question-wrapper set6">
                            <div class="statement">
                                新しい職場での社交活動に参加し始めるのにそれほど時間を要しない。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(31, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(31, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(31, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(31, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(31, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(31, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(31, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(31, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(31, 3);">同意しない</div>
                            </div>
                            <div class="row decision mobile visible-xs">
                                <div class="col-xs-6 caption left">同意する</div>
                                <div class="col-xs-6 caption right">同意しない</div>
                            </div>
                        </div>
                        <div class="question-wrapper set6">
                            <div class="statement">
                                入念な計画立案者というよりは、その場で即興で物事を行うタイプである。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(32, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(32, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(32, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(32, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(32, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(32, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(32, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(32, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(32, 3);">同意しない</div>
                            </div>
                            <div class="row decision mobile visible-xs">
                                <div class="col-xs-6 caption left">同意する</div>
                                <div class="col-xs-6 caption right">同意しない</div>
                            </div>
                        </div>
                        <div class="question-wrapper set6">
                            <div class="statement">
                                感情を支配するというより、感情に支配される方である。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(33, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(33, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(33, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(33, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(33, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(33, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(33, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(33, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(33, 3);">同意しない</div>
                            </div>
                            <div class="row decision mobile visible-xs">
                                <div class="col-xs-6 caption left">同意する</div>
                                <div class="col-xs-6 caption right">同意しない</div>
                            </div>
                        </div>
                        <div class="question-wrapper set6">
                            <div class="statement">
                                着飾ったり、ロールプレイなどを行うソーシャルイベントに参加するのが楽しい。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(34, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(34, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(34, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(34, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(34, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(34, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(34, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(34, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(34, 3);">同意しない</div>
                            </div>
                            <div class="row decision mobile visible-xs">
                                <div class="col-xs-6 caption left">同意する</div>
                                <div class="col-xs-6 caption right">同意しない</div>
                            </div>
                        </div>
                        <div class="question-wrapper set6">
                            <div class="statement">
                                非現実的で、非実用的な、しかし興味をそそるアイデアを、あれこれ考えることが多い。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(35, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(35, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(35, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(35, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(35, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(35, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(35, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(35, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(35, 3);">同意しない</div>
                            </div>
                            <div class="row decision mobile visible-xs">
                                <div class="col-xs-6 caption left">同意する</div>
                                <div class="col-xs-6 caption right">同意しない</div>
                            </div>
                        </div>
                        <div class="question-wrapper set6">
                            <div class="statement">
                                詳細な計画を立てるのに時間を費やすよりも、どちらかというと即興で物事を実行する。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(36, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(36, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(36, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(36, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(36, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(36, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(36, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(36, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(36, 3);">同意しない</div>
                            </div>
                            <div class="row decision mobile visible-xs">
                                <div class="col-xs-6 caption left">同意する</div>
                                <div class="col-xs-6 caption right">同意しない</div>
                            </div>
                        </div>
                        <div class="question-wrapper set7">
                            <div class="statement">
                                どちらかというと控えめで、静かな性格である。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(37, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(37, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(37, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(37, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(37, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(37, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(37, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(37, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(37, 3);">同意しない</div>
                            </div>
                            <div class="row decision mobile visible-xs">
                                <div class="col-xs-6 caption left">同意する</div>
                                <div class="col-xs-6 caption right">同意しない</div>
                            </div>
                        </div>
                        <div class="question-wrapper set7">
                            <div class="statement">
                                事業を持っていたとしたら、忠実ではあるが業績が芳しくない社員をクビにすることは非常に難しいと思う。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(38, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(38, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(38, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(38, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(38, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(38, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(38, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(38, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(38, 3);">同意しない</div>
                            </div>
                            <div class="row decision mobile visible-xs">
                                <div class="col-xs-6 caption left">同意する</div>
                                <div class="col-xs-6 caption right">同意しない</div>
                            </div>
                        </div>
                        <div class="question-wrapper set7">
                            <div class="statement">
                                人間の存在理由について熟考することがよくある。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(39, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(39, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(39, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(39, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(39, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(39, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(39, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(39, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(39, 3);">同意しない</div>
                            </div>
                            <div class="row decision mobile visible-xs">
                                <div class="col-xs-6 caption left">同意する</div>
                                <div class="col-xs-6 caption right">同意しない</div>
                            </div>
                        </div>
                        <div class="question-wrapper set7">
                            <div class="statement">
                                重要な決定を行うとなると、心情よりも論理の方がより重要である。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(40, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(40, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(40, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(40, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(40, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(40, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(40, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(40, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(40, 3);">同意しない</div>
                            </div>
                            <div class="row decision mobile visible-xs">
                                <div class="col-xs-6 caption left">同意する</div>
                                <div class="col-xs-6 caption right">同意しない</div>
                            </div>
                        </div>
                        <div class="question-wrapper set7">
                            <div class="statement">
                                To Doリストを持つよりも、自由な選択肢を残しておくことの方がより重要である。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(41, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(41, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(41, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(41, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(41, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(41, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(41, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(41, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(41, 3);">同意しない</div>
                            </div>
                            <div class="row decision mobile visible-xs">
                                <div class="col-xs-6 caption left">同意する</div>
                                <div class="col-xs-6 caption right">同意しない</div>
                            </div>
                        </div>
                        <div class="question-wrapper set7">
                            <div class="statement">
                                友達が何かに悲しんでいる場合、問題対処の方法を提案するよりも、情緒的なサポートをすることの方が多い。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(42, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(42, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(42, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(42, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(42, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(42, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(42, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(42, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(42, 3);">同意しない</div>
                            </div>
                            <div class="row decision mobile visible-xs">
                                <div class="col-xs-6 caption left">同意する</div>
                                <div class="col-xs-6 caption right">同意しない</div>
                            </div>
                        </div>
                        <div class="question-wrapper set8">
                            <div class="statement">
                                自分が情緒的に不安定だと感じることはめったにない。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(43, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(43, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(43, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(43, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(43, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(43, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(43, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(43, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(43, 3);">同意しない</div>
                            </div>
                            <div class="row decision mobile visible-xs">
                                <div class="col-xs-6 caption left">同意する</div>
                                <div class="col-xs-6 caption right">同意しない</div>
                            </div>
                        </div>
                        <div class="question-wrapper set8">
                            <div class="statement">
                                個人的な時間表を作成し、その通りに行うことにまったく問題がない。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(44, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(44, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(44, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(44, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(44, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(44, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(44, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(44, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(44, 3);">同意しない</div>
                            </div>
                            <div class="row decision mobile visible-xs">
                                <div class="col-xs-6 caption left">同意する</div>
                                <div class="col-xs-6 caption right">同意しない</div>
                            </div>
                        </div>
                        <div class="question-wrapper set8">
                            <div class="statement">
                                チームワークという点では、正しいということの方が、協力的であるということより重要である。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(45, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(45, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(45, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(45, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(45, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(45, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(45, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(45, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(45, 3);">同意しない</div>
                            </div>
                            <div class="row decision mobile visible-xs">
                                <div class="col-xs-6 caption left">同意する</div>
                                <div class="col-xs-6 caption right">同意しない</div>
                            </div>
                        </div>
                        <div class="question-wrapper set8">
                            <div class="statement">
                                皆の意見は、事実の裏付けがあるかどうかに限らず尊重されるべきであると考える。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(46, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(46, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(46, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(46, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(46, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(46, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(46, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(46, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(46, 3);">同意しない</div>
                            </div>
                            <div class="row decision mobile visible-xs">
                                <div class="col-xs-6 caption left">同意する</div>
                                <div class="col-xs-6 caption right">同意しない</div>
                            </div>
                        </div>
                        <div class="question-wrapper set8">
                            <div class="statement">
                                多くの人と時間を一緒にした後の方がより精力的に感じる。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(47, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(47, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(47, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(47, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(47, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(47, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(47, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(47, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(47, 3);">同意しない</div>
                            </div>
                            <div class="row decision mobile visible-xs">
                                <div class="col-xs-6 caption left">同意する</div>
                                <div class="col-xs-6 caption right">同意しない</div>
                            </div>
                        </div>
                        <div class="question-wrapper set8">
                            <div class="statement">
                                自分の所持品を誤った場所に置いてしまうことがよくある。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(48, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(48, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(48, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(48, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(48, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(48, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(48, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(48, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(48, 3);">同意しない</div>
                            </div>
                            <div class="row decision mobile visible-xs">
                                <div class="col-xs-6 caption left">同意する</div>
                                <div class="col-xs-6 caption right">同意しない</div>
                            </div>
                        </div>
                        <div class="question-wrapper set9">
                            <div class="statement">
                                自分は夢想家ではないと思う。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(49, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(49, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(49, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(49, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(49, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(49, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(49, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(49, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(49, 3);">同意しない</div>
                            </div>
                            <div class="row decision mobile visible-xs">
                                <div class="col-xs-6 caption left">同意する</div>
                                <div class="col-xs-6 caption right">同意しない</div>
                            </div>
                        </div>
                        <div class="question-wrapper set9">
                            <div class="statement">
                                まだ十分検討されていないアイデアや計画で、いつも頭の中が一杯である。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(50, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(50, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(50, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(50, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(50, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(50, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(50, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(50, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(50, 3);">同意しない</div>
                            </div>
                            <div class="row decision mobile visible-xs">
                                <div class="col-xs-6 caption left">同意する</div>
                                <div class="col-xs-6 caption right">同意しない</div>
                            </div>
                        </div>
                        <div class="question-wrapper set9">
                            <div class="statement">
                                自分自身のことを夢想家とは呼ばない。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(51, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(51, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(51, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(51, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(51, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(51, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(51, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(51, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(51, 3);">同意しない</div>
                            </div>
                            <div class="row decision mobile visible-xs">
                                <div class="col-xs-6 caption left">同意する</div>
                                <div class="col-xs-6 caption right">同意しない</div>
                            </div>
                        </div>
                        <div class="question-wrapper set9">
                            <div class="statement">
                                多くの人の前で話をする際、普通はリラックスできない。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(52, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(52, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(52, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(52, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(52, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(52, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(52, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(52, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(52, 3);">同意しない</div>
                            </div>
                            <div class="row decision mobile visible-xs">
                                <div class="col-xs-6 caption left">同意する</div>
                                <div class="col-xs-6 caption right">同意しない</div>
                            </div>
                        </div>
                        <div class="question-wrapper set9">
                            <div class="statement">
                                一般的に言って、想像力よりも経験に頼る。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(53, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(53, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(53, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(53, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(53, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(53, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(53, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(53, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(53, 3);">同意しない</div>
                            </div>
                            <div class="row decision mobile visible-xs">
                                <div class="col-xs-6 caption left">同意する</div>
                                <div class="col-xs-6 caption right">同意しない</div>
                            </div>
                        </div>
                        <div class="question-wrapper set9">
                            <div class="statement">
                                他人が考えることについてあれこれ心配しすぎる。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(54, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(54, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(54, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(54, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(54, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(54, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(54, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(54, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(54, 3);">同意しない</div>
                            </div>
                            <div class="row decision mobile visible-xs">
                                <div class="col-xs-6 caption left">同意する</div>
                                <div class="col-xs-6 caption right">同意しない</div>
                            </div>
                        </div>
                        <div class="question-wrapper set10">
                            <div class="statement">
                                部屋が一杯の場合、真ん中を避けて壁に近いところにいる傾向がある。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(55, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(55, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(55, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(55, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(55, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(55, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(55, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(55, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(55, 3);">同意しない</div>
                            </div>
                            <div class="row decision mobile visible-xs">
                                <div class="col-xs-6 caption left">同意する</div>
                                <div class="col-xs-6 caption right">同意しない</div>
                            </div>
                        </div>
                        <div class="question-wrapper set10">
                            <div class="statement">
                                何かを行うときは、時間がギリギリになるまで物事を先送りにする傾向がある。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(56, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(56, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(56, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(56, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(56, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(56, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(56, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(56, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(56, 3);">同意しない</div>
                            </div>
                            <div class="row decision mobile visible-xs">
                                <div class="col-xs-6 caption left">同意する</div>
                                <div class="col-xs-6 caption right">同意しない</div>
                            </div>
                        </div>
                        <div class="question-wrapper set10">
                            <div class="statement">
                                ストレスのある状況では、非常に不安を感じる。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(57, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(57, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(57, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(57, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(57, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(57, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(57, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(57, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(57, 3);">同意しない</div>
                            </div>
                            <div class="row decision mobile visible-xs">
                                <div class="col-xs-6 caption left">同意する</div>
                                <div class="col-xs-6 caption right">同意しない</div>
                            </div>
                        </div>
                        <div class="question-wrapper set10">
                            <div class="statement">
                                他人に好かれる事の方が、権力を持つよりも、もっと報われると考える。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(58, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(58, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(58, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(58, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(58, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(58, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(58, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(58, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(58, 3);">同意しない</div>
                            </div>
                            <div class="row decision mobile visible-xs">
                                <div class="col-xs-6 caption left">同意する</div>
                                <div class="col-xs-6 caption right">同意しない</div>
                            </div>
                        </div>
                        <div class="question-wrapper set10">
                            <div class="statement">
                                本、アート、または映画などの型にはまらない、曖昧な物事に常に興味をもってきた。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(59, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(59, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(59, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(59, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(59, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(59, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(59, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(59, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(59, 3);">同意しない</div>
                            </div>
                            <div class="row decision mobile visible-xs">
                                <div class="col-xs-6 caption left">同意する</div>
                                <div class="col-xs-6 caption right">同意しない</div>
                            </div>
                        </div>
                        <div class="question-wrapper set10">
                            <div class="statement">
                                ソーシャルな状況でイニシアチブを取ることがよくある。
                            </div>
                            <div class="row decision">
                                <div class="hidden-xs col-sm-3 caption left" onclick="setAnswer(60, -3);">同意する</div>
                                <div class="col-xs-12 col-sm-6 options btn-group" data-toggle="buttons" role="group" aria-label="Options">
                                    <label class="btn btn-default option agree max" onclick="setAnswer(60, -3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree med" onclick="setAnswer(60, -2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option agree min" onclick="setAnswer(60, -1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option neutral" onclick="setAnswer(60, 0);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree min" onclick="setAnswer(60, 1);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree med" onclick="setAnswer(60, 2);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                    <label class="btn btn-default option disagree max" onclick="setAnswer(60, 3);">
                                    <input type="radio" name="options" autocomplete="off">
                                    </label>
                                </div>
                                <div class="hidden-xs col-sm-3 caption right" onclick="setAnswer(60, 3);">同意しない</div>
                            </div>
                        </div>
                        <div class="row test-submit-wrapper">
                            <div class="col-md-12">
                                <div class="submit_wrapper setres"><button class="btn btn-action btn-lg" id="submbut" type="submit"><span>結果&nbsp;</span><span class="fa fa-caret-right"></span></button></div>
                            </div>
                        </div>
                        <input id="a1" name="a1" type="hidden" value="">
                        <input id="a2" name="a2" type="hidden" value="">
                        <input id="a3" name="a3" type="hidden" value="">
                        <input id="a4" name="a4" type="hidden" value="">
                        <input id="a5" name="a5" type="hidden" value="">
                        <input id="a6" name="a6" type="hidden" value="">
                        <input id="a7" name="a7" type="hidden" value="">
                        <input id="a8" name="a8" type="hidden" value="">
                        <input id="a9" name="a9" type="hidden" value="">
                        <input id="a10" name="a10" type="hidden" value="">
                        <input id="a11" name="a11" type="hidden" value="">
                        <input id="a12" name="a12" type="hidden" value="">
                        <input id="a13" name="a13" type="hidden" value="">
                        <input id="a14" name="a14" type="hidden" value="">
                        <input id="a15" name="a15" type="hidden" value="">
                        <input id="a16" name="a16" type="hidden" value="">
                        <input id="a17" name="a17" type="hidden" value="">
                        <input id="a18" name="a18" type="hidden" value="">
                        <input id="a19" name="a19" type="hidden" value="">
                        <input id="a20" name="a20" type="hidden" value="">
                        <input id="a21" name="a21" type="hidden" value="">
                        <input id="a22" name="a22" type="hidden" value="">
                        <input id="a23" name="a23" type="hidden" value="">
                        <input id="a24" name="a24" type="hidden" value="">
                        <input id="a25" name="a25" type="hidden" value="">
                        <input id="a26" name="a26" type="hidden" value="">
                        <input id="a27" name="a27" type="hidden" value="">
                        <input id="a28" name="a28" type="hidden" value="">
                        <input id="a29" name="a29" type="hidden" value="">
                        <input id="a30" name="a30" type="hidden" value="">
                        <input id="a31" name="a31" type="hidden" value="">
                        <input id="a32" name="a32" type="hidden" value="">
                        <input id="a33" name="a33" type="hidden" value="">
                        <input id="a34" name="a34" type="hidden" value="">
                        <input id="a35" name="a35" type="hidden" value="">
                        <input id="a36" name="a36" type="hidden" value="">
                        <input id="a37" name="a37" type="hidden" value="">
                        <input id="a38" name="a38" type="hidden" value="">
                        <input id="a39" name="a39" type="hidden" value="">
                        <input id="a40" name="a40" type="hidden" value="">
                        <input id="a41" name="a41" type="hidden" value="">
                        <input id="a42" name="a42" type="hidden" value="">
                        <input id="a43" name="a43" type="hidden" value="">
                        <input id="a44" name="a44" type="hidden" value="">
                        <input id="a45" name="a45" type="hidden" value="">
                        <input id="a46" name="a46" type="hidden" value="">
                        <input id="a47" name="a47" type="hidden" value="">
                        <input id="a48" name="a48" type="hidden" value="">
                        <input id="a49" name="a49" type="hidden" value="">
                        <input id="a50" name="a50" type="hidden" value="">
                        <input id="a51" name="a51" type="hidden" value="">
                        <input id="a52" name="a52" type="hidden" value="">
                        <input id="a53" name="a53" type="hidden" value="">
                        <input id="a54" name="a54" type="hidden" value="">
                        <input id="a55" name="a55" type="hidden" value="">
                        <input id="a56" name="a56" type="hidden" value="">
                        <input id="a57" name="a57" type="hidden" value="">
                        <input id="a58" name="a58" type="hidden" value="">
                        <input id="a59" name="a59" type="hidden" value="">
                        <input id="a60" name="a60" type="hidden" value="">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        var $j = jQuery.noConflict();
        $j.ajaxSetup({ cache: false });
        var $data = {};
        $data['options'] = 'on';
        $data['code'] = '';
        $data['_token'] = 'kFTXc0nPnrYrpCeixokS58pcxadRN91G0ScaIovM';

        function setAnswer(index, newval) {
            $j('#a' + index).val(newval);
            $data[index] = newval;
        }

        $j(document).on('click', '.decision .caption.left', function () {
            $j(this).next().children('.option').removeClass('active');
            $j(this).next().children('.option.agree.max').addClass('active');
        });

        $j(document).on('click', '.decision .caption.right', function () {
            $j(this).prev().children('.option').removeClass('active');
            $j(this).prev().children('.option.disagree.max').addClass('active');
        });


        $j(document).on('click', '.btn.btn-default.option', function () {
            $j(this).parent().children('.option').removeClass('active');
            $j(this).addClass('active');
        });
    </script>
</body>
</html>
