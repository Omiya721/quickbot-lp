
<?php get_header(); ?>

    <main>

        <?php
        // 投稿や固定ページの内容を表示するメインループ
        if ( have_posts() ) : while ( have_posts() ) : the_post();
            the_content();
        endwhile; endif;
        ?>

        <!--ご利用の流れ ここから-->
        <section class="steps">

            <div class="steps__inner">
                <h2 class="c-section-title">
                    ご利用の流れ
                    <span class="c-section-title__line"></span>
                </h2>

                <ul class="steps__list">

                    <li class="steps__item">
                        <div class="steps__number-wrapper">
                            <span class="steps__number">1</span>
                        </div>
                        <div class="steps__content">
                            <h3 class="steps__item-title">資料請求・お申し込み</h3>
                            <p class="steps__item-text">
                                専用フォームよりお問い合わせください。サービス詳細資料をお送りします。
                            </p>
                        </div>
                    </li>

                    <li class="steps__item">
                        <div class="steps__number-wrapper">
                            <span class="steps__number">2</span>
                        </div>
                        <div class="steps__content">
                            <h3 class="steps__item-title">自社データの読み込み</h3>
                            <p class="steps__item-text">
                                管理画面に自社のホームページURLや、よくある質問（FAQ）のテキストをそのまま貼り付けます。
                            </p>
                        </div>
                    </li>

                    <li class="steps__item">
                        <div class="steps__number-wrapper">
                                <span class="steps__number">3</span>
                        </div>
                        <div class="steps__content">
                            <h3 class="steps__item-title">AIの自動学習</h3>
                            <p class="steps__item-text">
                                数分ほどでAIがデータを自動学習し、あなたの会社専用の賢いチャットボットが生成されます。
                            </p>
                        </div>
                    </li>

                    <li class="steps__item">
                        <div class="steps__number-wrapper">
                                <span class="steps__number">4</span>
                        </div>
                        <div class="steps__content">
                            <h3 class="steps__item-title">コードをサイトへ設置</h3>
                            <p class="steps__item-text">
                                管理画面で発行される1行のコードを、自社サイトのHTMLにコピー＆ペーストするだけです。
                            </p>
                        </div>
                    </li>

                    <li class="steps__item">
                        <div class="steps__number-wrapper">
                                <span class="steps__number">5</span>
                        </div>
                        <div class="steps__content">
                            <h3 class="steps__item-title">運用開始・効果検証</h3>
                            <p class="steps__item-text">
                                サイトの右下にチャットが出現し、24時間自動応答がスタート。チャットの利用率はいつでも管理画面から確認できます。
                            </p>
                        </div>
                    </li>

                </ul>
            </div>

        </section>

        <!--よくあるご質問 ここから-->
        <section class="faq">

            <div class="faq__inner">
                <h2 class="c-section-title">
                    よくある質問
                    <span class="c-section-title__line"></span>
                </h2>

                <div class="faq__list">

                    <details class="faq__item js-faq">
                        <summary class="faq__head">
                            <span class="faq__icon-q">Q</span>
                            <h3 class="faq__question">QuickBot.では、どんなことができますか？</h3>
                            <span class="faq__arrow"></span>
                        </summary>
                        <div class="faq__body">
                            <div class="faq__body-inner">
                                <p class="faq__answer">
                                    自社のWEBサイトやマニュアルのURLを読み込ませるだけで、AIがその内容を学習し、ユーザーからの問い合わせに24時間365日、自動で即答するチャットボットを作成できます。
                                </p>
                            </div>
                        </div>
                    </details>

                    <details class="faq__item js-faq">
                        <summary class="faq__head">
                            <span class="faq__icon-q">Q</span>
                            <h3 class="faq__question">AIの学習には専門知識やプログラミングが必要ですか？</h3>
                            <span class="faq__arrow"></span>
                        </summary>
                        <div class="faq__body">
                            <div class="faq__body-inner">
                                <p class="faq__answer">
                                    いいえ、一切不要です。管理画面に学習させたいURLを貼り付けるか、テキストをコピー＆ペーストするだけで設定が完了します。
                                </p>
                            </div>
                        </div>
                    </details>

                    <details class="faq__item js-faq">
                        <summary class="faq__head">
                            <span class="faq__icon-q">Q</span>
                            <h3 class="faq__question">無料トライアル期間が終わったら勝手に課金されますか？</h3>
                            <span class="faq__arrow"></span>
                        </summary>
                        <div class="faq__body">
                            <div class="faq__body-inner">
                                <p class="faq__answer">
                                    いいえ、自動的に有料プランへ移行することはありません。トライアル終了後も継続してご利用いただく場合のみ、お支払い手続きを行っていただきます。
                                </p>
                            </div>
                        </div>
                    </details>

                    <details class="faq__item js-faq">
                        <summary class="faq__head">
                            <span class="faq__icon-q">Q</span>
                            <h3 class="faq__question">LINEやSlackなどの外部ツールと連携できますか？</h3>
                            <span class="faq__arrow"></span>
                        </summary>
                        <div class="faq__body">
                            <div class="faq__body-inner">
                                <p class="faq__answer">
                                    はい、可能です。LINE公式アカウント、Slack、Teamsなど主要なコミュニケーションツールと簡単に接続できます。いつものチャット画面から直接顧客の対応や通知の受け取りができるため、新しいツールの操作を覚える必要はありません。
                                </p>
                            </div>
                        </div>
                    </details>

                </div>
            </div>

        </section>

        <!--お問い合わせフォーム ここから-->
        <section id="contact" class="contact">

            <div class="contact__inner">
                <h2 class="c-section-title">
                    お問い合わせ
                    <span class="c-section-title__line"></span>
                </h2>

                <form action="#" method="POST" class="contact__form">

                    <div class="contact__fields">
                        <label for="company" class="contact__label">貴社名</label>
                        <input type="text" id="company" name="company" class="contact__input" placeholder="貴社名を入力してください">
                    </div>

                    <div class="contact__fields">
                        <label for="name" class="contact__label">担当者名</label>
                        <input type="text" id="name" name="name" class="contact__input" placeholder="担当者名を入力してください">
                    </div>

                    <div class="contact__fields">
                        <div class="contact__label-row">
                            <label for="tel" class="contact__label">電話番号</label>
                            <span class="contact__label-note">ハイフンなし</span>
                        </div>
                        <input type="tel" id="tel" name="tel" class="contact__input" placeholder="電話番号を入力してください">
                    </div>

                    <div class="contact__fields">
                        <label for="email" class="contact__label">メールアドレス</label>
                        <input type="email" id="email" name="email" class="contact__input" placeholder="メールアドレスを入力してください">
                    </div>

                    <div class="contact__fields">
                        <label for="purpose" class="contact__label">お問い合わせ内容</label>
                        <div class="contact__select-wrapper">
                            <select id="purpose" name="purpose" class="contact__select">
                                <option value="資料請求">資料請求のご相談</option>
                                <option value="サービスについてのご質問">サービスについてのご質問</option>
                                <option value="料金・プランについてのご相談">料金・プランについてのご相談</option>
                                <option value="無料トライアルについて">無料トライアルについて</option>
                                <option value="その他">その他</option>
                            </select>
                        </div>
                    </div>

                    <div class="contact__fields">
                        <label for="message" class="contact__label">詳しいお問い合わせ内容</label>
                        <textarea id="message" name="message" class="contact__input contact__input--textarea" placeholder="ご質問やご相談がございましたら、自由にご記入ください。"></textarea>
                    </div>

                    <div class="contact__checkbox-wrapper">
                        <label class="contact__checkbox-label">
                            <input type="checkbox" name="agree" class="contact__checkbox" required>
                            <span class="contact__checkbox-text">プライバシーポリシーに同意する</span>
                        </label>
                    </div>

                    <div class="contact__submit-wrapper">
                        <button type="submit" class="contact__btn">送信</button>
                    </div>

                </form>

            </div>

        </section>

    </main>

<?php get_footer(); ?>