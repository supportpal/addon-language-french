<?php

return array(

    // SupportPal
    "product_name"              => "SupportPal",
    "operator_panel"            => "Panneau de contrôle de l'opérateur",
    "welcome"                   => "Bienvenue au portail d'assistance",
    "welcome_desc"              => "Cliquez pour démarrer un tour guidé des fonctionnalités du système.",

    // Dashboard
    "submit_ticket"             => "Ouvrir un billet",
    "submit_ticket_desc"        => "Utilisez ce formulaire pour ouvrir un billet.",
    "track_ticket"              => "Suivre un billet",
    "track_ticket_desc"         => "Utilisez votre courriel et le numéro de votre billet pour faire le suivi du billet.",
    "my_tickets"                => "Mes billets",
    "my_tickets_desc"           => "Faites le suivi de vos billets. Vous trouverez vos billets actuellement ouverts, mais aussi des anciens billets déjà résolus.",
    "no_modules"                => "Aucun module n'est activé.",
    "search_results"            => "Résultats de la recherche",
    "found_results"             => "Trouvé :total résultats pour le(s) mots-clé(s) recherché(s)",

    // Maintenance
    "maintenance"               => "Une maintenance est en cours",
    "maintenance_desc"          => "Le portail d'assistance n'est présentement pas disponible. Une maintenance est en cours. Nous vous remercions de votre patience. Veuillez ressayer dans quelques minutes.",
    "maintenance_active"        => "Le mode de maintenance est actif.",

    // About
    "license_status"            => "Statut de la licence",
    "license_code"              => "Code de la licence",
    "change_license"            => "Changer la licence",
    "license_info"              => "Info licence",
    "license_owner"             => "Propriétaire de la licence",
    "license_created"           => "Licence créée",
    "license_type"              => "Type de la licence",
    "branding"                  => "Marque",
    "license_expires"           => "Expiration de la licence",
    "license_valid_ip"          => "Licence valide pour IP(s)",
    "support_status"            => "Statut du support",
    "support_expires"           => "Support expire",
    "version_info"              => "Version",
    "installed_version"         => "Version installée",
    "available_version"         => "Version disponible",
    "monthly_product"           => "* Votre date d'expiration s'ajuste tous les mois en fonction des paiements.",

    // API Tokens
    "api_token"                 => "Jeton API|Jetons API",
    "token"                     => "Jeton",
    "regenerate_token"          => "Regénérer jeton",
    "access_level"              => "Niveau d'accès",
    "read_write"                => "Lecture &amp; écriture",
    "read_only"                 => "Lecture uniquement",

    // Spam Rules & Filtering
    "spam_rule"                 => "Règle anti-spam|Règles anti-spam",
    "containing_text"           => "Contient du texte",
    "filter_new_message"        => "Nouveau message d'un utilisateur",
    "filter_new_comment"        => "Nouveau commentaire libre-service d'un utilisateur",
    "filter_user_login"         => "Login utilisateur",
    "filter_operator_login"     => "Login opérateur",
    "filter_api_access"         => "Accès API",
    "content"                   => "Contenu",
    "sender"                    => "Expéditeur",
    "content_sender"            => "Contenu & Expéditeur",

    // Company
    "company"                   => "Compagnie|Compagnies",

    // Email
    "default_email_addr"        => "Adresse courriel par défaut",
    "default_email_addr_desc"   => "Cette adresse courriel sera utilisé en tant qu'expéditeur dans la plupart des courriels envoyés par le système.",
    "include_operator_name"     => "Inclure nom de l'opérateur",
    "include_operator_name_desc" => "Inclure nom de l'opérateur dans le champ 'De' pour les courriels de réponse aux billets. Exemple: De: Me Isabelle Tremblay (Le Droit Chemin)",
    "include_dept_name"         => "Inclure nom du département",
    "include_dept_name_desc"    => "Inclure le nom du service dans le champ 'De' de tous les courriels de billets liés. Notez que un nouveau thread courriel est créé si un billet change de département.",
    "global_email_header"       => "En-tête des courriels",
    "global_email_header_desc"  => "Ajouter un en-tête à tous les courriels envoyés par le système. HTML est accepté.",
    "global_email_footer"       => "Pied de page des courriels",
    "global_email_footer_desc"  => "Ajouter un pied de page à tous les courriels envoyés par le système. HTML est accepté.",
    "email_template"            => "Gabarit de courriel|Gabarits de courriel",
    "email_log"                 => "Journal de courriels",
    "email_queue"               => "File d'attente des courriels",
    "email_queue_desc"          => "Voici les courriels qui sont en attente d'envoi par le cron.",
    "email_method"              => "Méthode d'envoi de courriels",
    "php_mail_function"         => "PHP mail() function",
    "smtp"                      => "SMTP",
    "smtp_host"                 => "Hôte SMTP",
    "smtp_port"                 => "Port SMTP",
    "smtp_encryption"           => "Chiffrement SMTP",
    "smtp_requires_auth"        => "Authentification requise",
    "smtp_username"             => "Nom d'utilisateur SMTP",
    "smtp_password"             => "Mot de passe SMTP",
    "ssl"                       => "SSL",
    "email_content"             => "Contenu du courriel",
    "email_content_desc"        => "Entrez un sujet par défaut et le contenu des courriels pour ce modèle, vous pouvez aussi écrire le modèle dans d'autres langues. Si un modèle ne soit pas dans une autre langue, il utilisera les données par défaut.",
    "outgoing"                  => "Sortant",
    "incoming"                  => "Entrant",
    "incoming_spam"             => "Entrant (Rejeté - Spam)",
    "incoming_throttled"        => "Entrant (Rejeté - Throttled)",
    "email_subject"             => "Sujet du courriel",
    "twig_html_warning"         => "Twig n'est pas permis à l'intérieur des balises HTML / attributs et sera automatiquement supprimé lors de l'enregistrement.",

    // Modules
    "modules"                   => "Module|Modules",
    "modules_desc"              => "Voici une liste de tous les modules disponibles, cliquez sur l'icône de modification pour mettre à jour les paramètres de ce module.",
    "module_disable"            => "Les modules désactivés seront supprimés de l'interface et de l'interface de l'opérateur.",

    // Scheduled tasks
    "scheduled_task"            => "Tâche prévue|Tâches prévues",
    "interval_desc"             => "Définissez la fréquence d'exécution pour une tâche. p.ex. 5 minutes signifie que la tâche est exécutée toutes les 5 minutes si le cron est actif.",
    "cron_settings"             => "Paramètres CRON",
    "cron_running"              => "En exécution",
    "cron_not_running"          => "Pas en exécution",
    "task_ran"                  => "Succès d'éxecution de la tâche planifiée manuellement.",
    "task_failed"               => "Échec tentative d'exécution de tâche planifiée manuellement.",

    // Plugins
    "plugins"                   => "Plugin|Plugins",
    "visit_plugin"              => "Accéder sites du plugin",

    // Messages
    "last_activity"             => "Dernière activité",
    "send_to"                   => "Envoyer à",
    "inbox"                     => "Boîte de réception",
    "compose"                   => "Composer",

    // Utilities
    "utilities"                 => "Utilitaires",

    // System Cleanup
    "system_cleanup"            => "Nettoyage système",
    "system_cleanup_desc"       => "Utilisez les options disponibles pour supprimer les données qui ne sont plus nécessaires ou que vous ne voulez plus.",
    "files"                     => "Fichiers",
    "files_desc"                => "Les éléments suivants sont stockés sous forme de fichiers sur le système de fichiers.",
    "logs"                      => "Journaux",
    "logs_desc"                 => "Les éléments suivants sont stockés sous forme d'enregistrements dans la base de données.",
    "empty"                     => "Vide",
    "prune"                     => "Vider",
    "total_records"             => "Enregistrements",
    "system_cache"              => "Cache système",
    "system_cache_desc"         => "Utilisé pour les données du système de stockage qui ne change pas régulièrement pour accélérer l'application.",
    "template_cache"            => "Cache template",
    "template_cache_desc"       => "Pré-compilées versions des vues de modèle sont stockées pour améliorer les temps de chargement.",
    "attachments_desc"          => "les pièces jointes de billets sont stockés sur le système de fichiers, mais ils peuvent prendre de la place, vous pouvez tailler les fichiers joints avant une certaine date. ",
    "system_activity_log_desc"  => "Stocke toutes les activités des utilisateurs, opérateurs et du système, Vous pouvez tailler les enregistrements avant une certaine date. ",
    "email_log_desc"            => "Stocke tous les courriels entrants et sortants. Vous pouvez tailler les enregistrements avant une certaine date. ",
    "operator_login_log_desc"   => "Stocke chaque fois qu'un login opérateur avec son IP. Vous pouvez tailler les enregistrements avant une certaine date. ",

    // Captcha
    "captcha"                   => "Captcha",
    "show_captcha"              => "Afficher le Captcha",

    // Widgets
    "dashboard"                 => "Panneau de contrôle",
    "add_remove_widget"         => "Ajouter / Retirer Widgets",
    "enable_tour"               => "Activer le tour guidé",

    // Product Tour
    "dashboard_desc"            => "Votre panneau de contrôle personnalisé. Les widgets peuvent être retirés, minimisés et déplacés !",
    "private_messages"          => "Messages privés",
    "messages_desc"             => "Les messages privés permettent une conversation 1:1 avec d'autres opérateurs.",
    "configure"                 => "Configurer votre Accès Client",
    "configure_desc"            => "Notre plateforme contient plusieurs paramètres qui vous permettent de configurer le système selon vos préférences.",
    "default_email"             => "Adresse courriel par défaut",
    "default_email_desc"        => "L'adresse courriel par défaut à utiliser pour toute correspondance avec les utilisateurs.",
    "dept_settings_desc"        => "Les départements de votre organisation fonctionnent différemment. Les paramètres départementaux vous permettent d'outre-passer les paramètres globaux.",
    "department_desc"           => "Les départements fonctionnent comme dans votre entreprise. Ils sont utiles pour assurer que les demandes des utilisateurs se rendent rapidement aux personnes qualifiées pour y répondre.",
    "department_email"          => "Adresses courriels du département",
    "dept_email_desc"           => "Plusieurs adresses courriels peuvent être assignées par département.",
    "dept_tmpl"                 => "Templates des courriels des départements",
    "dept_tmpl_desc"            => "Vous pouvez changer ou désactiver les modèles courriel du département. Vous pouvez définir des modèles spécifique et les activer ici.",
    "schedule_task_desc"        => "Les tâches planifiées sont utilisés pour automatiser divers processus au sein de SupportPal y compris la collecte des billets par courriel.",
    "schedule_task_2"           => "Les tâches planifiées nécessitent une tâche cron pour être créé pour fonctionner. L'intervalle pour chaque tâche effectuée par la tâche cron peut être réglée via le formulaire de modification.",
    "schedule_task_cron"        => "Cron Job",
    "schedule_task_3"           => "Créer une tâche cron similaire à l'exemple fourni ci-dessous sur votre serveur pour les tâches planifiées soit exécutéss automatiquement.",
    "ticket_channel_desc"       => "Les canaux Billets sont des méthodes pour créer des billets. Ils peuvent être facilement étendus pour inclure vos propres canaux, par exemple des billets ouverts via Instagram.",
    "user_desc"                 => "Les utilisateurs qui interagissent avec votre système sont affichés ici. Vous pouvez ajouter, modifier et supprimer des clients.",
    "organisation_desc"         => "Les utilisateurs peuvent être affectés à des organisations leur permettant l'accès aux billets ouverts par d'autres utilisateurs au sein de leur organisation.",
    "operator_desc"             => "D'autres membres du personnel peuvent être ajoutés en tant qu'opérateurs ici.",
    "ticket_desc"               => "Le tableau de billets contient tous les billets pertinents pour vous.",
    "ticket_toolbar"            => "Barre d'outils",
    "ticket_desc3"              => "Des actions en vrac peuvent être effectuées sur des billets en utilisant la barre d'outils de billets.",
    "tour_complete"             => "Tour de visite complet!",
    "tour_complete_desc"        => "Merci d'utiliser SupportPal. <br /> <br /> Nous vous recommandons maintenant que vous suivez le guide de démarrage ci-dessous pour configurer votre service d'assistance.",

    // IP Ban
    "ip_ban_time_desc"          => "Blocage permanent ou temporaire.",
    "expiry"                    => "Expiration",
    "expired"                   => "Expiré",
    "expiry_time"               => "Heure d'expiration",
    "expiry_time_desc"          => "Le moment où l'interdiction expirera, si une date est pas définie ou dans le passé, il sera automatiquement réglé sur 24 heures à partir de maintenant.",
    "permanent"                 => "Permanent",

    // Languages
    "no_enabled_languages"      => "Échec de mise à jour le :item. Au moins une langue doit être activé à tout moment.",

    // General Settings
    "locale"                    => "Langue",
    "simpleauth"                => "SimpleAuth",
    "admin_folder"              => "Dossier Admin",
    "admin_folder_desc"         => "Définissez le nom du dossier utilisé pour le panneau opérateur. Il est recommandé de changer la valeur par défaut \admin\ d'un point de vue sécurité. ",
    "enable_ssl"                => "Activer SSL",
    "maintenance_mode"          => "Mode de Maintenance",
    "maintenance_mode_desc"     => "Désactive la fonctionnalité du help desk publique et montre un message de maintenance. Modifier les ressources / templates / frontend / [modèle] /core/maintenance.twig changer le message qui est affiché aux utilisateurs.",
    "default_user_country"      => "Pays par défaut du client",
    "default_user_country_desc" => "Le pays qui sera sélectionné par défaut lorsque les client s'inscrivent.",
    "system_timezone"           => "Fuseau horaire du Système",
    "system_timezone_desc"      => "Le fuseau horaire qui est appliqué dans tout le système par défaut. Les opérateurs peuvent changer leur fuseau horaire dans leurs paramètres personnels.",
    "date_format"               => "Format de date",
    "date_format_desc"          => "Le format de date qui est utilisée dans le monde.",
    "time_format"               => "Format de l'heure",
    "time_format_desc"          => "Le format de l'heure global.",
    "simpleauth_key"            => "SimpleAuth Key",
    "simpleauth_key_desc"       => "La clé pour notre authentification (single sign on option), minimum de 16 caractères.",
    "simpleauth_operators"      => "Autoriser pour les opérateurs",
    "base_url"                  => "URL du Système",
    "base_url_desc"             => "Entrez l'adresse Web complète de votre installation, utilisé pour générer les URL qui sont envoyés aux utilisateurs.",
    "debug"                     => "Déboguer",
    "debug_mode"                => "Mode débogage",
    "pretty_urls"               => "Pretty URLs",
    "pretty_urls_desc"          => "Activation va supprimer index.php des URL. Activez seulement si vous êtes en mesure d'accéder au panneau de commande sans index.php. Désactivez si vous n'avez pas mod_rewrite installé, les fichiers .htaccess ne sont pas autorisés ou ne sont pas converties aux Apache .htaccess règles de réécriture pour travailler avec votre serveur web alternative.",

    /*
     * 2.0.2
     */
    "widget"                    => "Widget|Widgets",

    /*
     * 2.0.3
     */
    "enable_ssl_desc"           => "L'activation forcera l'ensemble frontend et backend à utiliser des connexions sécurisées, ce réglage est recommandé. Assurez vous que les fonctions HTTPS soient correctement fonctionnelles sur votre serveur avant de l'activer. ",
    "unexpected_template_error" => "Une erreur inattendue est survenue lors de vérification de la syntaxe du modèle. Veuillez réessayer.",
    "empty_template_preview"    => "Veuillez fournir un modèle valide pour pouvoir utiliser la fonction de prévisualisation.",
    "no_department_address"     => "Impossible de trouver une adresse de service dans la liste des destinataires.",
    "email_loop_detected"       => "Boucle détectée - courriel envoyé à partir d'une adresse de département",
    "email_ticket_locked"       => "Billet verrouillé. L'utilisateur a été invité à ouvrir un nouveau billet par courriel.",
    "email_no_body"             => "Impossible d'identifier le corps du message.",
    "email_runtime_error"       => "Une erreur d'exécution (runtime error) est survenue lors de la création de la réponse du billet / réponse.",
    "email_reply_disabled"      => "Les réponses courriel de l'utilisateur ont été désactivées pour ce département.",
    "email_throttled"           => "Trop d'courriels provenant de cet utilisateur. La limite est de :max_requests courriels toutes les :decay_time minutes.",

    /*
     * 2.1.0
     */
    "generalsetting_desc"       => "Permet de la configuration générale de SupportPal. Si vous voulez modifier un module précis, par exemple, les Billets, vous pouvez ouvrir sa section dans le menu latéral, afin de consulter les paramètres de ce module.",
    "brand"                     => "Marque|Marques",
    "brand_desc"                => "Une marque est votre identité de contact avec le client à travers SupportPal, en permettant plusieurs canaux de communication. Plusieurs marques peuvent être gérées de manière transparente à l'aide d'un seul panneau opérateur.",
    "default_brand"             => "Marque par défaut",
    "default_brand_desc"        => "Permet d'afficher aux clients sur la partie front-end la marque par défaut.",
    "brand_enabled_desc"        => "Active ou désactive la marque. Une marque désactivée ne peut être utilisée, et ne sera pas comptée dans le nombre de marques autorisées par votre licence. Désactiver une licence permet de temporairement cacher une licence, afin de potentiellement récupérer des informations avant une suppression. La suppression quant à elle supprime directement toutes les informations de liées aux utilisateurs et aux billets, qui sont liés à cette marque.",
    "inherit_global_setting"    => "Hériter paramètres globaux",
    "brand_date_format_desc"    => "Le format de la date pour cette marque sur la partie front-end.",
    "brand_time_format_desc"    => "Le format de l'heure pour cette marque sur la partie front-end.",
    "brand_timezone"            => "Fuseau horaire de la marque",
    "brand_timezone_desc"       => "Le fuseau horaire par défaut. Chaque utilisateur authentifié aura le choix de son propre fuseau horaire.",
    "brand_default_lang_desc"   => "Langage par défaut utilisé sur le front-end.",
    "brand_lang_toggle_desc"    => "Si le choix du langage est activé ou non.",
    "brand_groups_desc"         => "Les opérateurs dans les groupes sélectionnés pourront créer, mettre à jour et supprimer (en fonction des rôles) des billets, et autres contenus liés à cette marque.",
    "select_brand"              => "Choisir une marque...",
    "add_another_language"      => "Ajouter une autre langue...",
    "mass_email_brand_desc"     => "Please select which brand the email will be sent from. It will be used to set the sending from name and address, load the correct email template and in the merge fields. If you send to a user group, only users who belong to the selected brand will be emailed.",
    "brand_limit_exceeded"      => "Votre licence vous permet un nombre de :allowed marque(s) maximum. Pour pouvoir créer plus de marques, veuillez visiter notre espace client.",
    "additional_brands"         => "Marques additionnelles",
    "purchase_more"             => "Acheter autre",
    "brand_limit_allowed"       => "Votre licence vous permet d'avoir :allowed marque maximum.|Votre licence vous permet d'avoir :allowed marques maximum.",
    "brand_limit_purchase"      => "If this is incorrect, please <strong>reissue</strong> your license at our <a href='http://www.supportpal.com/manage/' target='_blank'>client area</a> and visit the <a href=':route'>License Information</a> page to synchronise your help desk with our license server.<br />To purchase additional brands, please <a href='https://www.supportpal.com/manage/upgrade.php?type=configoptions&id=:id' target='_blank'>upgrade your license</a>.",
    "support_expiry"            => "Your support and updates subscription is valid until :date.",
    "support_status_desc"       => "Please <a href='https://www.supportpal.com/manage/cart.php?gid=addons' target='_blank'>renew your support subscription</a> in order to get the latest support and updates from SupportPal.",
    "ip_ban"                    => "Blocage IP|Blocages IP",
    "ip_whitelist"              => "Liste blanche d'IP",
    "whitelisted_ip"            => "IP autorisés",
    "license_path"              => "Chemin d'installation",
    "php_info"                  => "Information PHP",
    "log"                       => "Journal|Journaux",
    "invalid_department_brand"  => "Département non assigné à une marque.",
    "incoming_rejected"         => "Entrant(Rejeté)",

    /*
     * 2.1.1
     */
    "file_manager"              => "Gestionnaire des logs",
    "file_manager_desc"         => "Ci-dessous, vous pouvez télécharger ou supprimer les logs conservés par le système, pouvant être utilisés à des fins de debug. Les fichiers de logs sont automatiquements cyclés, avec une conservation de 5 jours maximum.",
    "app_logs"                  => "Logs de l'application",
    "app_logs_desc"             => "Tous les warnings et erreurs en général sont stockés ici. Si vous avez besoin d'utiliser notre support, vous devrez peut-être utiliser ces logs.",
    "email_logs"                => "Logs des courriels.",
    "email_logs_desc"           => "Les détails des courriels entrants sont stockés dans ces fichiers lorsqu'ils sont analysés et importés en tant que billets.",

    /*
     * 2.1.2
     */
    "reply_to"                  => "Répondre à ",
    "and_number_others"         => "et :number autre|et :number autres",
    "user_templates"            => "Templates utilisateurs",
    "operator_templates"        => "Templates opérateurs",

    /*
     * 2.2.0
     */
    "attachment_size"           => "Taille limite des pièces jointes.",
    "attachment_size_desc"      => "Définit la taille maximum pour toutes les pièces jointes cumulées dans un seul courriel. Les options sont K (Kilobyte) et M (Megabyte). Tout autre valeur est interprétée en bytes. Par exemple : 5M pour 5 Megabytes. Afin de n'autoriser aucune pièce jointe, on pourra utiliser 0.",
    "attachment_limit_reached"  => "Taille maximale des pièces jointes atteinte (:size).",
    "no_existing_translations"  => "Aucune traduction disponible.",
    "add_translation"           => "Ajouter une traduction",
    "todo_list"                 => "À faire",
    "version_check"             => "Vérification de la version",
    "system_overview"           => "Aperçu général",
    "getting_started"           => "Getting Started",
    "operator_notes"            => "Notes personnelles",
    "simpleauth_operators_desc" => "Allow operators to log in and out with SimpleAuth, we recommend to keep this disabled unless you are specifically using it for this purpose.",
    "upgrade_and_reactivate"    => "Mettre à jour et réactiver",
    "upgrade_pending"           => "Mise à jour en attente",
    "locale_in_uri"             => "Include Locale in URI",
    "locale_in_uri_desc"        => "Disable to remove the locale from the URI, for example: http://support.mycompany.com/en/announcements becomes http://support.mycompany.com/announcements. Can only be disabled when there's one enabled language in the system.",

    /*
     * 2.3.0
     */
    "disabling_default_language" => "Ce langage est actuellement configuré par défault. Le désactiver fera qu'un autre langage actif sera sélectionné par défaut.",

    /*
     * 2.3.1
     */
    "javascript_required"       => "Veuillez activer le JavaScript pour utiliser cette page.",
    "go_to_dashboard"           => "Aller sur la page d'accueil.",
    "brand_colour_desc"         => "Sélectionnez une couleur pour votre marque, elle sera utilisée pour le schéma de couleurs sur le front-end et le modèle d'opérateur. Laissez vide pour utiliser le schéma de couleurs par défaut.",
    "favicon"                   => "Favicon",
    "favicon_desc"              => "Le Favicon est le petit icone dans votre barre d'onglets. Pour des résultats performants, assurez vous que les dimensions de l'icone sont contenus dans cet intervalle : de 32x32px à 310x310px, qu'il soit carré, et au format ICO/PNG.",
    "view_original"             => "Voir l'original",
    "download_original"         => "Télécharger l'original",
    "consume_all"               => "Optionally enter a department courriel address  with \"Consume All\" enabled.",
    "reprocess_email"           => "Re processer courriel",
    "reprocess_email_desc"      => "Nous recommendons de vérifier tout d'abord ce qui bloquait au niveau de l'courriel avant de reprocesser.",
    "email_blocked_desc"        => "L'envoi de l'courriel a échoué plusieurs fois, veuillez désormais l'envoyer manuellement.",
    "captcha_type"              => "Type de captcha",
    "default_captcha"           => "Captcha par défaut",
    "recaptcha_site_key"        => "Site Key",
    "recaptcha_secret_key"      => "Secret Key",
    "recaptcha_desc"            => "Veuillez enregistrer un nouveau site sur <a target='_blank' href=\"https://www.google.com/recaptcha/admin\">https://www.google.com/recaptcha/admin</a>, selectionnez le reCAPTCHA correct et assurez-vous d'ajouter les bons domaines. Copiez le site et la secret key ci-dessus.",
    "enter_code"                => "Entrer code",
    "export_data"               => "Exporter les données",
    "export_data_desc"          => "Génère un export téléchargeable de toutes les donnés appartenant à cet utilisateur.",
    "export_data_select"        => "Veuillez sélectionner les données à exporter.",
    "export_data_scheduled"     => "L'export est en train d'être généré, cela peut prendre un peu de temps. Nous vous enverrons un courriel lorsque les données seront prêtes à être téléchargées.",
    "database"                  => "Base de données",
    "database_desc"             => "Les objets suivants sont stockés dans la base de données.",
    "prune_users"               => "Les utilisateurs inactifs peuvent être automatiquement supprimés. Un utilisateur est considéré inactif s'il ne s'est pas connecté sur une période donnée.",
    "prune_tickets"             => "Les billets inactifs peuvent être automatiquement supprimés. Un billet est considéré inactif s'il a été résolu et n'a eu aucune activité sur une période donnée.",
    "prune_organisations"       => "Les organisations inactives peuvent être automatiquement supprimées. Une organisation est considérée inactive si aucun utilisateur n'y est lié, ou n'a eu d'activité sur une période donnée.",
    "prune_export"              => "Les exports de données des utilisateurs sont stockés sur le système mais peuvent prendre une place conséquente. Vous pouvez supprimer ces exports avant une date spécifique.",
    "automatically_prune"       => "Supprimer automatiquement",
    "days_after_saved"          => "Enregistrements après",
    "days_after_last_activity"  => "Enregistrements inactifs après",
    "record_permanent_delete"   => "Ces enregistrements seront supprimés définitivement. Cela impactera les rapports.",
    "record_delete_relations"   => "Les enregistrements seront supprimés définitivement avec les données suivantes : :relations. Cela impactera les rapports.",
    "manually_prune"            => "Supprimer manuellement les enregistrements précédant",

    /*
     * 2.4.0
     */
    "enable_ssl_warning"        => "If you enable this setting when the page doesn't load correctly, you may be locked out of SupportPal!",
    "verify_frontend_loads"     => "Please verify that the frontend loads correctly below.",
    "twig_operator_reply_template"   => "The {{ operator.reply_template|raw }} merge field will be processed at runtime hence the preview may be incorrect.",

    /*
     * 2.4.1
     */
    "additional_brands_desc"    => "Allows running other brands on your SupportPal installation.",
    "no_branding"               => "No Branding",
    "no_branding_desc"          => "Removes SupportPal branding from the client-facing end of the help desk.",
    "multi_ip"                  => "Multi-IP Support",
    "multi_ip_desc"             => "Allows locking SupportPal to more than one internal/external IP.",
    "purchase"                  => "Acheter",
    "ticket_number_missing"     => "For ticket related emails, the {{ ticket.number }} merge field should be present in the email subject and must be wrapped in either <em>[#{{ ticket.number }}]</em> or <em>(#{{ ticket.number }})</em> in order to route replies to the correct ticket. If you would like to remove the ticket number, please consider enabling <a href='https://docs.supportpal.com/current/Email+Channel#SubAddressConfiguration' target='_blank'>email sub-addressing</a>.",

    /*
     * 2.5.0
     */
    "debug_mode_desc"           => "Enable debug mode to display errors, only use for debugging or if instructed by support. Errors and other useful logging messages are otherwise stored in the application logs, which can be downloaded by going to Utilities -> Logs -> Log File Manager.",
    "record_trash_relations"    => "The records will be moved to the trash and then permanently deleted after :number days along with the following related data: :relations. This will impact reports.",
    "uninstall_plugable_warning" => "Uninstalling the :plugable will delete all associated files and data. We recommend to deactivate the :plugable instead.",
    "web_settings_desc"         => "The web channel settings apply to the frontend. By default tickets can be accessed by anyone who knows a unique ticket URL. You may wish to disable this and require users to login before they can access ticket information.",

    /*
     * 2.6.0
     */
    "containing_text_desc"      => "Veuillez entrer une chaîne de caractère (Mot à bannir, ou adresse courriel).",
    "spam_is_regex_desc"        => "Rules can take advantage of regular expressions; if you intend to do so please enable this setting. You do not need to include delimiters.",

    /*
     * 3.0.0
     */
    "upload_unknown_error"      => "Les fichiers n'ont pas pu être importés à cause d'une erreur serveur.",
    "insert_image"              => "Insérer une image",
    "quote"                     => "Citation",
    "code"                      => "Code",
    "format"                    => "Format",
    "paragraph"                 => "Paragraphe",
    "heading1"                  => "Heading 1",
    "heading2"                  => "Heading 2",
    "heading3"                  => "Heading 3",
    "heading4"                  => "Heading 4",
    "heading5"                  => "Heading 5",
    "heading6"                  => "Heading 6",
    "upload"                    => "Importer",
    "more_formatting"           => "Plus de formattage",
    "clearformat"               => "Formattage clair",
    "bold"                      => "Gras",
    "underline"                 => "Sous-ligner",
    "italic"                    => "Italique",
    "strikethrough"             => "Barré",
    "font_color"                => "Font Colour",
    "insert_link"               => "Insérer un lien",
    "edit_link"                 => "Editer un lien",
    "unlink"                    => "Délier",
    "orderedlist"               => "Liste triée",
    "unorderedlist"             => "Liste non-triée",
    "outdent"                   => "Outdent",
    "indent"                    => "Indent",
    "lists"                     => "Listes",
    "edit_html"                 => "Editer l'HTML",
    "sEmptyTable"               => "Aucune donnée disponible dans cette table.",
    "sInfo"                     => "Affichage de _START_ à _END_ sur _TOTAL_ enregistrements",
    "sInfoEmpty"                => "Affichage de 0 à 0 sur 0 enregistrements",
    "sInfoFiltered"             => "(filtrés sur _MAX_ enregistrements totaux)",
    "sInfoPostFix"              => "",
    "sInfoThousands"            => ",",
    "sLengthMenu"               => "Affichage de _MENU_ enregistrements",
    "sLoadingRecords"           => "Chargement...",
    "sProcessing"               => "Recherche en cours...",
    "sSearchPlaceholder"        => "Recherche...",
    "sZeroRecords"              => "Aucun enregistrement correspondant trouvé.",
    "sSortAscending"            => ": activer pour classer les colonnes dans l'ordre croissant",
    "sSortDescending"           => ": activer pour classer les colonnes dans l'ordre décroissant",
    "incoming_auto_reply"       => "Incoming (Auto-Reply)",
    "logo_dark_mode"            => "Logo pour thème sombre",
    "logo_dark_mode_desc"       => "Si votre logo est fait pour être visible dans un thème clair uniquement, veuillez en ajouter un autre pour le thème sombre.",
    "template_mode"             => "Template Mode",
    "template_mode_desc"        => "Configure un thème clair ou sombre par défaut pour l'interface. Les utilisateurs pourront eux aussi choisir depuis leur profil.",
    "light_mode"                => "Mode clair",
    "dark_mode"                 => "Mode sombre",
    "logo"                      => "Logo",
    "logo_desc"                 => "Change de logo par défaut de cette marque. Le champ peut soit contenir un champ lié au dossier de base (Nous recommendons de stocker votre logo dans le dossier /resources/assets/) ou une URL amenant à l'image directement.",
    "website_url"               => "Website URL",
    "website_url_desc"          => "Ajouter un lien amenant sur votre site web principal dans l'en-tête du portail support.",
    "back_to_website"           => "Retour au site web",
    "template"                  => "Template",
    "how_can_we_help"           => "Comment pouvons-nous vous aider aujourd'hui ?",
    "ticket_desc2"              => "La grille de billets peut être ajustée et filtrée selon vos besoins.",
    "zip_extension_required"    => "L'extension Zip PHP extension n'est pas installée. Veuillez l'installer et essayez à nouveau.",
    "zip_file_not_downloaded"   => "Le fichier zip n'a pas été téléchargé. Veuillez vérifier que vous pouvez accéder à :url",

    /*
     * 3.3.0
     */
    "third_party_integrations"  => "Third-Party Integration|Third-Party Integrations",
    "oauth"                     => "OAuth",
    "oauth_data"                => "OAuth Data",
    "client_id"                 => "Identifiant client",
    "client_secret"             => "Mot de passe identifiant",
    "create_credentials"        => "Veuillez créer les identifiants au travers de cette page <a href=\":route\">Third-Party Integration</a>.",
    "oauth_data_missing"        => "L'identifiant ou le mot de passe du client n'ont pas été saisis et sont requis. Une fois paramétrés, fermez la pop-up et validez à nouveau.",
    "configure_after_brand_created" => "Ceci peut-être configuré après que la marque soit créée.",
    "get_access_token"          => "Obtenir le token d'accès",
    "reset_access_token"        => "Réinitialiser le token d'accès",

    /*
     * 3.4.0
     */
    "brand_name"                => "Nom de la marque",
    "brand_name_desc"           => "Le nom de votre marque est utilisée pour toutes les correspondances avec les utilisateurs.",
    "supportpal_announcements"  => "Annonces SupportPal",
    "add_selectize"             => "Ajouter <strong>:item</strong>...",
    "general_settings"          => "Configurer les paramètres généraux",
    "configure_brand"           => "Configurer les marques",
    "configure_department"      => "Configurer les départements",
    "setup_cron"                => "Configurer les cron job",
    "channel_settings"          => "Mettre à jour les paramètres du canal du billet",
    "add_user"                  => "Ajouter un nouvel utilisateur",
    "open_ticket"               => "Ouvrir un nouveau billet",
    "reply_ticket"              => "Répondre au billet",
    "new_version_available"     => "Nouvelle version disponible.",
    "new_version_desc"          => "Une nouvelle version de SupportPal est disponible. Nous vous recommendons de toujours télécharger la dernière version.<div class='description'>Accepter cette information la cachera jusqu'à la sortie d'une prochaine mise à jour.</div>",
    "acknowledge"               => "Je comprends",
    "running_latest_version"    => "Vous possédez la dernière version.",
    "running_prerelease"        => "Vous utilisez une version en pré-release.",

    /*
     * 3.6.0
     */
    "results_per_page"          => "Results Per Page",
    "class_name"                => "Class Name",
    "possible_permission_issue" => "You are running the command as \":cli_user\", while \":path\" is owned by \":path_user\", this can lead to file permission issues.",
    "system_update"             => "System Update",
    "system_update_desc"        => "Update SupportPal to the latest version available.",
    "update_available"          => "Update Available",
    "up_to_date"                => "Up to Date",
    "release_notes"             => "Release Notes",
    "about_to_update_to"        => "You are about to update to version <strong>:version</strong>. A full system backup will be taken automatically prior to the update.",
    "waiting_for_update_start"  => "Waiting for the update to start... This may take a few minutes.",
    "binary_paths"              => "Binary Paths",
    "binary_paths_desc"         => "The PATH environment variable is used to find required binaries. If one or more binary cannot be found, you can specify the full path for each binary file.",
    "cron_makesure"             => "Pour l'aide en enregistrement de cron job voir <a target='_blank' href='https://docs.supportpal.com/current/Configuring+the+Cron'>Cron Job Help</a>.",
    "cron_must_run_for_update"  => "The cron job must be running to use this function.",
    "support_expired"           => "The support and updates on your license have expired.",
    "update_permitted_version"  => "The license only permits updating to :version.",
    "update_renew_support"      => "To update to the latest version of SupportPal, please renew your support and updates.",
    "renew"                     => "Renew",

    /*
     * 3.7.0
     */
    "background_jobs"           => "Background Jobs",
    "background_jobs_not_processing" => "Background jobs are not currently being processed, view <a target='_blank' href='https://docs.supportpal.com/current/Background+Jobs#Troubleshooting'>troubleshooting steps</a>.",

    /*
     * 4.0.0
     */
    "addon"                     => "Extension|Extensions",
    "addon_already_exists"      => "An add-on already exists at this path: :path",
    "addons_marketplace"        => "Marketplace",
    "addons_missing_valid_artifact" => "Add-on does not have a valid archive.",
    "checksum_not_matched"      => "The downloaded file failed checksum verification.",
    "invalid_archive_format"    => "Artifact should not include other directories other than the add-on.",
    "downloading_version"       => "Downloading add-on version :version to :path...",
    "extracting_addon"          => "Extracting add-on files...",
    "activating_addon"          => "Activating add-on...",
    "addon_install_success"     => "Add-on installed successfully.",
    "addon_install_error"       => "Add-on failed to install, please check the application logs for more details.",
    "addon_latest_version"      => "Add-on is already running the latest version.",
    "addon_update_success"      => "Add-on updated successfully.",
    "addon_update_error"        => "Add-on failed to update and has been reverted, please check the application logs for more details.",
    "addon_basic_info"          => "Please provide some basic information about the add-on.",
    "addon_author_name"         => "Author name",
    "addon_author_uri"          => "Author URI (link to your website)",
    "addon_author_uri_short"    => "Author URI",
    "addon_vendor_name"         => "Vendor name (name of your company, can be same as author name)",
    "addon_vendor_name_short"   => "Vendor Name",
    "addon_name"                => "Add-on name",
    "addon_description"         => "Add-on description",
    "addon_creating"            => "Creating add-on...",
    "addon_ready"               => "Add-on ready in :directory! Build something amazing.",
    "addon_version_not_supported" => "The available version of the add-on does not support the installed SupportPal version.",
    "no_addons_found"           => "No add-ons found.",
    "price"                     => "Price",
    "one_time"                  => "One Time",
    "monthly"                   => "Monthly",
    "quarterly"                 => "Quarterly",
    "semiannually"              => "Semi-Annually",
    "annually"                  => "Annually",
    "biennially"                => "Biennially",
    "triennially"               => "Triennially",
    "tag"                       => "Tag|Tags",
    "login_to_install"          => "<a href=':link'>Login</a> to Install",
    "marketplace_login_error"   => "Login failed. Please <a target='_blank' href='https://www.supportpal.com/manage/logout.php'>logout</a> and then ensure to log in to the account that has your SupportPal license.",
    "payment_required"          => "Payment Required",
    "addon_purchase_info"       => "By clicking the above button, your account will be charged the price shown at the selected billing cycle, and you agree to our <a href=':link' target='_blank'>terms of service</a>.",
    "addon_cancel_info"         => "Cancelling will immediately deactivate the add-on and stop any further payments being taken.",
    "system_health"             => "System Health",
    "system_health_desc"        => "Health checks monitor that the system is performing correctly and notify you when issues arise.",
    "system_health_errors"      => "One or more <a href=':link'>system health</a> checks are failing.",
    "app_log_check"             => "Application Log Error Count",
    "app_log_errors_exist"      => "Application log file for today contains errors, please check the logs by navigating to Utilities -> Logs -> Log File Manager -> :filename",
    "redis_check"               => "Redis Connection",
    "web_server_check"          => "Web Server",
    "web_server_error"          => "Unable to connect to :url",
    "redirection_rules_check"   => "Redirection Rules",
    "redirection_rule_error"    => "Server redirection rules must remove /index.php from path. Otherwise attackers can potentially access your files.",
    "cron_check"                => "Cron",
    "cron_check_error"          => "The cron is not running.",
    "cron_check_warning"        => "The following tasks: (:tasks) has not been ran within their expected interval.",
    "database_check"            => "Database Connection",
    "disk_usage_check"          => "Free Disk Space",
    "email_queue_check"         => "Outbound Email Queue",
    "email_queue_warning"       => "Email queue contains :number emails that require manual attention.",
    "pipe_check"                => "Email Piping",
    "file_not_found"            => "File ':path' not found.",
    "file_not_executable"       => "File ':path' is not executable.",
    "dependency_resolution"     => "Unable to run health check.",
    "debug_mode_warning"        => "Debug mode should only be used temporarily.",
    "custom_colour"             => "Custom Colour",
    "remove_colour"             => "Remove Colour",
    "background_colour"         => "Background Colour",
    "open_link"                 => "Open link",
    "open_link_in"              => "Open link in...",
    "new_window"                => "New window",
    "current_window"            => "Current window",
    "edit_image"                => "Edit image...",
    "alternative_description"   => "Alternative description",
    "browse_image"              => "Browse for an image",
    "drop_image"                => "Drop an image here",

    /*
     * 4.2.0
     */
    "keyboard_shortcuts"        => "Raccourcis clavier",
    "enable_keyboard_shortcuts" => "Activer les raccourcis clavier",
    "shortcut_global"           => "Raccourcis utilisables partout",
    "shortcut_toggle"           => "Afficher la liste des raccourcis (ce message)",
    "shortcut_start_search"     => "Effectuer une recherche",
    "shortcut_goto_new_ticket"  => "Ouvrir un nouveau billet",
    "shortcut_ticket_view"      => "Raccourcis utilisables lors de la visualisation d'un billet",
    "shortcut_focus_reply"      => "Mets le focus sur le formulaire de réponses",
    "shortcut_focus_notes"      => "Mets le focus sur le formulaire de notes",
    "shortcut_focus_forward"    => "Mets le focus sur le formulaire de transfert",
    "shortcut_toggle_user_tab"  => "Basculer le détail de l'usager dans la barre latérale",
    "shortcut_take_ticket"      => "Prendre le billet",
    "shortcut_close_ticket"     => "Fermer le billet",
    "shortcut_lock_ticket"      => "Fermer et verrouiller le billet",
    "shortcut_unlock_ticket"    => "Deverrouiller le billet",
    "shortcut_trash_ticket"     => "Déplacer le billet à la corbeille",
    "shortcut_block_user"       => "Bloquer l'usager et déplacer le billet à la corbeille",
    "shortcut_watch_ticket"     => "S'abonner au billet",
    "shortcut_unwatch_ticket"   => "Se désabonner du billet",
    "shortcut_merge_ticket"     => "Fusionner le billet",
    "shortcut_unmerge_ticket"   => "Défusionner le billet",
    "shortcut_expand_all"       => "Étendre tous les messages",
    "shortcut_collapse_all"     => "Replier tous les messages",
    "shortcut_print_ticket"     => "Imprimer le détail du billet et des messages",

    /*
     * 4.3.0
     */
    "db_connection_error"       => "Database connection error, please check :path",

    /*
     * 5.0.0
     */
    "favicon_dark_mode"         => "Dark Mode Favicon",
    "favicon_dark_mode_desc"    => "If your favicon was designed to only work on a light background, set a different favicon for dark mode. This will only be used if your browser and/or operating system is running in dark mode.",
    "template_mode_system_desc" => "Choosing system will synchronise the template mode to light or dark mode depending on your operating system theme settings.",

    /*
     * 5.0.1
     */
    "starttls_or_none"          => "STARTTLS / None",

    /*
     * 5.1.0
     */
    "email_attempt_at_desc"     => "The email failed to send. Retrying again :time.", // :time example, "in 5 mins"
    "websockets_connection"     => "Web Sockets Connection",
    "websockets_not_running"    => "Unable to connect to web socket server.",
    "search_driver_check"       => "Search Driver",
    "search_driver_not_working" => "The configured search driver is not working correctly.",

    /*
     * 5.2.0
     */
    "temporary_path"            => "Temporary Path",
    "temporary_path_desc"       => "The temporary path is used to store files during the update. The system temporary path is used by default. The path must have at least 3GB of free space.",
    "background_jobs_desc"      => "Below are a list of background jobs that have failed recently.",
    "failed_jobs"               => "Failed Jobs",
    "horizon_dashboard"         => "Horizon Dashboard",
    "job"                       => "Job|Jobs",
    "job_payload"               => "Job Payload",
    "job_exception"             => "Job Exception",
    "failed_at"                 => "Failed At",
    "queue"                     => "Queue",
    "exception"                 => "Exception",
    "data"                      => "Data",
    "failed_background_jobs"    => "One or more <a target='_blank' href=':link'>background jobs</a> have failed and require manual attention.",

    /*
     * 5.3.0
     */
    "ticket_channel_2"          => "Nous fournissons un certain nombre de canaux par défaut. Vous pouvez activer et configurer les canaux Facebook et Twitter pour recueillir des billets générés via les réseaux sociaux.",
    "incoming_duplicate"        => "Incoming (Duplicate)",

    /*
     * 5.4.0
     */
    "email_method_overridden"   => "The email method has been overridden in the <a href=':link' target='_blank'>default brand settings</a>.",
    "addon_not_found"           => "Add-on not found.",
    "deactivating_addon"        => "Deactivating add-on...",
    "addon_already_activated"   => "Add-on already activated.",
    "addon_already_deactivated" => "Add-on already deactivated.",
    "addon_cannot_deactivate"   => "Add-on cannot be deactivated.",
    "addon_activation_failed"   => "Add-on activation failed, check the application log for more information.",
    "addon_deactivation_failed" => "Add-on deactivation failed, check the application log for more information.",
    "site_key"                  => "Site Key",
    "secret_key"                => "Secret Key",
    "turnstile_desc"            => "Please register a new Turnstile widget at <a target='_blank' href=\"https://developers.cloudflare.com/turnstile/get-started/\">Cloudflare</a>. Copy the site and secret key above.",
    "hcaptcha_desc"             => "Please register at <a target='_blank' href=\"https://hcaptcha.com/\">hCaptcha</a>. Copy the site and secret key above.",
    "captcha_type_desc"         => "Permet de choisir le type de captcha qui sera utilisé dans le système. Nous recommendons d'utiliser les google reCAPTCHA, qui nécessitent une configuration additionnelle.",

);
