<?php
return [
    'tb_composition' => 'زبان',
    'tb_properties' => 'خصوصیات',
    'tb_seo' => 'بهینه سازی موتورهای جستجو',
    'tb_seo_title' => 'عنوان',
    'tb_seo_description' => 'توضیحات',
    'tb_seo_description_notfound' => 'هنوز هیچ توضیحی به صفحه اضافه نشده است',
    'tb_seo_link' => 'URL Link',
    'tb_seo_keywords' => 'کلمات کلیدی',
    'tb_seo_keywords_notfound' => 'هیچ کلمه کلیدی پیدا نشد برای آنالیز صفحه نیاز است که کلمات کلیدی وارد نمایید',
    'tb_seo_warning' => 'بعضی از کلمات کلیدی در متون شما پیدانشد, شما باید کلمات کلیدی را تصحیح نمایید یا اضافه نمایید.',
    'tb_edit_alt' => 'صفحه را در محیط ادمین ادیت نمایید.',
    'tb_visible_not_alt' => 'این صفحه به حالت عدم نمایش در آمد',
    'tb_visible_alt' => 'این صفحه برای کاربران قابل نمایش است',
    'block_html_html_label' => 'کد اچ تی ام ال',
    'block_html_no_content' => 'هیچ کد اچ تی ام الی هنوز اضافه نشده است',
    'block_module_name' => 'ماژول',
    'block_module_modulename_label' => 'نام ماژول',
    'block_module_modulecontroller_label' => 'Controller Name (without controller suffix)',
    'block_module_moduleaction_label' => 'Action Name (without action prefix)',
    'block_module_moduleactionargs_label' => 'Action Arguments (json: {"var":"value"})',
    'block_module_no_module' => 'هنوز هیچ ماژولی مشخص نشده است.',
    'block_module_integration' => 'ترکیب ماژول ها',
    'block_html_name' => 'html',
    'block_module_modulename_help' => 'فقط ماژول های فرانتدی که در تنظیمات اضافه شده اند نمایش داده می شوند.',
    'block_group_dev_elements' => 'توسعه',
    'block_group_layout_elements' => 'لیوت',
    'block_group_basic_elements' => 'Basics',
    'block_group_project_elements' => 'پروژه',
    'block_group_text_elements' => 'متن',
    'block_group_media_group' => 'مدیا',
    
    // 1.0.0
    'block_module_strictrender' => 'Strict Render',
    'block_module_strictrender_help' => 'When strict render is enabled, the module will only run the provided route (module, controller, action, params) without listening to action and controller routes.',
    'block_html_cfg_raw_label' => 'Render HTML in Admin',

    // 3.4.0
    'tag_alias_readme' => 'The alias tag allows you to use aliases defined in your application as well as predefined aliases. As an example, you can use `alias[@web]` to link to images in the public html folder: `<img src="alias[@web]/image.jpg">`',
    'tag_menu_readme' => 'Generate a link to a menu item where the key is the page id (you can see the page ids when hovering over the site navigation in the administration).',
    'tag_page_readme' => 'Get the content of a full page or of a placeholder of a page. The first parameter is the page id (which you get by hovering over the site navigation in the administration): `page[1]`. If you only want to get the content of a placeholder of the cmslayout, use the second parameter: `page[1](placeholderName)`.',
    'block_mirror_language_name' => 'Mirror Language',
    'block_mirror_config_language_label' => 'Source Language',
    'block_mirror_admin_empty_language' => 'Configure a <b><span class="material-icons">edit</span> source language</b> to mirror its content for the current placeholder.',
    'block_mirror_admin_configured_language' => 'Mirroring this placeholder from <span class="material-icons">arrow_right_alt</span> <b>{name}</b>.',
];
