<?php

return [

    'view_index_add_type' => 'Тип страницы',
    'view_index_type_page' => 'Страница',
    'view_index_type_module' => 'Модуль',
    'view_index_type_redirect' => 'Переадресация',
    'view_index_as_draft' => 'Как в шаблоне',
    'view_index_as_draft_help' => 'Вы хотите определить новую страницу в качестве шаблона?',
    'view_index_no' => 'Нет',
    'view_index_yes' => 'Да',
    'view_index_page_title' => 'Название страницы',
    'view_index_page_alias' => 'Алиас',
    'view_index_page_meta_description' => 'Описание',
    'view_index_page_nav_container' => 'Раздел навигации',
    'view_index_page_parent_page' => 'Родительская страница',
    'view_index_page_success' => 'Страница успешно создана!',
    'view_index_page_parent_root' => '[Основной уровень]',
    'view_index_page_use_draft' => 'Использовать шаблон?',
    'view_index_page_select_draft' => 'Хотите выбрать шаблон?',
    'view_index_page_layout' => 'Выбор макета',
    'view_index_page_btn_save' => 'Сохранить',
    'view_index_module_select' => 'Название модуля',
    'view_index_sidebar_new_page' => 'Добавить страницу',
    'view_index_sidebar_drafts' => 'Шаблоны',
    'view_index_sidebar_move' => 'Переместить',
    'view_update_drop_blocks' => 'Перетащите блок контента сюда',
    'view_update_blockcontent' => 'Блок контента',
    'view_update_configs' => 'Дополнительные настройки',
    'view_update_settings' => 'Настройки',
    'view_update_btn_save' => 'Сохранить',
    'view_update_btn_cancel' => 'Прервать',
    'view_update_btn_hide_help' => 'Скрыть справку',
    'view_update_btn_show_help' => 'Справка',
    'view_update_holder_state_on' => 'Скрыть',
    'view_update_holder_state_off' => 'Раскрыть',
    'view_update_is_draft_mode' => 'Редактировать как шаблон',
    'view_update_is_homepage' => 'Главная страница',
    'view_update_properties_title' => 'Свойства страницы',
    'view_update_no_properties_exists' => 'Не все свойства были сохранены для этой страницы.',
    'view_update_draft_no_lang_error' => 'Шаблоны не имеют языковых харектиристик.',
    'view_update_no_translations' => 'Эта страница еще не переведена.',
    'view_update_page_is_module' => 'Страница является <b>модулем</b>.',
    'view_update_page_is_redirect_internal' => 'Эта страница имеет <b>внутреннюю переадресацию</b> на <show-internal-redirection nav-id="typeData.value" />.',
    'view_update_page_is_redirect_external' => 'Эта страница имеет <b>внешнюю переадресацию</b> на <a ng-href="{{typeData.value}}">{{typeData.value}}</a>',
    'menu_node_cms' => 'Cтраницы',
    'menu_node_cmssettings' => 'CMS Настройки',
    'menu_group_env' => 'Окружение',
    'menu_group_item_env_container' => 'Контейнеры',
    'menu_group_item_env_layouts' => 'Макеты',
    'menu_group_elements' => 'Элементы контента',
    'menu_group_item_elements_blocks' => 'Блоки',
    'menu_group_item_elements_group' => 'Группы блоков',
    'btn_abort' => 'Отмена',
    'btn_refresh' => 'Обновить',
    'btn_save' => 'Сохранить',

// added translation in 1.0.0-beta3:

    'model_navitemmodule_module_name_label' => 'Название модуля',
    'model_navitem_title_label' => 'Название страницы',
    'model_navitem_alias_label' => 'URL путь',
    'model_navitempage_layout_label' => 'Макет',
    'model_navitemredirect_type_label' => 'Тип редиректа',
    'model_navitemredirect_value_label' => 'Цель редиректа',

    'view_index_add_title' => 'Добавить новую страницу',
    'view_index_add_page_from_language' => 'Добавить перевод для страницы',
    'view_index_add_page_from_language_info' => 'Хотите скопировать контент другого языка для создания записи?',
    'view_index_add_page_empty' => 'Добавить пустую страницу',
    'view_index_language_loading' => 'Загрузка страницы',
    'draft_title' => 'Шаблоны',
    'draft_text' => 'Здесь вы можете просматривать и редактировать существующие шаблоны. Шаблоны могут быть применены при создании новой страницы.',
    'draft_column_id' => 'ID',
    'draft_column_title' => 'Название',
    'draft_column_action' => 'Действие',
    'draft_edit_button' => 'Редактировать',
    'js_added_translation_ok' => 'Перевод этой страницы был успешно создан.',
    'js_added_translation_error' => 'Произошла ошибка при создании перевода',
    'js_page_add_exists' => 'Уже существует страница "%title" с таким же URL в этой группе (id=%id%).',
    'js_page_property_refresh' => 'Свойства были обновлены.',
    'js_page_confirm_delete' => 'Вы действительно хотите удалить эту страницу?',
    'js_page_delete_error_cause_redirects' => 'Эта страница не может быть удалена. Вы должны сначала удалить все зависимости этой страницы.',
    'js_state_online' => '%title% в сети',
    'js_state_offline' => '%title% не в сети',
    'js_state_hidden' => '%title% скрыт',
    'js_state_visible' => '%title% виден',
    'js_state_is_home' => '%title% корневая страница',
    'js_state_is_not_home' => '%title% не корневая страница',
    'js_page_item_update_ok' => 'Страница «%title%» была обновлена!',
    'js_page_block_update_ok' => 'Блок «%name%» был обновлен!',
    'js_page_block_remove_ok' => 'Блок «%name%» был удален!',
    'js_page_block_visbility_change' => 'Видимость «%name%» была успешно изменена.',

// added translation in 1.0.0-beta4:

// added translation in 1.0.0-beta5:


    'view_update_blockholder_clipboard' => 'Буфер обмена',

// added translation in 1.0.0-beta6:


    'js_page_block_delete_confirm' => 'Удалить блок «%name%»?',
    'view_index_page_meta_keywords' => 'Ключевые слова',
    'current_version' => 'Рабочая версия',
    'Initial' => 'Первая версия',
    'view_index_page_version_chooser' => 'Опубликованная версия',
    'versions_selector' => 'Версии',
    'page_has_no_version' => 'Эта страница еще не имеет версий и шаблонов. Создайте новую версию кликнув на иконку <i class="material-icons green-text">add</i> справа.',
    'version_edit_title' => 'Редактировать версию',
    'version_input_name' => 'Имя',
    'version_input_layout' => 'Макет',
    'version_create_title' => 'Добавить новую версию',
    'version_create_info' => 'Вы можете создать несколько версий с разным контентом. Опубликуйте версию чтоб она была видна на сайте.',
    'version_input_copy_chooser' => 'Скопировать версию',
    'version_create_copy' => 'Создать копию из существующих версий.',
    'version_create_new' => 'Создать новую версию.',
    'js_version_update_success' => 'Версия была успешно обновлена.',
    'js_version_error_empty_fields' => 'Имеются пустые или невалидные поля.',
    'js_version_create_success' => 'Новая версия успешно сохранена.',

// added translation in 1.0.0-beta7:


    'view_index_create_page_please_choose' => 'Пожалуйста, выберите',
    'view_index_sidebar_autopreview' => 'Автоматический предпросмотр',

// added translation in 1.0.0-beta8

    'module_permission_add_new_page' => 'Создать новую страницу',
    'module_permission_update_pages' => 'Редактировать страницу ',
    'module_permission_edit_drafts' => 'Редактировать шаблон',
    'module_permission_page_blocks' => 'Страница Контент-блоков',
    'js_version_delete_confirm' => 'Вы уверены, что хотите удалить версию страницы «%alias%»?',
    'js_version_delete_confirm_success' => 'Версия траницы %alias% была успешно удалена.',
    'log_action_insert_cms_nav_item' => 'Добавить новый язык <b>{info}</b>',
    'log_action_insert_cms_nav' => 'Добавить новую страницу <b>{info}</b>',
    'log_action_insert_cms_nav_item_page_block_item' => 'Вставить новый блок <b>{info}</b>',
    'log_action_insert_unkown' => 'Добавить строку',
    'log_action_update_cms_nav_item' => 'Обновлен язык страницы <b>{info}</b>',
    'log_action_update_cms_nav' => 'Обновлен статус страницы <b>{info}</b>',
    'log_action_update_cms_nav_item_page_block_item' => 'Обновлен контент или конфигурация блока <b>{info}</b>',
    'log_action_update_unkown' => 'Обновлена существующая строка',
    'log_action_delete_cms_nav_item' => 'Удалена версия языка <b>{info}</b>',
    'log_action_delete_cms_nav' => 'Удалена страницу <b>{info}</b>',
    'log_action_delete_cms_nav_item_page_block_item' => 'Удален блок <b>{info}</b>',
    'log_action_delete_unkown' => 'Удалена строка',
    'block_group_favorites' => 'Избранные',
    'button_create_version' => 'Создать версию',
    'button_update_version' => 'Обновить версию',
    'menu_group_item_env_permission' => 'Страница прав',

// rc1
    'page_update_actions_deepcopy_text' => 'Создать копию текущей страницы вместе с контентом. Все языки будут скопированы, но только опубликованные версии.',
    'page_update_actions_deepcopy_btn' => 'Создать копию',

// rc2
    'model_navitem_title_tag_label' => 'Тег title',

// rc3
    'model_navitempage_empty_draft_id' => 'Не удалось создать страницу из пустого шаблона.',
    'view_update_variation_select' => 'Не выбрано ни одного изменения блока',
    'menu_group_item_env_config' => 'Настройки',
    'js_config_update_success' => 'Настройки успешно сохранена.',
    'config_index_httpexceptionnavid' => 'Определите страницу, на которую будут перенаправляться 404 ошибки.<br /><small>Совет: Создайте страницу 404 и пометьте страницу в скрытом корневом каталоге, отобразите сообщение об ошибке.</small>',
    'module_permission_update_config' => 'CMS настройки',
    'module_permission_delete_pages' => 'Удалить страницу',
    'page_update_actions_deepcopy_title' => 'Скопировать страницу',
    'page_update_actions_layout_title' => 'Файл макета',
    'page_update_actions_layout_text' => 'Вы можете определить другой файл макета, который должен отображаться вместо основного макета. Если поле пусто, то по умолчанию будет использоваться макет main.php. Вы также можете использовать псевдонимы. Для определения файла макета не требуется расширение php-файла.',
    'page_update_actions_layout_file_field' => 'Файл макета',
    'page_update_actions_modal_title' => 'Настройки странницы',
    'js_page_update_layout_save_success' => 'Макет обновлён',
    'js_page_create_copy_success' => 'Копия страницы создана.',
    'view_update_offline_info' => 'Измените офлайн-режим для этой страницы, только если страница недоступна по URL-адресу.',
    'view_update_hidden_info' => 'Изменить видимость страницы, страница доступна по URL-адресу, но скрыта в навигации.',
    'view_update_homepage_info' => 'Установить эту страницу как главную.',
    'view_update_block_tooltip_copy' => 'Добавить в буфер обмена',
    'view_update_block_tooltip_visible' => 'Сделать невидимым',
    'view_update_block_tooltip_invisible' => 'Сделать видимым',
    'view_update_block_tooltip_edit' => 'Редактировать',
    'view_update_block_tooltip_editcfg' => 'Настройки',
    'view_update_block_tooltip_delete' => 'Удалить',
    'view_update_block_tooltip_close' => 'Закрыть редактирование',

    // 1.0.0
    'cmsadmin_dashboard_lastupdate' => 'Последние обновления страниц',
    'cmsadmin_settings_homepage_title' => 'Главная страница',
    'cmsadmin_settings_trashpage_title' => 'Удалить страницу',
    'cmsadmin_settings_modal_title' => 'Настройки',
    'cmsadmin_item_settings_titleslug' => 'Информация о странице',
    'cmsadmin_created_at' => 'Создан',
    'cmsadmin_version_remove' => 'Удалить версию',
    'view_index_sidebar_container_no_pages' => 'Пустой контейнер',
    'view_update_set_as_homepage_btn' => 'Сделать домашней страницей',
    'cmsadmin_settings_time_title' => 'Расписание',
    'cmsadmin_settings_time_title_from' => 'Страница доступна с',
    'cmsadmin_settings_time_title_till' => 'по',
    'view_index_page_meta_timestamp_create' => 'Дата создания страницы',
    'nav_item_model_error_modulenameexists' => 'Алиас "{alias}" уже используется модулем. Выберите другой алиас или переименуйте модуль в вашей конфигурации.',
    'nav_item_model_error_parentnavidcannotnull' =>  'Родительский nav id не может быть null, что-то пошло не так в процессе наследования от родительской страницы.',
    'nav_item_model_error_urlsegementexistsalready' => 'Такой алиас уже существует, пожалуйста, укажите другой.',
    'menu_group_item_env_redirections' => 'Редиректы',
    'redirect_model_atr_timestamp_create' => 'Дата создания',
    'redirect_model_atr_catch_path' => 'Откуда',
    'redirect_model_atr_catch_path_hint' => 'Путь, откуда должен произойти редирект. Если вы хотите захватить все дочерние пути, то используйте *  например, /blog*, это захватит все пути после /blog.',
    'redirect_model_atr_catch_path_error' => 'Путь должен начинаться со слеша.',
    'redirect_model_atr_redirect_path' => 'Куда',
    'redirect_model_atr_redirect_path_hint' => 'Вы можете указать абсолютный путь, начав его с http:// или https://. Относительный путь начинается с корневого пути / или с пути с которого начинается редирект (например, режим обслуживания редиректит с /shop/start на /shop/maintenance).',
    'redirect_model_atr_redirect_status_code' => 'HTTP код ответа',
    'redirect_model_atr_redirect_status_code_hint' => 'Тип редиректа. 301: Постоянный редирект. Браузеры кешируют редирект, поэтому необходимо очистить кеш для получения результата.',
    'redirect_model_atr_redirect_status_code_opt_301' => '301: Moved Permanently',
    'redirect_model_atr_redirect_status_code_opt_302' => '302: Moved Temporarily',

// 1.0.1
    'module_permission_page' => 'Контент страницы',

// 1.0.6
    'page_update_actions_deepcopyastemplate_title' => 'Сохранить как новый шаблон',
    'page_update_actions_deepcopyastemplate_text' => 'Будет создана копия этой страницы со всем содержимым как шаблон. Контент шаблона будет включать в себя все языки, но только опубликованных версий',
    'page_update_actions_deepcopyastemplate_btn' => 'Создать шаблон',
    'js_page_create_copy_as_template_success' => 'Шаблон создан',

// 2.0

    'model_navitem_image_id_label' => 'Картинка',
    'view_index_page_label_subpage' => 'Укажите родительскую страницу',
    'view_index_page_label_parent_nav_id' => 'Расположение в навигации',
    'view_index_page_label_parent_nav_id_root' => 'Первый уровень',
    'view_index_page_label_parent_nav_id_subpage' => 'Подстраница',
    'cmsadmin_item_settings_titleseo' => 'SEO',
    'cmsadmin_item_settings_titleexpert' => 'Эксперт',
    'model_navitem_is_url_strict_parsing_disabled_label' => 'Строгое соответсвие правилам URL',
    'model_navitem_is_url_strict_parsing_disabled_label_enabled' => 'Включено',
    'model_navitem_is_url_strict_parsing_disabled_label_disabled' => 'Выключено',
    'model_navitem_is_url_strict_parsing_disabled_label_hint' => 'Строгое соответсвие правилам URL должно быть включено, если вы не используете блок с модулем, который предполагает генерацию URL в содержимом этой страницы.',
    'model_navitem_title_tag_label_hint' => 'Тег title отображается во многих браузерах в заголовке окна и в результатах поисковой выдачи у поисковиков.',
    'view_index_page_meta_description_hint' => 'Описание страницы должно определять назначение страницы. Этот текст часто используется поисковыми системами в качестве описания страницы в результатах поиска. Это также актуально для публикации страницы в социальных сетях.',
    'view_index_page_meta_keywords_hint' => 'Ключевые слова разделяются запятыми (например, пицца, бургер, макароны). Очень немногие поисковые системы все еще полагаются на эти ключевые слова. Используйте только те слова, которые имеют отношение к содержанию страницы. Панель инструментов LUYA внешнего интерфейса поможет проверить, были ли определены ключевые слова для текущей страницы или нет.',
    'model_navitem_image_id_label_hint' => 'Изображение важно, когда вы делитесь страницей в социальных сетях. Обычно это изображение отображается в социальных сетях в качестве предварительного изображения для страницы.',
    'view_index_module_controller_name' => 'Контроллер',
    'view_index_module_action_name' => 'Действие',
    'view_index_module_action_params' => 'Параметры действия',
    'view_index_module_select_help' => 'Выберите модуль для отображения из списка (перечислены только внешние модули). Модули должны быть настроены в конфигурации.',
    'view_index_module_advanced_settings_button' => 'Расширенные настройки',

// 3.0

    'menu_group_item_env_themes' => 'Темы',
    'view_index_page_is_cacheable' => 'Кеширование',
    'view_index_page_is_cacheable_hint' => 'При установленном флажке страница будет кешироваться целиком, включая все блоки, поэтому динамически генерируемые данные в блоках не будут обновляться.',

// 3.3

    'menu_group_page_display' => 'Page Display',
    'menu_group_configuration' => 'Configuration',
    'menu_group_protocol' => 'Protocol',
    'menu_group_protocol_model_event_logger' => 'Model Event Log',
    'unable_to_find_item_for_language' => 'The requested page has not been translated yet.',

    // 3.4

    'js_block_attribute_empty' => '«%label%» cannot be empty.',
    
// 4.0

    'menu_group_item_env_websites' => 'Websites',
    'model_website_use_default_theme' => 'Use default theme',
];
