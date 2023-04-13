<?php

/**
 * English translation strings for generic Twitch-related errors.
 */
return [
    /**
     * Related to chat
     */
    'no_chat_rules' => ':channel no tiene reglas de chat establecidas.',
    'error_occurred_chat_clusters' => 'Ocurrió un error al recuperar los clusters de chat.',
    'error_retrieving_chat_users' => 'Ocurrió un error al recuperar los usuarios para el canal: ',
    'empty_chat_user_list' => 'La lista de usuarios está vacía.',
    'channel_missing_subemotes' => 'Este canal no tiene emoticonos de suscriptor.',

    /**
     * Related to followers
     */
    'cannot_follow_self' => 'Un usuario no puede seguirse a sí mismo.',
    'error_followers' => 'Ocurrió un error al recuperar los seguidores de :channel',
    'follow_not_found' => ':user no sigue a :channel',
    'no_followers' => 'No tienes seguidores :(',
    'invalid_api_data' => 'La API de Twitch devolvió datos no válidos.',
    'unable_get_following' => 'No se pudo obtener los datos de seguimiento para el usuario especificado.',
    'end_following_list' => 'Fin de la lista de usuarios seguidos.',

    /**
     * Help articles
     */
    'help_articles' => 'Artículos de ayuda',
    'help_available_list' => 'Lista de artículos de ayuda disponibles con títulos: :url',
    'help_no_results' => 'No se encontraron resultados.',

    /**
     * Media (highlights, VODs, uploads)
     */
    'no_highlights' => ':channel no tiene highlights guardados.',
    'no_uploads' => ':channel no ha subido videos.',
    'no_vods' => ':channel no tiene VODs disponibles.',
    'invalid_limit_parameter' => 'Se especificó un parámetro "límite" no válido. Mínimo :min, máximo :max.',
    'invalid_offset_parameter' => 'Se especificó un parámetro "desplazamiento" no válido. Mínimo :min.',
    'end_of_video_list' => '¡Se ha alcanzado el final de la lista de videos!',
    'invalid_minutes_parameter' => 'Se especificó una cantidad de minutos no válida: :min',
    'vodreplay_minutes_too_high' => 'Los minutos (:min) especificados son más largos que la duración del VOD.',


    /**
     * Hosting
     */
    'no_hosts' => 'Actualmente nadie está alojando a :channel',
    'multiple_hosts' => ':channels y :amount más|:channels y :amount más',

    /**
     * Multi
     */
    'multi_invalid_service' => 'Servicio no válido especificado - Servicios disponibles: :services',
    'multi_empty_list' => 'Debes especificar qué transmisiones crear en un enlace múltiple (lista separada por espacios).',

    /**
     * Stream
     */
    'stream_offline' => ':channel está offline',
    'stream_get_error' => 'No se pudo obtener la información de la transmisión de :channel',

    /**
     * Subscriber-related stuff
     */
    'sub_invalid_action' => 'Acción no válida especificada. Acciones disponibles: :actions',
    'sub_needs_authentication' => '%s necesita autenticarse para usar %sSub (%s suscriptor): %s',
    'chatter_needs_authentication' => '%s necesita autenticarse para usar %sChatter (%s usuario de chat): %s',
    'chatter_count_too_high' => 'La cantidad especificada (%d) es mayor que la cantidad de usuarios de chat (%d)',
    'sub_count_too_high' => 'La cantidad especificada (%d) es mayor que la cantidad de suscriptores (%d)',
    'subage_needs_authentication' => '%s necesita autenticarse para usar subage (Duración de la suscripción): %s',
    'subcount_missing_channel' => 'Usa ?channel=CHANNEL_NAME o /twitch/subcount/CHANNEL_NAME para obtener el recuento de suscriptores.',
    'subcount_needs_authentication' => '%s necesita autenticarse para usar subcount: %s',
    'subcount_generic_error' => 'No se pudo obtener el recuento de suscriptores para el canal: :channel',
    'subpoints_missing_channel' => 'Por favor, especifica un nombre de canal al final de la URL - Por ejemplo: /twitch/subpoints/CHANNEL_NAME',
    'subpoints_needs_authentication' => '%s necesita autenticarse para usar subpoints: %s',
    'subpoints_generic_error' => 'No se pudo obtener los puntos de suscriptor para el canal: :channel',

    /**
     * Authentication
     */
    'auth_missing_scopes' => 'Al token de OAuth le faltan los ámbitos requeridos:',

    /**
     * Teams
     */
    'teams_missing_identifier' => 'El identificador del equipo está vacío',

    /**
     * User
     */
    'user_not_found' => 'Usuario no encontrado: :user',

    /**
     * API deprecation
     */
    'api_removed_by_twitch' => '[Deprecated] Esta API ha sido eliminada por Twitch.',
];
