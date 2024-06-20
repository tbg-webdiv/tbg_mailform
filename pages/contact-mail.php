<?php
/**
 * Template Name: TBG製品情報メールフォーム
 */

get_header();
?>

<!--
アンケート・ダウンロード手順案内
ここは固定ページに投稿
-->
<div id="mainwrap">
    <div id="dl_ledsr" class="dl_title">
        <h1>
            <img decoding="async" src="/entry/wp-content/themes/tbg_mailform/assets/img/download_ledsmartremote_titleback.png">
                <div class="text">LEDスマートリモコン　ダウンロード</div>
                    <a class="p-info" href="https://www.tb-group.co.jp/joho/kojin.html" onclick="window.open(&quot;https://www.tb-group.co.jp/joho/kojin.html&quot;,&quot;&quot;,&quot;width=570,height=580&quot;);return false">個人情報保護方針</a>
        </h1>
            <p>ダウンロードサービスをご利用される方はお手数ですが、下記の手順に従ってアンケートにお答えください。</p>
        <!-- GeoTrust Smart Icon tag. Do not edit. -->
                    <div></div>
        <!-- END of GeoTrust Smart Icon tag -->
            <h2 class="dl">
                <img decoding="async" src="/entry/wp-content/themes/tbg_mailform/assets/img/dltejun.png" alt="ダウンロード手順">ダウンロード手順
            </h2>
                <ol class="dl_list">
                    <li>下記の項目にお答えください。（※印は必須項目です）</li>
                    <li>確認ボタンをクリックすると確認ページへ進みます。</li>
                    <li>内容を確認し間違いがなければ、「送信」ボタンをクリックします。</li>
                    <li>アンケート送信完了の画面が開き、「ダウンロード」ボタンが表示されます。</li>
                    <li>「ダウンロード」ボタンを選択すると、ダウンロードが開始されます。（任意の場所に保存してください）</li>
                    <li>ダウンロードされたファイルを選択し、「LEDスマートリモコン」のインストールを行います。</li>
                </ol>
    </div>
        <!--アンケート・ダウンロード手順案内　ここまで-->
        <!--プラグイン MW WP Form が生成するHTML -->
        <div id="mw_wp_form_mw-wp-form-7" class="mw_wp_form mw_wp_form_input  ">
            <form method="post" action="" enctype="multipart/form-data">
        <!--プラグイン MW WP Form が生成するHTML　ここまで -->

        <!--MW WP Form に投稿するHTML
        <input>や<select>タグは、投稿時には「MW WP Form」のタグに置き換えます。MW WP Form については以下URLのマニュアルを参考にしてください。https://mw-wp-form.web-soudan.co.jp/manual/-->
        <h2 class="que_tit">
            <img decoding="async" src="/entry/wp-content/themes/tbg_mailform/assets/img/enq2.png" alt="">アンケートにご協力ください
        </h2>
        <div class="dl_main">
            <section class="col">
                <h3>会社名・店舗名<span class="style3">※</span></h3>
                    <div id="mw_wp_form_mw-wp-form-7" class="mw_wp_form mw_wp_form_input  ">
                        <input type="text" name="corp" id="corp" class="corp" size="40" value="">
                            <span class="style2">（全角）</span>
                    </div>
            </section>
            <section class="col">
                <h3>業種<span class="style3">※</span></h3>
                <div class="other">
                <div id="mw_wp_form_mw-wp-form-7" class="mw_wp_form mw_wp_form_input  ">
                    <select name="co_type" id="co_type" class="co_type">
                        <option value="" selected="selected">（選択して下さい） </option>
                        <option value="小売業"> 小売業 </option>
                        <option value="飲食業"> 飲食業 </option>
                        <option value="サービス業"> サービス業 </option>
                        <option value="製造業"> 製造業 </option>
                        <option value="卸、商社"> 卸、商社 </option>
                        <option value="ＳＩ、ソフト会社"> ＳＩ、ソフト会社 </option>
                        <option value="その他の業種"> その他の業種 </option>
                    </select>
                </div>
                <div class="style2">　その他を選択された場合、ご入力ください。
                <div id="mw_wp_form_mw-wp-form-7" class="mw_wp_form mw_wp_form_input  ">
                        <input type="text" name="co_type_other" id="co_type_other" class="co_type_other" size="20" value="">
                        <span class="style2">（全角）</span>
                        </div>
                    </div>
                </div>
            </section>
            <section class="col">
                <h3>ご利用機種<span class="style3">※</span></h3>
                <div id="mw_wp_form_mw-wp-form-7" class="mw_wp_form mw_wp_form_input  ">
                    <input type="text" name="kisyu" id="kisyu" class="kisyu" size="30" value="">
                        <span class="style2">（半角英数字）</span>
                </div>
            </section>
            <section class="col">
                <h3>製造番号<span class="style3">※</span></h3>
                <div id="mw_wp_form_mw-wp-form-7" class="mw_wp_form mw_wp_form_input  ">
                    <input type="text" name="serial" id="serial" class="serial" size="20" value="">
                        <span class="style2">（半角英数字）</span>
                            <div id="valid_message">　LED表示機本体の保証書に記載されている8桁の番号をご記入ください。</div>
                </div>
            </section>
            <section class="col">
                <h3>購入販売社店名<span class="style3">※</span></h3>
                <div id="mw_wp_form_mw-wp-form-7" class="mw_wp_form mw_wp_form_input  ">
                    <input type="text" name="shop" id="shop" class="shop" size="20" value="">
                        <span class="style2">（全角）</span>
                            <div class="style2">　製品を購入された販売社店名をご入力ください。</div>
                </div>
            </section>
            <section class="col">
                <h3>購入日<span class="style3">※</span></h3>
                <div id="mw_wp_form_mw-wp-form-7" class="mw_wp_form mw_wp_form_input  ">
                    <select name="date_1" id="date_1" class="date_1">
                        <option value="" selected="selected"> （選択して下さい） </option>
                        <option value="2016"> 2016 </option>
                        <option value="2017"> 2017 </option>
                        <option value="2018"> 2018 </option>
                        <option value="2019"> 2019 </option>
                        <option value="2020"> 2020 </option>
                        <option value="2021"> 2021 </option>
                        <option value="2022"> 2022 </option>
                        <option value="2023"> 2023 </option>
                        <option value="2024"> 2024 </option>
                        <option value="2025"> 2025 </option>
                        <option value="2026"> 2026 </option>
                        <option value="2027"> 2027 </option>
                        <option value="2028"> 2028 </option>
                        <option value="2029"> 2029 </option>
                        <option value="2030"> 2030 </option>
                        <option value="2031"> 2031 </option>
                        <option value="2032"> 2032 </option>
                        <option value="2033"> 2033 </option>
                        <option value="2034"> 2034 </option>
                        <option value="2035"> 2035 </option>
                    </select>
                        <span>年</span>

                    <select name="date_2" id="date_2" class="date_2">
                        <option value="" selected="selected"> （選択して下さい） </option>
                        <option value="1"> 1 </option>
                        <option value="2"> 2 </option>
                        <option value="3"> 3 </option>
                        <option value="4"> 4 </option>
                        <option value="5"> 5 </option>
                        <option value="6"> 6 </option>
                        <option value="7"> 7 </option>
                        <option value="8"> 8 </option>
                        <option value="9"> 9 </option>
                        <option value="10"> 10 </option>
                        <option value="11"> 11 </option>
                        <option value="12"> 12 </option>
                    </select>
                        <span>月</span>

                    <select name="date_3" id="date_3" class="date_3">
                        <option value="" selected="selected">（選択して下さい） </option>
                        <option value="1"> 1 </option>
                        <option value="2"> 2 </option>
                        <option value="3"> 3 </option>
                        <option value="4"> 4 </option>
                        <option value="5"> 5 </option>
                        <option value="6"> 6 </option>
                        <option value="7"> 7 </option>
                        <option value="8"> 8 </option>
                        <option value="9"> 9 </option>
                        <option value="10"> 10 </option>
                        <option value="11"> 11 </option>
                        <option value="12"> 12 </option>
                        <option value="13"> 13 </option>
                        <option value="14"> 14 </option>
                        <option value="15"> 15 </option>
                        <option value="16"> 16 </option>
                        <option value="17"> 17 </option>
                        <option value="18"> 18 </option>
                        <option value="19"> 19 </option>
                        <option value="20"> 20 </option>
                        <option value="21"> 21 </option>
                        <option value="22"> 22 </option>
                        <option value="23"> 23 </option>
                        <option value="24"> 24 </option>
                        <option value="25"> 25 </option>
                        <option value="26"> 26 </option>
                        <option value="27"> 27 </option>
                        <option value="28"> 28 </option>
                        <option value="29"> 29 </option>
                        <option value="30"> 30 </option>
                        <option value="31"> 31 </option>
                    </select>
                        <span>日</span>
                            <div class="style2">　製品を購入された日付をご入力ください。</div>
                </div>
            </section>
            <section class="col">
                <h3>お名前 （漢字）<span class="style3">※</span></h3>
                <div id="mw_wp_form_mw-wp-form-7" class="mw_wp_form mw_wp_form_input  ">
                    <div class="last_name">姓</div>
                        <input type="text" name="name_1" id="name_1" class="name_1" size="20" value="">
                </div>
                    <div id="mw_wp_form_mw-wp-form-7" class="mw_wp_form mw_wp_form_input  ">
                        <div class="first_name">名</div>
                            <input type="text" name="name_2" id="name_2" class="name_2" size="20" value="">
                                <span class="style2">（全角）</span>
                    </div>
            </section>
            <section class="col">
                <h3>お名前 （フリガナ）<span class="style3">※</span></h3>
                <div id="mw_wp_form_mw-wp-form-7" class="mw_wp_form mw_wp_form_input  ">
                    <div class="last_name">姓</div>
                        <input type="text" name="kana_1" id="kana_1" class="kana_1" size="20" value="">
                </div>
                    <div id="mw_wp_form_mw-wp-form-7" class="mw_wp_form mw_wp_form_input  ">
                        <div class="first_name">名</div>
                            <input type="text" name="kana_2" id="kana_2" class="kana_2" size="20" value="">
                            <span class="style2">（全角）</span>
                    </div>
            </section>
            <section class="col">
                <h3>郵便番号</h3>
                <div id="mw_wp_form_mw-wp-form-7" class="mw_wp_form mw_wp_form_input  ">
                    <input type="text" name="post_1" id="post_1" class="post_1" size="6" value="">
                        -
                    <input type="text" name="post_2" id="post_2" class="post_2" size="8" value="">
                        <span class="style2">（半角数字）</span>
                </div>
            </section>
            <section class="col">
                <h3>住所：都道府県名<span class="style3">※</span></h3>
                <div id="mw_wp_form_mw-wp-form-7" class="mw_wp_form mw_wp_form_input  ">
                    <select name="pref" id="pref" class="pref">
                        <option value="" selected="selected">（選択して下さい） </option>
                        <option value="北海道"> 北海道 </option>
                        <option value="青森県"> 青森県 </option>
                        <option value="岩手県"> 岩手県 </option>
                        <option value="宮城県"> 宮城県 </option>
                        <option value="秋田県"> 秋田県 </option>
                        <option value="山形県"> 山形県 </option>
                        <option value="福島県"> 福島県 </option>
                        <option value="茨城県"> 茨城県 </option>
                        <option value="栃木県"> 栃木県 </option>
                        <option value="群馬県"> 群馬県 </option>
                        <option value="埼玉県"> 埼玉県 </option>
                        <option value="千葉県"> 千葉県 </option>
                        <option value="東京都"> 東京都 </option>
                        <option value="神奈川県"> 神奈川県 </option>
                        <option value="新潟県"> 新潟県 </option>
                        <option value="山梨県"> 山梨県 </option>
                        <option value="富山県"> 富山県 </option>
                        <option value="石川県"> 石川県 </option>
                        <option value="福井県"> 福井県 </option>
                        <option value="長野県"> 長野県 </option>
                        <option value="岐阜県"> 岐阜県 </option>
                        <option value="静岡県"> 静岡県 </option>
                        <option value="愛知県"> 愛知県 </option>
                        <option value="三重県"> 三重県 </option>
                        <option value="滋賀県"> 滋賀県 </option>
                        <option value="京都府"> 京都府 </option>
                        <option value="大阪府"> 大阪府 </option>
                        <option value="兵庫県"> 兵庫県 </option>
                        <option value="奈良県"> 奈良県 </option>
                        <option value="和歌山県"> 和歌山県 </option>
                        <option value="鳥取県"> 鳥取県 </option>
                        <option value="島根県"> 島根県 </option>
                        <option value="岡山県"> 岡山県 </option>
                        <option value="広島県"> 広島県 </option>
                        <option value="山口県"> 山口県 </option>
                        <option value="徳島県"> 徳島県 </option>
                        <option value="香川県"> 香川県 </option>
                        <option value="愛媛県"> 愛媛県 </option>
                        <option value="高知県"> 高知県 </option>
                        <option value="福岡県"> 福岡県 </option>
                        <option value="佐賀県"> 佐賀県 </option>
                        <option value="長崎県"> 長崎県 </option>
                        <option value="熊本県"> 熊本県 </option>
                        <option value="大分県"> 大分県 </option>
                        <option value="宮崎県"> 宮崎県 </option>
                        <option value="鹿児島県"> 鹿児島県 </option>
                        <option value="沖縄県"> 沖縄県 </option>
                    </select>
                </div>
            </section>
            <section class="col">
                <h3>住所：それ以降<span class="style3">※</span></h3>
                <div id="mw_wp_form_mw-wp-form-7" class="mw_wp_form mw_wp_form_input  ">
                    <input type="text" name="addr_1" id="addr_1" class="addr_1" size="50" value="">
                    <span class="style2">（全角）</span>
                </div>
            </section>
            <section class="col">
                <h3>電話番号<span class="style3">※</span></h3>
                <div id="mw_wp_form_mw-wp-form-7" class="mw_wp_form mw_wp_form_input  ">
                    <input type="text" name="tel_1" id="tel_1" class="tel_1" size="8" value="">
                    -
                    <input type="text" name="tel_2" id="tel_2" class="tel_2" size="8" value="">
                    -
                    <input type="text" name="tel_3" id="tel_3" class="tel_3" size="8" value="">
                        <span class="style2">（半角数字）</span>
                </div>
            </section>
            <section class="col">
                <h3>ＦＡＸ番号</h3>
                <div id="mw_wp_form_mw-wp-form-7" class="mw_wp_form mw_wp_form_input  ">
                    <input type="text" name="fax_1" id="fax_1" class="fax_1" size="8" value="">
                        -
                    <input type="text" name="fax_2" id="fax_2" class="fax_2" size="8" value="">
                        -
                    <input type="text" name="fax_3" id="fax_3" class="fax_3" size="8" value="">
                        <span class="style2">（半角数字）</span>
                </div>
            </section>
            <section class="col">
                <h3>メールアドレス<span class="style3">※</span></h3>
                <div id="mw_wp_form_mw-wp-form-7" class="mw_wp_form mw_wp_form_input  ">
                    <input type="text" name="email" id="email" class="email" size="40" value="">
                        <span class="style2">（半角英数字・記号）</span>
                            <div class="style2">　ソフトのバージョンアップ等のご案内をお送り致します。
                            </div>
                </div>
            </section>
            <section class="col">
                    <h3>製品に関するご意見・ご要望などございましたらご記入下さい。</h3>
                    <div id="mw_wp_form_mw-wp-form-7" class="mw_wp_form mw_wp_form_input  ">
                        <textarea name="q2" id="q2" class="q2" cols="40" rows="5"></textarea>
                            <span class="style2">（全角）</span>
                    </div>
            </section>
            <input type="submit" name="submitConfirm" value="確認画面へ" class="submit">
            </div>
            <div class="copyright">COPYRIGHT © TB GROUP INC. ALL RIGHTS RESERVED.</div>
            <!--MW WP Form に投稿するHTML ここまで -->
        </div>
        </form>
</div>
        <!-- end .mw_wp_form -->


<?php
//get_sidebar();
get_footer();
