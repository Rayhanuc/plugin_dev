<?php
    $meta = get_post_meta($post->ID);
    $link_text = get_post_meta($post->ID, 'mv_slider_link_text', true);
    $link_url = get_post_meta($post->ID, 'mv_slider_link_url', true);
?>

<table class="form-table mv-slider-metabox">
    <input type="hidden" name="mv_slider_nonce" value="<?php echo wp_create_nonce( "mv_slider_nonce" ); ?>" >
	<tr>
		<th>
            <label for="mv_slider_link_text"><?php echo esc_html("Link Text");?></label>
        </th>
        <td>
            <input
                    type="mv_slider_link_text"
                    name="mv_slider_link_text"
                    id="mv_slider_link_text"
                    class="regular-text link-text"
                    value="<?php echo ( isset($link_text) ) ? esc_html($link_text) : ''; ?>"
                    required
            >
        </td>
	</tr>
	<tr>
		<th>
            <label for="mv_slider_link_url"><?php echo esc_html("Link URL");?></label>
        </th>
        <td>
            <input
                    type="mv_slider_link_url"
                    name="mv_slider_link_url"
                    id="mv_slider_link_url"
                    class="regular-text link-url"
                    value="<?php echo (isset($link_url)) ? esc_url($link_url) : ''; ?>"
                    required
            >
        </td>
	</tr>
</table>
