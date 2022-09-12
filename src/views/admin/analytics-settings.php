<div class="wrap">
	<h2>解析ツール設定</h2>
	<form method="post" action="options.php" enctype="multipart/form-data" encoding="multipart/form-data">
		<?php
			settings_fields( 'woffee-analytics-group' );
			do_settings_sections( 'woffee-analytics-group' );
			$options = get_option('woffee_analytics_settings');
		?>
		<div class="metabox-holder">
			<div class="postbox">
				<h3 class="hndle"><span>Googleサーチコンソール設定</span></h3>
				<div class="inside">
					<table class="form-table">
						<tr>
							<th scope="row">
								<label for="google_search_console_id">サーチコンソールID</label>
							</th>
							<td>
								<input type="text" id="google_search_console_id" name="google_search_console_id" size="60" value="" placeholder="サイト認証IDのみ入力">
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<div class="metabox-holder">
			<div class="postbox">
				<h3 class="hndle"><span>Googleアナリティクス設定</span></h3>
				<div class="inside">
					<p class="tips"><span class="fas fa-info-circle" aria-hidden="true"></span> GoogleアナリティクスのトラッキングIDを入力してください。タグマネージャーのトラッキングIDが入っている場合はタグマネージャーが優先されます。</p>
					<table class="form-table">
						<tr>
							<th scope="row"><label for="is_active_ga4">GA4を使用する</label>
							</th>
							<td class="toggle_button">
								<input type="checkbox" name="is_active_ga4" id="is_active_ga4" class="toggle_input">
								<label for="is_active_ga4" class="toggle_label"><span>OFFの場合は、UAを使用します。<br>今後はGA4の使用を推奨します。</span></label>
							</td>
						</tr>
						<tr>
							<th scope="row">
								<label for="google_analytics_tracking_id">トラッキングID</label>
							</th>
							<td>
								<input type="text" id="google_analytics_tracking_id" name="google_analytics_tracking_id" size="60" value="" placeholder="G-0000000000">
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<div class="metabox-holder">
			<div class="postbox">
				<h3 class="hndle"><span>Googleタグマネージャー設定</span></h3>
				<div class="inside">
					<table class="form-table">
						<tr>
							<th scope="row">
								<label for="google_tagmanager_tracking_id">タグマネージャーID</label>
							</th>
							<td>
								<input type="text" id="google_tagmanager_tracking_id" name="google_tagmanager_tracking_id" size="60" value="" placeholder="GTM-0000000">
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<div class="metabox-holder">
			<div class="postbox">
				<h3 class="hndle"><span>その他のコード・タグ挿入</span></h3>
				<div class="inside">
					<p>HTML内に埋め込み指定されたコードやタグを、指定された場所にあたるテキストエリアに、そのまま貼り付けてください。</p>
					<table class="form-table">
					<tbody>
						<tr>
							<th scope="row">
								<label for="other_analytics_head_tags" class="tooltip_label __under">
									&lt;head&gt;&lt;/head&gt;内 <i class="fa-solid fa-circle-question"></i>
									<p class="tooltip">&lt;head&gt;&lt;/head&gt;内に挿入する必要のあるコード、タグを入力してください。アドセンス認証コードもこちらに入力してください。</p>
								</label>
							</th>
							<td><textarea id="other_analytics_head_tags" name="other_analytics_head_tags" rows="10" cols="60"></textarea></td>
						</tr>
						<tr>
							<th scope="row">
								<label for="other_analytics_header_tags" class="tooltip_label __under">
									&lt;body&gt;直後 <i class="fa-solid fa-circle-question"></i>
									<p class="tooltip">&lt;body&gt;直後に挿入する必要のあるコード、タグを入力してください。</p>
								</label>
							</th>
							<td><textarea id="other_analytics_header_tags" name="other_analytics_header_tags" rows="10" cols="60"></textarea></td>
						</tr>
						<tr>
							<th scope="row">
								<label for="other_analytics_footer_tags" class="tooltip_label __under">
									&lt;/body&gt;直前 <i class="fa-solid fa-circle-question"></i>
									<p class="tooltip">&lt;/body&gt;直前に挿入する必要のあるコード、タグを入力してください。</p>
								</label>
							</th>
							<td><textarea id="other_analytics_footer_tags" name="other_analytics_footer_tags" rows="10" cols="60"></textarea></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<?php submit_button(); ?>
	</form>
<div>
<?php add_action('admin_init', 'woffee_admin_init', 'analytics-settings', 'woffee_analytics_settings', $options ); ?>