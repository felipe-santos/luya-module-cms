<?php
return [
    'tb_composition' => 'Język',
    'tb_properties' => 'Właściwości',
    'tb_seo' => 'Optymalizacja pod kątem wyszukiwarek',
    'tb_seo_title' => 'Tytuł',
    'tb_seo_description' => 'Opis',
    'tb_seo_description_notfound' => 'Żaden opis nie został jeszcze dodany do tej strony.',
    'tb_seo_link' => 'Link do URL',
    'tb_seo_keywords' => 'Słowa kluczowe',
    'tb_seo_keywords_notfound' => 'Nie znaleziono słów kluczowych. Powinieneś dodać słowa kluczowe w celu analizy twoich treści. ',
    'tb_seo_warning' => 'Niektóre słowa kluczowe nie znajdują się w twoich materiałach, powinieneś to naprawić, zmieniając słowa kluczowe lub dodając brakujące słowa kluczowe do treści.',
    'tb_edit_alt' => 'Edytuj tę stronę w administracji CMS',
    'tb_visible_not_alt' => 'Ta strona NIE jest widoczna dla odwiedzających',
    'tb_visible_alt' => 'Ta strona jest widoczna dla odwiedzających',
    'block_html_html_label' => 'Kod HTML',
    'block_html_no_content' => 'Nie dodano jeszcze kodu HTML.',
    'block_module_name' => 'Moduł',
    'block_module_modulename_label' => 'Nazwa modułu',
    'block_module_modulecontroller_label' => 'Nazwa kontrolera (bez sufiksu kontrolera)',
    'block_module_moduleaction_label' => 'Nazwa akcji (bez prefiksu akcji)',
    'block_module_moduleactionargs_label' => 'Argumenty akcji (json: {"var": "value"})',
    'block_module_no_module' => 'Nie podano jeszcze modułu.',
    'block_module_integration' => 'Integracja modułu',
    "block_html_name" => "HTML",
    'block_module_modulename_help' => 'Wyświetlane są tylko moduły frontend, które są zarejestrowane w pliku konfiguracyjnym.',
    'block_group_dev_elements' => 'Rozwój',
    'block_group_layout_elements' => 'Układ',
    'block_group_basic_elements' => 'Podstawy',
    'block_group_project_elements' => 'Projekt',
    'block_group_text_elements' => 'Teksty',
    "block_group_media_group" => "Media",
        
    // 1.0.0
    "block_module_strictrender" => 'Ścisły render',
    'block_module_strictrender_help' => 'Gdy włączone jest ścisłe renderowanie, moduł będzie uruchamiał tylko dostarczoną trasę (moduł, kontroler, działanie, parametry) bez słuchania akcji i tras kontrolera.',
    'block_html_cfg_raw_label' => 'Renderuj HTML',

    // 3.4.0
    'tag_alias_readme' => 'The alias tag allows you to use aliases defined in your application as well as predefined aliases. As an example, you can use `alias[@web]` to link to images in the public html folder: `<img src="alias[@web]/image.jpg">`',
    'tag_menu_readme' => 'Generate a link to a menu item where the key is the page id (you can see the page ids when hovering over the site navigation in the administration).',
    'tag_page_readme' => 'Get the content of a full page or of a placeholder of a page. The first parameter is the page id (which you get by hovering over the site navigation in the administration): `page[1]`. If you only want to get the content of a placeholder of the cmslayout, use the second parameter: `page[1](placeholderName)`.',
    'block_mirror_language_name' => 'Mirror Language',
    'block_mirror_config_language_label' => 'Source Language',
    'block_mirror_admin_empty_language' => 'Configure a <b><span class="material-icons">edit</span> source language</b> to mirror its content for the current placeholder.',
    'block_mirror_admin_configured_language' => 'Mirroring this placeholder from <span class="material-icons">arrow_right_alt</span> <b>{name}</b>.',
];
