<?php

/**
 * Widget API: MS_Hero_Banner_Widget class
 *
 * @package WordPress
 * @subpackage Widgets
 * @since 4.4.0
 */

class MS_Hero_Banner_Widget extends WP_Widget
{
    public function __construct()
    {
        $widget_ops = [
            'description'                 => __(''),
            'customize_selective_refresh' => true,
            'show_instance_in_rest'       => true,
        ];

        parent::__construct('mfs_our_meals_image_text_widget', __('MS Hero Banner'), $widget_ops);
    }

    public function widget($args, $instance)
    {
?>
        <section class="section hero" style="background-image: url(<?= $instance["background"] ?>)">
            <div class="container">
                <h2 class="h1 hero__title">
                    <?= $instance["title"]; ?>
                </h2>
                <p class="hero__text">
                    <?= $instance["description"]; ?>
                </p>
                <button class="btn btn-primary">
                    <span>Shop Now</span>
                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                </button>
            </div>
        </section>
    <?php
    }

    public function update($new_instance, $old_instance)
    {
        $instance = array();

        $instance['title'] = (!empty($new_instance['title'])) ? $new_instance['title'] : '';
        $instance['description'] = (!empty($new_instance['description'])) ? $new_instance['description'] : '';
        $instance['background'] = (!empty($new_instance['background'])) ? $new_instance['background'] : '';
        return $instance;
    }

    public function form($instance)
    {
        global $wp_customize;
        $title = isset($instance['title']) ? $instance['title'] : '';
        $description = isset($instance['description']) ? $instance['description'] : '';
        $background = isset($instance['background']) ? $instance['background'] : '';
    ?>

        <div class="nav-menu-widget-form-controls" <?php echo $empty_menus_style; ?>>
            <div class="rows">
                <div class="cols">
                    <p>
                        <label for="<?php echo $this->get_field_id('title'); ?>">
                            <?php _e('Title:'); ?>
                        </label>
                        <input type="text" class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo esc_attr($title); ?>" />
                    </p>
                    <hr>
                    <p>
                        <label for="<?php echo $this->get_field_id('description'); ?>">
                            <?php _e('Description:'); ?>
                        </label>
                        <textarea class="widefat custom-widget-wp-editor" id="<?php echo $this->get_field_id('description'); ?>" name="<?php echo $this->get_field_name('description'); ?>">
                                <?php echo esc_attr($description); ?>
                            </textarea>
                    </p>
                    <hr>
                    <p>
                        <label for="<?php echo $this->get_field_id('background'); ?>">Image</label>
                        <img id="sponsor-image-img" class="image" src="<?php if (!empty($instance['background'])); ?>" />
                        <input type="text" id="sponsor-image-id" class="widefat" name="<?php echo $this->get_field_name('background'); ?>" value="<?php echo $instance['background']; ?>" />
                        <input type="button" id="sponsor-image-uploadbtn" class="button button-primary" value="Upload image" />
                    </p>
                </div>
            </div>
        </div>
<?php
    }
}

function ms_hero_banner_widget_load_widget()
{
    register_widget('MS_Hero_Banner_Widget');
}

add_action('widgets_init', 'ms_hero_banner_widget_load_widget');
