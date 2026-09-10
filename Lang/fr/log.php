<?php

return array(

    // Standard messages
    "item_created"                      => "Crée :item :rel.",
    "item_updated"                      => "Mise à jour :item :rel.",
    "item_deleted"                      => "Supprimé :item :rel.",

    // Custom messages
    "ip_ban_created"                    => "Crée nouveau interdiction pour IP :rel.",
    "ip_ban_updated"                    => "Mise à jour de l'interdiction pour on IP :rel.",
    "ip_ban_deleted"                    => "Interdiction supprimée pour IP :rel.",
    "banned_ip_on_login"                => "Interdiction pour IP :rel pour 15 minutes.",

    "ip_whitelist_created"              => "IP :rel ajouté à la liste blanche.",
    "ip_whitelist_updated"              => "Mise à jour IP :rel de la liste blanche",
    "ip_whitelist_deleted"              => "IP :rel supprimée de la liste de blanche",

    "system_cleanup"                    => "Exécuter nettoyage du système pour :rel.",

    "api_failed_login"                  => "IP :rel échec d'authentification vers API.",

    "user_successful_login"             => "Connecté au système de billeterie.",
    "user_failed_login"                 => "Échec d'authentification.",
    "user_successful_logout"            => "Deconnecté du système de billeterie.",

    "user_registered"                   => "Compte enregistré.",
    "user_confirmed"                    => "Compte confirmé.",
    "user_password_set"                 => "Définissez un mot de passe pour le compte.",
    "user_password_reset"               => "Re-définissez un mot de passe pour leur compte.",

    "user_added_to_organisation"        => "Utilisateur :rel ajouté à l'organisation :new_value.",
    "user_removed_from_organisation"    => "Utilisateur :rel enlevé à l'organisation :old_value.",
    "user_profile_updated"              => "Mise à jour du compte utilisateur.",
    "user_left_organisation"            => "L'utilisateur a quitté l'organisation :rel.",
    "user_organisation_emptied"         => "Tous les clients enlevés de l'organisation :rel.",
    "user_organisation_updated"         => ":rel's niveau d'accès de l'organisation a changé de :old_value en :new_value.",
    "organisation_membership_updated"   => "Mise à jour adhésion utilisateur à l'organisation :rel.",
    "organisation_profile_updated"      => "Profil de l'organisation :rel mis à jour.",
    "organisation_owner_updated"        => "Possession de l'organisation transféré de :rel en :new_value.",

    "mass_email_queued"                 => " :new_value e-mails dans file d'attente en lots à envoyer.",
    "mass_email_sent"                   => " :new_value e-mails envoyés dans la file d'attente.",

    "email_queue_deleted"               => "E-mail en queue supprimé à :rel.",

    "scheduled_task_run"                => "Tâche planifiée :rel a été exécutée manuellement.",

    "selfservice_article_upvoted"       => "Article :rel noté positivement.",
    "selfservice_article_downvoted"     => "Article :rel noté négativement.",
    "selfservice_comment_posted"        => "Nouveau :rel posté.",
    "selfservice_comment_upvoted"       => ":rel up-voté, passant de :old_value à :new_value.",
    "selfservice_comment_downvoted"     => ":rel down-voté passant :old_value à :new_value.",

    "ticket_opened"                     => "Nouveau ticket ouvert #:rel.",
    "ticket_opened_on_behalf"           => "Nouveau ticket ouvert #:rel de la part :new_value.",
    "ticket_opened_email"               => "Nouveau ticket crée via email importé #:rel.",

    "ticket_message_reply"              => "Nouvelle réponse posté sur ticket #:rel.",
    "ticket_message_note"               => "Nouvelle note posté sur ticket #:rel.",
    "ticket_message_deleted"            => "message supprimé sur ticket #:rel.",

    "ticket_user_updated"               => "Utilisateur mis à jour sur ticket #:rel de :old_value à :new_value.",
    "ticket_subject_updated"            => "Sujet mis à jour sur ticket #:rel.",
    "ticket_department_updated"         => "Département mis à jour sur ticket #:rel de :old_value à :new_value.",
    "ticket_status_updated"             => "Statut mis à jour sur ticket #:rel de :old_value à :new_value.",
    "ticket_priority_updated"           => "Priorité mise à jour sur ticket #:rel de :old_value à :new_value.",
    "ticket_tag_added"                  => "Tag ajouté :new_value sur ticket #:rel.",
    "ticket_tag_updated"                => "Mise à jour tags sur ticket #:rel.",
    "ticket_tag_removed"                => "Tag enlevé :new_value du ticket #:rel.",
    "ticket_slaplan_updated"            => "Mise à jour Plan SLA sur ticket #:rel de :old_value à :new_value.",
    "ticket_duetime_updated"            => "Echéance mise à jour sur ticket #:rel à :new_value.",
    "ticket_customfield_updated"        => "Mise à jour champs peronnalisé sur ticket #:rel.",
    "ticket_converted_user"             => "Ticket interne #:rel converti en ticket utilisateur.",
    "ticket_converted_internal"         => "Ticket utilisateur #:rel converti en ticket interne.",

    "ticket_assigned_operator"          => ":new_value attribué sur ticket #:rel.",
    "ticket_unassigned_operator"        => ":new_value des-attribué du ticket #:rel.",
    "ticket_assigned_self"              => "Attribué soi-même le ticket #:rel.",
    "ticket_assigned_updated"           => "Mise à jour des collaborateurs attribués du ticket #:rel.",

    "ticket_locked"                     => "Ticket #:rel verrouillé.",
    "ticket_unlocked"                   => "Ticket #:rel debloqué",
    "ticket_locked_reply"               => "Réponse n'a pas pu être ajouté au ticket verrouillé #:rel.",

    "ticket_unmerged"                   => "Ticket :rel a été defusionné.",

    "ticket_user_blocked"               => "E-mail verrouillé :new_value (par client utilisateur sur ticket #:rel).",

    "ticket_closed"                     => "Ticket #:rel a été fermé.",
    "ticket_inactive_closed"            => "Ticket non actif fermé #:rel du statut :old_value.",
    "ticket_awaiting_response"          => "E-mail en attente d'une réponse envoyé sur ticket #:rel.",

    "ticket_split_from"                 => "Scission des messages de l'ancien ticket #:rel en nouveau ticket #:new_value.",
    "ticket_split_to"                   => "Scission des messages de l'ancien ticket #:old_value en nouveau ticket #:rel.",

    "ticket_attachment_saved"           => "Pièce jointe ajoutée au ticket #:rel.",
    "ticket_attachment_deleted"         => "Pièce jointe retirée du ticket #:rel.",

    "ticket_throttled"                  => "Rejected new ticket from :rel due to throttling.",

    /*
     * 2.0.3
     */
    "selfservice_attachment_saved"      => "Pièce jointe ajoutée ':new_value' à l'article :rel.",
    "selfservice_attachment_deleted"    => "Pointe jointe retirée ':new_value' de l'article :rel.",
    "ticket_unassigned_self"            => "Auto retiré du ticket #:rel.",

    /*
     * 2.1.0
     */
    "ticket_brand_disabled_reply"       => "La réponse n'a pas pu être ajoutée car le ticket est lié à une marque désactivée: #:rel",
    "personal_signatures_updated"       => "Signatures personnelles mises à jour.",
    "check_email_failed"                => "Erreur: Echec du téléchargement de l'e-mail du compte :old_value: ':rel'.",
    "invalid_department_brand"          => "Echec du paramétrage du département ':new_value' sur le ticket #:rel, le département n'appartient pas à la marque du ticket",

    /*
     * 2.1.2
     */
    "sent_email_to"                     => "Envoie un e-mail avc le sujet':extra_rel1' à :rel.",
    "sent_template_email_to"            => "Envoi de ':extra_rel1' e-mail à :rel.",
    "sent_ticket_email_to_user"         => "Envoi de ':extra_rel1' e-mail à l'utilisateur pour le ticket #:rel.",
    "sent_email_to_operators"           => "Envoi de ':extra_rel1' e-mail aux opérateurs.",
    "sent_ticket_email_to_operators"    => "Envoi de ':extra_rel1' e-mail aux opérateurs pour le ticket #:rel.",
    "sent_email_to_operator_group"      => "Envoi de ':extra_rel1' e-mail au groupe d'opérateurs ':new_value' pour le ticket #:rel.",
    "ticket_macro_applied"              => "La macro ':new_value' a été lancée sur le ticket #:rel.",
    "ticket_macro_automatic"            => "La macro ':new_value' a été lancée automatiquement sur le ticket #:rel.",
    "email_template_not_found"          => "E-mail template ':new_value' non trouvé. Envoi de l'email avorté.",
    "private_conversation_started"      => "Conversation démarrée avec :rel.",
    "private_message_sent"              => "Message envoyé à :rel.",
    "not_imported_replies_disabled"     => "Un email :extra_rel1 a été reçu pour le ticket #:rel, mais n'a pas été importé car les réponses du ticket sont désactivées.",
    "not_imported_ticket_locked"        => "Un email :extra_rel1 a été reçu pour le ticket #:rel, mais n'a pas été importé car le ticket est verrouillé.",

    /*
     * 2.2.0
     */
    "ticket_user_added_to_group"        => "Utilisateur du ticket a été ajouté au groupe d'utilisateur :new_value.",
    "ticket_user_removed_from_group"    => "Utilisateur du ticket a été supprimé du groupe d'utilisateur :old_value.",
    "email_on_behalf"                   => "Transfert de :extra_rel2 de la part de ':extra_rel1' dans le ticket #:rel.",

    /*
     * 2.3.0
     */
    "registered_users_only"             => "Envoi de ':extra_rel1' e-mail à :new_value, le département n'accepte pas les utilisateurs non enregistrés.",
    "deleted_user"                      => ":item supprimé ':rel' avec l'e-mail ':email_address' (ID :user_id).",
    "linked_ticket"                     => "Ticket #:rel lié avec le ticket :extra_rel1.",
    "unlinked_ticket"                   => "Ticket #:rel délié avec le ticket :extra_rel1.",
    "email_queue_attachment_deleted"    => "Pièce jointe supprimée :  ':old_value' des e-mail en queue ':rel'.",
    "forward_ticket_email"              => "ticket #:rel transféré en third-party, voir ':extra_rel1' e-mail.",

    /*
     * 2.3.1
     */
    "selfservice_comment_updated"       => "Mise à jour de :rel par :extra_rel1.",
    "selfservice_comment_status"        => "Statut changé de :rel par :extra_rel1 de :old_value à :new_value.",
    "selfservice_comment_deleted"       => "Commentaire supprimé par :extra_rel1.",
    "ticket_message_posted"             => "Nouveau :extra_rel1 sur le ticket #:rel.",
    "ticket_message_edited"             => "Mise à jour de :extra_rel1 sur le ticket #:rel.",
    "email_send_failed"                 => "Echec de l'envoi de l'e-mail.",
    "ticket_brand_updated"              => "Marque mise à jour sur le ticket #:rel de :old_value à :new_value.",
    "export_scheduled"                  => "L'export de l'utilisateur :rel a été prévu.",
    "deleted_inactive_records"          => "Automatically deleted :old_value inactive :rel.",
    "deleted_old_records"               => "Automatically deleted old :rel records.",
    "sent_email_to_user_group"          => "Queued email to user group ':new_value' for ticket #:rel.",

    /*
     * 2.4.0
     */
    "ticket_watching"                   => "Assigné au ticket #:rel.",
    "ticket_unwatching"                 => "N'est plus assigné au ticket #:rel.",
    "ticket_watch_operator"             => "Opérateur :new_value assigné au ticket #:rel.",
    "ticket_unwatch_operator"           => "Opérateur :new_value n'est plus assigné au ticket #:rel.",

    /*
     * 2.5.0
     */
    "marked_user_as_confirmed"          => "Adresse e-mail de l'utilisateur :rel confirmée.",
    "ticket_department_email_updated"   => "E-mail du département du ticket #:rel a été mis à jour : De :old_value à :new_value.",
    "ticket_watching_updated"           => "Opérateurs assignés au ticket #:rel mis à jour.",
    "ticket_deleted"                    => "Ticket ':old_value' définitivement supprimé (#:rel).",
    "ticket_trashed"                    => "Tcket #:rel déplacé à la corbeille.",
    "ticket_restored"                   => "Ticket #:rel restauré de la corbeille.",
    "emptied_ticket_trash"              => "La corbeille a été automatiquement vidée de ':old_value' enregistrement.",

    /*
     * 2.6.0
     */
    "ticket_followup_set"               => "Un suivi a été défini sur le ticket #:rel.",
    "ticket_followup_updated"           => "Un suivi sur le ticket #:rel a été mis à jour.",
    "ticket_followup_deleted"           => "Un suivi sur le ticket #:rel a été supprimé.",

    /*
     * 3.0.0
     */
    "selfservice_article_neutral"       => "Article :rel noté neutralement.",

    /*
     * 4.1.0
     */
    "user_merged"                       => "User :old_value merged into user :rel.",
    "user_organisation_merged"          => "User organisation :old_value merged into user organisation :rel.",

    /*
     * 4.2.0
     */
    "operator_reply_templates_updated"  => "Updated :rel's reply templates.",

    /*
     * 5.0.0
     */
    "addon_activated"                   => "Activated :item (add-on) :rel.",
    "addon_deactivated"                 => "Deactivated :item (add-on) :rel.",
    "addon_installed"                   => "Installed :item (add-on) :rel.",
    "addon_uninstalled"                 => "Uninstalled :item (add-on) :rel.",
    "addon_cancelled"                   => "Cancelled :item (add-on) :rel.",
    "addon_updated"                     => "Updated :item (add-on) :rel to version :new_value.",
    "ticket_reply_duetime_updated"      => "Updated the reply due time on ticket #:rel to :new_value.",
    "ticket_resolve_duetime_updated"    => "Updated the resolve due time on ticket #:rel to :new_value.",
    "ticket_duetime_unset"              => "Echéance du ticket #:rel annulée.",
    "ticket_reply_duetime_unset"        => "Unset the reply due time on ticket #:rel.",
    "ticket_resolve_duetime_unset"      => "Unset the resolve due time on ticket #:rel.",
    "ticket_duetime_paused"             => "Mettre en pause l'échéance sur ticket #:rel jusqu'à prochaine réponse de l'utilisateur.",
    "ticket_duetime_unpaused"           => "Unpaused the due times on ticket #:rel.",
    "user_email_verified"               => "Verified their email address.",
    "marked_email_as_verified"          => "Verified ownership of email address on behalf of user :rel.",
    "user_invited_to_organisation"      => "User :rel invited to organisation :extra_rel1.",
    "user_accepted_organisation_invite" => "User :rel accepted invitation to organisation :extra_rel1.",
    "user_additional_email_verified"    => "Verified an additional email address (:new_value).",
    "export_generated"                  => "L'export :new_value de l'utilisateur :rel a été généré et sauvegardé sur le système.",
    "export_deleted"                    => "L'export :old_value de l'utilisateur :rel a été supprimé du système.",
    "user_export_generated"             => "Export :new_value of user :rel has been generated and stored on the system.",

    /*
     * 5.0.2
     */
    "personal_reply_templates_updated"  => "Updated their reply templates.",

    /*
     * 5.1.0
     */
    "ticket_deleted_attachment"         => "Deleted attachment ':old_value' from ticket #:rel.",
    "user_added_to_group"               => "User :rel added to user group :new_value.",
    "user_removed_from_group"           => "User :rel removed from user group :old_value.",
    "operator_added_to_group"           => "Operator :rel added to operator group :new_value.",
    "operator_removed_from_group"       => "Operator :rel removed from operator group :old_value.",

    /*
     * 5.2.0
     */
    "background_job_deleted"            => "Deleted background job :rel.",
    "background_job_retried"            => "Retried background job :rel.",

    /*
     * 5.3.0
     */
    "operator_password_set"             => "Set a password for their account.",
    "password_reset_sent"               => "Reset password link sent to :rel.",

    /*
     * 5.4.0
     */
    "ticket_feedback_rating"            => "Rated ticket #:rel as :extra_rel1.", // Rated ticket #123 as 'general.good / general.bad / general.neutral'.
    "ticket_feedback_saved"             => "Saved :extra_rel1 on ticket #:rel.", // Saved (lowercase ticket.feedback) on ticket #123
    "selfservice_feedback_saved"        => "Saved :extra_rel1 on article :rel.", // Saved (lowercase ticket.feedback) on article 'Foo bar'

    /*
     * 5.5.0
     */
    "ticket_pinned_message"             => "Pinned :extra_rel1 on ticket #:rel.", // Pinned message (lowercase general.message) on ticket #123.
    "ticket_unpinned_message"           => "Unpinned :extra_rel1 on ticket #:rel.", // Unpinned message (lowercase general.message) on ticket #123.

    /*
     * 5.7.0
     */
    "operator_notifications_updated"    => "Updated :rel's notification preferences.", // Updated Joe Blog's notification preferences.

    /*
     * 6.0.0
     */
    "ticket_merged"                     => "Ticket(s) :new_value fusionné(s) en ticket #:rel.",
    "ticket_added_cc"                   => "Email(s) :new_value ajouté à la liste de CC du ticket #:rel.",
    "ticket_removed_cc"                 => "Email(s) :old_value supprimé de la liste de CC du ticket #:rel.",
    "ticket_slaplan_set"  => "Updated the SLA plan on ticket #:rel from None to :new_value.",
    "ticket_slaplan_removed"  => "Updated the SLA plan on ticket #:rel from :old_value to None.",
    "sent_feedback_email_to_operators"  => "Sent feedback received email to operators for ticket #:rel.",
    "ticket_added_cc_multiple"          => "Added :cc_emails to CC address list for ticket #:rel.",
    "timeline_ticket_added_cc_multiple" => ":user_name added CC :cc_emails",
    "ticket_removed_cc_multiple"        => "Removed :cc_emails from CC address list for #:rel.",
    "timeline_ticket_removed_cc_multiple" => ":user_name removed CC :cc_emails",
    "ticket_assigned_operators_multiple" => "Assigned :operators to ticket #:rel.",
    "timeline_ticket_assigned_operators_multiple" => ":user_name assigned :operators",
    "ticket_unassigned_operators_multiple" => "Unassigned :operators from ticket #:rel.",
    "timeline_ticket_unassigned_operators_multiple" => ":user_name unassigned :operators",
    "ticket_watch_operator_multiple"    => "Set :operators to watch ticket #:rel.",
    "timeline_ticket_watch_operator_multiple" => ":user_name added :operators to watching",
    "ticket_unwatch_operator_multiple"  => "Unset :operators from watching ticket #:rel.",
    "timeline_ticket_unwatch_operator_multiple"  => ":user_name stopped :operators from watching",
    "ticket_tag_added_single"           => "Added tag :formatted_items to ticket #:rel.",
    "timeline_ticket_tag_added_single"  => ":user_name added tag :formatted_items",
    "ticket_tag_removed_single"         => "Removed tag :formatted_items from ticket #:rel.",
    "timeline_ticket_tag_removed_single" => ":user_name removed tag :formatted_items",
    "ticket_tag_added_multiple"         => "Added tags :formatted_items to ticket #:rel.",
    "timeline_ticket_tag_added_multiple" => ":user_name added :formatted_items tags",
    "ticket_tag_removed_multiple"       => "Removed tags :formatted_items from ticket #:rel.",
    "timeline_ticket_tag_removed_multiple" => ":user_name removed :formatted_items tags",
    "ticket_merged_multiple"            => "Merged :ticket_numbers into ticket #:rel.",
    "timeline_ticket_merged_multiple"   => ":user_name merged :ticket_numbers into this ticket",
    "linked_tickets_multiple"           => "Linked ticket #:rel with tickets :extra_rel*.",
    "timeline_linked_tickets_multiple"  => ":user_name linked with :extra_rel*",
    "unlinked_tickets_multiple"         => "Unlinked ticket #:rel from tickets :extra_rel*.",
    "timeline_unlinked_tickets_multiple" => ":user_name unlinked tickets :extra_rel*",
    "ticket_macro_automatic_multiple"   => "The macros :macros automatically ran on ticket #:rel.",
    "timeline_ticket_macro_automatic_multiple" => ":user_name ran macros :macros",
    "ticket_customfield_updated_individual" => "Updated custom field ':field_name' on ticket #:rel.",
    "timeline_ticket_customfield_updated_individual" => ":user_name updated custom field ':field_name'",
    "timeline_ticket_opened_on_behalf"  => ":user_name opened ticket on behalf of :new_value",
    "timeline_ticket_message_deleted"   => ":user_name deleted message (:message_id) by :message_user_name",
    "timeline_ticket_user_updated"      => ":user_name changed the user from :old_value to :new_value",
    "timeline_ticket_subject_updated"   => ":user_name updated the subject <del>:old_value</del> :new_value",
    "timeline_ticket_department_updated" => ":user_name changed the department from :old_value to :new_value",
    "timeline_ticket_status_updated"    => ":user_name changed the status from :old_value to :new_value",
    "timeline_ticket_priority_updated"  => ":user_name changed the priority from :old_value to :new_value",
    "timeline_ticket_slaplan_updated"   => ":user_name changed the SLA plan from :old_value to :new_value",
    "timeline_ticket_slaplan_set"       => ":user_name set the SLA plan to :new_value.",
    "timeline_ticket_slaplan_removed"   => ":user_name removed the SLA plan (from :old_value).",
    "timeline_ticket_converted_user"    => ":user_name converted from internal ticket to user ticket",
    "timeline_ticket_converted_internal" => ":user_name converted from user ticket to internal ticket",
    "timeline_ticket_assigned_self"     => ":user_name self-assigned",
    "timeline_ticket_locked"            => ":user_name locked the ticket",
    "timeline_ticket_unlocked"          => ":user_name unlocked the ticket",
    "timeline_ticket_unmerged"          => ":user_name unmerged",
    "timeline_ticket_user_blocked"      => ":user_name blocked email :new_value",
    "timeline_ticket_closed"            => ":user_name closed the ticket",
    "timeline_ticket_inactive_closed"   => ":user_name closed due to inactivity",
    "timeline_ticket_awaiting_response" => ":user_name sent waiting for response email to user",
    "timeline_ticket_split_from"        => ":user_name slit messages into new ticket #:new_value",
    "timeline_ticket_split_to"          => ":user_name split messages from #:old_value",
    "timeline_ticket_attachment_deleted" => ":user_name deleted attachment (:attachment_id) :attachment_name from <a href='#:message_id'>message</a>",
    "timeline_ticket_unassigned_self"   => ":user_name removed their assignment",
    "timeline_ticket_macro_applied"     => ":user_name ran macro ':new_value'",
    "timeline_ticket_macro_automatic"   => ":user_name ran macro ':new_value'",
    "timeline_ticket_message_edited"    => ":user_name edited a :extra_rel1",
    "timeline_ticket_brand_updated"     => ":user_name changed the brand from :old_value to :new_value",
    "timeline_ticket_watching"          => ":user_name started watching the ticket",
    "timeline_ticket_unwatching"        => ":user_name stopped watching the ticket",
    "timeline_ticket_department_email_updated" => ":user_name changed the department email from :old_value to :new_value",
    "timeline_ticket_trashed"           => ":user_name moved to the trash",
    "timeline_ticket_restored"          => ":user_name restored from the trash",
    "timeline_ticket_followup_set"      => ":user_name created a follow up",
    "timeline_ticket_followup_updated"  => ":user_name updated a follow up",
    "timeline_ticket_followup_deleted"  => ":user_name deleted a follow up",
    "timeline_ticket_reply_duetime_updated" => ":user_name changed the reply due time to :new_value",
    "timeline_ticket_resolve_duetime_updated" => ":user_name changed the resolve due time to :new_value",
    "timeline_ticket_reply_duetime_unset" => ":user_name cleared the reply due time",
    "timeline_ticket_resolve_duetime_unset" => ":user_name cleared the resolve due time",
    "timeline_ticket_duetime_paused"    => ":user_name paused the due times",
    "timeline_ticket_duetime_unpaused"  => ":user_name unpaused the due times",
    "timeline_ticket_feedback_rating"   => ":user_name set the feedback rating to :extra_rel1", // Rated as 'general.good / general.bad / general.neutral'
    "timeline_ticket_feedback_saved"    => ":user_name saved :extra_rel1", // Saved (lowercase ticket.feedback)
    "timeline_ticket_pinned_message"    => ":user_name pinned a <a href='#:message_id'>message</a>",
    "timeline_ticket_unpinned_message"  => ":user_name unpinned a <a href='#:message_id'>message</a>",
    "ticket_attachment_rejected"        => "Attachment(s) :files blocked from ticket #:rel due to invalid file type.",
    "timeline_ticket_attachment_rejected" => "Attachment(s) :files blocked due to invalid file type",

    /*
     * 6.1.0
     */
    "system_update_started"             => "Started system update to version :rel.",

);
