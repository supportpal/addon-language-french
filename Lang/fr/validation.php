<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    "accepted"                  => "Le :attribute doit être accepté.",
    "active_url"                => "Le :attribute n'est pas une URL valied.",
    "after"                     => "Le :attribute doit être une date après :date.",
    "alpha"                     => "Le :attribute ne doit contenir que des lettres.",
    "alpha_dash"                => "Le :attribute ne peut contenir que des lettres, nombres, tirets et tirets du bas.",
    "alpha_num"                 => "Le :attribute ne peut contenir que des lettres et des nombres.",
    "array"                     => "Le :attribute doit être une liste.",
    "before"                    => "Le :attribute doit être un date avant :date.",
    "between"                   => array(
        "numeric" => "Le :attribute doit être compris entre :min et :max.",
        "file"    => "Le :attribute doit être compris entre :min et :max kilobytes.",
        "string"  => "Le :attribute doit être compris entre :min et :max caractères.",
        "array"   => "The :attribute must have between :min and :max items.",
    ),
    "boolean"                   => "Le :attribute champ doit être vrai ou faux.",
    "confirmed"                 => "Le :attribute ne correspond pas.",
    "date"                      => "Le :attribute n'est pas une date valide.",
    "date_format"               => "Le :attribute ne correspond pas au format :format.",
    "different"                 => "Le :attribute et :other doivent être différents.",
    "digits"                    => "Le :attribute doit être de :digits chiffres.",
    "digits_between"            => "Le :attribute doit être compris entre :min et :max chiffres.",
    "email"                     => "Le :attribute doit être une adresse courriel valide.",
    "exists"                    => "Le :attribute selectionné est invalide.",
    "image"                     => "Le :attribute doit être une image.",
    "in"                        => "Le :attribute selectionné est invalide.",
    "integer"                   => "Le :attribute doit être un integer.",
    "ip"                        => "Le :attribute doit être une adresse IP valide.",
    "max"                       => array(
        "numeric" => "The :attribute may not be greater than :max.",
        "file"    => "The :attribute may not be greater than :max kilobytes.",
        "string"  => "The :attribute may not be greater than :max characters.",
        "array"   => "The :attribute may not have more than :max items.",
    ),
    "mimes"                     => "Le :attribute doit être un fichier de type: :values.",
    "min"                       => array(
        "numeric" => "The :attribute must be at least :min.",
        "file"    => "The :attribute must be at least :min kilobytes.",
        "string"  => "The :attribute must be at least :min characters.",
        "array"   => "The :attribute must have at least :min items.",
    ),
    "not_in"                    => "Le :attribute selectionné est invalide.",
    "numeric"                   => "The :attribute must be a number.",
    "regex"                     => "Le format de :attribute est invalide.",
    "required"                  => "Le champ :attribute est requis.",
    "required_if"               => "Le champ :attribute est requis quand :other est égal à :value.",
    "required_with"             => "Le champ :attribute est requis quand :values est présent.",
    "required_with_all"         => "Le champ :attribute est requis quand :values est présent.",
    "required_without"          => "Le champ :attribute est requis quand :values n'est pas présent.",
    "required_without_all"      => "Le champ :attribute est requis quand aucun de :values ne sont présents.",
    "same"                      => "Le champ :attribute et :other doivent correspondre.",
    "size"                      => array(
        "numeric" => "The :attribute must be :size.",
        "file"    => "The :attribute must be :size kilobytes.",
        "string"  => "The :attribute must be :size characters.",
        "array"   => "The :attribute must contain :size items.",
    ),
    "unique"                    => "Le :attribute est déjà existant.",
    "url"                       => "Le format de :attribute est invalie.",
    "template_exists"           => "Le :attribute selectionné est invalide.",
    "is_valid_captcha"          => "Le captcha entré est invalide ou incorrect, veuillez réessayer.",
    "user_password_strength"    => "Le :attribute doit contenir: :user_password_strength.",
    "operator_password_strength" => "Le :attribute doit contenir: :operator_password_strength.",

    /*
     * 2.1.0
     */
    "logo"                      => "Le logo doit pointer vers un fichier d'image valide (Une URL directe ou un chemin d'accès au fichier).",

    /*
     * 2.2.0
     */
    "required_with_translation" => "La traduction :translation pour le champ :attribute est requise quand :values est présent.",
    "max_translation"           => "La traduction :translation pour le champ :attribute ne peut pas contenir plus de :max caractères.",
    "unique_translation"        => "La traduction :translation pour le champ :attribute existe déjà.",

    /*
     * 2.3.0
     */
    "required_translation"      => "La traduction :translation pour le champ :attribute est requise.",
    "customfield_not_cyclic"    => "Le champ ne peut pas dépendre de ses enfants.",

    /*
     * 2.3.1
     */
    "is_slug"                   => "Le slug ne peut contenir que des caractères alphanumériques. Veuillez utiliser la notation '%%' pour les caractères spéciaux.",
    "article_slug_unique"       => "Le slug existe déjà.",
    "captcha_required"          => "Le captcha est requis.",
    "ticket_number_format"      => "Le format du numéro du billet est invalide.",

    /*
     * 2.4.0
     */
    "after_or_equal"            => "La :attribute doit être une date après ou équivalent à :date.",
    "before_or_equal"           => "La :attribute doit être une date avant ou équivalent à :date.",
    "dimensions"                => "La :attribute a des dimensions invalides.",
    "distinct"                  => "Le champ :attribute a été dupliqué.",
    "file"                      => "The :attribute must be a file.",
    "filled"                    => "Le champ :attribute doit contenir une valeur.",
    "gt"                        => array(
        "numeric" => "The :attribute must be greater than :value.",
        "file"    => "The :attribute must be greater than :value kilobytes.",
        "string"  => "The :attribute must be greater than :value characters.",
        "array"   => "The :attribute must have more than :value items.",
    ),
    "gte"                       => array(
        "numeric" => "The :attribute must be greater than or equal :value.",
        "file"    => "The :attribute must be greater than or equal :value kilobytes.",
        "string"  => "The :attribute must be greater than or equal :value characters.",
        "array"   => "The :attribute must have :value items or more.",
    ),
    "in_array"                  => "Le champ :attribute n'existe pas dans :other.",
    "ipv4"                      => "Le :attribute doit être une IPV4 valide.",
    "ipv6"                      => "Le :attribute doit être une IPV6 valide.",
    "json"                      => "Le :attributedoit être une string JSON valide.",
    "lt"                        => array(
        "numeric" => "The :attribute must be less than :value.",
        "file"    => "The :attribute must be less than :value kilobytes.",
        "string"  => "The :attribute must be less than :value characters.",
        "array"   => "The :attribute must have less than :value items.",
    ),
    "lte"                       => array(
        "numeric" => "The :attribute must be less than or equal :value.",
        "file"    => "The :attribute must be less than or equal :value kilobytes.",
        "string"  => "The :attribute must be less than or equal :value characters.",
        "array"   => "The :attribute must not have more than :value items.",
    ),
    "mimetypes"                 => "Le :attribute doit être un fichier du type : :values.",
    "not_regex"                 => "Le format de :attribute est invalide.",
    "present"                   => "Le champ :attribute doit être présent.",
    "required_unless"           => "Le champ :attribute être requis, à moins que :other soit compris dans :values.",
    "string"                    => "The :attribute must be a string.",
    "timezone"                  => "Le :attribute doit être une zone valide.",
    "uploaded"                  => "L'import de :attribute a échoué.",

    /*
     * 2.5.0
     */
    "domain"                    => "Un nom de domaine ou plus sont invalide(s).",

    /*
     * 2.5.1
     */
    "valid_twig"                => "Le :attribute est invalide. Veuillez utiliser le bouton 'prévisualiser' pour voir le détail de l'erreur",

    /*
     * 3.0.0
     */
    "embed_image"               => "Le :attribute doit être un fichier du type: jpeg, png, or gif.",
    "starts_with"               => "Le :attribute doit commencer par : :values.",

    /*
     * 3.5.0
     */
    "phone"                     => "Le numéro de téléphone est invalide.",

    /*
     * 4.3.0
     */
    "is_invalid"                => "The :attribute is invalid.",

    /*
     * 5.0.0
     */
    "current_password"           => "The password is incorrect.",
    "department_email_per_brand" => "An email account must exist for each brand assigned to this department.",
    "department_has_a_priority"  => "Department(s) :departments are public and must be assigned to at least one priority.",

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    "custom" => array(
        "roles.*" => array(
            "exists" => "The selected role is invalid.",
        ),
        "category.*.type" => array(
            "required" => "One or more self-service types must be selected.",
        ),
        "category.*.categories" => array(
            "required" => "One or more categories are required when a self-service type has been selected.",
            "exists"   => "One or more of the selected categories is invalid.",
        ),
        "brand.*" => array(
            "exists" => "The selected brand is invalid.",
        ),
    ),

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as Email Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    "attributes" => array(),

);
