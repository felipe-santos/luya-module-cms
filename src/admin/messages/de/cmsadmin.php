<?php

return [
    'view_index_add_type' => 'Seitentyp',
    'view_index_type_page' => 'Seite',
    'view_index_type_module' => 'Modul',
    'view_index_type_redirect' => 'Weiterleitung',
    'view_index_as_draft' => 'Als Vorlage',
    'view_index_as_draft_help' => 'Möchtest du diese neue Seite als Vorlage hinterlegen?',
    'view_index_no' => 'Nein',
    'view_index_yes' => 'Ja',
    'view_index_page_title' => 'Seitentitel',
    'view_index_page_alias' => 'URL Pfadsegment',
    'view_index_page_meta_description' => 'Beschreibung',
    'view_index_page_nav_container' => 'Navigations-Container',
    'view_index_page_parent_page' => 'Übergeordnete Seite',
    'view_index_page_success' => 'Diese Seite wurde erfolgreich erstellt!',
    'view_index_page_parent_root' => 'Auf der Hauptebene',
    'view_index_page_use_draft' => 'Eine Vorlage verwenden?',
    'view_index_page_select_draft' => 'Möchtest du aus einer Vorlage auswählen?',
    'view_index_page_layout' => 'Layoutauswahl',
    'view_index_page_btn_save' => 'Neue Seite speichern',
    'view_index_module_select' => 'Modulname',
    'view_index_sidebar_new_page' => 'Neue Seite erstellen',
    'view_index_sidebar_drafts' => 'Vorlagen',
    'view_index_sidebar_move' => 'Verschieben',
    'view_update_drop_blocks' => 'Inhaltsblöcke hier platzieren',
    'view_update_blockcontent' => 'Blockinhalt',
    'view_update_settings' => 'Einstellungen',
    'view_update_configs' => 'Optionale Konfiguration',
    'view_update_btn_save' => 'Speichern',
    'view_update_btn_cancel' => 'Abbrechen',
    'view_update_btn_hide_help' => 'Hilfe ausblenden',
    'view_update_btn_show_help' => 'Hilfe anzeigen',
    'view_update_holder_state_on' => 'Platzhalter einklappen',
    'view_update_holder_state_off' => 'Platzhalter ausklappen',
    'view_update_is_draft_mode' => 'Sie sind im Seitenvorlage Modus.',
    'view_update_is_homepage' => 'Ist Startseite',
    'view_update_properties_title' => 'Seiten Eigenschaften',
    'view_update_no_properties_exists' => 'Es wurden noch keine Eigenschaften für diese Seite gespeichert.',
    'view_update_draft_no_lang_error' => 'Die Vorlage ist für die ausgewählte Sprache nicht verfügbar.',
    'view_update_no_translations' => 'Diese Seite wurde noch nicht übersetzt.',
    'view_update_page_is_module' => 'Diese Seite ist als <b>Module</b> hinterlegt.',
    'view_update_page_is_redirect_internal' => 'Diese Seite ist eine <b>interne Umleitung</b> auf <show-internal-redirection nav-id="typeData.value" />.',
    'view_update_page_is_redirect_external' => 'Diese Seite ist eine <b>externe Umleitung</b> auf <a ng-href="{{typeData.value}}">{{typeData.value}}</a>',
    'menu_node_cms' => 'Seiten',
    'menu_node_cmssettings' => 'CMS-Einstellungen',
    'menu_group_env' => 'Umgebung',
    'menu_group_item_env_container' => 'Container',
    'menu_group_item_env_layouts' => 'Layouts',
    'menu_group_elements' => 'Inhaltselemente',
    'menu_group_item_elements_blocks' => 'Blöcke verwalten',
    'menu_group_item_elements_group' => 'Gruppen verwalten',
    'btn_abort' => 'Abbrechen',
    'btn_refresh' => 'Aktualisieren',
    'btn_save' => 'Speichern',

// added translation in 1.0.0-beta3:

    'model_navitemmodule_module_name_label' => 'Modulname',
    'model_navitem_title_label' => 'Seitentitel',
    'model_navitem_alias_label' => 'Pfadsegment',
    'model_navitempage_layout_label' => 'Layout',
    'model_navitemredirect_type_label' => 'Art der Weiterleitung',
    'model_navitemredirect_value_label' => 'Ziel der Weiterleitung',
    'view_index_add_title' => 'Neue Seite hinzufügen',
    'view_index_add_page_from_language' => 'Neue Seite aus Sprache erstellen',
    'view_index_add_page_from_language_info' => 'Soll diese Seite aus einer anderen bereits bestehenden Sprache erstellt werden?',
    'view_index_add_page_empty' => 'Leere Seite erstellen',
    'view_index_language_loading' => 'Daten der Seite werden geladen.',
    'draft_title' => 'Vorlagen',
    'draft_text' => 'Hier können alle erstellten Vorlagen eingesehen und bearbeitet werden. Um eine Vorlage zu verwenden, erstelle eine neue Seite.',
    'draft_column_id' => 'ID',
    'draft_column_title' => 'Titel',
    'draft_column_action' => 'Aktion',
    'draft_edit_button' => 'Bearbeiten',
    'js_added_translation_ok' => 'Die Übersetzung dieser Seite wurde erfolgreich erstellt.',
    'js_added_translation_error' => 'Fehler beim Anlegen der Übersetzung.',
    'js_page_add_exists' => 'In dieser Ebene existiert bereits eine Seite "%title%" mit dieser URL (id=%id%).',
    'js_page_property_refresh' => 'Die Eigenschaften wurden aktualisiert.',
    'js_page_confirm_delete' => 'Soll diese Seite wirklich gelöscht werden?',
    'js_page_delete_error_cause_redirects' => 'Diese Seite kann nicht gelöscht werden, lösche zuerst die Weiterleitungen.',
    'js_state_online' => '%title% online',
    'js_state_offline' => '%title% offline',
    'js_state_hidden' => '%title% versteckt',
    'js_state_visible' => '%title% sichtbar',
    'js_state_is_home' => '%title% ist Startseite',
    'js_state_is_not_home' => '%title% ist keine Startseite',
    'js_page_item_update_ok' => 'Die Seite «%title%» wurde aktualisiert!',
    'js_page_block_update_ok' => 'Block «%name%» wurde aktualisiert!',
    'js_page_block_remove_ok' => 'Block «%name%» wurde entfernt!',
    'js_page_block_visbility_change' => 'Die Sichtbarkeit von «%name%» wurde erfolgreich geändert.',

// added translation in 1.0.0-beta4:

// added translation in 1.0.0-beta5:


    'view_update_blockholder_clipboard' => 'Zwischenablage',

// added translation in 1.0.0-beta6:


    'js_page_block_delete_confirm' => 'Block «%name%» wirklich löschen?',
    'view_index_page_meta_keywords' => 'Keywords',
    'current_version' => 'Arbeitsversion',
    'Initial' => 'Erste Version',
    'view_index_page_version_chooser' => 'Publizierte Version',
    'versions_selector' => 'Versionen',
    'page_has_no_version' => 'Diese Seite hat noch keine Version und kein Layout. Erstelle eine neue Version für diese Seite durch Anklicken des Hinzufügen-Icons <i class="material-icons green-text">add</i> auf der rechten Seite.',
    'version_edit_title' => 'Version bearbeiten',
    'version_input_name' => 'Bezeichnung',
    'version_input_layout' => 'Layout',
    'version_create_title' => 'Neue Version hinzufügen',
    'version_create_info' => 'Es kann von jeder Seite eine beliebige Anzahl von Versionen mit unterschiedlichen Inhalten erstellt werden. Über die Publizieren-Funktion kann bestimmt werden, welche Version auf der Website angezeigt werden soll.',
    'version_input_copy_chooser' => 'Zu kopierende Version',
    'version_create_copy' => 'Kopie einer existierenden Version erstellen.',
    'version_create_new' => 'Eine neue, leere Version erstellen.',
    'js_version_update_success' => 'Die Änderungen an der Version wurden erfolgreich gespeichert.',
    'js_version_error_empty_fields' => 'Eines oder mehrere Felder sind leer oder haben einen falschen Wert.',
    'js_version_create_success' => 'Die neue Version wurde erfolgreich gespeichert.',

// added translation in 1.0.0-beta7:


    'view_index_create_page_please_choose' => 'Bitte wählen',
    'view_index_sidebar_autopreview' => 'Automatische Vorschau',
    
// added translation in 1.0.0-beta8

    'module_permission_add_new_page' => 'Neue Seite erstellen',
    'module_permission_update_pages' => 'Seiten bearbeiten',
    'module_permission_edit_drafts' => 'Vorlagen bearbeiten',
    'module_permission_page_blocks' => 'Seiten-Inhaltsblöcke',
    'js_version_delete_confirm' => 'Soll die Version «%alias%» wirklich entfernt werden?',
    'js_version_delete_confirm_success' => 'Die Seiten-Version %alias% wurde erfolgreich entfernt.',
    'log_action_insert_cms_nav_item' => 'Neue Sprache der Seite <b>{info}</b> erfasst',
    'log_action_insert_cms_nav' => 'Neue Seite <b>{info}</b> hinzugefügt',
    'log_action_insert_cms_nav_item_page_block_item' => 'Den Block <b>{info}</b> hinzugefügt.',
    'log_action_insert_unkown' => 'Einen neuen Datensatz erfasst',
    'log_action_update_cms_nav_item' => 'Sprache Version <b>{info}</b> bearbeitet',
    'log_action_update_cms_nav' => 'Status der Seite <b>{info}</b> bearbeitet',
    'log_action_update_cms_nav_item_page_block_item' => 'Den Inhalt oder Konfiguration des Blockes <b>{info}</b> aktualisiert',
    'log_action_update_unkown' => 'Einen Datensatz bearbeitet',
    'log_action_delete_cms_nav_item' => 'Die Sprachversion <b>{info}</b> gelöscht',
    'log_action_delete_cms_nav' => 'Seite <b>{info}</b> gelöscht',
    'log_action_delete_cms_nav_item_page_block_item' => 'Den Block <b>{info}</b> gelöscht.',
    'log_action_delete_unkown' => 'Einen Datensatz entfernt',
    'block_group_favorites' => 'Favoriten',
    'button_create_version' => 'Neue Version speichern',
    'button_update_version' => 'Speichern',
    'menu_group_item_env_permission' => 'Seiten Berechtigungen',
    
// rc1

    'page_update_actions_deepcopy_text' => 'Erstelle eine Kopie der aktuellen Seite mit allen dazugehörigen Inhalten. Es werden dabei alle Inhalte in allen angelegten Sprachen von allen veröffentlichten Versionen kopiert.',
    'page_update_actions_deepcopy_btn' => 'Kopie erstellen',
    
// rc2
    'model_navitem_title_tag_label' => 'Titel Tag (SEO)',
    
// rc3
    'model_navitempage_empty_draft_id' => 'Die Vorlage darf nicht leer sein.',
    'view_update_variation_select' => 'Keine Blockvariation ausgewählt',
    'menu_group_item_env_config' => 'Konfiguration',
    'js_config_update_success' => 'Konfiguration wurde gespeichert',
    'config_index_httpexceptionnavid' => 'Gib die Seite an, welche bei einem 404 Fehler angezeigt werden soll.<br /><small>Tipp: Lege die 404-Seite im Stammverzeichnis an und markiere sie als versteckt.</small>',
    'module_permission_update_config' => 'CMS-Konfigurationen',
    'module_permission_delete_pages' => 'Seite löschen',
    'page_update_actions_deepcopy_title' => 'Seite kopieren',
    'page_update_actions_layout_title' => 'Layout-Datei',
    'page_update_actions_layout_text' => 'Es kann ein anderes Layout als das Standardlayout angegeben werden. Falls keine Angabe erfolgt, wird das `main.php` Standard-Layout verwendet. Es können auch Alias-Pfade angegeben werden. Die Layout-Datei benötigt keine PHP-Dateiendung.',
    'page_update_actions_layout_file_field' => 'Layout Controller Datei',
    'page_update_actions_modal_title' => 'Seiteneigenschaften',
    'js_page_update_layout_save_success' => 'Die Layout-Datei wurde erfolgreich aktualisiert.',
    'js_page_create_copy_success' => 'Die Seitenkopie wurde erfolgreich erstellt.',
    'view_update_offline_info' => 'Schaltet die Seite online / offline. Eine Seite die offline ist, kann nicht aufgerufen werden.',
    'view_update_hidden_info' => 'Schaltet die Seite sichtbar / unsichtbar. Dies beeinflusst auch die Anzeige in der Navigation.',
    'view_update_homepage_info' => 'Setzt diese Seite als Startseite.',
    'view_update_block_tooltip_copy' => 'Zur Zwischenablage hinzufügen',
    'view_update_block_tooltip_visible' => 'Sichtbar',
    'view_update_block_tooltip_invisible' => 'Unsichtbar',
    'view_update_block_tooltip_edit' => 'Bearbeiten',
    'view_update_block_tooltip_editcfg' => 'Konfigurieren',
    'view_update_block_tooltip_delete' => 'Löschen',
    'view_update_block_tooltip_close' => 'Bearbeitung schliessen',
    
// 1.0.0
    'cmsadmin_dashboard_lastupdate' => 'Zuletzt aktualisierte Seiten',
    'cmsadmin_settings_homepage_title' => 'Startseite',
    'cmsadmin_settings_trashpage_title' => 'Seite löschen',
    'cmsadmin_settings_modal_title' => 'Einstellungen',
    'cmsadmin_item_settings_titleslug' => 'Seiteninformationen',
    'cmsadmin_created_at' => 'Erstellt am',
    'cmsadmin_version_remove' => 'Version löschen',
    'view_index_sidebar_container_no_pages' => 'Keine Seiten',
    'view_update_set_as_homepage_btn' => 'Als Startseite setzen',
    'cmsadmin_settings_time_title' => 'Zeitplaner',
    'cmsadmin_settings_time_title_from' => 'Von',
    'cmsadmin_settings_time_title_till' => 'Bis',
    'view_index_page_meta_timestamp_create' => 'Erstellungsdatum',
    'nav_item_model_error_modulenameexists' => 'Der Alias "{alias}" existiert bereits als ein Module. Bitte wähle einen andere Bezeichnung oder benenne den bestehenden Alias in der Konfiguration um.',
    'nav_item_model_error_parentnavidcannotnull' =>  'Die übergeordnete Nav-ID darf nicht Null sein.',
    'nav_item_model_error_urlsegementexistsalready' => 'Dieser Alias existiert bereits, bitte wähle einen anderen Namen.',
    'menu_group_item_env_redirections' => 'Weiterleitungen',
    'redirect_model_atr_timestamp_create' => 'Erstellungsdatum',
    'redirect_model_atr_catch_path' => 'Ausgangspfad',
    'redirect_model_atr_catch_path_hint' => 'Der Pfad, von dem weitergeleitet werden soll. Sollen auch alle Unterpfade weitergeleitet werden, kannst du die Wildcard * verwenden, z.B. /blog*, um alle Unterpfade von /blog weiterzuleiten.',
    'redirect_model_atr_catch_path_error' => 'Der Pfad muss mit einem Slash / beginnen.',
    'redirect_model_atr_redirect_path' => 'Ziel',
    'redirect_model_atr_redirect_path_hint' => 'Du kannst entweder einen absoluten Pfad verwenden, der mit https:// oder http:// beginnt, einen relativen Pfad zum Startverzeichnis der Website, der mit / beginnt, oder einen relativen Pfad zum Pfad, von dem weitergeleitet wird (z.B. wartung, um von /shop/start nach /shop/wartung weiterzuleiten). Wenn eine Wildcard * verwendet wird im Ausgangspfad kann dieser auch als Ziel verwendet werden.',
    'redirect_model_atr_redirect_status_code' => 'HTTP-Status-Code',
    'redirect_model_atr_redirect_status_code_hint' => 'Art der Weiterleitung. Bei der Verwendung von 301: Moved Permanently werden Browser die Weiterleitung im Cache speichern, so dass Änderungen des Ziels erst nach dem Löschen des Browser-Caches wirksam werden.',
    'redirect_model_atr_redirect_status_code_opt_301' => '301: Moved Permanently',
    'redirect_model_atr_redirect_status_code_opt_302' => '302: Moved Temporarily',

// 1.0.1
    'module_permission_page' => 'Page Content',

// 1.0.6
    'page_update_actions_deepcopyastemplate_title' => 'Als Vorlage kopieren',
    'page_update_actions_deepcopyastemplate_text' => 'Erstelle eine Vorlage der aktuellen Seite mit allen dazugehörigen Inhalten. Es werden dabei alle Inhalte in allen angelegten Sprachen von allen veröffentlichten Versionen kopiert.',
    'page_update_actions_deepcopyastemplate_btn' => 'Vorlage erstellen',
    'js_page_create_copy_as_template_success' => 'Die Vorlage wurde erfolgreich erstellt.',

// 2.0

    'model_navitem_image_id_label' => 'Bild',
    'view_index_page_label_subpage' => 'Übergeordnete Seite auswählen',
    'view_index_page_label_parent_nav_id' => 'Platzierung in der Navigation',
    'view_index_page_label_parent_nav_id_root' => 'Auf der Hauptebene',
    'view_index_page_label_parent_nav_id_subpage' => 'Als Unterseite',
    'cmsadmin_item_settings_titleseo' => 'SEO',
    'cmsadmin_item_settings_titleexpert' => 'Experte',
    'model_navitem_is_url_strict_parsing_disabled_label' => 'Striktes URL-Parsing',
    'model_navitem_is_url_strict_parsing_disabled_label_enabled' => 'Aktiviert',
    'model_navitem_is_url_strict_parsing_disabled_label_disabled' => 'Deaktiviert',
    'model_navitem_is_url_strict_parsing_disabled_label_hint' => 'Striktes URL-Parsing sollte aktiviert werden, ausser die Seite enthält in ihrem Inhalt einen URL-generierenden Modul-Block.',
    'model_navitem_title_tag_label_hint' => 'Das Title-Tag wird von vielen Browsern im Titelbalken und von Suchmaschinen als Seitentitel von Suchresultaten angezeigt.',
    'view_index_page_meta_description_hint' => 'Die Seitenbeschreibung sollte in einem Satz Auskunft über den Zweck der Seite geben. Sie wird von Suchmaschinen oft als Beschreibung für eine Seite in den Suchresultaten verwendet. Sie ist auch relevant beim Teilen der Seite über Social-Media-Kanäle.',
    'view_index_page_meta_keywords_hint' => 'Die Stichworte werden mit Kommas getrennt (z.B. Pizza, Burger, Pasta). Nur noch wenige Suchmaschinen werten diese Stichworte aus. Verwenden Sie nur Stichworte, die für den Inhalt der Seite relevant sind. Die LUYA-Werkzeugleiste des Frontends gibt Auskunft darüber, ob für die aktuelle Seite Stichworte definiert wurden oder nicht.',
    'model_navitem_image_id_label_hint' => 'Das Bild ist wichtig beim Teilen der Seite über Social-Media-Kanäle. In der Regel wird dieses Bild von Social-Media-Plattformen als Vorschaubild verwendet.',
    'view_index_module_controller_name' => 'Controller',
    'view_index_module_action_name' => 'Action',
    'view_index_module_action_params' => 'Action parameters',
    'view_index_module_select_help' => 'Wählen Sie das anzuzeigende Modul aus der Liste aus (nur Frontend-Module werden aufgeführt). Module werden im Modul-Abschnitt der config konfiguriert.',
    'view_index_module_advanced_settings_button' => 'Erweiterte Einstellungen',
    
// 3.0

    'menu_group_item_env_themes' => 'Themen',
    'view_index_page_is_cacheable' => 'Caching',
    'view_index_page_is_cacheable_hint' => 'Wenn eingeschalten, wird die gesamt Seite mit allen Blöcken aus dem Cache geladen und dynamische Daten werden nicht mehr geladen.',

// 3.3

    'menu_group_page_display' => 'Seitendarstellung',
    'menu_group_configuration' => 'Konfiguration',
    'menu_group_protocol' => 'Protokoll',
    'menu_group_protocol_model_event_logger' => 'Model Event Log',
    'unable_to_find_item_for_language' => 'Die gesuchte Seite wurde noch nicht übersetzt.',

    // 3.4

    'js_block_attribute_empty' => '«%label%» darf nicht leer sein.',
    
// 4.0

    'menu_group_item_env_websites' => 'Websites',
    'model_website_use_default_theme' => 'Use default theme',
];
