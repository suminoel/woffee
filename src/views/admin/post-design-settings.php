<div class="wrap">
	<h2>記事内デザイン設定</h2>
	<form method="post" action="options.php" enctype="multipart/form-data" encoding="multipart/form-data">
		<?php
			settings_fields( 'woffee-post-design-group' );
			do_settings_sections( 'woffee-post-design-group' );
			$options = get_option('woffee_post_design_settings');
		?>
		<div class="metabox-holder">
			<div class="postbox">
				<h3 class="hndle"><span>目次機能</span></h3>
				<div class="inside">
					<table class="form-table">
						<tr>
							<th scope="row"><label for="toc_title">目次タイトル</label></th>
							<td><input type="text" id="toc_title" name="toc_title" size="60" value="" placeholder="例: コンテンツ、目次、この記事の目次"></td>
						</tr>
						<tr>
							<th scope="row"><label for="toc_visibility">目次の表示切り替え</label></th>
							<td>
								<input type="checkbox" value="1" id="toc_visibility" name="toc_visibility" checked="checked"><label for="toc_visibility"> ユーザーによる目次の表示・非表示を切り替えを許可</label><br>
								<div class="more_toc_options">
									<ul class="more_toc_options_table">
										<li>
											<label for="toc_visibility_show">テキストを表示　</label>
											<input type="text" class="" value="表示" id="toc_visibility_show" name="toc_visibility_show">
											<span class="description"><label for="toc_visibility_show">例: 表示</label></span>
										</li>
										<li>
											<label for="toc_visibility_hide">テキストを非表示</label></th>
											<input type="text" class="" value="非表示" id="toc_visibility_hide" name="toc_visibility_hide">
											<span class="description"><label for="toc_visibility_hide">例: 非表示</label></span>
										</li>
									</ul>
									<input type="checkbox" value="1" id="toc_default_open" name="toc_default_open"><label for="toc_default_open">デフォルトで目次を表示する</label>
								</div>
							</td>
						</tr>
						<tr>
							<th scope="row"><label for="toc_post_types">表示するページ</label></th>
							<td class="toggle_button">
								<ul>
									<li class="toggle_button">
										<input type="checkbox" name="toc_post_types" id="toc_post" class="toggle_input" value="1" checked="checked">
										<label for="toc_post" class="toggle_label"><span>記事ページ</span></label>
									</li>
									<li class="toggle_button">
										<input type="checkbox" name="toc_post_types" id="toc_page" class="toggle_input" value="1" checked="checked">
										<label for="toc_page" class="toggle_label"><span>固定ページ</span></label>
									</li>
								</ul>
							</td>
						</tr>
						<tr>
							<th scope="row"><label for="toc_start">表示条件</label></th>
							<td>
								<select name="toc_start" id="toc_start">
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4" selected="selected">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
								</select> つ以上見出しがあるとき
							</td>
						</tr>
						<tr>
							<th scope="row"><label for="toc_level">目次にする見出しレベル</label></th>
							<td>
								<select name="toc_level" id="toc_level">
									<option value="2">h2</option>
									<option value="3" selected="selected">h3</option>
									<option value="4">h4</option>
									<option value="5">h5</option>
									<option value="6">h6</option>
								</select> までを目次にする
							</td>
						</tr>
						<tr>
							<th scope="row"><label for="toc_number">見出しの番号表示</label></th>
							<td>
								<select name="toc_number" id="toc_number">
									<option value="1" selected="selected">表示しない</option>
									<option value="2">数字＋ハイフン（1-1-1）</option>
									<option value="3">数字＋ドット（1.1.1）</option>
									<option value="4">黒丸</option>
									<option value="5">白丸</option>
									<option value="5">四角</option>
								</select>
							</td>
						</tr>
						<tr>
							<th scope="row"><label for="toc_center">目次の中央表示</label></th>
							<td class="toggle_button">
								<input type="checkbox" name="toc_center" id="toc_center" class="toggle_input" value="1" checked="checked">
								<label for="toc_center" class="toggle_label"><span>目次を中央に表示する</span></label>
							</td>
						</tr>
						<tr>
							<th scope="row"><label for="toc_position">目次の表示順</label></th>
							<td class="toggle_button">
								<input type="checkbox" name="toc_position" id="toc_position" class="toggle_input" value="1" checked="checked">
								<label for="toc_position" class="toggle_label"><span>広告の上に目次を表示する</span></label>
							</td>
						</tr>
						<tr>
							<th scope="row"><label for="toc_scroll">スクロール効果</label></th>
							<td class="toggle_button">
								<input type="checkbox" name="toc_scroll" id="toc_scroll" class="toggle_input" value="1" checked="checked">
								<label for="toc_scroll" class="toggle_label"><span>目次リンクをクリック時、スクロール移動する</span></label>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<div class="metabox-holder">
			<div class="postbox">
				<h3 class="hndle"><span>ブログカード機能</span></h3>
				<div class="inside">
					<p>ラジオボタンをチェックすると、サンプルのデザインが表示されます。</p>
					<table class="form-table">
						<tr>
							<th scope="row">
								<ul>
									<li>
										<input type="radio" name="blogcard_design" id="blogcard_1" value="1" checked="checked">
										<label for="blogcard_1"><span>デザイン1</span></label><br><br>
									</li>
									<li>
										<input type="radio" name="blogcard_design" id="blogcard_2" value="2">
										<label for="blogcard_2"><span>デザイン2</span></label><br><br>
									</li>
									<li>
										<input type="radio" name="blogcard_design" id="blogcard_3" value="3">
										<label for="blogcard_3"><span>デザイン3</span></label><br><br>
									</li>
									<li>
										<input type="radio" name="blogcard_design" id="blogcard_4" value="4">
										<label for="blogcard_4"><span>デザイン4</span></label><br><br>
									</li>
									<li>
										<input type="radio" name="blogcard_design" id="blogcard_5" value="5">
										<label for="blogcard_5"><span>デザイン5</span></label><br><br>
									</li>
								</ul>
							</th>
							<td>
								<ul>
									<li class="active"><img src="<?php echo get_theme_file_uri('assets/images/blogcard-before.jpeg');?>" alt=""></li>
									<li class="hide"><img src="<?php echo get_theme_file_uri('assets/images/blogcard-before.jpeg');?>" alt=""></li>
									<li class="hide"><img src="<?php echo get_theme_file_uri('assets/images/blogcard-before.jpeg');?>" alt=""></li>
									<li class="hide"><img src="<?php echo get_theme_file_uri('assets/images/blogcard-before.jpeg');?>" alt=""></li>
									<li class="hide"><img src="<?php echo get_theme_file_uri('assets/images/blogcard-before.jpeg');?>" alt=""></li>
								</ul>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<div class="metabox-holder">
			<div class="postbox">
				<h3 class="hndle"><span>ページトップボタン機能</span></h3>
				<div class="inside">
					<table class="form-table">
						<tr>
							<th>アイコン選択</th>
							<td>
								<input type="radio" name="pagetop_icon" id="pagetop_icon_1" value="1" checked="checked">
								<label for="pagetop_icon_1"><span><i class="fa-solid fa-angle-up"></i></span></label>
							</td>
							<td>
								<input type="radio" name="pagetop_icon" id="pagetop_icon_2" value="2">
								<label for="pagetop_icon_2"><span><i class="fa-solid fa-angles-up"></i></span></label>
							</td>
							<td>
								<input type="radio" name="pagetop_icon" id="pagetop_icon_3" value="3">
								<label for="pagetop_icon_3"><span><i class="fa-solid fa-arrow-up"></i></span></label>
							</td>
							<td>
								<input type="radio" name="pagetop_icon" id="pagetop_icon_4" value="4">
								<label for="pagetop_icon_4"><span><i class="fa-solid fa-caret-up"></i></span></label>
							</td>
							<td>
								<input type="radio" name="pagetop_icon" id="pagetop_icon_5" value="5">
								<label for="pagetop_icon_5"><span><i class="fa-solid fa-turn-up"></i></span></label>
							</td>
							<td>
								<input type="radio" name="pagetop_icon" id="pagetop_icon_6" value="6">
								<label for="pagetop_icon_6"><span><i class="fa-solid fa-arrow-turn-up"></i></span></label>
							</td>
							<td>
								<input type="radio" name="pagetop_icon" id="pagetop_icon_7" value="7">
								<label for="pagetop_icon_7"><span><i class="fa-solid fa-plane-up"></i></label>
							</td>
							<td>
								<input type="radio" name="pagetop_icon" id="pagetop_icon_8" value="8">
								<label for="pagetop_icon_8"><span><i class="fa-solid fa-jet-fighter-up"></i></span></label>
							</td>
							<td>
								<input type="radio" name="pagetop_icon" id="pagetop_icon_9" value="9">
								<label for="pagetop_icon_9"><span><i class="fa-solid fa-hand-point-up"></i></span></label>
							</td>
						</tr>
						<tr>
							<th>背景の角丸</th>
							<td colspan="8"><input type="range" name="pagetop_radius" id="pagetop_radius" min="0" max="50" value="50"></td>
						</tr>
						<tr>
							<th>背景カラー・透過率</th>
							<td colspan="8"><input type="text" name="pagetop_bg_rgba" id="pagetop_bg_rgba" class="alpha-color-picker"></td>
						</tr>
						<tr>
							<th>アイコンカラー</th>
							<td colspan="8"><input type="text" name="pagetop_icon_rgba" id="pagetop_icon_rgba" class="alpha-color-picker"></td>
						</tr>
						<tr>
							<th>プレビュー</th>
							<td colspan="8"><p class="pagetop-preview"><i class="fa-solid fa-angle-up"></i></p></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<?php submit_button(); ?>
	</form>
<div>
<?php add_action('admin_init', 'woffee_admin_init', 'post-design-settings', 'woffee_post_design_settings', $options ); ?>