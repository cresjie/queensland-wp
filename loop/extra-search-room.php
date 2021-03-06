<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit();
}

// HB_Room_Extra instead of HB_Room
$room_extra = HB_Room_Extra::instance( $post_id );

//var_dump($post_id);
$room_extra = $room_extra->get_extra();

//var_dump($room_extra);

?>

<?php if ( $room_extra ): ?>

		
	<div class="hb_addition_package_title">
		<h5 class="hb_addition_package_title_toggle">
			<a href="#optional_extra_<?=$post_id?>" class="hb_package_toggle--" data-toggle="modal">
				<?php esc_html_e( 'Optional Extras', 'tp-hb-extra' ); ?>
			</a>
		</h5>
	</div>
	<div class="hb_addition_package_extra">
		
		<div class="modal fade" tabindex="-1" role="dialog" id="optional_extra_<?=$post_id?>">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title"><?php esc_html_e( 'Optional Extras', 'tp-hb-extra' ); ?></h4>
					</div>
					<div class="modal-body">
						<div class="hb_addition_packages-">
							<ul class="hb_addition_packages_ul">
								<?php foreach ( $room_extra as $key => $extra ): ?>
									<li data-price="<?php echo esc_attr( $extra->amount_singular ); ?>">
										<div class="row">
											<div class="col-md-6">
												<div class="hb_extra_optional_right">
													<input type="checkbox"
														name="hb_optional_quantity_selected[<?php echo esc_attr( $extra->ID  ); ?>]"
														class="hb_optional_quantity_selected" id="<?php echo esc_attr( 'hb-ex-room-' . $post_id . '-' .$key ) ?>"
													/>
												</div>
												<div class="hb_extra_optional_left">
													<div class="hb_extra_title">
														<div class="hb_package_title">
															<label for="<?php echo esc_attr( 'hb-ex-room-' . $post_id . '-' .$key ) ?>"><?php printf( '%s', $extra->title ) ?></label>
														</div>
														<p><?php printf( '%s', $extra->description ) ?></p>
													</div>
													<div class="hb_extra_detail_price">
														<?php if ( $extra->respondent === 'number' ): ?>
															<input type="number" step="1" min="1" name="hb_optional_quantity[<?php echo esc_attr( $extra->ID  ); ?>]" value="1"
																class="hb_optional_quantity<?php echo ( $extra->respondent !== 'number' ) ? ' tp_hb_readonly' : '' ?>"
																<?php echo ( $extra->respondent !== 'number' ) ? ' readonly="readonly"' : '' ?>
															/>
														<?php else: ?>
															<input type="hidden" step="1" min="1" name="hb_optional_quantity[<?php echo esc_attr( $extra->ID  ); ?>]" value="1"/>
														<?php endif; ?>
														<label>
															<strong><?php printf( '%s', hb_format_price( $extra->amount_singular ) ) ?></strong>
															<small><?php printf( '/ %s', $extra->respondent_name ? $extra->respondent_name : __( 'Package', 'tp-hb-extra' ) ) ?></small>
														</label>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<?php $attachment_id = get_post_thumbnail_id($key);?>
												<?php if($attachment_id):?>
													<img class="img-responsive" src="<?=wp_get_attachment_thumb_url($attachment_id)?>">
												<?php endif; ?>
												
											</div>
										</div>
												
									</li>
								<?php endforeach ?>
							</ul>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

						
	</div>

<?php endif; ?>