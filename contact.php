<?php
/**　　　　　　　　　　　　　　　　　
 * Template Name: contact
 */get_header(); ?>
<main id="main" class="single js-fadeInContainer">
    <section class="section" id="single">
        <div class="single-key">
            <h2 class="section-title"><span>CONTACT</span></h2>
        </div>
        <div class="container js-fadeInDefault">
            <h3 class="single-sub"><span>お問い合せフォーム</span></h3>
            <p class="single-text">お客さまの要望にフレキシブルにご対応させて頂きます。</p>

            <div class="single-table-col">
                <form action="#" method="post" id="single-form">
                    <table>
                        <tbody>
                            <tr class="single-table-item">
                                <th rowspan="2" class="single-header attention">お問合せの内容</th>
                                <td class="single-data">
                                    <label for="contact01_01"><input type="radio" id="contact01_01" name="contact01"
                                            value="お問い合わせのみ" />お問い合わせのみ</label><br class="sp-show" />
                                    <label for="contact01_02"><input type="radio" id="contact01_02" name="contact01"
                                            value="ご購入" />ご購入</label><br class="sp-show" />
                                    <label for="contact01_03"><input type="radio" id="contact01_03" name="contact01"
                                            value="ホームページのお引越し" />ホームページのお引越し</label>
                                </td>
                            </tr>
                            <tr class="single-table-error">
                                <td>&nbsp;</td>
                            </tr>
                            <tr class="single-table-item">
                                <th rowspan="2" class="single-header attention">ご検討中のプラン</th>
                                <td class="single-data">
                                    <label for="contact02_01"><input type="radio" id="contact02_01" name="contact02"
                                            value="シンプルプラン" />シンプルプラン</label><br class="sp-show" />
                                    <label for="contact02_02"><input type="radio" id="contact02_02" name="contact02"
                                            value="スタンダードプラン" />スタンダードプラン</label><br class="sp-show" />
                                    <label for="contact02_03"><input type="radio" id="contact02_03" name="contact02"
                                            value="フルオーダープラン" />フルオーダープラン</label>
                                </td>
                            </tr>

                            <tr class="single-table-error">
                                <td>&nbsp;</td>
                            </tr>
                            <tr class="single-table-item">
                                <th rowspan="2" class="single-header attention"><label for="contact03_01">お名前</label>
                                </th>
                                <td class="single-data">
                                    <input type="text" id="contact03_01" name="contact03" />
                                </td>
                            </tr>
                            <tr class="single-table-error">
                                <td>&nbsp;</td>
                            </tr>
                            <tr class="single-table-item">
                                <th rowspan="2" class="single-header attention"><label
                                        for="contact04_01">メールアドレス</label></th>
                                <td class="single-data">
                                    <input type="email" id="contact04_01" name="contact04" />
                                </td>
                            </tr>
                            <tr class="single-table-error">
                                <td>&nbsp;</td>
                            </tr>
                            <tr class="single-table-item">
                                <th rowspan="2" class="single-header attention"><label
                                        for="contact05_01">お問合せ内容本文</label></th>
                                <td class="single-data">
                                    <textarea type="text" id="contact05_01" name="contact05"></textarea>
                                </td>
                            </tr>
                            <tr class="single-table-error">
                                <td>&nbsp;</td>
                            </tr>
                        </tbody>
                        <tfoot class="single-table-tfoot">
                            <tr>
                                <td colspan="2">
                                    <input type="submit" value="送信する" />
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </form>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>