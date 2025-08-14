<?php

return array(

    "feedback_question"         => "Billet à afficher à l'utilisateur.",
    "open_new"                  => "Ouvrir un billet",
    "select_department"         => "Choisir un département",
    "select_department_desc"    => "Veuillez choisir le département en lien avec votre billet.",
    "no_departments"            => "Aucun département trouvé.",
    "department_user_details"   => "Détails du département et de l'utilisateur",
    "enter_your_details"        => "Entrez vos informations",
    "enter_ticket_details"      => "Entrez informations",
    "enter_subject_message"     => "Entrez sujet et message",
    "invalid_user"              => "Assurez-vous d'entrer des données valides avant de poursuivre.",

    "registered_users"          => "Utilisateurs enregistrés uniquement",

    "tickets"                   => "Billet(s)",
    "ticket"                    => "Billet|Billets",
    "subject"                   => "Sujet",
    "no_subject"                => "Aucun sujet",
    "last_action"               => "Dernière action",
    "due_time"                  => "Dû à",
    "created_time"              => "Ajouté à",
    "submitted"                 => "Soumis",
    "ticket_reply"              => "Réponse à un billet",
    "ticket_note"               => "Note sur un billet",
    "ticket_type"               => "Type de billet",

    "user_ticket"               => "Billet d'utilisateur",
    "user_ticket_desc"          => "Ouvrir un billet pour un nouvel utilisateur ou un utilisateur existant.",
    "existing_user"             => "Utilisateur existant",
    "new_user"                  => "Nouvel utilisateur",
    "internal"                  => "Interne",
    "internal_ticket_desc"      => "Ajouter un billet pour un usage interne seulement. Ce billet vous sera associé et non pas à un utilisateur.",
    "ticket_opened"             => "Votre billet a été ouvert.",
    "enter_user_details"        => "Veuillez entrer vos détails ci-dessous, ou vous connecter à votre compte si vous en avez un.",
    "already_have_account"      => "Vous avez déjà un compte, veuillez vous connecter et ouvrir la question. Veuillez utiliser la fonction 'Mot de passe oublié' au besoin.",

    "recent_tickets"            => "Billets récents",
    "last_message_text"         => "Dernier message",

    "settings"                  => "Paramètres du billet",

    "priority"                  => "Priorité|Priorités",

    "channel"                   => "Canal|Canaux",
    "account"                   => "Compte|Comptes",

    "assign_operator"           => "Assigner opérateur",
    "assigned_operator"         => "Opérateurs assignés",
    "assigned_to"               => "Assigné à",
    "assigned"                  => "Assigné",

    "department"                => "Département|Départements",
    "change_department_order"   => "Faites glisser les lignes pour modifier l'ordre que les Départements sont présentés aux clients lors de l'ouverture d'un nouveau ticket.",
    "department_applicable"     => "Départements applicables",
    "department_applicable_desc" => "Les départements dans lesquels la priorité sera disponible pour les clients de sélectionner. Valable uniquement pour le frontend, toutes les priorités seront disponibles aux opérateurs pour tous les ministères.",

    "send_now"                  => "Envoyer maintenant",

    "tag"                       => "Libellé|Libellés",

    "track_ticket"              => "Suivre le billet",
    "view_ticket"               => "Voir le billet",

    // Recent activity
    "recent_activity"           => "Activité récente",

    "ticket_number"             => "No du billet",
    "ticket_format"             => "Format du no du billet",

    // Departments
    "department_public_desc"    => "Si le département est visible pour les clients sur le Web Help Desk.",
    "department_parent_desc"    => "Si le département est un sous-département, s'il vous plaît sélectionner un parent. Les rayons auxiliaires sont destinés à l'escalade et la gestion interne, donc la définition de cette supprimera certaines des options ci-dessous.",
    "department_priority"       => "Priorités de Département",
    "department_priority_desc"  => "Les priorités qui seront disponibles pour les clients lors de l'ouverture d'un ticket dans ce département, au moins un doit être sélectionné. Par défaut, toutes les priorités seront disponibles dans le département.",
    "department_no_format"      => "En option, uniquement mettre pour remplacer le format de numéro de ticket par défaut, laissez en blanc autrement.",
    "department_operator"       => "Département de l'opérateur",
    "department_default_assign" => "Par défaut attribué à",
    "dept_default_assign_desc"  => "Utilisez cette option si vous souhaitez des tickets qui sont ouverts dans ce département pour être automatiquement affecté à un ou plusieurs opérateurs.",

    // Department emails
    "email_accounts_desc"       => "Utilisez cette option si vous souhaitez des tickets qui sont ouverts dans ce département pour être automatiquement affecté à un ou plusieurs opérateurs.",
    "department_port"           => "Les valeurs par défaut sont: 110 pour POP3, 995 pour POP3 sécurisé, 143 pour IMAP, et 993 pour IMAP sécurisé. Laissez vide pour utiliser la valeur par défaut.",
    "department_encryption"     => "Certains fournisseurs de messagerie exigent SSL ou TLS pour se connecter, si vous n'êtes pas sûr de laisser ce paramètre sur Aucun.",
    "department_delete_mail"    => "Si vous utilisez IMAP, vous pouvez choisir de ne pas supprimer les courriels sur le serveur après qu'ils ont été importés en tant que tickets.",
    "protocol"                  => "Protocole",
    "server"                    => "Serveur d'courriel",
    "port"                      => "Port",
    "encryption"                => "Cryptage",
    "delete_downloaded"         => "Effacer courriels téléchargés",
    "consume_all"               => "Consommer tout les courriels",
    "email_download"            => "Téléchargement du courriel",
    "email_piping"              => "Piping du courriel",
    "email_piping_desc"         => "Mettre en place un courriel expéditeur comme le suivant, le chemin exécutable PHP peut être différent sur votre serveur.",
    "remote_email_piping"       => "Piping du courriel à distance",

    // Department email options
    "email_options"             => "Options courriels",
    "email_user_on_email"       => "Envoyer un courriel aux utilisateur quand un billet est ouvert par courriel",
    "email_user_on_email_desc"  => "Sélectionnez si les utilisateurs doivent être informés par courriel lorsqu'un courriel qu'ils ont envoyé ouvre un nouveau ticket.",
    "email_operators"           => "Notifier opérateurs",
    "email_operators_desc"      => "Indiquez si vous souhaitez transmettre les réponses de l'opérateur à d'autres opérateurs. Vérifie par défaut les opérateurs de messagerie option dans le panneau de commande, et enverra automatiquement un courriel pour les réponses par courriel par les opérateurs.",
    // Department email templates
    "new_ticket_opened"         => "Nouveau billet ouvert",
    "waiting_for_response"      => "En attente d'une réponse",
    "ticket_auto_closed"        => "Billets fermés automatiquement",
    "closed_by_operator"        => "Fermé par l'opérateur",

    // Feedback
    "feedback"                  => "Retour",
    "feedback_form"             => "Formulaire de retour|Formulaires de retour",
    "feedback_form_desc"        => "Des formulaires de retour sont traités dans l'ordre où ils apparaissent. Faites glisser les lignes à réorganiser et ajuster la priorité des formulaires de retour.",
    "view_feedback"             => "Afficher retour",
    "ticket_feedback"           => "Retour sur le billet",
    "feedback_fields_error"     => "Il y avait un problème de la récupération des champs de Feedback.",
    "time_after_resolved"       => "Durée de temps après la résolution",
    "time_after_resolved_desc"  => "Le temps après lequel un billet est marqué comme résolu que le formulaire de retour est envoyé au client.",
    "expires_after"             => "Expire après",
    "expires_after_desc"        => "Le temps après lequel un formulaire de retour a expiré et auquel on ne peut plus répondre. Bien que nous recommandons la durée de 7 jours, vous pouvez entrer 0 dans tous les champs pour ne pas fixer de date d'expiration.",
    "form_conditions"           => "Conditions du formulaire",
    "form_conditions_desc"      => "Définir les conditions de billets pour lesquels des billets nouvellement résolus sont vérifiés pour voir si ils tombent sous cette forme. Si un billet résolu correspond à des formes multiples, il sera sélectionné sur la priorité de la forme, qui peut être modifié en allant à la liste des formulaires et réordonnancement.",
    "form_fields"               => "Champs du formulaire",
    "rating"                    => "Évaluation",
    "feedback_desc"             => "Merci de nous avoir contactés. Nous espérons avoir répondre à votre demande à votre entière satisfaction. Pourriez-vous évaluer votre expérience ci-dessous ?",
    "good_satisfied"            => "Bien, je suis satisfait-e",
    "bad_not_satisfied"         => "Mauvais, je ne suis pas satisfait-e",
    "feedback_not_found"        => "Votre commentaire ne pouvait être accepté, veuillez ouvrir un billet avec nous si vous souhaitez partager vos commentaires.",
    "feedback_malformed_token"  => "Votre commentaire ne pouvait être accepté en raison d'un jeton malformé. Veuillez ouvrir un billet avec nous si vous souhaitez partager vos commentaires.",
    "feedback_expired"          => "Le billet a été résolu pendant un certain temps, et il ne peut malheureusement plus être classé.",
    "feedback_questions"        => "Si vous pouviez prendre quelques instants, veuillez répondre aux questions suivantes pour nous aider à améliorer encore le soutien que nous offrons.",
    "feedback_for_ticket"       => "Retour pour le billet #:number",
    "feedback_rating_desc"      => "Le retour reçu sur ce billet a été classé comme <strong>:rating</strong> par le client.",

    // Custom fields
    "customfield"               => "Champ personnalisé du billet|Champ personnalisé du billet",
    "customfield_order"         => "Faites glisser les lignes à modifier l'ordre des champs personnalisés sont présentés aux utilisateurs lors de l'ouverture des billets via le web.",

    // Canned responses
    "cannedresponse"            => "Réponses pré-enregistrée|Réponses pré-enregistrées",

    // Filters
    "filter"                    => "Filtre|Filtres",
    "filter_condition"          => "Conditions des filtres",
    "filter_condition_desc"     => "Définir les conditions de billets pour lesquels les billets sont répertoriés sous ce filtre.",

    // Macros
    "macro"                     => "Macro|Macros",
    "macro_condition"           => "Conditions des macros",
    "macro_action"              => "Actions des macros",
    "macro_action_desc"         => "Définir des actions qui sont exécutées quand une macro est effectuée. S'il vous plaît assurer que les mesures sont valables pour le département du ticket est ou bien ils seront ignorés.",

    "from"                      => "De",
    "to"                        => "À",
    "cc"                        => "CC",

    "allowed_files"             => "Types de fichiers autorisés pour les pièces jointes",

    // Drafts
    "draft_saved"               => "Brouillon enregistré à :time",
    "save_draft"                => "Enregistrer le brouillon",
    "discard_draft"             => "Supprimer le brouillon",

    // Locked
    "error_ticket_locked"       => "Ce billet est fermé et verrouillé. Veuillez SVP ouvrir un nouveau billet si vous avez besoin d'assistance supplémentaire.",

    // Ticket Followups
    "follow_up"                 => "Suivre",
    "follow_up_status_desc"     => "Réglez le billet pour un statut différent jusqu'à la date de suivi.",
    "exact_date_time"           => "Date et temps exacte",
    "time_from_now"             => "Temps à partir de maintenant",

    // Schedule
    "schedule"                  => "Horaire|Horaires",
    "business_hour"             => "Heures de travail",
    "business_hour_desc"        => "Les heures de travail indiquent le temps auquel le personnel est disponible pour répondre aux requêtes. Les heures sont pris en considération par le calcul de temps de résolution du billet.",

    // Holidays
    "holiday"                   => "Jour férié|Jours fériés",
    "holiday_or_on_the"         => "ou bien, au ",
    "holiday_month_year_desc"   => "L'année est facultative si le jour férié est récurrent. Sélectionnez une année seulement si le jour férié se produit à cette date dans une année donnée.",

    // SLA Plans
    "sla_plan"                  => "Entente SLA|Ententes SLA",
    "specific_schedule"         => "Horaires spécifiques",
    "calendar_hours_24"         => "Heures du calendrier (24 heures)",
    "plan"                      => "Plan",
    "sla_condition"             => "Conditions de l'entente SLA",
    "sla_condition_desc"        => "Définir les conditions de billets pour lesquels de nouveaux billets sont vérifiés pour voir si elles tombent sous ce régime. Si un nouveau billet correspond à plusieurs plans SLA, il sera sélectionné sur la priorité du plan, qui peut être modifié en allant à la liste des plans et réordonnancement.",
    "escalation_rule"           => "Règles d'escalade",
    "escalation_rule_desc"      => "Définir les actions qui sont effectuées lorsqu'un billet en vertu de ce plan SLA est proche ou est devenu en retard. S'il vous plaît assurer que les règles sont valables pour le département du billet est ou bien ils seront ignorés.",
    "condition"                 => "Condition",
    "condition_group"           => "Groupe de conditions",
    "all_groups"                => "Tous les groupes doivent être vrai",
    "any_group"                 => "Tout groupe peut être vrai",
    "all_conditions"            => "TOUTES les conditions dans le groupe doivent être vrai",
    "any_condition"             => "TOUT état dans le groupe peut être vrai",
    "sla_plan_desc"             => "Les plans SLA sont traités dans leur ordre d'apparition. Faites glisser les lignes à réorganiser et ajuster la priorité des plans SLA.",

    // Reply options
    "reply_options"             => "Options de réponses",
    "send_email_to_users"       => "Envoyer courriel aux utilisateurs",
    "send_email_to_operators"   => "Envoyer courriel aux opérateurs",
    "back_to_grid"              => "Retour à la grille des billets",
    "take"                      => "Prendre",
    "take_ownership"            => "Prendre la propriété",
    "pause_duetime"             => "Pauser l'échéance",
    "add_to_canned_responses"   => "Ajouter aux réponses pré-enregistrées",
    "visible_to_all_operators"  => "Rendre visible à tous les opérateurs",
    "set_status"                => "Définir statut",
    "add_selfservice_link"      => "Ajouter lien self-service",
    "search_selfservice"        => "Recherche d'article self-service",
    "search_canned"             => "Recherche de réponse pré-enregistrée",

    "mark_resolved"             => "Marquer comme résolu",

    "ticket_signature"          => "Signature de billet",

    "default_open_status"       => "Statut d'ouverture par défaut",

    "default_resolve_status"    => "Statut non résolu par défaut",
    "default_resolve_status_desc" => "Sélectionnez l'état par défaut qui est utilisé pour les billets qui ont été résolus.",

    "waiting_response_time"      => "En attente de réponse courriel",
    "waiting_response_time_desc" => "Le temps après lequel les clients reçoivent un courriel sur les billets inactifs, en demandant si ils considèrent le ticket comme résolu. Mettre à 0 pour désactiver cet courriel. ",

    "close_inactive_tickets"    => "Fermer les billets inactifs",
    "close_inactive_tickets_desc" => "Le temps au bout duquel les billets inactifs sont automatiquement fermés, mis à 0 pour ne jamais fermer automatiquement des billets.",

    "ticket_reply_order"        => "Ordre de réponse des billet",
    "ticket_reply_order_desc"   => "Sélectionnez l'ordre dans lequel les messages de billet sont présentés, par ordre croissant, où le dernier message est le dernier ou descendant où le dernier message est le premier.",

    "ticket_notes_position"     => "Ticket Position des Remarques",
    "ticket_notes_position_desc" => "Sélectionnez où dans le billet ces notes sont affichées.",
    "ticket_notes_top_messages" => "En haut et dans les messages",
    "ticket_notes_top"          => "En haut seulement",
    "ticket_notes_messages"     => "Dans les messages seulement",

    "unregistered_only"         => "Utilisateurs non enregistrés seulement",

    "allow_unauth_users"        => "Autoriser utilisateurs non identifiés",
    "allow_unauth_users_desc"   => "Autoriser les utilisateurs qui ne sont pas connectés à afficher et répondre aux billets. La désactivation de cette option supprimera également la fonction de ticketterie de la piste et les utilisateurs devront être enregistrés et vous connecter avant de pouvoir accéder à des tickets.",

    "default_department"        => "Département par défaut",
    "default_department_desc"   => "Le service par défaut défini sur tous les billets entrants via ce canal.",

    "show_related_articles"     => "Afficher articles reliés",
    "show_related_articles_desc" => "Lorsque l'utilisateur tape le sujet, ils peuvent figurer des articles connexes sur la base de ce qu'ils sont entrés. Nécessite le module self-service doit être activé et MySQL 5.6+.",

    // Email Channel Settings
    "default_priority"          => "Priorité par défaut",
    "default_priority_desc"     => "La priorité par défaut définie pour tous les billets entrants via ce canal.",

    "last_reply"                => "Dernière réponse",
    "opened_at"                 => "Ouvert à",

    "change_department"         => "Modifier département",
    "change_status"             => "Modifier statut",
    "no_statuses"               => "Aucun statut trouvé. Cliquez <a href=':route'>ici</a> pour en créer un.",
    "no_priorities"             => "Aucune priorité trouvée. Cliquez <a href=':route'>ici</a> pour en créer un.",
    "no_templates"              => "Aucun modèle personnalisé de courriel trouvé. Cliquez <a href=':route'>ici</a> pour en créer un.",
    "no_tags"                   => "Pas de libellé de billet trouvé. Cliquez <a href=':route'>ici</a> pour en créer un.",
    "no_departments_found"      => "Aucun département trouvé. Cliquez <a href=':route'>ici</a> pour en créer un.",
    "no_operators_found"        => "Aucun collaborateur trouvé. Cliquez <a href=':route'>ici</a> pour en créer un.",
    "change_priority"           => "Changer priorité",
    "add_tag"                   => "Ajouter libellé",

    "unlock"                    => "Débloquer",
    "merged"                    => "Fusionné",
    "unmerge"                   => "Défusionner",
    "close_and_lock"            => "Fermer et verrouiller",

    "mass_reply"                => "Réponse de groupe",

    "due_today"                 => "Dû aujourd'hui",
    "overdue"                   => "En retard",
    "unassigned"                => "Non assigné",

    "pause_duetime_desc"        => "S'il y a un plan SLA actif sur ce billet, mettre en pause le temps restant dû qu'après la date de suivi. Le temps voulu ne commencera à nouveau une fois une réponse ou une note a été ajoutée au ticket (y compris du suivi).",

    "add_cc"                    => "Ajouter CC",
    "reply_above_line"          => "Veuillez répondre au-dessus de cette ligne",

    "email_settings"            => "Paramètres courriel",
    "web_settings"              => "Paramètres web",
    "split_selected_replies"    => "Séparer les réponses sélectionnées",

    "track_ticket_not_found"    => "Impossible de trouver le billet avec le numéro et adresse courriel indiquée.",

    "type_in_tags"              => "Entrer libellés",

    /*
     * 2.0.2
     */
    "no_operator_groups"        => "Aucun groupe d'opérateurs trouvé. Cliquez <a href=':route'>ici</a> pour en créer un.",
    "no_user_groups"            => "Aucun groupe d'utilisateurs trouvé. Cliquez <a href=':route'>ici</a> pour en créer un.",
    "remote_email_piping_desc"  => "Téléchargez le <a href='http://www.supportpal.com/manage/dl.php?type=d&id=8' target='_blank'>Remote email piping script</a> et suivez la <a href = 'http://docs.supportpal.com/display/DOCS/Remote+Email+Piping' target ='_blank'>documentation</a> sur la configuration sur votre serveur de messagerie.",

    /*
     * 2.0.3
     */
    "department_consume_all"    => "Par défaut, SupportPal a un support email alias et vérifie l'adresse de destination sur l'courriel entrant pour voir dans quel département le ticket doit être ouvert, un ticket n'est pas ouvert si une adresse courriel du service correspondant ne peut être trouvé. L'activation de ce paramètre signifie tous les courriels sans adresse email département correspondant sont importés comme des tickets dans ce département.",
    "default_reply_options"     => "Options de réponses par défaut",
    "default_reply_options_desc" => "Sélectionnez les options de réponse par défaut lors de l'ouverture ou réponse à un ticket. Le ':reply_option' option sera cochée sur la base du ':department_option'. paramètre département",
    "associate_response_tag"    => "Réponse pré-enregistrée associée à un tag ...",
    "canned_response_tags_desc" => "Ajouter des tags qui peuvent aider à trouver une réponse pré-enregistrée lors de la réponse à un ticket.",
    "append_ip_address"         => "Ajouter adresse IP",
    "append_ip_address_desc"    => "Ajoutez l'adresse IP des utilisateurs à leurs messages quand ils ouvrent et répondent aux tickets à partir du frontend.",
    "unassign_operator"         => "Détacher opérateur",
    "remove_tag"                => "Enlever le tag",
    "message_clipped"           => "[Message attaché]",
    "view_entire_message"       => "Voir message entier",
    "no_custom_fields"          => "Aucun champs personnalisés trouvés. Cliquez <a href=':route'>ici</a> pour en créer un.",
    "follow_up_active"          => "Un <a class='view-followup' style='text-decoration :underline;'>suivi</a> est actuellement actif sur ce ticket et se déroulera peu après <strong>:time </strong>",
    "disable_user_email_replies" => "Désactiver les réponses de l'utilisateur",

    /*
     * 2.1.0
     */
    "default_ticket_filter"     => "Filtre des billets par défaut",
    "default_ticket_filter_desc" => "Le filtre de billets qui est utilisé par défaut lorsque vous cliquez sur le lien 'Gérer les billets'. Il peut être défini sur 'Aucun', l'option par défaut, qui affichera tous les billets non résolus.",
    "recent_filters"            => "Filtres récents",
    "inactive_tickets"          => "Billets inactifs",
    "default_open_status_desc"  => "Sélectionnez le statut par défaut qui doit être automatiquement défini lorsqu'un utilisateur ouvre un nouveau billet ou répond à un billet sans qu'un opérateur ait encore répondu.",
    "default_reply_status"      => "Statut par défaut des réponses",
    "default_reply_status_desc" => "Sélectionnez le statut par défaut qui doit être automatiquement défini lorsqu'un utilisateur répond à un billet. Ce statut ne s'applique qu'après qu'un opérateur ait répondu au billet.",
    "ticket_reply_order_default" => "La valeur par défaut du système sera celle qui est actuellement sélectionnée dans les paramètres généraux du billet.",
    "select_a_parent"           => "Selectionnez un département parent...",
    "select_a_department"       => "Choisir un département...",
    "department_operator_desc"  => "Vous pouvez également affecter des opérateurs individuels au service. Ces opérateurs s'ajouteront à tous les groupes assignés ci-dessus.",
    "department_group"          => "Groupes de départements",
    "department_group_desc"     => "Vous pouvez attribuer des groupes entiers d'opérateurs au département, ce qui est recommandé si votre liste d'opérateurs est importante et/ou change fréquemment.",
    "ticket_other_brands"       => "Tickets dans les autres marques",
    "add_for_department"        => "Ajouter pour le département...",
    "record_order"              => "Faites glisser les enregistrements pour modifier l'ordre.",
    "reply_all"                 => "Répondre à tous",
    "reply_without_cc"          => "Répondre (sans CC)",
    "email_accounts"            => "Comptes courriel",
    "add_another_email"         => "Ajouter une autre adresse courriel",
    "follow_up_date"            => "Date de suivi",
    "post_reply"                => "Répondre",
    "post_note"                 => "Ajouter une note",
    "ticket_details"            => "Détails du billet",
    "organisation_tickets"      => "Billets de l'organisation",
    "manage_tickets"            => "Gérer les billets",
    "via_channel"               => "via :channel",
    "department_parent"         => "Département parent",
    "department_brands"         => "Marques du département",
    "email_item"                => "courriel :item",
    "from_name"                 => "De (nom)",
    "from_address"              => "De (adresse)",

    /*
     * 2.1.1
     */
    "edited_message"            => ":user le :date",
    "prioritise_reply-to"       => "Prioriser répondre à",
    "prioritise_reply-to_desc"  => "Basculez pour donner la priorité à l'en-tête 'Répondre à' sur l'en-tête 'De'. Si cette option est activée, les tickets ouverts par courriel seront ouverts au nom du nom et de l'adresse du destinataire de la réponse.",
    "note_options"              => "Options des notes",
    "escalation_rules_desc"     => "Les règles d'escalade du plan SLA ci-dessous sont programmées pour être exécutées après les heures indiquées. Ces heures peuvent changer ou les règles peuvent être supprimées si un opérateur répond à ce ticket.",

    /*
     * 2.1.2
     */
    "not_registered_user"       => "Pas un utilisateur enregistré. Les paramètres du canal de messagerie sont configurés pour importer uniquement les courriels des utilisateurs enregistrés.",
    "display_name"              => "Nom d'affichage de l'courriel",
    "display_name_desc"         => "Optionnel, à définir uniquement pour remplacer le nom d'affichage utilisé dans les courriels sortants de ce département, sinon laissez vide.",
    "display_name_options"      => "Les variables Twig suivantes peuvent être utilisées :<br >{{ brand.name }} - Nom de la marque<br />{{ department.name }} - Nom du département<br />{{ department.frontend_name }} - Montre le nom du parent du département, si le ticket appartient à un sous-département.<br />{{ operator.formatted_name }} - Nom de l'opérateur<br /><em>Le nom de l'opérateur ne sera pas toujours disponible, il faut donc l'inclure dans une condition 'not empty', exemple : {% if operator is not empty %}{{ operator.formatted_name }}{% endif %}</em>",
    "attachment_rejected"       => "Pièce jointe rejetée",
    "enable_subaddresses"       => "Activer les sous-adresses",
    "enable_subaddresses_desc"  => "TActivez l'utilisation de la sous-adresse électronique pour tous les services. Cela créera une sous-adresse unique pour chaque ticket, qui sera définie comme l'adresse de réponse de tous les courriels sortants. Votre serveur de messagerie doit être capable de gérer le sous-adressage, des étapes supplémentaires peuvent être nécessaires si vous utilisez le piping d'courriels pour vous assurer que les courriels à ces adresses soient transférés correctement. L'activation de cette option vous permettra de supprimer le numéro de ticket de l'objet des modèles d'courriel.",
    "email_replies_disabled"    => "Réponses courriel désactivées",
    "disable_user_email_replies_desc" => "Cette option permet de bloquer les réponses aux courriels des utilisateurs et de supprimer la ligne d'écrêtage de réponse des courriels de tickets sortants. Par défaut, l'courriel est ignoré, mais vous pouvez envoyer un courriel à l'utilisateur en modifiant le modèle d'courriel sélectionné pour l'option 'Réponses aux courriels désactivées' ci-dessous..",
    "bcc"                       => "BCC",
    "assigned_to_ticket"        => "Assigné au billet",
    "user_ticket_reply"         => "Réponse utilisateur au billet",
    "new_internal_ticket"       => "Nouveau billet interne",
    "department_changed"        => "Département changé",
    "operator_ticket_reply"     => "Réponse d'un opérateur au billet",
    "new_ticket_note"           => "Nouvelle note sur le billet",
    "email_template_desc"       => "Vous pouvez sélectionner un modèle de courriel autre que celui par défaut à envoyer à l'utilisateur ou aux opérateurs pour l'une des actions ci-dessous. Ce modèle deviendra le modèle par défaut pour ce département uniquement..",
    "create_new_user"           => "Créer un nouvel utilisateur",
    "user_reply_internal_ticket" => "Vous n'êtes pas un opérateur. Seuls les opérateurs peuvent répondre aux billets internes",
    "enter_email_address"       => "Entrer l'adresse courriel...",
    "email_user_frontend"       => "Envoyer un courriel aux utilisateurs sur les billets ouverts dans le Frontend",
    "email_user_frontend_desc"  => "Choisissez si les utilisateurs doivent être notifiés par courriel lorsqu'ils ouvrent eux-mêmes un billet sur le frontend.",
    "department_template_disabled" => "Le modèle d'courriel du département concerné est désactivé, cet courriel ne peut donc pas être envoyé..",

    /*
     * 2.2.0
     */
    "user_ticket_existing_desc" => "Ouvrir un nouveau billet au nom d'un utilisateur existant.",
    "canned_response_tag"       => "Libellé de la réponse pré-enregistrée|Libellés de la réponse pré-enregistrée",
    "response"                  => "Réponse|Réponses",
    "response_desc"             => "La réponse pré-enregistrée peut être rédigée en plusieurs langues. La réponse appropriée sera utilisée automatiquement en fonction de la langue préférée de l'utilisateur.",
    "no_slaplans"               => "Pas de plans SLA trouvés. Cliquez <a href=':route'>ici</a> pour en créer un.",
    "filter_performance"        => "Considérations sur les performances et recommandations",
    "filter_performance_desc"   => "<li>Les filtres qui correspondent à un plus grand nombre de billets seront plus lents, dans la plupart des cas, essayez d'exclure les billets résolus.</li><li>Les filtres utilisant des conditions 'is not' seront généralement plus lents que ceux utilisant des conditions 'is'.</li><li>Les filtres vérifiant les valeurs NULL (par exemple, le tag Billet est None) seront plus lents. </li><li>Évitez les conditions multiples qui impliquent la vérification de chaînes de caractères/mots, car elles introduisent plus de complexité.</li><li>Les filtres utilisant des conditions 'begins with' ou 'contains' seront généralement plus lents que ceux utilisant des conditions 'equals' ou 'ends with'.</li><li>Les tickets résolus sont exclus des décomptes affichés dans la barre latérale.</li>",
    "run_macro"                 => "Exécuter la macro",
    "run_macro_desc"            => "<strong>:macro</strong><br /><em>:description</em>",

    /*
     * 2.3.0
     */
    "registered_users_desc"     => "Activez pour n'afficher le département qu'aux utilisateurs connectés et n'accepter que les courriels des utilisateurs activement enregistrés dans le service d'assistance. Si cette option est activée, un courriel de retour sera envoyé aux utilisateurs non enregistrés qui envoient un courriel à ce service. Pour modifier ou désactiver cet courriel, veuillez consulter l'option de modèle 'Utilisateurs enregistrés uniquement' ci-dessous.",
    "form_fields_desc"          => "Si vous souhaitez recueillir des informations supplémentaires lorsque l'utilisateur donne son avis, vous pouvez définir ici des champs personnalisés à afficher sur le formulaire. Le type de champ sera verrouillé une fois que le formulaire aura été rempli par un utilisateur.",
    "email_and_other_accounts"  => "Comptes de messagerie et autres canaux",
    "delete_message"            => "Supprimer le messages",
    "linked_tickets"            => "Billets liés",
    "add_linked_ticket"         => "Ajoute des billets liés",
    "create_linked_ticket"      => "Créer un billet lié",
    "copy_link"                 => "Copier le lien",
    "forward_message"           => "Transférer ce message",
    "forward_from_here"         => "Transférer ce billet depuis ici",
    "forward"                   => "Transférer",
    "forward_options"           => "Options de transfert",
    "forwarded_to"              => "Transféré à",
    "new_operator_reply"        => "Nouvelle réponse opérateur",
    "new_user_reply"            => "Nouvelle réponse utilisateur",
    "add_bcc"                   => "Ajouter BCC",
    "at_least_one_recipient"    => "Veuillez spécifier au moins un receveur.",
    "forwarded_message"         => "---------- Message transféré ----------",

    /*
     * 2.3.1
     */
    "inactive_ticket_note"      => "Note: Affecte uniquement les billets possédant le statut 'Fermer le billet inactif' activé.",
    "close_inactive_status_desc" => "Activez pour activer/désactiver la fermeture automatique des billets inactifs et les rappels d'inactivité par courriel (modèles 'Waiting For Response' et 'Ticket Auto Closed'). Si cette option est activée, le délai avant l'envoi des rappels peut être configuré via les paramètres généraux du ticket..",
    "from_header_missing"       => "From : en-tête manquant dans l'courriel.",
    "move_ticket"               => "Déplacer le billet",
    "move_ticket_step1"         => "Etape 1: Choisir une nouvelle marque où déplacer le billet",
    "move_ticket_step2"         => "Etape 2: Choisir un département dans cette nouvelle marque",
    "current_record"            => "Actuel :record",
    "new_record"                => "Nouveau :record",
    "department_email"          => "Courriel du département",
    "select_a_department_email" => "Choisir un courriel de département...",
    "record_public_desc"        => "Activez pour que le :record soit accessible pour d'autres opérateurs.",
    "record_group_desc"         => "Si vous souhaitez que :record ne soit visible que pour certains groupes d'opérateurs. Laissez le champ vide pour que tous les opérateurs puissent le voir.",

    /*
     * 2.4.0
     */
    "macro_enabled_desc"        => "Activer pour désactiver la macro et empêcher son exécution automatique ou son affichage dans l'interface du billet..",
    "macro_order_drag"          => "Faites glisser les enregistrements pour changer l'ordre des macros.",
    "macro_order_processed"     => ":type macros sont lancées dans l'ordre dans lequel elles apparaissent.",
    "macro_type"                => "Type de macro",
    "macro_type_desc"           => "Il y a trois types de macros disponibles. Les macros manuelles ne peuvent être exécutées qu'à partir de la vue ou de la grille du billet, les macros automatiques s'exécutent sur les tickets non résolus toutes les heures, et les macros hook s'exécutent sur des événements spécifiques du ticket. Les macros automatiques et les macros hook peuvent également être configurées pour ne s'exécuter que dans le cadre d'horaires spécifiques. Les actions d'une macro hook ne déclencheront pas d'autres macros hook pour éviter le risque de boucles.",
    "macro_run_at_most"         => "Lancer le plus possible",
    "macro_run_times"           => "times", // As in '5 times'
    "macro_run_at_most_desc"    => "Limiter le nombre de fois qu'une macro automatique peut être exécutée sur un seul billet, laisser vide pour la laisser s'exécuter un nombre illimité de fois.",
    "macro_events_desc"         => "Sélectionnez un ou plusieurs événements sur lesquels la macro doit s'exécuter. Les conditions définies ci-dessous seront vérifiées avant l'exécution de la macro..",
    "macro_schedules_desc"      => "Par défaut, la macro fonctionnera 24 heures sur 24 et 7 jours sur 7, mais vous pouvez sélectionner un ou plusieurs horaires de service d'assistance afin que la macro ne soit active que pendant ces périodes.",
    "macro_condition_desc"      => "Définissez les conditions pour lesquelles cette macro sera disponible pour les billets. Par défaut, sans conditions, elle s'appliquera à tous les tickets. Au moins une condition doit être définie pour les macros automatiques..",
    "add_remove_headers"        => "Ajouter / Supprimer les en-tête",
    "webhook_merge_fields"      => "Les champs fusionnés peuvent être utiliser dans l'URL, <a href=\"https://docs.supportpal.com/current/Merge+Fields\">en savoir plus</a>.",
    "webhook_ticket_required"   => "Le billet doit exister pour que cette fonctionnalité puisse marcher.",
    "not_permitted"             => "Désolé, vous n'avez pas la permission de visionner le(s) billet(s). Veuillez contacter votre administrateur s'il s'agit d'une erreur.",
    "watch"                     => "S'abonner",
    "unwatch"                   => "Annuler l'abonnement",
    "watching"                  => "Abonné",
    "internal_ticket"           => "Billet interne|Billets internes",

    /*
     * 2.4.1
     */
    "downloading"               => "Téléchargement en cours...",
    "downloading_desc"          => "Si le téléchargement ne commence pas automatiquement sous quelques secondes, veuillez <a href=':href'>cliquer ici</a> pour démarrer le téléchargement manuellement.",

    /*
     * 2.5.0
     */
    "belonging_to"              => "(Appartient à :name)",
    "block_user"                => "Bloquer l'utilisateur",
    "merge_tickets"             => "Fusionner les billets",

    /*
     * 2.6.0
     */
    "follow_ups"                => "Suivis",
    "follow_up_multiple_active" => "Plusieurs <a class='view-followup' style='text-decoration: underline;'>suivis</a> sont actifs sur ce billet, le prochain sera <strong>:time</strong>.",
    "follow_up_no_actions"      => "Le suivi n'a pas d'action paramétrée, veuillez confirmer si vous souhaitez continuer.",
    "status_after_running"      => "Statut après démarrage",
    "older_messages"            => ":count anciens messages",
    "holiday_single_day"        => "Jour unique",
    "holiday_date_range"        => "Plage de dates",

    /*
     * 3.0.0
     */
    "merge_tickets_into"        => "Selectionnez le billet à fusionner",
    "im_not_sure"               => "Je ne suis pas sûr",
    "auto_reply_detected"       => "Réponse automatique détectée - Aucune notification ne sera envoyée à l'utilisateur.",
    "cc_desc"                   => "Vous pouvez mettre en CC d'autres personnes sur ce billet en entrant leurs adresses courriel ici.",

    /*
     * 3.2.0
     */
    "drafting_message"          => "<strong>:name</strong> est en train d'écrire un message",

    /*
     * 3.3.0
     */
    "email_setup_manually"      => "Paramétrer manuellement",
    "unresolved"                => "Non résolu",
    "resolved"                  => "Résolu",
    "manage_oauth_options"      => "Pour ajouter ou configurer les options OAuth, veuillez visiter la page <a href=\":route\">Third-Party Integrations</a>.",

    /*
     * 3.4.0
     */
    "feedback_saved"            => "Votre retour a été sauvegardé.",
    "how_was_the_help"          => "Comment avez-vous trouvé notre aide ?",
    "update_feedback"           => "Mettre à jour le retour",
    "verify_user"               => "Veuillez vérifier l'authenticité de l'utilisateur.",
    "web_channel_name"          => "Web",
    "web_channel_desc"          => "Les billets ouverts sur l'interface front-end pour les utilisateurs, ou le panneau opérateurs pour les opérateurs.",
    "email_channel_name"        => "courriel",
    "email_channel_desc"        => "Les billets ouverts par courriel.",
    "api_channel_name"          => "API",
    "api_channel_desc"          => "Les billets et réponses postés depuis l'API.",

    /*
     * 4.0.0
     */
    "on_behalf_of"              => "Ouvert au nom de",
    "reply_canned_be_posted"    => "Il n'est actuellement pas possible de répondre à ce billet. Le canal ou le compte du canal pourrait être désactivés.",

    /*
     * 4.1.0
     */
    "ticket_format_desc"        => "Can contain alphanumeric characters and special characters <code>-_.+!*,</code><br />The following variables may also be used: %S for a sequential number | %N for a random number | %L for a random letter<br />Use {number} to repeat <strong>only</strong> after %N or %L, e.g. %N{4} equates to 4 random numbers, %L{3} equates to 3 random letters<br />The following <a href='http://php.net/manual/en/function.date.php' target='_blank'>PHP Date</a> Parameters prefixed with % Y,y,m,d,z,j,g,G,h,H,i,s",
    "append_ip_address_api_desc" => "Append the user's IP address to the end of their ticket messages (requires user_ip_address data to be provided).",
    "check_spam"                => "Check Spam Rules",
    "check_spam_api_desc"       => "Block messages which match spam rules.",
    "captcha_desc"              => "When the captcha should be shown to users opening new tickets or using the track ticket feature.",

    /*
     * 5.0.0
     */
    "also_viewing"              => "<strong>:name</strong> regarde aussi ce billet.",
    "mark_as_read"              => "Mark as Read",
    "mark_as_unread"            => "Mark as Unread",
    "sla_targets"               => "SLA Target|SLA Targets",
    "sla_targets_desc"          => "Set target times that a ticket must be responded to by and resolved by per priority. The time will be counted only during business hours based on the schedule(s) chosen, decimal values can be used. Leave value blank to not set a target for that priority.",
    "first_reply_time"          => "First Reply Time",
    "next_reply_time"           => "Next Reply Time",
    "resolution_time"           => "Temps de résolution",
    "reply_due_in"              => "Reply due :time",
    "resolve_in"                => "Resolve :time",
    "paused_ago"                => "Paused :time",
    "reply_due_time"            => "Reply due time",
    "resolution_due_time"       => "Resolution due time",
    "set_reply_due_time"        => "Set reply due time",
    "set_resolution_due_time"   => "Set resolution due time",

    /*
     * 5.2.0
     */
    "block_user_desc"           => "The user will be unable to open any further tickets, and the ticket moved to the trash.",

    /*
     * 5.3.0
     */
    "reject_duplicate_emails"   => "Reject Duplicate Emails",
    "reject_duplicate_emails_desc" => "Stop emails being imported more than once, detected based on the Message-ID header.",
    "duplicate_email_detected"  => "Duplicate email that has already been imported.",

    /*
     * 5.5.0
     */
    "rate_limiting"             => "Rate Limiting",
    "max_requests"              => "Max Requests",
    "max_requests_desc"         => "Set the maximum number of requests before a user is throttled.",
    "decay_time"                => "Decay Time",
    "decay_time_desc"           => "The number of minutes until the available attempts are reset.",
    "exclude_addresses"         => "Exclude Addresses",
    "exclude_addresses_desc"    => "A list of email addresses which are excluded from rate limits.",
    "enable_throttling"         => "Enable Throttling",
    "enable_throttling_api_desc" => "Limit the number of messages user's can post within a time frame. See <a href='https://docs.supportpal.com/current/App+Configuration#Throttling' target='_blank'>Throttling configuration</a> for more details on how to adjust the limits.",
    "close_without_notify"      => "Close (without notification)",
    "lock"                      => "Lock",
    "pin"                       => "Pin",
    "unpin"                     => "Unpin",

    /*
     * 5.6.0
     */
    "copy_to_new_filter"        => "Copy to New Filter",
    "alias_support"             => "Alias Support",
    "alias_support_desc"        => "Alias support analyses the recipient addresses of incoming emails to determine which department the email should be opened in. Disabling alias support will open all emails in the department they were fetched in irrespective of the recipient addresses.",

    /*
     * 5.7.0
     */
    "run_as_operator"           => "Run As",
    "run_as_operator_desc"      => "Execute the following actions as the selected operator: \":actions\"",
    "use_ticket_print_view"     => "Please use the dedicated print view to print this ticket. You can access it by clicking the 'Print' option in the ticket view.",
    "save_feedback"             => "Save Feedback",
    "ticket_opened_notification" => "New Ticket Opened",
    "ticket_opened_notification_desc" => "Notifies you when a new user or internal ticket has been opened.",
    "user_reply_notification"   => "User Ticket Reply Posted",
    "user_reply_notification_desc" => "Notifies you when a user replies to an existing ticket.",
    "operator_reply_notification" => "Operator Ticket Reply Posted",
    "operator_reply_notification_desc" => "Notifies you when another operator replies to a ticket.",
    "operator_note_notification" => "Operator Ticket Note Posted",
    "operator_note_notification_desc" => "Notifies you when another operator posts a note on a ticket.",
    "assigned_notification"     => "Assigned to Ticket",
    "assigned_notification_desc" => "Notifies you when you are assigned to a ticket.",
    "department_changed_notification" => "Department Changed",
    "department_changed_notification_desc" => "Notifies you when a ticket changes department.",
    "mention_notification"       => "Mentioned",
    "mention_notification_desc" => "Notifies you when you are mentioned on a ticket.",
    "mark_resolved_and_post_reply" => "Mark as Resolved & Post Reply",
    "allowed_files_desc"        => "Une liste des extensions de fichiers, séparés par le caractère | , qui sont autorisés en tant que pièces jointes. Par exemple: txt|png|jpg. Pour autoriser TOUTES les pièces jointes, veuillez écrire : ?.*",

);
