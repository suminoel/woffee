
<div class="wrap">
	<h2>アフィリエイト設定</h2>
	<form method="post" action="options.php" enctype="multipart/form-data" encoding="multipart/form-data">
		<?php
			settings_fields( 'woffee-affiliate-group' );
			do_settings_sections( 'woffee-affiliate-group' );
			$options = get_option('woffee_affiliate_settings');
		?>
		<div class="metabox-holder">
			<div class="postbox">
				<h3 class="hndle"><span>外部ツールを使用する</span></h3><br>
				<div class="toggle_button">
					<input name="use_kaereba" id="use_kaereba" class="toggle_input" type="checkbox">
					<label for="use_kaereba" class="toggle_label">
						<span>カエレバを使用する</span>
					</label>
				</div>
				<div class="toggle_button">
					<input name="use_moshimo" id="use_moshimo" class="toggle_input" type="checkbox">
					<label for="use_moshimo" class="toggle_label">
						<span>もしもアフィリエイトを使用する</span>
					</label>
				</div>
			</div>
		</div>

		<div class="metabox-holder">
			<div class="postbox">
				<h3 class="hndle"><span>Amazon</span></h3>
				<div class="inside">
					<table class="form-table">
						<tr>
							<th scope="row">
								<label for="amazon_access_key">アクセスキーID</label>
							</th>
							<td>
								<input type="text" id="amazon_access_key" name="amazon_access_key" size="60" value="">
							</td>
						</tr>
						<tr>
							<th scope="row">
								<label for="amazon_secret_key">シークレットキー</label>
							</th>
							<td>
								<input type="text" id="amazon_secret_key" name="amazon_secret_key" size="60" value="">
							</td>
						</tr>
						<tr>
							<th scope="row">
								<label for="amazon_tracking_id">トラッキングID</label>
							</th>
							<td>
								<input type="text" id="amazon_tracking_id" name="amazon_tracking_id" size="60" value="">
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<div class="metabox-holder">
			<div class="postbox">
				<h3 class="hndle"><span>楽天</span></h3>
				<div class="inside">
					<table class="form-table">
						<tr>
							<th scope="row">
								<label for="rakuten_app_id">アプリケーションID</label>
							</th>
							<td>
								<input type="text" id="rakuten_app_id" name="rakuten_app_id" size="60" value="">
							</td>
						</tr>
						<tr>
							<th scope="row">
								<label for="rakuten_affiliate_id">アフィリエイトID</label>
							</th>
							<td>
								<input type="text" id="rakuten_affiliate_id" name="rakuten_affiliate_id" size="60" value="">
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<div class="metabox-holder">
			<div class="postbox">
				<h3 class="hndle"><span>Yahoo!ショッピング</span></h3>
				<div class="inside">
					<table class="form-table">
						<tr>
							<th scope="row">
								<label for="yahoo_sid">バリューコマースsid</label>
							</th>
							<td>
								<input type="text" id="yahoo_sid" name="yahoo_sid" size="60" value="">
							</td>
						</tr>
						<tr>
							<th scope="row">
								<label for="yahoo_pid">バリューコマースpid</label>
							</th>
							<td>
								<input type="text" id="yahoo_pid" name="yahoo_pid" size="60" value="">
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<div class="metabox-holder">
			<div class="postbox">
				<h3 class="hndle"><span>DMM</span></h3>
				<div class="inside">
					<table class="form-table">
						<tr>
							<th scope="row">
								<label for="dmm_affiliate_id">アフィリエイトID</label>
							</th>
							<td>
								<input type="text" id="dmm_affiliate_id" name="dmm_affiliate_id" size="60" value="">
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<?php submit_button(); ?>
	</form>
<div>
<?php add_action('admin_init', 'woffee_admin_init', 'affiliate-settings', 'woffee_affiliate_settings', $options ); ?>