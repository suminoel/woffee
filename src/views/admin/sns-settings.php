<div class="wrap">
	<h2>SNS設定</h2>
	<form method="post" action="options.php" enctype="multipart/form-data" encoding="multipart/form-data">
		<?php
			settings_fields( 'woffee-social-group' );
			do_settings_sections( 'woffee-social-group' );
			$options = get_option('woffee_social_settings');
		?>
		<div class="metabox-holder">
			<div class="postbox">
				<h3 class="hndle"><span>SNSフォローボタン</span></h3>
				<div class="inside">
					<p>各SNSのURLをコピーして貼り付けてください。未入力のものは表示されません。</p>
					<table class="form-table">
						<tr>
							<th scope="row"><label for="twitter_url">Twitter</label></th>
							<td><input type="text" id="twitter_url" name="twitter_url" size="60" value=""></td>
						</tr>
						<tr>
							<th scope="row"><label for="facebook_url">Facebook</label></th>
							<td><input type="text" id="facebook_url" name="facebook_url" size="60" value=""></td>
						</tr>
						<tr>
							<th scope="row"><label for="instagram_url">Instagram</label></th>
							<td><input type="text" id="instagram_url" name="instagram_url" size="60" value=""></td>
						</tr>
						<tr>
							<th scope="row"><label for="youtube_url">YouTube</label></th>
							<td><input type="text" id="youtube_url" name="youtube_url" size="60" value=""></td>
						</tr>
						<tr>
							<th scope="row"><label for="twitch_url">Twitch</label></th>
							<td><input type="text" id="twitch_url" name="twitch_url" size="60" value=""></td>
						</tr>
						<tr>
							<th scope="row"><label for="amazon_url">Amazon欲しいものリスト</label></th>
							<td><input type="text" id="amazon_url" name="amazon_url" size="60" value=""></td>
						</tr>
						<tr>
							<th scope="row"><label for="pinterest_url">Pinterest</label></th>
							<td><input type="text" id="pinterest_url" name="pinterest_url" size="60" value=""></td>
						</tr>
						<tr>
							<th scope="row"><label for="line_url">LINE@</label></th>
							<td><input type="text" id="line_url" name="line_url" size="60" value=""></td>
						</tr>
						<tr>
							<th scope="row"><label for="note_url">note</label></th>
							<td><input type="text" id="note_url" name="note_url" size="60" value=""></td>
						</tr>
						<tr>
							<th scope="row"><label for="discord_url">Discord</label></th>
							<td><input type="text" id="discord_url" name="discord_url" size="60" value=""></td>
						</tr>
						<tr>
							<th scope="row"><label for="github_url">GitHub</label></th>
							<td><input type="text" id="github_url" name="github_url" size="60" value=""></td>
						</tr>
						<tr>
							<th scope="row"><label for="feedly_follow">Feedly</label></th>
							<td class="toggle_button">
								<input type="checkbox" name="feedly_follow" id="feedly_follow" class="toggle_input">
								<label for="feedly_follow" class="toggle_label"><span>Feedlyフォローボタンを表示する</span></label>
							</td>
						</tr>
						<tr>
							<th scope="row"><label for="rss_follow">RSS購読</label>
							</th>
							<td class="toggle_button">
								<input type="checkbox" name="rss_follow" id="rss_follow" class="toggle_input">
								<label for="rss_follow" class="toggle_label"><span>RSS購読ボタンを表示する</span></label>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<div class="metabox-holder">
			<div class="postbox">
				<h3 class="hndle"><span>SNSシェアボタン表示設定</span></h3>
				<div class="inside">
					<p>Woffeeには、シェア数を表示する機能は搭載されていません。</p>
					<ul>
						<li class="toggle_button">
							<input type="checkbox" name="twitter_share_button" id="twitter_share_button" class="toggle_input" value="1" checked="checked">
							<label for="twitter_share_button" class="toggle_label"><span>Twitter</span></label>
						</li>
						<li class="toggle_button">
							<input type="checkbox" name="facebook_share_button" id="facebook_share_button" class="toggle_input" value="1" checked="checked">
							<label for="facebook_share_button" class="toggle_label"><span>Facebook</span></label>
						</li>
						<li class="toggle_button">
							<input type="checkbox" name="line_share_button" id="line_share_button" class="toggle_input" value="1" checked="checked">
							<label for="line_share_button" class="toggle_label"><span>LINE</span></label>
						</li>
						<li class="toggle_button">
							<input type="checkbox" name="pocket_share_button" id="pocket_share_button" class="toggle_input" value="1" checked="checked">
							<label for="pocket_share_button" class="toggle_label"><span>Pocket</span></label>
						</li>
						<li class="toggle_button">
							<input type="checkbox" name="pinterest_share_button" id="pinterest_share_button" class="toggle_input" value="1" checked="checked">
							<label for="pinterest_share_button" class="toggle_label"><span>Pinterest</span></label>
						</li>
						<li class="toggle_button">
							<input type="checkbox" name="hatebu_share_button" id="hatebu_share_button" class="toggle_input" value="1" checked="checked">
							<label for="hatebu_share_button" class="toggle_label"><span>はてなブックマーク</span></label>
						</li>
						<li class="toggle_button">
							<input type="checkbox" name="copy_url_button" id="copy_url_button" class="toggle_input" value="1" checked="checked">
							<label for="copy_url_button" class="toggle_label"><span>タイトルとURLをコピー</span></label>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="metabox-holder">
			<div class="postbox">
				<h3 class="hndle"><span>その他の設定</span></h3>
				<div class="inside">
					<table class="form-table">
						<tr>
							<th scope="row">
								<label for="twitter_card_settings">Twitterカード表示設定</label>
							</th>
							<td>
								<select name="twitter_card_settings">
									<option value="twitter_card_summary">summary : 通常の表示</option>
									<option value="twitter_card_large">summay_laerge_image : 大きな画像の表示</option>
								</select>
							</td>
						</tr>
						<tr>
							<th scope="row">
								<label for="sns_share_button_color">ボタンデザイン</label>
							</th>
							<td>
								<select name="sns_share_button_color">
									<option value="monochrome">モノクロ</option>
									<option value="brand_color">ブランドカラー背景</option>
									<option value="brand_color_white" selected="selected">白背景（アイコン・ボーダーはブランドカラー）</option>
								</select>
							</td>
						</tr>
						<tr>
							<th scope="row">
								<label for="sns_share_column_count">1列に表示するボタンの数</label>
							</th>
							<td>
								<select name="sns_share_column_count">
									<option value="1">1つ</option>
									<option value="2">2つ</option>
									<option value="3" selected="selected">3つ</option>
									<option value="4">4つ</option>
									<option value="5">5つ</option>
									<option value="6">6つ</option>
								</select>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<?php submit_button(); ?>
	</form>
<div>
<?php add_action('admin_init', 'woffee_admin_init', 'sns-settings', 'woffee_social_settings', $options ); ?>