<div class="wrap">
	<h2>テーマ設定</h2>
	<p>機能のスイッチを切り替えることで、プラグインと干渉してしまう機能や、必要のない機能をOFFにすることができます。</p>

	<form method="post" action="options.php" enctype="multipart/form-data" encoding="multipart/form-data">
		<?php
			settings_fields( 'woffee-is-active-group' );
			do_settings_sections( 'woffee-is-active-group' );
			$options = get_option( 'woffee_is_active' );
		?>
		<?php var_dump($options['is_active_meta_tag']); ?>
		<div class="metabox-holder">
			<div class="postbox">
				<h3 class="hndle"><span>SEO関連機能</span></h3>
				<div class="toggle_button">
					<input name="woffee_is_active[is_active_meta_tag]" id="is_active_meta_tag" class="toggle_input" type="checkbox" value="1" <?php checked( 1, $options['is_active_meta_tag']); ?>>
					<label for="is_active_meta_tag" class="toggle_label">
						<span>metaタグ設定</span>
					</label>
				</div>
				<div class="toggle_button">
					<input name="woffee_is_active[is_active_meta_robots]" id="is_active_meta_robots" class="toggle_input" type="checkbox" value="1" <?php checked( 1, $options['is_active_meta_robots']); ?>>
					<label for="is_active_meta_robots" class="toggle_label">
						<span>meta robots設定</span>
					</label>
				</div>
			</div>
		</div>

		<div class="metabox-holder">
			<div class="postbox">
				<h3 class="hndle"><span>解析ツール設定機能</span></h3>
				<div class="toggle_button">
					<input name="woffee_is_active[is_active_google_analytics]" id="is_active_google_analytics" class="toggle_input" type="checkbox" value="1" <?php checked( 1, $options['is_active_google_analytics']); ?>>
					<label for="is_active_google_analytics" class="toggle_label">
						<span>Googleアナリティクス設定</span>
					</label>
				</div>
				<div class="toggle_button">
					<input name="woffee_is_active[is_active_google_tagmanager]" id="is_active_google_tagmanager" class="toggle_input" type="checkbox" value="1" <?php checked( 1, $options['is_active_google_tagmanager']); ?>>
					<label for="is_active_google_tagmanager" class="toggle_label">
						<span>Googleタグマネージャー設定</span>
					</label>
				</div>
				<div class="toggle_button">
					<input name="woffee_is_active[is_active_google_searchconsole]" id="is_active_google_searchconsole" class="toggle_input" type="checkbox" value="1" <?php checked( 1, $options['is_active_google_searchconsole']); ?>>
					<label for="is_active_google_searchconsole" class="toggle_label">
						<span>Googleサーチコンソール設定</span>
					</label>
				</div>
				<div class="toggle_button">
					<input name="woffee_is_active[is_active_other_analytics]" id="is_active_other_analytics" class="toggle_input" type="checkbox" value="1" <?php checked( 1, $options['is_active_other_analytics']); ?>>
					<label for="is_active_other_analytics" class="toggle_label">
						<span>その他アクセス解析・広告コード設定</span>
					</label>
				</div>
			</div>
		</div>

		<div class="metabox-holder">
			<div class="postbox">
				<h3 class="hndle"><span>SNS関連機能</span></h3>
				<div class="toggle_button">
					<input name="woffee_is_active[is_active_sns_share]" id="is_active_sns_share" class="toggle_input" type="checkbox" value="1" <?php checked( 1, $options['is_active_sns_share']); ?>>
					<label for="is_active_sns_share" class="toggle_label">
						<span>SNSシェアボタン</span>
					</label>
				</div>
				<div class="toggle_button">
					<input name="woffee_is_active[is_active_sns_follow]" id="is_active_sns_follow" class="toggle_input" type="checkbox" value="1" <?php checked( 1, $options['is_active_sns_follow']); ?>>
					<label for="is_active_sns_follow" class="toggle_label">
						<span>SNSフォローボタン</span>
					</label>
				</div>
				<div class="toggle_button">
					<input name="woffee_is_active[is_active_ogp_settings]" id="is_active_ogp_settings" class="toggle_input" type="checkbox" value="1" <?php checked( 1, $options['is_active_ogp_settings']); ?>>
					<label for="is_active_ogp_settings" class="toggle_label ogp_settings_label">
						<span>OGPタグ <i class="fa-solid fa-circle-question"></i></span>
						<p class="tooltip">SNSでシェアした際に、タイトルやURL等の詳細情報を伝える、head内のHTML要素です</p>
					</label>
				</div>
			</div>
		</div>

		<div class="metabox-holder">
			<div class="postbox">
				<h3 class="hndle"><span>記事内デザイン機能</span></h3>
				<div class="toggle_button">
					<input name="woffee_is_active[is_active_table_of_contents]" id="is_active_table_of_contents" class="toggle_input" type="checkbox" value="1" <?php checked( 1, $options['is_active_table_of_contents']); ?>>
					<label for="is_active_table_of_contents" class="toggle_label">
						<span>目次</span>
					</label>
				</div>
				<div class="toggle_button">
					<input name="woffee_is_active[is_active_table_scroll]" id="is_active_table_scroll" class="toggle_input" type="checkbox" value="1" <?php checked( 1, $options['is_active_table_scroll']); ?>>
					<label for="is_active_table_scroll" class="toggle_label">
						<span>テーブルスクロール</span>
					</label>
				</div>
				<div class="toggle_button">
					<input name="woffee_is_active[is_active_blogcard]" id="is_active_blogcard" class="toggle_input" type="checkbox" value="1" <?php checked( 1, $options['is_active_blogcard']); ?>>
					<label for="is_active_blogcard" class="toggle_label">
						<span>ブログカード</span>
					</label>
				</div>
				<div class="toggle_button">
					<input name="woffee_is_active[is_active_pagetop]" id="is_active_pagetop" class="toggle_input" type="checkbox" value="1" <?php checked( 1, $options['is_active_pagetop']); ?>>
					<label for="is_active_pagetop" class="toggle_label">
						<span>ページトップボタン</span>
					</label>
				</div>
			</div>
		</div>

		<div class="metabox-holder">
			<div class="postbox">
				<h3 class="hndle"><span>アフィリエイト関連機能</span></h3>
				<div class="toggle_button">
					<input name="woffee_is_active[is_active_affiliate]" id="is_active_affiliate" class="toggle_input" type="checkbox" value="1" <?php checked( 1, $options['is_active_affiliate']); ?>>
					<label for="is_active_affiliate" class="toggle_label">
						<span>API設定</span>
					</label>
				</div>
			</div>
		</div>

		<div class="metabox-holder">
			<div class="postbox">
				<h3 class="hndle"><span>記事関連機能</span></h3>
				<div class="toggle_button">
					<input name="woffee_is_active[is_active_related_posts]" id="is_active_related_posts" class="toggle_input" type="checkbox" value="1" <?php checked( 1, $options['is_active_related_posts']); ?>>
					<label for="is_active_related_posts" class="toggle_label">
						<span>関連記事</span>
					</label>
				</div>
				<div class="toggle_button">
					<input name="woffee_is_active[is_active_recommend_posts]" id="is_active_recommend_posts" class="toggle_input" type="checkbox" value="1" <?php checked( 1, $options['is_active_recommend_posts']); ?>>
					<label for="is_active_recommend_posts" class="toggle_label">
						<span>おすすめ記事</span>
					</label>
				</div>
			</div>
		</div>

		<div class="metabox-holder">
			<div class="postbox">
				<h3 class="hndle"><span>CTA関連機能</span></h3>
				<div class="toggle_button">
					<input name="woffee_is_active[is_active_under_cta]" id="is_active_under_cta" class="toggle_input" type="checkbox" value="1" <?php checked( 1, $options['is_active_under_cta']); ?>>
					<label for="is_active_under_cta" class="toggle_label">
						<span>記事下CTA</span>
					</label>
				</div>
				<div class="toggle_button">
					<input name="woffee_is_active[is_active_fixed_banner]" id="is_active_fixed_banner" class="toggle_input" type="checkbox" value="1" <?php checked( 1, $options['is_active_fixed_banner']); ?>>
					<label for="is_active_fixed_banner" class="toggle_label">
						<span>下固定バナー</span>
					</label>
				</div>
				<div class="toggle_button">
					<input name="woffee_is_active[is_active_management_banner]" id="is_active_management_banner" class="toggle_input" type="checkbox" value="1" <?php checked( 1, $options['is_active_management_banner']); ?>>
					<label for="is_active_management_banner" class="toggle_label">
						<span>バナー管理</span>
					</label>
				</div>
			</div>
		</div>
		<?php submit_button(); ?>
	</form>
<div>