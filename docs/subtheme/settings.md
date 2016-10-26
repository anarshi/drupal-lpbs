<!-- @file Overview of theme settings for Drupal Bootstrap based themes. -->
<!-- @defgroup -->
<!-- @ingroup -->
# Theme Settings

To override a setting, open `./subtheme/subtheme.info` and add the following:

`settings[BOOTSTRAP_SETTING] = VALUE`

Where `BOOTSTRAP_SETTING` is the name of the setting and `VALUE` is the value.

---

Below is a complete list of default setting values in the [Drupal Bootstrap]
base theme:

## Global
| Setting                                          | Default value {.col-xs-4} |
| ------------------------------------------------ | ------------------------- |
| toggle_name                                      | `1`                       |
| toggle_search                                    | `1`                       |
{.table.table-striped}

## Containers

| Setting                                          | Default value {.col-xs-4} |
| ------------------------------------------------ | ------------------------- |
| lpbs_fluid_container                        | `0`                       |
{.table.table-striped}

## Buttons

| Setting                                          | Default value {.col-xs-4} |
| ------------------------------------------------ | ------------------------- |
| lpbs_button_size                            | `''`                      |
| lpbs_button_colorize                        | `1`                       |
| lpbs_button_iconize                         | `1`                       |
{.table.table-striped}

## Images

| Setting                                          | Default value {.col-xs-4} |
| ------------------------------------------------ | ------------------------- |
| lpbs_image_shape                            | `''`                      |
| lpbs_image_responsive                       | `1`                       |
{.table.table-striped}

## Tables

| Setting                                          | Default value {.col-xs-4} |
| ------------------------------------------------ | ------------------------- |
| lpbs_table_bordered                         | `0`                       |
| lpbs_table_condensed                        | `0`                       |
| lpbs_table_hover                            | `1`                       |
| lpbs_table_striped                          | `1`                       |
| lpbs_table_responsive                       | `1`                       |
{.table.table-striped}

## Breadcrumbs

| Setting                                          | Default value {.col-xs-4} |
| ------------------------------------------------ | ------------------------- |
| lpbs_breadcrumb                             | `1`                       |
| lpbs_breadcrumb_home                        | `0`                       |
| lpbs_breadcrumb_title                       | `1`                       |
{.table.table-striped}

## Navbar
| Setting                                          | Default value {.col-xs-4} |
| ------------------------------------------------ | ------------------------- |
| lpbs_navbar_position                        | `''`                      |
| lpbs_navbar_inverse                         | `0`                       |
{.table.table-striped}

## Pager
| Setting                                          | Default value {.col-xs-4} |
| ------------------------------------------------ | ------------------------- |
| lpbs_pager_first_and_last                   | `1`                       |
{.table.table-striped}

## Wells (Regions)
| Setting                                          | Default value {.col-xs-4} |
| ------------------------------------------------ | ------------------------- |
| lpbs_region_well-navigation                 | `''`                      |
| lpbs_region_well-header                     | `''`                      |
| lpbs_region_well-highlighted                | `''`                      |
| lpbs_region_well-help                       | `''`                      |
| lpbs_region_well-content                    | `''`                      |
| lpbs_region_well-sidebar_first              | `'well'`                  |
| lpbs_region_well-sidebar_second             | `''`                      |
| lpbs_region_well-footer                     | `''`                      |
{.table.table-striped}

## Anchors
| Setting                                          | Default value {.col-xs-4} |
| ------------------------------------------------ | ------------------------- |
| lpbs_anchors_fix                            | `1`                       |
| lpbs_anchors_smooth_scrolling               | `1`                       |
{.table.table-striped}

## Forms
| Setting                                          | Default value {.col-xs-4} |
| ------------------------------------------------ | ------------------------- |
| lpbs_forms_required_has_error               | `0`                       |
| lpbs_forms_has_error_value_toggle           | `1`                       |
| lpbs_forms_smart_descriptions               | `1`                       |
| lpbs_forms_smart_descriptions_limit         | `250`                     |
| lpbs_forms_smart_descriptions_allowed_tags  | `'b, code, em, i, kbd, span, strong'` |
{.table.table-striped}

## Popovers
| Setting                                          | Default value {.col-xs-4} |
| ------------------------------------------------ | ------------------------- |
| lpbs_popover_enabled                        | `1`                       |
| lpbs_popover_animation                      | `1`                       |
| lpbs_popover_html                           | `0`                       |
| lpbs_popover_placement                      | `'right'`                 |
| lpbs_popover_selector                       | `''`                      |
| [lpbs_popover_trigger]['hover']             | `0`                       |
| [lpbs_popover_trigger]['focus']             | `0`                       |
| [lpbs_popover_trigger]['click']             | `'click'`                 |
| lpbs_popover_trigger_autoclose              | `1`                       |
| lpbs_popover_title                          | `''`                      |
| lpbs_popover_content                        | `''`                      |
| lpbs_popover_delay                          | `0`                       |
| lpbs_popover_container                      | `'body'`                  |
{.table.table-striped}

## Tooltips
| Setting                                          | Default value {.col-xs-4} |
| ------------------------------------------------ | ------------------------- |
| lpbs_tooltip_enabled                        | `1`                       |
| lpbs_tooltip_animation                      | `1`                       |
| lpbs_tooltip_html                           | `0`                       |
| lpbs_tooltip_placement                      | `'auto left'`             |
| lpbs_tooltip_selector                       | `''`                      |
| [lpbs_tooltip_trigger]['hover']             | `'hover'`                 |
| [lpbs_tooltip_trigger]['focus']             | `'focus'`                 |
| [lpbs_tooltip_trigger]['click']             | `0`                       |
| lpbs_tooltip_delay                          | `0`                       |
| lpbs_tooltip_container                      | `'body'`                  |
{.table.table-striped}

## Advanced
| Setting                                          | Default value {.col-xs-4} |
| ------------------------------------------------ | ------------------------- |
| lpbs_cdn_provider         | `'jsdelivr'`                                                       |
| lpbs_cdn_custom_css       | `'https://cdn.jsdelivr.net/bootstrap/3.3.5/css/bootstrap.css'`     |
| lpbs_cdn_custom_css_min   | `'https://cdn.jsdelivr.net/bootstrap/3.3.5/css/bootstrap.min.css'` |
| lpbs_cdn_custom_js        | `'https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.js'`       |
| lpbs_cdn_custom_js_min    | `'https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js'`   |
| lpbs_cdn_jsdelivr_version | `'3.3.5'`                                                          |
| lpbs_cdn_jsdelivr_theme   | `'lpbs'`                                                      |
{.table.table-striped}

[Drupal Bootstrap]: https://www.drupal.org/project/bootstrap
[Bootstrap Framework]: http://getbootstrap.com
