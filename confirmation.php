<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>旅×ﾀﾞｲﾆﾝｸﾞ ﾙｰﾄｾﾞﾛ</title>
    <meta name="description" content="世界一周から帰ってきたオーナーがお届けする、国際色豊かなダイニングバー。東銀座・銀座駅より徒歩５分圏内。1頭買い国産ブランド牛、漁師直送広島産カキ、契約農家直送エロうま無農薬野菜、日米のクラフトビール＆世界各国から取り揃えた豊富なお酒と共に、味覚の旅へお連れいたします。">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="other/favicon.ico">
    <script type="text/javascript" src="other/jquery-3.2.1.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="nav_menu/jquery.fs.naver.css">
    <script src="nav_menu/jquery.fs.naver.js"></script>
    <!--スマホ用 ハンバーガーメニュー-->
    <script>
        $(document).ready(function() {
            $("nav").naver({
                labels: {
                    closed: "MENU",
                    open: "CLOSE"
                },
                maxWidth: "480px"
            });
        });

    </script>
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-101885271-3', 'auto');
        ga('send', 'pageview');

    </script>
</head>

<body id="contactpage">
    <div id="wrapper">
        <header>
            <div class="address">
                <h1>Tel.03-6264-7004</h1>
                <p>東京都中央区銀座6-13-7 新保ビルB1</p>
                <p>ランチ（月～金） 11:30～17:00</p>
                <p>ディナー 　　　　17:00～04:00</p>
            </div>
            <!--end div.address-->
            <div class="snsicon">
                <a class="mail" href="contact.html">routezero_mail</a>
                <a class="twitter" href="https://twitter.com/zero_route" target="_blank">routezero_twitter</a>
                <a class="instagram" href="https://www.instagram.com/routezero.ginza/" target="_blank">routezero_instagram</a>
                <a class="facebook" href="https://www.facebook.com/ROUTEZERO.ginza/" target="_blank">routezero_facebook</a>
            </div>
            <!--end div.snsicon-->
            <div class="mainlogo">
                <a href="index_top.html">
                    <img src="images/logo.png" alt="ROUTE ZERO"></a>
            </div>
            <!--end div.mainlogo-->
            <div class="line">
                <img src="images/line_only.png" alt="line">
            </div>
            <!--end div.line-->
        </header>
        <main>
            <nav class="navmenu_bottom">
                <ul>
                    <li class="top">
                        <a href="index_top.html">routezero_navitop</a>
                    </li>
                    <li class="navicon concept">
                        <a href="concept.html">routezero_concept</a>
                    </li>
                    <li class="navicon menu">
                        <a href="menu.html">routezero_menu</a>
                    </li>
                    <li class="navicon access">
                        <a href="access.html">routezero_access</a>
                    </li>
                    <li class="navicon contact_now">
                        <a href="contact.html">routezero_contact</a>
                    </li>
                    <li class="navicon recruit">
                        <a href="recruit.html">routezero_recruit</a>
                    </li>
                    <li class="navicon game">
                        <a href="game.html">routezero_game</a>
                    </li>
                </ul>
            </nav>
            <!--end nav-->
            <div id="contact">
                <div class="contact_comment">
                    <p class="contact_message2">【Confirmation】</p>
                    <div class="contact_form">
                        <table>
                            <tr>
                                <td>
                                    <p>ご用件
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        <?php echo $_POST['contact_name']; ?>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>お名前</p>
                                </td>
                                <td>
                                    <p>
                                        <?php echo $_POST['user_name']; ?>様</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>メールアドレス</p>
                                </td>
                                <td>
                                    <?php echo $_POST['user_address']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>お電話番号</p>
                                </td>
                                <td>
                                    <?php echo $_POST['user_tel']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>お問い合わせ内容</p>
                                </td>
                                <td>
                                    <?php echo $_POST['user_message']; ?>
                                </td>
                            </tr>
                        </table>
                        <p class="resevation_comment2">↓↓　ご予約のお客様は、下記の確認もお願い致します　↓↓</p>
                        <table>
                            <tr>
                                <td>
                                    <p>ご希望の日時</p>
                                </td>
                                <td>
                                    <?php echo $_POST['datetime']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>ご利用人数</p>
                                </td>
                                <td>
                                    <p>
                                        <?php echo $_POST['number']; ?>名様</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>ご希望のコース</p>
                                </td>
                                <td>
                                    <?php echo $_POST['course']; ?>
                                </td>
                            </tr>
                        </table>
                        <br>
                        <p class="tyuui">◆ご注意◆
                            <br>送信が完了しても予約の確約は致しかねます。
                            <br>スタッフから完了の連絡が届いた時点で予約完了となりますので、ご了承下さい。</p>
                        <form action="completion.php" method="post">
                            <div class="bottom">
                                <input id="bottom" type="submit" value="戻る" onClick='history.back()'>
                                <input id="bottom" type="submit" value="送信">
                            </div>
                            <input type="hidden" name="contact_name" value="<?php echo $_POST['contact_name']; ?>">
                            <input type="hidden" name="user_name" value="<?php echo $_POST['user_name']; ?>">
                        </form>
                    </div>
                </div>
                <!--end .contact_comment-->
                <section class="line_right7">
                    <img src="images/line_right.png" alt="line_right">
                </section>
            </div>
            <!--end #contactpage-->
        </main>
        <footer class="footer_bottom">
            <div class="footer_snsicon"> <a class="footer_facebook" href="https://www.facebook.com/ROUTEZERO.ginza/" target="_blank">routezero_facebook</a> <a class="footer_instagram" href="https://www.instagram.com/routezero.ginza/" target="_blank">routezero_instagram</a> <a class="footer_twitter" href="https://twitter.com/zero_route" target="_blank">routezero_twitter</a> <a class="footer_mail" href="contact.html">routezero_mail</a> </div>
            <small>Copyright &copy; 2017 ROUTE ZERO. All Rights Reserved.</small>
        </footer>
    </div>
    <!--end div#wrapper-->
</body>

</html>